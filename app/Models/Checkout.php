<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Checkout extends Model
{
    /** @use HasFactory<\Database\Factories\CheckoutFactory> */
    use HasFactory;

    protected $fillable = [
        'user_id',
        'package_id',
        'amount',
        'notes',
        'status',
        'order_number', // to track the order number for payment
        'payment_reference',
        'paid_at',
        'payment_method',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function package(){
        return $this->belongsTo(Package::class);
    }
}
