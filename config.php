<?php

$server = "172.27.0.2";
$user = "root";
$password = "root";
$nama_database = "pendaftaran";

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    die("Gagal terhubung ke database: " . mysqli_connect_error());
}

?>
