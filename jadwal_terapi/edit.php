<?php
include '../config/koneksi.php';

$id = $_GET['id_jadwal'];
$query = "SELECT jadwal_terapi.*, siswa.nama_siswa, terapi.nama_terapi FROM `jadwal_terapi` INNER JOIN siswa USING(`id_siswa`) INNER JOIN terapi USING(`id_terapi`) WHERE jadwal_terapi.`id_jadwal` = '$id' ";
$result = mysqli_query($koneksi, $query);
$data = mysqli_fetch_assoc($result);
$resultDataTerapi = mysqli_query($koneksi, "SELECT * FROM `terapi`");
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
              <h3 class="m-0 font-weight-bold text-primary">Edit Jadwal Terapi</h3>
            </div>

            <form action="editproses.php" method="POST" enctype="multipart/form-data">

              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <div class="mb-3">
                          <label for="id_jadwal">ID Jadwal</label>
                          <input type="text" class="form-control w-50" name="id_jadwal" value="<?= $data['id_jadwal']; ?>" readonly>
                        </div>
                        <div class="mb-3">
                          <label for="nama_terapi">Nama Terapi</label>
                          <select class="form-control w-50" id="exampleFormControlSelect2" name="id_terapi">
                            <?php foreach ($resultDataTerapi as $rowTerapi) : ?>
                              <option value="<?= $rowTerapi["id_terapi"] ?>" <?php if ($data['id_terapi'] == $rowTerapi['id_terapi']) echo 'selected' ?>><?= $rowTerapi['nama_terapi'] ?></option>
                            <?php endforeach; ?>
                          </select>
                        </div>
                        <div class="mb-3">
                          <label for="nama_siswa">Nama Siswa</label>
                          <input type="text" class="form-control w-50" name="id_siswa" value="<?= $data['nama_siswa']; ?>" readonly>
                        </div>
                        <div class="mb-3">
                          <label for="hari" class="form-label">Hari</label>
                          <input type="text" class="form-control w-50" name="hari" value="<?= $data['hari']; ?>">
                        </div>
                        <div class="mb-3">
                          <label for="jam_mulai">Jam Mulai</label>
                          <input type="text" class="form-control w-50" name="jam_mulai" value="<?= $data['jam_mulai']; ?>">
                        </div>
                        <div class="mb-3">
                          <label for="jam_selesai">Jam Selesai</label>
                          <input type="text" class="form-control w-50" name="jam_selesai" value="<?= $data['jam_selesai']; ?>">
                        </div>

                        <div class="mb-3">
                          <p>Keterapian</p>
                          <select class="form-control w-50" name="keterapian">
                            <option value="<?= $data['keterapian']; ?>"><?= $data['keterapian']; ?></option>
                            <option value="">Pilih...</option>
                            <option value="Sensori Integrasi" <?= $data['keterapian']; ?>>Sensori Integrasi</option>
                            <option value="Terapi Wicara" <?= $data['keterapian']; ?>>Terapi Wicara</option>
                            <option value="Pedagog" <?= $data['keterapian']; ?>>Pedagog</option>
                          </select>
                        </div>
                        <div class="mb-3">
                          <p>Lokasi</p>
                          <select class="form-control w-50" name="lokasi">
                            <option value="<?= $data['lokasi']; ?>"><?= $data['lokasi']; ?></option>
                            <option value="">Pilih...</option>
                            <option value="depan perpustakaan" <?= $data['lokasi']; ?>>Depan Perpusakaan</option>
                            <option value="gedung IAS" <?= $data['lokasi']; ?>>Gedung IAS</option>
                            <option value="gajebo" <?= $data['lokasi']; ?>>Gajebo</option>
                          </select>
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

  <?php require_once '../include/javascript.php' ?>

</body>

</html>