@extends('layouts.app')

@section('title', 'Crear Producto')

@section('content')
<div class="mx-auto max-w-3xl px-4 sm:px-6 py-10">

  <div class="flex items-end justify-between mb-6">
    <h2 class="text-2xl font-semibold text-white">Agregar Producto</h2>
    <a href="{{ route('products.index') }}" class="text-sm text-white/60 hover:text-white">← Volver</a>
  </div>

  <div class="rounded-2xl border border-white/10 bg-white/5 p-6 shadow-[0_20px_60px_rgba(0,0,0,0.35)]">
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" class="space-y-5">
      @csrf

      <div>
        <label class="block text-sm text-white/70 mb-2" for="name">Nombre</label>
        <input id="name" name="name" type="text" value="{{ old('name') }}"
               class="w-full rounded-xl border border-white/10 bg-black/30 px-4 py-3 text-sm text-white outline-none"
               placeholder="Ej: Nike Air Force 1" required>
        @error('name') <p class="text-sm text-red-400 mt-2">{{ $message }}</p> @enderror
      </div>

      <div>
        <label class="block text-sm text-white/70 mb-2" for="price">Precio</label>
        <input id="price" name="price" type="number" value="{{ old('price') }}"
               class="w-full rounded-xl border border-white/10 bg-black/30 px-4 py-3 text-sm text-white outline-none"
               placeholder="350000" required>
        @error('price') <p class="text-sm text-red-400 mt-2">{{ $message }}</p> @enderror
      </div>

      <div>
        <label class="block text-sm text-white/70 mb-2" for="description">Descripción</label>
        <textarea id="description" name="description" rows="4"
                  class="w-full rounded-xl border border-white/10 bg-black/30 px-4 py-3 text-sm text-white outline-none"
                  placeholder="Descripción del producto...">{{ old('description') }}</textarea>
        @error('description') <p class="text-sm text-red-400 mt-2">{{ $message }}</p> @enderror
      </div>

      <div>
        <label class="block text-sm text-white/70 mb-2" for="image">Imagen</label>
        <input id="image" name="image" type="file" accept="image/*"
               class="block w-full text-sm text-white/70 file:mr-4 file:rounded-full file:border-0
                      file:bg-white file:px-4 file:py-2 file:text-sm file:font-semibold file:text-black
                      hover:file:opacity-90">
        @error('image') <p class="text-sm text-red-400 mt-2">{{ $message }}</p> @enderror
      </div>

      <div>
        <label class="block text-sm text-white/70 mb-2" for="category_id">Categoría</label>
        <select id="category_id" name="category_id"
                class="w-full rounded-xl border border-white/10 bg-black/30 px-4 py-3 text-sm text-white outline-none">
          @foreach($categoryList as $category)
            <option value="{{ $category->id }}" @selected(old('category_id') == $category->id)>
              {{ $category->name }}
            </option>
          @endforeach
        </select>
        @error('category_id') <p class="text-sm text-red-400 mt-2">{{ $message }}</p> @enderror
      </div>

      <button type="submit"
              class="inline-flex items-center justify-center rounded-full bg-white px-6 py-3 text-sm font-semibold text-black hover:opacity-90">
        Guardar Producto
      </button>

    </form>
  </div>

</div>
@endsection