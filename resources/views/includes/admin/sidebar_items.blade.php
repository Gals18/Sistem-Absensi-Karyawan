<li class="nav-item has-treeview">
    <a href="#" class="nav-link text-white">
        <i class="nav-icon fa fa-calendar-check-o text-white"></i>
        <p class="text-white">
            Karyawan
            <i class="fas fa-angle-left right"></i>
            {{-- <span class="badge badge-info right">3</span> --}}
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('admin.employees.create') }}" class="nav-link text-white">
                <i class="far fa-circle nav-icon text-white"></i>
                <p class="text-white">Tambah Karyawan</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.employees.index') }}" class="nav-link text-white">
                <i class="far fa-circle nav-icon text-white"></i>
                <p class="text-white">Daftar Karyawan</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.employees.attendance') }}" class="nav-link text-white">
                <i class="far fa-circle nav-icon text-white"></i>
                <p class="text-white">Absensi Karyawan</p>
            </a>
        </li>
    </ul>
</li>
<li class="nav-item has-treeview">
    <a href="#" class="nav-link text-white">
        <i class="nav-icon fa fa-unlock-alt text-white"></i>
        <p class="text-white">
            Daftar Cuti Karyawan
            <i class="fas fa-angle-left right"></i>
            {{-- <span class="badge badge-info right">2</span> --}}
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('admin.leaves.index') }}" class="nav-link text-white">
                <i class="far fa-circle nav-icon text-white"></i>
                <p class="text-white">Cuti</p>
            </a>
        </li>
        <!-- <li class="nav-item">
            <a href="{{ route('admin.expenses.index') }}" class="nav-link text-white">
                <i class="far fa-circle nav-icon text-white"></i>
                <p class="text-white">Expenses</p>
            </a>
        </li> -->
    </ul>
</li>
