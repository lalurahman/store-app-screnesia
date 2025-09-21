<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        $categories = Category::all();
        return view('pages.admin.products.index', compact('products', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            // semua request disimpan ke variable data
            $data = $request->all();

            // validasi request
            $request->validate([
                'name' => 'required|string|max:100',
                'category_id' => 'required|exists:categories,id',
                'price' => 'required|numeric',
                'stock' => 'required|integer',
                'description' => 'nullable|string',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
            ]);

            // cek jika ada file image
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = Str::random(20) . '.' . $image->getClientOriginalExtension();
                $image->storeAs('products', $imageName, 'public');
                $data['image'] = $imageName;
            }

            // buat slug dari name
            $data['slug'] = Str::slug($request->name);

            // simpan ke database
            Product::create($data);

            // kembalikan ketika berhasil
            return back()->with('success', 'Produk berhasil ditambahkan');
        } catch (\Throwable $th) {
            return back()->with('error', $th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::find($id);
        $categories = Category::all();
        return view('pages.admin.products.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            // semua request disimpan ke variable data
            $data = $request->all();

            // validasi request
            $request->validate([
                'name' => 'required|string|max:100',
                'category_id' => 'required|exists:categories,id',
                'price' => 'required|numeric',
                'stock' => 'required|integer',
                'description' => 'nullable|string',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
            ]);

            // cek jika ada file image
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = Str::random(20) . '.' . $image->getClientOriginalExtension();
                $image->storeAs('products', $imageName, 'public');
                $data['image'] = $imageName;
            }

            // buat slug dari name
            $data['slug'] = Str::slug($request->name);

            $product = Product::find($id);
            // simpan ke database
            $product->update($data);

            // kembalikan ketika berhasil
            return to_route('admin.product.index')->with('success', 'Produk berhasil diupdate');
        } catch (\Throwable $th) {
            return back()->with('error', $th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            // cari data berdasarkan id
            $product = Product::find($id);
            // hapus data
            $product->delete();

            // kembalikan ketika berhasil
            return back()->with('success', 'Produk berhasil dihapus');
        } catch (\Throwable $th) {
            return back()->with('error', $th->getMessage());
        }
    }
}
