
<div align="center">
    <h1><label class="label label-success">Data Pembayaran</label></h1>
    <br>
</div>
<br>
<div class="container">
    <table class="stripe">
        <thead>

        <th><center><h2>Jumlah yang Harus di Bayar<h2></center></th>

        </thead>
        <tbody>
            <?php
            include 'konfig.php';
            $harga = $_GET['harga'];
            $_SESSION['harga']=$_GET['harga'];
                    ?>
                    <?php
                        if($harga>=500000){
                            echo "
                                <tr>
                                    <td><h3> Selamat Anda Mendapat Potongan Harga Sebesar 10%</h3></td>
                                </tr
                            ";
                        }
                    ?>   
                    <tr>
                        <td><h3>harga : <?php echo $harga; ?></h3></td>
                    </tr>
                    <?php
                    $diskon = $harga * 0.1;
                    $bayar = $harga - $diskon;
                        if($harga>=500000){
                            echo "
                                <tr>
                                    <td><h3>Harga Setelah Mendapat Potongan adalah <b>$bayar</b></h3></td>
                                </tr
                            ";
                        }
                    ?>   
                    <tr>
                        <td><h3>Minimum Bayar : <?php echo "Rp.100000" ?></h3> </td>
                    </tr>
                    <tr>
                        <TD>
                                <?php echo "<a class='btn btn-info btn-sm' href='count.php'>booking</a>";
                                ?>
                        </TD>
                    </tr> 
        </tbody>
    </table>
</div>