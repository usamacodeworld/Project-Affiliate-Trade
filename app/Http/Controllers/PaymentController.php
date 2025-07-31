<?php

namespace App\Http\Controllers;

use App\Models\Checkout;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PaymentController extends Controller
{
    public function initiatePayment(Request $request)
    {
        $checkout = Checkout::with('user')->findOrFail($request->checkout_id);

        $order = [
            'number' => 'ORDER-' . strtoupper(Str::random(8)),
            'amount' => number_format($checkout->amount, 2, '.', ''),
            'currency' => 'USD',
            'description' => 'Package Purchase: ' . $checkout->package->name,
        ];

        $hashString = $order['number'] . $order['amount'] . $order['currency'] .
            $order['description'] . env('JENAPAY_MERCHANT_PASS');

        $hash = sha1(md5(strtoupper($hashString)));

        $payload = [
            'merchant_key' => env('JENAPAY_MERCHANT_KEY'),
            'operation' => 'purchase',
            'success_url' => route('payment.success', ['order_number' => $order['number']]),
            'cancel_url' => route('payment.cancel', ['order_number' => $order['number']]),
            'hash' => $hash,
            'order' => $order,
            'customer' => [
                'name' => $checkout->user->name,
                'email' => $checkout->user->email,
            ]
        ];

        $checkout->update(['order_number' => $order['number']]); // save for later tracking

        $response = Http::post(env('JENAPAY_BASE_URL') . '/api/v1/session', $payload);

        if ($response->successful() && isset($response['redirect_url'])) {
            return redirect()->away($response['redirect_url']);
        }

        return back()->with('error', 'Failed to initiate payment. Try again.');
    }


    public function handleCallback(Request $request)
    {
        return '1';
        $data = $request->all();

        $expectedHash = sha1(md5(strtoupper(
            $data['id'] .
                $data['order_number'] .
                $data['order_amount'] .
                $data['order_currency'] .
                $data['order_description'] .
                env('JENAPAY_MERCHANT_PASS')
        )));

        if ($expectedHash !== $data['hash']) {
            abort(403, 'Invalid signature');
        }

        // Find matching checkout
        $checkout = Checkout::where('order_number', $data['order_number'])->first();

        if (!$checkout) {
            return response()->json(['status' => 'Checkout not found'], 404);
        }

        if ($data['status'] === 'SUCCESS') {
            $checkout->status = 'active';
            $checkout->payment_reference = $data['id'];
            $checkout->paid_at = now();
            $checkout->save();

            // Optional: send user login email
            // Mail::to($checkout->user->email)->send(new \App\Mail\PackagePurchased($checkout));
        } else {
            $checkout->status = 'failed';
            $checkout->save();
        }

        return response()->json(['status' => 'ok']);
    }


    public function success(Request $request)
    {
        $checkout = Checkout::where('order_number', $request->order_number)->with('package')->first();

        if (!$checkout) {
            return view('frontend.payment.success')->with('checkout', null);
        }
        $checkout->status = 'active';
        $checkout->paid_at = now();
        $checkout->save();
        return view('frontend.payment.success', compact('checkout'));
    }

    public function cancel(Request $request)
    {
        $checkout = Checkout::where('order_number', $request->order_number)->with('package')->first();

        return view('frontend.payment.cancel', compact('checkout'));
    }
}
