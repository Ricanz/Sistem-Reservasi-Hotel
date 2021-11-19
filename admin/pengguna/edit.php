<?php include "../../config.php";

if (isset($_POST['submit'])) {
    $id = $_GET['id'];
    $role = $_POST['role'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $no_ktp = $_POST['no_ktp'];
    $no_hp = $_POST['no_hp'];

    $query ="UPDATE users SET role='$role',nama='$nama',email='$email',username='$username',password='$password',no_ktp='$no_ktp',
    no_hp='$no_hp' WHERE user_id=$id";

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
                            $result = mysqli_query($conn, "SELECT * FROM users WHERE user_id=$id");

                            while ($data = mysqli_fetch_array($result)) {
                                $role = $data['role'];
                                $nama = $data['nama'];
                                $email = $data['email'];
                                $username = $data['username'];
                                $password = $data['password'];
                                $no_ktp = $data['no_ktp'];
                                $no_hp = $data['no_hp'];
                            }
                            ?>
                            <form method="post" action="" name="submit">
                                <input type="hidden" name="status_kamar" value="available">
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" id="nama" type="text" placeholder="Masukkan Nomor Kamar" name="nama" value="<?php echo $nama;?>">
                                            <label for="nama">Nama Lengkap</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <select class="form-select" aria-label="Default select example" name="role">
                                                <option value="admin">Admin</option>
                                                <option value="manager">Manager</option>
                                                <option value="staff">Staff</option>
                                            </select>
                                            <label for="role">Tempat Tidur</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" id="email" value="<?php echo $email;?>" type="email" placeholder="Masukkan Email Pengguna" name="email">
                                            <label for="email">Email</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" id="username" value="<?php echo $username;?>" type="username" placeholder="Masukkan Username Pengguna" name="username">
                                            <label for="username">Username</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" id="password" value="<?php echo $password;?>" type="password" placeholder="Masukkan Password Pengguna" name="password">
                                            <label for="password">Password</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" id="no_ktp" type="text" value="<?php echo $no_ktp;?>" placeholder="Masukkan Nomor KTP Pengguna" name="no_ktp">
                                            <label for="no_ktp">Nomor KTP</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" id="no_hp" type="text" value="<?php echo $no_hp;?>" placeholder="Masukkan Nomor Handphone Pengguna" name="no_hp">
                                            <label for="no_hp">Nomor Handphone</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4 mb-0">
                                    <div class="d-grid">
                                        <button type="submit" name="submit" class="btn btn-primary btn-block">Tambah Pengguna</button>
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