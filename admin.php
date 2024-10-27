<?php

session_start();

if (!$_SESSION['admin']) {
	header("Location: admin_login.php");
}

?><!DOCTYPE html>
<html lang="en">

<head>
	<title>Admin Page</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>

<body>
	
	<h1 style="text-align: center">My Blog</h1>
	<hr>
	
	<div style="text-align: center">
		<a href="admin_logout.php">Logout</a>
	</div>
	
	<hr>	
	
	<h3>Halaman administrasi blog</h3>
	
	<p>Coming soon...</p>
	
</body>

</html>
