@extends('admin.layouts.app')

@section('title', 'Panel de administración')

@section('content')
<div class="admin-dashboard">
    <div class="admin-header">
        <h1>Panel de Administración</h1>
        <p>Gestiona tu ecommerce de zapatos desde un entorno administrativo.</p>
    </div>

    <div class="admin-cards">
        <div class="admin-card">
            <h3>Total de productos</h3>
            <p>{{ $totalProductos }}</p>
        </div>

        <div class="admin-card">
            <h3>Estado del sistema</h3>
            <p>Activo</p>
        </div>

        <div class="admin-card">
            <h3>Catálogo</h3>
            <p>Disponible para clientes</p>
        </div>
    </div>

    <div class="admin-section">
        <h2>Últimos productos registrados</h2>

        @if($ultimosProductos->count())
            <div class="admin-table-wrapper">
                <table class="admin-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Precio</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($ultimosProductos as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->name }}</td>
                                <td>${{ number_format($product->price, 0, ',', '.') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <p>No hay productos registrados todavía.</p>
        @endif
    </div>
</div>
@endsection