@extends('layouts.app')

@section('title',$product['name'])

@section('content')

<div class="mx-auto max-w-6xl px-4 py-10">

<a href="{{ route('products.index') }}"
class="text-sm text-white/60 hover:text-white">
← Volver al catálogo
</a>

<div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mt-6">

<div class="rounded-2xl border border-white/10 bg-black/30 p-6">

<div class="aspect-[4/3]">

<img src="{{ asset($product['image']) }}"
class="h-full w-full object-contain">

</div>

</div>


<div class="rounded-2xl border border-white/10 bg-white/5 p-6">

<div class="flex justify-between">

<span class="text-xs px-3 py-1 border border-white/10 rounded-full bg-black/20 text-white/70">
{{ $product['badge'] }}
</span>

<span class="text-xs text-white/50">
⭐ {{ $product['rating'] }}
</span>

</div>


<h1 class="text-3xl font-semibold mt-4">
{{ $product['name'] }}
</h1>


<p class="text-white/60 mt-3">
{{ $product['desc'] }}
</p>


<p class="text-2xl font-semibold mt-5">
$ {{ number_format($product['price'],0,',','.') }}
</p>


<div class="mt-6 flex gap-3">

<a target="_blank"
href="https://wa.me/573183221806?text={{ urlencode('Hola quiero cotizar '.$product['name']) }}"
class="bg-[#25D366] text-black rounded-full px-6 py-3 text-sm font-semibold">
Cotizar por WhatsApp
</a>


<a href="{{ route('products.index') }}"
class="border border-white/15 bg-white/5 rounded-full px-6 py-3 text-sm">
Volver
</a>

</div>

</div>

</div>

</div>

@endsection