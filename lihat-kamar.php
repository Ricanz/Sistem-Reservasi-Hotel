<!--
=========================================================
 Paper Kit 2 - v2.2.0
=========================================================

 Product Page: https://www.creative-tim.com/product/paper-kit-2
 Copyright 2019 Creative Tim (https://www.creative-tim.com)
 Licensed under MIT (https://github.com/creativetimofficial/paper-kit-2/blob/master/LICENSE.md)

 Coded by Creative Tim

=========================================================

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->

<?php
include "config.php";
?>

<!DOCTYPE html>
<html lang="en">


<?php include 'head.php' ?>

<body class="index-page sidebar-collapse">

    <?php include 'user-layout/navbar.php' ?>
    <?php
    $jenis_kamar_id = (isset($_GET['jenis_kamar_id'])) ? $_GET['jenis_kamar_id'] : 0;
    if ($jenis_kamar_id == 0) die("no jenis_kamar selected");
    $query = "SELECT * FROM jenis_kamar WHERE jenis_kamar_id='$jenis_kamar_id'";
    $sql = mysqli_query($conn, $query);
    $hasil = mysqli_fetch_array($sql);
    $jenis_kamar = $hasil['jenis_kamar'];
    $kode_jenis_kamar = $hasil['kode_jenis_kamar'];
    $kapasitas = $hasil['kapasitas'];
    $deskripsi_kamar = $hasil['deskripsi_kamar'];
    $foto = $hasil['foto'];
    ?>

    <div class="page-header section-dark" style="background-image: url('user-layout/assets/img/bruno-abatti.jpg')">
        <div class="filter"></div>
        <div class="content-center">
            <div class="container">
                <div class="title-brand">
                    <h1 class="presentation-title"><?php echo $jenis_kamar ?></h1>
                    <div class="fog-low">
                        <img src="user-layout/assets/img/fog-low.png" alt="">
                    </div>
                    <div class="fog-low right">
                        <img src="user-layout/assets/img/fog-low.png" alt="">
                    </div>
                    <!-- <div class="col-md-8 ml-auto mr-auto">
                        <a href="#paper-kit" class="btn btn-danger btn-round">Book This Room</a>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="moving-clouds" style="background-image: url('user-layout/assets/img/clouds.png'); "></div>
    </div>

    <div class="main">
        <div class="section pt-o" id="carousel">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 ml-auto mr-auto">
                        <div class="card page-carousel">
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">
                                        <img class="d-block img-fluid" src="img/<?php echo $foto ?>" alt="First slide">
                                        <div class="carousel-caption d-none d-md-block">
                                            <p>Somewhere</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block img-fluid" src="img/<?php echo $foto ?>" alt="Second slide">
                                        <div class="carousel-caption d-none d-md-block">
                                            <p>Somewhere else</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block img-fluid" src="img/<?php echo $foto ?>" alt="Third slide">
                                        <div class="carousel-caption d-none d-md-block">
                                            <p>Here it is</p>
                                        </div>
                                    </div>
                                </div>
                                <a class="left carousel-control carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                    <span class="fa fa-angle-left"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                    <span class="fa fa-angle-right"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="col-md-10 ml-auto mr-auto text-justify">
                                        <p><?php echo $deskripsi_kamar ?> </p>
                                    </div>
                                </div>
                            </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- <div class="section landing-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 ml-auto mr-auto">
                        <h2 class="text-center">Book this room</h2>
                        <form class="contact-form">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Name</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="nc-icon nc-single-02"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label>Email</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="nc-icon nc-email-85"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label>Jenis Kamar</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="nc-icon nc-bank"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Jenis Kamar">
                                    </div>
                                </div>
                            </div>
                            <label>Message</label>
                            <textarea class="form-control" rows="4" placeholder="Tell us your thoughts and feelings..."></textarea>
                            <div class="row">
                                <div class="col-md-4 ml-auto mr-auto">
                                    <button class="btn btn-danger btn-lg btn-fill">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> -->
    </div>

    <?php include 'user-layout/footer.php' ?>

    <?php include 'scripts.php' ?>
</body>

</html>