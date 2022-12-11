@extends('boilerplate::layout.index', [
    'title' => __('Perusahaan'),
    'subtitle' => 'Sambutan Direktur Utama',
    'breadcrumb' => ['Sambutan Direktur Utama']]
)

@section('content')
<x-boilerplate::form :route="['boilerplate.update-ceo_greet', 1]" method="put">
    @csrf
    <x-boilerplate::card>
        <x-boilerplate::tinymce name="ceo_greet" label="Sambutan Direktur Utama*" value="{{ $company->profile }}">
        </x-boilerplate::tinymce>
        <div class="row">
            &nbsp; &nbsp;
            {{ Form::submit('Kirim', array('class' => 'btn btn-primary', 'name' => 'submitbutton')) }}
        </div>
    </x-boilerplate::card>
</x-boilerplate::form>
@endsection