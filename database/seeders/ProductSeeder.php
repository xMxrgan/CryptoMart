<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Esegui il seeder per i prodotti.
     */
    public function run(): void
    {
        // Aggiungi prodotti manualmente

        Product::create([
            'name' => 'Product 1',
            'description' => 'Description of product 1',
            'price' => 29.99,
            'quantity' => 100,
            'category_id' => 1, // Assicurati che la categoria con ID 1 esista
        ]);

        Product::create([
            'name' => 'Product 2',
            'description' => 'Description of product 2',
            'price' => 59.99,
            'quantity' => 50,
            'category_id' => 2, // Assicurati che la categoria con ID 2 esista
        ]);

        Product::create([
            'name' => 'Product 3',
            'description' => 'Description of product 3',
            'price' => 99.99,
            'quantity' => 30,
            'category_id' => 1, // Assicurati che la categoria con ID 1 esista
        ]);

        // Puoi aggiungere altri prodotti come necessario
    }
}
