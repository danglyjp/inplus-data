<!doctype html>
<html lang="en" data-layout="horizontal" data-layout-style="" data-layout-position="fixed" data-topbar="light">


<head>

    <meta charset="utf-8" />
    <title>@yield('title')｜イン・プラス株式会社｜ 体験を、最高の感動に</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="@yield('description')" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/cropped-favicon-4-270x270.png">

    <!-- plugin css -->
    <!-- <link href="assets/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css" /> -->

    <!-- Layout config Js -->
    <script src="{{asset('/')}}assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="{{asset('/')}}assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{asset('/')}}assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{asset('/')}}assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{asset('/')}}assets/css/custom.min.css" rel="stylesheet" type="text/css" />
    @yield('head')
</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

    @include('layouts.header')

<!-- removeNotificationModal -->
<div id="removeNotificationModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="NotificationModalbtn-close"></button>
            </div>
            <div class="modal-body">
                <div class="mt-2 text-center">
                    <lord-icon src="{{asset('/')}}https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                    <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                        <h4>Are you sure ?</h4>
                        <p class="text-muted mx-4 mb-0">Are you sure you want to remove this Notification ?</p>
                    </div>
                </div>
                <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                    <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn w-sm btn-danger" id="delete-notification">Yes, Delete It!</button>
                </div>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

        <div class="main-content">

            @yield('main')
            <!-- End Page-content -->

            @include('layouts.footer')

        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->


    <!-- JAVASCRIPT -->
    <script src="{{asset('/')}}assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- <script src="{{asset('/')}}assets/libs/simplebar/simplebar.min.js"></script>
    <script src="{{asset('/')}}assets/libs/node-waves/waves.min.js"></script>
    <script src="{{asset('/')}}assets/libs/feather-icons/feather.min.js"></script>
    <script src="{{asset('/')}}assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="{{asset('/')}}assets/js/plugins.js"></script> -->

    <!-- apexcharts -->
    <!-- <script src="{{asset('/')}}assets/libs/apexcharts/apexcharts.min.js"></script> -->

    <!-- Vector map-->
    <!-- <script src="{{asset('/')}}assets/libs/jsvectormap/js/jsvectormap.min.js"></script>
    <script src="{{asset('/')}}assets/libs/jsvectormap/maps/world-merc.js"></script> -->

    <!-- Dashboard init -->
    <!-- <script src="{{asset('/')}}assets/js/pages/dashboard-analytics.init.js"></script> -->

    <!-- App js -->
    <!-- <script src="{{asset('/')}}assets/js/app.js"></script> -->
    @stack('script')
</body>


</html>