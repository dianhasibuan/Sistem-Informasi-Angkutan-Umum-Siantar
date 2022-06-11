<?php
session_start();
$namalengkaps = $_POST['namalengkap'];
$tanggallahirs = $_POST['tanggallahir'];
$jenis_kelamins = $_POST['jenis_kelamin'];
$emails = $_POST['email'];
$usernames = $_POST['username'];
$passwords= $_POST['password'];
$role = 2;


  global $conn;
  require_once(dirname(__FILE__).'/conn.php');

  function execQ($strQ){
    global $conn;
    $res = mysqli_query($conn, $strQ);

    return $res;
  }

  $query = "INSERT INTO pengguna VALUES(NULL,'$namalengkaps' , '$tanggallahirs', '$jenis_kelamins', '$emails', '$usernames','$passwords','$role')";

  if(execQ($query)){
    $SIGN['is_sign_in'] = TRUE;
    header("location:login.php");
  }else{
    echo "gagal";
  }
