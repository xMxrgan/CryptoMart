<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Cart;
use App\Models\Product;
use App\Models\Category;
use App\Models\Order;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
     public function run(): void
     {
         // Esegui i singoli seeder
         $this->call([
             UserSeeder::class,
             CategorySeeder::class,
             ProductSeeder::class,
             CartSeeder::class,
             OrderSeeder::class,
         ]);
}
}
