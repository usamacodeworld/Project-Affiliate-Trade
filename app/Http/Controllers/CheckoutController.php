<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Package;
use App\Models\Checkout;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Mail\SendUserStatusEmail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\StoreCheckoutRequest;
use App\Http\Requests\UpdateCheckoutRequest;

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

        // Check or create user
        $user = User::firstOrCreate(
            ['email' => $validatedData['email']],
            [
                'name' => $validatedData['name'],
                'username' => $this->generateUsername($validatedData['name']),
                'password' => Hash::make('password'),
                'phone' => $validatedData['phone'],
            ]
        );

        // Create checkout record
        $package = Package::findOrFail($validatedData['package_id']);

        $checkout = Checkout::create([
            'user_id' => $user->id,
            'package_id' => $package->id,
            'amount' => $package->price,
            'notes' => $validatedData['notes'] ?? null,
            'status' => 'pending', // Default status
            'paymen_method'=>'card',
        ]);

        // Redirect to payment initiation with checkout ID
        return redirect()->route('payment.initiate', ['checkout_id' => $checkout->id]);
    }

    private function generateUsername($name)
    {
        $base = Str::slug($name);
        $username = $base;
        $count = 1;
        while (User::where('username', $username)->exists()) {
            $username = $base . '-' . $count++;
        }
        return $username;
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

    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:pending,active,cancelled,failed,success,hold',
        ]);

        $checkout = Checkout::with('user')->findOrFail($id);
        $user = $checkout->user;
        $checkout->status = $request->status;
        $checkout->save();

        // Auto-generate password only if status is active or success and user doesn't already have one
        $password = null;
        if (in_array($request->status, ['active', 'success'])) {
            $password = Str::random(10);
            $user->password = Hash::make($password);
            $user->save();
        }

        // Send email with status message and (optional) password
        Mail::to($user->email)->send(new SendUserStatusEmail($user, $request->status, $password));

        return redirect()->back()->with('success', 'Status updated and email sent successfully.');
    }
}
