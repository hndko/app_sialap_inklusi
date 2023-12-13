<?php 
include 'koneksi.php';

$id_terapi 	= $_POST['id_terapi'];
$id_siswa 	= $_POST['id_siswa'];
$program		    = $_POST['program'];
$ketercapaian 		= $_POST['ketercapaian'];
$program_lanjutan 	= $_POST['program_lanjutan'];



$query="INSERT INTO lapterapis (id_jadwal, id_terapi, id_siswa, program, ketercapaian, program_lanjutan) VALUES ('','$id_terapi' ,'$id_siswa' ,'$program' ,'$ketercapaian' ,'$program_lanjutan')";

$result = mysqli_query($koneksi, $query);
var_dump($result);

if ($result) {
	header('location: tampil.php');
} else {
	echo 'data gagal ditambahkan';
}


?>




