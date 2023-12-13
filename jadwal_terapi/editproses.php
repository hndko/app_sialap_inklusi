<?php
include '../config/koneksi.php';
$id_jadwal = $_POST['id_jadwal'];
$id_terapi = $_POST['id_terapi'];
$hari	= $_POST['hari'];
$jam_mulai = $_POST['jam_mulai'];
$jam_selesai = $_POST['jam_selesai'];
$keterapian = $_POST['keterapian'];
$lokasi = $_POST['lokasi'];

$query = "UPDATE `jadwal_terapi` SET `id_terapi`='$id_terapi',`hari`='$hari',`jam_mulai`='$jam_mulai',`jam_selesai`='$jam_selesai',`keterapian`='$keterapian',`lokasi`='$lokasi' WHERE `id_jadwal`='$id_jadwal'";

$result = mysqli_query($koneksi, $query);
if ($result > 0) {
	echo "
		<script>
			alert('Data Berhasil Diperbaharui!');
            window.location.href = 'tampil.php';
        </script>
    ";
} else {
	echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}

mysqli_close($koneksi);
