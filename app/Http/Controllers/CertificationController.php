<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorecertificationRequest;
use App\Http\Requests\UpdatecertificationRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\certification;

class CertificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
    {
        return view('boilerplate::certification.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $certification = certification::where('status', 1)->count();
        if ($certification < 10) {
            return view('boilerplate::certification.create');
        }
        else {
            return redirect()->route('boilerplate.certifications')
                            ->with('growl', [__('Sudah mencapai batas maksimum certification'), 'danger']);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorecertificationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
                'nama' => 'required',
                'description'  => 'required',
                'logo'  => 'required',
        ]);

        $input['nama'] = $request->nama;
        $input['description'] = $request->description;
        $input['logo'] = $request->logo;

        $sosmed = certification::create($input);

        return redirect()->route('boilerplate.certifications')
                            ->with('growl', [__('certification berhasil ditambah'), 'success']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\certification  $certification
     * @return \Illuminate\Http\Response
     */
    public function show(certification $certification)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\certification  $certification
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $certification = certification::where('id', $id)->first();
        return view('boilerplate::certification.edit', compact('certification'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatecertificationRequest  $request
     * @param  \App\Models\certification  $certification
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
                'nama' => 'required',
                'description'  => 'required',
                'logo'  => 'required',
        ]);

        $input = certification::where('id', $id)->first();

        $input['nama'] = $request->nama;
        $input['description'] = $request->description;
        $input['logo'] = $request->logo;

        $certification = $input->save();

        return redirect()->route('boilerplate.certifications')
                            ->with('growl', [__('certifications berhasil ditambah'), 'success']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\certification  $certification
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $send = certification::where('id', $id)->first();
        if ($send->send_status==0) {
            $send['status'] = 0;
            $dele = $send->save();
        }else {
            return redirect()->route('boilerplate.certifications')
                            ->with('growl', [__('Tidak dapat dihapus'), 'danger']);
        }
    }
}
