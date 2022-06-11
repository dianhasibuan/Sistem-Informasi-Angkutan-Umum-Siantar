<?php 
	global $conn;
	$conn = mysqli_connect("localhost", "root", "", "proyekpa");
	if(!$conn){
		die("Masalah Pada Database");
	}

	$db_use = mysqli_select_db($conn, "proyekpa") or die("Select Database Problem !!");

	$id = $_GET['ID_Rute'];
    $query = "DELETE FROM rute WHERE ID_Rute='$id'";
	if($conn->query($query)==true){
		echo"<script>alert('Rute berhasil Dihapus');</script>";
	}
    header('Refresh:0 url=data_tujuan.php');
?>