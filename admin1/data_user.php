<?php require_once("../commons/function.php"); ?>
<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Daftar Pengguna | Admin  </title>
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
                    <h3>Daftar Pengguna</h3><br>
                    <table class="table table-hover">
					<tr>
						<th>id</th>
						<th>Nama Lengkap</th>
						<th>Tanggal Lahir</th>
						<th>Jenis Kelamin</th>
                        <th>Email</th>
						<th>Opsi</th>
					</tr>
					<?php 
						$query = "SELECT * FROM pengguna WHERE role = 2";	
						$item = mysqli_query($conn,$query);
						while($items = mysqli_fetch_array($item)){
					?>
					<tr>
						<td><?=$items['id_user'];?></td>
						<td><?=$items['namalengkap'];?></td>
						<td><?=$items['tanggallahir'];?></td>
						<td><?=$items['jenis_kelamin'];?></td>
						<td><?=$items['email'];?></td>
                        <td><a href="delete_user.php?id_user=<?=$items['id_user']?>" onclick="return confirm('Anda yakin ingin menghapus?')"><button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button></a>
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