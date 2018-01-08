<?php

include("config.php");

if( isset($_GET['id']) ){

	$id = $_GET['id'];

	$sql = "DELETE FROM daftar WHERE id=$id";
	$query = mysqli_query($db, $sql);

	if( $query ){
		header('Location: list.php');
	} else {
		die("Gagal hapus data...");
	}

} else {
	die("Tidak konek...");
}

?>
