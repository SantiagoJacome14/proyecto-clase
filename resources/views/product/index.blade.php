<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Productos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body>

<div class="container">
    <div class="card">

        <h1 class="page-title">Lista de Productos (Zapatos)</h1>
        <p class="muted">Catálogo estilo tienda: nombre, precio y breve descripción.</p>

        <div class="grid">

            <div class="mini-card">
                <img src="{{ asset('img/zapatos/adidas.jpg') }}" alt="Adidas"
                     style="width:100%; border-radius:14px; border:1px solid #e5e7eb;">
                <h3>Adidas Forum Low</h3>
                <p class="muted">Estilo urbano clásico con gran comodidad.</p>
                <p><strong>$480.000</strong></p>
                <a href="/product/adidas" class="badge">Ver detalle</a>
            </div>

            <div class="mini-card">
                <img src="{{ asset('img/zapatos/nike.jpg') }}" alt="Nike"
                     style="width:100%; border-radius:14px; border:1px solid #e5e7eb;">
                <h3>Nike Air Max Plus</h3>
                <p class="muted">Diseño deportivo y cómodo para uso diario.</p>
                <p><strong>$520.000</strong></p>
                <a href="/product/nike" class="badge">Ver detalle</a>
            </div>

            <div class="mini-card">
                <img src="{{ asset('img/zapatos/off-white.jpg') }}" alt="Off-White"
                     style="width:100%; border-radius:14px; border:1px solid #e5e7eb;">
                <h3>Off-White Low</h3>
                <p class="muted">Modelo premium con estilo moderno.</p>
                <p><strong>$690.000</strong></p>
                <a href="/product/off-white" class="badge">Ver detalle</a>
            </div>

        </div>

        <br>
        <a href="/product/create" class="badge">+ Agregar producto</a>

    </div>
</div>

</body>
</html>
