<?php include '../../config.php' ?>

<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
    .invoice-title h2,
    .invoice-title h3 {
        display: inline-block;
    }

    .table>tbody>tr>.no-line {
        border-top: none;
    }

    .table>thead>tr>.no-line {
        border-bottom: none;
    }

    .table>tbody>tr>.thick-line {
        border-top: 2px solid;
    }
</style>



<div class="container">
    <div class="row">
        <div class="col-xs-12">
        <?php
            // Display selected user data based on id
            // Getting id from url
            $id = $_GET['id'];

            // Fetech user data based on id
            $result = mysqli_query($conn, "SELECT * FROM pembayaran  INNER JOIN pelanggan ON pembayaran.pelanggan_id = pelanggan.pelanggan_id INNER JOIN kamar ON pembayaran.jenis_kamar_id = kamar.kamar_id WHERE pembayaran_id=$id");

            while ($data = mysqli_fetch_array($result)) {
                $id = $data['pembayaran_id'];
                $pelanggan_id = $data['nama_pelanggan'];
                $email = $data['email'];
                $alamat = $data['alamat'];
                $user_id = $data['user_id'];
                $nomor_nota = $data['nomor_nota'];
                $hari = $data['hari'];
                $jenis_kamar_id = $data['jenis_kamar_id'];
                $total_awal = $data['total_awal'];
                $pajak = $data['pajak'];
                $total_akhir = $data['total_akhir'];
                $bayar = $data['bayar'];
                $kembalian = $data['kembalian'];
                $tgl_bayar = $data['tgl_bayar'];
                
            }
            ?>
            <div class="invoice-title">
                <h2>Invoice</h2>
                <h3 class="pull-right">Nomor Nota # <?php echo $nomor_nota ?></h3>
            </div>
            <hr>
            <div class="row">
                <div class="col-xs-6">
                    <address>
                        <strong>Ditujukan ke:</strong><br>
                        <?php echo $pelanggan_id ?><br>
                        <?php echo $alamat ?>
                    </address>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6">
                    <address>
                        <strong>Metode Pembayaran:</strong><br>
                        Cash (Langsung)<br>
                        <?php echo $email ?>
                    </address>
                </div>
                <div class="col-xs-6 text-right">
                    <address>
                        <strong>Tanggal Bayar:</strong><br>
                        <?php echo $tgl_bayar ?><br><br>
                    </address>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><strong>Keterangan Pembayaran</strong></h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-condensed">
                            <thead>
                                <tr>
                                    <td><strong>Jenis Kamar</strong></td>
                                    <td class="text-center"><strong>Lama Menginap</strong></td>
                                    <td class="text-center"><strong>    </strong></td>
                                    <td class="text-right"><strong>Total Harga</strong></td>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- foreach ($order->lineItems as $line) or some such thing here -->
                                <tr>
                                    <td><?php echo $jenis_kamar_id ?></td>
                                    <td class="text-center"><?php echo $hari ?> Hari</td>
                                    <td class="text-center"></td>
                                    <td class="text-right"><?php echo $total_awal ?></td>
                                </tr>
                                <tr>
                                    <td class="thick-line"></td>
                                    <td class="thick-line"></td>
                                    <td class="thick-line text-center"><strong>Subtotal</strong></td>
                                    <td class="thick-line text-right"><?php echo $total_awal ?></td>
                                </tr>
                                <tr>
                                    <td class="no-line"></td>
                                    <td class="no-line"></td>
                                    <td class="no-line text-center"><strong>Pajak</strong></td>
                                    <td class="no-line text-right"><?php echo $pajak ?></td>
                                </tr>
                                <tr>
                                    <td class="no-line"></td>
                                    <td class="no-line"></td>
                                    <td class="no-line text-center"><strong>Total</strong></td>
                                    <td class="no-line text-right"><?php echo $total_akhir ?></td>
                                </tr>
                                <tr>
                                    <td class="no-line"></td>
                                    <td class="no-line"></td>
                                    <td class="no-line text-center"><strong>Total Bayar</strong></td>
                                    <td class="no-line text-right"><?php echo $bayar ?></td>
                                </tr>
                                <tr>
                                    <td class="no-line"></td>
                                    <td class="no-line"></td>
                                    <td class="no-line text-center"><strong>Kembalian</strong></td>
                                    <td class="no-line text-right"><?php echo $kembalian ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    window.print();
</script>