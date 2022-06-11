<?php 
	global $conn;
	$conn = mysqli_connect("localhost", "root", "", "proyekpa");
	if(!$conn){
		die("Masalah Pada Database");
	}

	$db_use = mysqli_select_db($conn, "proyekpa") or die("Select Database Problem !!");

	$id = $_GET['id_kontribusi'];
    $query = "DELETE FROM kontribusi WHERE id_kontribusi='$id'";
	if($conn->query($query)==true){
		echo"<script>alert('Usulan berhasil Dihapus');</script>";
	}
    header('Refresh:0 url=data_kontribusi.php');
?>