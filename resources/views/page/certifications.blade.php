@extends('layout.pageindex',[
    'title' => __('home.certifications'),
    'subtitle' => __('home.certifications'),
    'breadcrumb' => [
        __('home.home') => 'home',
        __('home.certifications')
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
        <div class="column-content wow fadeInUp">
            <table>
                <tr style="height:130px">
                    <td>
                        <img src="/img/iso-14001.png" alt="iso 14001" height="100px">
                    </td>
                    <td style="width:5%"></td>
                    <td>
                        <h4 class="text-dark wow fadeInUp">ISO 14001 - 2015</h4>
                        <p class="text-dark">Sistem Manajemen Lingkungan</p>
                    </td>
                </tr>
                <tr style="height:130px">
                    <td>
                        <img src="/img/iso-45001.png" alt="iso 14001" height="100px">
                    </td>
                    <td style="width:5%"></td>
                    <td>
                        <h4 class="text-dark wow fadeInUp">ISO 45001 - 2018</h4>
                        <p class="text-dark">Sistem Manajemen Kesehatan dan Keselamatan Kerja</p>
                    </td>
                </tr>
                <tr style="height:130px">
                    <td>
                        <img src="/img/iso-9001.png" alt="iso 14001" height="100px">
                    </td>
                    <td style="width:5%"></td>
                    <td>
                        <h4 class="text-dark wow fadeInUp">ISO 9001 - 2015</h4>
                        <p class="text-dark">Standar Manajemen Mutu</p>
                    </td>
                </tr>
                <tr style="height:130px">
                    <td>
                        <img src="/img/iso.png" alt="iso 14001" height="100px">
                    </td>
                    <td style="width:5%"></td>
                    <td>
                        <h4 class="text-dark wow fadeInUp">ISO 31000 - 2018</h4>
                        <p class="text-dark">Manajemen Risiko</p>
                    </td>
                </tr>
                <tr style="height:130px">
                    <td>
                        <img src="/img/iso.png" alt="iso 14001" height="100px">
                    </td>
                    <td style="width:5%"></td>
                    <td>
                        <h4 class="text-dark wow fadeInUp">ISO 37001 - 2016</h4>
                        <p class="text-dark">Sistem Manajemen Anti Penyuapan</p>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>
@endsection