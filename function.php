<?php 
function connect_database(){
	$database =  mysqli_connect("localhost", "root", "" ,"proyekpa");
	if(!$database){
			echo ("Tidak terkoneksi ");
	return $database;
 	}
}


 ?>