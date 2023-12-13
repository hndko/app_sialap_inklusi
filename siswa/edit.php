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
    require_once "../include/sidebar.php";
    ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php
        require_once "../include/topbar.php";
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
              <h3 class="m-0 font-weight-bold text-primary">Edit Data Siswa</h3>
            </div>

            <form action="editproses.php" method="POST" enctype="multipart/form-data">
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <div class="mb-3">
                          <label for="id_jadwal">ID Jadwal</label>
                          <input type="text" class="form-control w-50" name="id_siswa" value="<?= $data['id_siswa']; ?>" readonly>
                          <label for="nis">NIS</label>
                          <input type="text" class="form-control w-50" name="nis" value="<?= $data['nis']; ?>">
                        </div>
                        <div class="mb-3">
                          <label for="nama_siswa">Nama Lengkap</label>
                          <input type="text" class="form-control w-50" name="nama_siswa" value="<?= $data['nama_siswa']; ?>">
                        </div>
                        <div class="mb-3">
                          <label for="nama_panggilan">Nama Panggilan</label>
                          <input type="text" class="form-control w-50" name="nama_panggilan" value="<?= $data['nama_panggilan']; ?>">
                        </div>
                        <div class="mb-3">
                          <label for="kelas">Kelas</label>
                          <input type="text" class="form-control w-50" name="kelas" value="<?= $data['kelas']; ?>">
                        </div>
                        <div class="mb-3">
                          <label for="periode">Periode</label>
                          <input type="text" class="form-control w-50" name="periode" value="<?= $data['periode']; ?>">
                        </div>
                        <div class="mb-3">
                          <label for="tempat_lahir">Tempat lahir</label>
                          <input type="text" class="form-control w-50" name="tempat_lahir" value="<?= $data['tempat_lahir']; ?>">
                        </div>
                        <div class="mb-3">
                          <label for="tgl_lahir">Tgl Lahir</label>
                          <input type="date" class="form-control w-50" name="tgl_lahir" value="<?= $data['tgl_lahir']; ?>">
                        </div>
                        <div class="mb-3">
                          <p>Jenis kelamin</p>
                          <input type="radio" id="jk" name="jk" value="laki-laki" <?= $data['jk'] == 'laki-laki' ? 'checked' : null ?>>
                          <label for="jk" class="form-label">Laki-laki</label>
                          <input type="radio" id="jk" name="jk" value="perempuan" <?= $data['jk'] == 'perempuan' ? 'checked' : null ?>>
                          <label for="jk" class="form-label">Perempuan</label>
                        </div>
                        <div class="mb-3">
                          <label for="alamat">Alamat</label>
                          <textarea class="form-control w-50" id="alamat" rows="5" name="alamat"><?= $data['alamat']; ?></textarea>
                        </div>
                        <hr>
                      </tr>
                      <button type="submit" name="submit" class="btn btn-primary"><i class="bi bi-download"></i>Simpan</button>
                      <a href="tampil.php" class="btn btn-secondary"><i class="bi bi-reply"></i> Kembali</a>
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

  <!-- Bootstrap core JavaScript-->
  <?php require_once '../include/javascript.php' ?>

</body>

</html>