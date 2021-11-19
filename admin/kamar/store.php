<?php
include "../../config.php";
//proses input berita
// if($conn != NULL){
//     echo "ada";
// }else{
//     echo "tidak ada";
// }

// if (isset($_POST['input'])) {
	$jenis_kamar_id = $_POST['jenis_kamar_id'];
	$tempat_tidur_id = $_POST['tempat_tidur_id'];
	$no_kamar = $_POST['no_kamar'];
	$lantai = $_POST['lantai'];
	$bebas_rokok = $_POST['bebas_rokok'];
    $status_kamar = $_POST['status_kamar'];
	$tgl_masuk = $_POST['tgl_masuk'];
	$tgl_keluar = $_POST['tgl_keluar'];

	//insert ke tabel
	$query = "INSERT INTO kamar	values('','$jenis_kamar_id', '$tempat_tidur_id', '$no_kamar', '$lantai', '$bebas_rokok','$status_kamar', '$tgl_masuk', '$tgl_keluar')";

    // $sql = mysqli_query($conn, "INSERT INTO kamar (jenis_kamar_id, tempat_tidur_id, no_kamar, lantai, bebas_rokok, status_kamar, status_kamar, tgl_masuk, tgl_keluar) 
	// VALUES('$jenis_kamar_id', '$tempat_tidur_id', '$no_kamar', '$lantai', '$bebas_rokok','$status_kamar', '$tgl_masuk', '$tgl_keluar')");
    
    
    mysqli_query($conn, $query);
    // if($sql){
    //     header('Location : tambah.php?status=sukses');
    // }else{
    //     header('Location: tambah.php?status=gagal');
    // }

    // var_dump($query, $sql);
// }
?>
