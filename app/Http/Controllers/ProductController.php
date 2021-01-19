<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showProduct($id)
    {
        $products = \DB::table('products')->where('id', '=', $id)->get();

        return view('product', [
            'products' => $products
        ]);
    }

    public function showProductsByCategory($category)
    {
        $products = \DB::table('products')->where('category_id', '=', $category)->get();

        return view('products', [
            'products' => $products
        ]);
    }
}
