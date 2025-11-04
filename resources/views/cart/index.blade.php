@extends('layouts.app')

@section('content')
<div class="container max-w-4xl mx-auto">
    <h2 class="text-2xl font-bold mb-4">🛒 Keranjang Belanja</h2>

    @foreach ($carts as $cart)
        <div class="flex justify-between border-b py-2">
            <span>{{ $cart->product->nama_produk }} (x{{ $cart->qty }})</span>
            <span>Rp{{ number_format($cart->product->harga * $cart->qty, 0, ',', '.') }}</span>
        </div>
    @endforeach

    <div class="text-right font-bold mt-4">
        Total: Rp{{ number_format($total, 0, ',', '.') }}
    </div>

    <a href="{{ route('checkout') }}" class="bg-blue-600 text-white px-6 py-2 rounded-lg mt-4 inline-block">
        Lanjut ke Pembayaran
    </a>
</div>
@endsection
