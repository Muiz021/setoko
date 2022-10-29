@extends('layout.mainLayout')

@section('title', 'Fashion')

@section('content')

    {{-- hero --}}
    <section id="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <h1 class="title">Pesan Baju Hanya Di <span>Teman Masjid</span></h1>
                    <p class="subtitle">Outfit buat sholat jum’at atau hari raya anda membosankan? Tersedia baju koko yang
                        pasti kece badai keluaran dari sikuba sudah hadirrrr!!! Warna elegan dan pasti harganya ramah
                        kantong yaa.</p>
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
                    <a class="nav-link" href="#baju">
                        <div class="card text-center align-items-center">
                            <img src="{{ asset('assets/image/baju.png') }}" alt="">
                            <p class="keterangan mt-4">Baju</p>
                        </div>
                    </a>
                </div>
                <div class="col-3">
                    <a  class="nav-link" href="#celana">
                        <div class="card text-center align-items-center">
                            <img src="{{ asset('assets/image/celana.png') }}" alt="">
                            <p class="keterangan mt-4">Celana</p>
                        </div>
                    </a>
                </div>
                <div class="col-3">
                    <a class="nav-link" href="#bajumuslim">
                        <div class="card text-center align-items-center">
                            <img src="{{ asset('assets/image/bajumuslim.png') }}" alt="">
                            <p class="keterangan mt-4">Baju Muslim</p>
                        </div>
                    </a>
                </div>
                <div class="col-3">
                    <a class="nav-link" href="#semua">
                        <div class="card text-center align-items-center">
                            <img src="{{ asset('assets/image/pakaian.png') }}" alt="">
                            <p class="keterangan mt-4">Pakaian</p>
                        </div>
                    </a>
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
                    @foreach ($baju4 as $item)
                    <div class="col-3 mb-4">
                        <div class="card">
                            <img src="{{ $item->file != null ? '/storage/file/' . $item->file : '/img/not_found.jpg' }}"
                                height="350px" alt="">
                            <div class="px-2">
                                <p class="nama_produk mt-1">{{ $item->nama }}</p>
                                <p class="harga fw-bold m-0">Rp.{{ $item->harga }}</p>
                            </div>
                            <div>
                                <a class="btn btn-light"
                                    href="https://api.whatsapp.com/send?phone=6281343671284&text=Saya ingin membeli baju {{ $item->nama }} harga {{$item->harga}}"
                                    target="_blank" class="home_social-icons">
                                    <i class="bi bi-cart-plus-fill"></i> Pesan
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
                @foreach ($celana4 as $item)
                <div class="col-3 mb-4">
                    <div class="card">
                        <img src="{{ $item->file != null ? '/storage/file/' . $item->file : '/img/not_found.jpg' }}"
                            height="350px" alt="">
                        <div class="px-2">
                            <p class="nama_produk mt-1">{{ $item->nama }}</p>
                            <p class="harga fw-bold m-0">Rp.{{ $item->harga }}</p>
                        </div>
                        <div>
                   `         <a class="btn btn-light"
                                href="https://api.whatsapp.com/send?phone=6281343671284&text=Saya ingin membeli baju {{ $item->nama }} harga {{$item->harga}}"
                                target="_blank" class="home_social-icons">
                                <i class="bi bi-cart-plus-fill"></i> Pesan
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
            @foreach ($bajuMuslim4 as $item)
            <div class="col-3 mb-4">
                <div class="card">
                    <img src="{{ $item->file != null ? '/storage/file/' . $item->file : '/img/not_found.jpg' }}"
                        height="350px" alt="">
                    <div class="px-2">
                        <p class="nama_produk mt-1">{{ $item->nama }}</p>
                        <p class="harga fw-bold m-0">Rp.{{ $item->harga }}</p>
                    </div>
                    <div>
                        <a class="btn btn-light"
                            href="https://api.whatsapp.com/send?phone=6281343671284&text=Saya ingin membeli baju {{ $item->nama }} harga {{$item->harga}}"
                            target="_blank" class="home_social-icons">
                            <i class="bi bi-cart-plus-fill"></i> Pesan
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
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
                    @foreach ($baju as $item)
                        <div class="col-3 mb-4">
                            <div class="card">
                                <img src="{{ $item->file != null ? '/storage/file/' . $item->file : '/img/not_found.jpg' }}"
                                    height="350px" alt="">
                                <div class="px-2">
                                    <p class="nama_produk mt-1">{{ $item->nama }}</p>
                                    <p class="harga fw-bold m-0">Rp.{{ $item->harga }}</p>
                                </div>
                                <div>
                                    <a class="btn btn-light"
                                        href="https://api.whatsapp.com/send?phone=6281343671284&text=Saya ingin membeli baju {{ $item->nama }} harga {{$item->harga}}"
                                        target="_blank" class="home_social-icons">
                                        <i class="bi bi-cart-plus-fill"></i> Pesan
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
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
                    @foreach ($celana as $item)
                        <div class="col-3 mb-4">
                            <div class="card">
                                <img src="{{ $item->file != null ? '/storage/file/' . $item->file : '/img/not_found.jpg' }}"
                                    height="350px" alt="">
                                <div class="px-2">
                                    <p class="nama_produk mt-1">{{ $item->nama }}</p>
                                    <p class="harga fw-bold m-0">Rp.{{ $item->harga }}</p>
                                </div>
                                <div>
                                    <a class="btn btn-light"
                                        href="https://api.whatsapp.com/send?phone=6281343671284&text= Saya ingin membeli baju {{ $item->nama }} harga {{$item->harga}}"
                                        target="_blank" class="home_social-icons">
                                        <i class="bi bi-cart-plus-fill"></i> Pesan
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
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
                    @foreach ($bajuMuslim as $item)
                        <div class="col-3 mb-4">
                            <div class="card">
                                <img src="{{ $item->file != null ? '/storage/file/' . $item->file : '/img/not_found.jpg' }}"
                                    height="350px" alt="">
                                <div class="px-2">
                                    <p class="nama_produk mt-1">{{ $item->nama }}</p>
                                    <p class="harga fw-bold m-0">Rp.{{ $item->harga }}</p>
                                </div>
                                <div>
                                    <a class="btn btn-light"
                                        href="https://api.whatsapp.com/send?phone=6281343671284&text=Saya ingin membeli baju {{ $item->nama }} harga {{$item->harga}}"
                                        target="_blank" class="home_social-icons">
                                        <i class="bi bi-cart-plus-fill"></i> Pesan
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    {{-- akhir semua produk --}}

@endsection
