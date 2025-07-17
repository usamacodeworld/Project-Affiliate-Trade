<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Admin account
        User::create([
            'role' => 'admin',
            'name' => 'Admin User',
            'username' => 'adminuser',
            'email' => 'admin@example.com',
            'password' => Hash::make('password@12345'),
            'address' => 'Admin Address',
            'phone' => '1234567890',
            'country' => 'USA',
            'currency' => 'USD',
            'balance' => 0.00,
            'is_active' => true,
            'is_verified' => true,
            'last_login_at' => now(),
        ]);

        // Normal user account
        User::create([
            'role' => 'user',
            'name' => 'Test User',
            'username' => 'testuser',
            'email' => 'user@example.com',
            'password' => Hash::make('password@12345'),
            'address' => 'User Address',
            'phone' => '9876543210',
            'country' => 'Pakistan',
            'currency' => 'PKR',
            'balance' => 500.00,
            'is_active' => true,
            'is_verified' => false,
            'last_login_at' => now(),
        ]);
    }
}
