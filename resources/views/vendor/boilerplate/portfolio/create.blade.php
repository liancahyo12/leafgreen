@extends('boilerplate::layout.index', [
    'title' => __('Portofolio'),
    'subtitle' => 'Tambah Portofolio',
    'breadcrumb' => ['Tambah Portofolio']]
)

@section('content')
<x-boilerplate::form :route="['boilerplate.store-portfolio']" method="post">
    @csrf
    <x-boilerplate::card>
        <x-boilerplate::input name="judul" label='Nama Proyek*' required/>
        <x-boilerplate::input name="sub_judul" label='Jenis Proyek*' required/>
        <x-boilerplate-media-manager::image name="foto" label="Foto* (600px x 400px)" required/>
        <x-boilerplate::tinymce name="content">
        </x-boilerplate::tinymce>
        <div class="row">
            &nbsp; &nbsp;
            {{ Form::submit('Kirim', array('class' => 'btn btn-primary', 'name' => 'submitbutton')) }}
        </div>
    </x-boilerplate::card>
</x-boilerplate::form>
@endsection