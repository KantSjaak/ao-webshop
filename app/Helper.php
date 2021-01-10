<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Helper extends Model
{
    public static function Multiply($a, $b)
    {
        return round($a) * $b;
    }
}
