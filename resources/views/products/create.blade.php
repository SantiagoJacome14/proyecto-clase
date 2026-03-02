@extends('layouts.app')

@section('title', 'Crear Producto')

@section('content')
<div class="mx-auto max-w-3xl px-4 sm:px-6 py-10">
    <div class="rounded-2xl border border-white/10 bg-white/5 p-6 md:p-8 shadow-[0_20px_60px_rgba(0,0,0,0.35)]">
        <div class="flex items-start justify-between gap-4">
            <div>
                <p class="text-xs tracking-[0.25em] uppercase text-white/60">Formulario</p>
                <h1 class="mt-2 text-2xl md:text-3xl font-semibold tracking-tight">Crear producto</h1>
                <p class="mt-2 text-white/60">Modo demo: no guarda aún, pero ya queda listo para conectar a BD.</p>
            </div>

            <a href="{{ route('products.index') }}" class="text-sm text-white/60 hover:text-white transition">
                ← Volver
            </a>
        </div>

        <form class="mt-8 space-y-5" onsubmit="event.preventDefault(); alert('Demo: luego lo conectamos a base de datos.');">
            <div>
                <label class="block text-sm text-white/70 mb-2">Nombre</label>
                <input id="p_name" type="text" placeholder="Ej: Nike Air Force 1"
                       class="w-full rounded-xl border border-white/10 bg-black/30 px-4 py-3 text-sm outline-none focus:border-amber-200/40 focus:ring-2 focus:ring-amber-200/10 transition" />
            </div>

            <div>
                <label class="block text-sm text-white/70 mb-2">Descripción</label>
                <textarea id="p_desc" rows="3" placeholder="Descripción corta..."
                          class="w-full rounded-xl border border-white/10 bg-black/30 px-4 py-3 text-sm outline-none focus:border-amber-200/40 focus:ring-2 focus:ring-amber-200/10 transition"></textarea>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm text-white/70 mb-2">Precio</label>
                    <input id="p_price" type="number" placeholder="350000"
                           class="w-full rounded-xl border border-white/10 bg-black/30 px-4 py-3 text-sm outline-none focus:border-amber-200/40 focus:ring-2 focus:ring-amber-200/10 transition" />
                </div>

                <div>
                    <label class="block text-sm text-white/70 mb-2">Etiqueta</label>
                    <input id="p_badge" type="text" placeholder="Top venta / Premium..."
                           class="w-full rounded-xl border border-white/10 bg-black/30 px-4 py-3 text-sm outline-none focus:border-amber-200/40 focus:ring-2 focus:ring-amber-200/10 transition" />
                </div>
            </div>

            {{-- Preview card --}}
            <div class="pt-4">
                <p class="text-xs tracking-[0.22em] uppercase text-white/60">Vista previa</p>

                <div class="mt-3 rounded-2xl overflow-hidden border border-white/10 bg-white/5 shadow-[0_16px_50px_rgba(0,0,0,0.35)]">
                    <div class="aspect-[4/3] bg-black/30 p-4 flex items-center justify-center">
                        <span class="text-white/40 text-sm">Imagen (demo)</span>
                    </div>
                    <div class="p-5">
                        <div class="flex items-center justify-between">
                            <span id="pv_badge" class="text-xs px-3 py-1 rounded-full border border-white/10 bg-black/20 text-white/70">Etiqueta</span>
                            <span class="text-xs text-white/50">⭐ 4.8</span>
                        </div>

                        <h3 id="pv_name" class="mt-3 text-lg font-semibold">Nombre del producto</h3>
                        <p id="pv_desc" class="mt-1 text-sm text-white/60">Descripción del producto...</p>

                        <div class="mt-4 flex items-center justify-between">
                            <span id="pv_price" class="text-base font-semibold">$ 0</span>
                            <span class="text-sm text-white/60">Preview</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pt-2 flex flex-col sm:flex-row gap-3">
                <button type="submit"
                        class="inline-flex items-center justify-center rounded-full bg-amber-200 text-black px-6 py-3 text-sm font-semibold hover:opacity-95 transition">
                    Guardar (demo)
                </button>

                <a href="https://wa.me/573183221806?text={{ urlencode('Hola, quiero agregar productos al catálogo. ¿Me ayudas a configurarlo?') }}"
                   target="_blank"
                   class="inline-flex items-center justify-center rounded-full border border-white/15 bg-white/5 px-6 py-3 text-sm text-white/90 hover:bg-white/10 transition">
                    Pedir ayuda por WhatsApp
                </a>
            </div>

            <p class="text-xs text-white/45">
                Si quieres, en el siguiente paso te conecto esto a base de datos con POST + validación + subida de imagen.
            </p>
        </form>
    </div>
</div>

<script>
    const $ = (id) => document.getElementById(id);

    function formatCOP(value) {
        const n = Number(value || 0);
        return '$ ' + n.toLocaleString('es-CO');
    }

    function sync() {
        const name = $('p_name').value || 'Nombre del producto';
        const desc = $('p_desc').value || 'Descripción del producto...';
        const badge = $('p_badge').value || 'Etiqueta';
        const price = $('p_price').value || 0;

        $('pv_name').textContent = name;
        $('pv_desc').textContent = desc;
        $('pv_badge').textContent = badge;
        $('pv_price').textContent = formatCOP(price);
    }

    ['p_name','p_desc','p_badge','p_price'].forEach(id => {
        $(id).addEventListener('input', sync);
    });

    sync();
</script>
@endsection