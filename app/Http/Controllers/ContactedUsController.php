<?php

namespace App\Http\Controllers;

use App\Http\Requests\Storecontacted_usRequest;
use App\Http\Requests\Updatecontacted_usRequest;
use App\Models\contacted_us;

class ContactedUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\Storecontacted_usRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storecontacted_usRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\contacted_us  $contacted_us
     * @return \Illuminate\Http\Response
     */
    public function show(contacted_us $contacted_us)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\contacted_us  $contacted_us
     * @return \Illuminate\Http\Response
     */
    public function edit(contacted_us $contacted_us)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatecontacted_usRequest  $request
     * @param  \App\Models\contacted_us  $contacted_us
     * @return \Illuminate\Http\Response
     */
    public function update(Updatecontacted_usRequest $request, contacted_us $contacted_us)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\contacted_us  $contacted_us
     * @return \Illuminate\Http\Response
     */
    public function destroy(contacted_us $contacted_us)
    {
        //
    }
}
