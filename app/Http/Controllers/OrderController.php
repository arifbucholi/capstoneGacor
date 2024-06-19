<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function checkoutPage()
    {
        $user = Auth::user();
        $userCart = $user->cart; // Mengambil keranjang belanja pengguna

        // Menghitung subtotal
        $subtotal = $userCart->sum(function ($item) {
            return $item->product->price * $item->quantity;
        });

        // Misalnya, biaya pengiriman dan diskon diset statis sebagai contoh
        $shippingCost = 15000;
        $discount = 0;

        // Menghitung total pembayaran setelah biaya pengiriman dan diskon
        $totalPayment = $subtotal + $shippingCost - $discount;

        return view('checkoutPage', [
            'title' => 'Pembayaran',
            'userCart' => $userCart,
            'subtotal' => $subtotal,
            'shippingCost' => $shippingCost,
            'discount' => $discount,
            'totalPayment' => $totalPayment
        ]);
    }

    public function placeOrder(Request $request)
    {
        // Validasi input dari form checkout
        $validatedData = $request->validate([
            'phone_number' => 'required',
            'province' => 'required',
            'city' => 'required',
            'district' => 'required',
            'postal_code' => 'required',
            'full_address' => 'required',
            'payment_method' => 'required',
        ]);

        $user = Auth::user();
        $userCart = $user->cart;
        if ($userCart->isEmpty()) {
            return redirect()->back()->with('error', 'Your cart is empty. Add products before placing an order.');
        }
        $totalPrice = $userCart->sum(function ($item) {
            return $item->product->price * $item->quantity;
        });

        // Menyimpan order ke database
        $order = new Order();
        $order->user_id = $user->id;
        $order->phone_number = $validatedData['phone_number'];
        $order->province = $validatedData['province'];
        $order->city = $validatedData['city'];
        $order->district = $validatedData['district'];
        $order->postal_code = $validatedData['postal_code'];
        $order->full_address = $validatedData['full_address'];
        $order->payment_method = $validatedData['payment_method'];
        $order->total_price = $totalPrice;
        $order->status = 'menunggu pembayaran';
        // dd($order);
        $order->save();

        // Menghapus semua item dalam keranjang belanja pengguna setelah berhasil checkout
        Cart::where('user_id', $user->id)->delete();

        // Redirect ke halaman konfirmasi order dengan pesan sukses
        return redirect()->route('pembayaran')->with('success', 'Order placed successfully. Please complete your payment.');
    }

    public function removeFromCart($id)
    {
        // Menghapus item tertentu dari keranjang belanja
        $cartItem = Cart::findOrFail($id);

        // Memastikan hanya pengguna yang memiliki item ini yang dapat menghapusnya
        if ($cartItem->user_id !== Auth::id()) {
            abort(403, 'Unauthorized');
        }

        $cartItem->delete();

        // Redirect ke halaman keranjang belanja dengan pesan sukses
        return redirect()->route('cartPage')->with('success', 'Product removed from cart successfully.');
    }
}
