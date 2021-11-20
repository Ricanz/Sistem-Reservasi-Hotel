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
                    <h1 class="mt-4">Data Kamar </h1>
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
                                        <th>Nama Pelanggan</th>
                                        <th>Nota</th>
                                        <th>Lama Hari</th>
                                        <th>Jenis Kamar</th>
                                        <th>Total</th>
                                        <th>Bayar</th>
                                        <th>Kembalian</th>
                                        <th>Tanggal Bayar</th>
                                        <th style="text-align: center;">Aksi</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Pelanggan</th>
                                        <th>Nota</th>
                                        <th>Lama Hari</th>
                                        <th>Jenis Kamar</th>
                                        <th>Total</th>
                                        <th>Bayar</th>
                                        <th>Kembalian</th>
                                        <th>Tanggal Bayar</th>
                                        <th style="text-align: center;">Aksi</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    $query = "SELECT * FROM pembayaran  INNER JOIN pelanggan ON pembayaran.pelanggan_id = pelanggan.pelanggan_id INNER JOIN kamar ON pembayaran.jenis_kamar_id = kamar.kamar_id";
                                    $sql = mysqli_query($conn, $query);

                                    while ($hasil = mysqli_fetch_array($sql)) {
                                        $pelanggan_id = $hasil['nama_pelanggan'];
                                        $user_id = $hasil['nama'];
                                        $nomor_nota = $hasil['nomor_nota'];
                                        $hari = $hasil['hari'];
                                        $jenis_kamar_id = $hasil['no_kamar'];
                                        $total_akhir = $hasil['total_akhir'];
                                        $bayar = $hasil['bayar'];
                                        $kembalian = $hasil['kembalian'];
                                        $tgl_bayar = $hasil['tgl_bayar'];
                                    ?>
                                        <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $pelanggan_id; ?></td>
                                            <td><?php echo $nomor_nota; ?></td>
                                            <td><?php echo $hari; ?></td>
                                            <td><?php echo $jenis_kamar_id; ?></td>
                                            <td><?php echo $total_akhir; ?></td>
                                            <td><?php echo $bayar; ?></td>
                                            <td><?php echo $kembalian; ?></td>
                                            <td><?php echo $tgl_bayar; ?></td>
                                            <td style="text-align: center;">
                                                <a href="delete.php?id=<?php echo $kamar_id; ?>" class="btn btn-danger">Hapus</a>
                                                <a href="edit.php?id=<?php echo $kamar_id; ?>" class="btn btn-success">Sunting</a>
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