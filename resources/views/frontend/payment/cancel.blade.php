@extends('frontend.layouts.app')


@section('content')
    <div class="container py-5 text-center">
        <div class="card shadow-lg p-4 border-danger">
            <h2 class="text-danger">❌ Payment Cancelled</h2>
            <p class="mb-4">Sorry, your payment was cancelled. You can try again anytime.</p>

            @if ($checkout)
                <table class="table table-bordered w-50 mx-auto">
                    <tr>
                        <th>Package</th>
                        <td>{{ $checkout->package->name }}</td>
                    </tr>
                    <tr>
                        <th>Amount</th>
                        <td>${{ number_format($checkout->amount, 2) }}</td>
                    </tr>
                    <tr>
                        <th>Order No.</th>
                        <td>{{ $checkout->order_number }}</td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td><span class="badge bg-danger">{{ ucfirst($checkout->status) }}</span></td>
                    </tr>
                </table>
            @else
                <div class="alert alert-warning">No record found for the cancelled transaction.</div>
            @endif

            <a href="{{ route('checkout.store') }}" class="btn btn-outline-danger mt-3">Try Again</a>
        </div>
    </div>
@endsection
