 <!DOCTYPE html>
<html><head>	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>DAFTAR KONTRIBUSI</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" media="screen" href="css/style_1.css" />
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="jquery/jquery-3.2.1.min.js">
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<script src="bootstrap/js/bootstrap.min.js"></script>
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link href='//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css' rel='stylesheet'/>
</head>
<body>
	<?php 
	require_once("header.php");
	?><br><br>
<section id="inner-headline">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ul class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-home"></i>Home</a><i class="icon-angle-right"></i></li>
			<li><a href="#" style="color:#000000;">Daftar Kontribusi</a></li>
           </ul>
        </div>
      </div>
    </div>
    </section>
	<div class="container">
			<div class="about">
				<div class="row">
					<h3 style="font-family: arial rounded mt;">Daftar Kontribusi</h3><hr class="pg-titl-bdr-bta"></hr>
						<?php
						  include_once('conn.php');
							$query = "SELECT * FROM kontribusi";
							$item = mysqli_query($conn, $query);
							while($items = mysqli_fetch_array($item)){
						?>
						<?php
							if(isset($_SESSION['is_logged_in']))
							{   
								$role = $_SESSION['role'];
								if($role == 2)
								 {
									?>

						<div class="col-sm-6">	
							<div class="panel panel-primary" style="text-align:center;background-color:  #E8FFFF">
								<tr>
								<div class="heading">
									<h2><?=$items['nama_user']?><h2></div>
									<div class="panel-body1"><p><b>Nama Angkutan</b></p>
										<h5><?=$items['angkutan']?></h5>
									</div>
									<div class="panel-body"><p><b>Asal Angkutan</b></p>
										<h5><?=$items['asal']?></h5>
									</div>
									<div class="panel-body"><p><b>Tujuan Angkutan</b></p>
										<h5><?=$items['tujuan']?></h5>
									</div>
									<div class="panel-body">
										<p><b>Keterangan:</b> <?=$items['keterangan']?></p>
									</div>
									<div class="panel-footer">
									<h3>Tanggapan Admin</h3>
										<h4><?=$items['tanggapan']?></h4>									
									</div>
							</div>
							<?php
								}
								else if($role == 1)
								{
							?>

							<div class="col-sm-6">
								<div class="panel panel-primary" style="text-align:center">
									<div class="heading"><h4><?=$items['nama_user']?><h4></div>
										<div class="panel-body1">
										<b><?=$items['angkutan']?></b>
									</div>
									<div class="panel-body">
										<?=$items['asal']?>
									</div>
									<div class="panel-body">Keterangan:
										<?=$items['tujuan']?>
									</div>
									<div class="panel-body">
										<p>Keterangan:<?=$items['keterangan']?></p>
									</div>
										<div class="panel-footer">
										<b>TANGGAPAN</b><br>
											<?=$items['tanggapan']?>
										</div>
								</div>
							<center>
								<a href="tanggapan.php?items_id=<?=$items['id_kontribusi']?>"><button class="btn btn-info">Tanggapi</button></a>
							</center><br>
						<?php
								}
							}?>
						</div>
						<?php }; ?>
					</div>
				</div>
			</div>
</section>
	<br><br><br><br><br><br><br><br>
	<br><br><br><br>
	<?php
	require_once("footer2.php");
	?>
</body>
</html>