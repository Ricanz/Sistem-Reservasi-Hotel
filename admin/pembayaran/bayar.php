<?php include "../../config.php";

if (isset($_POST['submit'])) {
    $id = $_GET['id'];
    $nama_pelanggan = $_POST['nama_pelanggan'];
    $no_identitas = $_POST['no_identitas'];
    $no_hp = $_POST['no_hp'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $orang = $_POST['orang'];
    $status = $_POST['status'];
    $kamar_id = $_POST['kamar_id'];

    //insert ke tabel
    $query = "UPDATE pelanggan SET nama_pelanggan='$nama_pelanggan',no_identitas='$no_identitas',no_hp='$no_hp',
    alamat='$alamat',email='$email', orang='$orang', status='$status',kamar_id='$kamar_id' WHERE pelanggan_id=$id";



    //insert ke tabel
    // $query = "INSERT INTO pelanggan	values('', '$nama_pelanggan', '$no_identitas', '$no_hp', '$alamat','$email', '$orang', '$status', '$kamar_id', '$tgl_masuk', '$tgl_keluar')";

    //update total jenis kamar
    var_dump($query);
    // $sql = mysqli_query($conn, "INSERT INTO kamar (jenis_kamar_id, tempat_tidur_id, no_kamar, lantai, bebas_rokok, status_kamar, status_kamar, tgl_masuk, tgl_keluar) 
    // VALUES('$jenis_kamar_id', '$tempat_tidur_id', '$no_kamar', '$lantai', '$bebas_rokok','$status_kamar', '$tgl_masuk', '$tgl_keluar')");


    $sql = mysqli_query($conn, $query) or die(mysqli_error());
    if ($sql) {
        $pesan = "Data kamar berhasil ditambah!";
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

                    <h1 class="mt-4">Checkout -> Pembayaran</h1>
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
                            $result = mysqli_query($conn, "SELECT * FROM pelanggan WHERE pelanggan_id=$id");

                            while ($data = mysqli_fetch_array($result)) {
                                $id = $data['pelanggan_id'];
                                $nama_pelanggan = $data['nama_pelanggan'];
                                $no_identitas = $data['no_identitas'];
                                $no_hp = $data['no_hp'];
                                $email = $data['email'];
                                $orang = $data['orang'];
                                $status = $data['status'];
                                $harga = $data['harga'];
                                $kamars_id = $data['kamar_id'];
                                
                            }
                            ?>
                            <form method="post" action="" name="submit">
                                <div class="row mb-3">
                                    <div class="col-md-4">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" id="nama_pelanggan" type="text" placeholder="Masukkan Nomor Kamar" name="nama_pelanggan" value="<?php echo $nama_pelanggan ?>" disabled>
                                            <label for="nama_pelanggan">Nama Pelanggan</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating">
                                            <input class="form-control" id="no_identitas" type="text" placeholder="Masukkan Lantai" name="no_identitas" value="<?php echo $no_identitas ?>" disabled>
                                            <label for="no_identitas">Nomor Identitas</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating">
                                            <input class="form-control" id="no_hp" type="text" placeholder="Masukkan Lantai" name="no_hp" value="<?php echo $no_hp ?>" disabled>
                                            <label for="no_hp">Nomor Handphone</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" id="email" type="text" placeholder="Masukkan Nomor Kamar" name="email" value="<?php echo $email ?>" disabled>
                                            <label for="email">Email</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-4">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" id="orang" type="text" placeholder="Masukkan Nomor Kamar" name="orang" value="<?php echo $orang ?>" disabled>
                                            <label for="orang">Total Pengunjung</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating">
                                            <input class="form-control" id="harga" type="text" placeholder="Masukkan Lantai" name="harga" value="<?php echo $harga ?>" disabled>
                                            <label for="harga">Harga</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating">
                                            <select class="form-select" aria-label="Default select example" name="kamar_id" disabled>
                                                <option selected>-- Pilih Kamar --</option>
                                                <?php
                                                $query = "SELECT kamar_id, no_kamar FROM kamar ORDER BY kamar_id";
                                                $sql = mysqli_query($conn, $query);

                                                while ($hasil = mysqli_fetch_array($sql)) {
                                                    $kamar_id = $hasil['kamar_id'];
                                                    $no_kamar = $hasil['no_kamar'];
                                                ?>
                                                    <option value="<?php echo $kamar_id ?>" <?php 
                                                    if($kamar_id == $kamars_id){ 
                                                        echo "selected"; } ?> disabled
                                                        ><?php echo $no_kamar ?></option>
                                                <?php } ?>
                                            </select>
                                            <label for="kamar_id">No Kamar</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" id="total_akhir" type="text" placeholder="Masukkan Nomor Kamar" name="total_akhir">
                                            <label for="total_akhir">Total Harga</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input class="form-control" id="pajak" type="text" placeholder="Masukkan Lantai" name="pajak" value="<?php $paj ?>">
                                            <label for="pajak">Pajak</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" id="bayar" type="text" placeholder="Masukkan Nomor Kamar" name="bayar">
                                            <label for="bayar">Bayar</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4 mb-0">
                                    <div class="d-grid">
                                        <button type="submit" name="submit" class="btn btn-primary btn-block">Checkout</button>
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