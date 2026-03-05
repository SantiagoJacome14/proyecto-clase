<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        // Trae 10 productos de la base de datos
        $productList = Product::latest()->limit(10)->get();

        // Envía los productos a la vista
        return view('products.index', [
            'misProductos' => $productList
        ]);
    }

    public function create()
    {
        return view('products.create');
    }

   public function show($producto)
{
    $product = Product::findOrFail($producto);

    return view('products.show', [
        'product' => $product
    ]);
}
}