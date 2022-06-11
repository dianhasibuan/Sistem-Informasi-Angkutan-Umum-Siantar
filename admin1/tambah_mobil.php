<?php require_once("../conn.php"); ?>
<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Index | Admin </title>
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
         <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <h3>Tambah Angkutan</h3>
                    <form action="tambah_mobil_process.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Nama Angkutan </label>
                            <input type="text" class="form-control" name="namaAngkutan" required>
                        </div>
                        <div class="form-group">
                             <label>Wilayah</label>    
                             <input type="text" class="form-control" name="WilayahAngkutan" required>
                        </div>
                       <div class="form-group">
                            <label>Asal Angkutan </label>    
                            <input type="text" class="form-control" name="asal" required>
                       </div>
                       <div class="form-group">
                            <label>Tujuan Angkutan</label>    
                            <input type="text" class="form-control" name="tujuan" required>
                       </div>
                       <div class="form-group">
                            <label>Rute Angkutan</label>    
                            <input type="text" class="form-control" name="rute" required>
                       </div>
                        <div class="form-group">
                            <label>Gambar Atau Foto</label>    
                            <input type="file" class="form-control" name="gambar" required>
                       </div>
                        <div class="form-group">
                            <label>Peta Rute</label>    
                            <input type="text" class="form-control" name="peta" required>
                       </div>
                           <button class="btn btn-primary" name="TambahAngkutan" type="submit">Tambahkan</button>
                   </form>
        </div>
    </div>
</div>