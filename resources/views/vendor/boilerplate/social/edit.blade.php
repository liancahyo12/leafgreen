@extends('boilerplate::layout.index', [
    'title' => __('Sosial Media'),
    'subtitle' => 'Edit Sosial Media',
    'breadcrumb' => ['Edit Sosial Media']]
)

@section('content')
<x-boilerplate::form :route="['boilerplate.update-social', $sosmed->id]" method="put">
    @csrf
    <x-boilerplate::card>
        <x-boilerplate::select2 name="jenis_sosmed" label="Pilih Jenis Sosial Media*" required>
            @foreach ($jenis_sosmed as $position)
                <option value="{{ $position->id }}" @if ( $position->id==$sosmed->jenis_sosmed_id)
                    selected
                @endif>{{ $position->jenis_sosmed }}</option>
            @endforeach
        </x-boilerplate::select2>
        <x-boilerplate::input name="url" label="Url*" value="{{ $sosmed->url }}" required />

        <div class="row">
            &nbsp; &nbsp;
            {{ Form::submit('Kirim', array('class' => 'btn btn-primary', 'name' => 'submitbutton')) }}
        </div>
    </x-boilerplate::card>
</x-boilerplate::form>
@endsection