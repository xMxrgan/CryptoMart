<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get("/", function() {
    return Inertia::render('welcome');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');
});

Route::prefix('api')->group(function () {
    Route::apiResources([
        "products" => \App\Http\Controllers\ProductController::class,
    ]);

    /* TODO aggiungere routes verificate per l'utente
     * Route::middleware(['auth', 'verified'])->group(function () {

        Route::apiResources([
            "orders" => \App\Http\Controllers\OrderController::class,
        ]);
    });*/
});

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
