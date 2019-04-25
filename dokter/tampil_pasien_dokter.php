<div align="center">
    <h1><label class="label label-warning">Data Appointment Pasien</label></h1>
    <br>
</div>
<table id="datatable" class="display stripe">
    <thead>
    <th>ID Pasien</th>
    <th>Nama Pasien</th>
    <th>Tanggal Booking</th>
    <th>Jenis Pelayanan</th>
    <th>Aksi</th>
</thead>
<tbody>
    <?php

   $query = "select * from pasien";

    $result = mysqli_query($konek,$query);
    if (mysqli_num_rows($result)) {
        //echo"ada isinya"; 
        while ($row = mysqli_fetch_array($result)) {
            ?>
            <tr>
                <td class="id_pasien"><?php echo $row['id_pasien']; ?> </td>
                <td class="nama_pasien"><?php echo $row['nama_pasien']; ?> </td>
                <td class="tanggal_booking"><?php echo $row['tanggal_booking']; ?> </td>
                <td class="jenis_pelayanan"><?php echo $row['jenis_pelayanan']; ?> </td>
                <td> 
                    <a href="accept.php?ni=<?php echo $row['id_pasien'];?>" title="Terima appointment"> &nbsp;|| Accept || &nbsp;</a>
                        <a href="reject.php?ni=<?php echo $row['id_pasien'];?>" onclick="return confirm('Apakah anda yakin ingin me-reject ?');">&nbsp;|| Reject ||&nbsp;</a></td>
            </tr>
            <?php
        }
    } else {
        echo"kosong";
    }
    ?>
</tbody>
<tfoot>    
    <th>ID Pasien</th>
    <th>Nama Pasien</th>
    <th>Tanggal Booking</th>
    <th>Jenis Pelayanan</th>
    <th>Aksi</th>
</tfoot>
</table>

</div><!-- /.modal -->
<!------------------------- edit -------------------->


<!--
<script type="text/javascript">
    $(document).ready(function () {
        $("button.edit_data").click(function () {
            var myModal = $('#editModal');
            // now get the values from the table
            var no_rj = $(this).closest('tr').find('td.no_rj').html();
            var nama_pasien = $(this).closest('tr').find('td.nama_pasien').html();
            var keluhan = $(this).closest('tr').find('td.keluhan').html();
            var diagnosa = $(this).closest('tr').find('td.diagnosa').html();
            var tindakan = $(this).closest('tr').find('td.tindakan').html();

            document.getElementById('no_rj').value = no_rj;
            document.getElementById('nama_pasien').value = nama_pasien;
            document.getElementById('keluhan').value = keluhan;
            document.getElementById('diagnosa').value = diagnosa;
            document.getElementById('tindakan').value = tindakan;
        });
    });
</script>

-->