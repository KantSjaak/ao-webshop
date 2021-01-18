<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Helper extends Model
{
    public static function Multiply($a, $b)
    {
        return $a * $b;
    }

    public static function HoldInformation()
    {
    }

    public static function AddMultiple($data)
    {
        $arr = array();
        $total=0;
        foreach ($data as $value) {
            for ($i = 0; $i < $value['amount']; $i++) {
                array_push($arr, $value['price']);
            }
        }
        foreach ($arr as $value){
            $total += $value;
        }
        return $total;
    }
}
