<?php session_start();

$nama_user = $_SESSION['nama'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Template</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

* {
  box-sizing: border-box;
}
/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
  nav, article {
    width: 100%;
    height: auto;
  }
}

body {
  font-family: Arial, Helvetica, sans-serif;
  background-image: url(supreme.jpg);
  background-size: 1920px 1080px;
}

/* Style the header */

.header {
	padding: 30px;
	overflow: hidden;
	text-align: center;
	background-color: #d63333;
	width: 100%;
	height: 7%;
	position: fixed;
	top: 0;
	left: 0;
	overflow-x: hidden;
	padding-top: 0px;
  background: linear-gradient(90deg,#808080,#FFFAF0,#800000);
}



/* Clear floats after the columns */
.main {
  margin-right: 160px; /* Same as the width of the sidenav */
  font-size: 28px; /* Increased text to enable scrolling */
  padding-top: 10px;
}
.sidenav {
  height: 100%;
  width: 160px;
  position: fixed;
  z-index: 1;
  top: 0;
  right: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 20px;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
}

.sidenav a:hover {
  color: #f1f1f1;
}


</style>
</head>



<body>

<div class="header" id="myHeader">
  <h2>Tambah Data Mahasiswa</h2>
</div>


<div class="sidenav">
	<a href="#about"><strong>Sidebar</strong></a>
  <a href="#about">Mahasiswa</a>
  <a href="#services">Services</a>
  <a href="#clients">Clients</a>
  <a href="#contact">Contact</a>
</div>

<style type="text/css">
  .main_class {
  margin-left: 160px;
  font-size: 28px; 
  padding-top: 10px;
}
 #main_id {
  margin-left: 160px;
  font-size: 28px; 
  padding-top: 10px;
}
</style>



<div style="margin-left: 500px; margin-top: 100px;">
 <form method="post" action="mahasiswa_controller.php">
  <a href="Mahasiswa_view.php">Hapus Data Mahasiswa</a>
  <div style="margin-top: 10px;">
    
    <?php if (!empty($_GET['pesan'])) {  ?>
      <label><?php  echo $_GET['pesan']?></label>
     <?php } ?>

      
    </div>
    <div style="margin-top: 10px;">
      <label>Nama</label>
    </div>
    <div>
      <input type="text" name="nama" placeholder="Masukkan nama">
    </div>
    <div style="margin-top: 10px;">
      <label>NIM</label>
    </div>
    <div>
      <input type="text" name="nim" placeholder="Masukkan nim">
    </div>

    <div style="margin-top: 10px;">
      <label>Username</label>
    </div>
    <div>
      <input type="text" name="username" placeholder="Masukkan username">
    </div>
    <div style="margin-top: 10px;">
      <label>Password</label>
    </div>
    <div>
      <input type="password" name="password" placeholder="Masukkan Password">
    </div>

    <div style="margin-top: 10px;">
     <input type="submit" value="Tambah">
    </div>

       
  </form>
</div>


</body>
</html>
