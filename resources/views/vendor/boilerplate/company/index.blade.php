@extends('boilerplate::layout.index', [
    'title' => __('Perusahaan'),
    'subtitle' => 'Perusahaan',
    'breadcrumb' => ['Perusahaan']]
)

@section('content')
    <x-boilerplate::card title="Perusahaan" >
        <x-slot name="tools">
            <a href="/admin/edit-company"><button class="btn btn-primary">Edit</button></a>
        </x-slot>
        <x-boilerplate::input name="nama" label="Nama Perusahaan*" value="{{ $company->nama }}" disabled />
        <x-boilerplate::input name="alamat" label="Alamat*" value="{{ $company->alamat }}" disabled />
        {{-- <x-boilerplate::input name="logo" label="Logo*" value="{{ $company->logo }}" disabled /> --}}
        <x-boilerplate::input name="no_telp" label="Nomor Telepon*" value="{{ $company->no_telp }}" disabled />
        <x-boilerplate::input name="email" label="Email*" value="{{ $company->email }}" disabled />
        <x-boilerplate::input name="bplant" label="Batching Plant*" value="{{ $company->bplant }}" disabled />
        <x-boilerplate::input name="tmixer" label="Truck Mixer*" value="{{ $company->tmixer }}" disabled />
        <x-boilerplate::input name="cpump" label="Concrete Pump*" value="{{ $company->cpump }}" disabled />
        <x-boilerplate::input name="wloader" label="Wheel Loader*" value="{{ $company->wloader }}" disabled />
        <x-boilerplate-media-manager::image name="structure_org" label="Struktur Organisasi*" value="{{ $company->structure_org }}" disabled/>
        <x-boilerplate::input name="visi" label="Visi Perusahaan*" value="{{ $company->visi }}" disabled />
        <x-boilerplate::card bg-color="dark" title="Misi Perusahaan*" reduce collapsed>
            {!! $company->misi !!}
        </x-boilerplate::card>
        <x-boilerplate::card title="History*" reduce collapsed>
            {!! $company->history !!}
        </x-boilerplate::card>
        <x-boilerplate::card title="Dewan Komisaris & Direksi**" reduce collapsed>
            {!! $company->profile !!}
        </x-boilerplate::card>
        <x-boilerplate::card title="Sambutan Direktur Utama*" reduce collapsed>
            {!! $company->ceo_greet !!}
        </x-boilerplate::card>
        
        
    </x-boilerplate::card>
@endsection