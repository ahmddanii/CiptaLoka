@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="text-2xl font-bold mb-4">📊 Dashboard Penjual</h2>

    <p>Halo, {{ auth()->user()->name }}!</p>
    <p>Kamu memiliki <strong>{{ $productCount }}</strong> produk terdaftar.</p>
</div>
@endsection
