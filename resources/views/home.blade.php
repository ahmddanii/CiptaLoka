@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-2xl font-bold mb-4">🪶 Produk Kerajinan Lokal</h1>
    <div class="grid grid-cols-4 gap-6">
        @foreach ($products as $product)
            <div class="border p-4 rounded-xl shadow">
                <img src="{{ asset('images/products/'.$product->foto) }}" class="w-full h-48 object-cover rounded-lg">
                <h2 class="text-lg font-semibold mt-2">{{ $product->nama_produk }}</h2>
                <p class="text-gray-500">Rp{{ number_format($product->harga,0,',','.') }}</p>
                <a href="{{ route('products.show', $product->id) }}" class="bg-blue-600 text-white px-4 py-2 mt-3 inline-block rounded-lg">Detail</a>
            </div>
        @endforeach
    </div>
</div>
@endsection
