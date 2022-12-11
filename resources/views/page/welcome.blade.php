@extends('layout.index',[
    'title' => __('home.home'),
])

@section('content')
<!-- Carousel Start -->
<div class="container-fluid p-0 pb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="owl-carousel header-carousel position-relative">
        <div class="owl-carousel-item position-relative" data-dot="<img src='img/sl1_0.jpg'>">
            <img class="img-fluid" src="img/sl2_0.jpg" alt="">
            <div class="owl-carousel-inner">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-10 col-lg-8">
                            <h2 class="display-3 text-white animated slideInDown">PT SEMEN INDOGREEN SENTOSA</h2>
                            <p class="fs-5 fw-medium text-white mb-4 pb-3">A Commitment to Excelent!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="owl-carousel-item position-relative" data-dot="<img src='img/sl2_0.jpg'>">
            <img class="img-fluid" src="img/sl1_0.jpg" alt="">
            <div class="owl-carousel-inner">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-10 col-lg-8">
                            <h1 class="display-2 text-white animated slideInDown">Relible Works and Efficient Process</h1>
                            <p class="fs-5 fw-medium text-white mb-4 pb-3">Experienced in handling ready mix concrete management in many mega projects.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="owl-carousel-item position-relative" data-dot="<img src='img/sl3_0.jpg'>">
            <img class="img-fluid" src="img/sl3_0.jpg" alt="">
            <div class="owl-carousel-inner">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-10 col-lg-8">
                            <h1 class="display-2 text-white animated slideInDown">Improving and Innovation Strategy</h1>
                            <p class="fs-5 fw-medium text-white mb-4 pb-3">Skilled and Experienced / Professional Serving / High Qualified Standard.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Carousel End -->


<!-- Feature Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="text-dark">Our Resources</h1>
        </div>
        <div class="row g-5">
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                <div class="d-flex align-items-center mb-4">
                    <div class="btn-lg-square bg-primary rounded-circle me-3">
                        <i class="fa fa-users text-white"></i>
                    </div>
                    <h1 class="mb-0" data-toggle="counter-up">{{ $company->bplant }}</h1>
                </div>
                <h5 class="mb-3">Batching Plant</h5>
            </div>
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                <div class="d-flex align-items-center mb-4">
                    <div class="btn-lg-square bg-primary rounded-circle me-3">
                        <i class="fa fa-check text-white"></i>
                    </div>
                    <h1 class="mb-0" data-toggle="counter-up">{{ $company->tmixer }}</h1>
                </div>
                <h5 class="mb-3">Truck Mixer</h5>
            </div>
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                <div class="d-flex align-items-center mb-4">
                    <div class="btn-lg-square bg-primary rounded-circle me-3">
                        <i class="fa fa-award text-white"></i>
                    </div>
                    <h1 class="mb-0" data-toggle="counter-up">{{ $company->cpump }}</h1>
                </div>
                <h5 class="mb-3">Concrete Pump</h5>
            </div>
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                <div class="d-flex align-items-center mb-4">
                    <div class="btn-lg-square bg-primary rounded-circle me-3">
                        <i class="fa fa-users-cog text-white"></i>
                    </div>
                    <h1 class="mb-0" data-toggle="counter-up">{{ $company->wloader }}</h1>
                </div>
                <h5 class="mb-3">Wheel Loader</h5>
            </div>
        </div>
    </div>
</div>
<!-- Feature Start -->


<!-- About Start -->
<div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
    <div class="container about px-lg-0">
        <div class="row g-0 mx-lg-0">
            <div class="col-lg-6 ps-lg-0 wow fadeIn" data-wow-delay="0.1s" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="position-absolute img-fluid w-100 h-100" src="img/sl1_1000.jpg" style="object-fit: cover;" alt="">
                </div>
            </div>
            <div class="col-lg-6 about-text py-5 wow fadeIn" data-wow-delay="0.5s">
                <div class="p-lg-5 pe-lg-0">
                    <h6 class="text-primary">About Us</h6>
                    <h1 class="mb-4">TO BE LEADER IN THE READY MIXED INDUSTRY</h1>
                    <p>We are skilled & experienced ready-mix concrete company, we believe innovation and integrity form the foundation to building and maintaining customer relationships</p>
                    <p><i class="fa fa-check-circle text-primary me-3"></i>SKILLED & EXPERIENCED</p>
                    <p><i class="fa fa-check-circle text-primary me-3"></i>MODERN EQUIPMENT</p>
                    <p><i class="fa fa-check-circle text-primary me-3"></i>OUR TOP PRIORITY</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


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
                        <img class="img-fluid" src="{{ $position->foto }}" alt="">
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

<!-- Projects Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h6 class="text-primary">Our Projects</h6>
            <h1 class="mb-4">See Our Latest Projects</h1>
        </div>
        <div class="row g-4 portfolio-container wow fadeInUp" data-wow-delay="0.5s">
            @foreach ($portfolio as $position)
                <div class="col-lg-4 col-md-6 portfolio-item">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="{{ $position->foto }}" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href="{{ url('portfolio/'.$position->created_at.'/'.$position->slug )  }}"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                    <div class="pt-3">
                        <p class="text-primary mb-0">{{ $position->sub_judul }}</p>
                        <hr class="text-primary w-25 my-2">
                        <a href="{{ url('blog/'.$position->created_at.'/'.$position->slug )  }}">
                            <h5 class="txt-blog lh-base">{{ $position->judul }}</h5>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="text-center mx-auto mb-5 wow fadeInUp">
            <a href="/project/portfolio" class="btn btn-primary rounded-pill py-3 px-5 mt-3">Explore More</a>
        </div>
    </div>
</div>
<!-- Projects End -->

<!-- Testimonial Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h6 class="text-primary">Testimonial</h6>
            <h1 class="mb-4">Our Clients</h1>
        </div>
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="row row-cols-5">
                    @foreach ($client as $position)
                        <div class="col">
                            <img class="img-fluid mx-auto mb-5" width="150" src="{{ $position->logo }}" alt="{{ $position->nama }}">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->
@endsection