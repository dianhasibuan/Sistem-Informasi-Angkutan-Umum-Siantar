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
                    <?php
			              require_once("../commons/function.php");
			              $id = $_GET['id_kontribusi'];
                    $show = mysqli_query($conn, "SELECT * FROM kontribusi WHERE id_kontribusi='$id'");
                    if(mysqli_num_rows($show)==0){
				            echo '<script>window.history.back()</script>';
                  }else{
				          $data = mysqli_fetch_array($show);
                }
		?>
				<div class="row">
					<div class="col-md-10">
						<div class="komentar">
							<h3>KIRIM TANGGAPAN</h3><hr class="pg-titl-bdr-bta"></hr>
							<form action="tanggapan_process.php?id_kontribusi=<?php echo $id ?> " method="post" role="form">
								<div class="form-group">
									<table class="table ">
										<tr>
											<th>Nama Angkutan</th>
                                          
											<td><?php echo $data['angkutan'] ?></td>
										</tr>
										<tr>
											<th>asal </th>
											<td><?php echo $data['asal'] ?></td>
										</tr>
										<tr>
											<th>Tujuan Angkutan</th>
											<td><?php echo $data['tujuan'] ?></td>
										</tr>
                       <tr>
											<th>Keterangan</th>
											<td><?php echo $data['keterangan'] ?></td>
										</tr>
                    <tr>
                      <th>Tanggapan</th>
                      <td><?php echo $data['tanggapan'] ?></td>
                    </tr>
									</table>
									
								</div>
								<div class="form-group">
									<p>Tanggapan</p>
									<textarea name="tanggapan" class="form-control" row="5" value="<?php echo $data['tanggapan'] ?>" required></textarea>
								</div>
								<div class="text-center"><button name="edit" type="submit" class="btn btn-komentar btn-primary">Kirim Tanggapan</button></div>
							</form>
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
