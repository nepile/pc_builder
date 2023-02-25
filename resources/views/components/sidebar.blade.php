
    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background: @if(auth()->user()->role == 'admin') #1167B1 @else #563d7c @endif;">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
            <img src="{{ asset('img/logo.jpg') }}" width="40" class="rounded" alt="logo">
            <div class="sidebar-brand-text mx-3">PC Builder</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item @if($id_page == 1) active @endif">
            <a class="nav-link" href="{{ route('dashboard') }}">
                <i class="fas fa-fw fa-home"></i>
                <span>Dashboard</span>
            </a>
        </li>

        @if (auth()->user()->role == 'admin')
        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Manajemen
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item @if($id_page == 2) active @endif">
            <a class="nav-link" href="{{ route('komponen') }}">
                <i class="fas fa-fw fa-cog"></i>
                <span>Manajemen Komponen</span>
            </a>
        </li>
        
        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item @if($id_page == 3) active @endif">
            <a class="nav-link" href="{{ route('simulator') }}">
                <i class="fas fa-fw fa-users"></i>
                <span>Manajemen Simulator</span>
            </a>
        </li>
        @endif

        @if (auth()->user()->role == 'simulator')
        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item @if($id_page == 4) active @endif">
            <a class="nav-link" href="{{ route('buat_rakitan') }}">
                <i class="fas fa-fw fa-desktop"></i>
                <span>Buat Rakitan</span>
            </a>
        </li>
        
        <li class="nav-item @if($id_page == 5) active @endif">
            <a class="nav-link" href="{{ route('rakitanku') }}">
                <i class="fas fa-fw fa-rocket"></i>
                <span>Rakitanku</span>
            </a>
        </li>
        @endif

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->