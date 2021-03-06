<?php
  session_start();
  
  if (!isset($_SESSION['login_user_status'])) {
    echo "<script>window.location = '../../index';</script>";
  }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Friend & Knead - Dashboard User</title>
    <!-- Meta Library -->
    <meta charset="utf-8" />
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Stylesheet -->
    <link rel="shortcut icon" href="../../assets/images/favicon.png" type="image/png">
    <link rel="stylesheet" href="../../assets/css/all.min.css" type="text/css">
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../../assets/css/style.css" type="text/css">
    <link rel="stylesheet" href="../../assets/plugin/sweetalert/dist/sweetalert2.min.css" type="text/css">
</head>
<body>
    <!-- Navbar -->
    <div class="container-fluid my-bg">
        <div class="row">
          <div class="col-lg-8">
              <img class="navbar-logo" src="../../assets/images/logo.png" alt="Logo">
          </div>
        </div>
    </div>
    
    <nav class="navbar sticky-top navbar-expand-lg navbar-light my-bg shadows">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="../.."><i class="fas fa-home"></i> Halaman Utama</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="dashboard">Dashboard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="keranjang">Keranjang</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="transaksi">Transaksi</a>
            </li>
          </ul>
        </div>
        
        <button type="button" class="btn btn-sm btn-danger" id="btnLogout"><i class="fas fa-sign-out-alt"></i> KELUAR</button>
      </div>
    </nav>

    <!-- Footer -->
    <div class="my-bg mt-3 py-2 text-center">
      <small>Copyright 2018 by Kelompok Pemrograman Web 1</small>
    </div>

    <!-- Javascript -->
    <script src="../../assets/js/jquery-3.3.1.min.js" type="text/javascript"></script>
    <script src="../../assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../../assets/js/popper.min.js" type="text/javascript"></script>
    <script src="../../assets/plugin/sweetalert/dist/sweetalert2.all.min.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function () {
        $(document).on('click', '#btnLogout', function () {
          swal({
            title: 'Apakah Anda Yakin?',
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#e74c3c',
            cancelButtonColor: 'gray',
            confirmButtonText: 'Logout'
          }).then((result) => {
            if (result.value) {
              $.ajax({
                url: '../../include/user/logout',
                type: 'POST',
                success: function () {
                  swal('Berhasil', 'Anda berhasil logout.','success');
                  setTimeout(function(){ window.location = '../../index' }, 1500);
                }
              });
            }
          });
        });
      });
    </script>
</body>
</html>