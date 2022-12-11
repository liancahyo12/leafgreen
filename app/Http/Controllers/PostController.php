<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;
use App\Models\Post;
use Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('boilerplate::posts.index');
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    }
    public function create()
    {
        return view('boilerplate::posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
                'title' => 'required',
                'tumbnail'  => 'required',
                'category'  => 'required',
                'post_date'  => 'required',
                'content'  => 'required',
        ]);

        $input['title'] = $request->title;
        $input['tumbnail'] = $request->tumbnail;
        $input['category'] = $request->category;
        $input['post_date'] = $request->post_date;
        $input['content'] = $request->content;
        $input['slug'] = Str::slug($request->title);
        $input['user_id'] = Auth::user()->id;
        $input['post_status'] = 2;

        $post = Post::create($input);

        return redirect()->route('boilerplate.posts')
                            ->with('growl', [__('Post berhasil dikirim'), 'success']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post;

        if (Auth::user()->hasPermission('all-post')) {
            $post = Post::where('id', $id)->first();
        }else {
            $post = Post::where([['id', '=', $id], ['user_id', '=', Auth::user()->id]])->first();
        }

        return view('boilerplate::posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePostRequest  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
                'title' => 'required',
                'tumbnail'  => 'required',
                'category'  => 'required',
                'post_date'  => 'required',
                'content'  => 'required',
        ]);

        $input = Post::where('id', $id)->first();
        $input['title'] = $request->title;
        $input['tumbnail'] = $request->tumbnail;
        $input['category'] = $request->category;
        $input['slug'] = Str::slug($request->title);
        $input['post_date'] = $request->post_date;
        $input['content'] = $request->content;

        $post = $input->save();

        return redirect()->route('boilerplate.posts')
                            ->with('growl', [__('Post berhasil diubah'), 'success']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $send = Post::where('id', $id)->first();
        if ($send->send_status==0) {
            $send['status'] = 0;
            $dele = $send->save();
        }else {
            return redirect()->route('boilerplate.posts')
                            ->with('growl', [__('Tidak dapat dihapus'), 'danger']);
        }
    }

    public function get_tumb($id)
    {
        
    }
}
