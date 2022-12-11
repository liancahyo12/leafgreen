@extends('boilerplate::layout.index', [
    'title' => __('Perusahaan'),
    'subtitle' => 'Dewan Komisaris & Direksi',
    'breadcrumb' => ['Dewan Komisaris & Direksi']]
)

@section('content')
    <x-boilerplate::card title="Dewan Komisaris & Direksi" >
        <x-slot name="tools">
            <a href="/admin/edit-profile"><button class="btn btn-primary">Edit</button></a>
        </x-slot>
        <x-boilerplate::card title="Dewan Komisaris & Direksi**" reduce>
            {!! $company->profile !!}
        </x-boilerplate::card>
        
    </x-boilerplate::card>
@endsection