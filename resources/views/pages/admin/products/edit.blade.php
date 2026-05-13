@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <h1>Edit Produk</h1>
        {{-- alert error --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form
            action="{{ route('admin.products.update', $product->id) }}"
            method="POST"
        >
            @csrf
            @method('PUT')
            <div class="form-group ">
                <label for="name">Nama Produk</label>
                <input
                    type="text"
                    name="name"
                    id="name"
                    class="form-control"
                    value="{{ $product->name }}"
                    required
                >
            </div>
            <div class="form-group ">
                <label for="price">Harga Produk</label>
                <input
                    type="number"
                    name="price"
                    id="price"
                    class="form-control"
                    value="{{ $product->price }}"
                    required
                >
            </div>
            <div class="form-group">
                <label for="category_id">Kategori</label>
                <select
                    name="category_id"
                    id="category_id"
                    class="form-control"
                    required
                >
                    <option value="">Pilih Kategori</option>
                    @foreach ($categories as $category)
                        <option
                            value="{{ $category->id }}"
                            {{ $product->category_id == $category->id ? 'selected' : '' }}
                        >{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group ">
                <label for="description">Deskripsi Produk</label>
                <textarea
                    name="description"
                    id="description"
                    class="form-control"
                    rows="4"
                >{{ $product->description }}</textarea>
            </div>
            <div class="form-group ">
                <label for="stock">Stok Produk</label>
                <input
                    type="number"
                    name="stock"
                    id="stock"
                    class="form-control"
                    value="{{ $product->stock }}"
                    required
                >
            </div>
            <div class="form-group ">
                <label for="image_url">URL Gambar Produk</label>
                <input
                    type="text"
                    name="image_url"
                    id="image_url"
                    class="form-control"
                    value="{{ $product->image_url }}"
                >
            </div>
            <button
                type="submit"
                class="btn btn-primary"
            >Simpan</button>
        </form>
    </div>
@endsection
