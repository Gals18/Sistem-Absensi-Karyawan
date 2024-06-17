<li class="nav-item has-treeview">
    <a href="#" class="nav-link">
        <i class="nav-icon fa fa-calendar-check-o" style="color: white;"></i>
        <p style="color: white;">
            Absensi
            <i class="fas fa-angle-left right" style="color: white;"></i>
            {{-- <span class="badge badge-info right">2</span> --}}
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a
                href="{{ route('employee.attendance.create') }}"
                class="nav-link"
                style="color: white;"
            >
                <i class="far fa-circle nav-icon" style="color: white;"></i>
                <p>Absensi Hari ini</p>
            </a>
        </li>
        <li class="nav-item">
            <a
                href="{{ route('employee.attendance.index') }}"
                class="nav-link"
                style="color: white;"
            >
                <i class="far fa-circle nav-icon" style="color: white;"></i>
                <p>Daftar Absensi</p>
            </a>
        </li>
    </ul>
</li>
<li class="nav-item has-treeview">
    <a href="#" class="nav-link">
        <i class="nav-icon fa fa-calendar-minus-o" style="color: white;"></i>
        <p style="color: white;">
            Cuti
            <i class="fas fa-angle-left right" style="color: white;"></i>
            {{-- <span class="badge badge-info right">2</span> --}}
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a
                href="{{ route('employee.leaves.create') }}"
                class="nav-link"
                style="color: white;"
            >
                <i class="far fa-circle nav-icon" style="color: white;"></i>
                <p>Ajukan Cuti</p>
            </a>
        </li>
        <li class="nav-item">
            <a
                href="{{ route('employee.leaves.index') }}"
                class="nav-link"
                style="color: white;"
            >
                <i class="far fa-circle nav-icon" style="color: white;"></i>
                <p>Daftar Cuti</p>
            </a>
        </li>
    </ul>
</li>
