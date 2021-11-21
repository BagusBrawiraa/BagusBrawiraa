<?php
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'koneksi.php';
 
// menangkap data yang dikirim dari form login 
$username = $_POST['username'];
$password = $_POST['password'];

// menyeleksi data mahasiswa dengan username dan password
$query ="select * from tb_mahasiswa where username='$username' and password='$password'";
$data = mysqli_query($koneksi,$query);



// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data); 


 
while ($row = mysqli_fetch_array($data, MYSQL_NUM)) {
   $nama = $row[1]; 
}  


 
if($cek > 0){
	$_SESSION['nama'] = $nama;
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:mahasiswa_add.php");
}else{
	header("location:index.php?pesan=gagal");
}
?>