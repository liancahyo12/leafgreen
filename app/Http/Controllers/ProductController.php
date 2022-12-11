<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\product;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index()
    {
        return view('boilerplate::product.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('boilerplate::product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreproductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
                'nama' => 'required',
                'foto'  => 'required',
                'icon'  => 'required',
                'content'  => 'required',
        ]);

        $input['nama'] = $request->nama;
        $input['icon'] = $request->icon;
        $input['foto'] = $request->foto;
        $input['slug'] = Str::slug($request->nama);
        $input['content'] = $request->content;

        $product = product::create($input);

        return redirect()->route('boilerplate.products')
                            ->with('growl', [__('Produk berhasil ditambah'), 'success']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = product::where('id', $id)->first();
        return view('boilerplate::product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateproductRequest  $request
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
                'nama' => 'required',
                'foto'  => 'required',
                'icon'  => 'required',
                'content'  => 'required',
        ]);

        $input = product::where('id', $id)->first();

        $input['nama'] = $request->nama;
        $input['icon'] = $request->icon;
        $input['foto'] = $request->foto;
        $input['slug'] = Str::slug($request->nama);
        $input['content'] = $request->content;

        $product = $input->save();

        return redirect()->route('boilerplate.products')
                            ->with('growl', [__('Produk berhasil ditambah'), 'success']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $send = product::where('id', $id)->first();
        if ($send->send_status==0) {
            $send['status'] = 0;
            $dele = $send->save();
        }else {
            return redirect()->route('boilerplate.products')
                            ->with('growl', [__('Tidak dapat dihapus'), 'danger']);
        }
    }
}
