<?php include "../../config.php";

if (isset($_POST['submit'])) {
    $id = $_GET['id'];
    $pelanggan_id = $_POST['pelanggan_id'];
    $user_id = $_POST['user_id'];
    $nomor_nota = $_POST['nomor_nota'];
    $hari = $_POST['hari'];
    $total_awal = $_POST['total_awal'];
    $pajak = $_POST['pajak'];
    $total_akhir = $_POST['total_akhir'];
    $bayar = $_POST['bayar'];
    $kembalian = $_POST['kembalian'];
    $kamar_id = $_POST['kamar_id'];
    $tgl_bayar = date("Y-m-d");

    // //insert ke tabel
    // $query = "UPDATE pembayaran SET pelanggan_id='$pelanggan_id',user_id='$user_id',nomor_nota='$nomor_nota',
    // hari='$hari',total_awal='$total_awal', pajak='$pajak', total_akhir='$total_akhir', bayar='$bayar', kembalian='$kembalian' kamar_id='$kamar_id' WHERE pembayaran_id=$id";
    $query1 = "UPDATE pelanggan
    SET status = 1
    WHERE pelanggan_id = $pelanggan_id";

    // insert ke tabel
    $query = "INSERT INTO pembayaran values('', '$pelanggan_id', '$user_id', '$nomor_nota', '$hari', '$kamar_id', '$total_awal', '$pajak', '$total_akhir', '$bayar', '$kembalian', '$tgl_bayar')";

    //update total jenis kamar
    // var_dump($query);

    // $query1 = "DELETE FROM pelanggan WHERE pelanggan_id=$pelanggan_id";

    // $sql = mysqli_query($conn, "INSERT INTO kamar (jenis_kamar_id, tempat_tidur_id, no_kamar, lantai, bebas_rokok, status_kamar, status_kamar, tgl_masuk, tgl_keluar) 
    // VALUES('$jenis_kamar_id', '$tempat_tidur_id', '$no_kamar', '$lantai', '$bebas_rokok','$status_kamar', '$tgl_masuk', '$tgl_keluar')");

    $sql = mysqli_query($conn, $query) or die(mysqli_error());
    $sql = mysqli_query($conn, $query1) or die(mysqli_error());
    // $sql2 = mysqli_query($conn, $query1) or die(mysqli_error());
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
                                $tgl_masuk = $data['tgl_masuk'];
                                $tgl_keluar = $data['tgl_keluar'];
                                $kamars_id = $data['kamar_id'];
                                
                            }
                            ?>
                            <form method="post" action="" name="submit" id="submit">
                                <div class="row mb-3">
                                <input class="form-control" id="user_id" type="hidden" placeholder="Masukkan Lantai" name="user_id" value="1">
                                    <div class="col-md-4">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" id="nama_pelanggan" type="text" placeholder="Masukkan Nomor Kamar" name="nama_pelanggan" value="<?php echo $nama_pelanggan ?>" readonly>
                                            <input class="form-control" id="pelanggan_id" type="hidden" placeholder="Masukkan Nomor Kamar" name="pelanggan_id" value="<?php echo $id ?>">
                                            <label for="nama_pelanggan">Nama Pelanggan</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating">
                                            <input class="form-control" id="no_identitas" type="text" placeholder="Masukkan Lantai" name="no_identitas" value="<?php echo $no_identitas ?>" readonly>
                                            <label for="no_identitas">Nomor Identitas</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating">
                                            <input class="form-control" id="no_hp" type="text" placeholder="Masukkan Lantai" name="no_hp" value="<?php echo $no_hp ?>" readonly>
                                            <label for="no_hp">Nomor Handphone</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" id="email" type="text" placeholder="Masukkan Nomor Kamar" name="email" value="<?php echo $email ?>" readonly>
                                            <label for="email">Email</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-3">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" id="nomor_nota" type="text" placeholder="Masukkan Nomor Kamar" name="nomor_nota">
                                            <label for="nomor_nota">Nomor Nota</label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" id="orang" type="text" placeholder="Masukkan Nomor Kamar" name="orang" value="<?php echo $orang ?>" readonly>
                                            <label for="orang">Total Pengunjung</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <?php
                                            $tgl1 = new DateTime($tgl_masuk);
                                            $tgl2 = new DateTime($tgl_keluar);
                                            $jarak = $tgl2->diff($tgl1);
                                            $selisih =  $jarak->d;
                                            $total_awal = $harga * $selisih;
                                            $pajak = $total_awal / 10;
                                            $total_akhir = $total_awal + $pajak;
                                            ?>
                                            <input class="form-control" id="hari" type="number" placeholder="Masukkan Nomor Kamar" name="hari" value="<?php echo $jarak->d; ?>" readonly>
                                            <label for="hari">Total Hari</label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-floating">
                                            <input class="form-control" id="total_awal" type="text" placeholder="Masukkan Lantai" name="total_awal" value="<?php echo $total_awal ?>" readonly>
                                            <label for="total_awal">Harga</label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-floating">
                                            <select class="form-select" aria-label="Default select example" name="kamar_id" readonly>
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
                                                        echo "selected"; } ?> readonly
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
                                            <input class="form-control" id="total_akhir" type="text" placeholder="Masukkan Nomor Kamar" name="total_akhir" value="<?php echo $total_akhir ?>" readonly onkeyup="OnChange(this.value)" onKeyPress="return isNumberKey(event)">
                                            <label for="total_akhir">Total Harga</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input class="form-control" id="pajak" type="number" placeholder="Masukkan Lantai" name="pajak" value="<?php echo $pajak ?>" readonly>
                                            <label for="pajak">Pajak</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" id="bayar" type="number" placeholder="Masukkan Nomor Kamar" name="bayar" onkeyup="OnChange(this.value)" onKeyPress="return isNumberKey(event)">
                                            <label for="bayar">Bayar</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" id="kembalian" type="number" placeholder="Masukkan Nomor Kamar" name="kembalian" readonly>
                                            <label for="kembalian">Kembalian</label>
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
    <script type="text/javascript" language="Javascript">
    totals = document.submit.total_akhir.value;
    document.submit.kembalian.value = totals;

    bayars = document.submit.bayar.value;
    document.submit.kembalian.value = bayars;

    function OnChange(value){
        totals = document.submit.total_akhir.value;
        bayars = document.submit.bayar.value;
        total = bayars - totals;
        document.submit.kembalian.value = total;
    }

    </script>

</body>

</html>