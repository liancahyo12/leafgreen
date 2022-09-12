@extends('boilerplate::layout.index', [
    'title' => __('Client'),
    'subtitle' => 'Edit Client',
    'breadcrumb' => ['Edit Client']]
)

@section('content')
<x-boilerplate::form :route="['boilerplate.update-client', $client->id]" method="put">
    @csrf
    <x-boilerplate::card>
        <x-boilerplate::input name="nama" label="Nama*" value="{{ $client->nama }}" required />
        <x-boilerplate::input name="logo" label="Logo*" value="{{ $client->logo }}" required />

        <div class="row">
            &nbsp; &nbsp;
            {{ Form::submit('Kirim', array('class' => 'btn btn-primary', 'name' => 'submitbutton')) }}
        </div>
    </x-boilerplate::card>
</x-boilerplate::form>
@endsection