<?php
include "koneksi.php";

// file submit.php
// menangkap data yang dikirimkan dari file tambah.php mwnggunakan method = POST

$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];
$level = 1;

// perintah SQL
$query="insert into form values ('$username',' $password','$email','$level') " ;

$hasil=mysqli_query($konek_db,$query);

if ($hasil){
	
echo " <center> <b> <font color = 'green' size = '4'> <p> Data Berhasil disimpan </p> </center> </b> </font> <br/>
 <meta http-equiv='refresh' content='2; url= index.php'/>  ";
} 
else { echo "Data gagal disimpan
<meta http-equiv='refresh' content='2; url= index.php'/> ";
}
?>