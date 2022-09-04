<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">{{ $title }}</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb">
                @if(isset($breadcrumb))
                    @foreach($breadcrumb as $label => $route)
                        @if(is_numeric($label))
                            <li class="breadcrumb-item text-white active">{{ $route }}</li>
                        @elseif(is_array($route))
                            <li class="breadcrumb-item"><a class="txt-bread" href="{{ route($route[0], $route[1]) }}">{{ $label }}</a></li>
                        @else
                            <li class="breadcrumb-item"><a class="txt-bread" href="{{ route($route) }}">{{ $label }}</a></li>
                        @endif
                    @endforeach
                @endif
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->