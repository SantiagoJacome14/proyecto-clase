@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
<div class="mx-auto max-w-6xl px-4 py-10 space-y-16">

    <!-- HERO / PRESENTACIÓN -->
    <section class="rounded-2xl border border-white/10 bg-white/5 p-8 md:p-12 shadow-[0_20px_60px_rgba(0,0,0,0.35)]">
        <div class="max-w-2xl">
            <p class="text-xs tracking-[0.25em] uppercase text-white/60">Catálogo premium</p>

            <h1 class="mt-3 text-3xl md:text-5xl font-semibold tracking-tight text-white">
                Zapatos con estilo limpio,
                <span class="text-white/70">acabado de lujo</span>.
            </h1>

            <p class="mt-4 text-base md:text-lg text-white/60 leading-relaxed">
                Descubre nuestra colección de zapatos para diferentes estilos y ocasiones.
                Encuentra modelos casuales, deportivos y elegantes con diseños modernos,
                excelente acabado y atención personalizada.
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
        </div>
    </section>

    <!-- CATEGORÍAS -->
    <section>
        <div class="mb-6">
            <h2 class="text-2xl md:text-3xl font-semibold text-white">Categorías populares</h2>
            <p class="mt-2 text-white/60">Explora los estilos más buscados de nuestra tienda.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="rounded-2xl border border-white/10 bg-white/5 p-6 shadow-lg">
                <h3 class="text-xl font-semibold text-white">👟 Deportivos</h3>
                <p class="mt-3 text-white/60">
                    Diseños cómodos y modernos para el día a día o actividades más activas.
                </p>
                <a href="{{ url('/products') }}"
                   class="mt-5 inline-flex rounded-full bg-white text-black px-5 py-2 text-sm font-medium hover:scale-[1.01] transition">
                    Ver productos
                </a>
            </div>

            <div class="rounded-2xl border border-white/10 bg-white/5 p-6 shadow-lg">
                <h3 class="text-xl font-semibold text-white">🥿 Casuales</h3>
                <p class="mt-3 text-white/60">
                    Opciones versátiles para combinar con outfits urbanos, frescos y modernos.
                </p>
                <a href="{{ url('/products') }}"
                   class="mt-5 inline-flex rounded-full bg-white text-black px-5 py-2 text-sm font-medium hover:scale-[1.01] transition">
                    Ver productos
                </a>
            </div>

            <div class="rounded-2xl border border-white/10 bg-white/5 p-6 shadow-lg">
                <h3 class="text-xl font-semibold text-white">👞 Elegantes</h3>
                <p class="mt-3 text-white/60">
                    Modelos con presencia y acabado premium para ocasiones especiales.
                </p>
                <a href="{{ url('/products') }}"
                   class="mt-5 inline-flex rounded-full bg-white text-black px-5 py-2 text-sm font-medium hover:scale-[1.01] transition">
                    Ver productos
                </a>
            </div>
        </div>
    </section>

    <!-- BENEFICIOS -->
    <section>
        <div class="mb-6">
            <h2 class="text-2xl md:text-3xl font-semibold text-white">¿Por qué comprar con nosotros?</h2>
            <p class="mt-2 text-white/60">Una experiencia simple, rápida y enfocada en calidad.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-sm">
            <div class="rounded-2xl border border-white/10 bg-black/20 p-6">
                <p class="text-white font-medium">🚚 Entrega rápida</p>
                <p class="mt-2 text-white/55">Coordinamos tu pedido de forma ágil y segura.</p>
            </div>

            <div class="rounded-2xl border border-white/10 bg-black/20 p-6">
                <p class="text-white font-medium">⭐ Selección premium</p>
                <p class="mt-2 text-white/55">Modelos con estilo, tendencia y excelente presentación.</p>
            </div>

            <div class="rounded-2xl border border-white/10 bg-black/20 p-6">
                <p class="text-white font-medium">💬 Atención directa</p>
                <p class="mt-2 text-white/55">Te ayudamos con tallas, disponibilidad y recomendaciones.</p>
            </div>
        </div>
    </section>

    <!-- PRODUCTOS DESTACADOS -->
    <section>
        <div class="mb-6">
            <h2 class="text-2xl md:text-3xl font-semibold text-white">Productos destacados</h2>
            <p class="mt-2 text-white/60">Algunos de los modelos más llamativos de nuestro catálogo.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach ($products->take(3) as $product)
                <div class="rounded-2xl overflow-hidden border border-white/10 bg-white/5 shadow-lg">
                    <div class="aspect-[4/4] bg-black/20 overflow-hidden">
                        @if ($product->image)
                            <img src="{{ asset('storage/' . $product->image) }}"
                                 alt="{{ $product->name }}"
                                 class="w-full h-full object-cover">
                        @else
                            <div class="w-full h-full flex items-center justify-center text-white/40 text-sm">
                                Sin imagen
                            </div>
                        @endif
                    </div>

                    <div class="p-5">
                        <h3 class="text-lg font-semibold text-white">{{ $product->name }}</h3>
                        <p class="mt-2 text-white/70 font-medium">${{ number_format($product->price, 0, ',', '.') }}</p>

                        <a href="{{ url('/products/' . $product->id) }}"
                           class="mt-4 inline-flex rounded-full bg-white text-black px-5 py-2 text-sm font-medium hover:scale-[1.01] transition">
                            Ver producto
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <!-- LLAMADO A LA ACCIÓN -->
    <section class="text-center rounded-2xl border border-white/10 bg-white/5 p-8 md:p-10">
        <h2 class="text-2xl md:text-3xl font-semibold text-white">Explora todo nuestro catálogo</h2>
        <p class="mt-3 text-white/60 max-w-2xl mx-auto">
            Tenemos más referencias disponibles para ayudarte a encontrar el par ideal
            según tu estilo y necesidad.
        </p>

        <div class="mt-6 flex flex-col sm:flex-row gap-3 justify-center">
            <a href="{{ url('/products') }}"
               class="inline-flex items-center justify-center rounded-full bg-white text-black px-6 py-3 text-sm font-semibold hover:scale-[1.01] transition">
                Ver todos los productos
            </a>

            <a href="https://wa.me/573183221806?text={{ urlencode('Hola, quiero ver el catálogo completo de zapatos.') }}"
               target="_blank"
               class="inline-flex items-center justify-center rounded-full border border-white/15 bg-white/5 px-6 py-3 text-sm font-medium text-white/90 hover:bg-white/10 transition">
                Pedir asesoría
            </a>
        </div>
    </section>

</div>
@endsection