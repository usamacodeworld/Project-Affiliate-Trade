<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Checkout;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function users($proivder)
    {
        if ($proivder == 'buyers') {
            $buyers = Checkout::with(['user','package'])->orderBy('created_at', 'desc')->get();
            return view('backend.pages.user-buyers', compact('buyers'));
        }
    }
}
