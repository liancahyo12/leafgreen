<!-- Footer Start -->
<div class="container-fluid bg-dark text-body footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h5 class="text-white mb-4">Address</h5>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>{{ App\Models\company::where('status', 1)->first()->alamat }}</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>{{ App\Models\company::where('status', 1)->first()->no_telp }}</p>
                {{-- <p class="mb-2"><i class="fa fa-envelope me-3"></i>semen_indogreensentosa@yahoo.com</p> --}}
                <div class="d-flex pt-2">
                    @foreach (App\Models\sosial_media::leftJoin('jenis_sosmeds', 'jenis_sosmeds.id', 'jenis_sosmed_id')->where('sosial_media.status', 1)->get(); as $position)
                        <a class="btn btn-square btn-outline-light btn-social" href="{{ $position->url }}" target="_blank"><i class="fab fa-{{ $position->logo }}"></i></a>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-white mb-4">Quick Links</h5>
                <a class="btn btn-link" href="">{{__("home.ceo")}}</a>
                <a class="btn btn-link" href="">{{__("home.visimisi")}}</a>
                <a class="btn btn-link" href="">{{__("home.history")}}</a>
                <a class="btn btn-link" href="">{{__("home.advisor")}}</a>
                <a class="btn btn-link" href="">{{__("home.certifications")}}</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-white mb-4">Our Latest Projects</h5>
                <div class="row g-2">
                    <div class="portfolio-img col-4">
                        <img class="img-fluid rounded" src="{{ mix('img/pr-1.png') }}" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href="{{ mix('img/pr-1.png') }}" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                    <div class="portfolio-img col-4">
                        <img class="img-fluid rounded" src="{{ mix('img/pr-1a.png') }}" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href="{{ mix('img/pr-1a.png') }}" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                    <div class="portfolio-img col-4">
                        <img class="img-fluid rounded" src="{{ mix('img/pr-2.png') }}" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href="{{ mix('img/pr-2.png') }}" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                    <div class="portfolio-img col-4">
                        <img class="img-fluid rounded" src="{{ mix('img/pr-2a.png') }}" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href="{{ mix('img/pr-2a.png') }}" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                    <div class="portfolio-img col-4">
                        <img class="img-fluid rounded" src="{{ mix('img/pr-3.png') }}" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href="{{ mix('img/pr-3.png') }}" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                    <div class="portfolio-img col-4">
                        <img class="img-fluid rounded" src="{{ mix('img/pr-3a.png') }}" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href="{{ mix('img/pr-3a.png') }}" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="col-lg-3 col-md-6">
                <h5 class="text-white mb-4">Newsletter</h5>
                <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                <div class="position-relative mx-auto" style="max-width: 400px;">
                    <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                    <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                </div>
            </div> --}}
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a href="/">PT Semen Indogreen Sentosa</a>, All Right Reserved.
                </div>                
                <div class="col-md-6 text-center text-md-end">
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    {{-- Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                    <br>Distributed By: <a href="https://themewagon.com" target="_blank">ThemeWagon</a> --}}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->