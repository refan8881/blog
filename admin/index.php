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
  
  

?>

  <!-- Head -->
  <?php include('../layouts/includes/head.php')?>
  <!-- end head -->
  <body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
    <!-- navbar -->
  <?php include('../layouts/includes/navbar.php');?>
    <!-- end navbar -->
    <div class="app-body">
      <!-- sidebar -->
    <?php include('../layouts/includes/sidebar.php')?>
      <!-- end sidebar -->
     
      <!-- Main -->
      <main class="main">
      </main>
      <!-- End -->
    </div>
    <!-- footer -->
    <?php include('../layouts/includes/footer.php')?>
    <!-- end footer -->
    <!-- CoreUI and necessary plugins-->
    <!-- script -->
      <?php include('../layouts/includes/script.php')?>
    <!-- end script -->
  </body>
</html>

<?php

}

?>
