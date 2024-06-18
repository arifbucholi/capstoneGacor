<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function cartPage()
    {
        $user = Auth::user();
        $userCart = Cart::with('product')->where('user_id', $user->id)->get();
        // dd($userCart);
        return view('cartPage', compact('userCart'));
    }

    public function addToCart(Request $request)
    {
        // Validasi input dari form
        $validatedData = $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
        ]);

        $user = Auth::user();
        $cartItem = new Cart();
        $cartItem->user_id = $user->id;
        $cartItem->product_id = $validatedData['product_id'];
        $cartItem->quantity = $validatedData['quantity'];
        $cartItem->save();

        return redirect()->route('cartPage')->with('success', 'Product added to cart successfully.');
    }

    public function removeFromCart($id)
    {
        $cartItem = Cart::findOrFail($id);
        $cartItem->delete();

        return redirect()->route('cartPage')->with('success', 'Product removed from cart successfully.');
    }

    public function clearCart()
    {
        $user = Auth::user();
        Cart::where('user_id', $user->id)->delete();

        return redirect()->route('cartPage')->with('success', 'Keranjang belanja berhasil dikosongkan.');
    }
}
