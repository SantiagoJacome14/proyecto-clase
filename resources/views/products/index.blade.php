@extends('layouts.app')

@section('content')

<div class="max-w-6xl mx-auto py-10">

<div class="flex items-center justify-between mb-6">
    <h2 class="text-3xl font-bold">Productos</h2>

    <a href="{{ route('products.create') }}"
       class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded font-semibold">
        + Agregar producto
    </a>
</div>

<form method="GET" action="{{ route('products.index') }}" class="mb-6 flex gap-2">
<input
name="q"
value="{{ request('q') }}"
placeholder="Buscar producto"
class="border p-2 rounded"
/>

<button class="bg-black text-white px-4 py-2 rounded">
Buscar
</button>
</form>

<div class="grid grid-cols-3 gap-6">

@foreach($misProductos as $producto)

<div class="border rounded p-4">

@if($producto->image)
    <img src="{{ asset('storage/' . $producto->image) }}"
        alt="Sneakers {{ $producto->name }}" class="product-image">
@else
    <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?auto=format&fit=crop&w=900&q=80"
        alt="Sneakers deportivos" class="product-image">
@endif

<h3 class="font-bold">
{{$producto->name}}
</h3>

<p class="text-gray-600">
${{$producto->price}}
</p>

<a href="{{ route('products.show', $producto->id) }}"
class="bg-black text-white px-3 py-2 mt-3 inline-block rounded">
Ver producto
</a>

<form action="{{ route('products.destroy', $producto->id) }}" method="POST">
    @csrf
    @method('DELETE')

    <button type="submit"
        class="bg-red-600 hover:bg-red-700 text-white px-3 py-2 mt-2 rounded w-full">
        Eliminar
    </button>
</form>

</div>

@endforeach

</div>

</div>

@endsection