<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class PelangganController extends Controller
{
    public function index()
    {
        $user = User::all();

        return view('Admin.partials.layouts.pelanggan', compact("user"));
    }
}
