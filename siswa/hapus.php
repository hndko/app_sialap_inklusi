<?php

require_once "../config/koneksi.php";

$id = $_GET['id_siswa'];
$hapus = mysqli_query($koneksi, "DELETE FROM siswa where id_siswa = '$id'") or die(mysqli_error($koneksi));

echo "
    <script>
        alert('Data Berhasil Dihapus.');
        window.location.href = 'tampil.php';
    </script>
";
