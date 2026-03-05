@extends('layouts.app')

@section('content')

<div class="max-w-6xl mx-auto py-10">

<h2 class="text-3xl font-bold mb-6">Productos</h2>

<form method="GET" action="{{ route('products.index') }}" class="mb-6">
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

<img src="{{ asset($producto->image) }}" class="mb-3">

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

</div>

@endforeach

</div>

</div>

@endsection