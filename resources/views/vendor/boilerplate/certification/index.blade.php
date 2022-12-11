@extends('boilerplate::layout.index', [
    'title' => __('Sertifikat'),
    'subtitle' => 'List Sertifikat',
    'breadcrumb' => ['List Sertifikat']]
)

@section('content')
<x-boilerplate::card title="List Sertifikat">
    <x-slot name="tools">
        <a href="/admin/create-certification"><button class="btn btn-primary">Tambah</button></a>
    </x-slot>
    <x-boilerplate::datatable name="certificate" />
</x-boilerplate::card>
@endsection