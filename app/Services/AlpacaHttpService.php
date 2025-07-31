<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class AlpacaHttpService
{
    protected $base;

    public function __construct()
    {
        $this->base = config('services.alpaca.base_url');
    }

    protected function headers()
    {
        return [
            'APCA-API-KEY-ID'     => config('services.alpaca.key'),
            'APCA-API-SECRET-KEY' => config('services.alpaca.secret'),
        ];
    }

    public function account()
    {
        return Http::withHeaders($this->headers())
            ->get("{$this->base}/v2/account")
            ->json();
    }

    public function positions()
    {
        return Http::withHeaders($this->headers())
            ->get("{$this->base}/v2/positions")
            ->json();
    }

    public function submitOrder($symbol, $qty, $side, $type = 'market', $timeInForce = 'day')
    {
        return Http::withHeaders($this->headers())
            ->post("{$this->base}/v2/orders", [
                'symbol'         => strtoupper($symbol),
                'qty'            => $qty,
                'side'           => strtolower($side),
                'type'           => $type,
                'time_in_force'  => $timeInForce,
            ])->json();
    }
}
