<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show(string $id)
    {
        $category = Category::findOrFail($id);
        return view('category', compact('category'));
        // $categoryLists = Category::all();
        // return view('category', compact('category', 'categoryLists'));
    }

    public function update(Request $request, string $id)
    {
        Category::findOrFail($id)->update($request);
    }

    public function destroy(string $id)
    {
        Category::findOrFail($id)->destroy();
    }
}
