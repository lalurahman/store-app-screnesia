@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-flex justify-content-between mb-4 mt-5">
            <h1 class="h3 mb-2 text-gray-800">Data Kategori</h1>
            <a
                href="{{ route('admin.category.index') }}"
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
                action="{{ route('admin.category.update', $category->id) }}"
                method="post"
            >
                @csrf
                <div class="card-body">
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
                            value="{{ $category->name }}"
                        >
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
