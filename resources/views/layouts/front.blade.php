<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    {{--
    <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @yield('title')
    </title>

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">


    <!-- Styles -->
    <link href="{{ asset('frontend/css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/bootstrap5.css') }}" rel="stylesheet">

    <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">


    {{-- Owl carousel --}}
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.theme.green.css') }}">

    {{-- google fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">

    {{-- font awesome --}}
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" />
    <style>
        a {
            text-decoration: none !important;
            color: #000;
        }
    </style>



</head>

<body>

    @include('layouts.inc.frontnavbar')
    <div class="content">
        @yield('content')
        @include('layouts.inc.footer')
    </div>

    <!-- Scripts -->



    <script src="{{ asset('frontend/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/js/custom.js') }}"></script>
    <script src="{{ asset('frontend/js/checkout.js') }}"></script>

    <script src="{{ asset('frontend/js/popper.min.js') }}"></script>


    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

    <script>
    
        var availableTags = [];
        $.ajax({
            method: "GET",
            url: "/product-list",
        
            success: function (response) {
            //    console.log(response);
               startAutoComplete(response);

            },
        });

        function startAutoComplete(availableTags)
        {
            $( "#search_product" ).autocomplete({
                source: availableTags
            });
        }
        
       
    </script>

 


    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        
     @if (session('status'))
    <script>
        swal("", "{{ session('status') }}", "success");
        // swal("thanks","{{ session('status') }}","success");
        
    </script>
    @endif

    @yield('scripts')
</body>

</html>