<?php
include '../config/koneksi.php';

$nis 			= $_POST['nis'];
$nama_siswa 	= $_POST['nama_siswa'];
$nama_panggilan	= $_POST['nama_panggilan'];
$kelas     = $_POST['kelas'];
$periode   = $_POST['periode'];
$tempat_lahir 	= $_POST['tempat_lahir'];
$tgl_lahir 		= $_POST['tgl_lahir'];
$jk 			= $_POST['jk'];
$alamat 		= $_POST['alamat'];z

$query = "INSERT INTO siswa (id_siswa, nis, nama_siswa, nama_panggilan, kelas, periode, tempat_lahir, tgl_lahir, jk, alamat) 
VALUES (null,'$nis', '$nama_siswa', '$nama_panggilan', '$kelas', '$periode', '$tempat_lahir', '$tgl_lahir', '$jk', '$alamat')";

$result = mysqli_query($koneksi, $query);
if ($result > 0) {
	echo "
		<script>
			alert('Data Berhasil Ditambahkan!');
            window.location.href = 'tampil.php';
        </script>
    ";
} else {
	echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}

mysqli_close($koneksi);
