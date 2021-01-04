<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getUser(Request $request)
    {
        $user = $request->input('name');
        dd($user);
    }
}
