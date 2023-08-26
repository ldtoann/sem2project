<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    public function index(Request $request)
    {
        $cart = $request->session()->get('cart');
        if ($cart == null) $cart = array();

        return view('cart', compact('cart'));
    }

    public function store(Request $request)
    {
        $productId = $request->productId;
        $product = Product::findOrFail($productId);
        $quantity = $request->quantity;

        $cart = $request->session()->get('cart', []);

        // Kiểm tra xem sản phẩm đã có trong giỏ hàng hay chưa
        $productExists = false;
        foreach ($cart as $key => $item) {
            if ($item['productId'] == $productId && $item['size'] == $request->size) {
                $cart[$key]['quantity'] += $quantity;
                $productExists = true;
                break;
            }
        }
        $productMedia = $product->getMedia('images');
        $thumbnail = $productMedia->last();

        if (!$productExists) {
            $order = [
                'productId' => $product->id,
                'name' => $product->name,
                'quantity' => $quantity,
                'price' => $product->price,
                'size' => $request->size,
                'thumbnail' => $thumbnail ? $thumbnail->getUrl() : '',
            ];
            $cart[] = $order;
        }

        $request->session()->put('cart', $cart);

        return redirect()->route('cart.index');
    }

    public function update(Request $request, string $id)
    {
        $cart = $request->session()->get('cart'); //(cart mot mang chua id, name, quantity)
        for ($i = 0; $i < count($cart); $i++) {
            if ($cart[$i]['productId'] == $id) {
                $cart[$i]['quantity'] = $request->quantity;
            }
        }

        $request->session()->put('cart', $cart);

        return redirect()->route('cart.index');
    }

    public function destroy(Request $request, string $id)
    {
        $cart = $request->session()->get('cart');
        for ($i = 0; $i < count($cart); $i++) {
            array_splice($cart, $i, 1);
        }

        $request->session()->put('cart', $cart);
        return redirect()->route('cart.index');
    }
}
