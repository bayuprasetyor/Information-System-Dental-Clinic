<?php
/*
|--------------------------------------------------------------------------
| Aksi login
|--------------------------------------------------------------------------
|
|   Aplikasi Sistem Informasi Rumah Sakit Sederhana
|   by Dendi Abdul Rohim 
|   dendicious@gmail.com
|   dendicous.com
|
*/

session_start();
extract($_POST);
include './konfig.php';
$query = "SELECT * from tbl_user where username = '$username' and password = '$password'";
$result = mysqli_query($konek,$query);
if (mysqli_num_rows($result)) {
    while ($row = mysqli_fetch_array($result)) {
        $_SESSION['username'] = $row['username'];
        $_SESSION['id_user'] = $row['id_user'];
        $_SESSION['hak_akses'] = $row['hak_akses'];
        $_SESSION['grup'] = $row['grup'];
        
        if ($row['hak_akses'] == "Dokter") {
            header("location:dokter.php?view=tampil_pasien_dokter");
        } elseif ($row['hak_akses'] == "Front Office") {
            header("location:cs.php?view=tampil_pasien");
            
        } elseif ($row['hak_akses'] == "Departemen") {
            header("location:utama.php?view=halaman_utama");
        } else {
            echo '<script>href.location</script>';
            session_destroy();
        }
    }
}else{
    echo "<script>
    location.href='utama.php?error=salah';
    </script>";
}
?>