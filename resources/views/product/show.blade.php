@extends('layouts.app')

@section('title', 'Detalle del Producto')

@section('content')
@php
    $productos = [
        'nike' => [
            'name' => 'Nike Air Force',
            'price' => '$350.000',
            'rating' => '4.8',
            'badge' => 'Top venta',
            'image' => asset('img/zapatos/nike.jpg'),
            'desc' => 'Clásico urbano, cómodo y combinable. Ideal para outfits diarios.',
        ],
        'adidas' => [
            'name' => 'Adidas Ultraboost',
            'price' => '$520.000',
            'rating' => '4.7',
            'badge' => 'Comodidad',
            'image' => asset('img/zapatos/adidas.jpg'),
            'desc' => 'Running & lifestyle con gran amortiguación para largas jornadas.',
        ],
        'off-white' => [
            'name' => 'Off-White Low',
            'price' => '$690.000',
            'rating' => '4.9',
            'badge' => 'Premium',
            'image' => asset('img/zapatos/off-white.jpg'),
            'desc' => 'Estilo moderno con materiales top y un look premium.',
        ],
    ];

    $key = $producto ?? request()->route('producto');
    $item = $productos[$key] ?? null;
@endphp

@if(!$item)
    <div class="rounded-2xl border border-white/10 bg-white/5 p-6">
        <h1 class="text-xl font-semibold">Producto no encontrado</h1>
        <p class="mt-2 text-white/60">Vuelve al catálogo para elegir un modelo válido.</p>
        <a href="{{ url('/product') }}" class="mt-5 inline-flex rounded-full bg-white text-neutral-950 px-5 py-2.5 text-sm font-semibold">Volver</a>
    </div>
@else
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <div class="rounded-2xl border border-white/10 bg-black/30 p-6">
            <div class="aspect-[4/3]">
                <img src="{{ $item['image'] }}" alt="{{ $item['name'] }}" class="h-full w-full object-contain">
            </div>
        </div>

        <div class="rounded-2xl border border-white/10 bg-white/5 p-6 shadow-[0_20px_60px_rgba(0,0,0,0.35)]">
            <div class="flex items-center justify-between">
                <span class="text-xs px-3 py-1 rounded-full border border-white/10 bg-black/20 text-white/70">{{ $item['badge'] }}</span>
                <span class="text-xs text-white/50">⭐ {{ $item['rating'] }}</span>
            </div>

            <h1 class="mt-4 text-2xl font-semibold tracking-tight">{{ $item['name'] }}</h1>
            <p class="mt-2 text-white/60">{{ $item['desc'] }}</p>

            <div class="mt-5 flex items-center justify-between">
                <p class="text-xl font-semibold">{{ $item['price'] }}</p>
                <span class="text-xs text-white/45">Precio referencial</span>
            </div>

            <div class="mt-6 flex flex-col sm:flex-row gap-3">
                <a target="_blank"
                   href="https://wa.me/573183221806?text={{ urlencode('Hola, quiero cotizar el ' . $item['name'] . '. ¿Qué tallas tienes y precio final?') }}"
                   class="inline-flex items-center justify-center rounded-full bg-[#25D366] px-6 py-3 text-sm font-semibold text-black hover:scale-[1.01] transition">
                    Cotizar por WhatsApp
                </a>
                <a href="{{ url('/product') }}"
                   class="inline-flex items-center justify-center rounded-full border border-white/15 bg-white/5 px-6 py-3 text-sm text-white/90 hover:bg-white/10 transition">
                    Volver al catálogo
                </a>
            </div>
        </div>
    </div>
@endif
@endsection
