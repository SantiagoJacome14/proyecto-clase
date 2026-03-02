<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    private function products(): array
    {
        return [
            [
                'slug' => 'nike',
                'name' => 'Nike Air Force',
                'price' => 350000,
                'rating' => 4.8,
                'badge' => 'Top venta',
                'image' => 'img/zapatos/nike.jpg',
                'desc' => 'Clásico urbano, cómodo y combinable. Ideal para outfits diarios.',
            ],
            [
                'slug' => 'adidas',
                'name' => 'Adidas Ultraboost',
                'price' => 520000,
                'rating' => 4.7,
                'badge' => 'Comodidad',
                'image' => 'img/zapatos/adidas.jpg',
                'desc' => 'Running & lifestyle con gran amortiguación para largas jornadas.',
            ],
            [
                'slug' => 'off-white',
                'name' => 'Off-White Low',
                'price' => 690000,
                'rating' => 4.9,
                'badge' => 'Premium',
                'image' => 'img/zapatos/off-white.jpg',
                'desc' => 'Estilo moderno con materiales top y un look premium.',
            ],
        ];
    }

    public function index(Request $request)
    {
        $q = trim((string) $request->query('q', ''));

        $products = collect($this->products())
            ->when($q !== '', function ($col) use ($q) {
                $qLower = mb_strtolower($q);
                return $col->filter(fn ($p) =>
                    str_contains(mb_strtolower($p['name']), $qLower) ||
                    str_contains(mb_strtolower($p['desc']), $qLower) ||
                    str_contains(mb_strtolower($p['badge']), $qLower)
                );
            })
            ->values()
            ->all();

        return view('products.index', compact('products', 'q'));
    }

    public function create()
    {
        //a conectar con la base de datos para guardar el producto
        return view('products.create');
    }

    public function show(string $slug)
    {
        $product = collect($this->products())->firstWhere('slug', $slug);

        if (! $product) {
            abort(404);
        }

        return view('products.show', compact('product'));
    }
}