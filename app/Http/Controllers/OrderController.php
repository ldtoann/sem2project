<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        return Order::all();
    }

    public function store(Request $request)
    {
        return Order::create($request->all());
    }

    public function show(string $id)
    {
        return Order::findOrFail($id);
    }

    public function update(Request $request, string $id)
    {
        Order::findOrFail($id)->update($request);
    }

    public function destroy(string $id)
    {
        Order::findOrFail($id)->destroy();
    }
}
