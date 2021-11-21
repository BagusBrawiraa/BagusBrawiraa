<?php
// mengaktifkan session php
//session_start();
 
 $nim = $_GET['nim']; 
// menghubungkan dengan koneksi
include 'koneksi.php';

// menghapus data mahasiswa
$query = "DELETE  FROM tb_mahasiswa where nim = '$nim'";
$result_select = mysqli_query($koneksi,$query) or die(mysql_error());

header("location:mahasiswa_view.php?pesan=berhasil menghapus data");



 
?>