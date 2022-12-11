@extends('layout.pageindex',[
    'title' => __('home.portfolio'),
    'subtitle' => __('home.portfolio'),
    'breadcrumb' => [
        __('home.home') => 'home',
        __('home.portfolio') => 'portfolio',
        __( $portfolio->judul)
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
        <h2 class="text-center">{{ $portfolio->judul }}</h2>
        <p>{{ $portfolio->sub_judul }}</p>
        {!! $portfolio->content !!}
    </div>
</div>

@endsection