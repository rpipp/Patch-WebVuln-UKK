<?php

$host = "localhost";
$user = "cyber";
$pass = "pass2023";
$db   = "cyber23";

$conn = mysqli_connect($host, $user, $pass);
mysqli_select_db($conn, $db);
