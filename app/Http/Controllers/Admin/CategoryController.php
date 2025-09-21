<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('pages.admin.categories.index', compact('categories'));
    }

    public function store(Request $request)
    {
        try {
            // semua request disimpan ke variable data
            $data = $request->all();

            // validasi request
            $request->validate([
                'name' => 'required|string|max:100'
            ]);

            // simpan ke database
            Category::create($data);

            // kembalikan ketika berhasil
            return back()->with('success', 'Kategori berhasil ditambahkan');
        } catch (\Throwable $th) {
            return back()->with('error', $th->getMessage());
        }
    }

    public function edit($id)
    {
        // cari data berdasarkan id
        $category = Category::find($id);
        return view('pages.admin.categories.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        try {
            // semua request disimpan ke variable data
            $data = $request->all();

            // validasi request
            $request->validate([
                'name' => 'required|string|max:100'
            ]);

            // cari data berdasarkan id
            $category = Category::find($id);
            // update data
            $category->update($data);

            // kembalikan ketika berhasil
            return to_route('admin.category.index')->with('success', 'Kategori berhasil diupdate');
        } catch (\Throwable $th) {
            return back()->with('error', $th->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            // cari data berdasarkan id
            $category = Category::find($id);
            // hapus data
            $category->delete();

            // kembalikan ketika berhasil
            return back()->with('success', 'Kategori berhasil dihapus');
        } catch (\Throwable $th) {
            return back()->with('error', $th->getMessage());
        }
    }
}
