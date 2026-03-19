@extends('admin.layouts.app')

@section('title', 'Crear categoría')

@section('content')
<div class="admin-dashboard">
    <div class="admin-header">
        <h1>Crear categoría</h1>
        <p>Registra una nueva categoría en el sistema.</p>
    </div>

    <div class="admin-section">
        <form action="{{ route('admin.categories.store') }}" method="POST">
            @csrf

            <div style="margin-bottom:20px;">
                <label for="name" style="display:block; margin-bottom:8px;">Nombre</label>
                <input type="text"
                       name="name"
                       id="name"
                       value="{{ old('name') }}"
                       style="width:100%; padding:12px; border-radius:10px; border:1px solid #374151; background:#111827; color:white;">
                @error('name')
                    <p style="color:#f87171; margin-top:8px;">{{ $message }}</p>
                @enderror
            </div>

            <div style="display:flex; gap:12px;">
                <button type="submit"
                        style="background:#38bdf8; color:#0f172a; padding:10px 18px; border:none; border-radius:10px; font-weight:bold; cursor:pointer;">
                    Guardar
                </button>

                <a href="{{ route('admin.categories.index') }}"
                   style="display:inline-block; background:#374151; color:white; padding:10px 18px; border-radius:10px; text-decoration:none;">
                    Cancelar
                </a>
            </div>
        </form>
    </div>
</div>
@endsection