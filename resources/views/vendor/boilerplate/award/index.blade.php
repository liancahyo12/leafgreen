@extends('boilerplate::layout.index', [
    'title' => __('Penghargaan'),
    'subtitle' => 'List Penghargaan',
    'breadcrumb' => ['List Penghargaan']]
)

@section('content')
<x-boilerplate::card title="List Penghargaan">
    <x-slot name="tools">
        <a href="/admin/create-award"><button class="btn btn-primary">Tambah</button></a>
    </x-slot>
    <x-boilerplate::datatable name="award" />
</x-boilerplate::card>
@endsection