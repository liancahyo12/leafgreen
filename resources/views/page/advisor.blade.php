@extends('layout.pageindex',[
    'title' => __('home.advisor'),
    'subtitle' => __('home.advisor'),
    'breadcrumb' => [
        __('home.home') => 'home',
        __('home.advisor')
    ]
])

@section('content')
<style type="text/css">
    .bgimg-white {
        background-image: url('/img/white-back.jpg');
    }
    .bgimg-dark {
        background-image: url('/img/dark-back.jpg');
    }
</style>

<div class="bg-light container-fluid py-5">
    <div class="container">
        {!! $company->profile !!}
    </div>
</div>

@endsection