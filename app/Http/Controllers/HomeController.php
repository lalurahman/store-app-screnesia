<?php

namespace App\Http\Controllers;

use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::with('category')
            ->limit(4)
            // ->orderBy('created_at', 'desc')
            ->latest()
            ->get();
        return view('pages.home', compact('products'));
    }
}
