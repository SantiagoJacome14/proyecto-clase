@extends('layouts.app')

@section('title', 'Crear Producto')

@section('content')
<div class="max-w-2xl">
    <p class="text-xs tracking-[0.25em] uppercase text-white/60">Formulario</p>
    <h1 class="mt-2 text-2xl font-semibold tracking-tight">Crear Producto</h1>
    <p class="mt-2 text-white/60">Formulario básico para registrar un zapato (demo).</p>

    <div class="mt-6 rounded-2xl border border-white/10 bg-white/5 p-6 shadow-[0_20px_60px_rgba(0,0,0,0.35)]">
        <form method="POST" action="#">
            @csrf

            <div class="grid gap-4">
                <div>
                    <label class="text-sm text-white/70">Nombre</label>
                    <input name="name" type="text" placeholder="Ej: Nike Air Force 1"
                           class="mt-2 w-full rounded-xl border border-white/10 bg-black/30 px-4 py-3 text-sm outline-none focus:border-white/20" />
                </div>

                <div>
                    <label class="text-sm text-white/70">Descripción</label>
                    <textarea name="description" rows="3" placeholder="Descripción corta..."
                              class="mt-2 w-full rounded-xl border border-white/10 bg-black/30 px-4 py-3 text-sm outline-none focus:border-white/20"></textarea>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="text-sm text-white/70">Precio</label>
                        <input name="price" type="number" placeholder="350000"
                               class="mt-2 w-full rounded-xl border border-white/10 bg-black/30 px-4 py-3 text-sm outline-none focus:border-white/20" />
                    </div>

                    <div>
                        <label class="text-sm text-white/70">Categoría</label>
                        <input name="category" type="text" placeholder="Deportivos / Urbanos..."
                               class="mt-2 w-full rounded-xl border border-white/10 bg-black/30 px-4 py-3 text-sm outline-none focus:border-white/20" />
                    </div>
                </div>

                <div class="flex flex-col sm:flex-row gap-3 pt-2">
                    <button type="submit"
                            class="inline-flex items-center justify-center rounded-full bg-white text-neutral-950 px-6 py-3 text-sm font-semibold hover:scale-[1.01] transition">
                        Guardar
                    </button>
                    <a href="{{ url('/product') }}"
                       class="inline-flex items-center justify-center rounded-full border border-white/15 bg-white/5 px-6 py-3 text-sm text-white/90 hover:bg-white/10 transition">
                        Volver al catálogo
                    </a>
                </div>

                <p class="text-xs text-white/45">
                    Nota: este formulario está en modo demo. Si quieres que guarde en base de datos, dime y te hago la ruta POST + controller + validación.
                </p>
            </div>
        </form>
    </div>
</div>

