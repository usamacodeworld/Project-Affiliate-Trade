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
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Roboto:wght@400;500;700;900&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link rel="stylesheet" href="{{ asset('frontend/lib/animate/animate.min.css') }}" />
    <link href="{{ asset('frontend/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">
    <style>
        .sticky-top.navbar-light>.navbar-brand>img {
            max-height: 100px !important;
        }

        .navbar-light>.navbar-brand>img {
            max-height: 100px !important;
        }
    </style>

    <style>
        :root {
            --dark-bg: #121212;
            --dark-card: #1e1e1e;
            --gold: #D4AF37;
            --gold-light: #e6c567;
            --gold-dark: #b08c2e;
            --white: #ffffff;
            --light-gray: #e0e0e0;
            --dark-gray: #2d2d2d;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Montserrat', sans-serif;
            background: var(--dark-bg);
            color: var(--light-gray);
            overflow-x: hidden;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Playfair Display', serif;
            color: var(--white);
        }

        .text-primary {
            color: var(--gold) !important;
        }

        .btn-primary {
            background: var(--gold);
            border: none;
            color: #000;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background: var(--gold-dark);
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .btn-outline-light {
            border: 1px solid var(--gold);
            color: var(--gold);
            transition: all 0.3s ease;
        }

        .btn-outline-light:hover {
            background: var(--gold);
            color: #000;
        }

        /* Header Carousel */
        .header-carousel {
            position: relative;
            height: 100vh;
            overflow: hidden;
        }

        .header-carousel-item {
            position: relative;
            height: 100%;
        }

        .header-carousel-item::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to right, rgba(18, 18, 18, 0.9), rgba(18, 18, 18, 0.6));
        }

        .header-carousel-item img {
            height: 100%;
            object-fit: cover;
            width: 100%;
        }

        .carousel-caption {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            z-index: 10;
        }

        /* About Section */
        .about {
            background: var(--dark-bg);
            padding: 100px 0;
        }

        .about .bg-primary {
            background: var(--dark-card) !important;
            border: 1px solid var(--gold);
            position: relative;
            overflow: hidden;
        }

        /* Services/Packages Section */
        .service {
            background: linear-gradient(to bottom, var(--dark-bg), #0a0a0a);
            padding: 100px 0;
        }

        .service-item {
            background: var(--dark-card);
            border-radius: 10px;
            overflow: hidden;
            transition: all 0.3s ease;
            border: 1px solid var(--dark-gray);
        }

        .service-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
            border-color: var(--gold);
        }

        .service-img img {
            height: 200px;
            width: 100%;
            object-fit: cover;
        }

        /* Features Section */
        .feature {
            background: var(--dark-bg);
            padding: 100px 0;
        }

        .feature-item {
            background: var(--dark-card);
            border-radius: 10px;
            transition: all 0.3s ease;
            border: 1px solid var(--dark-gray);
            height: 100%;
        }

        .feature-item:hover {
            border-color: var(--gold);
            transform: translateY(-5px);
        }

        .feature-icon {
            background: rgba(212, 175, 55, 0.1);
            border-radius: 50%;
            width: 120px;
            height: 120px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 30px;
        }

        /* Testimonials */
        .testimonial {
            background: linear-gradient(to bottom, #0a0a0a, var(--dark-bg));
            padding: 100px 0;
        }

        .testimonial-item {
            background: var(--dark-card);
            border-radius: 10px;
            padding: 40px;
            position: relative;
            border: 1px solid var(--dark-gray);
        }

        .testimonial-item::before {
            content: '"';
            position: absolute;
            top: 20px;
            left: 20px;
            font-size: 80px;
            font-family: Georgia, serif;
            color: var(--gold);
            opacity: 0.2;
        }

        /* Team Section */
        .team {
            background: var(--dark-bg);
            padding: 100px 0;
        }

        .team-item {
            background: var(--dark-card);
            border-radius: 10px;
            overflow: hidden;
            text-align: center;
            transition: all 0.3s ease;
            border: 1px solid var(--dark-gray);
        }

        .team-item:hover {
            transform: translateY(-10px);
            border-color: var(--gold);
        }

        .team-img {
            height: 250px;
            overflow: hidden;
        }

        .team-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .team-item:hover .team-img img {
            transform: scale(1.1);
        }

        /* Gold Accents */
        .gold-accent {
            position: relative;
        }

        .gold-accent::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 80px;
            height: 3px;
            background: var(--gold);
        }

        /* Custom Shapes */
        .custom-shape {
            position: absolute;
            z-index: -1;
            opacity: 0.1;
        }

        .shape-1 {
            top: 10%;
            right: 5%;
            width: 200px;
            height: 200px;
            border-radius: 50%;
            background: var(--gold);
        }

        .shape-2 {
            bottom: 15%;
            left: 5%;
            width: 150px;
            height: 150px;
            background: var(--gold);
            transform: rotate(45deg);
        }

        /* Animation */
        @keyframes float {
            0% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-20px);
            }

            100% {
                transform: translateY(0px);
            }
        }

        .floating {
            animation: float 6s ease-in-out infinite;
        }

        /* Responsive */
        @media (max-width: 992px) {
            .carousel-caption .display-4 {
                font-size: 2.5rem;
            }
        }

        @media (max-width: 768px) {
            .carousel-caption .display-4 {
                font-size: 2rem;
            }

            .carousel-caption p {
                font-size: 1rem;
            }

            .btn {
                padding: 8px 16px;
                font-size: 0.9rem;
            }
        }

        .footer{
            background-color: var(--dark-bg)
        }

        
    </style>
</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
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
                    <span class="text-body"><a href="#" class="border-bottom text-white"><i
                                class="fas fa-copyright text-light me-2"></i>Your Site Name</a>, All right
                        reserved.</span>
                </div>
                <div class="col-md-6 text-center text-md-end text-body">
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="fa fa-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('frontend/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('frontend/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('frontend/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('frontend/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('frontend/lib/lightbox/js/lightbox.min.js') }}"></script>
    <script src="{{ asset('frontend/lib/owlcarousel/owl.carousel.min.js') }}"></script>


    <!-- Template Javascript -->
    <script src="{{ asset('frontend/js/main.js') }}"></script>
</body>

</html>
