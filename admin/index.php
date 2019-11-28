    <?php
    session_start();
    if (!$_SESSION['login']) {
      echo "<script type='text/javascript'>
      alert('Maaf Anda Harus Login Terlebih Dahulu!');window.location='../login.php'</script>";
    } else {
      include ('../config/database.php');
      $user = new Database();
      $user = mysqli_query($user->koneksi,
      "SELECT * FROM users WHERE password='$_SESSION[login]'");
      // var_dump($_SESSION['login']);
      $user = mysqli_fetch_array($user);
      ?>
  <!-- Head -->
  <?php include('../layouts/includes/head.php'); ?>
  <!-- End Head -->
  <body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
  <!-- Header -->
  <?php include('../layouts/includes/navbar.php'); ?>
  <!-- End Header -->
    <div class="app-body">
    <!-- Sidebar -->
    <?php include('../layouts/includes/sidebar.php'); ?>
    <!-- End Sidebar -->
      <main class="main">
                    <img src="/assets/admin-template/img/wel.png"  height="460px">
      </main>
    </div>
  <!-- Footer -->
<?php include('../layouts/includes/footer.php'); ?>
  <!-- End Footer -->
    <!-- CoreUI and necessary plugins-->
    <!-- Scripts-->
    <?php include('../layouts/includes/scripts.php'); ?>
    <!-- End Scripts -->
  </body>
</main>
<?php } ?>
