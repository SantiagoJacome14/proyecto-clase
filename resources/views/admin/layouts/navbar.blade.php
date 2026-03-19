<nav class="admin-navbar">
    <div class="admin-navbar-brand">
        <a href="{{ route('admin.index') }}">Admin Shoes</a>
    </div>

    <ul class="admin-navbar-links">
        <li><a href="{{ route('admin.index') }}">Dashboard</a></li>
        <li><a href="{{ route('products.index') }}">Ver catálogo</a></li>
        <li><a href="{{ route('home') }}">Ir al inicio</a></li>
    </ul>
</nav>