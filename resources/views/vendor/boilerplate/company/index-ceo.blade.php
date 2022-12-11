@extends('boilerplate::layout.index', [
    'title' => __('Perusahaan'),
    'subtitle' => 'Sambutan Direktur Utama',
    'breadcrumb' => ['Sambutan Direktur Utama']]
)

@section('content')
    <x-boilerplate::card title="Sambutan Direktur Utama" >
        <x-slot name="tools">
            <a href="/admin/edit-ceo_greet"><button class="btn btn-primary">Edit</button></a>
        </x-slot>
        <x-boilerplate::card title="Sambutan Direktur Utama*" reduce>
            {!! $company->ceo_greet !!}
        </x-boilerplate::card>
        
    </x-boilerplate::card>
@endsection