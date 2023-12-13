<?php 
include 'koneksi.php';
$id_siswa = $_POST['id_siswa'];
$id_gp = $_POST['id_gp'];
$program = $_POST['program'];
$ketercapaian = $_POST['ketercapaian'];
$program_lanjutan = $_POST['program_lanjutan'];


$query="UPDATE lapgp SET 
id_siswa  = '$id_siswa',
id_gp    = '$id_gp',
program     ='$program',
ketercapaian = '$ketercapaian',
program_lanjutan = '$program_lanjutan'
WHERE id_laporan = $id";

$result = mysqli_query($koneksi, $query);
if ($result){
	header('location:tampil.php');
} else{
	echo "
	Data Gagal diubah";

}

?>