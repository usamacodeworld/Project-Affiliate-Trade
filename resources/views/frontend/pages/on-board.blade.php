@extends('frontend.layouts.app')
@section('page_title', 'Checkout')
@section('page_header')
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Onboarding Policy</h4>
            <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active text-primary">Onboarding Policy</li>
            </ol>
        </div>
    </div>

@endsection
@section('content')
    <div class="container-fluid contact py-5">
        <div class="container py-5">
            <p class="text-white">
                1. Purpose
To ensure a safe and compliant onboarding process that aligns with regulatory standards and protects both the platform and its users. <br>

2. Eligibility Criteria
Users must be 18 years or older.

Users must not reside in any restricted or sanctioned jurisdictions.

Users must have a valid email and mobile number.
<br>
3. Registration Process
Step 1: Email/mobile verification

Step 2: Submission of personal information

Step 3: KYC verification (ID + selfie + proof of address)

Step 4: Account review and approval
<br>
4. KYC and Identity Verification
Verification is conducted via third-party providers or in-house systems. We reserve the right to request additional documentation at any time.
<br>
5. Account Activation
Once verified, users receive full access to trading features, including deposits, trading, and withdrawals.
<br>
6. Ongoing Monitoring
We regularly monitor user activity and may re-initiate KYC if abnormal behavior is detected or required by law.
<br>
7. Rejection or Suspension
We reserve the right to reject an application or suspend an account if:

Incomplete or false documents are submitted

Fraud, abuse, or suspicious activity is detected

Regulatory requirements are violated
<br>
8. Support and Communication
Our support team is available for any questions regarding the onboarding process. All communications will be via email or through the platform's secure portal.


            </p>
        </div>
    </div>
@endsection
