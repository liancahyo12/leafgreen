@extends('layout.pageindex',[
    'title' => __('home.history'),
    'subtitle' => __('home.history'),
    'breadcrumb' => [
        __('home.home') => 'home',
        __('home.history')
    ]
])

@section('content')
<style type="text/css">
    .bgimg-white {
        background-image: url('/img/whitebig-back.jpg');
    }
    .bgimg-dark {
        background-image: url('/img/dark-back.jpg');
    }
    .vl {
        border-left: 6px solid rgb(27, 63, 27);
        height: 500px;
    }
</style>
<div class="bgimg-white container-fluid py-5">
    <div class="container">
        <div class="wow">
            {!! $company->history !!}
        </div>
    </div>
</div>


@endsection