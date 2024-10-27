<?php

session_start();

include 'koneksi.php';

$id = $_GET['id'];
if (!is_int($id)) {
    $id = 1;
}
$id = mysqli_real_escape_string($conn, $id);
$q  = mysqli_query($conn, "SELECT * FROM post WHERE id = {$id}") or die(mysqli_error($conn));
$post = mysqli_fetch_array($q);

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
	
	<h2><?php echo $post['judul'] ?></h2>
	<small>Tanggal <?php echo $post['tanggal'] ?></small>
	
	<?php echo $post['konten'] ?>
	
</body>

</html>
