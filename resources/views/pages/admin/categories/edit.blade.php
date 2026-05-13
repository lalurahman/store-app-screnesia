@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <h1>Edit Kategori</h1>
        <form
            action="{{ route('admin.categories.update', $category->id) }}"
            method="POST"
        >
            @csrf
            @method('PUT')
            <div class="form-group ">
                <label for="name">Nama Kategori</label>
                <input
                    type="text"
                    name="name"
                    id="name"
                    class="form-control"
                    value="{{ $category->name }}"
                    required
                >
            </div>
            <button
                type="submit"
                class="btn btn-primary"
            >Simpan</button>
        </form>
    </div>
@endsection
