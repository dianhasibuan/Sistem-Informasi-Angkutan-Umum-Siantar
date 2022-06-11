<?php require_once("../commons/function.php"); ?>
<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Daftar Angkutan | Admin </title>
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
            <div class="col-md-10">
                <h3>Daftar Angkutan</h3>
                <a href="tambah_mobil.php"><button class="btn btn-success"><span class="glyphicon glyphicon-plus"></span>Tambah Angkutan</button></a><br><br>
                <br>
                <table class="table table-hover">
                    <tr>
                        <th>id Angkutan</th>
                        <th>Nama Angkutan</th>
                        <th>Wilayah</th>
                        <th>Asal Angkutan</th>
                        <th>Tujuan Angkutan</th>
                        <th>Rute Angkotan</th>
                        <th>Gambar</th>
            
                        <th>Opsi</th>
                        <th></th>
                        <th></th>
                    </tr>
                    <?php 
                        $query = "SELECT * FROM angkutan";  
                        $item = mysqli_query($conn,$query);
                        while($items = mysqli_fetch_array($item)){
                    ?>
                    <tr>
                        <td><?=$items['id_angkutan']?></td>
                        <td><?=$items['nama_angkutan'];?></td>
                        <td><?=$items['wilayah'];?></td>
                        <td><?=$items['asal'];?></td>
                        <td><?=$items['tujuan'];?></td>
                        <td><?=$items['rute'];?></td>
                        <td><?=$items['gambar'];?></td>

                     
                        <td>
                        <a href="detail_mobil.php?id_angkutan=<?=$items['id_angkutan']?>"><button class="btn btn-primary"><span class="glyphicon glyphicon-eye-open"></button></span></a></td>
                        <td><a href="edit_mobil.php?id_angkutan=<?=$items['id_angkutan']?>"><button class="btn btn-warning"><span class="glyphicon glyphicon-wrench"></span></button></a></td>
                        <td><a href="hapus_mobil.php?id_angkutan=<?= $items['id_angkutan']?>"  onclick="return confirm('Anda yakin ingin menghapus?')"><button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button></a></td>
                    </td>
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