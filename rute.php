<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="css/style_1.css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/STYLE/open-iconic-bootstrap.min.css" />
    <link rel="stylesheet" href="assets/STYLE/animate.css" />
    <link rel="stylesheet" href="assets/STYLE/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/STYLE/owl.theme.default.min.css" />
    <link rel="stylesheet" href="assets/STYLE/magnific-popup.css" />
    <link rel="stylesheet" href="assets/STYLE/aos.css" />
    <link rel="stylesheet" href="assets/STYLE/ionicons.min.css" />
    <link rel="stylesheet" href="assets/STYLE/bootstrap-datepicker.css" />
    <link rel="stylesheet" href="assets/STYLE/jquery.timepicker.css" />
    <link rel="stylesheet" href="assets/STYLE/flaticon.css" />
    <link rel="stylesheet" href="assets/STYLE/icomoon.css" />
    <link rel="stylesheet" href="http://tuktuk.trpl20.com/css/style.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous" />
</head>
<body>
    <?php 
  require_once("header.php")
   ?>
       <div class="hero-wrap" style="background-image: url('image/ikon.jpg'); background-size: cover; background-position: center center;">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text d-flex align-itemd-center justify-content-center">
        </div>
      </div>
    </div>
<br><br>
    


<div class="container-fluid">
  <div class="row">
    <div class="col-md-2"></div>
  <div class="col-md-8" style="background-color: #FFE4C4">
  <h4><b style="font-family: Cooper Black;"><center>Informasi Rute Angkot Kota Siantar</center></b></h4>
  <h5><center>Cari Rute Angkot yang Anda Inginkan.</center></h5>
</div>
<div class="col-md-2"></div>
</div>

 
    <section class="ftco-section">
      <div class="container">
        <center>
         <h5> Masukan tempat asal dan tujuan yang ingin Anda kunjungi</h5>
          <div class="searchotel col-md-10">
            <form class="d-flex" action="rute.php" method="POST">
              <input name="asal" class="form-control me-2"  placeholder="Pilih Lokasi Keberangkatan "/>&nbsp; <input name="tujuan" class="form-control me-2"  placeholder="Pilih Lokasi tujuan"/>&nbsp; &nbsp;

              <button id="cari" name="search" class="btn btn-outline-warning rounded-circle" style="width: 55px ;" type="submit"><i class="fas fa-search"></i></button>
            </form>
          </div>
        </center>
    </div>

      <?php 
      include("conn.php");
      if(isset($_POST['search'])){
        $asal = $_POST['asal'];
        $tujuan = $_POST['tujuan'];

        if( $asal!=""|| $tujuan!=""){
          $query = "SELECT * FROM angkutan WHERE  asal = '$asal' and tujuan = '$tujuan'";
      
          $data = mysqli_query($conn,$query) or die('error');
          if(mysqli_num_rows($data) > 0){
            while($row = mysqli_fetch_assoc($data)){
  
                  $id_angkutan = $row['id_angkutan'];
                  $nama_angkutan = $row['nama_angkutan'];
              $asal = $row['asal'];
              $tujuan = $row['tujuan'];
              $wilayah = $row['wilayah'];
              $rute = $row['rute'];
              ?>
               <div class="row d-flex shadow p-3 mb-5 bg-body rounded">
                    <div class="hotel-list col-md-4 d-flex ftco-animate container mt-3">
            <div class="blog-entry align-self-stretch">
            <center>
             <img class="card-img-top" src="image/<?php echo $row['gambar']; ?>" alt="Card image cap">
            </a>
            </center>
              <div class="text mt-3">
                <div class="meta mb-2">
                </div>
                <h3 class="heading"><a><?php echo $row['nama_angkutan'];?></h3>
                <p class="hotel-title-list container"><i class="fas fa-map-marker-alt text-danger"></i>&nbsp;<a><?php echo $row['rute'];?></a></p>
                <p class="container" style="text-align : justify">Silahkan KLik link berikut, untuk memperoleh informasi selengkapnya.</p>
                <a href="#" class="btn btn-outline-primary" style="font-weight: bold;" data-bs-toggle="modal" data-bs-target="#abc<?php echo $row['id_angkutan']; ?>">More info</a>
             </a>
           </h3>
         </div>
       </div>
     </div>
   </div>
<div class="modal fade" id="abc<?php echo $row['id_angkutan']; ?>"  data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-body">
        <center><h1 id="hotel-info-title" class="">Description</h1></center><br>
        <div class="row container">
          <div class="container">
            <b class="hotel-name"><?=$row['nama_angkutan'];?></b>
            <section>
             <img  src="image/<?=$row['gambar'];?>" style="width: 350px; height: 250px;">
            </section>
            <table class="table mt-4">
                <tr>
                <td class="w-25"><i class="fas fa-mobile text-primary"></i>&nbsp;Nama Angkutan</td>
                <td>:</td>
                <td><?=$row['nama_angkutan'];?></td>
              </tr>
              <tr>
                <td class="w-25"><i class="fas fa-map-marker-alt text-danger"></i>&nbsp;Rute</td>
                <td>:</td>
                <td><?=$row['rute'];?></td>
              </tr>
              <tr>
                <td><i class="fas fa-star text-warning"></i>&nbsp;Tempat Keberangkatan </td>
                <td>:</td>
                <td><?=$row['asal'];?></td>
              </tr>
              <tr>
                <td><i class="fas fa-star"></i>&nbsp;Tujuan Angkutan</td>
                <td>:</td>
                <td><?=$row['tujuan'];?></td>
              </tr>
              <tr>
                <td><i class="fas fa-map-marker-alt text-primary"></i>&nbsp;Wilayah Angkutan</td>
                <td>:</td>
                <td><?=$row['wilayah'];?></td>
              </tr>
             
            </table>
          </div>
          <div class="map-hotel container col-md-12 mt-4" style="border: 1px solid;" ><center><h3>Location</h3>
            <iframe src="<?=$row['maps'];?>" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" class="responsive-iframe"></iframe>
            </center>
          </div>
        </div>
      </div>
      <div class="modal-footer">
          <button type="button"  class="btn btn-danger col-md-4" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div> 
</div> 
</div>
</div>
    <?php
       }
      }     
        else{
          ?>
          <tr>
            <td>Angkutan tidak tersedia </td>
          </tr>
           <?php
              }
            }
          }
?>
     </tbody>
    </table>    
  </div>
 </section>
</div>
</div>
 <footer class="ftco-footer ftco-section img px-3" style="background: url(image/ikon.jpg);">
    <div class="overlay"></div>
    <div class="container">
    <div class="row mb-5">
        <div class="col-md">
        <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2" style="font-family: Rockwell Extra Bold">RUTE ANGKOT</h2>
            <p>Rute Angkot adalah sebuah sistem Informasi berbasis web yang memuat informasi singkat mengenai kota Siantar, dan  Rute angkutan yang ada di kota Siantar</p>
         
        </div>
        </div>
        <div class="col-md">
        <div class="ftco-footer-widget mb-4 ml-md-5">
            <h2 class="ftco-heading-2">Direct Links</h2>
            <ul class="list-unstyled">
            <li><a href="index.php" class="py-2 d-block">HOME</a></li>
            <li><a href="HTML.php" class="py-2 d-block">RUTE ANGKOT</a></li>
            <li><a href="usulan.php" class="py-2 d-block">USULAN</a></li>
            <li><a href="login.php" class="py-2 d-block">Login</a></li>
            </ul>
        </div>
        </div>
        <div class="col-md">
        <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Related Links</h2>
            <ul class="list-unstyled">
            <li><a href="https://www.del.ac.id/" target="_blank" class="py-2 d-block">Institut Teknologi Del</a></li>
            <li><a href="https://pematangsiantar.go.id/" target="_blank" class="py-2 d-block">Pemerintah Kota Siantar </a></li>
            <li><a href="https://www.lapor.go.id/instansi/dinas-perhubungan-44" target="_blank" class="py-2 d-block">Dinas Perhubungan Kota Siantar</a></li>
            <li><a href="http://dephub.go.id/" target="_blank" class="py-2 d-block">Kementerian Perhubungan RI</a></li>
            </ul>
        </div>
        </div>
        <div class="col-md">
        <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Have a Questions?</h2>
            <div class="block-23 mb-3">
            <ul>
                <li>
                    <a href="https://goo.gl/maps/m5xTfS3RhhdhAnYr9"><span class="fas fa-map-marker-alt text-danger"></span>&nbsp;&nbsp;<span class="text">  Bah Kapul, Siantar Sitalasari, Kota Pematang Siantar, Sumatera Utara 21139</span></a>
                </li>
                <li>
                    <a href="https://api.whatsapp.com/send?phone=6282369589517"><span class="fas fa-phone text-primary"></span><span class="text"> +6282369589517</span></a>
                </li>
                <li>
                    <a href=""><span class="fas fa-envelope"></span><span class="text">  RuteAngKotSiantar@gmail.com</span></a>
                </li>
            </ul>
            </div>
        </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 text-center">
        <p>
            Copyright &copy;
            <script>
            document.write(new Date().getFullYear());
            </script>All Rights Reserved | This Website Is Developed By <a href="https://www.del.ac.id/" target="_blank"><span style="color: #ffff00;">Kelompok 10 PA 1 - IT Del</span></a>
        </p>
        </div>
    </div>
  
    <link rel="stylesheet" href="assets/STYLE/style.css" />
</footer>
    
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    <script src="assets/STYLE/jquery.min.js"></script>
    <script src="assets/STYLE/balaspesan.js"></script>
    <script src="assets/STYLE/jquery-migrate-3.0.1.min.js"></script>
    <script src="assets/STYLE/popper.min.js"></script>
    <script src="assets/STYLE/bootstrap.min.js"></script>
    <script src="assets/STYLE/jquery.easing.1.3.js"></script>
    <script src="assets/STYLE/jquery.waypoints.min.js"></script>
    <script src="assets/STYLE/jquery.stellar.min.js"></script>
    <script src="assets/STYLE/owl.carousel.min.js"></script>
    <script src="assets/STYLE/jquery.magnific-popup.min.js"></script>
    <script src="assets/STYLE/aos.js"></script>
    <script src="assets/STYLE/jquery.animateNumber.min.js"></script>
    <script src="assets/STYLE/bootstrap-datepicker.js"></script>
    <script src="assets/STYLE/scrollax.min.js"></script>
    <script src="js/google-map.js"></script>
    <script src="assets/STYLE/main.js"></script>
  </body>

</html>

