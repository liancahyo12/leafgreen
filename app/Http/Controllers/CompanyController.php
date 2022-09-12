<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorecompanyRequest;
use App\Http\Requests\UpdatecompanyRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\company;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('boilerplate::company.index', 
                [
                    'company' => company::where('status', 1)->first(),
                ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorecompanyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorecompanyRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        return view('boilerplate::company.edit', 
                [
                    'company' => company::where('status', 1)->first(),
                ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatecompanyRequest  $request
     * @param  \App\Models\company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validate($request, [
                'nama' => 'required',
                'no_telp'  => 'required',
                'email'  => 'required',
                'bplant'  => 'required',
                'tmixer'  => 'required',
                'cpump'  => 'required',
                'wloader'  => 'required',
        ]);

        $input = company::where('status', 1)->first();

        $input['nama'] = $request->nama;
        $input['no_telp'] = $request->no_telp;
        $input['email'] = $request->email;
        $input['bplant'] = $request->bplant;
        $input['tmixer'] = $request->tmixer;
        $input['cpump'] = $request->cpump;
        $input['wloader'] = $request->wloader;

        $sosmed = $input->save();

        return redirect()->route('boilerplate.company')
                            ->with('growl', [__('Data perusahaan berhasil diubah'), 'success']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(company $company)
    {
        //
    }
}
