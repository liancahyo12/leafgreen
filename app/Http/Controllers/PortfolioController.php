<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreportfolioRequest;
use App\Http\Requests\UpdateportfolioRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\portfolio;
use Illuminate\Support\Str;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('boilerplate::portfolio.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('boilerplate::portfolio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreportfolioRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
                'judul' => 'required',
                'sub_judul'  => 'required',
                'foto'  => 'required',
        ]);

        $input['judul'] = $request->judul;
        $input['sub_judul'] = $request->sub_judul;
        $input['foto'] = $request->foto;
        $input['slug'] = Str::slug($request->judul);
        $input['content'] = $request->content;

        $portfolio = portfolio::create($input);

        return redirect()->route('boilerplate.portfolios')
                            ->with('growl', [__('Portofolio berhasil ditambah'), 'success']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $portfolio = portfolio::where('id', $id)->first();
        return view('boilerplate::portfolio.edit', compact('portfolio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateportfolioRequest  $request
     * @param  \App\Models\portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
                'judul' => 'required',
                'sub_judul'  => 'required',
                'foto'  => 'required',
        ]);

        $input = portfolio::where('id', $id)->first();

        $input['judul'] = $request->judul;
        $input['sub_judul'] = $request->sub_judul;
        $input['foto'] = $request->foto;
        $input['slug'] = Str::slug($request->judul);
        $input['content'] = $request->content;

        $portfolio = $input->save();

        return redirect()->route('boilerplate.portfolios')
                            ->with('growl', [__('Portofolio berhasil ditambah'), 'success']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $send = portfolio::where('id', $id)->first();
        if ($send->send_status==0) {
            $send['status'] = 0;
            $dele = $send->save();
        }else {
            return redirect()->route('boilerplate.portfolios')
                            ->with('growl', [__('Tidak dapat dihapus'), 'danger']);
        }
    }
}
