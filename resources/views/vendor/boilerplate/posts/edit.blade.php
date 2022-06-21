@extends('boilerplate::layout.index', [
    'title' => __('Post'),
    'subtitle' => __('Edit Post'),
    'breadcrumb' => [
        __('Edit Post') 
    ]
])

@section('content')
    <x-boilerplate::form :route="['boilerplate.store-post']" method="post" files>
        @csrf
        <x-boilerplate::card>
            <x-boilerplate::tinymce name="tinymce">
                <h2>TinyMCE demo</h2><p>Lorem ipsum dolor sit amet.</p>
            </x-boilerplate::tinymce>
        </x-boilerplate::card>
        <div class="row">
            &nbsp; &nbsp;
            {{ Form::submit('Kirim', array('class' => 'btn btn-primary', 'name' => 'submitbutton')) }}
        </div>
    </x-boilerplate::form>
@endsection