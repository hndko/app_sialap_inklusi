<?php
include '../config/koneksi.php';

$id_terapi 	= $_POST['id_terapi'];
$id_siswa 	= $_POST['id_siswa'];
$hari		    = $_POST['hari'];
$jam_mulai 		= $_POST['jam_mulai'];
$jam_selesai 	= $_POST['jam_selesai'];
$keterapian     = $_POST['keterapian'];
$lokasi 	    = $_POST['lokasi'];


$query = "INSERT INTO jadwal_terapi (id_jadwal, id_terapi, id_siswa, hari, jam_mulai, jam_selesai, keterapian, lokasi) VALUES (null,'$id_terapi' ,'$id_siswa' ,'$hari' ,'$jam_mulai' ,'$jam_selesai' , '$keterapian', '$lokasi')";

$result = mysqli_query($koneksi, $query);


if ($result) {
	header('location: tampil.php');
} else {
	echo 'data gagal ditambahkan';
}
