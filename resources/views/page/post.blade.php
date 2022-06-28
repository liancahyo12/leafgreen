@extends('layout.pageindex',[
    'title' => __('home.blog'),
    'subtitle' => __('home.blog'),
    'breadcrumb' => [
        __('home.home') => 'home',
        __('home.blog') => 'blog',
        __( $post->title)
    ]
])

@section('content')
<!-- Projects Start -->
<div class="container-xxl py-5">
    <div class="container">
        <p>{{ $post->title }} {{ $post->post_date }} {{ $post->category }}</p>
        {!! $post->content !!}
    </div>
</div>

@endsection