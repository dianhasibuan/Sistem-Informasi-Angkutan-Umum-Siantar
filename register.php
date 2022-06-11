<!DOCTYPE html>
<html>
<head>  
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Beranda</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="css/style_1.css" />
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">>
  <link rel="stylesheet" href="css/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
  <?php 
  require_once("header.php")
   ?>
   <br><br><br><br> <br><br>
<center>
  <div class="container">
    <div class="login1">
      <form  action="prosesdaftar.php" method="POST" enctype="multipart/form-data">
        <p style="font-family: arial rounded mt;font-size: 24px;">REGISTER</p>
        <input type="text" name="namalengkap" placeholder="Nama Lengkap" pattern="[A-Za-z]+" class="login-input" style="text-align: left;" required><br><br>
        <input type="date" name="tanggallahir" placeholder="Tanggal Lahir" class="login-input" required><br><br>
        <div class="container" style="text-align: left;color: grey;"> Jenis Kelamin</p><br>
        <input type="radio" name="jenis_kelamin" value="L"  required>Laki-laki &nbsp;
        <input type="radio" name="jenis_kelamin" value="P"  required>Perempuan
    </div><br><br>
        <input type="email" name="email" placeholder="E-mail"class="login-input" required><br>
        <input type="text" name="username" placeholder="username" class="login-input" required><br><br>
        <input type="password" name="password" placeholder="Kata Sandi"class="login-input" required><br>
        <button class="btn btn-success">Daftar</button>
        <br><br>
        <p>Anda Sudah punya Akun?? &nbsp;<a href="login.php"<button class="btn btn-primary btn-sm">Login</button></a></p>
     </form>
   </div>
<br><br><br><br><br><br><br><br>
</center>
</div>
<?php 
require_once("footer2.php");
 ?>
</body>
</html>