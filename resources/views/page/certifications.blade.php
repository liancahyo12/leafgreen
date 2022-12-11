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
                @foreach ($certification as $position)
                    <tr style="height:130px">
                        <td>
                            <img src="{{ $position->logo }}" alt="iso 14001" height="100px">
                        </td>
                        <td style="width:5%"></td>
                        <td>
                            <h4 class="text-dark wow fadeInUp">{{ $position->nama }}</h4>
                            <p class="text-dark">{{ $position->description }}</p>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection