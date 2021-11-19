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
                        <h1 class="mt-4">Data Tarif</h1>
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
                                            <th>Harga</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Jenis Kamar</th>
                                            <th>Harga</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php
                                    $no = 1;
                                    $query = "SELECT tarif.tarif_id, jenis_kamar.jenis_kamar as kamarr, jenis_kamar.jenis_kamar_id, tarif.tarif FROM tarif INNER JOIN jenis_kamar ON tarif.jenis_kamar_id = jenis_kamar.jenis_kamar_id";
                                    $sql = mysqli_query ($conn, $query);
                                    
                                    while ($hasil = mysqli_fetch_array ($sql)) {
                                        $jenis_kamar_id = $hasil['kamarr'];
                                        $tarif = $hasil['tarif'];
                                        
                                        
                                    ?>
                                        <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $jenis_kamar_id; ?></td>
                                            <td><?php echo $tarif; ?></td>
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
