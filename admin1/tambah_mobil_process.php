<?php 
if(isset($_POST['TambahAngkutan'])){
	include('../commons/function.php');

   	$nama_angkutan = $_POST['namaAngkutan'];
	$wilayah = $_POST['WilayahAngkutan'];
	$asal = $_POST['asal'];
	$tujuan = $_POST['tujuan'];
	$rute = $_POST['rute'];
	$gambar = $_POST['gambar'];
	$maps = $_POST['peta'];

	if($_FILES['gambar']['name']){
		move_uploaded_file($_FILES['gambar']['tmp_name'], '../image/'.$nama_angkutan.'.jpg'); 
		$gambar = ''.$nama_angkutan.'.jpg';
	}else{
			echo ("salah kode <br>");
		}

    $quer = "INSERT INTO angkutan VALUES('','$nama_angkutan','$wilayah','$asal','$tujuan','$rute','$gambar','$maps')";
    $hasil = mysqli_query($conn,$quer);
	if($hasil){
	 		echo"<script>alert('Tambah Tujuan Angkutan berhasil');</script>";
	 		header("location:data_mobil.php");
	 	}
	 	else{
	 		echo 'Gagal menambahkan Angkutan '; 
	 		header("location:data_mobil.php");
	 	}
	}
?>
