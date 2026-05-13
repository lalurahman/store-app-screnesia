@extends('layouts.admin')

@section('title', 'Kategori Produk')

@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-0 text-gray-800">Kategori Produk</h1>
        {{-- alert success --}}
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        {{-- alert error --}}
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <div class="card">
            <div class="card-header d-flex justify-content-end">
                <a
                    href="{{ route('admin.categories.create') }}"
                    class="btn btn-primary"
                >Tambah Kategori</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Kategori</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>
                                        <a
                                            href="{{ route('admin.categories.edit', $item->id) }}"
                                            class="btn btn-sm btn-primary"
                                        >Edit</a>
                                        <form
                                            action="{{ route('admin.categories.destroy', $item->id) }}"
                                            method="POST"
                                            style="display: inline-block;"
                                        >
                                            @csrf
                                            @method('DELETE')
                                            <button
                                                type="submit"
                                                class="btn btn-sm btn-danger"
                                                onclick="return confirm('Apakah Anda yakin ingin menghapus kategori ini?')"
                                            >Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
