@extends('boilerplate::layout.index', [
    'title' => __('Client'),
    'subtitle' => 'Tambah Client',
    'breadcrumb' => ['Tambah Client']]
)

@section('content')
<x-boilerplate::form :route="['boilerplate.store-client']" method="post">
    @csrf
    <x-boilerplate::card>
        <x-boilerplate::input name="nama" label='Nama*' required/>
        <x-boilerplate-media-manager::image name="logo" label="Logo* (500px*500px)" required/>
        <div class="row">
            &nbsp; &nbsp;
            {{ Form::submit('Kirim', array('class' => 'btn btn-primary', 'name' => 'submitbutton')) }}
        </div>
    </x-boilerplate::card>
</x-boilerplate::form>
@endsection