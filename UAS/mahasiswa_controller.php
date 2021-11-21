<?php
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'koneksi.php';
 
// menangkap data yang dikirim dari form mahasiswa_add 
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$username = $_POST['username'];
$password = $_POST['password'];


// memasukkan data yang diterima dari form mahasiswa_add ke database  (MySql)
$query = "INSERT INTO tb_mahasiswa (nim, nama_mahasiswa, username, password)
VALUES ('$nim', '$nama', '$username','$password')";

 //print_r($koneksi);exit();

if ($koneksi->query($query) === TRUE) {// jika data berhasil dimasukkan maka akan muncul pesan di bawah"
	header("location:mahasiswa_add.php?pesan=berhasil menambah data mahasiswa atas nama '$nama' ");
} else { // jika tidak maka akan muncul pesan error
  echo "Error: " . $query . "<br>" . $koneksi->error;
}


 
?>