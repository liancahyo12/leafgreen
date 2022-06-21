<!-- Topbar Start -->
<div class="container-fluid bg-dark p-0">
    <div class="row gx-0 d-none d-lg-flex">
        <div class="col-lg-7 px-5 text-start">
            <div class="h-100 d-inline-flex align-items-center me-4">
                <small class="fa fa-map-marker-alt text-primary me-2"></small>
                <small>Ruko North Junction Blok RB/23, Sambikerep, Surabaya</small>
            </div>
            <div class="h-100 d-inline-flex align-items-center">
                <small class="far fa-fax text-primary me-2"></small>
                <small>Fax. (+62) 31 99162802</small>
            </div>
        </div>
        <div class="col-lg-5 px-5 text-end">
            <div class="h-100 d-inline-flex align-items-center me-4">
                <small class="fa fa-phone-alt text-primary me-2"></small>
                <small>(+62) 31 7425555,7426666</small>
            </div>
            <div class="h-100 d-inline-flex align-items-center mx-n2">
                <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href=""><i class="fab fa-twitter"></i></a>
                <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href=""><i class="fab fa-instagram"></i></a>
                <div>
                    <select onchange="changeLanguage(this.value)" style="background-color: hsla(89, 100%, 100%, 0.3);">
                        <option {{session()->has('lang_code')?(session()->get('lang_code')=='id'?'selected':''):''}} value="id" style="background-image:url(img/id.png);">IND</option>
                        <option {{session()->has('lang_code')?(session()->get('lang_code')=='en'?'selected':''):''}} value="en" style="background-image:url(img/en.png);">ENG</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->


<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
    <a href="/" class="navbar-brand d-flex align-items-center border-end px-4 px-lg-5">
        <img class="img-fluid" src="{{ mix('img/logo.png') }}" alt="sis" width="160">
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <div class="nav-item dropdown has-megamenu">
                <a href="#" class="nav-link dropdown-toggle {{ Request::is('about/*')? "active":"" }}" data-bs-toggle="dropdown">{{__("home.about")}}</a>
                <div class="dropdown-menu bg-light m-0 megamenu" role="menu">
                    <div class="row">
						<div class="col-sm">
							<div class="col-megamenu">
                                <a href="/about/ceo" class="dropdown-item {{ Request::is('about/ceo')? "active":"" }}">{{__("home.ceo")}}</a>
                                <hr style="height:1px;border-width:0;color:gray;background-color:gray;margin-top: 0;margin-bottom: 0;">
                                <a href="/about/history" class="dropdown-item {{ Request::is('about/history')? "active":"" }}">{{__("home.history")}}</a>
                                <hr style="height:1px;border-width:0;color:gray;background-color:gray;margin-top: 0;margin-bottom: 0;">
                                <a href="/about/structure" class="dropdown-item {{ Request::is('about/structure')? "active":"" }}">{{__("home.structure")}}</a>
                                <hr style="height:1px;border-width:0;color:gray;background-color:gray;margin-top: 0;margin-bottom: 0;">
                                <a href="/about/awards" class="dropdown-item {{ Request::is('about/awards')? "active":"" }}">{{__("home.awards")}}</a>
                                <hr style="height:1px;border-width:0;color:gray;background-color:gray;margin-top: 0;margin-bottom: 0;">
                                <a href="/about/financial" class="dropdown-item {{ Request::is('about/financial')? "active":"" }}">{{__("home.financial")}}</a>
                                <hr style="height:1px;border-width:0;color:gray;background-color:gray;margin-top: 0;margin-bottom: 0;">
							</div>  <!-- col-megamenu.// -->
						</div><!-- end col-3 -->
						<div class="col-sm">
                            <div class="col-megamenu">
                                <a href="/about/visimisi" class="dropdown-item {{ Request::is('about/visimisi')? "active":"" }}">{{__("home.visimisi")}}</a>
                                <hr style="height:1px;border-width:0;color:gray;background-color:gray;margin-top: 0;margin-bottom: 0;">
                                <a href="/about/advisor" class="dropdown-item {{ Request::is('about/advisor')? "active":"" }}">{{__("home.advisor")}}</a>
                                <hr style="height:1px;border-width:0;color:gray;background-color:gray;margin-top: 0;margin-bottom: 0;">
                                <a href="/about/affiliations" class="dropdown-item {{ Request::is('about/affiliations')? "active":"" }}">{{__("home.affiliations")}}</a>
                                <hr style="height:1px;border-width:0;color:gray;background-color:gray;margin-top: 0;margin-bottom: 0;">
                                <a href="/about/certifications" class="dropdown-item {{ Request::is('about/certifications')? "active":"" }}">{{__("home.certifications")}}</a>
                                <hr style="height:1px;border-width:0;color:gray;background-color:gray;margin-top: 0;margin-bottom: 0;">
							</div>  <!-- col-megamenu.// -->
						</div><!-- end col-3 --> 
					</div>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle {{ Request::is('product')? "active":"" }}" data-bs-toggle="dropdown">{{__("home.product")}}</a>
                <div class="dropdown-menu bg-light m-0">
                    <a href="/product" class="dropdown-item {{ Request::is('product')? "active":"" }}">{{__("home.hotmix")}}</a>
                    <hr style="height:1px;width:90%;margin-left: 5%;border-width:0;color:gray;background-color:gray;margin-top: 0;margin-bottom: 0;">
                    <a href="quote.html" class="dropdown-item">{{__("home.readymix")}}</a>
                    <hr style="height:1px;width:90%;margin-left: 5%;border-width:0;color:gray;background-color:gray;margin-top: 0;margin-bottom: 0;">
                    <a href="team.html" class="dropdown-item">{{__("home.precast")}}</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle {{ Request::is('project/*')? "active":"" }}" data-bs-toggle="dropdown">{{__("home.project")}}</a>
                <div class="dropdown-menu bg-light m-0">
                    <a href="/project/portfolio" class="dropdown-item {{ Request::is('project/portfolio')? "active":"" }}">{{__("home.portfolios")}}</a>
                    <hr style="height:1px;width:90%;margin-left: 5%;border-width:0;color:gray;background-color:gray;margin-top: 0;margin-bottom: 0;">
                    <a href="/project/report" class="dropdown-item {{ Request::is('project/report')? "active":"" }}">{{__("home.report")}}</a>
                </div>
            </div>
            <a href="/csr" class="nav-item nav-link {{ Request::is('csr')? "active":"" }}">{{__("home.csr")}}</a>
            <a href="/blog" class="nav-item nav-link {{ Request::is('blog')? "active":"" }} {{ Request::is('blog/*')? "active":"" }}">{{__("home.blog")}}</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle {{ Request::is('gcg')? "active":"" }}" data-bs-toggle="dropdown">{{__("home.gcg")}}</a>
                <div class="dropdown-menu bg-light m-0">
                    <a href="/gcg" class="dropdown-item {{ Request::is('gcg')? "active":"" }}">{{__("home.summaries")}}</a>
                    <hr style="height:1px;width:90%;margin-left: 5%;border-width:0;color:gray;background-color:gray;margin-top: 0;margin-bottom: 0;">
                    <a href="quote.html" class="dropdown-item">{{__("home.goals")}}</a>
                    <hr style="height:1px;width:90%;margin-left: 5%;border-width:0;color:gray;background-color:gray;margin-top: 0;margin-bottom: 0;">
                    <a href="quote.html" class="dropdown-item">{{__("home.principles")}}</a>
                    <hr style="height:1px;width:90%;margin-left: 5%;border-width:0;color:gray;background-color:gray;margin-top: 0;margin-bottom: 0;">
                    <a href="quote.html" class="dropdown-item">{{__("home.score")}}</a>
                    <hr style="height:1px;width:90%;margin-left: 5%;border-width:0;color:gray;background-color:gray;margin-top: 0;margin-bottom: 0;">
                    <a href="quote.html" class="dropdown-item">{{__("home.guideline")}}</a>
                </div>
            </div>
            <a href="/media" class="nav-item nav-link {{ Request::is('media')? "active":"" }}">{{__("home.media")}}</a>
        </div>
        <a href="/contactus" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block {{ Request::is('contactus')? "active":"" }}">{{__("home.contactus")}}<i class="fa fa-arrow-right ms-3"></i></a>
    </div>
</nav>
<!-- Navbar End -->