<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>@yield('page_title') - Xforexfxtrst</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link rel="stylesheet" href="{{asset('frontend/lib/animate/animate.min.css')}}"/>
        <link href="{{asset('frontend/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">
        <link href="{{asset('frontend/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{asset('frontend/css/style.css')}}" rel="stylesheet">
    </head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Topbar Start -->
       @include('frontend.inc.topbar')
        <!-- Topbar End -->

        <!-- Navbar & Hero Start -->
       @include('frontend.inc.navbar')
        <!-- Navbar & Hero End -->


       @yield('content')

        <!-- Footer Start -->
        @include('frontend.inc.footer')
        <!-- Footer End -->
        
        <!-- Copyright Start -->
        <div class="container-fluid copyright py-4">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-md-6 text-center text-md-start mb-md-0">
                        <span class="text-body"><a href="#" class="border-bottom text-white"><i class="fas fa-copyright text-light me-2"></i>Your Site Name</a>, All right reserved.</span>
                    </div>
                    <div class="col-md-6 text-center text-md-end text-body">
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{asset('frontend/lib/wow/wow.min.js')}}"></script>
        <script src="{{asset('frontend/lib/easing/easing.min.js')}}"></script>
        <script src="{{asset('frontend/lib/waypoints/waypoints.min.js')}}"></script>
        <script src="{{asset('frontend/lib/counterup/counterup.min.js')}}"></script>
        <script src="{{asset('frontend/lib/lightbox/js/lightbox.min.js')}}"></script>
        <script src="{{asset('frontend/lib/owlcarousel/owl.carousel.min.js')}}"></script>
        

        <!-- Template Javascript -->
        <script src="{{asset('frontend/js/main.js')}}"></script>
    </body>

</html>