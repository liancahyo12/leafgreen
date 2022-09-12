<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreclientRequest;
use App\Http\Requests\UpdateclientRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\client;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('boilerplate::client.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $client = client::where('status', 1)->count();
        if ($client < 10) {
            return view('boilerplate::client.create');
        }
        else {
            return redirect()->route('boilerplate.clients')
                            ->with('growl', [__('Sudah mencapai batas maksimum client'), 'danger']);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreclientRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
                'nama' => 'required',
                'logo'  => 'required',
        ]);

        $input['nama'] = $request->nama;
        $input['logo'] = $request->logo;

        $sosmed = client::create($input);

        return redirect()->route('boilerplate.clients')
                            ->with('growl', [__('Client berhasil ditambah'), 'success']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client = client::where('id', $id)->first();
        return view('boilerplate::client.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateclientRequest  $request
     * @param  \App\Models\client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
                'nama' => 'required',
                'logo'  => 'required',
        ]);

        $input = client::where('id', $id)->first();

        $input['nama'] = $request->nama;
        $input['logo'] = $request->logo;

        $client = $input->save();

        return redirect()->route('boilerplate.clients')
                            ->with('growl', [__('Clients berhasil ditambah'), 'success']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $send = client::where('id', $id)->first();
        if ($send->send_status==0) {
            $send['status'] = 0;
            $dele = $send->save();
        }else {
            return redirect()->route('boilerplate.clients')
                            ->with('growl', [__('Tidak dapat dihapus'), 'danger']);
        }
    }
}
