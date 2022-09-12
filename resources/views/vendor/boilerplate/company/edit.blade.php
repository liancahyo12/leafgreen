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

        <div class="row">
            &nbsp; &nbsp;
            {{ Form::submit('Kirim', array('class' => 'btn btn-primary', 'name' => 'submitbutton')) }}
        </div>
    </x-boilerplate::card>
</x-boilerplate::form>
@endsection