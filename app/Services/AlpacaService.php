<?php
namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class AlpacaService {
  protected $base, $dataBase, $headers;

  public function __construct() {
    $this->base = config('alpaca.base');
    $this->dataBase = config('alpaca.data_base');
    $this->headers = [
      'APCA-API-KEY-ID'     => config('alpaca.key'),
      'APCA-API-SECRET-KEY' => config('alpaca.secret'),
    ];
  }

  public function assets() {
    return $this->safeGet("/assets", ['asset_class'=>'crypto','status'=>'active']);
  }

  public function quote(string $symbol) {
    return $this->safeGetDataBase("/crypto/us/latest/orderbooks", ['symbols'=>$symbol]);
  }

  public function submitOrder(array $body) {
    Log::info("Submitting order", $body);
    return $this->safePost("/orders", $body);
  }

  public function orders() {
    return $this->safeGet("/orders", ['status'=>'all','limit'=>50]);
  }

  public function positions() {
    return $this->safeGet("/positions");
  }

  public function account() {
    return $this->safeGet("/account");
  }

  protected function safeGet(string $path, array $qs=[]) {
    $resp = Http::withHeaders($this->headers)->get($this->base."/v2".$path,$qs);
    Log::info("GET ".$path, ['status'=>$resp->status(),'body'=>$resp->json()]);
    return $resp->json();
  }

  protected function safePost(string $path, array $body) {
    $resp = Http::withHeaders($this->headers)->post($this->base."/v2".$path,$body);
    Log::info("POST ".$path, ['status'=>$resp->status(),'body'=>$resp->json()]);
    return $resp->json();
  }

  protected function safeGetDataBase(string $path, array $qs=[]) {
    $resp = Http::withHeaders($this->headers)->get($this->dataBase.$path,$qs);
    Log::info("Data GET ".$path, ['status'=>$resp->status(),'body'=>$resp->json()]);
    return $resp->json();
  }
}
