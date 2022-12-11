@extends('layout.pageindex',[
    'title' => __('home.structure'),
    'subtitle' => __('home.structure'),
    'breadcrumb' => [
        __('home.home') => 'home',
        __('home.structure')
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

<div class="bgimg-white container-fluid py-5">
    <div class="container">
        <div class="text-center wow fadeInUp">
            <div class="widget-content">
                <img class="img-fluid" src="{{ $company->structure_org }}" alt="{{ $company->nama }}">
            </div>
        </div>
    </div>
</div>
@endsection