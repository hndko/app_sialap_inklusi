<?php require_once '../config/koneksi.php' ?>

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
              <h3 class="m-0 font-weight-bold text-primary">Tambah Data Guru Pendamping</h3>
            </div>


            <form action="createproses.php" method="POST" enctype="multipart/form-data">

              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>

                        <div class="mb-3">
                          <label for="nip">NIP</label>
                          <input type="text" class="form-control w-50" name="nip">
                        </div>
                        <div class="mb-3">

                          <label for="foto" class="form-label">Foto</label>
                          <input type="file" class="form-control-file" name="foto">
                        </div>
                        <div class="mb-3">

                          <label for="nama">Nama Lengkap</label>
                          <input type="text" class="form-control w-50" name="nama">
                        </div>
                        <div class="mb-3">

                          <p>Jenis kelamin</p>
                          <input type="radio" id="jk" name="jk" value="Laki-laki">
                          <label for="jk" class="form-label">Laki-laki</label>
                          <input type="radio" id="jk" name="jk" value="Perempuan">
                          <label for="jk" class="form-label">Perempuan</label>
                        </div>
                        <div class="mb-3">
                          <label for="password">Password</label>
                          <input type="text" class="form-control w-50" name="password">
                        </div>
                        <div class="mb-3">
                          <label for="alamat">Alamat</label>
                          <textarea class="form-control w-50" rows="5" name="alamat"></textarea>
                        </div>
                        <hr>

                        <button type="submit" name="submit" class="btn btn-primary"><i class="bi bi-download"></i>Simpan</button>

                        <a href="tampil.php" class="btn btn-secondary"><i class="bi bi-reply"></i> Kembali</a>

                      </tr>
                    </thead>

                  </table>

                </div>
              </div>
            </form>
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