<footer class="border-t border-white/10 bg-neutral-950">
    <div class="mx-auto max-w-6xl px-4 py-10">
        <div class="grid gap-8 md:grid-cols-3">
            <div>
                <p class="text-sm font-semibold tracking-[0.18em] uppercase">
                    Majestic <span class="text-white/60">Shoes</span>
                </p>
                <p class="mt-3 text-sm text-white/60 leading-relaxed">
                    Catálogo premium de calzado. Selección cuidada, estilo limpio y compras rápidas por WhatsApp.
                </p>
            </div>

            <div>
                <p class="text-sm font-semibold text-white/80">Navegación</p>
                <div class="mt-3 flex flex-col gap-2 text-sm text-white/60">
                    <a class="hover:text-white transition" href="{{ url('/') }}">Inicio</a>
                    <a class="hover:text-white transition" href="{{ route('products.index') }}">Productos</a>
                    <a class="hover:text-white transition" href="{{ route('products.create') }}">Agregar</a>
                </div>
            </div>

            <div>
                <p class="text-sm font-semibold text-white/80">Contacto</p>
                <div class="mt-3 flex flex-col gap-2 text-sm text-white/60">
                    <a class="hover:text-white transition"
                       target="_blank"
                       href="https://wa.me/573183221806?text={{ urlencode('Hola, quiero cotizar unos zapatos.') }}">
                        WhatsApp: +57 318 322 1806
                    </a>
                    <span class="text-white/40">Bucaramanga, CO</span>
                </div>
            </div>
        </div>

        <div class="mt-10 flex flex-col gap-3 border-t border-white/10 pt-6 md:flex-row md:items-center md:justify-between">
            <p class="text-xs text-white/40">
                © {{ date('Y') }} Majestic Shoes. Todos los derechos reservados.
            </p>
            <p class="text-xs text-white/40">
                Hecho con diseño limpio y elegante.
            </p>
        </div>
    </div>
</footer>