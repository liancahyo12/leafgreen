<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Semen Indogreeen - TO BE LEADER IN THE READY MIXED INDUSTRY</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="/sis.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ mix('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ mix('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ mix('lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    {{-- <link href="css/bootstrap.min.css" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{ mix('css/style.css') }}">
    <link rel="stylesheet" href="{{ mix('css/bootstrap.min.css') }}">
    <!-- Template Stylesheet -->
    {{-- <link href="css/style.css" rel="stylesheet"> --}}
</head>
<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    @include('layout.header')
    @yield('content')
    @include('layout.footer')

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ mix('lib/wow/wow.min.js') }}"></script>
    <script src="{{ mix('lib/easing/easing.min.js') }}"></script>
    <script src="{{ mix('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ mix('lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ mix('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ mix('lib/isotope/isotope.pkgd.min.js') }}"></script>
    <script src="{{ mix('lib/lightbox/js/lightbox.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ mix('js/main.js') }}"></script>
    <script>
        function changeLanguage(lang){
            window.location='{{url("change-language")}}/'+lang;
        }
    </script>
</body>

</html>