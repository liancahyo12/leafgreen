<?php

namespace App\Http\Controllers;

use App\Http\Requests\Storecontent_pageRequest;
use App\Http\Requests\Updatecontent_pageRequest;
use App\Models\content_page;

class ContentPageController extends Controller
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
     * @param  \App\Http\Requests\Storecontent_pageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storecontent_pageRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\content_page  $content_page
     * @return \Illuminate\Http\Response
     */
    public function show(content_page $content_page)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\content_page  $content_page
     * @return \Illuminate\Http\Response
     */
    public function edit(content_page $content_page)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatecontent_pageRequest  $request
     * @param  \App\Models\content_page  $content_page
     * @return \Illuminate\Http\Response
     */
    public function update(Updatecontent_pageRequest $request, content_page $content_page)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\content_page  $content_page
     * @return \Illuminate\Http\Response
     */
    public function destroy(content_page $content_page)
    {
        //
    }
}
