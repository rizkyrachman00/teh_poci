<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class PemesananController extends Controller {
    public function index() {
        $orderDetails = Order::all();
        return view('Admin.partials.layouts.pemesanan', compact('orderDetails'));
    }
}
