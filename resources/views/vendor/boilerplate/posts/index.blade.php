@extends('boilerplate::layout.index', [
    'title' => __('Posts'),
    'subtitle' => 'List Posts',
    'breadcrumb' => ['List Posts']]
)

@section('content')
<x-boilerplate::card title="List Posts">
    <x-slot name="tools">
        <a href="/admin/create-post"><button class="btn btn-primary">Tambah</button></a>
    </x-slot>
            <x-boilerplate::datatable name="posts" />
    </x-boilerplate::card>
@endsection