<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $category_list = Category::all();
        $productsQuery = Product::query(); // Tạo một query builder cho sản phẩm

        $category_id = 0;
        $price_range = '0:99000000';
        $sort = 'asc';
        $selected_category = null;

        if (isset($request->category_id)) {
            $category_id = $request->category_id;
            $sort = $request->sort;

            $price_range = $request->price_range;
            $splits = explode(':', $price_range);
            $min_price = $splits[0];
            $max_price = $splits[1];

            if ($category_id != 0) {
                $selected_category = Category::find($category_id);
                $productsQuery->where("category_id", $category_id);
            }

            $productsQuery->whereBetween('price', [$min_price, $max_price])
                ->orderBy('price', $sort);
        }

        $products = $productsQuery->paginate(config('pagination.per_page'));

        return view("products", compact('products', 'category_list', 'selected_category', 'category_id', 'price_range', 'sort'));
    }

    public function store(Request $request)
    {
        return Product::create($request->all());
    }

    public function show(string $slug)
    {
        $splits = explode('-', $slug);
        $id = array_pop($splits);

        $product = Product::findOrFail($id);
        $category = Category::findOrFail($product->category_id);
        return view('product', compact('product', 'category'));
    }
}
