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
        <x-boilerplate::input name="logo" label='Logo*' required/>

        <div class="row">
            &nbsp; &nbsp;
            {{ Form::submit('Kirim', array('class' => 'btn btn-primary', 'name' => 'submitbutton')) }}
        </div>
    </x-boilerplate::card>
</x-boilerplate::form>
@endsection