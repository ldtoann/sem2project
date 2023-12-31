<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $productsQuery = Product::query();
        // $products = $productsQuery->paginate(config('pagination.admin_page'));
        // return view('admin.products.index', compact('products'));
        $products = Product::orderBy('id', 'desc')->paginate(config('pagination.admin_page'));
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categoryList = Category::all();
        return view('admin.products.create', compact('categoryList'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
            'name.required' => trans('validation.category.required'),
            'name.min' => trans('validation.category.min'),
            'name.desc' => trans('validation.category.desc')
        ];

        $validator = Validator::make($request->all(), [
            'name' => 'required|min:1',
            'desc' => 'required|min:1',
            'quantity' => 'required|min:1',
            'price' => 'required|min:1',
        ], $messages);

        if ($validator->fails()) {
            return redirect()->route('admin.products.create')
                ->withErrors($validator)
                ->withInput();
        }

        $product = Product::create($request->only([
            'name', 'desc', 'quantity', 'price', 'category_id'
        ]));

        if ($images = $request->file('images')) {
            foreach ($images as $image) {
                $product->addMedia($image)->toMediaCollection('images');
            }
        }

        $message = "Success Created";
        if ($product == null) {
            $message = "Create  Failed";
        }
        return redirect()->route('admin.products.index')->with('message', $message);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::findOrFail($id);
        return view('admin.products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::findOrFail($id);
        $bool = $product->update($request->only([
            'name', 'desc', 'quantity', 'slug', 'price', 'category_id'
        ]));
        if ($images = $request->file('images')) {
            foreach ($images as $image) {
                $product->addMedia($image)->toMediaCollection('images');
            }
        }

        $message =  "Success  Update";
        if (!$bool) {
            $message = "Update Failed";
        }
        return redirect()->route('admin.products.index')->with('message', $message);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $message =  "Delete Full Failed";
        if (Product::destroy($id)) {
            $message = "Success Delete";
        }
        return redirect()->route('admin.products.index')->with('message', $message);
    }
}
