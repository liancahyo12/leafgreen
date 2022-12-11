@extends('boilerplate::layout.index', [
    'title' => __('Produk'),
    'subtitle' => 'List Produk',
    'breadcrumb' => ['List Produk']]
)

@section('content')
<x-boilerplate::card title="List Produk">
    <x-slot name="tools">
        <a href="/admin/create-product"><button class="btn btn-primary">Tambah</button></a>
    </x-slot>
            <x-boilerplate::datatable name="product"/>
    </x-boilerplate::card>
@endsection