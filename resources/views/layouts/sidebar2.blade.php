<li class="nav-section">
    <span class="sidebar-mini-icon">
        <i class="fa fa-ellipsis-h"></i>
    </span>
    <h4 class="text-section">Data</h4>
</li>

<li class="nav-item @yield('MasyarakatActive')">
    <a href="{{ route('petugas.masyarakat.index') }}">
        <i class="fas fa-users"></i>
        <p>Masyarakat</p>
    </a>
</li>

<li class="nav-section">
    <span class="sidebar-mini-icon">
        <i class="fa fa-ellipsis-h"></i>
    </span>
    <h4 class="text-section">Laporan</h4>
</li>

<li class="nav-item @yield('LaporanActive')">
    <a href="{{ route('petugas.laporan.index')}}">
        <i class="fas fa-clipboard"></i>
        <p>Pengaduan</p>
    </a>
</li>


<li class="nav-item @yield('CetakActive')">
    <a href="{{ route('petugas.cetak.index')}}">
        <i class="fas fa-print"></i>
        <p>Cetak Laporan</p>
    </a>
</li>