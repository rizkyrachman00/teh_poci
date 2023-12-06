<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User;
use App\Models\manajemenProduct;


class DashboardController extends Controller
{
    public function index()
    {
        $totalRevenue = Order::sum('total_ammount');
        $orders = Order::all();
        $orderCount = Order::count();
        $userCount = User::count();
        $productCount = manajemenProduct::count();


        return view('Admin.partials.layouts.main', compact("orders", "orderCount", "totalRevenue", "userCount", "productCount"));
    }
}
