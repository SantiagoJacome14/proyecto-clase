@extends('layouts.app')

@section('title', $product->name)

@section('content')
<div class="mx-auto max-w-6xl px-4 py-10">

    <a href="{{ route('products.index') }}"
       class="text-sm text-white/60 hover:text-white">
        ← Volver al catálogo
    </a>

    @if(session('success'))
        <div class="mt-4 rounded-xl bg-green-600/20 border border-green-500/30 px-4 py-3 text-green-300">
            {{ session('success') }}
        </div>
    @endif

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mt-6">

        <div class="rounded-2xl border border-white/10 bg-black/30 p-6">
            <div class="aspect-[4/3]">
                @if (!empty($product->image))
                    <img src="{{ asset('storage/' . $product->image) }}"
                         alt="{{ $product->name }}"
                         class="h-full w-full object-contain"
                         onerror="this.onerror=null;this.src='{{ asset('img/zapatos/nike.jpg') }}';">
                @else
                    <img src="{{ asset('img/zapatos/nike.jpg') }}"
                         alt="Producto por defecto"
                         class="h-full w-full object-contain">
                @endif
            </div>
        </div>

        <div class="rounded-2xl border border-white/10 bg-white/5 p-6">

            <div class="flex justify-between">
                <span class="text-xs px-3 py-1 border border-white/10 rounded-full bg-black/20 text-white/70">
                    Disponible
                </span>

                <span class="text-xs text-white/50">
                    Producto
                </span>
            </div>

            <h1 class="text-3xl font-semibold mt-4">
                {{ $product->name }}
            </h1>

            <p class="text-white/60 mt-3">
                {{ $product->description }}
            </p>

            <p class="text-2xl font-semibold mt-5">
                $ {{ number_format($product->price, 0, ',', '.') }}
            </p>

            <div class="mt-6 flex gap-3 flex-wrap">
                <a target="_blank"
                   href="https://wa.me/573183221806?text={{ urlencode('Hola quiero cotizar ' . $product->name) }}"
                   class="bg-[#25D366] text-black rounded-full px-6 py-3 text-sm font-semibold">
                    Cotizar por WhatsApp
                </a>

                <form action="{{ route('cart.add', $product->id) }}" method="POST">
                    @csrf
                    <button type="submit"
                            class="border border-white/15 bg-white/5 rounded-full px-6 py-3 text-sm">
                        Agregar al carrito
                    </button>
                </form>

                <a href="{{ route('products.index') }}"
                   class="border border-white/15 bg-white/5 rounded-full px-6 py-3 text-sm">
                    Volver
                </a>
            </div>

        </div>

    </div>

</div>
@endsection