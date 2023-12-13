<?php 
include '../config/koneksi.php';
$id = $_POST['id_gp'];
$nip = $_POST['nip'];
$password = $_POST['password'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$alamat = $_POST['alamat'];

$query="UPDATE gp SET 
nip     ='$nip',
password = '$password',
nama = '$nama',
jk      = '$jk',
alamat = '$alamat'
WHERE id_gp = $id";

$result = mysqli_query($koneksi, $query);
if ($result){
	header('location:tampil.php');
} else{
	echo "
	Data Gagal diubah";

}
