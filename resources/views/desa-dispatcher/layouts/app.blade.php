<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layout with Sidebar</title>

    <!-- favicon -->
    <link rel="icon" href="{{ asset("assets/dispatcher/img/SVG/logo.svg") }}">
    <!-- main css -->
    <link rel="stylesheet" href="{{ asset("assets/dispatcher/css/main.css") }}">
    <!-- bootstrap 5 css -->
    <link rel="stylesheet" href="{{ asset("assets/dispatcher/css/bootstrap.min.css") }}">
    <!-- animate -->
    <link rel="stylesheet" href="{{ asset("assets/dispatcher/css/animate.min.css") }}">
    <!-- owl -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <!-- font-awsom -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    <!-- datatable -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" />
 <!-- jquery -->
 <script src="{{ asset('assets/loader/js/jquery.min.js') }}"></script>
</head>

<body>
    @include("desa-dispatcher.layouts.navbar")

    <div class="mainDiv my-scrollbar" data-scrollbar>
        @yield("content")

        @include("desa-dispatcher.layouts.footer")
    </div>



    <!-- data table -->
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <!-- smoth Scrollbar -->
    <script src="{{ asset("assets/dispatcher/js/smooth-scrollbar.js") }}" ></script>
    <!-- Anime -->
    <script src="{{ asset("assets/dispatcher/js/anime.min.js") }}"></script>
    <!-- Wow -->
    <script src="{{ asset("assets/dispatcher/js/wow.min.js") }}"></script>
    <!-- bootstrap -->
    <script src="{{ asset("assets/dispatcher/js/bootstrap.bundle.min.js") }}"></script>
    <!-- main js -->
    <script src="{{ asset("assets/dispatcher/js/main.js") }}"></script>
</body>

</html>
