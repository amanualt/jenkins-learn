<?php

include("config.php");

if( !isset($_GET['id']) ){
	header('Location: list.php');
}

$id = $_GET['id'];

$sql = "SELECT * FROM daftar WHERE id=$id";
$query = mysqli_query($db, $sql);
$user = mysqli_fetch_assoc($query);

if( mysqli_num_rows($query) < 1 ){
	die("data tidak ada...");
}

?>
<!DOCTYPE html>
<html>
<head>
</head>

<body>
	<header>
	</header>
	<form action="proses-edit.php" method="POST">
		<fieldset>
			<input type="hidden" name="id" value="<?php echo $user['id'] ?>" />
		<p>
			<label for="nama">Nama: </label>
			<input type="text" name="nama" placeholder="nama lengkap" value="<?php echo $user['nama'] ?>" />
		</p>
		<p>
			<label for="password">Password: </label>
			<input type="password" name="nama" placeholder="new password" value="<?php echo $user['password'] ?>" />
		</p>
		<p>
			<input type="submit" value="Simpan" name="simpan" />
		</p>
		</fieldset>
	</form>
	</body>
</html>
