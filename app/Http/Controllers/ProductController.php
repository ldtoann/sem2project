<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return Product::all();
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
        return view('product', compact('product'));
    }
}
