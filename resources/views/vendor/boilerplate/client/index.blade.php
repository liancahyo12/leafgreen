@extends('boilerplate::layout.index', [
    'title' => __('Client'),
    'subtitle' => 'List Client',
    'breadcrumb' => ['List Client']]
)

@section('content')
<x-boilerplate::card title="List Client">
    <x-slot name="tools">
        <a href="/admin/create-client"><button class="btn btn-primary">Tambah</button></a>
    </x-slot>
    <x-boilerplate::datatable name="client" />
</x-boilerplate::card>
@endsection