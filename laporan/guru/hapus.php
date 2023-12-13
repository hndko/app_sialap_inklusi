<?php

include "koneksi.php";

$id=$_GET['id']; 
$hapus=mysqli_query($koneksi, "DELETE FROM lapgp where id = '$id'") or die (mysqli_error());


header("location:tampil.php");





?>