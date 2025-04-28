<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users'); // riferimento all'utente
            $table->foreignId('product_id')->references('id')->on('products'); // riferimento al prodotto
            $table->integer('quantity');              // quantità del prodotto
            $table->decimal('totalCost', 8, 2);       // costo totale (esempio: 999999.99)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carts');
    }
};
