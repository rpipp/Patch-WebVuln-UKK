<?php

session_start();

include 'koneksi.php';

$nama = htmlspecialchars($_POST['nama']);
$pesan = htmlspecialchars($_POST['pesan']);
$nama = mysqli_real_escape_string($conn, $nama);
$pesan = mysqli_real_escape_string($conn, $pesan);


$nama = htmlspecialchars($nama, ENT_QUOTES, 'UTF-8');
$pesan = htmlspecialchars($pesan, ENT_QUOTES, 'UTF-8');
$insert = mysqli_query($conn, "INSERT INTO guestbook (id, tanggal, nama, pesan) VALUES(NULL, NOW(), '$nama', '$pesan')");


if ($insert) {
	echo $insert;
}


//tambahkan atau perbaiki script diantara dibaris 7 sampai  15
//sql code injection  di guestbook bagian pesan   joni') UNION SELECT NULL,now(),'joni','joni'; -- '
