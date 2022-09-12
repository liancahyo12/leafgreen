@extends('boilerplate::layout.index', [
    'title' => __('Sosial Media'),
    'subtitle' => 'Tambah Sosial Media',
    'breadcrumb' => ['Tambah Sosial Media']]
)

@section('content')
<x-boilerplate::form :route="['boilerplate.store-social']" method="post">
    @csrf
    <x-boilerplate::card>
        <x-boilerplate::select2 name="jenis_sosmed" label="Pilih Jenis Sosial Media*" required>
            @foreach ($jenis_sosmed as $position)
                <option value="{{ $position->id }}">{{ $position->jenis_sosmed }}</option>
            @endforeach
        </x-boilerplate::select2>
        <x-boilerplate::input name="url" label='Url*' required/>

        <div class="row">
            &nbsp; &nbsp;
            {{ Form::submit('Kirim', array('class' => 'btn btn-primary', 'name' => 'submitbutton')) }}
        </div>
    </x-boilerplate::card>
</x-boilerplate::form>
@endsection