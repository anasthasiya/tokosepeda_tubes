@extends('layouts.home')

@section('content')
<section class="product-detail-container">
    <div class="product-detail-card">
        <div class="product-image">
            <img src="{{ asset($product->image_path) }}" alt="{{ $product->nama }}">
        </div>
        <div class="product-info">
            <h2 class="product-title">{{ $product->nama }}</h2>
            <p class="product-price">Rp {{ number_format($product->harga, 0, ',', '.') }}</p>
            <p class="product-desc">{{ $product->deskripsi }}</p>

            <form action="{{ url('product/' . $product->id . '/beli') }}" method="POST" class="buy-form">
                @csrf
                <button type="submit" class="buy-button">Beli Sekarang</button>
            </form>
        </div>
    </div>
</section>
@endsection
