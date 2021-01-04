<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class Provider extends Controller
{
    public function show(Request $request, $id)
    {
        $value = $request->session()->get('key', 'default');
    }

    public function setCookie(Request $request)
    {
        $minutes = 1;
        $response = new Response('Hello World');
        $response->withCookie(cookie('name', 'Sjaak', $minutes));
        return $response;
    }

    public function getCookie(Request $request)
    {
        $value = $request->cookie('name');
        echo $value;
    }
}
