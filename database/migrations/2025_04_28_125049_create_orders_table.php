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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('status'); // Status dell'ordine (es. "in elaborazione", "completato")
            $table->decimal('total_cost', 8, 2); // Costo totale dell'ordine

            $table->foreignId('user_id')->references('id')->on('users'); // Relazione con users

            $table->foreignId('product_id')->references('id')->on('products'); // Relazione con products

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
