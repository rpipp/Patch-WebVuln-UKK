<?php

session_start();

include 'koneksi.php';

$pesan = mysqli_query($conn, "SELECT * FROM guestbook ORDER BY tanggal");

?><!DOCTYPE html>
<html lang="en">

<head>
	<title>Blog</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>

<body>
	
	<h1 style="text-align: center">My Blog</h1>
	<hr>
	
	<div style="text-align: center">
		<?php if (isset($_SESSION['admin']) && $_SESSION['admin'] == 1) : ?>
		<a href="admin.php">Admin</a> | 
		<?php endif; ?>
		<a href="index.php">Home</a> | 
		<a href="gb.php">Guestbook</a>
	</div>
	
	<hr>
	
	<h2>Guestbook</h2>
	
	<?php
	
	while($row = mysqli_fetch_array($pesan)) {
	
		echo "<small>Oleh <b>{$row['nama']}</b> pada {$row['tanggal']}</small>";
		echo "<p>{$row['pesan']}</p>";
		echo "<hr>";
		
	}
	
	?>
	
	<h3>Kirim pesan</h3>
	
	<form action="gb_post.php" method="post">
	
		Nama: <input type="text" name="nama"><br>
		Pesan: <br>
		<textarea name="pesan" cols="40" rows="5"></textarea>
		<br>
		<input type="submit" value="Kirim">
	
	</form>
	
</body>

</html>
