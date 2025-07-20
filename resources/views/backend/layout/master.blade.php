<!DOCTYPE html>
<html lang="en">


<!-- index.blade.php  21 Nov 2019 03:44:50 GMT -->

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>@yield('page_title', 'Dashbard') - Xforexfxtrst</title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('backend/assets/css/app.min.css') }}">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('backend/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/components.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/bundles/datatables/datatables.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('backend/assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css') }}">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="{{ asset('backend/assets/css/custom.css') }}">
    <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico' />
</head>

<body>
    <div class="loader"></div>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            @include('backend.inc.nav')
            @include('backend.inc.sidebar')
            <!-- Main Content -->
            <div class="main-content">
                @yield('content')
                @include('backend.inc.settings')
            </div>
            @include('backend.inc.footer')
        </div>
    </div>
    <!-- General JS Scripts -->
    <script src="{{ asset('backend/assets/js/app.min.js') }}"></script>
    <!-- JS Libraies -->
    <script src="{{ asset('backend/assets/bundles/apexcharts/apexcharts.min.js') }}"></script>
    <!-- Page Specific JS File -->
    <script src="{{ asset('backend/assets/js/page/index.js') }}"></script>
    <!-- Template JS File -->
    <script src="{{ asset('backend/assets/js/scripts.js') }}"></script>
    <!-- Custom JS File -->
    <script src="{{ asset('backend/assets/js/custom.js') }}"></script>
    <script src="{{ asset('backend/assets/bundles/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('backend/assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js') }}">
    </script>
    <script src="{{ asset('backend/assets/bundles/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/page/datatables.js') }}"></script>

</body>


<!-- index.blade.php  21 Nov 2019 03:47:04 GMT -->

</html>
