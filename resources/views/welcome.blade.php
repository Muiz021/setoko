<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('assets/image/logosetoko.png') }}">
    <title>Teman Masjid | Fashion</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
    {{-- navbar --}}
    <nav class="navbar navbar-expand-lg fixed-top py-3">
        <div class="container">
            <a class="navbar-brand text-light fw-bold" href="#"><i class="bi bi-gem"></i> Teman Masjid</a>
            <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Baju</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Celana</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Baju Muslim</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pakaian Lengkap</a>
                    </li>
                </ul>
                <div>
                    <button class="btn btn-light">
                        <a href="https://api.whatsapp.com/send?phone=6282236831592&text=Hallo Rizki,Apakan anda bisa membantu saya?"
                            target="_blank" class="home_social-icons">
                            <i class="bi bi-cart-plus-fill"></i> Pesan
                        </a>
                    </button>
                </div>
            </div>

        </div>
    </nav>
    {{-- akhir navbar --}}


    {{-- hero --}}
    <section id="hero">
        <img src="{{ asset('assets/image/hero.png') }}" alt="" width="100%">
    </section>
    {{-- akhir hero --}}

    {{-- produk --}}
    <section id="produk">
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <div class="card text-center align-items-center">
                        <img src="{{ asset('assets/image/baju.png') }}" alt="" width="100%">
                        <p class="keterangan mt-4">Baju</p>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card text-center align-items-center">
                        <img src="{{ asset('assets/image/celana.png') }}" alt="" width="100%">
                        <p class="keterangan mt-4">Celana</p>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card text-center align-items-center">
                        <img src="{{ asset('assets/image/bajumuslim.png') }}" alt="" width="100%">
                        <p class="keterangan mt-4">Baju Muslim</p>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card text-center align-items-center">
                        <img src="{{ asset('assets/image/pakaian.png') }}" alt="" width="100%">
                        <p class="keterangan mt-4">Pakaian</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- akhir produk --}}

    {{-- semua produk --}}
    <section id="semua">
        <div class="container">
            <div class="cards">
                <p class="title">Semua Produk</p>

                <div class="row">
                    <div class="col-3 mb-4">
                        <div class="card">
                            <img src="{{ asset('assets/image/produk1.png') }}" alt="">
                            <div class="px-2">
                                <p class="nama_produk mt-1">Karem kurta kaos</p>
                                <p class="harga fw-bold m-0">Rp.160.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 mb-4">
                        <div class="card">
                            <img src="{{ asset('assets/image/produk1.png') }}" alt="">
                            <div class="px-2">
                                <p class="nama_produk mt-1">Karem kurta kaos</p>
                                <p class="harga fw-bold m-0">Rp.160.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 mb-4">
                        <div class="card">
                            <img src="{{ asset('assets/image/produk1.png') }}" alt="">
                            <div class="px-2">
                                <p class="nama_produk mt-1">Karem kurta kaos</p>
                                <p class="harga fw-bold m-0">Rp.160.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 mb-4">
                        <div class="card">
                            <img src="{{ asset('assets/image/produk1.png') }}" alt="">
                            <div class="px-2">
                                <p class="nama_produk mt-1">Karem kurta kaos</p>
                                <p class="harga fw-bold m-0">Rp.160.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 mb-4">
                        <div class="card">
                            <img src="{{ asset('assets/image/produk1.png') }}" alt="">
                            <div class="px-2">
                                <p class="nama_produk mt-1">Karem kurta kaos</p>
                                <p class="harga fw-bold m-0">Rp.160.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 mb-4">
                        <div class="card">
                            <img src="{{ asset('assets/image/produk1.png') }}" alt="">
                            <div class="px-2">
                                <p class="nama_produk mt-1">Karem kurta kaos</p>
                                <p class="harga fw-bold m-0">Rp.160.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 mb-4">
                        <div class="card">
                            <img src="{{ asset('assets/image/produk1.png') }}" alt="">
                            <div class="px-2">
                                <p class="nama_produk mt-1">Karem kurta kaos</p>
                                <p class="harga fw-bold m-0">Rp.160.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 mb-4">
                        <div class="card">
                            <img src="{{ asset('assets/image/produk1.png') }}" alt="">
                            <div class="px-2">
                                <p class="nama_produk mt-1">Karem kurta kaos</p>
                                <p class="harga fw-bold m-0">Rp.160.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 mb-4">
                        <div class="card">
                            <img src="{{ asset('assets/image/produk1.png') }}" alt="">
                            <div class="px-2">
                                <p class="nama_produk mt-1">Karem kurta kaos</p>
                                <p class="harga fw-bold m-0">Rp.160.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 mb-4">
                        <div class="card">
                            <img src="{{ asset('assets/image/produk1.png') }}" alt="">
                            <div class="px-2">
                                <p class="nama_produk mt-1">Karem kurta kaos</p>
                                <p class="harga fw-bold m-0">Rp.160.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 mb-4">
                        <div class="card">
                            <img src="{{ asset('assets/image/produk1.png') }}" alt="">
                            <div class="px-2">
                                <p class="nama_produk mt-1">Karem kurta kaos</p>
                                <p class="harga fw-bold m-0">Rp.160.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 mb-4">
                        <div class="card">
                            <img src="{{ asset('assets/image/produk1.png') }}" alt="">
                            <div class="px-2">
                                <p class="nama_produk mt-1">Karem kurta kaos</p>
                                <p class="harga fw-bold m-0">Rp.160.000</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- akhir semua produk --}}


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>
