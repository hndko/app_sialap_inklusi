<?php 
include 'koneksi.php';
$id = $_POST['id'];
$nis = $_POST['nis'];
$hari = $_POST['hari'];
$jam = $_POST['jam'];
$nama_terapis = $_POST['nama_terapis'];


$query="UPDATE jadwal_terapi SET 
nis     ='$nis',
hari = '$hari',
jam = 'jam',
nama_terapis     = '$nama_terapis',
keterapian = '$keterapian',
lokasi = '$lokasi'
WHERE nis = $nis";

$result = mysqli_query($koneksi, $query);
if ($result){
	header('location:tampil.php');
} else{
	echo "
	Data Gagal diubah";

}

?>