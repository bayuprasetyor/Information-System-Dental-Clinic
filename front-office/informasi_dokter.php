
<script type="text/javascript">
    window.onload = function () {
        new JsDatePick({
            useMode: 1,
            target: "tanggal_checkin",
            dateFormat: "%Y-%m-%d",
            yearsRange: [2000, 2025]
        });
    };
</script>
<div align="center">
    <h1><label class="label label-success">Pilih Dokter Anda</label></h1>
    <br>
</div>
<br>
<div class="container">
    <table id="datatable" class="stripe">
        <thead>

        <th><center><h2>Informasi Dokter<h2></center></th>

        </thead>
        <tbody>
            <?php
            include 'konfig.php';
            $id = $_GET['id_user'];
            $query = "SELECT * FROM tbl_dokter where id_user = $id";
            $_SESSION['id']=$_GET['id_user'];

            $result = mysqli_query($konek,$query);
            if (mysqli_num_rows($result)>0) {
                //echo"ada isinya"; 
                while ($row = mysqli_fetch_array($result)) {
                    $_SESSION['pesan']=$row['pesan'];
                    ?>
                    <tr>
                    <td rowspan="7"><img src="images/dokter/<?php echo $row['id_user']; ?>.png" </td>
                    <td><h3> Nama : <?php echo $row['nama_dokter']; ?></h3> </td> </td></tr>
                    <tr><td><h3>Alamat : <?php echo $row['alamat_dokter']; ?></h3> </td><tr>   
                    <tr><td><h3>Jadwal Praktik:<?php echo $row['jadwal_praktik']; ?></h3></td></tr>
                    <tr><td><h3>Pendidikan : <?php echo $row['pendidikan_dokter']; ?></h3> </td><tr>
                    <tr><td><h3>Biografi : <?php echo $row['biografi_dokter']; ?></h3> </td><tr>
                    <tr><tr>
                    <tr>
                        <TD>
                                <?php echo "<a class='btn btn-info btn-sm' href='utama.php?view=pesan&id_user=" . $row['id_user'] . "&hari1=" . $row['hari1'] . "&hari2=" . $row['hari2'] . "'>booking</a>";
                                ?>
                        </TD>
                    </tr> 

                    <?php
                }

            } else {
                echo"kosong";
            }
            ?>
        </tbody>
    </table>
</div>