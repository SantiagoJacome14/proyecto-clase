@extends('layouts.app')

@section('title', 'Zapatos | Catálogo')

@section('content')
<div class="flex flex-col gap-6">

    <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-4">
        <div>
            <p class="text-xs tracking-[0.25em] uppercase text-white/60">Catálogo</p>
            <h1 class="mt-2 text-2xl md:text-3xl font-semibold tracking-tight">Zapatos</h1>
            <p class="mt-2 text-white/60">Modelos seleccionados con estética premium.</p>
        </div>

        <div class="flex gap-3">
            <a href="{{ route('products.create') }}"
               class="inline-flex items-center justify-center rounded-full border border-white/15 bg-white/5 px-5 py-2.5 text-sm text-white/90 hover:bg-white/10 transition">
                Agregar / Comprar
            </a>

            <a href="https://wa.me/573183221806?text={{ urlencode('Hola, quiero cotizar unos zapatos. ¿Me compartes disponibilidad y precios?') }}"
               target="_blank"
               class="inline-flex items-center justify-center rounded-full bg-[#25D366] px-5 py-2.5 text-sm font-semibold text-black hover:scale-[1.01] transition">
                WhatsApp
            </a>
        </div>
    </div>

    @if(session('success'))
        <div class="rounded-xl bg-green-600/20 border border-green-500/30 px-4 py-3 text-green-300">
            {{ session('success') }}
        </div>
    @endif

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">

        @foreach ($misProductos as $product)
            <div class="rounded-2xl overflow-hidden border border-white/10 bg-white/5 hover:bg-white/7 transition shadow-[0_16px_50px_rgba(0,0,0,0.35)]">

                <div class="aspect-[4/3] bg-black/30 p-4">
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

                <div class="p-5">
                    <div class="flex items-center justify-between">
                        <span class="text-xs px-3 py-1 rounded-full border border-white/10 bg-black/20 text-white/70">
                            Disponible
                        </span>
                        <span class="text-xs text-white/50">
                            ID {{ $product->id }}
                        </span>
                    </div>

                    <h3 class="mt-3 text-lg font-semibold">
                        {{ $product->name }}
                    </h3>

                    <p class="mt-1 text-sm text-white/60">
                        {{ $product->description }}
                    </p>

                    <div class="mt-4 flex items-center justify-between">
                        <span class="text-base font-semibold">
                            ${{ number_format($product->price, 0, ',', '.') }}
                        </span>

                        <div class="flex gap-2">
                            <a href="{{ route('products.show', $product->id) }}"
                               class="rounded-full border border-white/15 bg-white/5 px-4 py-2 text-sm hover:bg-white/10 transition">
                                Ver
                            </a>

                            <form action="{{ route('cart.add', $product->id) }}" method="POST">
                                @csrf
                                <button type="submit"
                                        class="rounded-full bg-white text-neutral-950 px-4 py-2 text-sm font-semibold hover:scale-[1.01] transition">
                                    Agregar
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        @endforeach

    </div>
</div>
@endsection