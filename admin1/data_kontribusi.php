<?php require_once("../commons/function.php"); ?>
<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Daftar Kontribusi | Admin  </title>
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
              <h3>Daftar Usulan Rute Angkot</h3><br>
              <table class="table table-hover">
                <tr>
                  <th>id</th>
						      <th>Nama</th>
                  <th>Nama Angkutan</th>
                  <th>Asal Angkutan</th>
	                <th>Tujuan</th>
                  <th>keterangan</th>
                  <th>Tanggapan</th>
                  <th></th>
						       <th>Opsi</th>
					      </tr>
                <tr>
                  <?php $query = "SELECT * FROM kontribusi";
                        $kontribusi =mysqli_query($conn, $query);
                        while($kontribusii = mysqli_fetch_array($kontribusi)){
                         ?>
                         	<td><?=$kontribusii['id_kontribusi']?></td>
                          <td><?=$kontribusii['nama_user']?></td>
                          <td><?=$kontribusii['angkutan']?></td>
                          <td><?=$kontribusii['asal']?></td>
                          <td><?=$kontribusii['tujuan']?></td>
                          <td><?=$kontribusii['keterangan']?></td>
                          <td><?=substr($kontribusii['tanggapan'],0,10)?><?php echo "<a href='tanggapan.php?id_kontribusi=".$kontribusii['id_kontribusi']."'>....Lihat Selengkapnya</a>"; ?></td>
						              <td><a href="tanggapan.php?id_kontribusi=<?=$kontribusii['id_kontribusi']?>"><button class="btn btn-primary"><i class="fa fa-location-arrow"></i></button></a></td>
                          <td><a href="hapus_kontribusi.php?id_kontribusi=<?=$kontribusii['id_kontribusi']?>" onclick="return confirm('Anda yakin ingin menghapus?')"><button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button></a></td>
					       </tr>
                <?php } ?>
				</table>
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
