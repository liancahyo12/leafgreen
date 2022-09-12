@extends('boilerplate::layout.index', [
    'title' => __('Sosial Media'),
    'subtitle' => 'List Sosial Media',
    'breadcrumb' => ['List Sosial Media']]
)

@section('content')
<x-boilerplate::card title="List Sosial Media">
    <x-slot name="tools">
        <a href="/admin/create-social"><button class="btn btn-primary">Tambah</button></a>
    </x-slot>
    <x-boilerplate::datatable name="social" />
</x-boilerplate::card>
@endsection