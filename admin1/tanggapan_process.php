<?php
  if(isset($_POST['edit']))
  {
    include('../conn.php');

    $id = $_GET['id_kontribusi'];
	$tanggapan = $_POST['tanggapan'];
    
	$hasil = mysqli_query($conn, "UPDATE kontribusi SET tanggapan='$tanggapan' WHERE id_kontribusi='$id'");
	
    if($hasil)
    {
	  echo"<script>alert('Saran Telah Ditanggapi!');</script>";
      header("Refresh:0 url=data_kontribusi.php");
    }
    else {
      echo "Ada Masalah";
    }
  }
  else {
    header('Location:login.php');
  }
?>
