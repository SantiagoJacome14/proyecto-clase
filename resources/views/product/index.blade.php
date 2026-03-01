@extends('layouts.app')

@section('title', 'Zapatos | Catálogo')

@section('content')
<div class="mx-auto max-w-6xl px-4 py-8">
    <div class="flex flex-col gap-6">
        <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-4">
            <div>
                <p class="text-xs tracking-[0.25em] uppercase text-white/60">Catálogo</p>
                <h1 class="mt-2 text-2xl md:text-3xl font-semibold tracking-tight">Zapatos</h1>
                <p class="mt-2 text-white/60">Modelos seleccionados con estética premium.</p>
            </div>

            <div class="flex gap-3">
                <a href="{{ url('/product/create') }}"
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

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
            {{-- 1) Nike --}}
            <div class="rounded-2xl overflow-hidden border border-white/10 bg-white/5 hover:bg-white/10 transition shadow-[0_16px_50px_rgba(0,0,0,0.35)]">
                <div class="aspect-[4/3] bg-black/30 p-4">
                    <img src="{{ asset('img/zapatos/nike.jpg') }}" alt="Nike Air Force" class="h-full w-full object-contain">
                </div>
                <div class="p-5">
                    <div class="flex items-center justify-between">
                        <span class="text-xs px-3 py-1 rounded-full border border-white/10 bg-black/20 text-white/70">Top venta</span>
                        <span class="text-xs text-white/50">⭐ 4.8</span>
                    </div>
                    <h3 class="mt-3 text-lg font-semibold">Nike Air Force</h3>
                    <p class="mt-1 text-sm text-white/60">Clásico urbano, cómodo y combinable.</p>
                    <div class="mt-4 flex items-center justify-between">
                        <span class="text-base font-semibold">$350.000</span>
                        <div class="flex gap-2">
                            <a href="{{ url('/product/nike') }}" class="rounded-full border border-white/15 bg-white/5 px-4 py-2 text-sm hover:bg-white/10 transition">Ver</a>
                            <a target="_blank"
                               href="https://wa.me/573183221806?text={{ urlencode('Hola, quiero cotizar el Nike Air Force. ¿Qué tallas tienes y precio final?') }}"
                               class="rounded-full bg-white text-neutral-950 px-4 py-2 text-sm font-semibold hover:scale-[1.01] transition">
                                Cotizar
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- 2) Adidas --}}
            <div class="rounded-2xl overflow-hidden border border-white/10 bg-white/5 hover:bg-white/10 transition shadow-[0_16px_50px_rgba(0,0,0,0.35)]">
                <div class="aspect-[4/3] bg-black/30 p-4">
                    <img src="{{ asset('img/zapatos/adidas.jpg') }}" alt="Adidas Ultraboost" class="h-full w-full object-contain">
                </div>
                <div class="p-5">
                    <div class="flex items-center justify-between">
                        <span class="text-xs px-3 py-1 rounded-full border border-white/10 bg-black/20 text-white/70">Comodidad</span>
                        <span class="text-xs text-white/50">⭐ 4.7</span>
                    </div>
                    <h3 class="mt-3 text-lg font-semibold">Adidas Ultraboost</h3>
                    <p class="mt-1 text-sm text-white/60">Running & lifestyle con gran amortiguación.</p>
                    <div class="mt-4 flex items-center justify-between">
                        <span class="text-base font-semibold">$520.000</span>
                        <div class="flex gap-2">
                            <a href="{{ url('/product/adidas') }}" class="rounded-full border border-white/15 bg-white/5 px-4 py-2 text-sm hover:bg-white/10 transition">Ver</a>
                            <a target="_blank"
                               href="https://wa.me/573183221806?text={{ urlencode('Hola, quiero cotizar el Adidas Ultraboost. ¿Qué tallas tienes y precio final?') }}"
                               class="rounded-full bg-white text-neutral-950 px-4 py-2 text-sm font-semibold hover:scale-[1.01] transition">
                                Cotizar
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- 3) Off-White --}}
            <div class="rounded-2xl overflow-hidden border border-white/10 bg-white/5 hover:bg-white/10 transition shadow-[0_16px_50px_rgba(0,0,0,0.35)]">
                <div class="aspect-[4/3] bg-black/30 p-4">
                    <img src="{{ asset('img/zapatos/off-white.jpg') }}" alt="Off-White Low" class="h-full w-full object-contain">
                </div>
                <div class="p-5">
                    <div class="flex items-center justify-between">
                        <span class="text-xs px-3 py-1 rounded-full border border-white/10 bg-black/20 text-white/70">Premium</span>
                        <span class="text-xs text-white/50">⭐ 4.9</span>
                    </div>
                    <h3 class="mt-3 text-lg font-semibold">Off-White Low</h3>
                    <p class="mt-1 text-sm text-white/60">Estilo moderno con materiales top.</p>
                    <div class="mt-4 flex items-center justify-between">
                        <span class="text-base font-semibold">$690.000</span>
                        <div class="flex gap-2">
                            <a href="{{ url('/product/off-white') }}" class="rounded-full border border-white/15 bg-white/5 px-4 py-2 text-sm hover:bg-white/10 transition">Ver</a>
                            <a target="_blank"
                               href="https://wa.me/573183221806?text={{ urlencode('Hola, quiero cotizar el Off-White Low. ¿Qué tallas tienes y precio final?') }}"
                               class="rounded-full bg-white text-neutral-950 px-4 py-2 text-sm font-semibold hover:scale-[1.01] transition">
                                Cotizar
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection