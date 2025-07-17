<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Package;
use App\Models\Checkout;
use Illuminate\Support\Str;
use App\Http\Requests\StoreCheckoutRequest;
use App\Http\Requests\UpdateCheckoutRequest;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Hash;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCheckoutRequest $request)
    {
        $validatedData = $request->validated();

        // Check if user already exists
        $user = User::where('email', $validatedData['email'])->first();
        if (!$user) {
            $baseUsername = Str::slug($validatedData['name']);
            $counter = 1;
            $username = $baseUsername;
            while (User::where('username', $username)->exists()) {
                $username = $baseUsername . '-' . $counter++;
            }
            $user = new User();
            $user->name = $validatedData['name'];
            $user->username = $username;
            $user->email = $validatedData['email'];
            $user->password=Hash::make('password');
            $user->phone = $validatedData['phone'];
            $user->save();
        }

        // Create checkout record
        $checkout = new Checkout();
        $checkout->user_id = $user->id;
        $checkout->package_id = $validatedData['package_id'];
        $checkout->transaction_screenshot = $request->file('transaction_screenshot') ? $request->file('transaction_screenshot')->store('uploads', 'public') : null;
        $checkout->amount = Package::find($validatedData['package_id'])->price;
        $checkout->notes = $validatedData['notes'];
        $checkout->save();

        return '1';
    }

    /**
     * Display the specified resource.
     */
    public function show($package_slug)
    {
        $package = Package::where('slug', $package_slug)->first();
        if (!$package) {
            return redirect()->route('home')->with('error', 'Package not found.');
        }
        return view('frontend.pages.checkout', compact('package'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Checkout $checkout)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCheckoutRequest $request, Checkout $checkout)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Checkout $checkout)
    {
        //
    }
}
