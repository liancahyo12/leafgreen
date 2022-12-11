@extends('boilerplate::layout.index', [
    'title' => __('Perusahaan'),
    'subtitle' => 'Dewan Komisaris & Direksi',
    'breadcrumb' => ['Dewan Komisaris & Direksi']]
)

@section('content')
<x-boilerplate::form :route="['boilerplate.update-profile', 1]" method="put">
    @csrf
    <x-boilerplate::card>
        <x-boilerplate::tinymce name="profile" label="Dewan Komisaris & Direksi*" value="{{ $company->profile }}">
        </x-boilerplate::tinymce>
        <div class="row">
            &nbsp; &nbsp;
            {{ Form::submit('Kirim', array('class' => 'btn btn-primary', 'name' => 'submitbutton')) }}
        </div>
    </x-boilerplate::card>
</x-boilerplate::form>
@endsection