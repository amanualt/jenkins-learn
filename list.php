<?php include("config.php"); ?>


<!DOCTYPE html>
<html>
<head>
</head>

<body>
	<nav>
		<a href="form-daftar.php">Tambah</a>
	</nav>

	<br>

	<table border="1">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Password</th>
		</tr>
	</thead>
	<tbody>

		<?php
		$sql = "SELECT * FROM daftar";
		$query = mysqli_query($db, $sql);

		while($user = mysqli_fetch_array($query)){
			echo "<tr>";

			echo "<td>".$user['id']."</td>";
			echo "<td>".$user['nama']."</td>";
			echo "<td>".$user['password']."</td>";

			echo "<td>";
			echo "<a href='form-edit.php?id=".$user['id']."'>Edit</a> | ";
			echo "<a href='hapus.php?id=".$user['id']."'>Hapus</a>";
			echo "</td>";

			echo "</tr>";
		}
		?>

	</tbody>
	</table>

	<p>Total: <?php echo mysqli_num_rows($query) ?></p>

	</body>
</html>
