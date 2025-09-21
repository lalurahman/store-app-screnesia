@extends('layouts.admin')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-flex justify-content-between mb-4 mt-5">
            <h1 class="h3 mb-2 text-gray-800">Data Produk</h1>
            <button
                type="button"
                class="btn btn-primary"
                data-bs-toggle="modal"
                data-bs-target="#exampleModal"
            >
                Tambah Produk
            </button>
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

        <!-- Data Product -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Product</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table
                        class="table table-bordered"
                        id="dataTable"
                        width="100%"
                        cellspacing="0"
                    >
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Kategori</th>
                                <th>Harga</th>
                                <th>Stok</th>
                                <th>Gambar</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($products as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->category->name }}</td>
                                    <td>{{ $item->price }}</td>
                                    <td>{{ $item->stock }}</td>
                                    <td>
                                        <img
                                            src="{{ asset('storage/products/' . $item->image) }}"
                                            alt="{{ $item->name }}"
                                            width="100"
                                        >
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <a
                                                href="{{ route('admin.product.edit', $item->id) }}"
                                                class="btn btn-success me-2"
                                            >edit</a>
                                            <form
                                                action="{{ route('admin.product.destroy', $item->id) }}"
                                                method="post"
                                            >
                                                @csrf
                                                @method('DELETE')
                                                <button
                                                    type="submit"
                                                    class="btn btn-danger"
                                                >hapus</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td
                                        colspan="7"
                                        class="text-center"
                                    >
                                        Data Kosong
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div
        class="modal fade"
        id="exampleModal"
        tabindex="-1"
        aria-labelledby="exampleModalLabel"
        aria-hidden="true"
    >
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1
                        class="modal-title fs-5"
                        id="exampleModalLabel"
                    >Tambah Produk</h1>
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                    ></button>
                </div>
                <form
                    action="{{ route('admin.product.store') }}"
                    method="post"
                    enctype="multipart/form-data"
                >
                    @csrf
                    <div class="modal-body">
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
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
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
                            >
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Harga</label>
                            <input
                                type="number"
                                name="price"
                                class="form-control"
                                placeholder="Harga Produk"
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
                            ></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button
                            type="button"
                            class="btn btn-secondary"
                            data-bs-dismiss="modal"
                        >Close</button>
                        <button
                            type="submit"
                            class="btn btn-primary"
                        >Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
