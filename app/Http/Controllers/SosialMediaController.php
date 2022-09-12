<?php

namespace App\Http\Controllers;

use App\Http\Requests\Storesosial_mediaRequest;
use App\Http\Requests\Updatesosial_mediaRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\sosial_media;
use App\Models\jenis_sosmed;

class SosialMediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('boilerplate::social.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sosmed = sosial_media::where('status', 1)->count();
        if ($sosmed < 4) {
            return view('boilerplate::social.create',
                [
                    'jenis_sosmed' => jenis_sosmed::where('status', 1)->get(),
                ]
            );
        }
        else {
            return redirect()->route('boilerplate.socials')
                            ->with('growl', [__('Sudah mencapai batas maksimum sosial media'), 'danger']);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Storesosial_mediaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
                'jenis_sosmed' => 'required',
                'url'  => 'required',
        ]);

        $input['jenis_sosmed_id'] = $request->jenis_sosmed;
        $input['url'] = $request->url;

        $sosmed = sosial_media::create($input);

        return redirect()->route('boilerplate.socials')
                            ->with('growl', [__('Sosial Media berhasil ditambah'), 'success']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\sosial_media  $sosial_media
     * @return \Illuminate\Http\Response
     */
    public function show(sosial_media $sosial_media)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\sosial_media  $sosial_media
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sosmed = sosial_media::where('id', $id)->first();

        return view('boilerplate::social.edit', compact('sosmed'), 
            [
                'jenis_sosmed' => jenis_sosmed::where('status', 1)->get(),
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatesosial_mediaRequest  $request
     * @param  \App\Models\sosial_media  $sosial_media
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
                'jenis_sosmed' => 'required',
                'url'  => 'required',
        ]);

        $input = sosial_media::where('id', $id)->first();

        $input['jenis_sosmed_id'] = $request->jenis_sosmed;
        $input['url'] = $request->url;

        $sosmed = $input->save();

        return redirect()->route('boilerplate.socials')
                            ->with('growl', [__('Sosial Media berhasil ditambah'), 'success']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\sosial_media  $sosial_media
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $send = sosial_media::where('id', $id)->first();
        if ($send->send_status==0) {
            $send['status'] = 0;
            $dele = $send->save();
        }else {
            return redirect()->route('boilerplate.socials')
                            ->with('growl', [__('Tidak dapat dihapus'), 'danger']);
        }
    }
}
