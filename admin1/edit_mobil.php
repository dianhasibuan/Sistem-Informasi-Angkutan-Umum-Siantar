<?php require_once("../conn.php"); ?>
<?php 

    $id = $_GET['id_angkutan'];
            
    $show = mysqli_query($conn, "SELECT * FROM angkutan WHERE id_angkutan='$id'");
            
    if(mysqli_num_rows($show)==0){
        echo '<script>window.history.back()</script>';
    }else{
        $data = mysqli_fetch_array($show);
    }
?>

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
    <div class="row">
        <div class="col-sm-8">
            <h3>Perbaruan Angkutan</h3>
            <form action="edit_mobil_proses.php?id_angkutan=<?= $id ?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label>Nama Angkutan</label>    
                <input type="text" value="<?=$data['nama_angkutan'];?>" class="form-control" name="nama_angkutan" required><br>
               <label>Wilayah</label>  
               <input type="text" value="<?=$data['wilayah'];?>" class="form-control" name="wilayah" required><br>                
                <label>Asal Angkutan</label>
                <input type="text" value="<?=$data['asal'];?>" class="form-control" name="asal" required><br> 
                 <label>Tujuan Angkutan</label>
                <input type="text" value="<?=$data['tujuan'];?>" class="form-control" name="tujuan" required><br>
                 <label>Rute Angkutan</label>
                <input type="text" value="<?=$data['rute'];?>" class="form-control" name="rute" required><br>  
                <label>Gambar</label>
                <input type="file" placeholder="<?=$data['gambar'];?>" name="gambar" accept="img/*" class="form-control" >
                 <label>Peta Rute Angkutan</label>
                <textarea type="text" value="<?=$data['maps'];?>" class="form-control" name="maps" required></textarea> <br> 
                <button class="btn btn-primary" name="perbarui" type="submit">Perbarui</button>
            </div>
            </form>
        </div>
    </div>
</div>
 


       
    
    <script src="assets/js/jquery-1.10.2.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.metisMenu.js"></script>
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
