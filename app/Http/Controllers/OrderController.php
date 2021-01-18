<?php

namespace App\Http\Controllers;

use App\Order;
use App\OrderDetails;
use App\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function SendOrder(Request $request)
    {
        $data = $request->session()->get('cart');
        \DB::table('orders')->insert([
            'user_id' => Auth::user()->id,
            'total_amount' => \App\Helper::AddMultiple($data),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // this gets the latest order id // I don't know a better way to do this
        $order_id = json_decode(Order::orderBy('id', 'desc')->where('user_id', Auth::user()->id)->first()->id);

        foreach ($data as $value) {
            \DB::table('order_details')->insert([
                'product_id' => $value['id'],
                'order_id' => $order_id,
                'amount' => $value['amount'],
                'price' => $value['price'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
        unset($order_id);
        session(['cart' => []]);
        return view('home');
    }

    public function GetOrders()
    {
        $orders =  \DB::table('orders')->where('user_id', '=', Auth::user()->id)->get();

        return view('orders', [
            'orders' => $orders
        ]);
    }
}
