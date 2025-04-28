<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cart;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Aggiungi manualmente i dati per il cart
        Cart::create([
            'user_id' => 1, // ID utente esempio
            'product_id' => 1, // ID prodotto esempio
            'quantity' => 2, // Quantità del prodotto
            'totalCost' => 19.98, // Costo totale
        ]);

        Cart::create([
            'user_id' => 2,
            'product_id' => 2,
            'quantity' => 1,
            'totalCost' => 9.99,
        ]);

        Cart::create([
            'user_id' => 3,
            'product_id' => 3,
            'quantity' => 3,
            'totalCost' => 29.97,
        ]);

    }
}
