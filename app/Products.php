<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    /**
     * Get the category that owns this product.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
