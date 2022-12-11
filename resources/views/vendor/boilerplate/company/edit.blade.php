@extends('boilerplate::layout.index', [
    'title' => __('Perusahaan'),
    'subtitle' => 'Perusahaan',
    'breadcrumb' => ['Perusahaan']]
)

@section('content')
<x-boilerplate::form :route="['boilerplate.update-company', 1]" method="put">
    @csrf
    <x-boilerplate::card>
        <x-boilerplate::input name="nama" label="Nama Perusahaan*" value="{{ $company->nama }}" required />
        <x-boilerplate::input name="alamat" label="Alamat*" value="{{ $company->alamat }}" required />
        {{-- <x-boilerplate::input name="logo" label="Logo*" value="{{ $company->logo }}" required /> --}}
        <x-boilerplate::input name="no_telp" label="Nomor Telepon*" value="{{ $company->no_telp }}" required />
        <x-boilerplate::input name="email" label="Email*" value="{{ $company->email }}" required />
        <x-boilerplate::input name="bplant" label="Batching Plant*" value="{{ $company->bplant }}" required />
        <x-boilerplate::input name="tmixer" label="Truck Mixer*" value="{{ $company->tmixer }}" required />
        <x-boilerplate::input name="cpump" label="Concrete Pump*" value="{{ $company->cpump }}" required />
        <x-boilerplate::input name="wloader" label="Wheel Loader*" value="{{ $company->wloader }}" required />
        <x-boilerplate-media-manager::image name="structure_org" label="Struktur Organisasi*" value="{{ $company->structure_org }}" required/>
        <x-boilerplate::input name="visi" label="Visi Perusahaan*" value="{{ $company->visi }}" required />
        <x-boilerplate::card title="Misi Perusahaan*" reduce collapsed>
            <x-boilerplate::tinymce name="misi" value="{{ $company->misi }}">
            </x-boilerplate::tinymce>
        </x-boilerplate::card>
        <x-boilerplate::card title="History*" reduce collapsed>
            <x-boilerplate::tinymce name="history" value="{{ $company->history }}">
            </x-boilerplate::tinymce>
        </x-boilerplate::card>
        <x-boilerplate::card title="Dewan Komisaris & Direksi*" reduce collapsed>
            <x-boilerplate::tinymce name="profile" value="{{ $company->profile }}">
            </x-boilerplate::tinymce>
        </x-boilerplate::card>
        <x-boilerplate::card title="Sambutan Direktur Utama*" reduce collapsed>
            <x-boilerplate::tinymce name="ceo_greet" value="{{ $company->ceo_greet }}">
            </x-boilerplate::tinymce>
        </x-boilerplate::card>
        
        
        
        <div class="row">
            &nbsp; &nbsp;
            {{ Form::submit('Kirim', array('class' => 'btn btn-primary', 'name' => 'submitbutton')) }}
        </div>
    </x-boilerplate::card>
</x-boilerplate::form>
@endsection