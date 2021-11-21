<?php session_start();

$nama_user = $_SESSION['nama'];
include 'mahasiswa_controller_view.php';
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
  background-image: url(pencil.jpg);
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
  background-color: #FFFFFF;
  overflow-x: hidden;
  padding-top: 20px;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color: #FF0000;
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
  <div style="margin-bottom: 20px;">
    <a href="Mahasiswa_add.php">Tambah Data Mahasiswa</a>
  </div>
  
 <table width="50%" border="1" style="border-collapse: collapse;" >
   <thead>
     <tr>
       <th>NIM</th>
       <th>Nama</th>
        <th>Action</th>
     </tr>
   </thead>
   <tbody>
    <?php  foreach ($rows as $row) { 
      $url_hapus = "mahasiswa_controller_delete.php?nim=".$row['nim'];
      ?>
        <tr>
          <td><?php echo $row['nim']; ?></td>
          <td><?php echo $row['nama_mahasiswa']; ?></td>
          <td><a href= <?php echo $url_hapus; ?> >Hapus</a></td>
        </tr>
     <?php } ?>
     
   </tbody>
 </table>
 
</div>


</body>
</html>
