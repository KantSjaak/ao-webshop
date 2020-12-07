<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function showProducts($category)
    {
        $products = \DB::table('products')->where('category_id', '=', $category)->get();

        return view('products', [
            'products' => $products
        ]);
    }
}
