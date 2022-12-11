@extends('boilerplate::layout.index', [
    'title' => __('Penghargaan'),
    'subtitle' => 'Edit Penghargaan',
    'breadcrumb' => ['Edit Penghargaan']]
)

@section('content')
<x-boilerplate::form :route="['boilerplate.update-award', $award->id]" method="put">
    @csrf
    <x-boilerplate::card>
        <x-boilerplate::input name="nama" label="Nama Penghargaan*" value="{{ $award->nama }}" required />
        <x-boilerplate::input name="description" label="Deskripsi Penghargaan*" value="{{ $award->description }}" required />
        <x-boilerplate-media-manager::file name="file" label="File*" value="{{ $award->file }}"  required/>
        <div class="row">
            &nbsp; &nbsp;
            {{ Form::submit('Kirim', array('class' => 'btn btn-primary', 'name' => 'submitbutton')) }}
        </div>
    </x-boilerplate::card>
</x-boilerplate::form>
@endsection