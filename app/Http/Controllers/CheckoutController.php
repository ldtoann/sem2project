<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function checkout(Request $request)
    {
        $user = Auth::user();
        $desc = $request->desc;
        $receiver = $request->receiver;
        $order = Order::create(
            array(
                "name" => $user->name,
                "desc" => $desc,
                "status" => "pending",
                "total" => 0,
                "receiver" => $receiver,
                "user_id" => $user->id
            )
        );


        $cart = request()->session()->get('cart');
        if (!isset($cart)) return redirect()->route('404');

        for ($i = 0; $i < count($cart); $i++) {
            $order_item = $cart[$i];
            OrderItem::create(
                array(
                    "totalprice" => order_item_total($order_item['quantity'], $order_item['price']),
                    "quantity" => $order_item['quantity'],
                    "product_id" => $order_item['productId'],
                    "order_id" => $order->id
                )
            );
        }
        request()->session()->flash('message', 'Checkout was successful!');
        request()->session()->forget('cart');

        return redirect()->route('cart.index');
    }
}
