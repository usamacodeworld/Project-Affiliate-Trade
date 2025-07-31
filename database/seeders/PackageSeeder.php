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
            ['name' => 'Level 1', 'trade_limit_from' => 500,  'trade_limit_to' => 1000, 'price' => 250,  'leverage' => '10x',  'account_size' => 10000],
            ['name' => 'Level 2', 'trade_limit_from' => 1000, 'trade_limit_to' => 1500, 'price' => 500,  'leverage' => '20x',  'account_size' => 20000],
            ['name' => 'Level 3', 'trade_limit_from' => 1500, 'trade_limit_to' => 2000, 'price' => 750,  'leverage' => '30x',  'account_size' => 30000],
            ['name' => 'Level 4', 'trade_limit_from' => 2000, 'trade_limit_to' => 2500, 'price' => 1000, 'leverage' => '40x',  'account_size' => 40000],
            ['name' => 'Level 5', 'trade_limit_from' => 2500, 'trade_limit_to' => 3000, 'price' => 1250, 'leverage' => '50x',  'account_size' => 50000],
            ['name' => 'Level 6', 'trade_limit_from' => 3000, 'trade_limit_to' => 4000, 'price' => 1500, 'leverage' => '60x',  'account_size' => 60000],
            ['name' => 'Level 7', 'trade_limit_from' => 4000, 'trade_limit_to' => 5000, 'price' => 2000, 'leverage' => '70x',  'account_size' => 70000],
            ['name' => 'Level 8', 'trade_limit_from' => 4000, 'trade_limit_to' => 6000, 'price' => 2250, 'leverage' => '80x',  'account_size' => 80000],
        ];

        foreach ($packages as $package) {
            DB::table('packages')->insert([
                'name' => $package['name'],
                'slug' => strtolower(str_replace(' ', '-', $package['name'])),
                'trade_limit_from' => $package['trade_limit_from'],
                'trade_limit_to' => $package['trade_limit_to'],
                'price' => $package['price'],
                'leverage' => $package['leverage'],
                'account_size' => $package['account_size'],
                'description' => $description,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
