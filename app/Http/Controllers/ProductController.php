<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $productList = Product::limit(10)
            ->orderBy('id', 'desc')
            ->get();

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
        // Compatibilidad con ambos formularios:
        // viejo: nombre, descripcion, precio, categoria, imagen
        // nuevo: name, description, price, category_id, image

        $name = $request->input('name', $request->input('nombre'));
        $description = $request->input('description', $request->input('descripcion'));
        $price = $request->input('price', $request->input('precio'));
        $categoryId = $request->input('category_id', $request->input('categoria'));

        $request->merge([
            'name' => $name,
            'description' => $description,
            'price' => $price,
            'category_id' => $categoryId,
        ]);

        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'description' => 'nullable|string',
            'category_id' => 'required|exists:categories,id',
            'image' => 'nullable|image|max:2048',
            'imagen' => 'nullable|image|max:2048',
        ]);

        $imagePath = null;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products', 'public');
        } elseif ($request->hasFile('imagen')) {
            $imagePath = $request->file('imagen')->store('products', 'public');
        }

        $newProduct = new Product();
        $newProduct->name = $request->name;
        $newProduct->description = $request->description;
        $newProduct->price = $request->price;
        $newProduct->category_id = $request->category_id;
        $newProduct->image = $imagePath;
        $newProduct->save();

        return redirect()->route('products.index');
    }

    public function show($producto)
    {
        $product = Product::findOrFail($producto);

        return view('products.show', [
            'product' => $product
        ]);
    }
}