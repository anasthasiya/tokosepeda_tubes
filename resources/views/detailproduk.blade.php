@extends('layouts.home')

@section('content')
<<style>
    .product-detail-container {
        padding: 40px 20px;
        display: flex;
        justify-content: center;
    }

    .product-wrapper {
        display: flex;
        flex-direction: column;
        gap: 32px;
        max-width: 1000px;
        width: 100%;
    }

    .product-card-horizontal {
        display: flex;
        flex-direction: column; 
        background-color: #ffffff;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        overflow: hidden;
        align-items: center; 
        text-align: center;  
    }

    .product-image {
        width: 100%;
        max-width: 500px;
    }

    .product-image img {
        width: 100%;
        height: auto;
        object-fit: cover;
        display: block;
        margin: 0 auto;
    }

    .product-info {
        padding: 24px;
        box-sizing: border-box;
        width: 100%;
    }

    .product-title {
        font-size: 24px;
        margin-bottom: 12px;
    }

    .product-price {
        font-size: 20px;
        color: #2c7a7b;
        font-weight: bold;
        margin-bottom: 12px;
    }

    .product-desc {
        font-size: 16px;
        color: #555;
    }

    .order-form-card {
        background-color: #ffffff;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        padding: 24px;
        box-sizing: border-box;
    }

    .order-form-card h3 {
        margin-bottom: 16px;
    }

    .form-group {
        margin-bottom: 16px;
    }

    .form-group label {
        display: block;
        margin-bottom: 6px;
        font-weight: 500;
    }

    .form-group input,
    .form-group select {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 8px;
        box-sizing: border-box;
    }

    .buy-button {
        background-color: #38a169;
        color: #fff;
        padding: 12px 24px;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        font-weight: bold;
        width: 100%;
        transition: background-color 0.3s;
    }

    .buy-button:hover {
        background-color: #2f855a;
    }
    
</style>

<section class="product-detail-container">
    <div class="product-wrapper">
        <div class="product-card-horizontal">
            <div class="product-image">
                <img src="{{ asset($product->image_path) }}" alt="{{ $product->nama }}">
            </div>
            <div class="product-info">
                <h2 class="product-title">{{ $product->nama }}</h2>
                <p class="product-price">Rp {{ number_format($product->harga, 0, ',', '.') }}</p>
                <p class="product-desc">{{ $product->deskripsi }}</p>
            </div>
        </div>
        <div class="order-form-card">
            <h3>Pesan Sekarang</h3>
            <form action="{{ route('product.beli', ['id' => $product->id]) }}" method="POST">
             @csrf
            <input type="hidden" name="product_id" value="{{ $product->id }}">
            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
        <div class="form-group">
            <label for="username">Nama :</label>
            <input type="text" id="username" name="username" value="{{ auth()->user()->username }}" readonly>
        </div>
        <div class="form-group">
            <label for="nomor_telepon">Nomor Telepon :</label>
            <input type="text" id="nomor_telepon" name="nomor_telepon" value="{{ auth()->user()->nomor_telepon }}" readonly>
        </div>
        <div class="form-group">
        <label for="nama">Nama Sepeda :</label>
        <input type="text" id="nama" name="nama" value="{{ $product->nama }}" readonly>
        </div>
        <div class="form-group">
        <label for="harga">Harga :</label>
        <input type="text" id="harga" name="harga" value="{{ $product->harga }}" readonly>
            </div>
        <div class="form-group">
        <label for="alamat">Alamat :</label>
        <input type="text" id="alamat" name="alamat"> 
            </div>
        <div class="form-group">
        <label for="pembayaran">Metode Pembayaran :</label>
        <select name="pembayaran" id="pembayaran" required>
            <option value="transfer">Transfer Bank</option>
            <option value="cod">Cash on Delivery</option>
            </select>
        </div>
            <button type="submit" class="buy-button">Pesan</button>
        </form>
        </div>
    </div>
</section>
@endsection
