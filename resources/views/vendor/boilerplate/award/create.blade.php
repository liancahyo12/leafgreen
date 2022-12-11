@extends('boilerplate::layout.index', [
    'title' => __('Penghargaan'),
    'subtitle' => 'Tambah Penghargaan',
    'breadcrumb' => ['Tambah Penghargaan']]
)

@section('content')
<x-boilerplate::form :route="['boilerplate.store-award']" method="post">
    @csrf
    <x-boilerplate::card>
        <x-boilerplate::input name="nama" label="Nama Penghargaan*" required />
        <x-boilerplate::input name="description" label="Deskripsi Penghargaan*" required />
        <x-boilerplate-media-manager::file name="file" label="File*" required/>
        <div class="row">
            &nbsp; &nbsp;
            {{ Form::submit('Kirim', array('class' => 'btn btn-primary', 'name' => 'submitbutton')) }}
        </div>
    </x-boilerplate::card>
</x-boilerplate::form>
@endsection