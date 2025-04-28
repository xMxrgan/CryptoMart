<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Esegui il seeder per le categorie.
     */
    public function run(): void
    {
        // Aggiungi alcune categorie
        Category::create([
            'name' => 'Elettronica',
            'description' => 'Prodotti elettronici come telefoni, computer, e accessori.'
        ]);

        Category::create([
            'name' => 'Abbigliamento',
            'description' => 'Vestiti, scarpe e accessori di moda.'
        ]);

        Category::create([
            'name' => 'Alimentari',
            'description' => 'Cibi freschi, confezionati e prodotti da supermercato.'
        ]);

        // Puoi aggiungere altre categorie o utilizzare `insert()` per inserire più record alla volta:
        Category::insert([
            ['name' => 'Casa', 'description' => 'Mobili e accessori per la casa.'],
            ['name' => 'Sport', 'description' => 'Attrezzature e abbigliamento sportivo.']
        ]);
    }
}
