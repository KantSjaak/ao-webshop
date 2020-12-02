<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show()
    {
        $products = \DB::table('products')->get();

        return view('product', [
            'products' => $products
        ]);
    }
    //filterCategory
    public function showProducts($category) {
        $products = \DB::table('products')->where('category_id', '=', $category)->get();

        return view('product', [
            'products' => $products
        ]);
    }
}
