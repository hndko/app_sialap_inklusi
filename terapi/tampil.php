<?php
include '../config/koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <?php require_once '../include/head.php' ?>

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!--Sidebar-->
    <?php
    include "../include/sidebar.php";
    ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php
        include "../include/topbar.php";
        ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
          <form class="form-inline">
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
              <i class="fa fa-bars"></i>
            </button>
          </form>
          <!-- Page Heading -->



          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h3 class="m-0 font-weight-bold text-primary">Tabel Data Terapi</h3>
            </div>
            <div class="card shadow mb-2">
              <div class="card-header py-2">
                <a href="create.php" class="btn btn-primary btn-sm "><i class="bi bi-person-plus-fill"></i> Tambah Data</a>
                <button onclick="window.print()" class="btn btn-outline-secondary btn-sm shadow float-right">print <i class="fa fa-print"></i></button>
              </div>

              <form action="" method="POST"></form>

              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th width="5px">No.</th>

                        <th>NIP</th>
                        <th>Nama Terapis</th>
                        <th>Jenis Kelamin</th>
                        <th>No. Hp</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <?php

                    $query = "SELECT * FROM terapi";
                    $result = mysqli_query($koneksi, $query);
                    $no = 1;
                    while ($data = mysqli_fetch_assoc($result)) {
                    ?>


                      <tbody>
                        <tr>
                          <td><?= $no; ?> </td>

                          <td><?= $data['nip'] ?></td>

                          <td><?= $data['nama_terapi'] ?></td>
                          <td><?= $data['jk'] ?></td>
                          <td><?= $data['notelp'] ?></td>
                          <td>
                            <a href="edit.php?id_terapi=<?= $data['id_terapi'] ?>" class="btn btn-danger btn-sm"><i class="bi bi-pencil-square"></i></a>
                            <a href="hapus.php?id=<?= $data['id'] ?>" class="btn btn-warning btn-sm"><i class="bi bi-trash3"></i></a>
                          </td>
                        </tr>
                      </tbody>
                    <?php
                      $no++;
                    }
                    ?>
                  </table>
                </div>
              </div>
            </div>

          </div>
          <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <?php require_once '../include/footer.php' ?>
        <!-- End of Footer -->

      </div>
      <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <?php require_once '../include/modal-logout.php' ?>

    <?php require_once '../include/javascript.php' ?>

</body>

</html>