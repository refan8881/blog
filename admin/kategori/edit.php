<?php 
session_start();
if (!$_SESSION['login']) {
    echo "<script type= 'text/javascript'>
    alert('maaf anda harus login terlebih dahulu!');
    </script>";
}else {
    include('../config/databases.php');
    $user = new Database();
    $user = mysqli_query($user->koneksi,
        "select * from users where password='$_SESSION[login]'");
        //var_dump($_SESSION['login']);
        $user = mysqli_fetch_array($user);
  
  
}
?>