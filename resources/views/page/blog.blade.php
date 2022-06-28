@extends('layout.pageindex',[
    'title' => __('home.blog'),
    'subtitle' => __('home.blog'),
    'breadcrumb' => [
        __('home.home') => 'home',
        __('home.blog')
    ]
])

@section('content')
<!-- Projects Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4 portfolio-container wow fadeInUp" data-wow-delay="0.5s">
            @foreach ($post as $item)
                <div class="col-lg-4 col-md-6 portfolio-item">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="img/img-600x400-6.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href="{{ url('blog/'.$item->post_date.'/'.$item->slug )  }}"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                    <div class="pt-3">
                        <p class="text-primary mb-0">Solar Panels</p>
                        <hr class="text-primary w-25 my-2">
                        <a href="{{ url('blog/'.$item->post_date.'/'.$item->slug ) }}">
                            <h4 class="lh-base">{{ $item->title }}</h4>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Projects End -->

@endsection