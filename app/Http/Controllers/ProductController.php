<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productPage()
    {
        $products = Product::all();
        return view('productPage', compact('products'));
    }

    public function detailProdukPage($id)
    {
        $product = Product::findOrFail($id);
        return view('detailProdukPage', compact('product'));
    }
}
