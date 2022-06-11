<?php require_once("../commons/function.php"); ?>
<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Beranda | Admin  </title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/custom.css" rel="stylesheet" />
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<?php 
    require_once("header.php");
    ?>
    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2>Selamat datang , Admin</h2>
                </div>
                </div>
                <div class="row">
                    <div class="col-md-6">           
                        <div class="panel panel-back noti-box">
                            <span class="icon-box bg-color-red set-icon">
                                <i class="fa fa-user"></i>
                            </span>
                            <div class="text-box" >
                                <?php 
                                $query = "SELECT COUNT(id_user) FROM pengguna WHERE role = 2";
                                     $jumlah_pengguna = mysqli_query($conn, $query);
                                     $jumlah_penggunas = mysqli_fetch_array($jumlah_pengguna); 
                                    ?>                                       
                                    <p class="main-text"><?=$jumlah_penggunas['COUNT(id_user)'];?> User</p><p class="text-muted">Jumlah Pengguna</p>
                                </div>
                            </div>
                        </div>
                     <div class="col-md-6">           
                        <div class="panel panel-back noti-box">
                            <span class="icon-box bg-color-blue set-icon">
                                <i class="fa fa-taxi"></i>
                            </span>
                            <div class="text-box" >
                                <?php 
                                $query = "SELECT COUNT(Nama_Angkutan) FROM angkutan";
                                     $jumlah_pengguna = mysqli_query($conn, $query);
                                     $jumlah_penggunas = mysqli_fetch_array($jumlah_pengguna); 
                                    ?>
                                    <p class="main-text"><?=$jumlah_penggunas['COUNT(Nama_Angkutan)'];?> Angkutan</p>
                                    <p class="text-muted">Jumlah Angkutan</p>
                            </div>
                        </div>
                     </div>  
                 </div>
                 <div class="col-md-6">
                    <div class="panel panel-back noti-box">
                        <span class="icon-box bg-color-green set-icon">
                            <i class="fa fa-list"></i>
                            </span>
                            <div class="text-box" >
                                <?php 
                                $query = "SELECT COUNT(id_kontribusi) FROM kontribusi ";
                                     $jumlah_pengguna = mysqli_query($conn, $query);
                                     $jumlah_penggunas = mysqli_fetch_array($jumlah_pengguna); 
                                    ?>
                                    <p class="main-text"><?=$jumlah_penggunas['COUNT(id_kontribusi)'];?> Jumlah Usulan</p>                                    
                                <p class="text-muted">Usulan</p>
                            </div>
                        </div>
                     </div>                     
                 </div>
        </div>
    </div>
    <script src="assets/js/jquery-1.10.2.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.metisMenu.js"></script>
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
