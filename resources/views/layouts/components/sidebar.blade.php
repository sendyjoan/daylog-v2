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
            
            <li class="menu-header">Portal Menu</li>
            <li class=""><a href="#" class="nav-link"><i class="fas fa-clipboard-check"></i><span>Change Request</span></a></li>
            <li class=""><a href="#" class="nav-link"><i class="fas fa-bug"></i><span>Bug Fixing</span></a></li>
            <li class=""><a href="#" class="nav-link"><i class="fas fa-calendar-day"></i><span>Daily Activity</span></a></li>

            <li class="menu-header">Sales Menu</li>
            <li class=""><a href="#" class="nav-link"><i class="fas fa-shapes"></i><span>Demo Request</span></a></li>
            <li class=""><a href="#" class="nav-link"><i class="fas fa-cash-register"></i><span>Order Request</span></a></li>
            <li class=""><a href="#" class="nav-link"><i class="fas fa-check-circle"></i><span>Order Validation</span></a></li>
            <li class=""><a href="#" class="nav-link"><i class="fas fa-print"></i><span>Invoice</span></a></li>
            
            <li class="menu-header">Recruitment Menu</li>
            <li class="nav-item dropdown">
              <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-universal-access"></i> <span>Master Menu</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="#">Vacancies</a></li>
                <li><a class="nav-link" href="#">Applicants</a></li>
              </ul>
            </li>
            <li class=""><a href="#" class="nav-link"><i class="fas fa-envelope-open-text"></i><span>CV Screning</span></a></li>
            <li class=""><a href="#" class="nav-link"><i class="fas fa-vial"></i><span>Psikotest</span></a></li>
            <li class=""><a href="#" class="nav-link"><i class="fas fa-user-check"></i><span>HR Interview</span></a></li>
            <li class=""><a href="#" class="nav-link"><i class="fas fa-user-graduate"></i><span>User Interview</span></a></li>
            <li class=""><a href="#" class="nav-link"><i class="fas fa-id-card"></i><span>Offering Candidate</span></a></li>

            <li class="menu-header">Report</li>
            <li class=""><a href="#" class="nav-link"><i class="fas fa-book"></i><span>Report Change R.</span></a></li>
            <li class=""><a href="#" class="nav-link"><i class="fas fa-book"></i><span>Report Bug Fix</span></a></li>
            <li class=""><a href="#" class="nav-link"><i class="fas fa-book"></i><span>Report Daily A.</span></a></li>
            <li class=""><a href="#" class="nav-link"><i class="fas fa-book"></i><span>Report Order</span></a></li>
            <li class=""><a href="#" class="nav-link"><i class="fas fa-book"></i><span>Report Recruitment</span></a></li>

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
                <li><a class="nav-link" href="{{route('servers.index')}}">Server Apps</a></li>
                <li><a class="nav-link" href="#">Apps Modules</a></li>
                <li><a class="nav-link" href="#">Modules Menu</a></li>
              </ul>
            </li>

            <li class=""><a href="#" class="nav-link"><i class="fas fa-ticket-alt"></i><span>Master Voucher</span></a></li>
            @show
      </ul>
  </aside>