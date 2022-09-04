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
        <div class="row g-5">
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                <div class="d-flex align-items-center mb-4">
                    <div class="btn-lg-square bg-primary rounded-circle me-3">
                        <i class="fa fa-users text-white"></i>
                    </div>
                    <h1 class="mb-0" data-toggle="counter-up">3453</h1>
                </div>
                <h5 class="mb-3">Happy Customers</h5>
            </div>
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                <div class="d-flex align-items-center mb-4">
                    <div class="btn-lg-square bg-primary rounded-circle me-3">
                        <i class="fa fa-check text-white"></i>
                    </div>
                    <h1 class="mb-0" data-toggle="counter-up">4234</h1>
                </div>
                <h5 class="mb-3">Project Done</h5>
            </div>
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                <div class="d-flex align-items-center mb-4">
                    <div class="btn-lg-square bg-primary rounded-circle me-3">
                        <i class="fa fa-award text-white"></i>
                    </div>
                    <h1 class="mb-0" data-toggle="counter-up">3123</h1>
                </div>
                <h5 class="mb-3">Awards Win</h5>
            </div>
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                <div class="d-flex align-items-center mb-4">
                    <div class="btn-lg-square bg-primary rounded-circle me-3">
                        <i class="fa fa-users-cog text-white"></i>
                    </div>
                    <h1 class="mb-0" data-toggle="counter-up">1831</h1>
                </div>
                <h5 class="mb-3">Expert Workers</h5>
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
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item rounded overflow-hidden">
                    <img class="img-fluid" src="img/pr1_600x400.jpg" alt="">
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
                    <img class="img-fluid" src="img/pr2_600x400.jpg" alt="">
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
                    <img class="img-fluid" src="img/pr3_600x400.jpg" alt="">
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

<!-- Projects Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h6 class="text-primary">Our Projects</h6>
            <h1 class="mb-4">See Our Latest Projects</h1>
        </div>
        <div class="row g-4 portfolio-container wow fadeInUp" data-wow-delay="0.5s">
            <div class="col-lg-4 col-md-6 portfolio-item">
                <div class="portfolio-img rounded overflow-hidden">
                    <img class="img-fluid" src="{{ mix('img/pr-1.png') }}" alt="">
                    <div class="portfolio-btn">
                        <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href="{{ mix('img/pr-1.png') }}" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                    </div>
                </div>
                <div class="pt-3">
                    <p class="text-primary mb-0">Batching Plant</p>
                    <hr class="text-primary w-25 my-2">
                    <h5 class="lh-base">Bendungan Leuwikeris</h5>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item">
                <div class="portfolio-img rounded overflow-hidden">
                    <img class="img-fluid" src="{{ mix('img/pr-2.png') }}" alt="">
                    <div class="portfolio-btn">
                        <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href="{{ mix('img/pr-2.png') }}" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                    </div>
                </div>
                <div class="pt-3">
                    <p class="text-primary mb-0">Bendungan</p>
                    <hr class="text-primary w-25 my-2">
                    <h5 class="lh-base">Proyek Bendungan Leuwikeris Paket IV</h5>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item">
                <div class="portfolio-img rounded overflow-hidden">
                    <img class="img-fluid" src="{{ mix('img/pr-3.png') }}" alt="">
                    <div class="portfolio-btn">
                        <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href="{{ mix('img/pr-3.png') }}" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                    </div>
                </div>
                <div class="pt-3">
                    <p class="text-primary mb-0">Bendungan</p>
                    <hr class="text-primary w-25 my-2">
                    <h5 class="lh-base">Proyek Bendungan Leuwikeris</h5>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item">
                <div class="portfolio-img rounded overflow-hidden">
                    <img class="img-fluid" src="{{ mix('img/pr-4.png') }}" alt="">
                    <div class="portfolio-btn">
                        <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href="{{ mix('img/pr-4.png') }}" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                    </div>
                </div>
                <div class="pt-3">
                    <p class="text-primary mb-0">Bendungan</p>
                    <hr class="text-primary w-25 my-2">
                    <h5 class="lh-base">Proyek Bendungan Leuwikeris Paket V</h5>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item">
                <div class="portfolio-img rounded overflow-hidden">
                    <img class="img-fluid" src="{{ mix('img/pr-1a.png') }}" alt="">
                    <div class="portfolio-btn">
                        <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href="{{ mix('img/pr-1a.png') }}" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                    </div>
                </div>
                <div class="pt-3">
                    <p class="text-primary mb-0">Jalan Tol</p>
                    <hr class="text-primary w-25 my-2">
                    <h5 class="lh-base">Proyek Jalan Tol Sumatera Binjai - Stabat</h5>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item">
                <div class="portfolio-img rounded overflow-hidden">
                    <img class="img-fluid" src="{{ mix('img/pr-2a.png') }}" alt="">
                    <div class="portfolio-btn">
                        <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href="{{ mix('img/pr-2a.png') }}" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                    </div>
                </div>
                <div class="pt-3">
                    <p class="text-primary mb-0">Jalan Tol</p>
                    <hr class="text-primary w-25 my-2">
                    <h5 class="lh-base">Proyek Jalan Tol Sumatera Binjai - Stabat</h5>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item">
                <div class="portfolio-img rounded overflow-hidden">
                    <img class="img-fluid" src="{{ mix('img/pr-3a.png') }}" alt="">
                    <div class="portfolio-btn">
                        <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href="{{ mix('img/pr-3a.png') }}" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                    </div>
                </div>
                <div class="pt-3">
                    <p class="text-primary mb-0">Jalan Tol</p>
                    <hr class="text-primary w-25 my-2">
                    <h5 class="lh-base">Proyek Jalan Tol Sumatera Binjai - Stabat</h5>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item">
                <div class="portfolio-img rounded overflow-hidden">
                    <img class="img-fluid" src="{{ mix('img/pr-4a.png') }}" alt="">
                    <div class="portfolio-btn">
                        <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href="{{ mix('img/pr-4a.png') }}" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                    </div>
                </div>
                <div class="pt-3">
                    <p class="text-primary mb-0">Jalan Tol</p>
                    <hr class="text-primary w-25 my-2">
                    <h5 class="lh-base">Proyek Jalan Tol Sumatera Binjai - Stabat</h5>
                </div>
            </div>
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
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
            <div class="testimonial-item text-center">
                <div class="testimonial-img position-relative">
                    <img class="img-fluid rounded-circle mx-auto mb-5" src="{{ mix('img/cl-1.png') }}">
                    <div class="btn-square bg-primary rounded-circle">
                        <i class="fa fa-quote-left text-white"></i>
                    </div>
                </div>
                <div class="testimonial-text text-center rounded p-4">
                    <p></p>
                    <h5 class="mb-1">Hutama Karya</h5>
                    <span class="fst-italic"></span>
                </div>
            </div>
            <div class="testimonial-item text-center">
                <div class="testimonial-img position-relative">
                    <img class="img-fluid rounded-circle mx-auto mb-5" src="{{ mix('img/cl-2.png') }}">
                    <div class="btn-square bg-primary rounded-circle">
                        <i class="fa fa-quote-left text-white"></i>
                    </div>
                </div>
                <div class="testimonial-text text-center rounded p-4">
                    <p></p>
                    <h5 class="mb-1">Hutama Karya Aspal Beton</h5>
                    <span class="fst-italic"></span>
                </div>
            </div>
            <div class="testimonial-item text-center">
                <div class="testimonial-img position-relative">
                    <img class="img-fluid rounded-circle mx-auto mb-5" src="{{ mix('img/cl-3.png') }}">
                    <div class="btn-square bg-primary rounded-circle">
                        <i class="fa fa-quote-left text-white"></i>
                    </div>
                </div>
                <div class="testimonial-text text-center rounded p-4">
                    <p></p>
                    <h5 class="mb-1">Adhi Karya</h5>
                    <span class="fst-italic"></span>
                </div>
            </div>
            <div class="testimonial-item text-center">
                <div class="testimonial-img position-relative">
                    <img class="img-fluid rounded-circle mx-auto mb-5" src="{{ mix('img/cl-4.png') }}">
                    <div class="btn-square bg-primary rounded-circle">
                        <i class="fa fa-quote-left text-white"></i>
                    </div>
                </div>
                <div class="testimonial-text text-center rounded p-4">
                    <p></p>
                    <h5 class="mb-1">Hutama Karya Infrastruktur</h5>
                    <span class="fst-italic"></span>
                </div>
            </div>
            <div class="testimonial-item text-center">
                <div class="testimonial-img position-relative">
                    <img class="img-fluid rounded-circle mx-auto mb-5" src="{{ mix('img/cl-5.png') }}">
                    <div class="btn-square bg-primary rounded-circle">
                        <i class="fa fa-quote-left text-white"></i>
                    </div>
                </div>
                <div class="testimonial-text text-center rounded p-4">
                    <p></p>
                    <h5 class="mb-1">Wika</h5>
                    <span class="fst-italic">PT Wijaya Karya</span>
                </div>
            </div>
            <div class="testimonial-item text-center">
                <div class="testimonial-img position-relative">
                    <img class="img-fluid rounded-circle mx-auto mb-5" src="{{ mix('img/cl-6.png') }}">
                    <div class="btn-square bg-primary rounded-circle">
                        <i class="fa fa-quote-left text-white"></i>
                    </div>
                </div>
                <div class="testimonial-text text-center rounded p-4">
                    <p></p>
                    <h5 class="mb-1">Shimizu Corporation</h5>
                    <span class="fst-italic"></span>
                </div>
            </div>
            <div class="testimonial-item text-center">
                <div class="testimonial-img position-relative">
                    <img class="img-fluid rounded-circle mx-auto mb-5" src="{{ mix('img/cl-7.png') }}">
                    <div class="btn-square bg-primary rounded-circle">
                        <i class="fa fa-quote-left text-white"></i>
                    </div>
                </div>
                <div class="testimonial-text text-center rounded p-4">
                    <p></p>
                    <h5 class="mb-1">PT Tatamulia Nusantara Indah</h5>
                    <span class="fst-italic"></span>
                </div>
            </div>
            <div class="testimonial-item text-center">
                <div class="testimonial-img position-relative">
                    <img class="img-fluid rounded-circle mx-auto mb-5" src="{{ mix('img/cl-8.png') }}">
                    <div class="btn-square bg-primary rounded-circle">
                        <i class="fa fa-quote-left text-white"></i>
                    </div>
                </div>
                <div class="testimonial-text text-center rounded p-4">
                    <p></p>
                    <h5 class="mb-1">Ciputra</h5>
                    <span class="fst-italic"></span>
                </div>
            </div>
            <div class="testimonial-item text-center">
                <div class="testimonial-img position-relative">
                    <img class="img-fluid rounded-circle mx-auto mb-5" src="{{ mix('img/cl-9.png') }}">
                    <div class="btn-square bg-primary rounded-circle">
                        <i class="fa fa-quote-left text-white"></i>
                    </div>
                </div>
                <div class="testimonial-text text-center rounded p-4">
                    <p></p>
                    <h5 class="mb-1">Waskita Karya</h5>
                    <span class="fst-italic"></span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->
@endsection