@extends('layouts.home')

@section('content')
<section class="hero-slider">
    <input type="radio" name="slider" id="slide1" checked>
    <input type="radio" name="slider" id="slide2" >
    <input type="radio" name="slider" id="slide3" >
    
    <div class="hero-slider-wrapper">
        <div class="hero-slide">
            <img src="{{ asset('images/sepeda1.jpg') }}">
            <div class="hero-text">
                <h1>SEPEDA POLYGON</h1>
                <p>HARGA PROMO: <strong>$1321.90</strong></p>
                <a href="#products" style="display: inline-block; padding: 10px 20px; background-color: orange; color: white; text-decoration: none; border-radius: 5px;">
        Belanja Sekarang
        </a>
            </div>
        </div>
        <div class="hero-slide">
            <img src="{{ asset('images/sepeda2.jpg') }}">
            <div class="hero-text">
                <h1>GIANT BICYCLES</h1>
                <p>Now: <strong>$1200.50</strong></p>
                <button>Belanja Sekarang</button>
            </div>
        </div>
        <div class="hero-slide">
            <img src="{{ asset('images/sepeda3.jpg') }}">
            <div class="hero-text">
                <h1>GIANT BICYCLES</h1>
                <p>Now: <strong>$1250.00</strong></p>
                <button>Belanja Sekarang</button>
            </div>
        </div>
    </div>

    <label for="slide1" class="nav-button prev">&#10094;</label>
    <label for="slide2" class="nav-button next">&#10095;</label>
    <label for="slide3" class="nav-button next">&#10095;</label>
</section>

<section id="products" class="products">
    @foreach($products as $product)
    <div class="product">
        <img src="{{ asset($product->image_path) }}" alt="{{ $product->nama }}">
        <h3>{{ $product->nama }}</h3>
        <p>{{ $product->deskripsi }}</p>
        <div class="price">Rp {{ number_format($product->harga, 0, ',', '.') }}</div>
        <a href="{{ route('detailproduk', $product->slug) }}"><button>Detail</button></a>
    </div>
    @endforeach
</section>

<section class="blog" id="blog">
    <h2>Blog</h2>
    <div class="blog-container">
        <div class="blog-post">
            <img src="{{ asset('images/bersepeda.jpg') }}" alt="Tips Bersepeda">
            <div>
                <h3>5 Tips Bersepeda Aman di Kota</h3>
                <p>Pelajari cara menjaga keselamatan saat bersepeda di jalanan kota yang padat.</p>
                <a href="https://kumparan.com/seputar-hobi/cara-mengendarai-sepeda-yang-aman-di-jalan-raya-20uJVKk4hAo">Baca Selengkapnya</a>
            </div>
        </div>
        <div class="blog-post">
            <img src="{{ asset('images/merawat.jpg') }}" alt="Perawatan Sepeda">
            <div>
                <h3>Merawat Sepeda Agar Awet</h3>
                <p>Tips dan trik sederhana untuk menjaga sepeda tetap dalam kondisi prima.</p>
                <a href="https://blog.rodalink.com/id/cara-merawat-sepeda/">Baca Selengkapnya</a>
            </div>
        </div>
        <div class="blog-post">
            <img src="{{ asset('images/jelajah.jpg') }}" alt="Jelajah Alam">
            <div>
                <h3>Jelajah Alam dengan MTB</h3>
                <p>Pengalaman menjelajahi jalur pegunungan dengan sepeda MTB favorit.</p>
                <a href="https://www.rodalink.com/id/jelajahi-alam-dengan-sepeda-gunung-yang-cocok-untukmu">Baca Selengkapnya</a>
            </div>
        </div>
    </div>
    <div class="blog-container" style="margin-top: 3rem;">
        <div class="blog-post">
            <img src="{{ asset('images/bersepeda.jpg') }}" alt="Tips Bersepeda">
            <div>
                <h3>5 Tips Bersepeda Aman di Kota</h3>
                <p>Pelajari cara menjaga keselamatan saat bersepeda di jalanan kota yang padat.</p>
                <a href="#">Baca Selengkapnya</a>
            </div>
        </div>
        <div class="blog-post">
            <img src="{{ asset('images/merawat.jpg') }}" alt="Perawatan Sepeda">
            <div>
                <h3>Merawat Sepeda Agar Awet</h3>
                <p>Tips dan trik sederhana untuk menjaga sepeda tetap dalam kondisi prima.</p>
                <a href="#">Baca Selengkapnya</a>
            </div>
        </div>
    </div>
</section>
@endsection