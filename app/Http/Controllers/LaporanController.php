<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class LaporanController extends Controller {
    public function index(Request $request) {

        // Memanggil fungsi tampilkanLaporan dengan menyertakan argumen
        $orders = Order::all();

        return view('Admin.partials.layouts.laporan', compact('orders'));
    }

    public function tampilkanLaporan(Request $request) {
        $tglAwal = $request->input('tglAwal');
        $tglAkhir = $request->input('tglAkhir');

        if(!$tglAwal || !$tglAkhir) {
            $orders = Order::all();
            return redirect()->route('laporan.index', compact('orders'));
        } else {
            // Jika tanggal disediakan, ambil pesanan berdasarkan rentang tanggal
            $orders = Order::whereBetween('date', [$tglAwal, $tglAkhir])->get();
            return redirect()->route('laporan.index', compact('orders'));
        }

    }


}
