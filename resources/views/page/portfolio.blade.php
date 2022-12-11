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
            @foreach ($portfolio as $position)
                <div class="col-lg-4 col-md-6 portfolio-item">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="{{ $position->foto }}" alt="{{ $position->judul }}">
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
    </div>
</div>
<!-- Projects End -->
@endsection