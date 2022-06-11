<?php 
	global $conn;
	$conn = mysqli_connect("localhost", "root", "", "proyekpa");
	if(!$conn){
		die("Masalah Pada Database");
	}

	$db_use = mysqli_select_db($conn, "proyekpa") or die("Select Database Problem !!");

	$id_angkutan = $_GET['id_angkutan'];
    $query = "DELETE FROM angkutan WHERE id_angkutan='$id_angkutan'";
	if($conn->query($query)==true){
		echo"<script>alert('Angkutan berhasil Dihapus');</script>";
	}
    header('Refresh:0 url=data_mobil.php');
?>