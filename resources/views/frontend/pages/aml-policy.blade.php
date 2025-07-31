@extends('frontend.layouts.app')
@section('page_title', 'Checkout')
@section('page_header')
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Anti-Money Laundering Policy</h4>
            <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active text-primary">AML</li>
            </ol>
        </div>
    </div>

@endsection
@section('content')
    <div class="container-fluid contact py-5">
        <div class="container py-5">
            <p class="text-white">
                1. Purpose
This AML Policy aims to prevent and detect money laundering and the financing of terrorist activities in accordance with applicable laws and international standards. <br>

2. Scope
This policy applies to all users, employees, partners, and stakeholders who access or interact with our trading platform.
<br>
3. Customer Due Diligence (CDD)
We perform Know Your Customer (KYC) verification to identify and verify the identity of our clients before providing services. This includes:

Valid Government ID (e.g., passport, CNIC)

Proof of address (e.g., utility bill, bank statement)

Selfie with ID for biometric match (optional)
<br>
4. Risk-Based Approach
Customers are categorized based on their risk level (Low, Medium, High). High-risk users may be subject to enhanced due diligence (EDD).
<br>
5. Transaction Monitoring
We monitor transactions for suspicious patterns, including:

Sudden large deposits/withdrawals

Multiple accounts from the same IP

Trading activity inconsistent with customer profile
<br>
6. Suspicious Activity Reporting
Any suspicious transaction will be reported to the relevant financial intelligence unit (FIU) and may result in account suspension.
<br>
7. Record Keeping
All customer records and transaction history are securely stored for a minimum of 5 years.
<br>
8. Training
All employees undergo regular AML training to stay up to date on regulatory obligations and detection methods.


            </p>
        </div>
    </div>
@endsection
