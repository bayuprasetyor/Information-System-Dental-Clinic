<?php
session_start();
extract($_POST);

	$server = 'localhost';
	$user = 'root';
	$pass = '';
	$dbname = 'rumah_sakit';
        
    
	$konek = mysqli_connect($server,$user,$pass,$dbname);
	$find = mysqli_select_db($konek,$dbname);
	if (!$find){
		//echo ":)";
		die("database not found");
	 }
$id = $_SESSION['id'];
$pesan = $_SESSION['pesan'] + 1;

$_SESSION['no']=$_GET['no'];


// perintah SQL
$query = "UPDATE tbl_dokter set pesan ='$pesan' WHERE id_user='$id'";
$hitung=mysqli_query($konek,$query);
$count = mysqli_fetch_array($hitung);
$hit = $count['pesan'];
$_SESSION['pesan']=$pesan;
if ($hitung){
	
header("location:utama.php?view=halaman_utama");
} 
else { 
header("location:utama.php?view=pesan&pesan=" . $_SESSION['pesan'] . "");
}?>