<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Esegui il seeder per gli ordini.
     */
    public function run(): void
    {
        // Aggiungi ordini manualmente

        Order::create([
            'user_id' => 1, // ID dell'utente (assicurati che l'utente con ID 1 esista)
            'product_id' => 1, // ID del prodotto (assicurati che il prodotto con ID 1 esista)
            'status' => 'completed', // Stato dell'ordine
            'total_cost' => 99.99, // Costo totale dell'ordine
        ]);

        Order::create([
            'user_id' => 2,
            'product_id' => 2,
            'status' => 'pending',
            'total_cost' => 49.50,
        ]);

        Order::create([
            'user_id' => 3,
            'product_id' => 3,
            'status' => 'shipped',
            'total_cost' => 120.75,
        ]);

    }
}
