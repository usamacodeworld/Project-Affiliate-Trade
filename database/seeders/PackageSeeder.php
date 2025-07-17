<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $description = 'After receiving the payment, your account will be active on the same email. We will notify you once the account is approved.';

        $packages = [
            ['name' => 'Package 1', 'trade_limit_from' => 500,  'trade_limit_to' => 1000, 'price' => 250],
            ['name' => 'Package 2', 'trade_limit_from' => 1000, 'trade_limit_to' => 1500, 'price' => 500],
            ['name' => 'Package 3', 'trade_limit_from' => 1500, 'trade_limit_to' => 2000, 'price' => 750],
            ['name' => 'Package 4', 'trade_limit_from' => 2000, 'trade_limit_to' => 2500, 'price' => 1000],
            ['name' => 'Package 5', 'trade_limit_from' => 2500, 'trade_limit_to' => 3000, 'price' => 1250],
            ['name' => 'Package 6', 'trade_limit_from' => 3000, 'trade_limit_to' => 4000, 'price' => 1500],
            ['name' => 'Package 7', 'trade_limit_from' => 4000, 'trade_limit_to' => 5000, 'price' => 2000],
            ['name' => 'Package 8', 'trade_limit_from' => 4000, 'trade_limit_to' => 6000, 'price' => 2250],
        ];

        foreach ($packages as $package) {
            DB::table('packages')->insert([
                'name' => $package['name'],
                'slug' => strtolower(str_replace(' ', '-', $package['name'])),
                'trade_limit_from' => $package['trade_limit_from'],
                'trade_limit_to' => $package['trade_limit_to'],
                'price' => $package['price'],
                'description' => $description,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
