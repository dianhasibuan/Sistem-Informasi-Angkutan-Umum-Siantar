
<?php

	if(isset($_POST['perbarui'])){
		include('../commons/function.php');
		$id_angkutan= $_GET['id_angkutan'];
		$nama_angkutan = $_POST['nama_angkutan'];
		$wilayah = $_POST['wilayah'];
		$asal = $_POST['asal'];
		$tujuan = $_POST['tujuan'];
		$rute = $_POST['rute'];
		$gambar = $_POST['gambar'];
			$maps = $_POST['maps'];
			
		
		if($_FILES['gambar']['name']){
			move_uploaded_file($_FILES['gambar']['tmp_name'], '../image/'.$nama_angkutan.'.jpg');
			$gambar = ''.$nama_angkutan.'.jpg'; 
		}else{
			echo 'salah_kode<br>';
		}
		
		 $hasil = mysqli_query($conn, "UPDATE angkutan SET nama_angkutan='$nama_angkutan', wilayah='$wilayah', asal='$asal', tujuan='$tujuan',rute='$rute',gambar='$gambar',maps='$maps'   WHERE id_angkutan='$id_angkutan'");
		if($hasil){
			  echo"<script>alert('Edit Angkutan Berhasil');</script>";
              header("location:data_mobil.php");
          }
		else{
			echo 'Gagal memperbarui Angkutan '; 
	
		}
	}

?>
