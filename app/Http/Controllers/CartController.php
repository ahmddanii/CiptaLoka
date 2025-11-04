<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $carts = Cart::with('product')->where('user_id', Auth::id())->get();
        $total = $carts->sum(fn($c) => $c->product->harga * $c->qty);
        return view('cart.index', compact('carts', 'total'));
    }

    public function store(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        Cart::updateOrCreate(
            ['user_id' => Auth::id(), 'product_id' => $product->id],
            ['qty' => \DB::raw('qty + 1')]
        );

        return redirect()->back()->with('success', 'Produk ditambahkan ke keranjang!');
    }

    public function destroy($id)
    {
        Cart::where('id', $id)->where('user_id', Auth::id())->delete();
        return redirect()->back()->with('success', 'Item dihapus dari keranjang.');
    }
}
