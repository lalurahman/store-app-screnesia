<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->get();
        $data = $products->map(function ($product) {
            return [
                'id' => $product->id,
                'name' => $product->name,
                'price' => $product->price,
                'category' => $product->category?->name,
                'image' => env('APP_URL') . Storage::url($product->image),
            ];
        });
        return response()->json($data);
    }

    public function show($id)
    {
        $product = Product::with('category')->findOrFail($id);
        $data = [
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'category' => $product->category?->name,
            'image' => env('APP_URL') . Storage::url($product->image),
        ];
        return response()->json($data);
    }
}
