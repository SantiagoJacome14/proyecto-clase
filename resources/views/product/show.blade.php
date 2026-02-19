<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalle del Producto</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body>

<div class="container">
    <div class="card">

        @php
            $productos = [
                'nike' => [
                    'nombre' => 'Nike Air Max Plus',
                    'precio' => 520000,
                    'desc' => 'Diseño deportivo y cómodo para uso diario.',
                    'imagen' => 'img/zapatos/nike.jpg',
                    'estado' => 'Disponible'
                ],
                'adidas' => [
                    'nombre' => 'Adidas Forum Low',
                    'precio' => 480000,
                    'desc' => 'Estilo urbano clásico con gran comodidad.',
                    'imagen' => 'img/zapatos/adidas.jpg',
                    'estado' => 'Disponible'
                ],
                'off-white' => [
                    'nombre' => 'Off-White Low',
                    'precio' => 690000,
                    'desc' => 'Modelo premium con estilo moderno.',
                    'imagen' => 'img/zapatos/off-white.jpg',
                    'estado' => 'Disponible'
                ],
            ];

            $p = $productos[$producto] ?? null;
        @endphp

        @if(!$p)
            <h1 class="page-title">Producto no encontrado</h1>
            <p class="muted">No existe: <strong>{{ $producto }}</strong></p>
            <a class="back" href="/product">← Volver</a>
        @else
            <h1 class="page-title">{{ $p['nombre'] }}</h1>

            <div style="display:flex; gap:18px; flex-wrap:wrap; align-items:flex-start;">
                <div style="flex: 0 0 320px;">
