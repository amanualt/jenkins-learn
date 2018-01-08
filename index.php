<!DOCTYPE html>
<html>
<head>
</head>

<body>
	<header>
	<nav>
		<ul>
			<li><a href="form-daftar.php">Daftar</a></li>
			<li><a href="list.php">Pendaftar</a></li>
		</ul>
	</nav>


	<?php if(isset($_GET['status'])): ?>
	<p>
		<?php
			if($_GET['status'] == 'sukses'){
				echo "Pendaftaran berhasil!";
			} else {
				echo "Pendaftaran gagal!";
			}
		?>
	</p>
	<?php endif; ?>

	</body>
</html>
