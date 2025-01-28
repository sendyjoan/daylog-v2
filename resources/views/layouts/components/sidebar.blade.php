<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="index.html">Starter Code</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="index.html">LSC</a>
    </div>
    <ul class="sidebar-menu">
        @section('sidebar')
            <li class="menu-header">Dashboard</li>
            <li class=""><a href="#" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a></li>

            <li class="menu-header">Settings</li>

            <li class=""><a href="#" class="nav-link"><i class="fas fa-users"></i><span>User Management</span></a></li>

            <li class="nav-item dropdown">
              <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Access Control</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="#">User Roles</a></li>
                <li><a class="nav-link" href="#">Roles Permissions</a></li>
                <li><a class="nav-link" href="#">Permissions Management</a></li>
              </ul>
            </li>

        @show
      </ul>

      {{-- <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
        <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
          <i class="fas fa-rocket"></i> Documentation
        </a>
      </div> --}}
  </aside>