<?php
if (isset($_GET['kamar_id'])) {
	$kamar_id = $_GET['kamar_id'];
} 
else {
	die ("Error. No kamar_id Selected! ");	
}

//proses delete berita
if (!empty($kamar_id) && $kamar_id != "") {
		
    $query = "DELETE FROM kamar WHERE kamar_id='$kamar_id'";
    $sql = mysqli_query ($conn, $query);
    if ($sql) {
        $pesan = "Data kamar berhasil dihapus!";
        header('Location: index.php?pesan=". $pesan ."');		
    } else {
        echo "<h2><font color=red>Data gagal dihapus</font></h2>";	
    }
} else {
    die ("Access Denied");	
}
?>