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
            <li class=""><a href="#" class="nav-link"><i class="fas fa-signal"></i><span>Dashboard</span></a></li>

            <li class="menu-header">Settings</li>
            
            <li class=""><a href="#" class="nav-link"><i class="fas fa-users"></i><span>User Management</span></a></li>
            
            <li class="nav-item dropdown">
              <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-universal-access"></i> <span>Access Control</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="#">User Roles</a></li>
                <li><a class="nav-link" href="#">Roles Permissions</a></li>
                <li><a class="nav-link" href="#">Permissions Management</a></li>
              </ul>
            </li>

            <li class="menu-header">Master Data</li>

            <li class=""><a href="#" class="nav-link"><i class="fas fa-calendar-week"></i><span>Master Day</span></a></li>

            <li class="nav-item dropdown">
              <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-dice-d6"></i> <span>Apps Control</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="#">Server Apps</a></li>
                <li><a class="nav-link" href="#">Apps Modules</a></li>
                <li><a class="nav-link" href="#">Modules Menu</a></li>
              </ul>
            </li>
        @show
      </ul>
  </aside>