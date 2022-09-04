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
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item rounded overflow-hidden">
                    <img class="img-fluid" src="{{ mix('img/pr1_600x400.jpg') }}" alt="">
                    <div class="position-relative p-4 pt-0">
                        <div class="service-icon">
                            <i class="fa fa-truck fa-3x"></i>
                        </div>
                        <h4 class="mb-3">Concrete Ready Mix</h4>
                        <p></p>
                        {{-- <a class="small fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a> --}}
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item rounded overflow-hidden">
                    <img class="img-fluid" src="{{ mix('img/pr2_600x400.jpg') }}" alt="">
                    <div class="position-relative p-4 pt-0">
                        <div class="service-icon">
                            <i class="fa fa-road fa-3x"></i>
                        </div>
                        <h4 class="mb-3">Rigid Pavement</h4>
                        <p></p>
                        {{-- <a class="small fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a> --}}
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item rounded overflow-hidden">
                    <img class="img-fluid" src="{{ mix('img/pr3_600x400.jpg') }}" alt="">
                    <div class="position-relative p-4 pt-0">
                        <div class="service-icon">
                            <i class="fa fa-bars fa-3x"></i>
                        </div>
                        <h4 class="mb-3">Cement Treated Base</h4>
                        <p></p>
                        {{-- <a class="small fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Products End -->

@endsection