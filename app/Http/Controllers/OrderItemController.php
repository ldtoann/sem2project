<?php

namespace App\Http\Controllers;

use App\Models\OrderItem;
use Illuminate\Http\Request;

class OrderItemController extends Controller
{
    public function index()
    {
        return OrderItem::all();
    }

    public function store(Request $request)
    {
        return OrderItem::create($request->all());
    }

    public function show(string $id)
    {
        return OrderItem::findOrFail($id);
    }

    public function update(Request $request, string $id)
    {
        OrderItem::findOrFail($id)->update($request);
    }

    public function destroy(string $id)
    {
        OrderItem::findOrFail($id)->destroy();
    }
}
