<?php 
  require_once("function.php");
 ?>
 <!DOCTYPE html>
<html><head>  
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Profil</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="css/style_1.css" />
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="jquery/jquery-3.2.1.min.js">
  <link rel="stylesheet" href="css/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
      <?php
        require_once("header.php");?>
   <br><br><br>

    <div class="breadcrumb">
    <h2>Profil Saya</h2>
  </div>
  <?php
    include('conn.php');
    $id = $_SESSION['id_user'];  
    $query="SELECT * FROM pengguna WHERE id_user='$id'";
    $query1=mysqli_query($conn,$query);
    $query2=mysqli_fetch_array($query1);
    $nama=$query2['namalengkap'];
  
    $username=$query2['username'];
   
    $emails=$query2['email'];
    $jenis_kelamins=$query2['jenis_kelamin'];  
    ?> 
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          </div>
          <div class="col-sm-7">
             <center>
              <table border="0" style="size: 35px;padding: 0px;margin: 50px;font-size: 25px;">
               <tr>
                <td>Nama</td>
                <td>:</td>
                <td><?php echo $nama;?></td>
              </tr>
              <tr>
                <td>Username</td>
                <td>:</td>
                <td><?php echo $username;?></td>
              </tr>
              <tr>
                <td>Email</td>
                <td>:</td>
                <td><?php echo $emails;?></td>
              </tr>
              <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td><?php echo $jenis_kelamins;?></td>
              </tr>
            </table>
          </center>
        </div>
      </div>
    </div>
  </body>
</html>
<br><br><br><br><br>    
<?php
require_once("footer2.php");
?>