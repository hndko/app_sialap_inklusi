<?php
$koneksi = mysqli_connect("localhost", "root", "", "inklusi");

if (mysqli_connect_errno()) {
	echo "Gagal melakukan koneksi ke MySQL: " . mysqli_connect_errno();
}

$base_url = "http://localhost/akademik/";
