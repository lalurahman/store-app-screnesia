<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'image',
        'description',
        'price',
        'is_available',
        'stock',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
