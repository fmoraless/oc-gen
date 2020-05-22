<!-- Navigation -->
<h6 class="navbar-heading text-muted">Gestion de datos</h6>
<ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" href="./index.html">
            <i class="ni ni-tv-2 text-primary"></i> Dashboard
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="./examples/icons.html">
            <i class="ni ni-bus-front-12 text-blue"></i> Clientes
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="./examples/maps.html">
            <i class="ni ni-bag-17 text-orange"></i> Productos
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="./examples/profile.html">
            <i class="ni ni-single-copy-04 text-yellow"></i> Ordenes
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="./examples/tables.html">
            <i class="ni ni-bullet-list-67 text-red"></i> Cotizaciones
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="" onclick="event.preventDefault();
                document.getElementById('formLogout').submit();">
            <i class="ni ni-key-25 text-info"></i> Cerrar sesión
        </a>
        <form action="{{ route('logout') }}" method="POST" style="display: none;" id="formLogout">
            @csrf

        </form>
    </li>
</ul>
<!-- Divider -->
<hr class="my-3">
<!-- Heading -->
<h6 class="navbar-heading text-muted">Control de acceso</h6>
<!-- Navigation -->
<ul class="navbar-nav mb-md-3">
    <li class="nav-item">
        <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/getting-started/overview.html">
            <i class="ni ni-single-02"></i> Usuarios
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/foundation/colors.html">
            <i class="ni ni-settings-gear-65"></i> Roles & Permisos
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/components/alerts.html">
            <i class="ni ni-support-16"></i> Acerca de
        </a>
    </li>
</ul>
