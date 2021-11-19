<?php
include "../../config.php";
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
                    <h1 class="mt-4">Data Jenis Kamar</h1>
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
                                        <th>Jenis Kamar</th>
                                        <th>Kode</th>
                                        <th>Kapasitas</th>
                                        <th>Tempat Tidur</th>
                                        <th>Deskripsi Kamar</th>
                                        <th>Harga</th>
                                        <th>Total Kamar</th>
                                        <th style="text-align: center;">Aksi</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Jenis Kamar</th>
                                        <th>Kode</th>
                                        <th>Kapasitas</th>
                                        <th>Tempat Tidur</th>
                                        <th>Deskripsi Kamar</th>
                                        <th>Harga</th>
                                        <th>Total Kamar</th>
                                        <th style="text-align: center;">Aksi</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    $query = "SELECT * FROM jenis_kamar INNER JOIN tempat_tidur ON jenis_kamar.tempat_tidur_id = tempat_tidur.tempat_tidur_id ";
                                    $sql = mysqli_query($conn, $query);

                                    while ($hasil = mysqli_fetch_array($sql)) {
                                        $jenis_kamar_id = $hasil['jenis_kamar_id'];
                                        $jenis_kamar = $hasil['jenis_kamar'];
                                        $kode_jenis_kamar = $hasil['kode_jenis_kamar'];
                                        $kapasitas = $hasil['kapasitas'];
                                        $tempat_tidur_id = $hasil['jenis_tempat_tidur'];
                                        $deskripsi_kamar = $hasil['deskripsi_kamar'];
                                        $total = $hasil['total'];
                                        $harga = $hasil['harga'];


                                    ?>
                                        <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $jenis_kamar; ?></td>
                                            <td><?php echo $kode_jenis_kamar; ?></td>
                                            <td><?php echo $kapasitas; ?></td>
                                            <td><?php echo $tempat_tidur_id; ?></td>
                                            <td><?php echo $deskripsi_kamar; ?></td>
                                            <td><?php echo $harga; ?></td>
                                            <td><?php echo $total; ?></td>
                                            <td style="text-align: center;">
                                                <a href="delete.php?id=<?php echo $jenis_kamar_id; ?>" class="btn btn-danger">Hapus</a>
                                                <a href="edit.php?id=<?php echo $jenis_kamar_id; ?>" class="btn btn-success">Sunting</a>
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