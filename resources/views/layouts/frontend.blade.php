<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>LMSMart </title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('Frontend/images/favicon.png') }}">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>

    <!-- CSS
	============================================ -->

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{ asset('Frontend/css/plugins/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Frontend/css/plugins/flaticon.css') }}">

    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('Frontend/css/plugins/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Frontend/css/plugins/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Frontend/css/plugins/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Frontend/css/plugins/nice-select2.css') }}">
    <link rel="stylesheet" href="{{ asset('Frontend/css/plugins/jquery.powertip.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Frontend/css/plugins/glightbox.min.css') }}">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('Frontend/css/style.css') }}"> 
    <link rel="stylesheet" href="{{ asset('Frontend/css/style.min.css') }}">

</head>

<body>

    <div class="main-wrapper">

        {{-- <!-- Preloader Start  -->
        <div class="preloader">
            <div class="loader"></div>
        </div>
        <!-- Preloader End  --> --}}

        



        @yield('content')

        @include('layouts.inc.footer')

        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>




    </div>


    

    <!-- JS
    ============================================ -->

    <!-- Jquery JS -->
    <script src="{{ asset('Frontend/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('Frontend/js/vendor/modernizr-3.11.7.min.js') }}"></script>

    <!-- Bootstrap JS -->
    <script src="{{ asset('Frontend/js/plugins/popper.min.js') }}"></script>
    <script src="{{ asset('Frontend/js/plugins/bootstrap.min.js') }}"></script>

    <!-- Plugins JS -->
    <script src="{{ asset('Frontend/js/plugins/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('Frontend/js/plugins/nice-select2.js') }}"></script>
    <script src="{{ asset('Frontend/js/plugins/jquery.powertip.min.js') }}"></script>
    <script src="{{ asset('Frontend/js/plugins/glightbox.min.js') }}"></script>

    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

    <script>
        var availableTags = [];
        $.ajax({
            method: "GET",
            url: "/course-list",
            success: function (response) {
                // console.log(response);
                startAutoComplete(response);
            }
        });

        function startAutoComplete(availableTags)
        {
            $( "#search_category" ).autocomplete({
                source: availableTags
            });
        }
        
    </script>


    <!-- Main JS -->
    {{-- <script src="{{ asset('Frontend/js/main.js') }}"></script> --}}

    <!-- Google Map js -->
    {{-- <script src="https://maps.googleapis.com/maps/api/js?key="></script>
    <script src="{{ asset('Frontend/js/map-script.js') }}"></script> --}}

</body>


</html>