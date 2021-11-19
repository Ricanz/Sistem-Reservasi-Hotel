<?php include "../../config.php";

if (isset($_POST['submit'])) {
    $id = $_GET['id'];
    $jenis_tempat_tidur = $_POST['jenis_tempat_tidur'];
    $jumlah_bed_tersedia = $_POST['jumlah_bed_tersedia'];

    //insert ke tabel
    $query ="UPDATE tempat_tidur SET jenis_tempat_tidur='$jenis_tempat_tidur',jumlah_bed_tersedia='$jumlah_bed_tersedia' WHERE tempat_tidur_id=$id";


    $sql = mysqli_query($conn, $query) or die(mysqli_error());
    if ($sql) {
        $pesan = "Data jenis kamar berhasil ditambah!";
        header('Location: index.php?pesan=". $pesan ."');
    } else {
        echo "<h2><font color=red>Data gagal ditambahkan</font></h2>";
    }
    

    // var_dump($query, $sql);
}
?>
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
                    
                    <h1 class="mt-4">Sunting Tempat Tidur</h1>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            DataTable Example
                        </div>
                        <?php
                            // Display selected user data based on id
                            // Getting id from url
                            $id = $_GET['id'];

                            // Fetech user data based on id
                            $result = mysqli_query($conn, "SELECT * FROM tempat_tidur WHERE tempat_tidur_id=$id");

                            while ($data = mysqli_fetch_array($result)) {
                                $jenis_tempat_tidur = $data['jenis_tempat_tidur'];
                                $jumlah_bed_tersedia = $data['jumlah_bed_tersedia'];
                            }
                            ?>
                        <div class="card-body">
                            <form method="post" action="" name="submit">
                                <input type="hidden" name="status_kamar" value="available">
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" id="jenis_tempat_tidur" type="text" placeholder="Masukkan Nomor Kamar" name="jenis_tempat_tidur" value="<?php echo $jenis_tempat_tidur?>">
                                            <label for="jenis_tempat_tidur">Jenis Tempat Tidur</label>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" id="jumlah_bed_tersedia" type="text" placeholder="Masukkan Nomor Kamar" name="jumlah_bed_tersedia" value="<?php echo $jumlah_bed_tersedia?>">
                                            <label for="jumlah_bed_tersedia">Jumlah Tempat Tidur Tersedia</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4 mb-0">
                                    <div class="d-grid">
                                        <button type="submit" name="submit" class="btn btn-primary btn-block">Tambah Tempat Tidur</button>
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