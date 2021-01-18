<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    /**
     * Get the order details for this order
     */
    public function details()
    {
        return $this->hasMany(OrderDetails::class);
    }


    /**
     * Get the user that made this order
     */
    public function order()
    {
        return $this->belongsTo(User::class);
    }
}
