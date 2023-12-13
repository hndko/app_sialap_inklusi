<?php
include '../config/koneksi.php';
$id = $_GET['id_siswa'];
$query = "SELECT * FROM siswa WHERE id_siswa='$id' ";
$result = mysqli_query($koneksi, $query);
$data = mysqli_fetch_assoc($result);

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
              <h3 class="m-0 font-weight-bold text-primary">Data Siswa</h3>
            </div>
            <div class="row">
              <div class="col-md-6">

                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <div class="mb-3">
                            <input type="hidden" class="form-control w-50" name="id" value="<?= $data['id']; ?>">
                            <label for="nis"><b>NIS :</b></label>
                            <h5> <?= $data['nis']; ?> </h5>
                          </div>

                          <div class="mb-3">
                            <label for="nama_siswa"><b>Nama Lengkap : </b></label>
                            <h5><?= $data['nama_siswa']; ?></h5>
                          </div>
                          <div class="col-md-6 row">
                            <img src="<?= $base_url ?>assets/foto/fotocewe.jpg" width="200px">
                          </div>
                          <div class="mb-3">
                            <label for="nama_panggilan">Nama Panggilan</label>
                            <h5><?= $data['nama_panggilan']; ?></h5>
                          </div>
                          <div class="mb-3">
                            <label for="kelas">Kelas</label>
                            <h5> <?= $data['kelas']; ?></h5>
                          </div>
                          <div class="mb-3">
                            <label for="periode">Periode</label>
                            <h5><?= $data['periode']; ?></h5>
                          </div>
                          <div class="mb-3">
                            <label for="tempat_lahir"><b>Tempat lahir : </b></label>
                            <h5> <?= $data['tempat_lahir']; ?></h5>
                          </div>
                          <div class="mb-3">
                            <label for="tgl_lahir"><b>Tgl Lahir : </b></label>
                            <h5><?= $data['tgl_lahir']; ?></h5>
                          </div>
                          <div class="mb-3">
                            <label for="alamat"><b>Alamat : </b></label>
                            <h5><?= $data['alamat']; ?></h5>
                          </div>
                          <hr>
                        </tr>
                        <a href="tampil.php" class="btn btn-secondary"><i class="bi bi-reply"></i> Kembali</a>
                  </div>
                  </thead>
                  </table>
                </div>
              </div>
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

  <!-- Bootstrap core JavaScript-->
  <?php require_once '../include/javascript.php' ?>

</body>

</html>