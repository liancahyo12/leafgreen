@extends('boilerplate::layout.index', [
    'title' => __('Produk'),
    'subtitle' => 'Tambah Produk',
    'breadcrumb' => ['Tambah Produk']]
)

@section('content')
<x-boilerplate::form :route="['boilerplate.store-product']" method="post">
    @csrf
    <x-boilerplate::card>
        <x-boilerplate::input name="nama" label='Nama Produk*' required/>
        <x-boilerplate-media-manager::image name="foto" label="Foto* (600px x 400px)" required/>
        <x-boilerplate::input name="icon" label='Icon* (cari icon di https://fontawesome.com/search )' required/>
        <x-boilerplate::tinymce name="content">
        </x-boilerplate::tinymce>
        <div class="row">
            &nbsp; &nbsp;
            {{ Form::submit('Kirim', array('class' => 'btn btn-primary', 'name' => 'submitbutton')) }}
        </div>
    </x-boilerplate::card>
</x-boilerplate::form>
@endsection