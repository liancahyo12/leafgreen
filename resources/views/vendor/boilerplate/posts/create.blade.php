@extends('boilerplate::layout.index', [
    'title' => __('Post'),
    'subtitle' => __('Create Post'),
    'breadcrumb' => [
        __('Create Post') 
    ]
])

@section('content')
    <x-boilerplate::form :route="['boilerplate.store-post']" method="post" files>
        @csrf
        <x-boilerplate::card>
            <x-boilerplate::datetimepicker name="post_date" format="DD-MM-YYYY HH:MM:ss" label="Post Date*" required/>
            <x-boilerplate::input name="title" label='Title*' required/>
            <x-boilerplate::input name="category" label='Category*' required/>
            <x-boilerplate-media-manager::image name="tumbnail" label="Thumbnail" required/>
            <x-boilerplate::tinymce name="content">
            </x-boilerplate::tinymce>
        </x-boilerplate::card>
        <div class="row">
            &nbsp; &nbsp;
            {{ Form::submit('Kirim', array('class' => 'btn btn-primary', 'name' => 'submitbutton')) }}
        </div>
    </x-boilerplate::form>
@endsection