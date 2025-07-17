@extends('frontend.layouts.app')
@section('page_title', 'Checkout')
@section('page_header')
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Checkout Package</h4>
            <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active text-primary">Checkout</li>
            </ol>
        </div>
    </div>

@endsection
@section('content')
    <div class="container-fluid contact py-5">
        <div class="container py-5">
            <form action="{{ route('checkout.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="package_id" value="{{ $package->id }}">
                <div class="row g-5">
                    <div class="col-xl-6">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">

                            <div class="bg-light p-5 rounded h-100 wow fadeInUp" data-wow-delay="0.2s">
                                <h4 class="text-primary">Fill your details</h4>
                                <p class="mb-4">Kindly, fill the correct details because after approval you got the login
                                    link
                                    with login details.</p>
                                <div class="row g-4">
                                    <div class="col-lg-12 col-xl-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control border-0" id="name"
                                                name="name" placeholder="Your Name" value="{{ old('name') }}" required>
                                            @error('name')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                            <label for="name">Your Name</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-xl-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control border-0" id="email"
                                                name="email" placeholder="Your Email" value="{{ old('email') }}"
                                                required>
                                            @error('email')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                            <label for="email">Your Email</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-xl-6">
                                        <div class="form-floating">
                                            <input type="phone" class="form-control border-0" id="phone"
                                                name="phone" placeholder="Phone" value="{{ old('phone') }}" required>
                                            @error('phone')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                            <label for="phone">Your Phone</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-xl-6">
                                        <div class="form-floating">
                                            <input type="file" class="form-control border-0" id="transaction_screenshot"
                                                name="transaction_screenshot" required>
                                            @error('transaction_screenshot')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                            <label for="address">Transaction Image</label>
                                        </div>

                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control border-0" name="notes" placeholder="Leave a message here" id="message"
                                                style="height: 100px">{{ old('notes') }}</textarea>
                                            @error('notes')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                            <label for="message">Message</label>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
                        <div class="rounded h-100">
                            <div class="card bg-primary text-white rounded-3">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-4">
                                        <h5 class="mb-0 text-white">Purchase details</h5>
                                    </div>

                                    <div class="d-flex justify-content-between align-items-center mb-4">
                                        <div>
                                            <p class="mb-0">You have 1 item in your cart</p>
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex flex-row align-items-center">
                                            <div>
                                                <img src="https://res.cloudinary.com/jerrick/image/upload/v1680719820/642dbfcc81640a001d742a97.jpg"
                                                    class="img-fluid rounded-3" alt="Shopping item" style="width: 65px;">
                                            </div>
                                            <div class="ms-3">
                                                <h5 class="text-white">{{ $package->name }}</h5>
                                                <p class="small mb-0">Limit ${{ $package->trade_limit_to }} -
                                                    ${{ $package->trade_limit_from }}
                                                    trade</strong></p>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-row align-items-center">
                                            <div style="width: 50px;">
                                                <h5 class="fw-normal mb-0 text-white">1</h5>
                                            </div>
                                            <div style="width: 80px;">
                                                <h5 class="mb-0 text-white">${{ number_format($package->price) }}</h5>
                                            </div>
                                        </div>
                                    </div>

                                    <hr class="my-4">

                                    <div class="d-flex justify-content-between">
                                        <p class="mb-2">Subtotal</p>
                                        <p class="mb-2">${{ number_format($package->price) }}</p>
                                    </div>

                                    <div class="d-flex justify-content-between">
                                        <p class="mb-2">Tax</p>
                                        <p class="mb-2">$0.00</p>
                                    </div>

                                    <div class="d-flex justify-content-between mb-4">
                                        <p class="mb-2">Total(Incl. taxes)</p>
                                        <p class="mb-2">${{ number_format($package->price) }}</p>
                                    </div>

                                    <button type="submit" data-mdb-button-init data-mdb-ripple-init
                                        class="btn btn-info btn-block btn-lg">
                                        <div class="d-flex justify-content-between">
                                            <span>${{ number_format($package->price) }}</span>
                                            <span>Checkout <i class="fas fa-long-arrow-alt-right ms-2"></i></span>
                                        </div>
                                    </button>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
