<?php

include "koneksi.php";

$id=$_GET['nis']; 
$hapus=mysqli_query($koneksi, "DELETE FROM jadwal_terapi where nis = '$nis'") or die (mysqli_error());


header("location:tampil.php");





?>