<html>
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Admin</title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="menu-wrapper">
	<div id="menu">
		</div>
	<!-- end #menu --> 
</div>
<div id="header-wrapper">
	<div id="header">
		<div id="logo">
			<h1></h1>
			</div>
	</div>
</div>
<div id="wrapper"> 
	<!-- end #header -->
	<div id="page-bgtop"></div>
	<div id="page">
		<div><img src="images/pics01.jpg" width="920" height="300" alt="" /></div>
		<div id="content">
			<div class="post">
				<h2 class="title">Input Berita </h2>
				<div style="clear: both;">&nbsp;</div>
				<div class="entry">
					</div>
			</div>
			<div class="post">
<?php

include "conn.php";
session_start();
if (!isset($_SESSION['username'],$_SESSION['ID_ADMIN'])){
header("Location:./admino.php");
}
?>
<html>
<head><title>Arsip Berita</title>
<link rel="stylesheet" href="style.css">
<script language="javascript">
function tanya() {
if (confirm ("Apakah Anda yakin akan menghapus
berita ini ?")) {
return true;
} else {
return false;
}
}
</script>
</head>
<body>
<a href="admin_home.php">Halaman Depan</a> <br>
<br>
<h2>Arsip Berita</h2>
<ol>
<?php
$query = "SELECT A.id_berita, B.nm_kategori, A.judul, A.pengirim, A.tanggal FROM berita A, kategori B WHERE A.id_kategori=B.id_kategori ORDER BY A.id_berita DESC";
$sql = mysql_query ($query);
while ($hasil = mysql_fetch_array ($sql)) {
$id_berita = $hasil['id_berita'];
$kategori = stripslashes ($hasil['nm_kategori']);
$judul = stripslashes ($hasil['judul']);
$pengirim = stripslashes ($hasil['pengirim']);
$tanggal = stripslashes ($hasil['tanggal']);
//
//tampilkan arsip berita
echo "<li><a href='berita_lengkap.php?id=$id_berita'>$judul</a><br>";
echo "<small>Berita dikirimkan oleh <b>$pengirim</b>
pada tanggal <b>$tanggal</b> dalam kategori
<b>$kategori</b><br>";
echo "<b>Action : </b><a href='edit_berita.php?id=$id_berita'>Edit</a> | ";
echo "<a href='delete_berita.php?id=$id_berita' onClick='return tanya()'>Delete</a>";
echo "</small></li><br><br>";
}
?>
</ol>
</body>
</html>

</div>
			<div style="clear: both;">&nbsp;</div>
		</div>
		<!-- end #content -->
		<!-- end #sidebar -->
		<div style="clear: both;">&nbsp;</div>
	</div>
	<div id="page-bgbtm"></div>
	<!-- end #page --> 
</div>
<div id="footer">
	<p>Saintek 2013</p>
</div>
<!-- end #footer -->
</body>
</html>


