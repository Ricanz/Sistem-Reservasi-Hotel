<?php
include "../../config.php";
 
$id = $_GET['id'];
//  var_dump($id);
$result = mysqli_query($conn, "DELETE FROM users WHERE user_id=$id");
$pesan = "Data kamar berhasil dihapus!";
header('Location: index.php?pesan=hapus');	
?>