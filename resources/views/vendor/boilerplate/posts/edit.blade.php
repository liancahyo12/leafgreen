@extends('boilerplate::layout.index', [
    'title' => __('Post'),
    'subtitle' => __('Edit Post'),
    'breadcrumb' => [
        __('Edit Post') 
    ]
])

@section('content')
<x-boilerplate::form :route="['boilerplate.update-post', $post->id]" method="put" files>
    @csrf
    <x-boilerplate::card>
        <x-boilerplate::datetimepicker name="post_date" format="DD-MM-YYYY HH:MM:ss" label="Post Date*" required value="{{ $post->post_date }}" />
        <x-boilerplate::input name="title" label='Title*' required value="{{ $post->title }}"/>
        <x-boilerplate::input name="category" label='Category*' required value="{{ $post->category }}"/>
        <x-boilerplate-media-manager::image name="tumbnail" label="Thumbnail" required value="{{ $post->tumbnail }}"/>
        <x-boilerplate::tinymce name="content" value="{{ $post->content }}">
        </x-boilerplate::tinymce>
    </x-boilerplate::card>
    <div class="row">
        &nbsp; &nbsp;
        {{ Form::submit('Kirim', array('class' => 'btn btn-primary', 'name' => 'submitbutton')) }}
    </div>
</x-boilerplate::form>
@endsection