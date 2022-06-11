<?php session_start(); ?>
 <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <title></title>
      <link rel="stylesheet" href="css/stylee.css">    
   </head>
   <body class="main-layout">
      <header>
         <div class="header" style="background-color: #B0E0E6">
         <div class="container ">
            <div class="row">
               <div class="col-md-2">
                  <div class="full">
                     <div class="center-desk">
                        <div class="logo"> <a href="index.php">
               <h4 style="font-family: Showcard Gothic; font-size: 28px;font-style: black;">Rute Angkot</h4>
                        </a> </div>
                     </div>
                  </div>
               </div>
           
               <div class="col-md-10">
                  <div class="menu-area">
                     <div class="limit-box">
                        <nav class="main-menu">
                           <ul class="menu-area-main">

                              <li class="active"> <a href="index.php">Home</a> </li>
                              <li> <a href="rute.php">Rute Angkot</a> </li>
                              <li> <a href="usulan.php">Usulan</a> </li>
                                                   
                                 <?php
                                 if(isset($_SESSION['is_logged_in'])){
                                 $nama=$_SESSION['namalengkap'];?>
                              <li><a href="logout.php"><span class=" glyphicon glyphicon-log-out"></span> Logout</a></li>
                              <li ><a href="profil.php"><span class="glyphicon glyphicon-user"></span> <?php echo $nama ?></a></li>
                              <?php
                           }
                           else{
                              ?>
                              <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                              <li><a href="register.php"><span class="glyphicon glyphicon-plus-sign"></span> Daftar</a></li>
                              <?php
                           }
                           ?>
                        </ul>
                     </div>
                  </div>
               </nav>
            </div>
         </div>
      </div>
   </div>
</div>     
</body>
</html>
