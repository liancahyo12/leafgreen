@extends('layout.pageindex',[
    'title' => __('home.product'),
    'subtitle' => __('home.product'),
    'breadcrumb' => [
        __('home.home') => 'home',
        __('home.product')
    ]
])

@section('content')
<!-- Products Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h6 class="text-primary">Our Products</h6>
            <h1 class="mb-4">TO BE LEADER IN THE READY MIXED INDUSTRY</h1>
        </div>
        <div class="row g-4">
            @foreach ($product as $position)
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded overflow-hidden">
                        <img class="img-fluid" src="{{ $position->foto }}" alt="{{ $position->nama }}">
                        <div class="position-relative p-4 pt-0">
                            <div class="service-icon">
                                <i class="fa fa-{{ $position->icon }} fa-3x"></i>
                            </div>
                            <h4 class="mb-3">{{ $position->nama }}</h4>
                            <p></p>
                            <a class="small fw-medium" href="{{ url('product/'.$position->slug )  }}">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Products End -->

@endsection