@extends('layouts.public')

@section('content')
    <!-- hero section -->
    <section
        class="text-center text-white d-flex align-items-center justify-content-center"
        style="background: url('image/hero.jpg') center/cover no-repeat; height: 80vh;"
    >
        <div>
            <h1 class="fw-bold">Discover Your Style</h1>
            <a
                href="#"
                class="btn btn-danger btn-lg mt-2"
            >Shop Now</a>
        </div>
    </section>
    <!-- end hero section -->

    <!-- section products -->
    <section class="py-5">
        <div class="container text-center">
            <h2 class="fw-bold text-danger">Our Best Sellers</h2>
            <div class="row mt-4 justify-content-center">
                @forelse ($products as $item)
                    <div class="col-md-3">
                        <div
                            class="card"
                            style="width: 18rem;"
                        >
                            <img
                                src="{{ Storage::url('products/' . $item->image) }}"
                                class="card-img-top"
                                alt="{{ $item->name }}"
                                style="height: 200px; object-fit: cover;"
                            >
                            <div class="card-body">
                                <h5 class="card-title">{{ $item->name }}</h5>
                                <p class="text-muted mb-1">{{ $item->category->name }}</p>
                                <p class="fw-bold text-success">Rp {{ number_format($item->price, 0, ',', '.') }}</p>
                                <a
                                    href="https://api.whatsapp.com/send?phone=085256999428&text=Hello%20Store-App%2C%20I%20am%20interested%20in%20buying%20{{ urlencode($item->name) }}"
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
    <!-- end section products -->
@endsection
