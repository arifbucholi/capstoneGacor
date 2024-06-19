<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HistoryController extends Controller
{
    public function index()
    {
        $orders = Order::where('user_id', Auth::id())->with('items.product')->get();

        return view('profile.riwayatpesanan', [
            'title' => 'Riwayat Pesanan Saya',
            'orders' => $orders,
        ]);
    }
}
