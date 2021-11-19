<?php
include "../../config.php";

if (isset($_POST['submit'])) {
    $id = $_GET['id'];
    $jenis_kamar = $_POST['jenis_kamar'];
    $kode_jenis_kamar = $_POST['kode_jenis_kamar'];
    $kapasitas = $_POST['kapasitas'];
    $deskripsi_kamar = $_POST['deskripsi_kamar'];

    //foto
    // $namafoto = $_FILES['file']['name'];
    // $tipe = $_FILES['file']['type'];
    // $ukuran = $_FILES['file']['size'];
    // $lokasi = $_FILES['file']['tmp_name'];
    // $tmp = "img/" . $namafoto;

    // if (strlen($namafoto) > 0) {
    //     //upload
    //     if (is_uploaded_file($lokasi)) {
    //         move_uploaded_file($lokasi, $tmp);
    //     }
    // }

    //insert ke tabel
    $query ="UPDATE jenis_kamar SET jenis_kamar='$jenis_kamar',kode_jenis_kamar='$kode_jenis_kamar',kapasitas='$kapasitas',
    deskripsi_kamar='$deskripsi_kamar' WHERE jenis_kamar_id=$id";


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
<?php  include '../layout/head.php'   ?>

<body class="sb-nav-fixed">
    <!-- Navbar -->
    <?php include '../../layout/navbar.php' ?>

    <div id="layoutSidenav">
        <!-- Sidebar -->
        <?php include '../../layout/sidebar.php' ?>

        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">

                    <h1 class="mt-4">Sunting Jenis Kamar</h1>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            DataTable Example
                        </div>
                        <div class="card-body">
                            <?php
                            // Display selected user data based on id
                            // Getting id from url
                            $id = $_GET['id'];

                            // Fetech user data based on id
                            $result = mysqli_query($conn, "SELECT * FROM jenis_kamar WHERE jenis_kamar_id=$id");

                            while ($data = mysqli_fetch_array($result)) {
                                $jenis_kamar_id = $data['jenis_kamar_id'];
                                $jenis_kamar = $data['jenis_kamar'];
                                $kode_jenis_kamar = $data['kode_jenis_kamar'];
                                $kapasitas = $data['kapasitas'];
                                $deskripsi_kamar = $data['deskripsi_kamar'];
                            }
                            ?>
                            <form method="post" action="" name="submit">
                                <input type="hidden" name="status_kamar" value="available">
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" id="jenis_kamar" type="text" value="<?php echo $jenis_kamar ?>" name="jenis_kamar">
                                            <label for="jenis_kamar">Jenis Kamar</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" id="kode_jenis_kamar" type="text" value="<?php echo $kode_jenis_kamar ?>" name="kode_jenis_kamar">
                                            <label for="kode_jenis_kamar">Kode Jenis Kamar</label>

                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-4">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" id="kapasitas" type="text" value="<?php echo $kapasitas ?>" name="kapasitas">
                                            <label for="kapasitas">Kapasitas</label>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-floating">
                                            <input class="form-control" id="foto" type="file" placeholder="Masukkan Foto" name="foto">
                                            <label for="foto">Masukkan Foto</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <div class="form-floating mb-3">
                                            <textarea class="form-control" name="deskripsi_kamar" id="deskripsi_kamar" cols="" rows="">
                                            <?php echo $deskripsi_kamar ?>
                                            </textarea>
                                            <label for="deskripsi_kamar">Deskripsi Kamar</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4 mb-0">
                                    <div class="d-grid">
                                        <button type="submit" name="submit" class="btn btn-primary btn-block">Sunting Jenis Kamar</button>
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
    <?php include '../layout/scripts.php' ?>

</body>

</html>