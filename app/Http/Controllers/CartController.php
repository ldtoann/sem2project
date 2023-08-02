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

    // public function store(Request $request)
    // {
    //     // $productId = $request->productId;
    //     // $quantity = $request->quantity;
    //     $product = Product::findOrFail($request->productId);

    //     $order = array(
    //         'productId' => $product->id,
    //         'name' => $product->name,
    //         'quantity' => $request->quantity,
    //         'price' => $product->price
    //     );

    //     $request->session()->push('cart', $order);

    //     return redirect()->route('cart.index');
    // }



    // public function store(Request $request)
    // {
    //     $productId = $request->productId;
    //     $quantity = $request->quantity;
    //     $cart = $request->session()->get('cart');

    //     $updated = false;

    //     for ($i = 0; $i < count($cart); $i++) {
    //         if ($cart[$i]['productId'] == $productId) {
    //             // Nếu sản phẩm đã tồn tại trong giỏ hàng,
    //             // cộng thêm số lượng mới vào số lượng hiện tại.
    //             $cart[$i]['quantity'] += $quantity;
    //             $updated = true;
    //             break; // Thoát khỏi vòng lặp sau khi đã cập nhật số lượng.
    //         }
    //     }

    //     // Nếu sản phẩm không tồn tại trong giỏ hàng, thêm sản phẩm mới vào giỏ hàng.
    //     if (!$updated) {
    //         $product = Product::findOrFail($productId);

    //         $order = [
    //             'productId' => $product->id,
    //             'name' => $product->name,
    //             'quantity' => $quantity,
    //             'price' => $product->price
    //         ];

    //         $cart[] = $order;
    //     }

    //     $request->session()->put('cart', $cart);

    //     return redirect()->route('cart.index');
    // }
    public function store(Request $request)
    {
        $productId = $request->productId;
        $product = Product::findOrFail($productId);
        $quantity = $request->quantity;

        $cart = $request->session()->get('cart', []);

        // Kiểm tra xem sản phẩm đã có trong giỏ hàng hay chưa
        $productExists = false;
        foreach ($cart as $key => $item) {
            if ($item['productId'] == $productId) {
                $cart[$key]['quantity'] += $quantity;
                $productExists = true;
                break;
            }
        }

        // Nếu sản phẩm chưa tồn tại trong giỏ hàng, thêm mới vào giỏ
        if (!$productExists) {
            $order = [
                'productId' => $product->id,
                'name' => $product->name,
                'quantity' => $quantity,
                'price' => $product->price
            ];
            $cart[] = $order;
        }

        $request->session()->put('cart', $cart);

        return redirect()->route('cart.index');
    }

    // public function update(Request $request, string $id)
    // {
    //     $cart = $request->session()->get('cart');
    //     $updated = false;

    //     for ($i = 0; $i < count($cart); $i++) {
    //         if ($cart[$i]['productId'] == $id) {
    //             $cart[$i]['quantity'] += $request->quantity;
    //             $updated = true;
    //             break;
    //         }
    //     }
    //     if (!$updated) {
    //         $cart[] = [
    //             'productId' => $id,
    //             'quantity' => $request->quantity,
    //         ];
    //     }

    //     $request->session()->put('cart', $cart);

    //     return redirect()->route('cart.index');
    // }
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


    /**
     * Remove the specified resource from storage.
     */
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
