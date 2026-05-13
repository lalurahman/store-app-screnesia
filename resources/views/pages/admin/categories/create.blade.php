@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <h1>Tambah Kategori</h1>
        <form
            action="{{ route('admin.categories.store') }}"
            method="POST"
        >
            @csrf
            <div class="form-group ">
                <label for="name">Nama Kategori</label>
                <input
                    type="text"
                    name="name"
                    id="name"
                    class="form-control"
                    required
                >
            </div>
            <button
                type="submit"
                class="btn btn-primary"
            >Tambah</button>
        </form>
    </div>
@endsection
