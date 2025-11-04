<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function checkout()
    {
        $carts = Cart::with('product')->where('user_id', Auth::id())->get();
        $total = $carts->sum(fn($c) => $c->product->harga * $c->qty);
        return view('checkout.index', compact('carts', 'total'));
    }

    public function store(Request $request)
    {
        DB::beginTransaction();

        try {
            $carts = Cart::where('user_id', Auth::id())->get();
            $total = $carts->sum(fn($c) => $c->product->harga * $c->qty);

            $order = Order::create([
                'user_id' => Auth::id(),
                'total_harga' => $total,
                'status' => 'paid',
                'metode_pembayaran' => 'COD',
                'alamat_pengiriman' => $request->alamat_pengiriman,
            ]);

            foreach ($carts as $cart) {
                $order->items()->create([
                    'product_id' => $cart->product_id,
                    'qty' => $cart->qty,
                    'harga_satuan' => $cart->product->harga,
                    'subtotal' => $cart->product->harga * $cart->qty,
                ]);
            }

            Cart::where('user_id', Auth::id())->delete();

            DB::commit();
            return redirect('/')->with('success', 'Pesanan berhasil dibuat!');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with('error', 'Gagal membuat pesanan: ' . $e->getMessage());
        }
    }
}
