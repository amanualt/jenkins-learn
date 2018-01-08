<?php

include("config.php");

if(isset($_POST['daftar'])){

	$nama = $_POST['nama'];
	$alamat = $_POST['password'];

	$sql = "INSERT INTO daftar (nama, password) VALUE ('$nama', '$password')";
	$query = mysqli_query($db, $sql);

	if( $query ) {
		header('Location: index.php?status=sukses');
	} else {
		header('Location: index.php?status=gagal');
	}


} else {
	die("Tidak konek....");
}

?>
