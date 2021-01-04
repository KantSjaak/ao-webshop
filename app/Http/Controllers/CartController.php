<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\Types\Array_;

class CartController extends Controller
{
    public function getAll(Request $request)
    {
        $data = $request->session()->all();

        return view('cart', [
            'data' => $data
        ]);
    }

    public function save(Request $request)
    {
        session(['key' => 'value']);

        return redirect()->action([CartController::class, 'getAll']);
    }

    public function saveArray(Request $request)
    {
        //The push method may be used to push a new value onto a session value that is an array. For example, if the user.teams key contains an array of team names, you may push a new value onto the array like so:
        $request->session()->push('user.teams', 'developers');
    }

    public function doesExist(Request $request)
    {
        if ($request->session()->has('key')) {
            echo "<h2>Exists</h2>";
        } else {
            echo "<h2>Doesn't exist</h2>";
        }
    }

    public function delete(Request $request)
    {
        // Forget a single key...
        $request->session()->forget('key');

        // Forget multiple keys...
        $request->session()->forget(['key1', 'key2']);
    }

    public function SessionClear(Request $request)
    {
        //removes all data from the session
        $request->session()->flush();
    }
}
