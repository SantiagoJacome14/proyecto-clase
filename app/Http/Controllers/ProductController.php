<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function index()
    {
        $productList = Product::limit(10)
            ->orderBy('id','desc')
            ->get();

        // Envía los productos a la vista
        return view('products.index', [
            'misProductos' => $productList
        ]);
    }

   public function create()
{
    $categoryList = Category::all();

    return view('products.create', [
        'categoryList' => $categoryList
    ]);
}

    public function store(Request $request)
    {
        $newProduct = new Product();

        $newProduct->name = $request->name;
        $newProduct->description = $request->description;
        $newProduct->price = $request->price;
        $newProduct->category_id = $request->category_id;

        $newProduct->save();

        return redirect()->route('product.index');
    }

   public function show($producto)
{
    $product = Product::findOrFail($producto);

    return view('products.show', [
        'product' => $product
    ]);
}
}