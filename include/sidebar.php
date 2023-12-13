<ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <img class="img-profile rounded-sm w-50" src="<?= $base_url ?>assets/foto/logo.png">
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="<?= $base_url ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link" href="<?= $base_url ?>siswa/tampil.php">
            <i class="fas fa-fw fa-cog"></i>
            <span>Data Siswa</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?= $base_url ?>guru_pendamping/tampil.php">
            <i class="fas fa-fw fa-cog"></i>
            <span>Data Guru Pendamping</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?= $base_url ?>jadwal_terapi/tampil.php">
            <i class="fas fa-fw fa-cog"></i>
            <span>Jadwal Terapi</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?= $base_url ?>terapi/tampil.php">
            <i class="fas fa-fw fa-cog"></i>
            <span>Data Terapis</span></a>
    </li>



    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Data Laporan</span>
        </a>

        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?= $base_url ?>laporan/laporan-perkembangan">Laporan Perkembangan</a>
                <a class="collapse-item" href="<?= $base_url ?>laporan/terapis/tampil.php">Terapis</a>
            </div>
        </div>
    </li>

    <!--akhir nav-item-->
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>