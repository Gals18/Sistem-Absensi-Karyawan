<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-primary elevation-4" style = "z-index: 1040 !important;">
    <!-- Brand Logo -->
    <a 
    @can('admin-access')
        href="{{ route('admin.index') }}"
    @endcan
    @can('employee-access')
        href="{{ route('employee.index') }}"
    @endcan
    class="brand-link text-center">
        <img
            src="../img/logo-rskb.png"
            alt="logo gggg"
            width="50"
            class="brand-image "
            style="opacity: 0.7;"
        />
        {{-- <img src="{{ url('public/img/log-rskbo.png') }}" alt="Logo"> --}}
        <b> <small class="brand-text ">RSKB Ring Road Selatan</small></b>
       
    </a>

    <!-- Sidebar -->
    <div class="sidebar bg-navy">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                @can('admin-access')
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt text-white"></i>
                        <p class="text-white">Dashboard Admin</p>
                    </a>
                </li>
                @include('includes.admin.sidebar_items')
                @endcan
                @can('employee-access')
                <li class="nav-item">
                    <a href="{{ route('employee.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt text-white"></i>
                        <p class="text-white">Dashboard Karyawan</p>
                    </a>
                </li>
                @include('includes.employee.sidebar_items')
                @endcan
            </ul>
        </nav>
    </div>
    <!-- /.sidebar -->
</aside>
