<?php 
include 'koneksi.php';
$id_siswa	= $_POST['id_siswa'];
$id_gp	= $_POST['id_gp'];
$program 		= $_POST['program'];
$ketercapaian 		= $_POST['ketercapaian'];
$program_lanjutan 		= $_POST['program_lanjutan'];





$query = "INSERT INTO lapgp (id_laporan, id_siswa, id_gp, program, ketercapaian, program_lanjutan) 
VALUES ('', '$id_siswa', '$id_gp', '$program', '$ketercapaian', '$program_lanjutan')";
$result =mysqli_query($koneksi, $query);
if ($result) {
	header('location: tampil.php');
} else {
	echo "data gagal ditambahkan";
}


?>




