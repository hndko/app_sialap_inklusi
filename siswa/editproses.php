<?php
include '../config/koneksi.php';
$id = $_POST['id_siswa'];
$nis = $_POST['nis'];
$nama_siswa = $_POST['nama_siswa'];
$nama_panggilan = $_POST['nama_panggilan'];
$kelas = $_POST['kelas'];
$periode = $_POST['periode'];
$tempat_lahir = $_POST['tempat_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$jk = $_POST['jk'];
$alamat = $_POST['alamat'];



$query = "UPDATE siswa SET 
nis     ='$nis',
nama_siswa = '$nama_siswa',
nama_panggilan = '$nama_panggilan',
kelas = '$kelas',
periode = '$periode',
tempat_lahir     = '$tempat_lahir',
tgl_lahir = '$tgl_lahir',
jk      = '$jk',
alamat     = '$alamat'
WHERE id_siswa = $id";

$result = mysqli_query($koneksi, $query);
if ($result) {
	header('location:tampil.php');
} else {
	echo "
	Data Gagal diubah";
}
