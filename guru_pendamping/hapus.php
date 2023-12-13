<?php

include "../config/koneksi.php";

$id=$_GET['id_gp']; 
$hapus=mysqli_query($koneksi, "DELETE FROM gp where id_gp = '$id'") or die (mysqli_error($koneksi));


header("location:tampil.php");
