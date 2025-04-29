<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'description'];
    public $timestamps = false;

    /**
     * Una categoria può avere molti prodotti.
     */
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
