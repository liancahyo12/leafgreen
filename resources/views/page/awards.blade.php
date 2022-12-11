@extends('layout.pageindex',[
    'title' => __('home.awards'),
    'subtitle' => __('home.awards'),
    'breadcrumb' => [
        __('home.home') => 'home',
        __('home.awards')
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
        <div class="column-content wow fadeInUp">
            <div class="row g-4 portfolio-container wow fadeInUp" data-wow-delay="0.5s">
                @foreach ($award as $position)
                    <div class="col-lg-4 col-md-6 portfolio-item">
                        <embed width="400" height="600" name="plugin" src="{{ $position->file }}" type="application/pdf">
                        <div class="pt-3">
                            <a href="{{ $position->file }}" target="_blank">
                            <p class="text-primary mb-0">{{ $position->nama }}</p>
                            <hr class="text-primary w-25 my-2">
                            <h5 class="lh-base">{{ $position->description }}</h5></a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection