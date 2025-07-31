@extends('frontend.layouts.app')
@section('content')
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-container">
            <div class="hero-content">
                <div class="row w-100 g-4 align-items-center justify-content-between">
                    <!-- Text Content -->
                    <div class="col-12 col-lg-7">
                        <div class="hero-text-section">
                            <h1 class="hero-title">Monetize Your Trading Skills</h1>
                            <div class="hero-subtitle-container">
                                <div class="hero-subtitle">
                                    <div class="hero-description">
                                        <span class="word-animate">Reach </span>
                                        <span class="word-animate">your </span>
                                        <span class="word-animate">potential </span>
                                        <span class="word-animate">with </span>
                                        <span class="word-animate">Xforexfxtrst! </span>
                                        <span class="word-animate">We </span>
                                        <span class="word-animate">invest </span>
                                        <span class="word-animate">in </span>
                                        <span class="word-animate">your </span>
                                        <span class="word-animate">trading </span>
                                        <span class="word-animate">strategies </span>
                                        <span class="word-animate">and </span>
                                        <span class="word-animate">reward </span>
                                        <span class="word-animate">you </span>
                                        <span class="word-animate">with </span>
                                        <span class="word-animate">up </span>
                                        <span class="word-animate">to </span>
                                        <span class="word-animate word-blur">95% </span>
                                        <span class="word-animate word-blur">profit </span>
                                        <span class="word-animate word-blur">share </span>
                                        <span class="word-animate word-blur">in </span>
                                        <span class="word-animate word-blur">our </span>
                                        <span class="word-animate word-blur">no-risk </span>
                                        <span class="word-animate word-blur">trading </span>
                                        <span class="word-animate word-blur">environment. </span>
                                    </div>
                                </div>
                            </div>
                            <!-- CTA Buttons -->
                            <div class="hero-buttons">
                                <button class="btn hero-btn-primary">Join Now</button>
                                <a href="#" class="btn hero-btn-secondary" target="_blank">Free Trial</a>
                            </div>
                        </div>
                    </div>

                    <!-- Video Section -->
                    <div class="col-12 col-lg-5">
                        <div class="hero-video-section">
                            <video class="hero-video" autoplay loop muted playsinline>
                                <source src="{{ asset('frontend/assest/media/Hero2.webm') }}" type="video/webm">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>

                <!-- Stats Section -->
                <section class="hero-stats">
                    <div class="hero-stats-container">
                        <div class="row w-100 justify-content-center text-center">
                            <div class="col-4">
                                <div class="hero-stat-item">
                                    <div class="hero-stat-content">
                                        <img alt="Icon 1" class="hero-stat-icon"
                                            src="{{ asset('frontend/assest/images/Vector1.svg') }}">
                                        <span class="hero-stat-number">95%</span>
                                    </div>
                                    <p class="hero-stat-label">Profit Share</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="hero-stat-item">
                                    <div class="hero-stat-content">
                                        <img alt="Icon 2" class="hero-stat-icon"
                                            src="{{ asset('frontend/assest/images/Vector3.svg') }}">
                                        <span class="hero-stat-number">1:200</span>
                                    </div>
                                    <p class="hero-stat-label">Leverage</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="hero-stat-item">
                                    <div class="hero-stat-content">
                                        <img alt="Icon 3" class="hero-stat-icon"
                                            src="{{ asset('frontend/assest/images/Vector0.svg') }}">
                                        <span class="hero-stat-number">No</span>
                                    </div>
                                    <p class="hero-stat-label">High Watermark</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>

    <!-- Rewarding Excellence Section -->
    <section class="rewarding-section">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="container">


                        <!-- Main Content Row -->
                        <div class="row g-3 align-items-center">
                            <!-- Left Side - Image (col-6) -->
                            <div class="col-12 col-lg-6 mb-4 mb-md-0">
                                <div class="rewarding-image-container text-center">
                                    <img alt="Lottie Animation" loading="lazy" width="646" height="465"
                                        class="rewarding-image img-fluid"
                                        src="{{ asset('frontend/assest/images/pcsteps.png') }}">
                                </div>
                                <!-- Title and Description -->
                                <div class="row mb-4">
                                    <div class="col-12 text-center text-md-start">
                                        <h2 class="rewarding-title">Rewarding Excellence</h2>
                                        <p class="rewarding-description">
                                            Join our trader community and become part of something bigger. Our traders
                                            enjoy a
                                            profit share of up to 95% on even our entry-level challenge, starting from
                                            only $30!
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Right Side - Cards Grid (col-6) -->
                            <div class="col-12 col-lg-6">
                                <!-- Upper Row -->
                                <div class="row mb-3">
                                    <div class="col-12 col-md-6 mb-3">
                                        <div class="step-card h-100">
                                            <div class="step-header">
                                                <div class="step-number">1</div>
                                                <span class="step-label">Step</span>
                                            </div>
                                            <div class="step-title">
                                                <p>Start your Xforexfxtrst Challenge</p>
                                            </div>
                                            <div class="step-description">
                                                <p>Choose your challenge from our 1-Step and 2-Step challenges. Pass the
                                                    necessary steps and you can move on to the next stage of your
                                                    trading career.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 mb-3">
                                        <div class="step-card h-100">
                                            <div class="step-header">
                                                <div class="step-number">2</div>
                                                <span class="step-label">Step</span>
                                            </div>
                                            <div class="step-title">
                                                <p>Funded Phase</p>
                                            </div>
                                            <div class="step-description">
                                                <p>Complete your challenge, and you are now a funded trader, eligible
                                                    for up to 95% of the profits your winning strategies generate, with
                                                    zero risk to you.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Lower Row -->
                                <div class="row">
                                    <div class="col-12 col-md-6 mb-3">
                                        <div class="step-card h-100">
                                            <div class="step-header">
                                                <div class="step-number">3</div>
                                                <span class="step-label">Step</span>
                                            </div>
                                            <div class="step-title">
                                                <p>Scale your trading</p>
                                            </div>
                                            <div class="step-description">
                                                <p>Upgrade your account by completing additional Xforexfxtrst challenges.
                                                    The
                                                    higher the challenge level, the higher your funded trading, up to
                                                    $100,000.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 mb-3">
                                        <div class="step-card h-100">
                                            <div class="step-header">
                                                <div class="step-number">4</div>
                                                <span class="step-label">Step</span>
                                            </div>
                                            <div class="step-title">
                                                <p>Enjoy your profits</p>
                                            </div>
                                            <div class="step-description">
                                                <p>Choose your preferred payment method and see your share of all
                                                    trading profits in your account, typically seven days after your
                                                    first winning trade.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Trading Plans Slider Section -->
    <section class="trading-plans-section">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <!-- Tabs -->
                    <div class="trading-tabs-container">
                        <div class="trading-tabs">
                            <button class="trading-tab active" data-tab="1-step">
                                <span class="d-md-none">1 Step</span>
                                <span class="d-none d-md-inline">1 Step</span>
                            </button>
                            <button class="trading-tab" data-tab="2-steps">
                                <span class="d-md-none">2S</span>
                                <span class="d-none d-md-inline">2 Steps</span>
                            </button>
                            <button class="trading-tab" data-tab="xpzero">
                                <span class="d-md-none">XPZ</span>
                                <span class="d-none d-md-inline">XPZero</span>
                            </button>
                        </div>
                    </div>

                    <!-- Slider Container -->
                    <div class="trading-slider-container">
                        <div class="slider-gradient-left"></div>

                        <!-- 1 Step Slider -->
                        <div class="trading-slider active" id="slider-1-step">
                            <div class="owl-carousel owl-theme" id="owl-1-step">
                                @foreach ($packages as $package)
                                    <a href="{{ route('checkout.package', $package->slug) }}">
                                        <div class="trading-card">
                                            <div class="card-content">
                                                <h3 class="card-title">{{ $package->name }}</h3>
                                                <div class="card-image-container">
                                                    <img alt="Trading sticks" class="card-image"
                                                        src="{{ asset('frontend/assest/images/sticks.png') }}">
                                                </div>
                                                <p class="card-description">Entry-level challenge for aspiring traders
                                                    starting
                                                    their journey.</p>
                                                <ul class="card-features">
                                                    <li class="feature-item">
                                                        <img alt="check icon" class="check-icon"
                                                            src="{{ asset('frontend/assest/images/icon_check1.svg') }}">
                                                        <p>Trade Limit From ${{ $package->trade_limit_from }}</p>
                                                    </li>
                                                    <li class="feature-item">
                                                        <img alt="check icon" class="check-icon"
                                                            src="{{ asset('frontend/assest/images/icon_check1.svg') }}">
                                                        <p>Trade Limit To ${{ $package->trade_limit_to }}</p>

                                                    </li>
                                                    <li class="feature-item">
                                                        <img alt="check icon" class="check-icon"
                                                            src="{{ asset('frontend/assest/images/icon_check1.svg') }}">
                                                        <p>Price ${{ $package->price }}</p>

                                                    </li>

                                                    <li class="feature-item">
                                                        <img alt="check icon" class="check-icon"
                                                            src="{{ asset('frontend/assest/images/icon_check1.svg') }}">
                                                        <p>Leverage {{ $package->leverage }}</p>

                                                    </li>

                                                    <li class="feature-item">
                                                        <img alt="check icon" class="check-icon"
                                                            src="{{ asset('frontend/assest/images/icon_check1.svg') }}">
                                                        <p>Account Size ${{ number_format($package->account_size) }}</p>

                                                    </li>

                                                    <li class="feature-item">
                                                        <img alt="check icon" class="check-icon"
                                                            src="{{ asset('frontend/assest/images/icon_check1.svg') }}">
                                                        <p>{{ $package->description }}</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                        </div>

                        <!-- 2 Steps Slider -->
                        <div class="trading-slider" id="slider-2-steps">
                            <div class="owl-carousel owl-theme" id="owl-2-steps">
                                @foreach ($packages as $package)
                                    <a href="{{ route('checkout.package', $package->slug) }}">
                                        <div class="trading-card">
                                            <div class="card-content">
                                                <h3 class="card-title">{{ $package->name }}</h3>
                                                <div class="card-image-container">
                                                    <img alt="Trading sticks" class="card-image"
                                                        src="{{ asset('frontend/assest/images/sticks.png') }}">
                                                </div>
                                                <p class="card-description">Entry-level challenge for aspiring traders
                                                    starting
                                                    their journey.</p>
                                                <ul class="card-features">
                                                    <li class="feature-item">
                                                        <img alt="check icon" class="check-icon"
                                                            src="{{ asset('frontend/assest/images/icon_check1.svg') }}">
                                                        <p>Trade Limit From ${{ $package->trade_limit_from }}</p>
                                                    </li>
                                                    <li class="feature-item">
                                                        <img alt="check icon" class="check-icon"
                                                            src="{{ asset('frontend/assest/images/icon_check1.svg') }}">
                                                        <p>Trade Limit To ${{ $package->trade_limit_to }}</p>

                                                    </li>
                                                    <li class="feature-item">
                                                        <img alt="check icon" class="check-icon"
                                                            src="{{ asset('frontend/assest/images/icon_check1.svg') }}">
                                                        <p>Price ${{ $package->price }}</p>

                                                    </li>

                                                    <li class="feature-item">
                                                        <img alt="check icon" class="check-icon"
                                                            src="{{ asset('frontend/assest/images/icon_check1.svg') }}">
                                                        <p>Leverage {{ $package->leverage }}</p>

                                                    </li>

                                                    <li class="feature-item">
                                                        <img alt="check icon" class="check-icon"
                                                            src="{{ asset('frontend/assest/images/icon_check1.svg') }}">
                                                        <p>Account Size ${{ number_format($package->account_size) }}</p>

                                                    </li>
                                                    <li class="feature-item">
                                                        <img alt="check icon" class="check-icon"
                                                            src="{{ asset('frontend/assest/images/icon_check1.svg') }}">
                                                        <p>{{ $package->description }}</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                        </div>

                        <!-- XPZero Slider -->
                        <div class="trading-slider" id="slider-xpzero">
                            <div class="owl-carousel owl-theme" id="owl-xpzero">
                                @foreach ($packages as $package)
                                    <a href="{{ route('checkout.package', $package->slug) }}">
                                        <div class="trading-card">
                                            <div class="card-content">
                                                <h3 class="card-title">{{ $package->name }}</h3>
                                                <div class="card-image-container">
                                                    <img alt="Trading sticks" class="card-image"
                                                        src="{{ asset('frontend/assest/images/sticks.png') }}">
                                                </div>
                                                <p class="card-description">Entry-level challenge for aspiring traders
                                                    starting
                                                    their journey.</p>
                                                <ul class="card-features">
                                                    <li class="feature-item">
                                                        <img alt="check icon" class="check-icon"
                                                            src="{{ asset('frontend/assest/images/icon_check1.svg') }}">
                                                        <p>Trade Limit From ${{ $package->trade_limit_from }}</p>
                                                    </li>
                                                    <li class="feature-item">
                                                        <img alt="check icon" class="check-icon"
                                                            src="{{ asset('frontend/assest/images/icon_check1.svg') }}">
                                                        <p>Trade Limit To ${{ $package->trade_limit_to }}</p>

                                                    </li>
                                                    <li class="feature-item">
                                                        <img alt="check icon" class="check-icon"
                                                            src="{{ asset('frontend/assest/images/icon_check1.svg') }}">
                                                        <p>Price ${{ $package->price }}</p>

                                                    </li>

                                                    <li class="feature-item">
                                                        <img alt="check icon" class="check-icon"
                                                            src="{{ asset('frontend/assest/images/icon_check1.svg') }}">
                                                        <p>Leverage {{ $package->leverage }}</p>

                                                    </li>

                                                    <li class="feature-item">
                                                        <img alt="check icon" class="check-icon"
                                                            src="{{ asset('frontend/assest/images/icon_check1.svg') }}">
                                                        <p>Account Size ${{ number_format($package->account_size) }}</p>

                                                    </li>
                                                    <li class="feature-item">
                                                        <img alt="check icon" class="check-icon"
                                                            src="{{ asset('frontend/assest/images/icon_check1.svg') }}">
                                                        <p>{{ $package->description }}</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                        </div>

                        <div class="slider-gradient-right d-none d-md-block"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Choose your Challenge Section -->
    <section class="challenge-section">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="challenge-container">
                        <!-- Title and Description -->
                        <div class="row mb-4">
                            <div class="col-12 text-center">
                                <h2 class="challenge-title">Choose your Challenge</h2>
                                <p class="challenge-description">
                                    The Challenge fee is reimbursed to you with the first reward on your funded account.
                                </p>
                            </div>
                        </div>

                        <!-- Tab Navigation -->
                        <div class="challenge-tabs-container">
                            <div class="challenge-tabs">
                                <button class="challenge-tab active" data-challenge-tab="1-step">
                                    <span class="d-md-none">1 Step</span>
                                    <span class="d-none d-md-inline">1 Step</span>
                                </button>
                                <button class="challenge-tab" data-challenge-tab="2-steps">
                                    <span class="d-md-none">2S</span>
                                    <span class="d-none d-md-inline">2 Steps</span>
                                </button>
                                <button class="challenge-tab" data-challenge-tab="xpzero">
                                    <span class="d-md-none">XPZ</span>
                                    <span class="d-none d-md-inline">XPZero</span>
                                </button>
                            </div>
                        </div>

                        <!-- Challenge Tables Container -->
                        <div class="challenge-tables-container">
                            <!-- 1 Step Table -->
                            <div class="challenge-table-wrapper active" id="challenge-1-step">
                                <div class="table-responsive d-none d-xl-block">
                                    <table class="challenge-table">
                                        <thead>
                                            <tr class="table-header">
                                                <th class="feature-column"></th>
                                                <th class="plan-column">BRONZE TRADER</th>
                                                <th class="plan-column">SILVER STRATEGIST</th>
                                                <th class="plan-column recommended-column">GOLD EXECUTOR</th>
                                                <th class="plan-column">PLATINUM PERFORMER</th>
                                                <th class="plan-column">DIAMOND ELITE</th>
                                            </tr>
                                            <tr class="recommended-row">
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th class="recommended-badge">
                                                    <div class="recommended-text">
                                                        <img alt="check icon" class="check-icon-small"
                                                            src="{{ asset('frontend/assest/images/icon_check1.svg') }}">
                                                        Recommended
                                                    </div>
                                                </th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                            <tr class="account-size-row">
                                                <th class="feature-label">Account Size</th>
                                                <th class="plan-value">$3,000</th>
                                                <th class="plan-value">$10,000</th>
                                                <th class="plan-value recommended-value">$25,000</th>
                                                <th class="plan-value">$50,000</th>
                                                <th class="plan-value">$100,000</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="table-row-odd">
                                                <td class="feature-label">Challenge Duration</td>
                                                <td class="plan-value">Unlimited</td>
                                                <td class="plan-value">Unlimited</td>
                                                <td class="plan-value recommended-value">Unlimited</td>
                                                <td class="plan-value">Unlimited</td>
                                                <td class="plan-value">Unlimited</td>
                                            </tr>
                                            <tr class="table-row-even">
                                                <td class="feature-label">Minimum Trading Days</td>
                                                <td class="plan-value">7 Days</td>
                                                <td class="plan-value">7 Days</td>
                                                <td class="plan-value recommended-value">7 Days</td>
                                                <td class="plan-value">7 Days</td>
                                                <td class="plan-value">7 Days</td>
                                            </tr>
                                            <tr class="table-row-odd">
                                                <td class="feature-label">Profit Target</td>
                                                <td class="plan-value">15%</td>
                                                <td class="plan-value">15%</td>
                                                <td class="plan-value recommended-value">15%</td>
                                                <td class="plan-value">15%</td>
                                                <td class="plan-value">15%</td>
                                            </tr>
                                            <tr class="table-row-even">
                                                <td class="feature-label">Leverage</td>
                                                <td class="plan-value">1:200</td>
                                                <td class="plan-value">1:200</td>
                                                <td class="plan-value recommended-value">1:200</td>
                                                <td class="plan-value">1:200</td>
                                                <td class="plan-value">1:200</td>
                                            </tr>
                                            <tr class="table-row-odd">
                                                <td class="feature-label">Max Overall Loss Percent</td>
                                                <td class="plan-value">9%</td>
                                                <td class="plan-value">9%</td>
                                                <td class="plan-value recommended-value">9%</td>
                                                <td class="plan-value">9%</td>
                                                <td class="plan-value">9%</td>
                                            </tr>
                                            <tr class="table-row-even">
                                                <td class="feature-label">Max Daily Loss</td>
                                                <td class="plan-value">4%</td>
                                                <td class="plan-value">4%</td>
                                                <td class="plan-value recommended-value">4%</td>
                                                <td class="plan-value">4%</td>
                                                <td class="plan-value">4%</td>
                                            </tr>
                                            <tr class="table-row-odd">
                                                <td class="feature-label">Profit Split</td>
                                                <td class="plan-value">95%</td>
                                                <td class="plan-value">95%</td>
                                                <td class="plan-value recommended-value">95%</td>
                                                <td class="plan-value">95%</td>
                                                <td class="plan-value">95%</td>
                                            </tr>
                                            <tr class="table-row-even">
                                                <td class="feature-label">Commission</td>
                                                <td class="plan-value">6 USD/Lot</td>
                                                <td class="plan-value">6 USD/Lot</td>
                                                <td class="plan-value recommended-value">6 USD/Lot</td>
                                                <td class="plan-value">6 USD/Lot</td>
                                                <td class="plan-value">6 USD/Lot</td>
                                            </tr>
                                            <tr class="table-row-odd">
                                                <td class="feature-label">Spread</td>
                                                <td class="plan-value">From 1.2 pips</td>
                                                <td class="plan-value">From 1.2 pips</td>
                                                <td class="plan-value recommended-value">From 1.2 pips</td>
                                                <td class="plan-value">From 1.2 pips</td>
                                                <td class="plan-value">From 1.2 pips</td>
                                            </tr>
                                            <tr class="table-row-even pricing-row">
                                                <td class="feature-label"></td>
                                                <td class="plan-value">
                                                    <a href="#" class="pricing-link">
                                                        <button class="pricing-btn">Fee: $49</button>
                                                    </a>
                                                </td>
                                                <td class="plan-value">
                                                    <a href="#" class="pricing-link">
                                                        <button class="pricing-btn">Fee: $99</button>
                                                    </a>
                                                </td>
                                                <td class="plan-value recommended-value">
                                                    <a href="#" class="pricing-link">
                                                        <button class="pricing-btn">Fee: $229</button>
                                                    </a>
                                                </td>
                                                <td class="plan-value">
                                                    <a href="#" class="pricing-link">
                                                        <button class="pricing-btn">Fee: $299</button>
                                                    </a>
                                                </td>
                                                <td class="plan-value">
                                                    <a href="#" class="pricing-link">
                                                        <button class="pricing-btn">Fee: $529</button>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <!-- 2 Steps Table -->
                            <div class="challenge-table-wrapper" id="challenge-2-steps">
                                <div class="table-responsive d-none d-xl-block">
                                    <table class="challenge-table">
                                        <thead>
                                            <tr class="table-header">
                                                <th class="feature-column"></th>
                                                <th class="plan-column">BRONZE TRADER 2-STEP</th>
                                                <th class="plan-column">SILVER STRATEGIST 2-STEP</th>
                                                <th class="plan-column recommended-column">GOLD EXECUTOR 2-STEP</th>
                                                <th class="plan-column">PLATINUM PERFORMER 2-STEP</th>
                                                <th class="plan-column">DIAMOND ELITE 2-STEP</th>
                                            </tr>
                                            <tr class="recommended-row">
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th class="recommended-badge">
                                                    <div class="recommended-text">
                                                        <img alt="check icon" class="check-icon-small"
                                                            src="{{ asset('frontend/assest/images/icon_check1.svg') }}">
                                                        Recommended
                                                    </div>
                                                </th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                            <tr class="account-size-row">
                                                <th class="feature-label">Account Size</th>
                                                <th class="plan-value">$3,000</th>
                                                <th class="plan-value">$10,000</th>
                                                <th class="plan-value recommended-value">$25,000</th>
                                                <th class="plan-value">$50,000</th>
                                                <th class="plan-value">$100,000</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="table-row-odd">
                                                <td class="feature-label">Challenge Duration</td>
                                                <td class="plan-value">Unlimited</td>
                                                <td class="plan-value">Unlimited</td>
                                                <td class="plan-value recommended-value">Unlimited</td>
                                                <td class="plan-value">Unlimited</td>
                                                <td class="plan-value">Unlimited</td>
                                            </tr>
                                            <tr class="table-row-even">
                                                <td class="feature-label">Minimum Trading Days</td>
                                                <td class="plan-value">7 Days</td>
                                                <td class="plan-value">7 Days</td>
                                                <td class="plan-value recommended-value">7 Days</td>
                                                <td class="plan-value">7 Days</td>
                                                <td class="plan-value">7 Days</td>
                                            </tr>
                                            <tr class="table-row-odd">
                                                <td class="feature-label">Phase 1 Target</td>
                                                <td class="plan-value">8%</td>
                                                <td class="plan-value">8%</td>
                                                <td class="plan-value recommended-value">8%</td>
                                                <td class="plan-value">8%</td>
                                                <td class="plan-value">8%</td>
                                            </tr>
                                            <tr class="table-row-even">
                                                <td class="feature-label">Phase 2 Target</td>
                                                <td class="plan-value">5%</td>
                                                <td class="plan-value">5%</td>
                                                <td class="plan-value recommended-value">5%</td>
                                                <td class="plan-value">5%</td>
                                                <td class="plan-value">5%</td>
                                            </tr>
                                            <tr class="table-row-odd">
                                                <td class="feature-label">Leverage</td>
                                                <td class="plan-value">1:200</td>
                                                <td class="plan-value">1:200</td>
                                                <td class="plan-value recommended-value">1:200</td>
                                                <td class="plan-value">1:200</td>
                                                <td class="plan-value">1:200</td>
                                            </tr>
                                            <tr class="table-row-even">
                                                <td class="feature-label">Max Overall Loss Percent</td>
                                                <td class="plan-value">9%</td>
                                                <td class="plan-value">9%</td>
                                                <td class="plan-value recommended-value">9%</td>
                                                <td class="plan-value">9%</td>
                                                <td class="plan-value">9%</td>
                                            </tr>
                                            <tr class="table-row-odd">
                                                <td class="feature-label">Max Daily Loss</td>
                                                <td class="plan-value">4%</td>
                                                <td class="plan-value">4%</td>
                                                <td class="plan-value recommended-value">4%</td>
                                                <td class="plan-value">4%</td>
                                                <td class="plan-value">4%</td>
                                            </tr>
                                            <tr class="table-row-even">
                                                <td class="feature-label">Profit Split</td>
                                                <td class="plan-value">90%</td>
                                                <td class="plan-value">90%</td>
                                                <td class="plan-value recommended-value">90%</td>
                                                <td class="plan-value">90%</td>
                                                <td class="plan-value">90%</td>
                                            </tr>
                                            <tr class="table-row-odd">
                                                <td class="feature-label">Commission</td>
                                                <td class="plan-value">6 USD/Lot</td>
                                                <td class="plan-value">6 USD/Lot</td>
                                                <td class="plan-value recommended-value">6 USD/Lot</td>
                                                <td class="plan-value">6 USD/Lot</td>
                                                <td class="plan-value">6 USD/Lot</td>
                                            </tr>
                                            <tr class="table-row-even">
                                                <td class="feature-label">Spread</td>
                                                <td class="plan-value">From 1.2 pips</td>
                                                <td class="plan-value">From 1.2 pips</td>
                                                <td class="plan-value recommended-value">From 1.2 pips</td>
                                                <td class="plan-value">From 1.2 pips</td>
                                                <td class="plan-value">From 1.2 pips</td>
                                            </tr>
                                            <tr class="table-row-odd pricing-row">
                                                <td class="feature-label"></td>
                                                <td class="plan-value">
                                                    <a href="#" class="pricing-link">
                                                        <button class="pricing-btn">Fee: $39</button>
                                                    </a>
                                                </td>
                                                <td class="plan-value">
                                                    <a href="#" class="pricing-link">
                                                        <button class="pricing-btn">Fee: $79</button>
                                                    </a>
                                                </td>
                                                <td class="plan-value recommended-value">
                                                    <a href="#" class="pricing-link">
                                                        <button class="pricing-btn">Fee: $189</button>
                                                    </a>
                                                </td>
                                                <td class="plan-value">
                                                    <a href="#" class="pricing-link">
                                                        <button class="pricing-btn">Fee: $249</button>
                                                    </a>
                                                </td>
                                                <td class="plan-value">
                                                    <a href="#" class="pricing-link">
                                                        <button class="pricing-btn">Fee: $449</button>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <!-- XPZero Table -->
                            <div class="challenge-table-wrapper" id="challenge-xpzero">
                                <div class="table-responsive d-none d-xl-block">
                                    <table class="challenge-table">
                                        <thead>
                                            <tr class="table-header">
                                                <th class="feature-column"></th>
                                                <th class="plan-column">BRONZE ZERO</th>
                                                <th class="plan-column">SILVER ZERO</th>
                                                <th class="plan-column recommended-column">GOLD ZERO</th>
                                                <th class="plan-column">PLATINUM ZERO</th>
                                                <th class="plan-column">DIAMOND ZERO</th>
                                            </tr>
                                            <tr class="recommended-row">
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th class="recommended-badge">
                                                    <div class="recommended-text">
                                                        <img alt="check icon" class="check-icon-small"
                                                            src="{{ asset('frontend/assest/images/icon_check1.svg') }}">
                                                        Recommended
                                                    </div>
                                                </th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                            <tr class="account-size-row">
                                                <th class="feature-label">Account Size</th>
                                                <th class="plan-value">$3,000</th>
                                                <th class="plan-value">$10,000</th>
                                                <th class="plan-value recommended-value">$25,000</th>
                                                <th class="plan-value">$50,000</th>
                                                <th class="plan-value">$100,000</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="table-row-odd">
                                                <td class="feature-label">Challenge Duration</td>
                                                <td class="plan-value">Unlimited</td>
                                                <td class="plan-value">Unlimited</td>
                                                <td class="plan-value recommended-value">Unlimited</td>
                                                <td class="plan-value">Unlimited</td>
                                                <td class="plan-value">Unlimited</td>
                                            </tr>
                                            <tr class="table-row-even">
                                                <td class="feature-label">Minimum Trading Days</td>
                                                <td class="plan-value">7 Days</td>
                                                <td class="plan-value">7 Days</td>
                                                <td class="plan-value recommended-value">7 Days</td>
                                                <td class="plan-value">7 Days</td>
                                                <td class="plan-value">7 Days</td>
                                            </tr>
                                            <tr class="table-row-odd">
                                                <td class="feature-label">Profit Target</td>
                                                <td class="plan-value">10%</td>
                                                <td class="plan-value">10%</td>
                                                <td class="plan-value recommended-value">10%</td>
                                                <td class="plan-value">10%</td>
                                                <td class="plan-value">10%</td>
                                            </tr>
                                            <tr class="table-row-even">
                                                <td class="feature-label">Leverage</td>
                                                <td class="plan-value">1:200</td>
                                                <td class="plan-value">1:200</td>
                                                <td class="plan-value recommended-value">1:200</td>
                                                <td class="plan-value">1:200</td>
                                                <td class="plan-value">1:200</td>
                                            </tr>
                                            <tr class="table-row-odd">
                                                <td class="feature-label">Max Overall Loss Percent</td>
                                                <td class="plan-value">6%</td>
                                                <td class="plan-value">6%</td>
                                                <td class="plan-value recommended-value">6%</td>
                                                <td class="plan-value">6%</td>
                                                <td class="plan-value">6%</td>
                                            </tr>
                                            <tr class="table-row-even">
                                                <td class="feature-label">Max Daily Loss</td>
                                                <td class="plan-value">3%</td>
                                                <td class="plan-value">3%</td>
                                                <td class="plan-value recommended-value">3%</td>
                                                <td class="plan-value">3%</td>
                                                <td class="plan-value">3%</td>
                                            </tr>
                                            <tr class="table-row-odd">
                                                <td class="feature-label">Profit Split</td>
                                                <td class="plan-value">80%</td>
                                                <td class="plan-value">80%</td>
                                                <td class="plan-value recommended-value">80%</td>
                                                <td class="plan-value">80%</td>
                                                <td class="plan-value">80%</td>
                                            </tr>
                                            <tr class="table-row-even">
                                                <td class="feature-label">Commission</td>
                                                <td class="plan-value">6 USD/Lot</td>
                                                <td class="plan-value">6 USD/Lot</td>
                                                <td class="plan-value recommended-value">6 USD/Lot</td>
                                                <td class="plan-value">6 USD/Lot</td>
                                                <td class="plan-value">6 USD/Lot</td>
                                            </tr>
                                            <tr class="table-row-odd">
                                                <td class="feature-label">Spread</td>
                                                <td class="plan-value">From 1.2 pips</td>
                                                <td class="plan-value">From 1.2 pips</td>
                                                <td class="plan-value recommended-value">From 1.2 pips</td>
                                                <td class="plan-value">From 1.2 pips</td>
                                                <td class="plan-value">From 1.2 pips</td>
                                            </tr>
                                            <tr class="table-row-even pricing-row">
                                                <td class="feature-label"></td>
                                                <td class="plan-value">
                                                    <a href="#" class="pricing-link">
                                                        <button class="pricing-btn">FREE</button>
                                                    </a>
                                                </td>
                                                <td class="plan-value">
                                                    <a href="#" class="pricing-link">
                                                        <button class="pricing-btn">FREE</button>
                                                    </a>
                                                </td>
                                                <td class="plan-value recommended-value">
                                                    <a href="#" class="pricing-link">
                                                        <button class="pricing-btn">FREE</button>
                                                    </a>
                                                </td>
                                                <td class="plan-value">
                                                    <a href="#" class="pricing-link">
                                                        <button class="pricing-btn">FREE</button>
                                                    </a>
                                                </td>
                                                <td class="plan-value">
                                                    <a href="#" class="pricing-link">
                                                        <button class="pricing-btn">FREE</button>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!-- Read Rules Link -->
                        <div class="row mt-5">
                            <div class="col-12 text-center">
                                <a href="/Rules" class="read-rules-link">Read Rules</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why PropXP Section -->
    <section class="why-propxp-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="why-propxp-container">
                        <div class="row align-items-start">
                            <!-- Text Section -->
                            <div class="col-12 col-lg-6">
                                <div class="why-propxp-text-section">
                                    <div class="mb-4">
                                        <h2 class="why-propxp-title">Why Xforexfxtrst</h2>
                                        <p class="why-propxp-description">
                                            We set out to create a prop trading platform that would be profitable for
                                            successful traders but also transparent and fair. Our challenges are exactly
                                            that, challenging, but also designed to be attainable. We are looking for
                                            the best traders with the most profitable strategies to fund and share all
                                            the profits their skills generate. Our profitability stems from funding
                                            successful traders. If you have what it takes to succeed as a trader, we
                                            want you on our team!
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Cards Section -->
                            <div class="col-12 col-lg-6">
                                <div class="row g-3">
                                    <!-- 1-Step Challenge Card -->
                                    <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                        <div class="why-propxp-card why-propxp-card-1step h-100">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="49" height="48"
                                                viewBox="0 0 49 48" fill="none" class="why-propxp-card-icon">
                                                <circle cx="24.5" cy="24" r="24" fill="#002F6C"></circle>
                                                <mask id="mask0_0" maskUnits="userSpaceOnUse" x="0" y="0"
                                                    width="49" height="48" style="mask-type: alpha;">
                                                    <circle cx="24.5" cy="24" r="24" fill="#002F6C"></circle>
                                                </mask>
                                                <g mask="url(#mask0_0)">
                                                    <path d="M40 16L57.5 46H22.5L40 16Z" fill="url(#paint0_linear_0)">
                                                    </path>
                                                    <path d="M12 27L26.5 52H-2.5L12 27Z" fill="url(#paint1_linear_0)">
                                                    </path>
                                                    <path d="M26.5 16L47.5 52H5.5L26.5 16Z" fill="url(#paint2_linear_0)">
                                                    </path>
                                                </g>
                                                <path d="M13.5 6H26.5V15H13.5L16.5333 10.5L13.5 6Z" fill="#007BFF">
                                                </path>
                                                <defs>
                                                    <linearGradient id="paint0_linear_0" x1="40.1207" y1="46"
                                                        x2="40.1207" y2="16" gradientUnits="userSpaceOnUse">
                                                        <stop stop-color="#0067D5"></stop>
                                                        <stop offset="1" stop-color="#4AA1FF"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="paint1_linear_0" x1="12.1" y1="52"
                                                        x2="12.1" y2="27" gradientUnits="userSpaceOnUse">
                                                        <stop stop-color="#0067D5"></stop>
                                                        <stop offset="1" stop-color="#4AA1FF"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="paint2_linear_0" x1="26.6448" y1="52"
                                                        x2="26.6448" y2="16" gradientUnits="userSpaceOnUse">
                                                        <stop stop-color="#002F6C"></stop>
                                                        <stop offset="1" stop-color="#007BFF"></stop>
                                                    </linearGradient>
                                                </defs>
                                            </svg>

                                            <h3 class="why-propxp-card-title">1-Step Challenges</h3>

                                            <ul class="why-propxp-card-features">
                                                <li class="why-propxp-feature-item">
                                                    <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                        data-icon="check" class="why-propxp-check-icon" role="img"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                        <path fill="currentColor"
                                                            d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z">
                                                        </path>
                                                    </svg>
                                                    <span class="why-propxp-feature-text">1:200 Leverage</span>
                                                </li>
                                                <li class="why-propxp-feature-item">
                                                    <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                        data-icon="check" class="why-propxp-check-icon" role="img"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                        <path fill="currentColor"
                                                            d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z">
                                                        </path>
                                                    </svg>
                                                    <span class="why-propxp-feature-text">Unlimited completion
                                                        time</span>
                                                </li>
                                                <li class="why-propxp-feature-item">
                                                    <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                        data-icon="check" class="why-propxp-check-icon" role="img"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                        <path fill="currentColor"
                                                            d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z">
                                                        </path>
                                                    </svg>
                                                    <span class="why-propxp-feature-text">Up to 95% profit share</span>
                                                </li>
                                                <li class="why-propxp-feature-item">
                                                    <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                        data-icon="check" class="why-propxp-check-icon" role="img"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                        <path fill="currentColor"
                                                            d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z">
                                                        </path>
                                                    </svg>
                                                    <span class="why-propxp-feature-text">Starting from $49</span>
                                                </li>
                                                <li class="why-propxp-feature-item">
                                                    <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                        data-icon="check" class="why-propxp-check-icon" role="img"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                        <path fill="currentColor"
                                                            d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z">
                                                        </path>
                                                    </svg>
                                                    <span class="why-propxp-feature-text">Get funded up to
                                                        $100,000</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- 2-Step Challenge Card -->
                                    <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                        <div class="why-propxp-card why-propxp-card-2step h-100">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="49" height="48"
                                                viewBox="0 0 49 48" fill="none" class="why-propxp-card-icon">
                                                <circle cx="24.5" cy="24" r="24" fill="#007BFF"></circle>
                                                <mask id="mask1_1" maskUnits="userSpaceOnUse" x="0" y="0"
                                                    width="49" height="48" style="mask-type: alpha;">
                                                    <circle cx="24.5" cy="24" r="24" fill="#002F6C"></circle>
                                                </mask>
                                                <g mask="url(#mask1_1)">
                                                    <path d="M40 16L57.5 46H22.5L40 16Z" fill="url(#paint0_linear_1_1)">
                                                    </path>
                                                    <path d="M12 27L26.5 52H-2.5L12 27Z" fill="url(#paint1_linear_1_1)">
                                                    </path>
                                                    <path d="M26.5 16L47.5 52H5.5L26.5 16Z" fill="url(#paint2_linear_1_1)">
                                                    </path>
                                                </g>
                                                <path d="M13.5 6H26.5V15H13.5L16.5333 10.5L13.5 6Z" fill="white"></path>
                                                <defs>
                                                    <linearGradient id="paint0_linear_1_1" x1="40.1207" y1="46"
                                                        x2="40.1207" y2="16" gradientUnits="userSpaceOnUse">
                                                        <stop stop-color="#90C5FF"></stop>
                                                        <stop offset="1" stop-color="white"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="paint1_linear_1_1" x1="12.1" y1="52"
                                                        x2="12.1" y2="27" gradientUnits="userSpaceOnUse">
                                                        <stop stop-color="#90C5FF"></stop>
                                                        <stop offset="1" stop-color="white"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="paint2_linear_1_1" x1="26.6448" y1="52"
                                                        x2="26.6448" y2="16" gradientUnits="userSpaceOnUse">
                                                        <stop stop-color="#007BFF"></stop>
                                                        <stop offset="1" stop-color="#4AA1FF"></stop>
                                                    </linearGradient>
                                                </defs>
                                            </svg>

                                            <h3 class="why-propxp-card-title">2-Step Challenges</h3>

                                            <ul class="why-propxp-card-features">
                                                <li class="why-propxp-feature-item">
                                                    <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                        data-icon="check" class="why-propxp-check-icon" role="img"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                        <path fill="currentColor"
                                                            d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z">
                                                        </path>
                                                    </svg>
                                                    <span class="why-propxp-feature-text">1:200 Leverage</span>
                                                </li>
                                                <li class="why-propxp-feature-item">
                                                    <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                        data-icon="check" class="why-propxp-check-icon" role="img"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                        <path fill="currentColor"
                                                            d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z">
                                                        </path>
                                                    </svg>
                                                    <span class="why-propxp-feature-text">Unlimited completion
                                                        time</span>
                                                </li>
                                                <li class="why-propxp-feature-item">
                                                    <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                        data-icon="check" class="why-propxp-check-icon" role="img"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                        <path fill="currentColor"
                                                            d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z">
                                                        </path>
                                                    </svg>
                                                    <span class="why-propxp-feature-text">Up to 95% profit share</span>
                                                </li>
                                                <li class="why-propxp-feature-item">
                                                    <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                        data-icon="check" class="why-propxp-check-icon" role="img"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                        <path fill="currentColor"
                                                            d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z">
                                                        </path>
                                                    </svg>
                                                    <span class="why-propxp-feature-text">Starting from $30</span>
                                                </li>
                                                <li class="why-propxp-feature-item">
                                                    <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                        data-icon="check" class="why-propxp-check-icon" role="img"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                        <path fill="currentColor"
                                                            d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z">
                                                        </path>
                                                    </svg>
                                                    <span class="why-propxp-feature-text">Get funded up to
                                                        $100,000</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- TradingView Section -->
                        <div class="row mt-5">
                            <div class="col-12">
                                <div class="why-propxp-tradingview">
                                    <img src="assest/images/tviewlogodark.png" alt="TradingView"
                                        class="why-propxp-tradingview-logo">
                                    <p class="why-propxp-tradingview-text">Charts are powered by</p>
                                    <a href="https://www.tradingview.com/" target="_blank" rel="noopener noreferrer"
                                        class="why-propxp-tradingview-link">
                                        <span>TradingView</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="testimonials-container">
                        <!-- Header -->
                        <div class="testimonials-header">
                            <h2 class="testimonials-title">
                                Empowering Traders, One Success Story at a Time
                            </h2>
                            <h3 class="testimonials-subtitle">
                                Our traders' voices speak volumes — see why they chose
                                <span class="testimonials-brand">Xforexfxtrst</span>
                            </h3>
                            <a href="https://www.trustpilot.com/review/propxp.com" target="_blank"
                                rel="noopener noreferrer" class="testimonials-trustpilot-link">
                                <div class="testimonials-rating">
                                    <span class="testimonials-rating-text">Excellent</span>
                                    <div class="testimonials-stars">
                                        <svg class="testimonials-star" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 46.375586 46.33">
                                            <path class="tp-star__canvas" fill="#00b67a" d="M0 46.33h46.375586V0H0z">
                                            </path>
                                            <path class="tp-star__shape" fill="white"
                                                d="M39.533936 19.711433L13.230239 38.80065l3.838216-11.797827L7.02115 19.711433h12.418975l3.837417-11.798624 3.837418 11.798624h12.418975zM23.2785 31.510075l7.183595-1.509576 2.862114 8.800152L23.2785 31.510075z">
                                            </path>
                                        </svg>
                                        <svg class="testimonials-star" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 46.375586 46.33">
                                            <path class="tp-star__canvas" fill="#00b67a" d="M0 46.33h46.375586V0H0z">
                                            </path>
                                            <path class="tp-star__shape" fill="white"
                                                d="M39.533936 19.711433L13.230239 38.80065l3.838216-11.797827L7.02115 19.711433h12.418975l3.837417-11.798624 3.837418 11.798624h12.418975zM23.2785 31.510075l7.183595-1.509576 2.862114 8.800152L23.2785 31.510075z">
                                            </path>
                                        </svg>
                                        <svg class="testimonials-star" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 46.375586 46.33">
                                            <path class="tp-star__canvas" fill="#00b67a" d="M0 46.33h46.375586V0H0z">
                                            </path>
                                            <path class="tp-star__shape" fill="white"
                                                d="M39.533936 19.711433L13.230239 38.80065l3.838216-11.797827L7.02115 19.711433h12.418975l3.837417-11.798624 3.837418 11.798624h12.418975zM23.2785 31.510075l7.183595-1.509576 2.862114 8.800152L23.2785 31.510075z">
                                            </path>
                                        </svg>
                                        <svg class="testimonials-star" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 46.375586 46.33">
                                            <path class="tp-star__canvas" fill="#00b67a" d="M0 46.33h46.375586V0H0z">
                                            </path>
                                            <path class="tp-star__shape" fill="white"
                                                d="M39.533936 19.711433L13.230239 38.80065l3.838216-11.797827L7.02115 19.711433h12.418975l3.837417-11.798624 3.837418 11.798624h12.418975zM23.2785 31.510075l7.183595-1.509576 2.862114 8.800152L23.2785 31.510075z">
                                            </path>
                                        </svg>
                                        <svg class="testimonials-star" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 46.375586 46.33">
                                            <path class="tp-star__canvas" fill="#dcdce6" d="M0 46.33h46.375586V0H0z">
                                            </path>
                                            <defs>
                                                <clipPath id="halfBgClip4">
                                                    <rect x="0" y="0" width="23" height="46.33"></rect>
                                                </clipPath>
                                            </defs>
                                            <rect width="46.375586" height="46.33" fill="#00b67a"
                                                clip-path="url(#halfBgClip4)"></rect>
                                            <path class="tp-star__shape" fill="white"
                                                d="M39.533936 19.711433L13.230239 38.80065l3.838216-11.797827L7.02115 19.711433h12.418975l3.837417-11.798624 3.837418 11.798624h12.418975zM23.2785 31.510075l7.183595-1.509576 2.862114 8.800152L23.2785 31.510075z">
                                            </path>
                                        </svg>
                                    </div>
                                    <span class="testimonials-rating-info">
                                        Rated 4.7 / 5 on <span class="testimonials-trustpilot-brand">Trustpilot</span>
                                    </span>
                                </div>
                            </a>
                        </div>
                        <!-- Testimonials Grid -->
                        <div class="testimonials-grid">
                            <!-- Column 1 -->
                            <div class="testimonials-column">
                                <!-- Testimonial 1 -->
                                <div class="testimonial-card">
                                    <div class="testimonial-header">
                                        <div class="testimonial-stars">
                                            <svg class="testimonial-star" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 46.375586 46.330002">
                                                <path class="tp-star__canvas" fill="#00b67a"
                                                    d="M0 46.330002h46.375586V0H0z"></path>
                                                <path class="tp-star__shape" fill="white"
                                                    d="M39.533936 19.711433L13.230239 38.80065l3.838216-11.797827L7.02115 19.711433h12.418975l3.837417-11.798624 3.837418 11.798624h12.418975zM23.2785 31.510075l7.183595-1.509576 2.862114 8.800152L23.2785 31.510075z">
                                                </path>
                                            </svg>
                                            <svg class="testimonial-star" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 46.375586 46.330002">
                                                <path class="tp-star__canvas" fill="#00b67a"
                                                    d="M0 46.330002h46.375586V0H0z"></path>
                                                <path class="tp-star__shape" fill="white"
                                                    d="M39.533936 19.711433L13.230239 38.80065l3.838216-11.797827L7.02115 19.711433h12.418975l3.837417-11.798624 3.837418 11.798624h12.418975zM23.2785 31.510075l7.183595-1.509576 2.862114 8.800152L23.2785 31.510075z">
                                                </path>
                                            </svg>
                                            <svg class="testimonial-star" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 46.375586 46.330002">
                                                <path class="tp-star__canvas" fill="#00b67a"
                                                    d="M0 46.330002h46.375586V0H0z"></path>
                                                <path class="tp-star__shape" fill="white"
                                                    d="M39.533936 19.711433L13.230239 38.80065l3.838216-11.797827L7.02115 19.711433h12.418975l3.837417-11.798624 3.837418 11.798624h12.418975zM23.2785 31.510075l7.183595-1.509576 2.862114 8.800152L23.2785 31.510075z">
                                                </path>
                                            </svg>
                                            <svg class="testimonial-star" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 46.375586 46.330002">
                                                <path class="tp-star__canvas" fill="#00b67a"
                                                    d="M0 46.330002h46.375586V0H0z"></path>
                                                <path class="tp-star__shape" fill="white"
                                                    d="M39.533936 19.711433L13.230239 38.80065l3.838216-11.797827L7.02115 19.711433h12.418975l3.837417-11.798624 3.837418 11.798624h12.418975zM23.2785 31.510075l7.183595-1.509576 2.862114 8.800152L23.2785 31.510075z">
                                                </path>
                                            </svg>
                                            <svg class="testimonial-star" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 46.375586 46.330002">
                                                <path class="tp-star__canvas" fill="#00b67a"
                                                    d="M0 46.330002h46.375586V0H0z"></path>
                                                <path class="tp-star__shape" fill="white"
                                                    d="M39.533936 19.711433L13.230239 38.80065l3.838216-11.797827L7.02115 19.711433h12.418975l3.837417-11.798624 3.837418 11.798624h12.418975zM23.2785 31.510075l7.183595-1.509576 2.862114 8.800152L23.2785 31.510075z">
                                                </path>
                                            </svg>
                                        </div>
                                        <span class="testimonial-date">Jan 20, 2025</span>
                                    </div>
                                    <h4 class="testimonial-title">Great experience with Thanh</h4>
                                    <p class="testimonial-content">Great experience with Thanh. He helps me understand
                                        about the platform. This could be a great opportunity for everyone to earn your
                                        passive income.</p>
                                    <p class="testimonial-author">- Ryan Nguyễn</p>
                                </div>
                                <!-- Testimonial 2 -->
                                <div class="testimonial-card">
                                    <div class="testimonial-header">
                                        <div class="testimonial-stars">
                                            <svg class="testimonial-star" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 46.375586 46.330002">
                                                <path class="tp-star__canvas" fill="#00b67a"
                                                    d="M0 46.330002h46.375586V0H0z"></path>
                                                <path class="tp-star__shape" fill="white"
                                                    d="M39.533936 19.711433L13.230239 38.80065l3.838216-11.797827L7.02115 19.711433h12.418975l3.837417-11.798624 3.837418 11.798624h12.418975zM23.2785 31.510075l7.183595-1.509576 2.862114 8.800152L23.2785 31.510075z">
                                                </path>
                                            </svg>
                                            <svg class="testimonial-star" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 46.375586 46.330002">
                                                <path class="tp-star__canvas" fill="#00b67a"
                                                    d="M0 46.330002h46.375586V0H0z"></path>
                                                <path class="tp-star__shape" fill="white"
                                                    d="M39.533936 19.711433L13.230239 38.80065l3.838216-11.797827L7.02115 19.711433h12.418975l3.837417-11.798624 3.837418 11.798624h12.418975zM23.2785 31.510075l7.183595-1.509576 2.862114 8.800152L23.2785 31.510075z">
                                                </path>
                                            </svg>
                                            <svg class="testimonial-star" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 46.375586 46.330002">
                                                <path class="tp-star__canvas" fill="#00b67a"
                                                    d="M0 46.330002h46.375586V0H0z"></path>
                                                <path class="tp-star__shape" fill="white"
                                                    d="M39.533936 19.711433L13.230239 38.80065l3.838216-11.797827L7.02115 19.711433h12.418975l3.837417-11.798624 3.837418 11.798624h12.418975zM23.2785 31.510075l7.183595-1.509576 2.862114 8.800152L23.2785 31.510075z">
                                                </path>
                                            </svg>
                                            <svg class="testimonial-star" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 46.375586 46.330002">
                                                <path class="tp-star__canvas" fill="#00b67a"
                                                    d="M0 46.330002h46.375586V0H0z"></path>
                                                <path class="tp-star__shape" fill="white"
                                                    d="M39.533936 19.711433L13.230239 38.80065l3.838216-11.797827L7.02115 19.711433h12.418975l3.837417-11.798624 3.837418 11.798624h12.418975zM23.2785 31.510075l7.183595-1.509576 2.862114 8.800152L23.2785 31.510075z">
                                                </path>
                                            </svg>
                                            <svg class="testimonial-star" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 46.375586 46.330002">
                                                <path class="tp-star__canvas" fill="#00b67a"
                                                    d="M0 46.330002h46.375586V0H0z"></path>
                                                <path class="tp-star__shape" fill="white"
                                                    d="M39.533936 19.711433L13.230239 38.80065l3.838216-11.797827L7.02115 19.711433h12.418975l3.837417-11.798624 3.837418 11.798624h12.418975zM23.2785 31.510075l7.183595-1.509576 2.862114 8.800152L23.2785 31.510075z">
                                                </path>
                                            </svg>
                                        </div>
                                        <span class="testimonial-date">May 30 2025</span>
                                    </div>
                                    <h4 class="testimonial-title">Trouble with xpzero account</h4>
                                    <p class="testimonial-content">I had trouble understanding how the XPZero account
                                        worked, as it didn't match my trading style. I thought I had made a poor
                                        purchase and lost some money. But the staff was incredibly generous and
                                        kind-hearted. They decided to solve my issue by giving me an account of even
                                        greater value than the one I originally bought. This is a human-centered prop
                                        firm, truly aiming to support the people who choose to work with them.</p>
                                    <p class="testimonial-author">- Lan Dek</p>
                                </div>
                                <!-- Testimonial 3 -->
                                <div class="testimonial-card">
                                    <div class="testimonial-header">
                                        <div class="testimonial-stars">
                                            <svg class="testimonial-star" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 46.375586 46.330002">
                                                <path class="tp-star__canvas" fill="#00b67a"
                                                    d="M0 46.330002h46.375586V0H0z"></path>
                                                <path class="tp-star__shape" fill="white"
                                                    d="M39.533936 19.711433L13.230239 38.80065l3.838216-11.797827L7.02115 19.711433h12.418975l3.837417-11.798624 3.837418 11.798624h12.418975zM23.2785 31.510075l7.183595-1.509576 2.862114 8.800152L23.2785 31.510075z">
                                                </path>
                                            </svg>
                                            <svg class="testimonial-star" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 46.375586 46.330002">
                                                <path class="tp-star__canvas" fill="#00b67a"
                                                    d="M0 46.330002h46.375586V0H0z"></path>
                                                <path class="tp-star__shape" fill="white"
                                                    d="M39.533936 19.711433L13.230239 38.80065l3.838216-11.797827L7.02115 19.711433h12.418975l3.837417-11.798624 3.837418 11.798624h12.418975zM23.2785 31.510075l7.183595-1.509576 2.862114 8.800152L23.2785 31.510075z">
                                                </path>
                                            </svg>
                                            <svg class="testimonial-star" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 46.375586 46.330002">
                                                <path class="tp-star__canvas" fill="#00b67a"
                                                    d="M0 46.330002h46.375586V0H0z"></path>
                                                <path class="tp-star__shape" fill="white"
                                                    d="M39.533936 19.711433L13.230239 38.80065l3.838216-11.797827L7.02115 19.711433h12.418975l3.837417-11.798624 3.837418 11.798624h12.418975zM23.2785 31.510075l7.183595-1.509576 2.862114 8.800152L23.2785 31.510075z">
                                                </path>
                                            </svg>
                                            <svg class="testimonial-star" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 46.375586 46.330002">
                                                <path class="tp-star__canvas" fill="#00b67a"
                                                    d="M0 46.330002h46.375586V0H0z"></path>
                                                <path class="tp-star__shape" fill="white"
                                                    d="M39.533936 19.711433L13.230239 38.80065l3.838216-11.797827L7.02115 19.711433h12.418975l3.837417-11.798624 3.837418 11.798624h12.418975zM23.2785 31.510075l7.183595-1.509576 2.862114 8.800152L23.2785 31.510075z">
                                                </path>
                                            </svg>
                                            <svg class="testimonial-star" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 46.375586 46.330002">
                                                <path class="tp-star__canvas" fill="#00b67a"
                                                    d="M0 46.330002h46.375586V0H0z"></path>
                                                <path class="tp-star__shape" fill="white"
                                                    d="M39.533936 19.711433L13.230239 38.80065l3.838216-11.797827L7.02115 19.711433h12.418975l3.837417-11.798624 3.837418 11.798624h12.418975zM23.2785 31.510075l7.183595-1.509576 2.862114 8.800152L23.2785 31.510075z">
                                                </path>
                                            </svg>
                                        </div>
                                        <span class="testimonial-date">Nov 21 2024</span>
                                    </div>
                                    <h4 class="testimonial-title">Great Experience</h4>
                                    <p class="testimonial-content">Had a great experience with Xforexfxtrst. My payout was
                                        approved and in my account in under 3 hours, which was impressive. Their trading
                                        conditions are also really solid, fair and clearly designed with traders in
                                        mind. Definitely worth checking out</p>
                                    <p class="testimonial-author">- Maurizio</p>
                                </div>
                            </div>
                            <!-- Column 2 -->
                            <div class="testimonials-column">
                                <!-- Testimonial 4 -->
                                <div class="testimonial-card">
                                    <div class="testimonial-header">
                                        <div class="testimonial-stars">
                                            <svg class="testimonial-star" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 46.375586 46.330002">
                                                <path class="tp-star__canvas" fill="#00b67a"
                                                    d="M0 46.330002h46.375586V0H0z"></path>
                                                <path class="tp-star__shape" fill="white"
                                                    d="M39.533936 19.711433L13.230239 38.80065l3.838216-11.797827L7.02115 19.711433h12.418975l3.837417-11.798624 3.837418 11.798624h12.418975zM23.2785 31.510075l7.183595-1.509576 2.862114 8.800152L23.2785 31.510075z">
                                                </path>
                                            </svg>
                                            <svg class="testimonial-star" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 46.375586 46.330002">
                                                <path class="tp-star__canvas" fill="#00b67a"
                                                    d="M0 46.330002h46.375586V0H0z"></path>
                                                <path class="tp-star__shape" fill="white"
                                                    d="M39.533936 19.711433L13.230239 38.80065l3.838216-11.797827L7.02115 19.711433h12.418975l3.837417-11.798624 3.837418 11.798624h12.418975zM23.2785 31.510075l7.183595-1.509576 2.862114 8.800152L23.2785 31.510075z">
                                                </path>
                                            </svg>
                                            <svg class="testimonial-star" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 46.375586 46.330002">
                                                <path class="tp-star__canvas" fill="#00b67a"
                                                    d="M0 46.330002h46.375586V0H0z"></path>
                                                <path class="tp-star__shape" fill="white"
                                                    d="M39.533936 19.711433L13.230239 38.80065l3.838216-11.797827L7.02115 19.711433h12.418975l3.837417-11.798624 3.837418 11.798624h12.418975zM23.2785 31.510075l7.183595-1.509576 2.862114 8.800152L23.2785 31.510075z">
                                                </path>
                                            </svg>
                                            <svg class="testimonial-star" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 46.375586 46.330002">
                                                <path class="tp-star__canvas" fill="#00b67a"
                                                    d="M0 46.330002h46.375586V0H0z"></path>
                                                <path class="tp-star__shape" fill="white"
                                                    d="M39.533936 19.711433L13.230239 38.80065l3.838216-11.797827L7.02115 19.711433h12.418975l3.837417-11.798624 3.837418 11.798624h12.418975zM23.2785 31.510075l7.183595-1.509576 2.862114 8.800152L23.2785 31.510075z">
                                                </path>
                                            </svg>
                                            <svg class="testimonial-star" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 46.375586 46.330002">
                                                <path class="tp-star__canvas" fill="#00b67a"
                                                    d="M0 46.330002h46.375586V0H0z"></path>
                                                <path class="tp-star__shape" fill="white"
                                                    d="M39.533936 19.711433L13.230239 38.80065l3.838216-11.797827L7.02115 19.711433h12.418975l3.837417-11.798624 3.837418 11.798624h12.418975zM23.2785 31.510075l7.183595-1.509576 2.862114 8.800152L23.2785 31.510075z">
                                                </path>
                                            </svg>
                                        </div>
                                        <span class="testimonial-date">April 10 2025</span>
                                    </div>
                                    <h4 class="testimonial-title">Esta genial</h4>
                                    <p class="testimonial-content">Es muy fácil de utilizar y no tiene tiempo límite
                                        para pasar los exámenes,estoy muy contenta!</p>
                                    <p class="testimonial-author">- M.Angeles Moreno</p>
                                </div>
                                <!-- Testimonial 5 -->
                                <div class="testimonial-card">
                                    <div class="testimonial-header">
                                        <div class="testimonial-stars">
                                            <svg class="testimonial-star" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 46.375586 46.330002">
                                                <path class="tp-star__canvas" fill="#00b67a"
                                                    d="M0 46.330002h46.375586V0H0z"></path>
                                                <path class="tp-star__shape" fill="white"
                                                    d="M39.533936 19.711433L13.230239 38.80065l3.838216-11.797827L7.02115 19.711433h12.418975l3.837417-11.798624 3.837418 11.798624h12.418975zM23.2785 31.510075l7.183595-1.509576 2.862114 8.800152L23.2785 31.510075z">
                                                </path>
                                            </svg>
                                            <svg class="testimonial-star" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 46.375586 46.330002">
                                                <path class="tp-star__canvas" fill="#00b67a"
                                                    d="M0 46.330002h46.375586V0H0z"></path>
                                                <path class="tp-star__shape" fill="white"
                                                    d="M39.533936 19.711433L13.230239 38.80065l3.838216-11.797827L7.02115 19.711433h12.418975l3.837417-11.798624 3.837418 11.798624h12.418975zM23.2785 31.510075l7.183595-1.509576 2.862114 8.800152L23.2785 31.510075z">
                                                </path>
                                            </svg>
                                            <svg class="testimonial-star" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 46.375586 46.330002">
                                                <path class="tp-star__canvas" fill="#00b67a"
                                                    d="M0 46.330002h46.375586V0H0z"></path>
                                                <path class="tp-star__shape" fill="white"
                                                    d="M39.533936 19.711433L13.230239 38.80065l3.838216-11.797827L7.02115 19.711433h12.418975l3.837417-11.798624 3.837418 11.798624h12.418975zM23.2785 31.510075l7.183595-1.509576 2.862114 8.800152L23.2785 31.510075z">
                                                </path>
                                            </svg>
                                            <svg class="testimonial-star" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 46.375586 46.330002">
                                                <path class="tp-star__canvas" fill="#00b67a"
                                                    d="M0 46.330002h46.375586V0H0z"></path>
                                                <path class="tp-star__shape" fill="white"
                                                    d="M39.533936 19.711433L13.230239 38.80065l3.838216-11.797827L7.02115 19.711433h12.418975l3.837417-11.798624 3.837418 11.798624h12.418975zM23.2785 31.510075l7.183595-1.509576 2.862114 8.800152L23.2785 31.510075z">
                                                </path>
                                            </svg>
                                            <svg class="testimonial-star" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 46.375586 46.330002">
                                                <path class="tp-star__canvas" fill="#00b67a"
                                                    d="M0 46.330002h46.375586V0H0z"></path>
                                                <path class="tp-star__shape" fill="white"
                                                    d="M39.533936 19.711433L13.230239 38.80065l3.838216-11.797827L7.02115 19.711433h12.418975l3.837417-11.798624 3.837418 11.798624h12.418975zM23.2785 31.510075l7.183595-1.509576 2.862114 8.800152L23.2785 31.510075z">
                                                </path>
                                            </svg>
                                        </div>
                                        <span class="testimonial-date">May 9 2025</span>
                                    </div>
                                    <h4 class="testimonial-title">The company is great</h4>
                                    <p class="testimonial-content">The company is great, it fulfils all its proposals, I
                                        made my first withdrawal and it was super fast and without problems, plus its
                                        customer service is super attentive.</p>
                                    <p class="testimonial-author">- Alexander Sandoval</p>
                                </div>
                                <!-- Testimonial 6 -->
                                <div class="testimonial-card">
                                    <div class="testimonial-header">
                                        <div class="testimonial-stars">
                                            <svg class="testimonial-star" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 46.375586 46.330002">
                                                <path class="tp-star__canvas" fill="#00b67a"
                                                    d="M0 46.330002h46.375586V0H0z"></path>
                                                <path class="tp-star__shape" fill="white"
                                                    d="M39.533936 19.711433L13.230239 38.80065l3.838216-11.797827L7.02115 19.711433h12.418975l3.837417-11.798624 3.837418 11.798624h12.418975zM23.2785 31.510075l7.183595-1.509576 2.862114 8.800152L23.2785 31.510075z">
                                                </path>
                                            </svg>
                                            <svg class="testimonial-star" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 46.375586 46.330002">
                                                <path class="tp-star__canvas" fill="#00b67a"
                                                    d="M0 46.330002h46.375586V0H0z"></path>
                                                <path class="tp-star__shape" fill="white"
                                                    d="M39.533936 19.711433L13.230239 38.80065l3.838216-11.797827L7.02115 19.711433h12.418975l3.837417-11.798624 3.837418 11.798624h12.418975zM23.2785 31.510075l7.183595-1.509576 2.862114 8.800152L23.2785 31.510075z">
                                                </path>
                                            </svg>
                                            <svg class="testimonial-star" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 46.375586 46.330002">
                                                <path class="tp-star__canvas" fill="#00b67a"
                                                    d="M0 46.330002h46.375586V0H0z"></path>
                                                <path class="tp-star__shape" fill="white"
                                                    d="M39.533936 19.711433L13.230239 38.80065l3.838216-11.797827L7.02115 19.711433h12.418975l3.837417-11.798624 3.837418 11.798624h12.418975zM23.2785 31.510075l7.183595-1.509576 2.862114 8.800152L23.2785 31.510075z">
                                                </path>
                                            </svg>
                                            <svg class="testimonial-star" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 46.375586 46.330002">
                                                <path class="tp-star__canvas" fill="#00b67a"
                                                    d="M0 46.330002h46.375586V0H0z"></path>
                                                <path class="tp-star__shape" fill="white"
                                                    d="M39.533936 19.711433L13.230239 38.80065l3.838216-11.797827L7.02115 19.711433h12.418975l3.837417-11.798624 3.837418 11.798624h12.418975zM23.2785 31.510075l7.183595-1.509576 2.862114 8.800152L23.2785 31.510075z">
                                                </path>
                                            </svg>
                                            <svg class="testimonial-star" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 46.375586 46.330002">
                                                <path class="tp-star__canvas" fill="#00b67a"
                                                    d="M0 46.330002h46.375586V0H0z"></path>
                                                <path class="tp-star__shape" fill="white"
                                                    d="M39.533936 19.711433L13.230239 38.80065l3.838216-11.797827L7.02115 19.711433h12.418975l3.837417-11.798624 3.837418 11.798624h12.418975zM23.2785 31.510075l7.183595-1.509576 2.862114 8.800152L23.2785 31.510075z">
                                                </path>
                                            </svg>
                                        </div>
                                        <span class="testimonial-date">Jan 15, 2025</span>
                                    </div>
                                    <h4 class="testimonial-title">Amazing platform, simple fast and smooth process.</h4>
                                    <p class="testimonial-content">I started trading from zero and the amazing support
                                        and guidance I had from Xforexfxtrst, helped me understand how prop trading works
                                        and
                                        start trading in less than a day. Keep up with the good work guys!</p>
                                    <p class="testimonial-author">- Hitaro</p>
                                </div>
                            </div>
                            <!-- Column 3 -->
                            <div class="testimonials-column">
                                <!-- Testimonial 7 -->
                                <div class="testimonial-card">
                                    <div class="testimonial-header">
                                        <div class="testimonial-stars">
                                            <svg class="testimonial-star" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 46.375586 46.330002">
                                                <path class="tp-star__canvas" fill="#00b67a"
                                                    d="M0 46.330002h46.375586V0H0z"></path>
                                                <path class="tp-star__shape" fill="white"
                                                    d="M39.533936 19.711433L13.230239 38.80065l3.838216-11.797827L7.02115 19.711433h12.418975l3.837417-11.798624 3.837418 11.798624h12.418975zM23.2785 31.510075l7.183595-1.509576 2.862114 8.800152L23.2785 31.510075z">
                                                </path>
                                            </svg>
                                            <svg class="testimonial-star" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 46.375586 46.330002">
                                                <path class="tp-star__canvas" fill="#00b67a"
                                                    d="M0 46.330002h46.375586V0H0z"></path>
                                                <path class="tp-star__shape" fill="white"
                                                    d="M39.533936 19.711433L13.230239 38.80065l3.838216-11.797827L7.02115 19.711433h12.418975l3.837417-11.798624 3.837418 11.798624h12.418975zM23.2785 31.510075l7.183595-1.509576 2.862114 8.800152L23.2785 31.510075z">
                                                </path>
                                            </svg>
                                            <svg class="testimonial-star" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 46.375586 46.330002">
                                                <path class="tp-star__canvas" fill="#00b67a"
                                                    d="M0 46.330002h46.375586V0H0z"></path>
                                                <path class="tp-star__shape" fill="white"
                                                    d="M39.533936 19.711433L13.230239 38.80065l3.838216-11.797827L7.02115 19.711433h12.418975l3.837417-11.798624 3.837418 11.798624h12.418975zM23.2785 31.510075l7.183595-1.509576 2.862114 8.800152L23.2785 31.510075z">
                                                </path>
                                            </svg>
                                            <svg class="testimonial-star" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 46.375586 46.330002">
                                                <path class="tp-star__canvas" fill="#00b67a"
                                                    d="M0 46.330002h46.375586V0H0z"></path>
                                                <path class="tp-star__shape" fill="white"
                                                    d="M39.533936 19.711433L13.230239 38.80065l3.838216-11.797827L7.02115 19.711433h12.418975l3.837417-11.798624 3.837418 11.798624h12.418975zM23.2785 31.510075l7.183595-1.509576 2.862114 8.800152L23.2785 31.510075z">
                                                </path>
                                            </svg>
                                            <svg class="testimonial-star" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 46.375586 46.330002">
                                                <path class="tp-star__canvas" fill="#00b67a"
                                                    d="M0 46.330002h46.375586V0H0z"></path>
                                                <path class="tp-star__shape" fill="white"
                                                    d="M39.533936 19.711433L13.230239 38.80065l3.838216-11.797827L7.02115 19.711433h12.418975l3.837417-11.798624 3.837418 11.798624h12.418975zM23.2785 31.510075l7.183595-1.509576 2.862114 8.800152L23.2785 31.510075z">
                                                </path>
                                            </svg>
                                        </div>
                                        <span class="testimonial-date">Dec 24, 2024</span>
                                    </div>
                                    <h4 class="testimonial-title">Recomendable! Soporte excelente.</h4>
                                    <p class="testimonial-content">Empecé con el reto de 2 fases y de momento todo
                                        genial. La plataforma es muy intuitiva y las condiciones del reto son mejores
                                        que otras empresas. Entre en el Chat para un par de dudas y me las respondieron
                                        al momento. Muy recomendable!</p>
                                    <p class="testimonial-author">- Carlos Gutierrez</p>
                                </div>
                                <!-- Testimonial 8 -->
                                <div class="testimonial-card">
                                    <div class="testimonial-header">
                                        <div class="testimonial-stars">
                                            <svg class="testimonial-star" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 46.375586 46.330002">
                                                <path class="tp-star__canvas" fill="#00b67a"
                                                    d="M0 46.330002h46.375586V0H0z"></path>
                                                <path class="tp-star__shape" fill="white"
                                                    d="M39.533936 19.711433L13.230239 38.80065l3.838216-11.797827L7.02115 19.711433h12.418975l3.837417-11.798624 3.837418 11.798624h12.418975zM23.2785 31.510075l7.183595-1.509576 2.862114 8.800152L23.2785 31.510075z">
                                                </path>
                                            </svg>
                                            <svg class="testimonial-star" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 46.375586 46.330002">
                                                <path class="tp-star__canvas" fill="#00b67a"
                                                    d="M0 46.330002h46.375586V0H0z"></path>
                                                <path class="tp-star__shape" fill="white"
                                                    d="M39.533936 19.711433L13.230239 38.80065l3.838216-11.797827L7.02115 19.711433h12.418975l3.837417-11.798624 3.837418 11.798624h12.418975zM23.2785 31.510075l7.183595-1.509576 2.862114 8.800152L23.2785 31.510075z">
                                                </path>
                                            </svg>
                                            <svg class="testimonial-star" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 46.375586 46.330002">
                                                <path class="tp-star__canvas" fill="#00b67a"
                                                    d="M0 46.330002h46.375586V0H0z"></path>
                                                <path class="tp-star__shape" fill="white"
                                                    d="M39.533936 19.711433L13.230239 38.80065l3.838216-11.797827L7.02115 19.711433h12.418975l3.837417-11.798624 3.837418 11.798624h12.418975zM23.2785 31.510075l7.183595-1.509576 2.862114 8.800152L23.2785 31.510075z">
                                                </path>
                                            </svg>
                                            <svg class="testimonial-star" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 46.375586 46.330002">
                                                <path class="tp-star__canvas" fill="#00b67a"
                                                    d="M0 46.330002h46.375586V0H0z"></path>
                                                <path class="tp-star__shape" fill="white"
                                                    d="M39.533936 19.711433L13.230239 38.80065l3.838216-11.797827L7.02115 19.711433h12.418975l3.837417-11.798624 3.837418 11.798624h12.418975zM23.2785 31.510075l7.183595-1.509576 2.862114 8.800152L23.2785 31.510075z">
                                                </path>
                                            </svg>
                                            <svg class="testimonial-star" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 46.375586 46.330002">
                                                <path class="tp-star__canvas" fill="#00b67a"
                                                    d="M0 46.330002h46.375586V0H0z"></path>
                                                <path class="tp-star__shape" fill="white"
                                                    d="M39.533936 19.711433L13.230239 38.80065l3.838216-11.797827L7.02115 19.711433h12.418975l3.837417-11.798624 3.837418 11.798624h12.418975zM23.2785 31.510075l7.183595-1.509576 2.862114 8.800152L23.2785 31.510075z">
                                                </path>
                                            </svg>
                                        </div>
                                        <span class="testimonial-date">Dec 25 2024</span>
                                    </div>
                                    <h4 class="testimonial-title">Xforexfxtrst es una buena opción para traders
                                        disciplinados
                                        y con experiencia</h4>
                                    <p class="testimonial-content">Xforexfxtrst es una buena opción para traders
                                        disciplinados
                                        y con experiencia en gestión de riesgo. Ofrecen oportunidades reales de
                                        crecimiento y acceso a capital, aunque todavía tienen margen de mejora en su
                                        soporte técnico y beneficios para usuarios frecuentes. Si eres un trader con
                                        experiencia y buscas una empresa confiable, Xforexfxtrst puede ser una alternativa a
                                        considerar.</p>
                                    <p class="testimonial-author">- Santiago Villamizar</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section -->
    <section class="blog-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="blog-container">
                        <h2 class="blog-title">The Xforexfxtrst Blog</h2>
                        <p class="blog-subtitle">Latest news on stocks, finance, and trading.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="blog-grid-container">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="row g-4 justify-content-center">
                            <!-- Blog Card 1 -->
                            <div class="col-12 col-sm-6 col-lg-3">
                                <a href="#" class="blog-card">
                                    <div class="blog-card-image-container">
                                        <div class="blog-card-image-placeholder"></div>
                                        <img alt="What Are Major, Minor And Exotic Currency Pairs In Forex Trading"
                                            loading="lazy" decoding="async" class="blog-card-image"
                                            src="{{ asset('frontend/assest/images/5ea70a71-4f20-45d1-9723-17455e4aef76.png') }}">
                                    </div>
                                    <div class="blog-card-meta">
                                        <div class="blog-card-category">TRADING TIPS</div>
                                        <div class="blog-card-date">Oct 02, 2024</div>
                                    </div>
                                    <h4 class="blog-card-title">What Are Major, Minor And Exotic Currency Pairs In Forex
                                        Trading</h4>
                                    <p class="blog-card-excerpt">Have you ever wondered how currency pairs work in Forex
                                        trading? Understanding the different classif...</p>
                                    <div class="blog-card-read-more">
                                        <span class="blog-card-read-more-text">Read more</span>
                                    </div>
                                </a>
                            </div>

                            <!-- Blog Card 2 -->
                            <div class="col-12 col-sm-6 col-lg-3">
                                <a href="#" class="blog-card">
                                    <div class="blog-card-image-container">
                                        <div class="blog-card-image-placeholder"></div>
                                        <img alt="What Are CFD's" loading="lazy" decoding="async"
                                            class="blog-card-image"
                                            src="{{ asset('frontend/assest/images/227f356d-cfe0-4165-9323-aa1c5077260d.png') }}">
                                    </div>
                                    <div class="blog-card-meta">
                                        <div class="blog-card-category">INSTRUMENTS</div>
                                        <div class="blog-card-date">Oct 02, 2024</div>
                                    </div>
                                    <h4 class="blog-card-title">What Are CFD's</h4>
                                    <p class="blog-card-excerpt">What if you could navigate the financial markets
                                        without directly owning the assets? This alluring p...</p>
                                    <div class="blog-card-read-more">
                                        <span class="blog-card-read-more-text">Read more</span>
                                    </div>
                                </a>
                            </div>

                            <!-- Blog Card 3 -->
                            <div class="col-12 col-sm-6 col-lg-3">
                                <a href="#" class="blog-card">
                                    <div class="blog-card-image-container">
                                        <div class="blog-card-image-placeholder"></div>
                                        <img alt="Trading The Economic Calendar" loading="lazy" decoding="async"
                                            class="blog-card-image"
                                            src="{{ asset('frontend/assest/images/593520f3-5a4e-4218-8b6a-0405787c86c6.png') }}'">
                                    </div>
                                    <div class="blog-card-meta">
                                        <div class="blog-card-category">TRADING TIPS</div>
                                        <div class="blog-card-date">Oct 01, 2024</div>
                                    </div>
                                    <h4 class="blog-card-title">Trading The Economic Calendar</h4>
                                    <p class="blog-card-excerpt">Have you ever wondered how economic events affect your
                                        trades and the broader market? Understanding ...</p>
                                    <div class="blog-card-read-more">
                                        <span class="blog-card-read-more-text">Read more</span>
                                    </div>
                                </a>
                            </div>

                            <!-- Blog Card 4 -->
                            <div class="col-12 col-sm-6 col-lg-3">
                                <a href="#" class="blog-card">
                                    <div class="blog-card-image-container">
                                        <div class="blog-card-image-placeholder"></div>
                                        <img alt="What Is Margin Trading" loading="lazy" decoding="async"
                                            class="blog-card-image"
                                            src="{{ asset('frontend/assest/images/83a2da62-599d-4950-b000-3bf6e0074c10.png') }}">
                                    </div>
                                    <div class="blog-card-meta">
                                        <div class="blog-card-category">TOP TRADERS</div>
                                        <div class="blog-card-date">Oct 02, 2024</div>
                                    </div>
                                    <h4 class="blog-card-title">What Is Margin Trading</h4>
                                    <p class="blog-card-excerpt">What if you could amplify your trading potential and
                                        maximize your profits with just a bit of borrow...</p>
                                    <div class="blog-card-read-more">
                                        <span class="blog-card-read-more-text">Read more</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
