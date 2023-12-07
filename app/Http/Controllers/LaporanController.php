<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use PDF;

class LaporanController extends Controller {
    public function index(Request $request) {

        // Memanggil fungsi tampilkanLaporan dengan menyertakan argumen
        $orders = Order::all();
        $orderSumAmmount = Order::sum('total_ammount');
        return view('Admin.partials.layouts.laporan', compact('orders', 'orderSumAmmount'));
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

    public function cetakPDF(Request $request) {
        // Dapatkan data pesanan sesuai kebutuhan Anda
        // $tglAwal = $request->input('tglAwal');
        // $tglAkhir = $request->input('tglAkhir');

        // if(!$tglAwal || !$tglAkhir) {
        //     $orders = Order::all();
        // } else {
        //     $orders = Order::whereBetween('date', [$tglAwal, $tglAkhir])->get();
        // }

        $orders = Order::all();
        $orderSumAmmount = Order::sum('total_ammount');

        // Cetak PDF
        $pdf = PDF::loadView('Admin.partials.layouts.laporan-pdf', ['orders' => $orders, 'orderSumAmmount' => $orderSumAmmount])->setOptions(['defaultFont' => 'sans-serif']);

        // Tampilkan atau unduh PDF
        return $pdf->download('laporan.pdf');
    }
}
