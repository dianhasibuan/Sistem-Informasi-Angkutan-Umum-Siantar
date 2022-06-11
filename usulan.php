 <!DOCTYPE html>
<html>
<head>	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Rute Angkot</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" media="screen" href="css/style_1.css" />
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link href='//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css' rel='stylesheet'/>
<body>
	<?php 
	require_once("header.php");
	?><br><br><br>
<section id="inner-headline">
    <div class="container">
    </div>
   </section>
<br>
<section>
	<div class="container">
	  <div class="row">
		<div class="col-sm-6">
		<div class="login1" style="float: left;">
		<div class="row">
			<div class="col-md-12">
				<form method="post" action="usulan_process.php">
				<center><p style="font-family: arial rounded mt;font-size: 18px;">Anda dapat memasukkan Informasi Angkutan yang anda ketahui</p></center><br>
				<h3>Nama angkutan</h3>
				<input class="form-control" type="text" name="angkutan" required>
				<h3>Asal Angkutan</h3>
				<input class="form-control" type="text" name="asal" required>
				<h3>Tujuan Angkutan</h3>
				<input class="form-control" type="text" name="tujuan" required>
				<h3>Keterangan:</h3>
				<textarea name="keterangan" class="form-control" style="height: 130px;"></textarea>
				<br><br>
				<button name="tambahKontribusi" class="btn btn-success" style="float:right;padding-right:20px;"> 	Kirim</button>
			</form>
			</div>
		</div>
	</div>
    </div>
    <div class="col-sm-6">
 		<div class="info">
 				<ul type="none"> &nbsp;
 					<li>
 						<p style="font-size: 22px;" >1. Kami mengharapkan informasi masukan berupa nama dan rute angkutan yang anda ketahui yang  dapat membangun layanan kami kedepannya</p>

 					</li>
 					<br><br>
 					<li>
						<p style="font-size: 22px;" >2. Kami mengharapkan kontribusi yang anda masukkan menggunakan bahasa yang sopan</p>

 					</li>
 					<br><br>
 					<li>
						<p style="font-size: 22px;" >3. Terima kasih untuk masukan informasinyaa</p>

 					</li>
 				</ul>
 			</div>
 		</div>
 	</div>
</div>

</section>
<br><br><br><br><br>
	<?php
	require_once("footer2.php");
	?>
</body>
</html>