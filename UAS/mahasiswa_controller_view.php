<?php
// mengaktifkan session php
//session_start();
 
// menghubungkan dengan koneksi
include 'koneksi.php';

// memasukkan data yang diterima dari form mahasiswa_add ke database  (MySql)
$query = "SELECT * FROM tb_mahasiswa";
$result_select = mysqli_query($koneksi,$query) or die(mysql_error());
//$rows = array();

while($row = mysqli_fetch_array($result_select))
    $rows[] = $row;




 
?>