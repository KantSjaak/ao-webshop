<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show()
    {
        //$categories = \app\Category::all()->first();

        $categories = \DB::table('categories')->get();

        return view('category', [
                'categories' => $categories
        ]);
    }
}
