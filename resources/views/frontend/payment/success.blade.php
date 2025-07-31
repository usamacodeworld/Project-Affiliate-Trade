@extends('frontend.layouts.app')
@section('content')
<div class="container py-5 text-center">
    @if($checkout)
        <div class="card shadow-lg p-4 border-success">
            <h2 class="text-success">🎉 Payment Successful!</h2>
            <p class="mb-4">Thank you, <strong>{{ $checkout->user->name }}</strong>. Your subscription has been processed successfully.</p>

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
                    <td><span class="badge bg-success">{{ ucfirst($checkout->status) }}</span></td>
                </tr>
            </table>

            <a href="{{ url('/') }}" class="btn btn-primary mt-3">Go to HomePage</a>
        </div>
    @else
        <div class="alert alert-warning">No payment record found.</div>
    @endif
</div>
@endsection
