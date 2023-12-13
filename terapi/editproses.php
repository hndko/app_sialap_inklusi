<?php 
include '../config/koneksi.php';
$id_terapi = $_POST['id_terapi'];
$nip = $_POST['nip'];
$nama_terapi = $_POST['nama_terapi'];
$jk = $_POST['jk'];
$notelp = $_POST['notelp'];

$query="UPDATE terapi SET 
nip     	='$nip',
nama_terapi = '$nama_terapi',
jk     	    = '$jk',
notelp 		= '$notelp'
WHERE id_terapi = $id_terapi";

$result = mysqli_query($koneksi, $query);
if ($result){
	header('location:tampil.php');
} else{
	echo "
	Data Gagal diubah";

}
