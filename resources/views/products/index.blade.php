@extends('layouts.app')

@section('title', 'Catálogo | Majestic Shoes')

@section('content')
<div class="mx-auto max-w-7xl px-4 sm:px-6 py-10">
    <div class="flex flex-col gap-8">

        {{-- Header --}}
        <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-4">
            <div>
                <p class="text-xs tracking-[0.25em] uppercase text-white/60">Catálogo premium</p>
                <h1 class="mt-2 text-3xl md:text-4xl font-semibold tracking-tight">Zapatos</h1>
                <p class="mt-2 text-white/60">Modelos seleccionados con estética premium y compra rápida por WhatsApp.</p>
            </div>

            <div class="flex flex-col sm:flex-row gap-3">
                <a href="{{ route('products.create') }}"
                   class="inline-flex items-center justify-center rounded-full border border-white/15 bg-white/5 px-6 py-3 text-sm text-white/90 hover:bg-white/10 transition">
                    Agregar producto
                </a>

                <a href="https://wa.me/573183221806?text={{ urlencode('Hola, quiero cotizar unos zapatos. ¿Me compartes disponibilidad y precios?') }}"
                   target="_blank"
                   class="inline-flex items-center justify-center rounded-full bg-[#25D366] px-6 py-3 text-sm font-semibold text-black hover:scale-[1.01] transition">
                    Cotizar por WhatsApp
                </a>
            </div>
        </div>

        {{-- Search bar --}}
        <form method="GET" action="{{ route('products.index') }}" class="w-full">
            <div class="flex flex-col sm:flex-row gap-3">
                <div class="relative flex-1">
                    <span class="pointer-events-none absolute inset-y-0 left-3 flex items-center text-white/40">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="11" cy="11" r="7"></circle>
                            <path d="M21 21l-4.3-4.3"></path>
                        </svg>
                    </span>
                    <input
                        name="q"
                        value="{{ $q }}"
                        placeholder="Buscar (nike, premium, comodidad...)"
                        class="w-full rounded-full bg-white/5 border border-white/10 text-white placeholder:text-white/40
                               pl-10 pr-4 py-3 text-sm outline-none
                               focus:border-amber-200/40 focus:ring-2 focus:ring-amber-200/10 transition"
                    />
                </div>

                <button
                    class="rounded-full bg-white text-neutral-950 px-6 py-3 text-sm font-semibold hover:opacity-90 transition"
                    type="submit"
                >
                    Buscar
                </button>

                @if($q)
                    <a href="{{ route('products.index') }}"
                       class="rounded-full border border-white/15 bg-white/5 px-6 py-3 text-sm text-white/90 hover:bg-white/10 transition text-center">
                        Limpiar
                    </a>
                @endif
            </div>
        </form>

        {{-- Grid --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
            @forelse($products as $p)
                <a href="{{ route('products.show', $p['slug']) }}"
                   class="group rounded-2xl overflow-hidden border border-white/10 bg-white/5 hover:bg-white/10 transition shadow-[0_16px_50px_rgba(0,0,0,0.35)]">

                    <div class="aspect-[4/3] bg-black/30 p-4">
                        <img src="{{ asset($p['image']) }}" alt="{{ $p['name'] }}" class="h-full w-full object-contain">
                    </div>

                    <div class="p-5">
                        <div class="flex items-center justify-between">
                            <span class="text-xs px-3 py-1 rounded-full border border-white/10 bg-black/20 text-white/70">
                                {{ $p['badge'] }}
                            </span>
                            <span class="text-xs text-white/50">⭐ {{ $p['rating'] }}</span>
                        </div>

                        <h3 class="mt-3 text-lg font-semibold group-hover:text-amber-200 transition">
                            {{ $p['name'] }}
                        </h3>

                        <p class="mt-1 text-sm text-white/60 line-clamp-2">
                            {{ $p['desc'] }}
                        </p>

                        <div class="mt-4 flex items-center justify-between">
                            <span class="text-base font-semibold">
                                $ {{ number_format($p['price'], 0, ',', '.') }}
                            </span>
                            <span class="text-sm text-white/60 group-hover:text-white transition">
                                Ver →
                            </span>
                        </div>
                    </div>
                </a>
            @empty
                <div class="rounded-2xl border border-white/10 bg-white/5 p-8 text-white/70">
                    No se encontraron productos con “{{ $q }}”.
                </div>
            @endforelse
        </div>
    </div>
</div>
@endsection