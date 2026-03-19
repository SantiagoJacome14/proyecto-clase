<?php

namespace App\Http\Controllers;

use App\Models\Product;

class AdminController extends Controller
{
    public function index()
    {
        $totalProductos = Product::count();
        $ultimosProductos = Product::latest()->take(5)->get();

        return view('admin.index', compact('totalProductos', 'ultimosProductos'));
    }
}