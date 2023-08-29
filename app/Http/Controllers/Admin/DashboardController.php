<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;
use App\Models\Category;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        if (auth()->user()->role !== 'admin') {
            abort(403, 'Bạn không có quyền truy cập vào trang này.');
            return view('home.index');
        }

        // $userrole = User::selectRaw('role, COUNT(*) as count')->grouBy('role')->plunk('count', 'role');
        // $datauser = [];
        // $labeluser = ['admin', 'user'];

        $userrole = DB::table('users')
            ->selectRaw('role, COUNT(*) as count')
            ->groupBy('role')
            ->pluck('count', 'role');
        $labeluser = $userrole->keys();
        $datauser = $userrole->values();

        $categories = Product::selectRaw('category_id, COUNT(*) as count')
            ->groupBy('category_id')
            ->pluck('count', 'category_id');

        $labels = [];
        $data = [];
        $data2 = [];

        foreach ($categories as $categoryId => $count) {
            $category = Category::find($categoryId); // Lấy thông tin danh mục từ bảng categories
            if ($category) {
                $labels[] = $category->name; // Sử dụng tên danh mục làm label
                $data2[] = 1;
                $data[] = $count;
            }
        }
        $orderList = Order::all();

        return view('admin.dashboard', compact('data', 'labels', 'data2', 'labeluser', 'datauser', 'orderList'));
    }
}
