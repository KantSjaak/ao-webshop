<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\Types\Array_;

class CartController extends Controller
{
    public function show(Request $request)
    {
        $value = $request->session()->get('cart');

        return view('cart', [
            'data' => $value
        ]);
    }

    public function getAll(Request $request)
    {
        $data = $request->session()->all();

        return view('test', [
            'data' => $data
        ]);
    }

    public function save($id, Request $request)
    {
        $item = \DB::table('products')->where('id', '=', $id)->get();
        $data = $request->session()->get('cart');
        if ($data === null) {
            session(['cart' => array(array("id" => $item[0]->id, "amount" => 1, "name" => $item[0]->name, "price" => $item[0]->price))]);
            return redirect()->action([CartController::class, 'show']);
        } elseif ($data !== null) {
            $cycle = 0;
            foreach ($data as $value) {
                if ($value['id'] === intval($id)) {
                    $value['amount'] += 1;
                    $data[$cycle] = $value;
                    session(['cart' => $data]);
                    return redirect()->action([CartController::class, 'show']);
                }
                $cycle++;
            }
            array_push($data, array("id" => $item[0]->id, "amount" => 1, "name" => $item[0]->name, "price" => $item[0]->price));
            session(['cart' => $data]);
        }
        return redirect()->action([CartController::class, 'show']);
    }

    public function push($pp, $id, Request $request)
    {
        $cycle = 0;
        $data = $request->session()->get('cart');
        foreach ($data as $value) {
            if ($value['id'] === intval($id)) {
                if ($pp) {
                    $value['amount'] += 1;
                } else {
                    if ($value['amount'] > 1) {
                        $value['amount'] -= 1;
                    } else {
                        unset($data[$cycle]);
                        $data = array_values($data);
                        session(['cart' => $data]);
                        break;
                    }
                }
            }
            $data[$cycle] = $value;
            $cycle++;
        }
        session(['cart' => $data]);
        return redirect()->action([CartController::class, 'show']);
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