<?php
include '../config/koneksi.php';

$nip 		= $_POST['nip'];
$foto 		= $_FILES['foto']['name'];
$nama 		= $_POST['nama'];
$jk 		= $_POST['jk'];
$password 	= $_POST['password'];
$alamat 	= $_POST['alamat'];

// set folder penyimpanan
$file_tmp = $_FILES['foto']['tmp_name'];

// upload file foto
move_uploaded_file($file_tmp, 'foto/' . $foto);

$query = "INSERT INTO gp (id_gp, nip, foto, nama, jk, password, alamat) 
VALUES (null,'$nip', '$foto', '$nama', '$jk', '$password', '$alamat')";

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
