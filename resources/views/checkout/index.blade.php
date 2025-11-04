@extends('layouts.app')

@section('content')
<div class="container max-w-3xl mx-auto">
    <h2 class="text-2xl font-bold mb-4">💳 Checkout</h2>

    <form action="{{ route('order.store') }}" method="POST">
        @csrf
        <label class="block mb-2">Alamat Pengiriman:</label>
        <textarea name="alamat_pengiriman" rows="3" class="border w-full p-2 mb-4" required></textarea>

        <button type="submit" class="bg-green-600 text-white px-6 py-2 rounded-lg">
            Konfirmasi Pesanan
        </button>
    </form>
</div>
@endsection
