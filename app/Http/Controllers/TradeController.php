<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class TradeController extends Controller
{
    public function dashboard()
    {
        $url = 'https://paper-api.alpaca.markets/v2/assets?asset_class=crypto';

        $response = Http::withHeaders([
            'APCA-API-KEY-ID' => 'PKCWU2UKRA2VSJ9PYNK8',
            'APCA-API-SECRET-KEY' => 'HreMYs6M71fK4JJfXbsQIbbg6QPasiw3BSWddCEp',
        ])->get($url);

        $assets = [];
        if ($response->successful()) {
            $assets = $response->json();
        }

        $headers = [
            'APCA-API-KEY-ID'     => 'PKCWU2UKRA2VSJ9PYNK8',
            'APCA-API-SECRET-KEY' => 'HreMYs6M71fK4JJfXbsQIbbg6QPasiw3BSWddCEp',
        ];

        $orders = Http::withHeaders($headers)
            ->get('https://paper-api.alpaca.markets/v2/orders?status=all&limit=100')
            ->json();

        $positions = Http::withHeaders($headers)
            ->get('https://paper-api.alpaca.markets/v2/positions')
            ->json();

        return view('user.trade.index', compact('assets', 'orders', 'positions'));
    }

    public function getQuote($symbol)
    {
        $url = "https://data.alpaca.markets/v1beta3/crypto/us/latest/quotes?symbols={$symbol}";

        $response = Http::withHeaders([
            'APCA-API-KEY-ID' => 'PKCWU2UKRA2VSJ9PYNK8',
            'APCA-API-SECRET-KEY' => 'HreMYs6M71fK4JJfXbsQIbbg6QPasiw3BSWddCEp',
        ])->get($url);

        if ($response->successful()) {
            $quotes = $response->json();
            return response()->json($quotes['quotes'][$symbol] ?? []);
        }



        return response()->json(['error' => 'Failed to fetch quote'], 400);
    }




    public function placeOrder(Request $req)
    {
        $data = $req->validate([
            'symbol'        => 'required|string',
            'qty'           => 'required|numeric',
            'side'          => 'required|in:buy,sell',
            'type'          => 'required|in:market,limit,stop,stop_limit',
            'time_in_force' => 'required',
            'price'         => 'required|numeric', // This is the calculated price
            'limit_price'   => 'nullable|numeric', // Only for limit orders
        ]);

        // Get Login User Trade Limit
        $user = Auth::user();

        if ($data['type'] === 'limit') {
            // Your user-configured limits
            $min = $user->trade_limit_from;
            $max = $user->trade_limit_to;

            // Check the actual validated field
            $price = $data['limit_price'] ?? null;

            if ($price === null) {
                return response('Limit price is required', 422);
            }

            if ($price <= $min) {
                return response('Trade Limit Too Low', 422);
            }

            if ($price >= $max) {
                return response('Trade Limit Too High', 422);
            }
        }


        // For market orders, use the current price
        // For limit orders, use the limit price
        $price = ($data['type'] === 'limit' && isset($data['limit_price']))
            ? $data['limit_price']
            : $data['price'];

        $body = [
            'symbol'         => $data['symbol'],
            'qty'            => $data['qty'],
            'side'           => $data['side'],
            'type'           => $data['type'],
            'time_in_force'  => $data['time_in_force'],
            'price'          => $price, // Send the price to Alpaca
        ];

        // For limit orders, add the limit price
        if ($data['type'] === 'limit') {
            $body['limit_price'] = $data['limit_price'];
        }

        $resp = Http::withHeaders([
            'APCA-API-KEY-ID' => 'PKCWU2UKRA2VSJ9PYNK8',
            'APCA-API-SECRET-KEY' => 'HreMYs6M71fK4JJfXbsQIbbg6QPasiw3BSWddCEp',
        ])->post('https://paper-api.alpaca.markets/v2/orders', $body);

        if ($resp->successful()) {
            return response()->json(['success' => true, 'order' => $resp->json()]);
        }

        // Handle error response
        $error = $resp->json();
        return response()->json([
            'error' => 'Trade failed',
            'reason' => $error['message'] ?? 'Unknown error',
            'details' => $error
        ], $resp->status());
    }

    public function history()
    {
        $headers = [
            'APCA-API-KEY-ID'     => 'PKCWU2UKRA2VSJ9PYNK8',
            'APCA-API-SECRET-KEY' => 'HreMYs6M71fK4JJfXbsQIbbg6QPasiw3BSWddCEp',
        ];

        $orders = Http::withHeaders($headers)
            ->get('https://paper-api.alpaca.markets/v2/orders?status=all&limit=100')
            ->json();

        $positions = Http::withHeaders($headers)
            ->get('https://paper-api.alpaca.markets/v2/positions')
            ->json();

        return view('trade-history', compact('orders', 'positions'));
    }
}
