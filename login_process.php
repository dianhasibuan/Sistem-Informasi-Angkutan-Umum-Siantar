<?php
  // session_start();
  $usernames = $_POST['username'];
  $passwords = $_POST['password'];

  require_once(dirname(__FILE__).'/conn.php');

  $query = "SELECT * FROM pengguna WHERE username = '$usernames' and password = '$passwords'";
  $exect = mysqli_query($conn,$query);

  $user_konfirmasi = "";
  $pass_konfirmasi = "";

  while($row=mysqli_fetch_array($exect))
  {
    $user_konfirmasi = $row['username'];
    $pass_konfirmasi = $row['password'];
    $namalengkap = $row['namalengkap'];
    $id_user = $row['id_user'];
    $role = $row['role'];
  }
  if($usernames == $user_konfirmasi && $passwords == $pass_konfirmasi)
  {
    session_start();
    $_SESSION['is_logged_in'] = TRUE;
    $_SESSION['id_user'] = $id_user;
    $_SESSION['role'] = $role;
    if($role == 2)
    {
      $_SESSION['is_logged_in'] = TRUE;
      $_SESSION['namalengkap'] = $namalengkap;
     
      
       header("Refresh:0 url=index.php");
    }
    else if($role==1){
      header("Location:admin1/index.php");
    }
    
  }
  else
  {
    echo"<script>alert('Username dan Password Invalid');</script>";
      header("Refresh:0 url=login.php");
  }

?>
