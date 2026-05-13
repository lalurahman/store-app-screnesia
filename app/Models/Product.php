<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;

#[Fillable(['name', 'category_id', 'price', 'stock', 'image', 'description', 'is_active'])]
class Product extends Model
{
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
