<?php

include "../config/koneksi.php";

$id = $_GET['id'];
$hapus = mysqli_query($koneksi, "DELETE FROM terapi where id = '$id'") or die(mysqli_error($koneksi));


header("location:tampil.php");
