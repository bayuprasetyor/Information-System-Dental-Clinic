<?php
session_start();
extract($_POST);
include './konfig.php';

// file submit.php
// menangkap data yang dikirimkan dari file tambah.php mwnggunakan method = POST

$username = $_POST["username"];
$password = $_POST["password"];
$level = 1;
$id_user = 2000;
$hak_akses = 'Front Office';
$status = 0;
$grup = 'kandungan';

// perintah SQL
$query="INSERT into tbl_user values ('$id_user','$username',' $password','$status','$hak_akses','$grup') " ;
$id_user++;
$hasil=mysqli_query($konek,$query);

if ($hasil){
	
header("location:utama.php?view=halaman_utama");
} 
else { header("location:utama.php?view=halaman_utama");
}
?>	