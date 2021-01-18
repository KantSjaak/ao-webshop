<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetails extends Model
{
    /**
     * Get the order that owns this part of the order
     */
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
