@extends('layout.pageindex',[
    'title' => __('home.visimisi'),
    'subtitle' => __('home.visimisi'),
    'breadcrumb' => [
        __('home.home') => 'home',
        __('home.visimisi')
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
    
<!-- Service Start -->
<div class="bgimg-white container-fluid py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h6 class="text-primary">PT. Semen Indogreen Sentosa</h6>
            <h1 class="mb-4">VISI PERUSAHAAN</h1>
        </div>
        <div class="text-center wow fadeInUp">
            <h4>"{{ $company->visi }}"</h4>
        </div>
    </div>
</div>
<div class="bgimg-dark container-fluid bg-dark text-body mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
    <h6 class="text-center text-white">PT. Semen Indogreen Sentosa</h6>
    <h1 class="text-center text-white">MISI PERUSAHAAN</h1>
    <br>
    {!! $company->misi !!}
</div>


<!-- Service End -->
@endsection