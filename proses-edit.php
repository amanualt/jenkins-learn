<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['simpan'])){

	// ambil data dari formulir
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$alamat = $_POST['password'];

	// buat query update
	$sql = "UPDATE daftar SET nama='$nama', password='$password' WHERE id=$id";
	$query = mysqli_query($db, $sql);

	if( $query ) {
		header('Location: list.php');
	} else {
		die("Gagal simpan...");
	}


} else {
	die("TIdak konek...");
}

?>
