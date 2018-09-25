<nav class="mt-2">
  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <!-- Add icons to the links using the .nav-icon class
         with font-awesome or any other icon font library -->
    <li class="nav-item has-treeview menu-open">
      <a href="#" class="nav-link active">
        <i class="nav-icon fa fa-dashboard"></i>
        <p>
          Panel
          <i class="right fa fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="{{ route('admin.parkings.index') }}" class="nav-link {{ request()->is('admin/estacionamientos') ? 'active' : '' }}">
            <i class="fa fa-car nav-icon"></i>
            <p>Listar Estacionamientos</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.inspectores.index') }}" class="nav-link {{ request()->is('admin/inspectores') ? 'active' : '' }}">
            <i class="fa fa-users nav-icon"></i>
            <p>Listar Inspectores</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link {{ request()->is('admin/users') ? 'active' : '' }}">
            <i class="fa fa-bars nav-icon"></i>
            <p>Listar usuario</p>
          </a>
        </li>
      </ul>
    </li>

  </ul>
</nav>
