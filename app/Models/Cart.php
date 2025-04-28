<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = ['user_id', 'product_id', 'quantity', 'totalCost'];

    // Relazione con User (un carrello appartiene a un utente)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relazione con Product (un carrello contiene un prodotto)
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
