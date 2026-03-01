@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
<div class="mx-auto max-w-6xl px-4 py-10">
    <div class="rounded-2xl border border-white/10 bg-white/5 p-8 md:p-12 shadow-[0_20px_60px_rgba(0,0,0,0.35)]">
        <div class="max-w-2xl">
            <p class="text-xs tracking-[0.25em] uppercase text-white/60">Catálogo premium</p>
            <h1 class="mt-3 text-3xl md:text-5xl font-semibold tracking-tight">
                Zapatos con estilo limpio,
                <span class="text-white/70">acabado de lujo</span>.
            </h1>
            <p class="mt-4 text-base md:text-lg text-white/60 leading-relaxed">
                Explora modelos seleccionados, precios claros y compra rápida por WhatsApp.
            </p>

            <div class="mt-8 flex flex-col sm:flex-row gap-3">
                <a href="{{ url('/products') }}"
                   class="inline-flex items-center justify-center rounded-full bg-white text-neutral-950 px-6 py-3 text-sm font-semibold hover:scale-[1.01] transition">
                    Ver catálogo
                </a>
                <a href="https://wa.me/573183221806?text={{ urlencode('Hola, quiero cotizar unos zapatos. ¿Me compartes disponibilidad y precios?') }}"
                   target="_blank"
                   class="inline-flex items-center justify-center rounded-full border border-white/15 bg-white/5 px-6 py-3 text-sm font-medium text-white/90 hover:bg-white/10 transition">
                    Cotizar por WhatsApp
                </a>
            </div>

            <div class="mt-10 grid grid-cols-1 sm:grid-cols-3 gap-4 text-sm">
                <div class="rounded-xl border border-white/10 bg-black/20 p-4">
                    <p class="text-white/80 font-medium">Entrega rápida</p>
                    <p class="mt-1 text-white/55">Coordinamos por chat.</p>
                </div>
                <div class="rounded-xl border border-white/10 bg-black/20 p-4">
                    <p class="text-white/80 font-medium">Selección premium</p>
                    <p class="mt-1 text-white/55">Modelos top y modernos.</p>
                </div>
                <div class="rounded-xl border border-white/10 bg-black/20 p-4">
                    <p class="text-white/80 font-medium">Atención directa</p>
                    <p class="mt-1 text-white/55">Asesoría en tallas y estilo.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection