@extends('boilerplate::layout.index', [
    'title' => __('Sertifikat'),
    'subtitle' => 'Tambah Sertifikat',
    'breadcrumb' => ['Tambah Sertifikat']]
)

@section('content')
<x-boilerplate::form :route="['boilerplate.store-certification']" method="post">
    @csrf
    <x-boilerplate::card>
        <x-boilerplate::input name="nama" label="Nama Sertifikat*" required />
        <x-boilerplate::input name="description" label="Deskripsi Sertifikat*" required />
        <x-boilerplate-media-manager::image name="logo" label="Logo*" required/>
        <div class="row">
            &nbsp; &nbsp;
            {{ Form::submit('Kirim', array('class' => 'btn btn-primary', 'name' => 'submitbutton')) }}
        </div>
    </x-boilerplate::card>
</x-boilerplate::form>
@endsection