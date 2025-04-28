<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Esegui il seeder per gli utenti.
     */
    public function run(): void
    {
        // Aggiungi utenti manualmente

        User::create([
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'password' => bcrypt('password123'), // Cifra la password
        ]);

        User::create([
            'name' => 'Jane Smith',
            'email' => 'janesmith@example.com',
            'password' => bcrypt('password456'),
        ]);

        User::create([
            'name' => 'Alice Johnson',
            'email' => 'alicejohnson@example.com',
            'password' => bcrypt('password789'),
        ]);

    }
}
