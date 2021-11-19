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
                        <h1 class="mt-4">Data Tempat Tidur</h1>  
                    <?php
                    error_reporting(0);
                        if($_GET['pesan'] != NULL){
                            echo "
                            <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                                <strong> Berhasil </strong>
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
                                            <th>Jenis Tempat Tidur</th>
                                            <th>Jumlah Tempat Tidur</th>
                                            <th style="text-align: center;">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <<th>No</th>
                                            <th>Jenis Tempat Tidur</th>
                                            <th>Jumlah Tempat Tidur</th>
                                            <th style="text-align: center;">Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php
                                    $no = 1;
                                    $query = "SELECT * FROM tempat_tidur ORDER BY tempat_tidur_id";
                                    $sql = mysqli_query ($conn, $query);
                                    
                                    while ($hasil = mysqli_fetch_array ($sql)) {
                                        $tempat_tidur_id = $hasil['tempat_tidur_id'];
                                        $jenis_tempat_tidur = $hasil['jenis_tempat_tidur'];
                                        $jumlah_bed_tersedia = $hasil['jumlah_bed_tersedia'];
                                        
                                        
                                    ?>
                                        <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $jenis_tempat_tidur; ?></td>
                                            <td><?php echo $jumlah_bed_tersedia; ?></td>
                                            <td style="text-align: center;">
                                            <a href="delete.php?id=<?php echo $tempat_tidur_id; ?>" class="btn btn-danger">Hapus</a>
                                            <a href="edit.php?id=<?php echo $tempat_tidur_id; ?>" class="btn btn-success">Sunting</a>
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
