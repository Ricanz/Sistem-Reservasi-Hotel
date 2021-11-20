<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <?php
                if ($_SESSION['role'] == 'admin') {
                ?>
                    <div class="sb-sidenav-menu-heading">Core</div>
                    <a class="nav-link" href="index.html">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>
                    <div class="sb-sidenav-menu-heading">Internal</div>
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#kamar" aria-expanded="false" aria-controls="collapsePages">
                        <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                        Kamar
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="kamar" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="../kamar/index.php">Data Kamar</a>
                            <a class="nav-link" href="../kamar/tambah.php">Tambah Data Kamar</a>
                        </nav>
                    </div>
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#tempat-tidur" aria-expanded="false" aria-controls="collapsePages">
                        <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                        Tempat Tidur
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="tempat-tidur" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="../tempat-tidur/index.php">Data Tempat Tidur</a>
                            <a class="nav-link" href="../tempat-tidur/tambah.php">Tambah Data Tempat Tidur</a>
                        </nav>
                    </div>
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#data-pengguna" aria-expanded="false" aria-controls="collapsePages">
                        <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                        Data Pengguna
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="data-pengguna" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="../pengguna/index.php">Data Pengguna</a>
                            <a class="nav-link" href="../pengguna/tambah.php">Tambah Data Pengguna</a>
                        </nav>
                    </div>
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#jenis-kamar" aria-expanded="false" aria-controls="collapsePages">
                        <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                        Jenis Kamar
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="jenis-kamar" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="../jenis-kamar/index.php">Data Jenis Kamar</a>
                            <a class="nav-link" href="../jenis-kamar/tambah.php">Tambah Data Jenis Kamar</a>
                        </nav>
                    </div>
                <?php } ?>


                <div class="sb-sidenav-menu-heading">Eksternal</div>
                <a class="nav-link" href="../pelanggan/index.php">
                    <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                    Data Tamu
                </a>
                <a class="nav-link" href="../pelanggan/tambah.php">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Tambah Data Tamu
                </a>

                <a class="nav-link" href="../pembayaran/index.php">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Pembayaran
                </a>
                <div class="sb-sidenav-menu-heading">Laporan</div>
                <a class="nav-link" href="../laporan/tahunan.php">
                    <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                    Laporan Tahunan
                </a>
                <a class="nav-link" href="../laporan/bulanan.php">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Laporan Bulanan
                </a>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            <?php echo $_SESSION['username'] ?>
        </div>
    </nav>
</div>