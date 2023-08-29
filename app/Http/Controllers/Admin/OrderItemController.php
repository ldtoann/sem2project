<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OrderItem;

class OrderItemController extends Controller
{
    public function index()
    {
        $OrderItemsQuery = OrderItem::query();
        $orderitems = $OrderItemsQuery->paginate(config('pagination.admin_page'));
        return view('admin.orderitems.index', compact('orderitems'));
    }
    public function edit(string $id)
    {
        $orderitem = OrderItem::findOrFail($id);
        return view('admin.orderitems.edit', compact('orderitem'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $orderitem = OrderItem::findOrFail($id);
        $bool = $orderitem->update($request->only([
            'quantity', 'product_id', 'order_id'
        ]));

        $message =  "Success  Update";
        if (!$bool) {
            $message = "Update Failed";
        }
        return redirect()->route('admin.orderitems.index')->with('message', $message);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $message =  "Delete Full Failed";
        if (OrderItem::destroy($id)) {
            $message = "Success Delete";
        }
        return redirect()->route('admin.orderitems.index')->with('message', $message);
    }
}
