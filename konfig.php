<?php
/*
|--------------------------------------------------------------------------
| Konfigurasi Database
|--------------------------------------------------------------------------
|
|   Aplikasi Sistem Informasi Rumah Sakit Sederhana
|   by Dendi Abdul Rohim 
|   dendicious@gmail.com
|   dendicous.com
|
*/

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
	 
?>