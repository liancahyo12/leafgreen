@extends('boilerplate::layout.index', [
    'title' => __('Portofolio'),
    'subtitle' => 'List Portofolio',
    'breadcrumb' => ['List Portofolio']]
)

@section('content')
<x-boilerplate::card title="List Portofolio">
    <x-slot name="tools">
        <a href="/admin/create-portfolio"><button class="btn btn-primary">Tambah</button></a>
    </x-slot>
            <x-boilerplate::datatable name="portfolio"/>
    </x-boilerplate::card>
@endsection