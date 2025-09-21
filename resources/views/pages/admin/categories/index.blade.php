@extends('layouts.admin')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-flex justify-content-between mb-4 mt-5">
            <h1 class="h3 mb-2 text-gray-800">Data Kategori</h1>
            <button
                type="button"
                class="btn btn-primary"
                data-bs-toggle="modal"
                data-bs-target="#exampleModal"
            >
                Tambah Kategori
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

        <!-- Data Kategori -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Kategori</h6>
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
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($categories as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td class="d-flex">
                                        <a
                                            href="{{ route('admin.category.edit', $item->id) }}"
                                            class="btn btn-success me-2"
                                        >edit</a>

                                        <form
                                            action="{{ route('admin.category.destroy', $item->id) }}"
                                            method="post"
                                        >
                                            @csrf
                                            <button
                                                type="submit"
                                                class="btn btn-danger"
                                            >hapus</button>
                                        </form>

                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td
                                        colspan="3"
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
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1
                        class="modal-title fs-5"
                        id="exampleModalLabel"
                    >Tambah Kategori</h1>
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                    ></button>
                </div>
                <form
                    action="{{ route('admin.category.store') }}"
                    method="post"
                >
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label
                                for="exampleFormControlInput1"
                                class="form-label"
                            >Nama Kategori</label>
                            <input
                                type="text"
                                name="name"
                                class="form-control"
                                id="exampleFormControlInput1"
                                placeholder="Nama Kategori"
                            >
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
