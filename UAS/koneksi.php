<?php 
/*
keterangan:
  root= database mysql
  root= username database 
  "" = password
  mahasiswa= nama database


*/
$koneksi = mysqli_connect("localhost","root","","mahasiswa");

 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>