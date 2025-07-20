<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\AlpacaService;
use App\Services\AlpacaHttpService;

class DashboardController extends Controller
{
   

    public function dashboard()
    {
        return view('user.dashboard');
    }
}
