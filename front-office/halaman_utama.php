
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
    <table id="datatable" class="stripe table">
        <thead>
        <th></th>
        <th>Nama Dokter</th>
        <th>Jadwal Praktik</th>
        </thead>
        <tbody>
            <?php
            include 'konfig.php';
            $query = "SELECT * from tbl_dokter where pesan < 7";
            $result = mysqli_query($konek,$query);
            if (mysqli_num_rows($result)) {
                //echo"ada isinya"; 
                while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                        <td><img src="images/dokter/<?php echo $row['id_user']; ?>.png" </td>
                        <td>
                            <h2>
                                <?php echo "<a class='label label-info' href='utama.php?view=informasi_dokter&id_user=" . $row['id_user'] . "'>". $row['nama_dokter'] ." </a>";
                                ?>
                            </h2> 

                        </td>
                        <td><?php echo $row['hari1']; ?> - <?php echo $row['hari2']; ?> </td>                        
                    </tr>
                    <?php
                }
            } else {
                echo"kosong";
            }
            ?>
        </tbody>
        <tfoot>    
        </tfoot>
    </table>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        $("button#submit").click(function () {
            $.ajax({
                type: "POST",
                url: "front-office/aksi_tambah_pasien.php",
                data: $('form#tambah_pasien').serialize(),
                success: function (msg) {
                    $("#tambahModal").modal('hide')
                    location.href = 'front-office.php?view=tampil_pasien';
                    ;
                },
                error: function () {
                    alert("Gagal menambah pasien baru");
                }
            });
        });
    });
</script>

