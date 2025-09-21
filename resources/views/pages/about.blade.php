@extends('layouts.public')

@section('title', 'About Us')

@section('content')
    <!-- about section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row align-items-center mb-5">
                <div class="col-md-6 mb-4 mb-md-0">
                    <img
                        src="assets/img/hero.jpg"
                        alt="About Store-App"
                        class="img-fluid rounded shadow"
                    >
                </div>
                <div class="col-md-6">
                    <h1 class="display-5 fw-bold text-danger mb-3">Tentang Store-App</h1>
                    <p class="lead text-secondary">Store-App adalah platform e-commerce modern yang menyediakan berbagai
                        produk fashion, elektronik, dan kebutuhan sehari-hari dengan harga terbaik dan pelayanan terpercaya.
                    </p>
                    <ul class="list-unstyled mt-4">
                        <li class="mb-2"><span class="badge bg-danger me-2">1</span>Produk 100% Original & Bergaransi</li>
                        <li class="mb-2"><span class="badge bg-danger me-2">2</span>Pengiriman Cepat & Aman</li>
                        <li class="mb-2"><span class="badge bg-danger me-2">3</span>Customer Service 24/7</li>
                        <li><span class="badge bg-danger me-2">4</span>Promo Menarik Setiap Hari</li>
                    </ul>
                </div>
            </div>
            <div class="row text-center mb-5">
                <div class="col">
                    <h2 class="fw-bold text-danger mb-4">Kenapa Memilih Kami?</h2>
                </div>
            </div>
            <div class="row text-center g-4 mb-5">
                <div class="col-md-3">
                    <div class="card border-0 shadow h-100">
                        <div class="card-body">
                            <img
                                src="assets/img/sepatu.jpg"
                                alt="Produk Fashion"
                                class="img-fluid rounded mb-3"
                                style="height:100px;object-fit:cover;"
                            >
                            <h5 class="card-title">Fashion Terkini</h5>
                            <p class="card-text">Koleksi fashion terbaru dan terlengkap untuk semua gaya.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card border-0 shadow h-100">
                        <div class="card-body">
                            <img
                                src="assets/img/tas.jpg"
                                alt="Aksesoris"
                                class="img-fluid rounded mb-3"
                                style="height:100px;object-fit:cover;"
                            >
                            <h5 class="card-title">Aksesoris Keren</h5>
                            <p class="card-text">Lengkapi penampilanmu dengan aksesoris pilihan terbaik.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card border-0 shadow h-100">
                        <div class="card-body">
                            <img
                                src="assets/img/ikan.jpg"
                                alt="Produk Unik"
                                class="img-fluid rounded mb-3"
                                style="height:100px;object-fit:cover;"
                            >
                            <h5 class="card-title">Produk Unik</h5>
                            <p class="card-text">Temukan produk unik dan menarik yang tidak ada di tempat lain.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card border-0 shadow h-100">
                        <div class="card-body">
                            <img
                                src="assets/img/baju.jpg"
                                alt="Harga Terbaik"
                                class="img-fluid rounded mb-3"
                                style="height:100px;object-fit:cover;"
                            >
                            <h5 class="card-title">Harga Terbaik</h5>
                            <p class="card-text">Dapatkan harga spesial dan promo menarik setiap hari.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="col">
                    <h2 class="fw-bold text-danger mb-4">Tim Kami</h2>
                </div>
            </div>
            <div class="row justify-content-center g-4">
                <div class="col-md-4">
                    <div class="card border-0 shadow h-100">
                        <div class="card-body">
                            <img
                                src="https://randomuser.me/api/portraits/men/32.jpg"
                                alt="Lalu Abdurrahman"
                                class="img-fluid rounded-circle mb-3"
                                style="width:100px;height:100px;object-fit:cover;"
                            >
                            <h5 class="card-title mb-0">Lalu Abdurrahman</h5>
                            <small class="text-muted">Founder & Developer</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 shadow h-100">
                        <div class="card-body">
                            <img
                                src="https://randomuser.me/api/portraits/women/44.jpg"
                                alt="Sarah"
                                class="img-fluid rounded-circle mb-3"
                                style="width:100px;height:100px;object-fit:cover;"
                            >
                            <h5 class="card-title mb-0">Sarah</h5>
                            <small class="text-muted">Marketing Specialist</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
