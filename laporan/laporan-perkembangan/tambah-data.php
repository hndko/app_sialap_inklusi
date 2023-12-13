<?php
require_once '../../config/koneksi.php';
$resultDataGuru = mysqli_query($koneksi, "SELECT * FROM `gp`");
$resultDataSiswa = mysqli_query($koneksi, "SELECT * FROM `siswa`");

if (isset($_POST['submit'])) {
    $id_siswa = $_POST['id_siswa'];
    $id_guru = $_POST['id_guru'];
    $ketercapaian_menulis = $_POST['ketercapaian_menulis'];
    $program_lanjutan_menulis = $_POST['program_lanjutan_menulis'];
    $ketercapaian_math = $_POST['ketercapaian_math'];
    $program_lanjutan_math = $_POST['program_lanjutan_math'];
    $ketercapaian_ipa = $_POST['ketercapaian_ipa'];
    $program_lanjutan_ipa = $_POST['program_lanjutan_ipa'];
    $ketercapaian_ppkn = $_POST['ketercapaian_ppkn'];
    $program_lanjutan_ppkn = $_POST['program_lanjutan_ppkn'];
    $ketercapaian_pai = $_POST['ketercapaian_pai'];
    $program_lanjutan_pai = $_POST['program_lanjutan_pai'];
    $ketercapaian_ips = $_POST['ketercapaian_ips'];
    $program_lanjutan_ips = $_POST['program_lanjutan_ips'];
    $atensi   = $_POST['atensi'];
    $emosi  = $_POST['emosi'];
    $motorik_halus = $_POST['motorik_halus'];
    $motorik_kasar = $_POST['motorik_kasar'];

    $sql = "INSERT INTO `tb_print` VALUES (null,'$id_siswa','$id_guru','$ketercapaian_menulis','$program_lanjutan_menulis','$ketercapaian_math','$program_lanjutan_math','$ketercapaian_ipa','$program_lanjutan_ipa','$ketercapaian_ppkn','$program_lanjutan_ppkn','$ketercapaian_pai','$program_lanjutan_pai','$ketercapaian_ips','$program_lanjutan_ips','$atensi','$emosi','$motorik_halus','$motorik_kasar')";
    $result = mysqli_query($koneksi, $sql);

    if ($result > 0) {
        echo "
		<script>
			alert('Data Berhasil Ditambahkan!');
            window.location.href = 'index.php';
        </script>
    ";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }

    mysqli_close($koneksi);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <?php require_once '../../include/head.php' ?>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php require_once '../../include/sidebar.php' ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php require_once '../../include/topbar.php' ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Laporan Perkembangan</h1>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex justify-content-between align-items-center">
                            <h6 class="m-0 font-weight-bold text-primary">Form Input Data</h6>
                            <a href="index.php" class="btn btn-primary btn-sm">Kembali</a>
                        </div>
                        <div class="card-body">
                            <form action="" method="post">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="id_siswa">Nama Siswa</label>
                                        <select class="form-control" id="exampleFormControlSelect2" name="id_siswa">
                                            <?php foreach ($resultDataSiswa as $rowSiswa) : ?>
                                                <option value="<?= $rowSiswa["id_siswa"] ?>"><?= $rowSiswa['nama_siswa'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Nama Guru</label>
                                        <select class="form-control" id="exampleFormControlSelect2" name="id_guru">
                                            <?php foreach ($resultDataGuru as $rowGuru) : ?>
                                                <option value="<?= $rowGuru["id_gp"] ?>"><?= $rowGuru['nama'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Ketercapaian Menulis</label>
                                        <textarea name="ketercapaian_menulis" id="" rows="2" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Program Lanjutan Menulis</label>
                                        <textarea name="program_lanjutan_menulis" id="" rows="2" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Ketercapaian Matematika</label>
                                        <textarea name="ketercapaian_math" id="" rows="2" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Program Lanjutan Matematika</label>
                                        <textarea name="program_lanjutan_math" id="" rows="2" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Ketercapaian IPA</label>
                                        <textarea name="ketercapaian_ipa" id="" rows="2" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Program Lanjutan IPA</label>
                                        <textarea name="program_lanjutan_ipa" id="" rows="2" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Ketercapaian PPkN</label>
                                        <textarea name="ketercapaian_ppkn" id="" rows="2" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Program Lanjutan PPkN</label>
                                        <textarea name="program_lanjutan_ppkn" id="" rows="2" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Ketercapaian PAI</label>
                                        <textarea name="ketercapaian_pai" id="" rows="2" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Program Lanjutan PAI</label>
                                        <textarea name="program_lanjutan_pai" id="" rows="2" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Ketercapaian IPS</label>
                                        <textarea name="ketercapaian_ips" id="" rows="2" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Program Lanjutan IPS</label>
                                        <textarea name="program_lanjutan_ips" id="" rows="2" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Atensi dan Konsentrasi</label>
                                        <textarea name="atensi" id="" rows="2" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Emosi</label>
                                        <textarea name="emosi" id="" rows="2" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Motorik Halus</label>
                                        <textarea name="motorik_halus" id="" rows="2" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Motorik Kasar</label>
                                        <textarea name="motorik_kasar" id="" rows="2" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                                    <button type="reset" class="btn btn-secondary">Reset</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php require_once '../../include/footer.php' ?>
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
    <?php require_once '../../include/modal-logout.php' ?>

    <?php require_once '../../include/javascript.php' ?>

</body>

</html>