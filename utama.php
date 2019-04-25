<?php
/*
|--------------------------------------------------------------------------
| Header Front Office / Resepsionis
|--------------------------------------------------------------------------
|
|   Aplikasi Sistem Informasi Rumah Sakit Sederhana
|   by Dendi Abdul Rohim 
|   dendicious@gmail.com
|   dendicous.com
|
*/
include './konfig.php';
session_start();
    ?>
    <html>
        <head>
            <title>Halaman Utama</title>
            <script type="text/javascript" src="js/jquery-1.8.0.min.js"></script>
            <script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
            <script type="text/javascript" src="js/bootstrap.min.js"></script>
            <link rel="stylesheet" href="css/bootstrap.min.css">
            <link rel="stylesheet" href="font-awesome-4.1.0/css/font-awesome.min.css">
            <link rel="stylesheet" href="css/jquery.dataTables.min.css">
            <link rel="stylesheet" type="text/css" media="all" href="jsdatepick-calendar/jsDatePick_ltr.min.css" />
            <script type="text/javascript" src="jsdatepick-calendar/jsDatePick.jquery.min.1.3.js"></script>
            <style type="text/css">
                /*	#searchid
                        {
                                width:500px;
                                border:solid 1px #000;
                                padding:10px;
                                font-size:14px;
                        }*/
                #result
                {
                    position:absolute;
                    width:300px;
                    padding:5px;
                    display:none;
                    margin-top:40px;
                    border-top:0px;
                    overflow:hidden;
                    border:1px #CCC solid;
                    background-color: white;
                    z-index: 10;
                    font-size: 14px;
                    border-radius: 2px;
                    box-shadow: 0 2px 4px rgba(0,0,0,0.2);
                    -webkit-box-shadow: 0 2px 4px rgba(0,0,0,0.2);
                }
                .show
                {
                    padding:10px; 
                    border-bottom:1px #999 dashed;
                    /*		font-size:12px; */
                    height:50px;
                }
                .show:hover
                {
                    background:#428bca;
                    color: #fff;
                    cursor:pointer;
                }
            </style>
            <script type="text/javascript">
                $(document).ready(function () {
                    $('#datatable').dataTable();
                });
            </script>


<link rel="stylesheet" href="css/jquery-ui.css" type="text/css" />
<link rel="stylesheet" href="css/jquery.ui.timepicker.css?v=0.3.3" type="text/css" />
<script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="js/jquery-ui.js"></script> 
<script type="text/javascript" src="js/jquery.ui.timepicker.js?v=0.3.3"></script>
<script type="text/javascript">
            $(document).ready(function() {
                $('#jam1').timepicker({
                    showPeriodLabels: false
                });
              });
</script>
        </head>

<body>
<nav class="navbar navbar-default navbar-static-top" role="navigation"  style="-webkit-box-shadow: 0px 0px 10px #888888;">
    <div class="navbar-header">
        <a class="navbar-brand" href="#">Sistem Informasi GG</a>
    </div>
    <div style="float: right; padding-right: 100px;">
        <ul class="nav navbar-nav">
            <li <?php if (isset($_GET['view'])) {
            echo $_GET['view'] == 'halaman_utama' || $_GET['view'] == 'tampil_ubah_pasien' ? 'class="active"' : '';
            } ?>><a href="utama.php?view=halaman_utama">Beranda &nbsp;</a>
            </li>  

            <li <?php if (isset($_GET['view'])) {
                echo $_GET['view'] == 'tampil_prj' || $_GET['view'] == 'tampil_ubah_prj' ? 'class="active"' : '';
            } ?>><a href="utama.php?view=pesan">Informasi Dokter &nbsp; </a>
            </li>
                            <?php
                                if (isset($_SESSION['username'])){
                                    $user = $_SESSION['username'];
                                    echo "<li><a href=\"#\">".$user."</a></li>";
                                    echo "<li><a href=\"logout.php\">logout</a></li>";
                                }else{ ?>
                            <li>
                                <a href="#" data-toggle="modal" data-target="#myModal4">Login</a>
                            </li>
                            <li>
                                <a href="#" data-toggle="modal" data-target="#myModal5">Register</a>
                            </li>
                            <?php
                            }
                            ?>

            </ul>
    </div>
</nav>
<div class="container">
    <div class="col-lg-12">
        <div class="panel panel-default"> 
            <div class="panel-body">
                <?php
                if (isset($_GET['view'])) {
                    $view = $_GET['view'];
                    include 'front-office/' . $view . '.php';
                } else {
                    header("location:utama.php?view=halaman_utama");
                }
                ?>
            </div>
        </div>
    </div>
</div>
<footer align="center">
</footer>
</body>
</html>
<!-- //login -->
<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" >
                <div class="modal-dialog" role="document">
                    <div class="modal-content modal-info">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>                        
                        </div>
                        <div class="modal-body modal-spa">
                            <div class="login-grids">
                                    
                                    <div class="login-right">
                                        <h3>Sign in with your account</h3>
                                        <form action="login.php" method="post">
                                            <div class="sign-in">
                                                <h4>Username :</h4>
                                                <input type="text" placeholder='Username' name="username" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required=""style="color: black">    
                                            </div>
                                            <div class="sign-in">
                                                <h4>Password :</h4>
                                                <input type="password" placeholder='Password'name="password" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required=""style="color: black">
                                            </div>

                                            <div class="sign-in">
                                                <input type="submit" name = "login" value="login" >
                                            </div>
                                            <h4>Belum punya akun? <br></h4><p><a href="#" data-toggle="modal" data-target="#myModal5"> Daftar Disini</a></p>                                            
                                        </form>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- //end login -->
<!-- //register -->
            <div class="modal fade" id="myModal5" tabindex="-1" role="dialog" >
                <div class="modal-dialog" role="document">
                    <div class="modal-content modal-info">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>                        
                        </div>
                        <div class="modal-body modal-spa">
                            <div class="login-grids">
                                    <div class="login-bottom">
                                        <h3>Sign up for free</h3>
                                        <form action="register.php" method="post">
                                            <div class="sign-up">
                                                <h4>Username :</h4>
                                                <input type="text" placeholder='username' name="username" id="username"value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required=""style="color: black">   
                                            </div>
                                            <div class="sign-up">
                                                <h4>Password :</h4>
                                                <input type="password" placeholder='password' name="password" value="" id="password"onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required=""style="color: black">
                                                
                                            </div>
                                            <div class="sign-up">
                                                <input type="submit" value="REGISTER NOW" >
                                            </div>
                                            
                                        </form>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- //end register -->


