<?php

session_start();

include 'koneksi.php';

$posts = mysqli_query($conn, "SELECT * FROM post");

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
	
	<form action="search.php" method="get">
		Cari posting:
		<input type="text" name="q">
		<input type="submit" value="Cari">
	</form>
	
	<hr>
	
	<?php
	
	while($row = mysqli_fetch_array($posts)) {
	
		echo "<a href='post.php?id={$row['id']}'><h2>{$row['judul']}</h2></a>";
		echo "<small>Tanggal {$row['tanggal']}</small>";
		echo "<hr>";
		
	}
	
	?>
	
</body>

</html>
