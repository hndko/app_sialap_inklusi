<?php
require_once "../config/koneksi.php";
if (isset($_POST['login'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	$data_user = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username' AND password = '$password'");
	$r = mysqli_fetch_array($data_user);
	$username = $r['username'];
	$nama_lengkap = $r['nama_lengkap'];
	$password = $r['password'];
	$level = $r['level'];

	if ($username == $username and $password == $password) {
		$_SESSION['username'] = $username;
		$_SESSION['nama_lengkap'] = $nama_lengkap;
		$_SESSION['password'] = $password;
		$_SESSION['level'] = $level;
		$_SESSION['nama_user'] = $nama_user;
		$_SESSION['status'] = "login";
		if ($level == 'admin') {
			header('location:../index.php');
		} elseif ($level == 'ortu') {
			header('location:../index.php');
		} else {
			header("location:index?pesan=gagal_login");
		}
	}
}
