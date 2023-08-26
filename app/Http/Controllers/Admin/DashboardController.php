<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class DashboardController extends Controller
{
    public function index()
    {
        // Kiểm tra vai trò của người dùng để đảm bảo họ có quyền truy cập vào trang dashboard
        if (auth()->user()->role !== 'admin') {
            abort(403, 'Bạn không có quyền truy cập vào trang này.');
            return view('home.index');
        }

        // Xử lý các tác vụ liên quan đến trang dashboard và trả về view dashboard.blade.php
        return view('admin.dashboard');
    }
}
