<?php
    include "konfig.php";
    if(isset($_GET['id_user'])){
    $id = $_GET['id_user'];
    $query = mysqli_query($konek, "select * from tbl_dokter where id_user = '$id'");
    $data = mysqli_fetch_array($query);
    $nama_dokter = $data['nama_dokter'];
    $departemen = $data['departemen'];
    $jadwal_praktik = $data['jadwal_praktik'];
    $pendidikan = $data['pendidikan'];
    $gambar = $data['gambar'];
    $biografi = $data['biografi'];
    }
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">
.form-style-3{
    max-width: 900px;
    font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
}
.form-style-3 label{
    display:block;
    margin-bottom: 10px;
}
.form-style-3 label > span{
    float: left;
    width: 250px;
    color: black;
    font-weight: bold;
    font-size: 13px;
    text-shadow: 1px 1px 1px #fff;
}
.form-style-3 fieldset{
    border-radius: 10px;
    -webkit-border-radius: 10px;
    -moz-border-radius: 10px;
    margin: 0px 0px 10px 0px;
    border: 3px solid lightblue;
    padding: 30px;
    background: #00FA9A;
    box-shadow: inset 0px 0px 15px #FFE5E5;
    -moz-box-shadow: inset 0px 0px 15px #FFE5E5;
    -webkit-box-shadow: inset 0px 0px 15px #FFE5E5;
}
.form-style-3 fieldset legend{
    color: black;
    border-top: 1px solid #FFD2D2;
    border-left: 1px solid #FFD2D2;
    border-right: 1px solid #FFD2D2;
    border-radius: 5px 5px 0px 0px;
    -webkit-border-radius: 5px 5px 0px 0px;
    -moz-border-radius: 5px 5px 0px 0px;
    background: #008b8b;
    padding: 0px 8px 3px 8px;
    box-shadow: -0px -1px 2px #F1F1F1;
    -moz-box-shadow:-0px -1px 2px #F1F1F1;
    -webkit-box-shadow:-0px -1px 2px #F1F1F1;
    font-weight: normal;
    font-size: 20px;
}
.form-style-3 textarea{
    width:250px;
    height:100px;
}
.form-style-3 input[type=text],
.form-style-3 input[type=date],
.form-style-3 input[type=datetime],
.form-style-3 input[type=number],
.form-style-3 input[type=search],
.form-style-3 input[type=time],
.form-style-3 input[type=url],
.form-style-3 input[type=email],
.form-style-3 select,

.form-style-3 textarea{
    border-radius: 3px;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border: 1px solid #FFC2DC;
    outline: none;
    color: black;
    padding: 5px 8px 5px 8px;
    box-shadow: inset 1px 1px 4px #FFD5E7;
    -moz-box-shadow: inset 1px 1px 4px #FFD5E7;
    -webkit-box-shadow: inset 1px 1px 4px #FFD5E7;
    background: #FFEFF6;
    width:50%;

}
.form-style-3  input[type=submit],
.form-style-3  input[type=button]{
    background: #EB3B88;
    border: 1px solid #C94A81;
    padding: 5px 15px 5px 15px;
    color: black;
    box-shadow: inset -1px -1px 3px #FF62A7;
    -moz-box-shadow: inset -1px -1px 3px #FF62A7;
    -webkit-box-shadow: inset -1px -1px 3px #FF62A7;
    border-radius: 3px;
    border-radius: 3px;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;    
    font-weight: bold;
}
.form-style-3 .required{
    color:red;
    font-weight:normal;
}
</style>
</head>
<div align="center">
    <h1><label class="label label-info">Edit Data Diri Anda</label></h1>
    <br>
</div>
<br>
<body>
<div class="form-style-3">
<form method="post" name="frm" action="aksi.php">

<fieldset><legend>Personal</legend>
  <label for="field1"><span>Nama <span class="required">*</span></span><input type="text" name="nama" value="<?php echo $nama_dokter; ?>" /></label>

  <label for="field2"><span>Departemen <span class="required">*</span></span><input type="email" class="input-field" name="departemen" value="<?php echo $departemen; ?>" /></label>

  <label for="field3"><span>Jadwal Praktik <span class="required">*</span></span><input type="text" class="input-field" name="jadwal" value="<?php echo $jadwal_praktik; ?>" /></label>

  <label for="field3"><span>Pendidikan <span class="required">*</span></span><input type="text" class="input-field" name="jadwal" value="<?php echo $pendidikan; ?>" /></label>

  <label for="field5"><span>Gambar <span class="required">*</span></span><input type="file" class="input-field" name="gambar" value="<?php echo $gambar; ?>" /></label>
</fieldset>
<fieldset>

<legend>Biografi</legend>
  <label for="field6"><span>Isi Biografi <span class="required">*</span></span>
    <textarea name="biografi" value="<?php echo $biografi; ?>" class="textarea-field"></textarea>
</label>

  <label><span>&nbsp;</span><input type="submit" name="tedit" value="EDIT"/></label>
</fieldset>
</form>
</div>

</body>
</html>