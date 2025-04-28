<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['user_id', 'product_id', 'status', 'total_cost'];

    // Relazione con User (un ordine appartiene a un utente)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relazione con Product (un ordine riguarda un prodotto)
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
