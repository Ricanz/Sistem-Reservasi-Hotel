<?php require "store.php";?>
<!DOCTYPE html>
<html lang="en">


<!-- Head -->
<?php include 'layout/head.php' ?>

<body class="sb-nav-fixed">
    <!-- Navbar -->
    <?php include '../../layout/navbar.php' ?>

    <div id="layoutSidenav">
        <!-- Sidebar -->
        <?php include '../../layout/sidebar.php' ?>

        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Data Kamar</h1>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            DataTable Example
                        </div>
                        <div class="card-body">
                            <form method="post" action="store.php" >
                                <input type="hidden" name="status_kamar" value="available">
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <select class="form-select" aria-label="Default select example" name="jenis_kamar_id">
                                                <option selected>-- Pilih Jenis Kamar --</option>
                                                    <?php
                                                        $query = "SELECT jenis_kamar_id, jenis_kamar FROM jenis_kamar ORDER BY jenis_kamar_id";
                                                        $sql = mysqli_query ($conn, $query);
                                                        
                                                        while ($hasil = mysqli_fetch_array ($sql)) {
                                                            $jenis_kamar = $hasil['jenis_kamar'];
                                                            $jenis_kamar_id = $hasil['jenis_kamar_id'];
                                                    ?>
                                                <option value="<?php echo $jenis_kamar_id ?>"><?php echo $jenis_kamar ?></option>
                                                <?php }?>
                                            </select>
                                            <label for="jenis_kamar_id">Jenis Kamar</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <select class="form-select" aria-label="Default select example" name="tempat_tidur_id">
                                                <option selected>-- Pilih Tempat Tidur --</option>
                                                    <?php
                                                        $query = "SELECT tempat_tidur_id, jenis_tempat_tidur FROM tempat_tidur ORDER BY tempat_tidur_id";
                                                        $sql = mysqli_query ($conn, $query);
                                                        
                                                        while ($hasil = mysqli_fetch_array ($sql)) {
                                                            $jenis_tempat_tidur = $hasil['jenis_tempat_tidur'];
                                                            $tempat_tidur_id = $hasil['tempat_tidur_id'];
                                                    ?>
                                                <option value="<?php echo $tempat_tidur_id ?>"><?php echo $jenis_tempat_tidur ?></option>
                                                <?php }?>
                                            </select>
                                            <label for="tempat_tidur_id">Tempat Tidur</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-4">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" id="no_kamar" type="text" placeholder="Masukkan Nomor Kamar" name="no_kamar">
                                            <label for="no_kamar">Nomor Kamar</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating">
                                            <input class="form-control" id="lantai" type="text" placeholder="Masukkan Lantai" name="lantai">
                                            <label for="lantai">Lantai</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="inputFirstName">Bebas Rokok</label>
                                        <div class="form-floating">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="bebas_rokok" id="bebas_rokok" value="0">
                                                <label class="form-check-label" for="bebas_rokok">Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="bebas_rokok" id="bebas_rokok" value="1">
                                                <label class="form-check-label" for="bebas_rokok">Tidak</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" id="tgl_masuk" type="date" placeholder="" name="tgl_masuk">
                                            <label for="tgl_masuk">Tanggal Masuk</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input class="form-control" id="tgl_keluar" type="date" placeholder="" name="tgl_keluar">
                                            <label for="tgl_keluar">Tanggal Keluar</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4 mb-0">
                                    <div class="d-grid">
                                        <button type="submit" name="submit" class="btn btn-primary btn-block">Tambah Kamar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </main>
            <!-- Footer -->
            <?php include '../../layout/footer.php' ?>
        </div>
    </div>
    <!-- Scripts -->
    <?php include 'layout/scripts.php' ?>
    
</body>

</html>