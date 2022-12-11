@extends('boilerplate::layout.index', [
    'title' => __('Portofolio'),
    'subtitle' => 'Edit Portofolio',
    'breadcrumb' => ['Edit Portofolio']]
)

@section('content')
<x-boilerplate::form :route="['boilerplate.update-portfolio', $portfolio->id]" method="put">
    @csrf
    <x-boilerplate::card>
        <x-boilerplate::input name="judul" label='Nama Proyek*' value="{{ $portfolio->judul }}" required/>
        <x-boilerplate::input name="sub_judul" label='Jenis Proyek*' value="{{ $portfolio->sub_judul }}" required/>
        <x-boilerplate-media-manager::image name="foto" label="Foto* (600px x 400px)" value="{{ $portfolio->foto }}" required/>
        <x-boilerplate::tinymce name="content"  value="{{ $portfolio->content }}">
        </x-boilerplate::tinymce>
        <div class="row">
            &nbsp; &nbsp;
            {{ Form::submit('Kirim', array('class' => 'btn btn-primary', 'name' => 'submitbutton')) }}
        </div>
    </x-boilerplate::card>
</x-boilerplate::form>
@endsection