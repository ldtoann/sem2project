<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    public function index(Request $request)
    {
        $orderList = $request->session()->get('cart');
        return view('cart', compact('orderList'));
    }

    public function store(Request $request)
    {
        $productId = $request->productId;
        $quantity = $request->quantity;
        $product = Product::findOrFail($productId);

        $order = array(
            'productId' => $productId,
            'name' => $product->name,
            'quantity' => $quantity,
            'price' => $product->price
        );

        $request->session()->push('cart', $order);

        return redirect()->route('cart.index');
    }
    public function update(Request $request, string $id)
    {
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {
        $cart = $request->session()->get('cart');
        for ($i = 0; $i < count($cart); $i++) {
            $order = $cart[$i];
            if ($order['productId'] == $id) {
                array_splice($cart, $i, 1);
            }
        }
        $request->session()->put('cart', $cart);

        return redirect()->route('cart.index');
    }
}
