<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'quantity', 'description', 'price', 'category_id'];

    /**
     * Relazione con Category (un prodotto appartiene a una categoria)
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
