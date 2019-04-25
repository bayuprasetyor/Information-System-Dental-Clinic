<?php
session_start();
extract($_POST);

include 'konfig.php';
$id = $_SESSION['id'];
$hari1 = $_SESSION['hari1'];
$hari2 = $_SESSION['hari2'];
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
$jam = $_POST["jam"];
$harga = 100000;

$_SESSION['no']=$_GET['no'];
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
$query="INSERT into pemesanan values ('$username','$tanggal','$karang','$cabut','$tambal','$pemasangan','$harga','$id','','$jam')";
$hasil=mysqli_query($konek,$query);
$cek_query = "SELECT * FROM pemesanan WHERE jam='$jam' and tanggal ='$tanggal'";
$cek = mysqli_query($konek,$cek_query);
$cek_user=mysqli_num_rows($cek);
if ($cek_user > 1) {
        echo '<script language="javascript">
              alert ("sudah ada booking pada jam ini");
              window.location="utama.php?view=pesan&id_user='.$id.'&hari1='.$hari1.'&hari2='.$hari2.'";
              </script>';
}
else if ($hasil){
	
header("location:utama.php?view=harga&harga=" . $harga . "&id=" . $_SESSION['id'] . "");
} 
else { 
header("location:utama.php?view=pesan&id_user=" . $_SESSION['id'] . "");
}
?>