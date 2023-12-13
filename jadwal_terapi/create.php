<?php
require_once '../config/koneksi.php';
$resultDataSiswa = mysqli_query($koneksi, "SELECT * FROM `siswa`");
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
              <h3 class="m-0 font-weight-bold text-primary">Tambah Jadwal Terapi</h3>
            </div>


            <form action="createproses.php" method="post">
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                    <thead>
                      <tr>

                        <div class="mb-3">

                          <label for="id_terapi">Nama Terapis</label>
                          <select class="form-control w-50" id="exampleFormControlSelect2" name="id_terapi">
                            <?php foreach ($resultDataTerapi as $rowTerapi) : ?>
                              <option value="<?= $rowTerapi["id_terapi"] ?>"><?= $rowTerapi['nama_terapi'] ?></option>
                            <?php endforeach; ?>
                          </select>
                        </div>
                        <div class="mb-3">
                          <label for="id_siswa">Nama Siswa</label>
                          <select class="form-control w-50" id="exampleFormControlSelect2" name="id_siswa">
                            <?php foreach ($resultDataSiswa as $rowSiswa) : ?>
                              <option value="<?= $rowSiswa["id_siswa"] ?>"><?= $rowSiswa['nama_siswa'] ?></option>
                            <?php endforeach; ?>
                          </select>
                        </div>
                        <div class="mb-3">
                          <label for="hari">Hari</label>
                          <input type="text" class="form-control w-50" name="hari">
                        </div>
                        <div class="mb-3">
                          <label for="jam_mulai">Jam Mulai</label>
                          <input type="time" class="form-control w-50" name="jam_mulai">
                        </div>
                        <div class="mb-3">
                          <label for="jam_selesai">Jam Selesai</label>
                          <input type="time" class="form-control w-50" name="jam_selesai">
                        </div>
                </div>

                <div class="mb-3">
                  <p>Keterapian</p>
                  <select class="form-control w-50" type="text" name="keterapian">
                    <option value="">Pilih...</option>
                    <option value="sensori integrasi">Sensori Integrasi</option>
                    <option value="terapi wicara">Terapi Wicara</option>
                    <option value="pedagog">Pedagog</option>
                  </select>
                </div>

                <div class="mb-3">
                  <p>Lokasi</p>
                  <select class="form-control w-50" type="text" name="lokasi">
                    <option value="">Pilih...</option>
                    <option value="depan perpustakaan">Depan Perpusakaan</option>
                    <option value="gedung IAS">Gedung IAS</option>
                    <option value="gajebo">Gajebo</option>
                  </select>
                </div>


                <hr>

                <button name="submit" class="btn btn-primary"><i class="bi bi-download"></i> Simpan</button>

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