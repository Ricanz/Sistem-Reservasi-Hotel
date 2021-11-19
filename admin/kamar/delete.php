<?php
include "../../config.php";
 
$id = $_GET['id'];
//  var_dump($id);
$result = mysqli_query($conn, "DELETE FROM kamar WHERE kamar_id=$id");
 
header('Location: index.php?pesan=hapus');	
?>