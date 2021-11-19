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
                        <h1 class="mt-4">Data Jenis Kamar</h1>
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
                                            <th>Kode Jenis Kamar</th>
                                            <th>Kapasitas</th>
                                            <th>Deskripsi Kamar</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Jenis Kamar</th>
                                            <th>Kode Jenis Kamar</th>
                                            <th>Kapasitas</th>
                                            <th>Deskripsi Kamar</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php
                                    $no = 1;
                                    $query = "SELECT * FROM jenis_kamar ORDER BY jenis_kamar_id";
                                    $sql = mysqli_query ($conn, $query);
                                    
                                    while ($hasil = mysqli_fetch_array ($sql)) {
                                        $jenis_kamar = $hasil['jenis_kamar'];
                                        $kode_jenis_kamar = $hasil['kode_jenis_kamar'];
                                        $kapasitas = $hasil['kapasitas'];
                                        $deskripsi_kamar = $hasil['deskripsi_kamar'];
                                        
                                        
                                    ?>
                                        <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $jenis_kamar; ?></td>
                                            <td><?php echo $kode_jenis_kamar; ?></td>
                                            <td><?php echo $kapasitas; ?></td>
                                            <td><?php echo $deskripsi_kamar; ?></td>
                                            <td>$320,800</td>
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
