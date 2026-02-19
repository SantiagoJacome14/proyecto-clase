<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Zapatos | Catálogo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">

    <!-- Estilos extra SOLO para que se vea tipo Amazon (puedes moverlos al CSS global si quieres) -->
    <style>
        .topbar{
            display:flex;
            gap:12px;
            align-items:center;
            justify-content:space-between;
            flex-wrap:wrap;
            margin-bottom:14px;
        }
        .search{
            flex:1;
            min-width:220px;
            display:flex;
            gap:10px;
            align-items:center;
        }
        .search input{
            width:100%;
            padding:10px 12px;
            border-radius:10px;
            border:1px solid #e5e7eb;
            outline:none;
        }
        .search input:focus{
            border-color:#2563eb;
            box-shadow:0 0 0 3px rgba(37,99,235,0.12);
        }
        .chip{
            display:inline-flex;
            align-items:center;
            gap:8px;
            padding:8px 10px;
            border-radius:999px;
            border:1px solid #e5e7eb;
            background:#fff;
            font-weight:700;
            font-size:13px;
            color:#111827;
        }
        .grid-products{
            display:grid;
            grid-template-columns: repeat(auto-fill, minmax(230px, 1fr));
            gap:18px;
            margin-top:16px;
        }
        .p-card{
            border:1px solid #e5e7eb;
            border-radius:14px;
            background:#fff;
            overflow:hidden;
            transition:transform .15s ease, box-shadow .15s ease;
        }
        .p-card:hover{
            transform: translateY(-4px);
            box-shadow: 0 14px 26px rgba(0,0,0,.10);
        }
        .p-imgwrap{
            background:#f8fafc;
            padding:14px;
        }
        .p-img{
            width:100%;
            height:170px;
            object-fit:contain;
            display:block;
        }
        .p-body{
            padding:14px;
        }
        .p-title{
            margin:0 0 8px 0;
            font-size:15px;
            font-weight:800;
            color:#111827;
            line-height:1.25;
            min-height:38px; /* hace que todas queden parejas */
        }
        .p-desc{
            margin:0 0 10px 0;
            color:#6b7280;
            font-size:13px;
            line-height:1.4;
            min-height:36px;
        }
        .p-row{
            display:flex;
            align-items:center;
            justify-content:space-between;
            gap:10px;
            margin-top:10px;
        }
        .p-price{
            font-size:18px;
            font-weight:900;
            color:#111827;
        }
        .p-badge{
            font-size:12px;
            font-weight:800;
            padding:6px 10px;
            border-radius:999px;
            background:rgba(37,99,235,.10);
            color:#2563eb;
            border:1px solid rgba(37,99,235,.18);
        }
        .p-actions{
            display:flex;
            gap:10px;
            margin-top:12px;
        }
        .btn{
            display:inline-block;
            text-decoration:none;
            text-align:center;
            border-radius:10px;
            padding:9px 12px;
            font-weight:900;
            font-size:13px;
            border:1px solid #e5e7eb;
            color:#111827;
            background:#fff;
            flex:1;
        }
        .btn:hover{
            background:#f9fafb;
        }
        .btn-primary{
            background:#2563eb;
            color:#fff;
            border-color:#2563eb;
        }
        .btn-primary:hover{
            background:#1e40af;
            border-color:#1e40af;
        }
        .muted-small{
            color:#6b7280;
            font-size:12px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="card">

        <div class="topbar">
            <div>
                <h1 class="page-title" style="margin:0;">Zapatos</h1>
                <div class="muted-small">Catálogo demo (3 productos) • estilo ecommerce</div>
            </div>

            <div class="search">
                <input type="text" placeholder="Buscar (demo: no filtra aún)">
                <span class="chip">🚚 Envío rápido</span>
            </div>

            <a href="/product/create" class="btn btn-primary" style="flex:0 0 auto;">+ Agregar</a>
        </div>

        
        <div class="grid-products">

            <!-- 1) Adidas -->
            <div class="p-card">
                <div class="p-imgwrap">
                    <img src="{{ asset('img/zapatos/adidas.jpg') }}" alt="Adidas Forum Low" class="p-img">
                </div>
                <div class="p-body">
                    <div class="p-badge">Disponible</div>
                    <h3 class="p-title">Adidas Forum Low</h3>
                    <p class="p-desc">Estilo urbano clásico, cómodo y versátil para diario.</p>

                    <div class="p-row">
                        <div class="p-price">$480.000</div>
                        <div class="muted-small">⭐ 4.7</div>
                    </div>

                    <div class="p-actions">
                        <a href="/product/adidas" class="btn btn-primary">Ver detalle</a>
                        <a href="/product/create" class="btn">Comprar</a>
                    </div>
                </div>
            </div>

            <!-- 2) Nike -->
            <div class="p-card">
                <div class="p-imgwrap">
                    <img src="{{ asset('img/zapatos/nike.jpg') }}" alt="Nike Air Max Plus" class="p-img">
                </div>
                <div class="p-body">
                    <div class="p-badge">Disponible</div>
                    <h3 class="p-title">Nike Air Max Plus</h3>
                    <p class="p-desc">Diseño deportivo con amortiguación para uso diario.</p>

                    <div class="p-row">
                        <div class="p-price">$520.000</div>
                        <div class="muted-small">⭐ 4.8</div>
                    </div>

                    <div class="p-actions">
                        <a href="/product/nike" class="btn btn-primary">Ver detalle</a>
                        <a href="/product/create" class="btn">Comprar</a>
                    </div>
                </div>
            </div>

            <!-- 3) Off-White -->
            <div class="p-card">
                <div class="p-imgwrap">
                    <img src="{{ asset('img/zapatos/off-white.jpg') }}" alt="Off-White Low" class="p-img">
                </div>
                <div class="p-body">
                    <div class="p-badge">Premium</div>
                    <h3 class="p-title">Off-White Low</h3>
                    <p class="p-desc">Modelo premium con estilo moderno y materiales top.</p>

                    <div class="p-row">
                        <div class="p-price">$690.000</div>
                        <div class="muted-small">⭐ 4.9</div>
                    </div>

                    <div class="p-actions">
                        <a href="/product/off-white" class="btn btn-primary">Ver detalle</a>
                        <a href="/product/create" class="btn">Comprar</a>
                    </div>
                </div>
            </div>

        </div>

        <div style="margin-top:16px;">
            <a class="back" href="/">← Volver al inicio</a>
        </div>

    </div>
</div>

</body>
</html>
