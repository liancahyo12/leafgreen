@extends('layout.pageindex',[
    'title' => __('home.media'),
    'subtitle' => __('home.media'),
    'breadcrumb' => [
        __('home.home') => 'home',
        __('home.media')
    ]
])

@section('content')
<style>
    .txt-blog {
      color: #191919;
      transition: 0.3s;
    }
    
    .txt-blog:hover {color: #32C36C;}
</style>
<!-- Projects Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4 portfolio-container wow fadeInUp" data-wow-delay="0.5s">
            @foreach ($post as $item)
                <div class="col-lg-4 col-md-6 portfolio-item">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-responsive" src="{{ $item->tumbnail }}" alt="" height="300">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href="{{ url('blog/'.$item->post_date.'/'.$item->slug )  }}"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                    <div class="pt-1">
                        <div class="text-primary">{{ substr($item->post_date, 0, 10) }} | {{ $item->category }}</div>
                        <hr class="text-primary w-25 my-1">
                        <a href="{{ url('blog/'.$item->post_date.'/'.$item->slug ) }}">
                            <h2 class="txt-blog lh-base">{{ $item->title }}</h4>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Projects End -->

@endsection