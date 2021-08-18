<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loader Dashboard</title>

    <!-- favicon -->
    <link rel="icon" href="{{ asset('assets/loader/img/SVG/logo.svg') }}">
    <!-- main css -->
    <link rel="stylesheet" href="{{ asset('assets/loader/css/main.css') }}">
    <!-- bootstrap 5 css -->
    <link rel="stylesheet" href="{{ asset('assets/loader/css/bootstrap.min.css') }}">
    <!-- animate -->
    <link rel="stylesheet" href="{{ asset('assets/loader/css/animate.min.css') }}">
    <!-- owl -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <!-- font-awsom -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <!-- datatable -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <!-- jquery -->
    <script src="{{ asset('assets/loader/js/jquery.min.js') }}"></script>
</head>

<body>
    @include("desa-loader.layouts.navbar")

    <div class="mainDiv my-scrollbar" data-scrollbar>
        @yield("content")
        @include("desa-loader.layouts.footer")
    </div>


    <!-- data table -->
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <!-- smoth Scrollbar -->
    <script src="{{ asset('assets/loader/js/smooth-scrollbar.js') }}" crossorigin="anonymous"
        referrerpolicy="no-referrer"></script>
    <!-- Anime -->
    <script src="{{ asset('assets/loader/js/anime.min.js') }}"></script>
    <!-- Wow -->
    <script src="{{ asset('assets/loader/js/wow.min.js') }}" crossorigin="anonymous" referrerpolicy="no-referrer">
    </script>
    <!-- bootstrap -->
    <script src="{{ asset('assets/loader/js/bootstrap.bundle.min.js') }}"></script>
    <!-- main js -->
    <script src="{{ asset('assets/loader/js/main.js') }}"></script>
</body>

</html>
