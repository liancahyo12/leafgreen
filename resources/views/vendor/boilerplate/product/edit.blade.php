@extends('boilerplate::layout.index', [
    'title' => __('Produk'),
    'subtitle' => 'Edit Produk',
    'breadcrumb' => ['Edit Produk']]
)

@section('content')
<x-boilerplate::form :route="['boilerplate.update-product', $product->id]" method="put">
    @csrf
    <x-boilerplate::card>
        <x-boilerplate::input name="nama" label='Nama Produk*' value="{{ $product->nama }}" required/>
        <x-boilerplate-media-manager::image name="foto" label="Foto* (600px x 400px)" value="{{ $product->foto }}" required/>
        <x-boilerplate::input name="icon" label='Icon* (cari icon di https://fontawesome.com/search )' value="{{ $product->icon }}" required/>
        <x-boilerplate::tinymce name="content"  value="{{ $product->content }}">
        </x-boilerplate::tinymce>
        <div class="row">
            &nbsp; &nbsp;
            {{ Form::submit('Kirim', array('class' => 'btn btn-primary', 'name' => 'submitbutton')) }}
        </div>
    </x-boilerplate::card>
</x-boilerplate::form>
@endsection