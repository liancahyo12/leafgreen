@extends('layout.pageindex',[
    'title' => __('home.media'),
    'subtitle' => __('home.media'),
    'breadcrumb' => [
        __('home.home') => 'home',
        __('home.media') => 'media',
        __( $post->title)
    ]
])

@section('content')
<style>
    #post p {
      color: #1A2A36;
    }
    
    #post li {color: #1A2A36;}
</style>
<!-- Projects Start -->
<div class="container-xxl">
    <div id="post" class="container">
        <h2 class="text-center">{{ $post->title }}</h2>
        <p>{{ $post->post_date }} | {{ $post->category }}</p>
        {!! $post->content !!}
    </div>
</div>

@endsection