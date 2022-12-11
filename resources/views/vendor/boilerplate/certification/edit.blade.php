@extends('boilerplate::layout.index', [
    'title' => __('Sertifikat'),
    'subtitle' => 'Edit Sertifikat',
    'breadcrumb' => ['Edit Sertifikat']]
)

@section('content')
<x-boilerplate::form :route="['boilerplate.update-certification', $certification->id]" method="put">
    @csrf
    <x-boilerplate::card>
        <x-boilerplate::input name="nama" label="Nama Sertifikat*" value="{{ $certification->nama }}" required />
        <x-boilerplate::input name="description" label="Deskripsi Sertifikat*" value="{{ $certification->description }}" required />
        <x-boilerplate-media-manager::image name="logo" label="Logo*" value="{{ $certification->logo }}"  required/>
        <div class="row">
            &nbsp; &nbsp;
            {{ Form::submit('Kirim', array('class' => 'btn btn-primary', 'name' => 'submitbutton')) }}
        </div>
    </x-boilerplate::card>
</x-boilerplate::form>
@endsection