@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-flex justify-content-between mb-4 mt-5">
            <h1 class="h3 mb-2 text-gray-800">Data Produk</h1>
            <a
                href="{{ route('admin.product.index') }}"
                class="btn btn-primary"
            >
                Kembali
            </a>
        </div>

        {{-- alert jika berhasil --}}
        @if (session('success'))
            <div
                class="alert alert-success"
                role="alert"
            >
                {{ session('success') }}
            </div>
        @endif

        {{-- alert jika error --}}
        @if (session('error'))
            <div
                class="alert alert-danger"
                role="alert"
            >
                {{ session('error') }}
            </div>
        @endif

        <div class="card">
            <form
                action="{{ route('admin.product.update', $product->id) }}"
                method="post"
                enctype="multipart/form-data"
            >
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="mb-3">
                        <label
                            for="exampleFormControlInput1"
                            class="form-label"
                        >Kategori</label>
                        <select
                            name="category_id"
                            class="form-control"
                        >
                            <option value="">Pilih Kategori</option>
                            @foreach ($categories as $item)
                                <option
                                    value="{{ $item->id }}"
                                    @if ($item->id == $product->category_id) selected @endif
                                >{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nama Produk</label>
                        <input
                            type="text"
                            name="name"
                            class="form-control"
                            placeholder="Nama Produk"
                            value="{{ $product->name }}"
                        >
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Harga</label>
                        <input
                            type="number"
                            name="price"
                            class="form-control"
                            placeholder="Harga Produk"
                            value="{{ $product->price }}"
                        >
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Gambar</label>
                        <input
                            type="file"
                            name="image"
                            class="form-control"
                        >
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Stok</label>
                        <input
                            type="number"
                            name="stock"
                            class="form-control"
                            placeholder="Stok Produk"
                            value="{{ $product->stock }}"
                        >
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Deskripsi</label>
                        <textarea
                            name="description"
                            cols="30"
                            rows="10"
                            placeholder="Deskripsi Produk"
                            class="form-control"
                        >
                            {!! $product->description !!}
                    </textarea>
                    </div>
                </div>
                <div class="card-footer">
                    <button
                        type="submit"
                        class="btn btn-primary"
                    >Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection
