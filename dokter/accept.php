<?php
	include('konfig.php');
	if(isset($_GET['id_pasien'])){
		$ni		= $_GET['id_pasien'];
		$query	= mysqli_query($konek_db,'select acception from pasien where id_pasien = "'.$ni.'"');
		$data  	= mysqli_fetch_array($query);
		$acception	= $data['1'];
	}
	else{
	$acception = '';
	}
  header('location: dokter.php?view=tampil_pasien_dokter');
?>