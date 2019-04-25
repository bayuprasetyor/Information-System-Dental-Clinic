
<div align="center">
    <h1><label class="label label-success">Data Pasien Terdaftar</label></h1>
    <?php
        $hari1 = $_GET['hari1'];
        $_SESSION['hari1']=$_GET['hari1'];
        $hari2 = $_GET['hari2'];
        $_SESSION['hari2']=$_GET['hari2'];
            $id = $_GET['id_user'];
            $query = "SELECT * FROM tbl_dokter where id_user = $id";
            $_SESSION['id']=$_GET['id_user'];


for ($i=1; $i <= 7; $i++) { 
        //$tanggal = '2015-06-03';
        //$day = date('D', strtotime($tanggal));
        $dayList = array(
            'Sun' => 'Minggu',
            'Mon' => 'Senin',
            'Tue' => 'Selasa',
            'Wed' => 'Rabu',
            'Thu' => 'Kamis',
            'Fri' => 'Jumat',
            'Sat' => 'Sabtu'
        );
        $nextD = mktime(0, 0, 0, date("m") , date("d"), date("Y"));
        $kemarin1 = date('Y-m-d', strtotime("$i day", strtotime(date("Y-m-d"))));
        $day1 = date('D', strtotime($kemarin1));
        if($dayList[$day1] == $hari1){
            $today1 = $day1;
            $tanggal1 = $kemarin1;
            
        }
        $kemarin2 = date('Y-m-d', strtotime("$i day", strtotime(date("Y-m-d"))));
        $day2 = date('D', strtotime($kemarin2));
        if($dayList[$day2] == $hari2){
            $today2 = $day2;
            $tanggal2 = $kemarin2;
        }
    }
?>

    <br>
</div>
<br>
<table>
<form action="booking.php" method="post">
    <tr>
        <td>
            Nama Pasien  
        </td>
        <td>
            <div class="input-group input-lg">
                <input class="form-control input-lg" type="text" name="username" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required=""style="color: black;height: 40px;">
            </div>
        </td>
    </tr>

    <tr>
        <td>
            Tanggal 
        </td>
        <td>
                    <div class="input-group input-lg">
                    <?php echo "
                        <input type='radio' name='tanggal' value='$tanggal1'>". $dayList[$today1] ." ". $tanggal1 ." <br>
                        <input type='radio' name='tanggal' value='$tanggal2'>". $dayList[$today2] ." ". $tanggal2 ." <br>"
                    ?>
                    </div>
        </td>
        
    </tr>
    <tr>
        <td>
            Jam : 
        </td>
        <td>
            <input type="text" name = "jam"style="width: 70px;" id="jam1" value="" />
        </td>
    </tr>
    <tr>
        <td rowspan='4'>
            Pelayanan 
        </td>
        <td>
            <div class="input-group input-lg">
            <input style="width: 100%;text-align:center;"class="form-control input-lg"type="checkbox"name="karang" value="1"style="color: black;height: 40px">Bersihkan Karang Gigi <br />
            <input style="width: 100%;text-align:center;"class="form-control input-lg"type="checkbox"name="cabut" value="1"style="color: black;height: 40px">Cabut Gigi <br />    
            <input style="width: 100%;text-align:center;"class="form-control input-lg"type="checkbox"name="tambal" value="1"style="color: black;height: 40px">Tambal Gigi <br />      
            <input style="width: 100%;text-align:center;" class="form-control input-lg"type="checkbox"name="pemasangan" value="1"style="color: black;height: 40px">Pemasangan Kawat Gigi <br /> 
            </div>
        </td>

    </tr>
    
    <tr>
        <td>
            <button type="reset" class="btn btn-inverse"><i class="glyphicon glyphicon-refresh"></i> Reset </button>
        </td>
        <TD>
            <button type="submit" class="btn btn-primary" id="submit"><i class="glyphicon "></i>  booking </button>
        </TD>
    </tr>
</form>
</table>

