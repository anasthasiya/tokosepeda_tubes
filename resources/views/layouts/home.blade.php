<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOKO SEPEDA</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/blog.css') }}">
    <link rel="stylesheet" href="{{ asset('css/produk.css') }}">
</head>
<body>

<header>
    <div class="logo">SEPEDAKU</div>
    <nav>
        <a href="#products">Belanja</a>
        <a href="#blog">Blog</a>
        <a href="#contact">Kontak</a>
        <a href="login">Keluar</a>
    </nav>
</header>

<main>
    @yield('content')
</main>

<footer>
    <section id="contact">
    <h2>Kontak Kami</h2>
    <p><strong>Email:</strong> sepedaku294@gmail.com</p>
    <p><strong>Telepon:</strong><br>0838-9537-5139 (Anas)<br>0893-5748-1243 (Iedha)</p>
    <p><strong>Alamat:</strong> Jl. Ir Soekarno Hatta No.195</p>
    <p><strong>Jam Operasional:</strong> Senin - Sabtu, 08.00 - 17.00</p>
    </section>
</footer>

</body>
</html>