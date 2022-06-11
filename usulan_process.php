<?php
  session_start();
  if(isset($_SESSION['is_logged_in']))
  {
    require_once(dirname(__FILE__).'/conn.php');

    $id = NULL;
    $angkutan = $_POST['angkutan'];
    $asal = $_POST['asal'];
    $tujuan = $_POST['tujuan'];
    $keterangan = $_POST['keterangan'];
    $nama = $_SESSION['namalengkap'];
	$tanggapan = NULL;
    $quer = "INSERT INTO kontribusi VALUES('$id','$nama','$angkutan','$asal','$tujuan','$keterangan','$tanggapan')";
    $hasil = mysqli_query($conn,$quer);

    if($hasil)
    {
	  echo"<script>alert('Terimakasih atas usulannya:)');</script>";
      header("Refresh:0 url=daftar_kontribusi.php");
    }
    else {
      echo "Ada Masalah";
    }
  }
  else {
    header('Location:login.php');
  }
?>
