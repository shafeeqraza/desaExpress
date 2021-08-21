<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dispatcher Dashboard</title>

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
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <!-- font-awsom -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <!-- datatable -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" />
    {{-- sweet alert --}}
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    {{-- tostar --}}
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <!-- jquery -->
    <script src="{{ asset('assets/loader/js/jquery.min.js') }}"></script>
</head>

<body>
    @include("desa-dispatcher.layouts.navbar")

    <div class="mainDiv my-scrollbar" data-scrollbar>
        @yield("content")

        @include("desa-dispatcher.layouts.footer")
    </div>


    <!-- Delete Customer Modal -->
    {{-- <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="deleteLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteLabel">Delete DIS</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <h5>Are You Sure ?</h5>
                    <input type="hidden" name="id" id="ID">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button id="deleteButton" type="button" class="btn btn-danger">Yes</button>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- data table -->
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <!-- smoth Scrollbar -->
    <script src="{{ asset("assets/dispatcher/js/smooth-scrollbar.js") }}"></script>
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
