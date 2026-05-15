<?php

namespace App\Http\Controllers;

use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::latest()->take(5)->get();
        return view('pages.public.home', compact('products'));
    }
}
