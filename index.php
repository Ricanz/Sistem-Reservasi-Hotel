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

    <div class="page-header section-dark" style="background-image: url('user-layout/assets/img/antoine-barres.jpg')">
        <div class="filter"></div>
        <div class="content-center">
            <div class="container">
                <div class="title-brand">
                    <h1 class="presentation-title">Singgah</h1>
                    <div class="fog-low">
                        <img src="user-layout/assets/img/fog-low.png" alt="">
                    </div>
                    <div class="fog-low right">
                        <img src="user-layout/assets/img/fog-low.png" alt="">
                    </div>
                </div>
                <h2 class="presentation-subtitle text-center">Choose your own comfy room hotel</h2>
            </div>
        </div>
        <div class="moving-clouds" style="background-image: url('user-layout/assets/img/clouds.png'); "></div>
    </div>

    <div class="main">
        <div class="section text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 ml-auto mr-auto">
                        <h2 class="title">Jenis Kamar</h2>
                        <h5 class="description">Kami memberikan masing-masing suasana berbeda untuk setiap kamar yang akan Anda singgahi</h5>
                        <br>
                        <a href="#paper-kit" class="btn btn-danger btn-round">See Details</a>
                    </div>
                </div>
                <br />
                <br />
                <div class="row">
                    <?php
                    $no = 1;
                    $query = "SELECT * FROM jenis_kamar ORDER BY jenis_kamar_id";
                    $sql = mysqli_query($conn, $query);

                    while ($hasil = mysqli_fetch_array($sql)) {
                        $jenis_kamar_id = $hasil['jenis_kamar_id'];
                        $jenis_kamar = $hasil['jenis_kamar'];
                        $kode_jenis_kamar = $hasil['kode_jenis_kamar'];
                        $kapasitas = $hasil['kapasitas'];
                        $deskripsi_kamar = $hasil['deskripsi_kamar'];
                        $foto = $hasil['foto'];


                    ?>
                        <div class="col-md-3">
                            <div class="info">
                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img class="d-block w-100" src="img/<?php echo $foto; ?>" alt="First slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="img/<?php echo $foto; ?>" alt="Second slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="img/<?php echo $foto; ?>" alt="Third slide">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    </a>
                                </div>
                                <div class="description" style="text-align: left;">
                                    <h4 class="info-title"><?php echo $jenis_kamar; ?></h4>
                                    <p class="text-info">Kapasitas : <?php echo $kapasitas; ?> Orang</p>
                                    <p class="align"><?php echo $deskripsi_kamar; ?></p>
                                    <a href="lihat-kamar.php?page=foto&jenis_kamar_id=<?php echo $jenis_kamar_id;?>" class="btn btn-link btn-danger">Lihat Kamar</a>
                                </div>
                            </div>
                        </div>

                    <?php $no++;
                    } ?>
                </div>
            </div>
        </div>
        <div class="section section-dark text-center">
            <div class="container">
                <h2 class="title">Testimonial</h2>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card card-profile card-plain">
                            <div class="card-avatar">
                                <a href="#avatar">
                                    <img src="user-layout/assets/img/faces/clem-onojeghuo-3.jpg" alt="...">
                                </a>
                            </div>
                            <div class="card-body">
                                <a href="#paper-kit">
                                    <div class="author">
                                        <h4 class="card-title">Henry Ford</h4>
                                        <h6 class="card-category">CEO Cantiq</h6>
                                    </div>
                                </a>
                                <p class="card-description text-center">
                                    Hotel yang sangat bagus sekali dengan pelayanan dan fasilitas yang sangat luar biasa, very recommended!!
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-profile card-plain">
                            <div class="card-avatar">
                                <a href="#avatar">
                                    <img src="user-layout/assets/img/faces/joe-gardner-2.jpg" alt="...">
                                </a>
                            </div>
                            <div class="card-body">
                                <a href="#paper-kit">
                                    <div class="author">
                                        <h4 class="card-title">Sophie West</h4>
                                        <h6 class="card-category">Designer</h6>
                                    </div>
                                </a>
                                <p class="card-description text-center">
                                    Tempat yang sangat baik untuk self healing dan mengerjakan tugas berat dari kantor, bakal ke sini lagi nih
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-profile card-plain">
                            <div class="card-avatar">
                                <a href="#avatar">
                                    <img src="user-layout/assets/img/faces/erik-lucatero-2.jpg" alt="...">
                                </a>
                            </div>
                            <div class="card-body">
                                <a href="#paper-kit">
                                    <div class="author">
                                        <h4 class="card-title">Robert Orben</h4>
                                        <h6 class="card-category">Developer</h6>
                                    </div>
                                </a>
                                <p class="card-description text-center">
                                    This place give me so much strenght to fight with my code
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section landing-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 ml-auto mr-auto">
                        <h2 class="text-center">Contact Us for Massive Booking</h2>
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
        </div>
    </div>

    <?php include 'user-layout/footer.php' ?>

    <?php include 'scripts.php' ?>
</body>

</html>