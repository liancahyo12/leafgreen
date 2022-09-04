@extends('layout.pageindex',[
    'title' => __('home.portfolios'),
    'subtitle' => __('home.portfolios'),
    'breadcrumb' => [
        __('home.home') => 'home',
        __('home.portfolios')
    ]
])

@section('content')
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
@endsection