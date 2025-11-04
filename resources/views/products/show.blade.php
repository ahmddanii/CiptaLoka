@extends('layouts.app')

@section('content')
<div class="container max-w-3xl mx-auto">
    <img src="{{ asset('images/products/'.$product->foto) }}" class="w-full h-96 object-cover rounded-xl mb-6">
    <h1 class="text-2xl font-bold">{{ $product->nama_produk }}</h1>
    <p class="text-gray-500 mb-4">Rp{{ number_format($product->harga,0,',','.') }}</p>
    <p>{{ $product->deskripsi }}</p>

    <form action="{{ route('cart.store', $product->id) }}" method="POST" class="mt-4">
        @csrf
        <button type="submit" class="bg-green-600 text-white px-6 py-2 rounded-lg">Tambah ke Keranjang</button>
    </form>
</div>
@endsection
