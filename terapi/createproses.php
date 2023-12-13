<?php
include '../config/koneksi.php';

$nip 		= $_POST['nip'];
$nama_terapi = $_POST['nama_terapi'];
$jk 		= $_POST['jk'];
$notelp 	= $_POST['notelp'];




$query = "INSERT INTO terapi (id_terapi, nip, nama_terapi, jk, notelp) 
VALUES (null,'$nip', '$nama_terapi', '$jk', '$notelp')";

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
