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
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <h1 class="title">Pesan Baju Hanya Di <span>Teman Masjid</span></h1>
                    <p class="subtitle">Outfit buat sholat jum’at atau hari raya anda membosankan? Tersedia baju koko yang pasti kece badai keluaran dari sikuba sudah hadirrrr!!! Warna elegan dan pasti harganya ramah kantong yaa.</p>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('assets/image/herokiri.png') }}" alt="" width="100%">
                </div>
            </div>
        </div>
    </section>
    {{-- akhir hero --}}

    {{-- produk --}}
    <section id="produk">
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <div class="card text-center align-items-center">
                        <img src="{{ asset('assets/image/baju.png') }}" alt="">
                        <p class="keterangan mt-4">Baju</p>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card text-center align-items-center">
                        <img src="{{ asset('assets/image/celana.png') }}" alt="">
                        <p class="keterangan mt-4">Celana</p>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card text-center align-items-center">
                        <img src="{{ asset('assets/image/bajumuslim.png') }}" alt="">
                        <p class="keterangan mt-4">Baju Muslim</p>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card text-center align-items-center">
                        <img src="{{ asset('assets/image/pakaian.png') }}" alt="">
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
                </div>
            </div>
        </div>
    </section>
    {{-- akhir semua produk --}}


       {{-- semua produk --}}
       <section id="baju">
        <div class="container">
            <div class="cards">
                <p class="title">Pilihan Baju</p>

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
                </div>
            </div>
        </div>
    </section>
    {{-- akhir semua produk --}}


          {{-- semua produk --}}
          <section id="celana">
            <div class="container">
                <div class="cards">
                    <p class="title">Pilihan Celana</p>
    
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
                    </div>
                </div>
            </div>
        </section>
        {{-- akhir semua produk --}}


          {{-- semua produk --}}
          <section id="bajumuslim">
            <div class="container">
                <div class="cards">
                    <p class="title">Pilihan Baju Muslim Terbaik</p>
    
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
                    </div>
                </div>
            </div>
        </section>
        {{-- akhir semua produk --}}


        {{-- faq teman masjid --}}
        <section id="faq">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1 class="title">Faq Teman Masjid</h1>
                        <p class="subtitle">Pertanyaan mengenai Teman Masjid</p>
                    </div>

                    <div class="col-12">
                        <div class="accordion" id="accordionPanelsStayOpenExample">
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                  Kenapa Harus Teman Masjid?
                                </button>
                              </h2>
                              <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                                <div class="accordion-body">
                                  <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                  Kapan Promo produk di Teman Masjid?
                                </button>
                              </h2>
                              <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                                <div class="accordion-body">
                                  <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                  Apa keuntungan ketika order di Teman Masjid?
                                </button>
                              </h2>
                              <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                                <div class="accordion-body">
                                  <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h1 class="mb-4">Teman Majid</h1>
                        <div>
                            <div class="mb-3">
                                <a href="#"><i class="bi bi-whatsapp"></i> Nomor Whatsapp</a>
                            </div>
                            <div class="mb-3">
                                <a href="#"><i class="bi bi-envelope-fill"></i> Alamat Email</a>
                            </div>
                            <div class="mb-3">
                                <a href="#"><i class="bi bi-instagram"></i> Instagram</a>
                            </div>
                            <div class="mb-3">
                                <a href="#"><i class="bi bi-facebook"></i> Facebook</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 align-self-center text-end">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d993.3586782881926!2d119.47853970830957!3d-5.194150863522153!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbee32ee1c0f1b1%3A0x373bd89d5d85ca15!2sStockist%20Eco%20Racing%20GS!5e0!3m2!1sen!2sid!4v1666706106635!5m2!1sen!2sid" width="100%" height="220" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                    <div class="col-12 mt-5">
                        <div class="text-center">
                            <hr>
                            <p>@Teman Masjid 2022 copywrite</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>
