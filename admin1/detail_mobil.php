<?php require_once("../commons/function.php"); ?>
<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Detail Mobil | Admin</title>
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
                <!-- <div class="row">
                    <div class="col-md-12">
                     <h2>Blank Page</h2>   
                        <h5>Welcome Jhon Deo , Love to see you back. </h5>
                       
                    </div>
                </div> -->
     <div class="container">    
        <div class="row">
            <div class="col-md-10">
                <h3>Detail Angkutan</h3>
                <br>
                <?php 
                        $id = $_GET['id_angkutan'];
                        $query = "SELECT * FROM angkutan where id_angkutan = $id";   
                        $item = mysqli_query($conn,$query);
                        while($items = mysqli_fetch_array($item)){
                    ?>
                    <div class="col-sm-4">
                <img src="../image/<?=$items['gambar'];?>" style="width: 300px; height: 300px;"></div>
                <div class="col-sm-5"><iframe src="<?=$items['maps'];?>" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div><br>
                <br>
                <table class="table table-hover">
                    
                  <tr>
                         <th>id</th>
                         <td><?=$items['id_angkutan'];?></td>
                    </tr>
                     <tr>
                         <th>Nama Angkutan</th>
                         <td><?=$items['nama_angkutan'];?></td>
                    </tr>
    
                    <tr>
                        <th>Asal Angkutan</th>
                        <td><?=$items['asal'];?></td>
                    </tr>
                    <tr>
                        <th>Tujuan Angkutan</th>
                        <td><?=$items['tujuan'];?></td>
                    </tr>
                    <tr>
                        <th>Wilayah</th>
                        <td><?=$items['wilayah'];?></td>
                    </tr>
                    <tr>
                        <th>Rute Angkutan</th>
                        <td><?=$items['rute'];?></td>
                    </tr>
            
                <?php } ?>
                </table>
            </div>
        </div>
    </div>


    <script src="assets/js/jquery-1.10.2.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.metisMenu.js"></script>
    <script src="assets/js/custom.js"></script>
    
    </body>
    </html>