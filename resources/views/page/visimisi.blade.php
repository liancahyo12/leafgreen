@extends('layout.pageindex',[
    'title' => __('home.visimisi'),
    'subtitle' => __('home.visimisi'),
    'breadcrumb' => [
        __('home.home') => 'home',
        __('home.visimisi')
    ]
])

@section('content')
<style type="text/css">
    .bgimg-white {
        background-image: url('/img/white-back.jpg');
    }
    .bgimg-dark {
        background-image: url('/img/dark-back.jpg');
    }
</style>
    
<!-- Service Start -->
<div class="bgimg-white container-fluid py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h6 class="text-primary">PT. Semen Indogreen Sentosa</h6>
            <h1 class="mb-4">VISI PERUSAHAAN</h1>
        </div>
        <div class="text-center wow fadeInUp">
            <h4>"Menjadi perusahaan beton readymix & precast terkemuka di Indonesia dengan mengutamakan mutu & pelayanan yang memuaskan"</h4>
        </div>
    </div>
</div>
<div class="bgimg-dark container-fluid bg-dark text-body mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
    <h6 class="text-center text-white">PT. Semen Indogreen Sentosa</h6>
    <h1 class="text-center text-white">MISI PERUSAHAAN</h1>
    <br>
    <div class="row row-wrapper">
        <div class="gsc-column   col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12  ">
            <div class="column-inner  bg-size-cover  ">
               <div class="column-content-inner">
                    <div class="column-content wow fadeInUp">
                        <h4 class="text-white wow fadeInUp">Human Capital</h4>
                        <ul>
                            <li><span style="color: #ffffff;">Membentuk SDM yang berkompetensi dan berkarakter kuat dan tangguh sehingga menjadi pondasi yang kuat bagi perusahaan dengan menerapkan nilai-nilai di perusahaan</span></li>
                            <li><span style="color: #ffffff;">Memberikan kesejahteraan bagi karyawan</span></li>
                            <li><span style="color: #ffffff;">Menempatkan SDM yang tepat dan produktif</span></li>
                            <br>
                        </ul>
                    </div>	         
                </div>  
            </div>
        </div>
        <div class="gsc-column   col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12  ">
            <div class="column-inner  bg-size-cover  ">
               <div class="column-content-inner">
                    <div class="column-content wow fadeInUp">
                        <h4 class="text-white wow fadeInUp">Finance</h4>
                        <ul>
                            <li><span style="color: #ffffff;">Membuat proyeksi dan anggaran keuangan perusahaan</span></li>
                            <li><span style="color: #ffffff;">Melakukan pengendalian dan pengawasan yang tepat dan objektif untuk mencapai efisiensi dan efektifitas operasional</span></li>
                            <li><span style="color: #ffffff;">Menjaga stabilitas keuangan perusahaan</span></li>
                            <br>
                        </ul>
                    </div>	         
                </div>  
            </div>
        </div>
    </div>
    <div class="row row-wrapper">
        <div class="gsc-column   col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12  ">
            <div class="column-inner  bg-size-cover  ">
               <div class="column-content-inner">
                    <div class="column-content wow fadeInUp">
                        <h4 class="text-white wow fadeInUp">Production/Operational</h4>
                        <ul>
                            <li><span style="color: #ffffff;">Memproduksi beton dan precast yang terbaik dan terkontrol</span></li>
                            <li><span style="color: #ffffff;">Melakukan pengadaan bahan baku yang berkualitas</span></li>
                            <li><span style="color: #ffffff;">Menjalankan produktifitas plant yang mengutamakan pelayanan yang baik dan berkesinambungan dengan pelanggan yang efektif dan efisien</span></li>
                            <li><span style="color: #ffffff;">Menjaga lingkungan kerja yang kondusif</span></li>
                            <br>
                        </ul>
                    </div>	         
                </div>  
            </div>
        </div>
        <div class="gsc-column   col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12  ">
            <div class="column-inner  bg-size-cover  ">
               <div class="column-content-inner">
                    <div class="column-content wow fadeInUp">
                        <h4 class="text-white wow fadeInUp">Marketing</h4>
                        <ul>
                            <li><span style="color: #ffffff;">Memberikan pelayanan yang terbaik bagi pelanggan</span></li>
                            <li><span style="color: #ffffff;">Siap bersaing dengan kompetitor lain</span></li>
                            <li><span style="color: #ffffff;">Menjaga komitmen terhadap mutu beton dan precast</span></li>
                            <li><span style="color: #ffffff;">Memberikan penawaran yang kompetitif</span></li>
                            <li><span style="color: #ffffff;">Memperluas area pemasaran keluar pulau Jawa</span></li>
                            <br>
                        </ul>
                    </div>	         
                </div>  
            </div>
        </div>
    </div>
    <div class="row row-wrapper">
        <div class="gsc-column   col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12  ">
            <div class="column-inner  bg-size-cover  ">
               <div class="column-content-inner">
                    <div class="column-content wow fadeInUp">
                        <h4 class="text-white wow fadeInUp">Production/Operational</h4>
                        <ul>
                            <li><span style="color: #ffffff;">Melakukan pelatihan-pelatihan karyawan untuk dapat menangani mega proyek</span></li>
                            <li><span style="color: #ffffff;">Investasi peralatan modern dan terbaru untuk mendukung pelaksanaan proyek</span></li>
                            <li><span style="color: #ffffff;">Memprioritaskan keselamatan, kesehatan, dan lingkungan kerja yang baik dan ramah lingkungan</span></li>
                            <br>
                        </ul>
                    </div>	         
                </div>  
            </div>
        </div>
        <div class="gsc-column   col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12  ">
            <div class="column-inner  bg-size-cover  ">
               <div class="column-content-inner">
                    <div class="column-content wow fadeInUp">
                        <h4 class="text-white wow fadeInUp">Business Development</h4>
                        <ul>
                            <li><span style="color: #ffffff;">Melakukan pelatihan-pelatihan karyawan untuk dapat menangani mega proyek</span></li>
                            <li><span style="color: #ffffff;">Investasi peralatan modern dan terbaru untuk mendukung pelaksanaan proyek</span></li>
                            <li><span style="color: #ffffff;">Memprioritaskan keselamatan, kesehatan, dan lingkungan kerja yang baik dan ramah lingkungan</span></li>
                            <br>
                        </ul>
                    </div>	         
                </div>  
            </div>
        </div>
    </div>
</div>


<!-- Service End -->
@endsection