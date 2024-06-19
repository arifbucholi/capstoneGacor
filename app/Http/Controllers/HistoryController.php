<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HistoryController extends Controller
{
    public function index()
    {
        $orders = Order::where('user_id', Auth::id())->with('items.product')->orderBy('created_at', 'desc')->get();

        return view('profile.riwayatpesanan', [
            'title' => 'Riwayat Pesanan Saya',
            'orders' => $orders,
        ]);
    }
}
