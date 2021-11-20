<?php include "../../config.php";

if (isset($_POST['submit'])) {
    $id = $_GET['id'];
    $jenis_kamar_id = $_POST['jenis_kamar_id'];
    $tempat_tidur_id = $_POST['tempat_tidur_id'];
    $no_kamar = $_POST['no_kamar'];
    $lantai = $_POST['lantai'];
    $bebas_rokok = $_POST['bebas_rokok'];
    $status_kamar = $_POST['status_kamar'];
    $harga = mysqli_query ($conn, "SELECT harga FROM jenis_kamar WHERE jenis_kamar_id = $jenis_kamar_id"); 
    $hasil = mysqli_fetch_row($harga);
    //insert ke tabel
    $query = "UPDATE kamar SET jenis_kamar_id='$jenis_kamar_id',tempat_tidur_id='$tempat_tidur_id',no_kamar='$no_kamar',
    lantai='$lantai',bebas_rokok='$bebas_rokok',status_kamar='$status_kamar',harga='$hasil[0]' WHERE kamar_id=$id";

    // $sql = mysqli_query($conn, "INSERT INTO kamar (jenis_kamar_id, tempat_tidur_id, no_kamar, lantai, bebas_rokok, status_kamar, status_kamar, tgl_masuk, tgl_keluar) 
    // VALUES('$jenis_kamar_id', '$tempat_tidur_id', '$no_kamar', '$lantai', '$bebas_rokok','$status_kamar', '$tgl_masuk', '$tgl_keluar')");

    var_dump($query);
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
<?php include '../layout/head.php' ?>

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
                            <?php
                            // Display selected user data based on id
                            // Getting id from url
                            $id = $_GET['id'];

                            // Fetech user data based on id
                            $result = mysqli_query($conn, "SELECT * FROM kamar WHERE kamar_id=$id");

                            while ($data = mysqli_fetch_array($result)) {
                                $id = $data['kamar_id'];
                                $jenis_kamars_id = $data['jenis_kamar_id'];
                                $tempat_tidurs_id = $data['tempat_tidur_id'];
                                $no_kamar = $data['no_kamar'];
                                $lantai = $data['lantai'];
                                $bebas_rokok = $data['bebas_rokok'];
                                $status_kamar = $data['status_kamar'];
                            }
                            ?>
                            <form method="post" action="" name="submit">
                                <input type="hidden" name="status_kamar" value="available">
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <select class="form-select" aria-label="Default select example" name="jenis_kamar_id">
                                                <option selected>-- Pilih Jenis Kamar --</option>
                                                <?php
                                                $query = "SELECT jenis_kamar_id, jenis_kamar FROM jenis_kamar ORDER BY jenis_kamar_id";
                                                $sql = mysqli_query($conn, $query);

                                                while ($hasil = mysqli_fetch_array($sql)) {
                                                    $jenis_kamar = $hasil['jenis_kamar'];
                                                    $jenis_kamar_id = $hasil['jenis_kamar_id'];
                                                ?>
                                                    <option value="<?php echo $jenis_kamar_id ?>" 
                                                    <?php 
                                                    if($jenis_kamar_id == $jenis_kamars_id){ 
                                                        echo "selected"; } ?>>
                                                        <?php echo $jenis_kamar ?></option>
                                                <?php } ?>
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
                                                $sql = mysqli_query($conn, $query);

                                                while ($hasil = mysqli_fetch_array($sql)) {
                                                    $jenis_tempat_tidur = $hasil['jenis_tempat_tidur'];
                                                    $tempat_tidur_id = $hasil['tempat_tidur_id'];
                                                ?>
                                                    <option value="<?php echo $tempat_tidur_id ?>" <?php 
                                                    if($tempat_tidur_id == $tempat_tidurs_id){ 
                                                        echo "selected"; } ?>><?php echo $jenis_tempat_tidur ?></option>
                                                <?php } ?>
                                            </select>
                                            <label for="tempat_tidur_id">Tempat Tidur</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-4">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" id="no_kamar" type="text" placeholder="Masukkan Nomor Kamar" value="<?php echo $no_kamar ?>" name="no_kamar">
                                            <label for="no_kamar">Nomor Kamar</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating">
                                            <input class="form-control" value="<?php echo $lantai ?>" id="lantai" type="text" placeholder="Masukkan Lantai" name="lantai">
                                            <label for="lantai">Lantai</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="inputFirstName">Bebas Rokok</label>
                                        <div class="form-floating">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="bebas_rokok" id="bebas_rokok" value="0" <?php 
                                                    if('0' == $bebas_rokok){ 
                                                        echo "checked"; } ?>>
                                                <label class="form-check-label" for="bebas_rokok">Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="bebas_rokok" id="bebas_rokok" value="1" <?php 
                                                    if('1' == $bebas_rokok){ 
                                                        echo "checked"; } ?>>
                                                <label class="form-check-label" for="bebas_rokok">Tidak</label>
                                            </div>
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
    <?php include '../layout/scripts.php' ?>

</body>

</html>