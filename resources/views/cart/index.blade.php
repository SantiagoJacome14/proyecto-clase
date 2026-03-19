@extends('layouts.app')

@section('title', 'Carrito de compras')

@section('content')
<div class="mx-auto max-w-6xl px-4 py-10">

    <div class="flex items-center justify-between mb-6">
        <div>
            <p class="text-xs tracking-[0.25em] uppercase text-white/60">Carrito</p>
            <h1 class="mt-2 text-2xl md:text-3xl font-semibold tracking-tight">Carrito de compras</h1>
        </div>

        <a href="{{ route('products.index') }}"
           class="rounded-full border border-white/15 bg-white/5 px-5 py-2 text-sm hover:bg-white/10 transition">
            Seguir comprando
        </a>
    </div>

    @if(session('success'))
        <div class="mb-6 rounded-xl bg-green-600/20 border border-green-500/30 px-4 py-3 text-green-300">
            {{ session('success') }}
        </div>
    @endif

    @if(count($cart) > 0)
        <div class="space-y-4">
            @foreach($cart as $item)
                <div class="rounded-2xl border border-white/10 bg-white/5 p-4 flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                    <div class="flex items-center gap-4">
                        <div class="w-24 h-24 rounded-xl bg-black/20 p-2 overflow-hidden">
                            @if (!empty($item['image']))
                                <img src="{{ asset('storage/' . $item['image']) }}"
                                     alt="{{ $item['name'] }}"
                                     class="w-full h-full object-contain"
                                     onerror="this.onerror=null;this.src='{{ asset('img/zapatos/nike.jpg') }}';">
                            @else
                                <img src="{{ asset('img/zapatos/nike.jpg') }}"
                                     alt="Producto por defecto"
                                     class="w-full h-full object-contain">
                            @endif
                        </div>

                        <div>
                            <h2 class="text-lg font-semibold">{{ $item['name'] }}</h2>
                            <p class="text-white/60">Cantidad: {{ $item['quantity'] }}</p>
                            <p class="text-white/80 font-medium">
                                ${{ number_format($item['price'], 0, ',', '.') }} c/u
                            </p>
                        </div>
                    </div>

                    <div class="flex items-center gap-4">
                        <p class="text-lg font-semibold">
                            ${{ number_format($item['price'] * $item['quantity'], 0, ',', '.') }}
                        </p>

                        <form action="{{ route('cart.remove', $item['id']) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                    class="rounded-full bg-red-600 px-4 py-2 text-sm font-semibold text-white hover:bg-red-700 transition">
                                Quitar
                            </button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="mt-8 rounded-2xl border border-white/10 bg-white/5 p-6">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                <h3 class="text-2xl font-semibold">
                    Total: ${{ number_format($total, 0, ',', '.') }}
                </h3>

                <div class="flex gap-3">
                    <form action="{{ route('cart.clear') }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                                class="rounded-full border border-white/15 bg-white/5 px-5 py-3 text-sm hover:bg-white/10 transition">
                            Vaciar carrito
                        </button>
                    </form>

                    <a target="_blank"
                       href="https://wa.me/573183221806?text={{ urlencode('Hola, quiero finalizar mi compra. Total aproximado: $' . number_format($total, 0, ',', '.')) }}"
                       class="rounded-full bg-[#25D366] px-6 py-3 text-sm font-semibold text-black hover:scale-[1.01] transition">
                        Finalizar por WhatsApp
                    </a>
                </div>
            </div>
        </div>
    @else
        <div class="rounded-2xl border border-white/10 bg-white/5 p-10 text-center">
            <h2 class="text-2xl font-semibold">Tu carrito está vacío</h2>
            <p class="mt-3 text-white/60">Aún no has agregado productos.</p>

            <a href="{{ route('products.index') }}"
               class="mt-6 inline-flex rounded-full bg-white text-black px-6 py-3 text-sm font-semibold hover:scale-[1.01] transition">
                Ir al catálogo
            </a>
        </div>
    @endif

</div>
@endsection