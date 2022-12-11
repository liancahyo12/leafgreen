@extends('layout.pageindex',[
    'title' => __('home.product'),
    'subtitle' => __('home.product'),
    'breadcrumb' => [
        __('home.home') => 'home',
        __('home.product') => 'product',
        __( $product->nama)
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
        <h2 class="text-center">{{ $product->nama }}</h2>
        {!! $product->content !!}
    </div>
</div>

@endsection