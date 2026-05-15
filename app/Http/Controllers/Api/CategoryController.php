<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = \App\Models\Category::all();
        return response()->json($categories);
    }
}
