<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;


class AllcategoryController extends Controller
{
    public function allProducts()
    {
        $products = Product::all();

        return view('allproductcategory', compact('products'));
    }
}
