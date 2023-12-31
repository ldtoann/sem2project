<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorysQuery = Category::query();
        $categorys = $categorysQuery->paginate(config('pagination.admin_page'));
        return view('admin.categories.index', compact('categorys'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $messages = [
            'name.required' => trans('validation.category.required'),
            'name.min' => trans('validation.category.min'),
            'name.desc' => trans('validation.category.desc')
        ];

        $validator = Validator::make($request->all(), [
            'name' => 'required|min:5',
            'desc' => 'required|min:10',
        ], $messages);

        if ($validator->fails()) {
            return redirect()->route('admin.categories.create')
                ->withErrors($validator)
                ->withInput();
        }

        $category = Category::create($request->only([
            'name', 'desc'
        ]));
        if ($images = $request->file('images')) {
            foreach ($images as $image) {
                $category->addMedia($image)->toMediaCollection('images');
            }
        }
        $message = "Success Created";
        if ($category == null) {
            $message = "Create  Failed";
        }
        return redirect()->route('admin.categories.index')->with('message', $message);
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
        $category = Category::findOrFail($id);
        return view('admin.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $category = Category::findOrFail($id);
        $bool = $category->update($request->only([
            'name', 'desc'
        ]));
        if ($images = $request->file('images')) {
            foreach ($images as $image) {
                $category->addMedia($image)->toMediaCollection('images');
            }
        }
        $message =  "Success  Update";
        if (!$bool) {
            $message = "Update Failed";
        }
        return redirect()->route('admin.categories.index')->with('message', $message);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $message =  "Delete Full Failed";
        if (Category::destroy($id)) {
            $message = "Success Delete";
        }
        return redirect()->route('admin.categories.index')->with('message', $message);
    }
}
