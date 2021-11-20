<?php
include "../../config.php";

session_start();

if ($_SESSION['username'] == null) {
    header("Location: ../../login.php");
    exit();
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
                    <h1 class="mt-4"> <?php echo "Selamat Datang," . $_SESSION['username'] . "!" ?> </h1>
                    <h1 class="mt-4">Data Tamu </h1>
                    <?php
                    error_reporting(0);
                    if ($_GET['pesan'] != NULL) {
                        echo "
                            <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                                <strong> Berhasil </strong>
                                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                            </div>";
                    } else {
                    }

                    ?>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            DataTable Example
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>No Identitas</th>
                                        <th>No Hp</th>
                                        <th>Alamat</th>
                                        <th>Email</th>
                                        <th>Total Tamu</th>
                                        <th>Kamar</th>
                                        <th>Tanggal Masuk</th>
                                        <th>Tanggal Keluar</th>
                                        <th>Status Kamar</th>
                                        <th style="text-align: center;">Aksi</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>No Identitas</th>
                                        <th>No Hp</th>
                                        <th>Alamat</th>
                                        <th>Email</th>
                                        <th>Total Tamu</th>
                                        <th>Kamar</th>
                                        <th>Tanggal Masuk</th>
                                        <th>Tanggal Keluar</th>
                                        <th>Status Kamar</th>
                                        <th style="text-align: center;">Aksi</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    $query = "SELECT * FROM pelanggan  INNER JOIN kamar ON pelanggan.kamar_id = kamar.kamar_id";
                                    $sql = mysqli_query($conn, $query);

                                    while ($hasil = mysqli_fetch_array($sql)) {
                                        $pelanggan_id = $hasil['pelanggan_id'];
                                        $nama_pelanggan = $hasil['nama_pelanggan'];
                                        $no_identitas = $hasil['no_identitas'];
                                        $no_hp = $hasil['no_hp'];
                                        $alamat = $hasil['alamat'];
                                        $email = $hasil['email'];
                                        $orang = $hasil['orang'];
                                        $jenis_kamar = $hasil['no_kamar'];
                                        $status = $hasil['status'];
                                        $tgl_masuk = $hasil['tgl_masuk'];
                                        $tgl_keluar = $hasil['tgl_keluar'];
                                    ?>
                                        <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $nama_pelanggan; ?></td>
                                            <td><?php echo $no_identitas; ?></td>
                                            <td><?php echo $no_hp; ?></td>
                                            <td><?php echo $alamat; ?></td>
                                            <td><?php echo $email; ?></td>
                                            <td><?php echo $orang; ?></td>
                                            <td><?php echo $jenis_kamar; ?></td>
                                            <td><?php echo $status; ?></td>
                                            <td><?php echo $tgl_masuk; ?></td>
                                            <td><?php echo $tgl_keluar; ?></td>
                                            <td style="text-align: center;">
                                                <a href="delete.php?id=<?php echo $pelanggan_id; ?>" class="btn btn-danger">Hapus</a>
                                                <a href="edit.php?id=<?php echo $pelanggan_id; ?>" class="btn btn-success">Sunting</a>
                                                <a href="../pembayaran/bayar.php?id=<?php echo $pelanggan_id; ?>" class="btn btn-warning">Checkout</a>
                                            </td>
                                        </tr>
                                    <?php $no++;
                                    } ?>

                                </tbody>
                            </table>
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