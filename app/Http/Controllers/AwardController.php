<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreawardRequest;
use App\Http\Requests\UpdateawardRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\award;

class AwardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('boilerplate::award.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $award = award::where('status', 1)->count();
        if ($award < 10) {
            return view('boilerplate::award.create');
        }
        else {
            return redirect()->route('boilerplate.awards')
                            ->with('growl', [__('Sudah mencapai batas maksimum award'), 'danger']);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreawardRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
                'nama' => 'required',
                'description'  => 'required',
                'file'  => 'required',
        ]);

        $input['nama'] = $request->nama;
        $input['description'] = $request->description;
        $input['file'] = $request->file;

        $sosmed = award::create($input);

        return redirect()->route('boilerplate.awards')
                            ->with('growl', [__('award berhasil ditambah'), 'success']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\award  $award
     * @return \Illuminate\Http\Response
     */
    public function show(award $award)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\award  $award
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $award = award::where('id', $id)->first();
        return view('boilerplate::award.edit', compact('award'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateawardRequest  $request
     * @param  \App\Models\award  $award
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
                'nama' => 'required',
                'description'  => 'required',
                'file'  => 'required',
        ]);

        $input = award::where('id', $id)->first();

        $input['nama'] = $request->nama;
        $input['description'] = $request->description;
        $input['file'] = $request->file;

        $award = $input->save();

        return redirect()->route('boilerplate.awards')
                            ->with('growl', [__('awards berhasil ditambah'), 'success']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\award  $award
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $send = award::where('id', $id)->first();
        if ($send->send_status==0) {
            $send['status'] = 0;
            $dele = $send->save();
        }else {
            return redirect()->route('boilerplate.awards')
                            ->with('growl', [__('Tidak dapat dihapus'), 'danger']);
        }
    }
}
