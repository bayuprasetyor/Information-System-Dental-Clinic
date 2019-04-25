<?php
session_start();
extract($_POST);
include './konfig.php';

// file submit.php
// menangkap data yang dikirimkan dari file tambah.php mwnggunakan method = POST

$id_dokter = $_SESSION['id'];
$karang = 0;
$cabut = 0;
$tambal = 0;
$pemasangan = 0;
$username = $_POST["username"];
$tanggal = $_POST["tanggal"];
$karang = $_POST["karang"];
$cabut = $_POST["cabut"];
$tambal = $_POST["tambal"];
$pemasangan = $_POST["pemasangan"];
$harga = 100000;


if($karang==1){
	$harga = $harga + 150000;
}
if($cabut==1){
	$harga = $harga + 200000;
}
if($tambal==1){
	$harga = $harga + 250000;
}
if($pemasangan==1){
	$harga = $harga + 300000;
}

// perintah SQL
$query="insert into pemesanan values ('$id_dokter','$username','$tanggal',' $karang','$cabut','$tambal','$pemasangan','$harga') " ;
$hasil=mysqli_query($konek,$query);

if ($hasil){
	
header("location:utama.php?view=halaman_utama");
} 
else { header("location:utama.php?view=pesan");
}
?>	