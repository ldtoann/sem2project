<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class SearchController extends Controller
{
    public function show(Request $request)
    {
        $key = sprintf('%s%s%s', '%', $request->key, '%');
        $productList = Product::where('name', 'like', $key)->get();
        return view('search', compact('productList'));
    }
}
