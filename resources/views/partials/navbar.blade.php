<nav class="sticky top-0 z-50 bg-neutral-950/80 backdrop-blur border-b border-white/10">
    <div class="mx-auto max-w-7xl px-4 sm:px-6">
        <div class="h-16 flex items-center justify-between gap-4">

            {{-- Left: Brand --}}
            <a href="{{ url('/') }}" class="flex items-center gap-3">
                <span class="h-7 w-7 rounded-sm bg-amber-200/90 shadow-[0_0_0_1px_rgba(255,255,255,0.08)]"></span>
                <span class="tracking-[0.20em] text-sm sm:text-base font-semibold text-white">
                    MAJESTIC <span class="text-amber-200 font-medium italic tracking-[0.28em]">SHOES</span>
                </span>
            </a>

            {{-- Center: Links (desktop) --}}
            <div class="hidden lg:flex items-center gap-8 text-[12px] tracking-[0.22em] uppercase text-white/70">
                <a href="{{ url('/') }}" class="hover:text-white transition">Inicio</a>
                <a href="{{ route('products.index') }}" class="hover:text-white transition">Catálogo</a>
                <a href="{{ url('/categories') }}" class="hover:text-white transition">Categorías</a>
                <a href="{{ url('/novedades') }}" class="hover:text-white transition">Novedades</a>
            </div>

            {{-- Right: Search + Icons --}}
            <div class="flex items-center gap-3 sm:gap-4">

                {{-- Search (desktop/tablet) --}}
                <form action="{{ url('/products') }}" method="GET" class="hidden md:block">
                    <div class="relative">
                        <span class="pointer-events-none absolute inset-y-0 left-3 flex items-center text-white/50">
                            {{-- search icon --}}
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <circle cx="11" cy="11" r="7"></circle>
                                <path d="M21 21l-4.3-4.3"></path>
                            </svg>
                        </span>

                        <input
                            name="q"
                            value="{{ request('q') }}"
                            placeholder="Buscar productos..."
                            class="w-64 lg:w-80 rounded-full bg-white/5 border border-white/10 text-white placeholder:text-white/40
                                   pl-10 pr-4 py-2 text-sm outline-none
                                   focus:border-amber-200/40 focus:ring-2 focus:ring-amber-200/10 transition"
                        />
                    </div>
                </form>

                {{-- Cart --}}
                <a href="{{ url('/cart') }}"
                   class="inline-flex h-10 w-10 items-center justify-center rounded-full border border-white/10 bg-white/5 hover:bg-white/10 transition"
                   aria-label="Carrito">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-[18px] w-[18px] text-white/80" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M6 6h15l-1.5 9h-12z"></path>
                        <path d="M6 6l-2-2H2"></path>
                        <circle cx="9" cy="20" r="1"></circle>
                        <circle cx="18" cy="20" r="1"></circle>
                    </svg>
                </a>

                {{-- Profile / Account --}}
                <a href="{{ url('/profile') }}"
                   class="inline-flex h-10 w-10 items-center justify-center rounded-full border border-white/10 bg-white/5 hover:bg-white/10 transition"
                   aria-label="Cuenta">
                    <span class="h-7 w-7 rounded-full bg-gradient-to-br from-amber-200/80 to-amber-200/20 shadow-[0_0_0_1px_rgba(255,255,255,0.10)]"></span>
                </a>

                {{-- Mobile menu button --}}
                <button
                    type="button"
                    class="lg:hidden inline-flex h-10 w-10 items-center justify-center rounded-full border border-white/10 bg-white/5 hover:bg-white/10 transition"
                    aria-label="Menú"
                    onclick="document.getElementById('mobileNav').classList.toggle('hidden')"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-[18px] w-[18px] text-white/80" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M4 6h16"></path>
                        <path d="M4 12h16"></path>
                        <path d="M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    {{-- Mobile dropdown --}}
    <div id="mobileNav" class="hidden lg:hidden border-t border-white/10 bg-neutral-950/95">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 py-4 space-y-4">

            {{-- Search (mobile) --}}
            <form action="{{ url('/products') }}" method="GET" class="md:hidden">
                <div class="relative">
                    <span class="pointer-events-none absolute inset-y-0 left-3 flex items-center text-white/50">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="11" cy="11" r="7"></circle>
                            <path d="M21 21l-4.3-4.3"></path>
                        </svg>
                    </span>

                    <input
                        name="q"
                        value="{{ request('q') }}"
                        placeholder="Buscar productos..."
                        class="w-full rounded-full bg-white/5 border border-white/10 text-white placeholder:text-white/40
                               pl-10 pr-4 py-2 text-sm outline-none
                               focus:border-amber-200/40 focus:ring-2 focus:ring-amber-200/10 transition"
                    />
                </div>
            </form>

            <div class="grid gap-2 text-[12px] tracking-[0.22em] uppercase text-white/70">
                <a href="{{ url('/') }}" class="py-2 hover:text-white transition">Inicio</a>
                <a href="{{ route('products.index') }}" class="py-2 hover:text-white transition">Catálogo</a>
                <a href="{{ url('/categories') }}" class="py-2 hover:text-white transition">Categorías</a>
                <a href="{{ url('/novedades') }}" class="py-2 hover:text-white transition">Novedades</a>
                <a href="{{ route('cart.index') }}"class="rounded-full border border-white/15 bg-white/5 px-4 py-2 text-sm hover:bg-white/10 transition">Carrito</a>
                <a href="https://wa.me/573183221806?text={{ urlencode('Hola, quiero cotizar por favor.') }}"
                   target="_blank"
                   class="mt-2 inline-flex items-center justify-center rounded-full bg-amber-200 text-black font-semibold py-2 tracking-normal">
                    Cotizar por WhatsApp
                </a>
            </div>
        </div>
    </div>
</nav>