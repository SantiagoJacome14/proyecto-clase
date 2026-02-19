<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Producto</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body>

<div class="container">
    <div class="card">

        <h1 class="page-title">Crear Producto</h1>
        <p class="muted">Formulario básico (sin guardar aún).</p>

        <form>
            <label><strong>ID producto</strong></label><br>
            <input type="text" placeholder="ej: nike"
                   style="width:100%; padding:10px; border-radius:10px; border:1px solid #e5e7eb;"><br><br>

            <label><strong>Nombre</strong></label><br>
            <input type="text" placeholder="Nombre del zapato"
                   style="width:100%; padding:10px; border-radius:10px; border:1px solid #e5e7eb;"><br><br>

            <label><strong>Precio</strong></label><br>
            <input type="number" placeholder="Ej: 520000"
                   style="width:100%; padding:10px; border-radius:10px; border:1px solid #e5e7eb;"><br><br>

            <label><strong>Descripción</strong></label><br>
            <textarea placeholder="Breve descripción"
                      style="width:100%; padding:10px; border-radius:10px; border:1px solid #e5e7eb;"></textarea><br><br>

            <label><strong>Imagen</strong></label><br>
            <input type="file"><br><br>

            <label><strong>Estado</strong></label><br>
            <select style="width:100%; padding:10px; border-radius:10px; border:1px solid #e5e7eb;">
                <option>Disponible</option>
                <option>Agotado</option>
            </select><br><br>

            <button type="button" class="badge">Guardar</button>
        </form>

        <a class="back" href="/product">← Volver</a>

    </div>
</div>

</body>
</html>
