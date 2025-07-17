<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Package;

class HomeController extends Controller
{
    public function index()
    {
        $packages = Package::all();
        return view('frontend.index',compact('packages'));
    }
}
