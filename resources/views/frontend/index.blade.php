@extends('frontend.layouts.app')
@section('page_title', 'Home')
@section('home_active', 'active')
@section('page_header')
    <div class="header-carousel owl-carousel">
        <div class="header-carousel-item">
            <img src="https://images.unsplash.com/photo-1620288627223-53302f4e8c74?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1920&q=80"
                class="img-fluid w-100" alt="Investment">
            <div class="carousel-caption">
                <div class="container">
                    <div class="row gy-0 gx-5">
                        <div class="col-xl-12 animated fadeInLeft">
                            <div class="text-sm-center text-md-end">
                                <h4 class="text-primary text-uppercase fw-bold mb-4">Welcome To Xforexfxtrst</h4>
                                <h1 class="display-4 text-uppercase text-white mb-4">Invest with <span
                                        class="text-primary">Gold Standard</span> Returns</h1>
                                <p class="mb-5 fs-5">Experience premium investment strategies with our exclusive gold-backed
                                    portfolios. Secure your financial future with our expert guidance.</p>
                                <div class="d-flex justify-content-center justify-content-md-end flex-shrink-0 mb-4">
                                    <a class="btn btn-outline-light rounded-pill py-3 px-4 px-md-5 me-2" href="#"><i
                                            class="fas fa-play-circle me-2"></i> Watch Video</a>
                                    <a class="btn btn-primary rounded-pill py-3 px-4 px-md-5 ms-2" href="#">Learn
                                        More</a>
                                </div>
                                <div class="d-flex align-items-center justify-content-center justify-content-md-end">
                                    <h2 class="text-white me-2">Follow Us:</h2>
                                    <div class="d-flex justify-content-end ms-2">
                                        <a class="btn btn-md-square btn-outline-light rounded-circle me-2" href=""><i
                                                class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-md-square btn-outline-light rounded-circle mx-2" href=""><i
                                                class="fab fa-twitter"></i></a>
                                        <a class="btn btn-md-square btn-outline-light rounded-circle mx-2" href=""><i
                                                class="fab fa-instagram"></i></a>
                                        <a class="btn btn-md-square btn-outline-light rounded-circle ms-2" href=""><i
                                                class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <!-- Abvout Start -->
    <div class="container-fluid about py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-xl-5 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="bg-primary rounded position-relative overflow-hidden floating">
                        <img src="https://images.unsplash.com/photo-1633158829875-e5316a358c6f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"
                            class="img-fluid rounded w-100" alt="About Us">
                    </div>
                </div>
                <div class="col-xl-7 wow fadeInRight" data-wow-delay="0.2s">
                    <div>
                        <h4 class="text-primary">About Us</h4>
                        <h1 class="display-5 mb-4 gold-accent">Wealth Management <span class="text-primary">Perfected</span>
                        </h1>
                        <p class="mb-4">Xforexfxtrst combines traditional investment wisdom with innovative financial
                            technology to create unparalleled wealth-building opportunities. Our gold-backed strategies
                            provide security in volatile markets.</p>
                        <div class="row g-4">
                            <div class="col-md-6 col-lg-6 col-xl-6">
                                <div class="d-flex">
                                    <div><i class="fas fa-lightbulb fa-3x text-primary"></i></div>
                                    <div class="ms-4">
                                        <h4>Gold-Backed Portfolios</h4>
                                        <p>Secure investments anchored in tangible assets</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-6">
                                <div class="d-flex">
                                    <div><i class="fas fa-chart-line fa-3x text-primary"></i></div>
                                    <div class="ms-4">
                                        <h4>Consistent Returns</h4>
                                        <p>Proven strategies for steady wealth growth</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <a href="#" class="btn btn-primary rounded-pill py-3 px-5 flex-shrink-0">Discover
                                    Now</a>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex">
                                    <i class="fas fa-phone-alt fa-2x text-primary me-4"></i>
                                    <div>
                                        <h4>Call Us</h4>
                                        <p class="mb-0 fs-5" style="letter-spacing: 1px;">+1 (888) 888-8888</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <div class="container-fluid service py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Investment Tiers</h4>
                <h1 class="display-5 mb-4 gold-accent">Premium <span class="text-primary">Gold</span> Packages</h1>
                <p class="mb-0">Choose from our exclusive investment tiers designed to maximize returns while minimizing
                    risk through our gold-backed strategies.</p>
            </div>
            <div class="row g-4">
                @foreach ($packages as $package)
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="https://res.cloudinary.com/jerrick/image/upload/v1680719820/642dbfcc81640a001d742a97.jpg"
                                class="img-fluid rounded-top w-100" alt="Bronze Package">
                        </div>
                        <div class="rounded-bottom p-4">
                            <a href="#" class="h4 d-inline-block mb-4 text-dark"> {{$package->name}}</a>
                            <p class="mb-4 text-dark"><strong>Limit: ${{number_format($package->trade_limit_from)}} - ${{number_format($package->trade_limit_to)}} trade</strong>
                                <br>
                                <strong>Price: ${{number_format($package->price)}}</strong>
                                <br>
                                {{$package->description}}
                            </p>
                            <a class="btn btn-primary rounded-pill py-2 px-4" href="{{ route('checkout.package', $package->slug) }}">Buy Now</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <div class="container-fluid feature py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Our Advantages</h4>
                <h1 class="display-5 mb-4 gold-accent">Exclusive <span class="text-primary">Gold</span> Features</h1>
                <p class="mb-0">Experience premium investment management with our exclusive gold-backed features designed
                    for sophisticated investors.</p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="feature-item p-4">
                        <div class="feature-icon p-4 mb-4">
                            <i class="fas fa-shield-alt fa-3x text-primary"></i>
                        </div>
                        <h4 class="text-dark">Gold-Backed Security</h4>
                        <p class="mb-4 text-dark">Portfolios anchored with physical gold reserves for maximum security.</p>
                        <a class="btn btn-primary rounded-pill py-2 px-4 " href="#">Learn More</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="feature-item p-4">
                        <div class="feature-icon p-4 mb-4">
                            <i class="fas fa-chart-line fa-3x text-primary"></i>
                        </div>
                        <h4 class="text-dark">Premium Returns</h4>
                        <p class="mb-4 text-dark">Consistent above-market returns through strategic gold allocation.</p>
                        <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="feature-item p-4">
                        <div class="feature-icon p-4 mb-4">
                            <i class="fas fa-user-lock fa-3x text-primary"></i>
                        </div>
                        <h4 class="text-dark">Private Wealth</h4>
                        <p class="mb-4 text-dark">Exclusive investment opportunities for high-net-worth individuals.</p>
                        <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="feature-item p-4">
                        <div class="feature-icon p-4 mb-4">
                            <i class="fas fa-globe fa-3x text-primary"></i>
                        </div>
                        <h4 class="text-dark">Global Access</h4>
                        <p class="mb-4 text-dark">International markets and gold exchanges at your fingertips.</p>
                        <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonials Section -->
    <div class="container-fluid testimonial py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Client Success</h4>
                <h1 class="display-5 mb-4 gold-accent">Wealth <span class="text-primary">Testimonials</span></h1>
                <p class="mb-0">Hear from our premium investors who have transformed their financial future with our
                    gold-backed strategies.</p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="testimonial-item">
                        <div class="d-flex align-items-center mb-4">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80"
                                class="img-fluid rounded-circle me-3" style="width: 60px; height: 60px;" alt="">
                            <div>
                                <h5 class="mb-0">Robert Chen</h5>
                                <p class="mb-0 text-primary">Gold Tier Investor</p>
                            </div>
                        </div>
                        <p class="mb-0">"Xforexfxtrst's gold-backed strategy provided the security I needed during market
                            volatility while still delivering impressive returns. My portfolio has grown 35% in just two
                            years."</p>
                        <div class="d-flex text-primary mt-3">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="testimonial-item">
                        <div class="d-flex align-items-center mb-4">
                            <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80"
                                class="img-fluid rounded-circle me-3" style="width: 60px; height: 60px;" alt="">
                            <div>
                                <h5 class="mb-0">Amanda Rodriguez</h5>
                                <p class="mb-0 text-primary">Silver Tier Investor</p>
                            </div>
                        </div>
                        <p class="mb-0">"The peace of mind that comes with knowing my investments are gold-backed is
                            invaluable. Xforexfxtrst's team has expertly navigated my portfolio through uncertain economic
                            times."</p>
                        <div class="d-flex text-primary mt-3">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="testimonial-item">
                        <div class="d-flex align-items-center mb-4">
                            <img src="https://images.unsplash.com/photo-1504593811423-6dd665756598?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"
                                class="img-fluid rounded-circle me-3" style="width: 60px; height: 60px;" alt="">
                            <div>
                                <h5 class="mb-0">James Wilson</h5>
                                <p class="mb-0 text-primary">Bronze Tier Investor</p>
                            </div>
                        </div>
                        <p class="mb-0">"As someone new to investing, Xforexfxtrst made me feel secure with their gold-backed
                            approach. My initial investment has already grown by 22% in the first year alone!"</p>
                        <div class="d-flex text-primary mt-3">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Floating Shapes -->
    <div class="custom-shape shape-1"></div>
    <div class="custom-shape shape-2"></div>

    <script>
        // Simple animation for elements
        document.addEventListener('DOMContentLoaded', function() {
            // Add intersection observer for animations
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animate__animated');
                        entry.target.classList.add('animate__fadeInUp');
                    }
                });
            }, {
                threshold: 0.1
            });

            // Observe all elements with wow class
            document.querySelectorAll('.wow').forEach(el => {
                observer.observe(el);
            });
        });
    </script>

@endsection
