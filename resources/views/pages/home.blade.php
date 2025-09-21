@extends('layouts.public')

@section('title', 'Home - Store-App')

@section('content')
    <!-- hero section -->
    <section
        class="text-center text-white d-flex align-items-center justify-content-center"
        style="background: url('{{ asset('assets/img/hero.jpg') }}') center/cover no-repeat; height: 600px;"
    >
        <div>
            <h1 class="fw-bold">Discover Your Style</h1>
            <a
                href="#"
                class="btn btn-danger mt-3"
            >Shop Now</a>
        </div>
    </section>

    <!-- product section -->
    <section class="py-5">
        <div class="container text-center">
            <h1 class="fw-bold text-danger">Our Best Sellers</h1>
            <div class="row mt-4 justify-content-center">
                @forelse ($products as $item)
                    <div class="col-6 col-md-3 mt-5">
                        <div class="card h-100 border-0 shadow-sm">
                            <img
                                src="{{ asset('storage/products/' . $item->image) }}"
                                alt="gambar produk"
                                class="card-img-top w-100"
                                style="width: 100%; height: 200px; object-fit: cover;"
                            >
                            <div class="card-body">
                                <h5 class="card-title mb-1">{{ $item->name }}</h5>
                                <p class="text-muted mb-1">{{ $item->category->name }}</p>
                                <p class="fw-bold text-success">Rp. {{ number_format($item->price) }}</p>
                                <a
                                    href="https://api.whatsapp.com/send?phone=085256999428&text=Saya%20tertarik%20dengan%20produk%20{{ $item->name }}"
                                    class="btn btn-outline-danger"
                                    target="_blank"
                                >Buy Now</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <p class="text-muted">No products available.</p>
                @endforelse

            </div>
        </div>
    </section>
@endsection
