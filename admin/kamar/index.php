<?php
include "../../config.php";


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
                    <h1 class="mt-4">Data Kamar</h1>
                    <?php
                    error_reporting(0);
                        if($_GET['pesan'] != NULL){
                            echo "
                            <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                                <strong>Riyanti</strong>
                                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                            </div>";
                        }
                        else{

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
                                        <th>Tempat Tidur</th>
                                        <th>No Kamar</th>
                                        <th>Lantai</th>
                                        <th>Bebas Rokok</th>
                                        <th>Status Kamar</th>
                                        <th>Tanggal Masuk</th>
                                        <th>Tanggal Keluar</th>
                                        <th style="text-align: center;">Aksi</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Jenis Kamar</th>
                                        <th>Tempat Tidur</th>
                                        <th>No Kamar</th>
                                        <th>Lantai</th>
                                        <th>Bebas Rokok</th>
                                        <th>Status Kamar</th>
                                        <th>Tanggal Masuk</th>
                                        <th style="text-align: center;">Aksi</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    $query = "SELECT * FROM kamar  INNER JOIN jenis_kamar ON kamar.jenis_kamar_id = jenis_kamar.jenis_kamar_id INNER JOIN tempat_tidur ON kamar.tempat_tidur_id = tempat_tidur.tempat_tidur_id";
                                    $sql = mysqli_query($conn, $query);

                                    while ($hasil = mysqli_fetch_array ($sql)) {
                                        $kamar_id = $hasil['kamar_id'];
                                        $jenis_kamar = $hasil['jenis_kamar'];
                                        $jenis_tempat_tidur = $hasil['jenis_tempat_tidur'];
                                        $no_kamar = $hasil['no_kamar'];
                                        $lantai = $hasil['lantai'];
                                        $bebas_rokok = $hasil['jenis_tempat_tidur'];
                                        $status_kamar = $hasil['status_kamar'];
                                        $tgl_masuk = $hasil['tgl_masuk'];
                                        $tgl_keluar = $hasil['tgl_keluar'];
                                    ?>
                                        <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $jenis_kamar; ?></td>
                                            <td><?php echo $jenis_tempat_tidur; ?></td>
                                            <td><?php echo $no_kamar; ?></td>
                                            <td><?php echo $lantai; ?></td>
                                            <td><?php echo $bebas_rokok; ?></td>
                                            <td><?php echo $status_kamar; ?></td>
                                            <td><?php echo $tgl_masuk; ?></td>
                                            <td><?php echo $tgl_keluar; ?></td>
                                            <td style="text-align: center;">
                                            <a href="delete.php?id=<?php echo $kamar_id; ?>" class="btn btn-danger">Hapus</a>
                                            <button type="button" class="btn btn-success">Sunting</button>
                                            </td>
                                        </tr>
                                    <?php $no++; }?>

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
    <?php include 'layout/scripts.php' ?>
</body>

</html>