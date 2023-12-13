<?php
require_once '../config/koneksi.php';
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">

  <meta name="generator" content="Hugo 0.101.0">
  <title>Login Multi User | Silap</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/floating-labels/">



  <!-- Bootstrap core CSS -->
  <link href="<?= $base_url ?>assets/dist/css/bootstrap.min.css" rel="stylesheet">



  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>


  <!-- Custom styles for this template -->
  <link href="<?= $base_url ?>assets/dist/css/floating-labels.css" rel="stylesheet">
</head>

<body>

  <form class="form-signin" method="POST" action="<?= $base_url ?>login/akses.php">
    <div class="text-center mb-4">
      <img class="mb-4" src="<?= $base_url ?>assets/foto/logo.png" alt="" width="100px" height="100px">
      <h1 class="h3 mb-3 font-weight-normal">Form Login</h1>
      <p>Masukan Username dan Password anda dengan Benar! </p>
    </div>

    <div class="form-label-group">
      <input type="text" class="form-control" name="username" placeholder="Masukan Username Anda!" autocomplete="off" required autofocus>
      <label>Masukan Username Anda!</label>
    </div>

    <div class="form-label-group">
      <input type="password" class="form-control" name="password" placeholder="Masukan Password Anda!" autocomplete="off" required>
      <label>Masukan Password Anda!</label>
    </div>
    <input type="submit" name="login" class="btn btn-lg btn-primary btn-block" value="login">
    <p class="mt-5 mb-3 text-muted text-center">&copy; Silap | 2022</p>
  </form>

</body>

</html>