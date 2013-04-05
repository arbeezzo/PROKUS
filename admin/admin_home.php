<?php
include "conn.php";
session_start();
if (!isset($_SESSION['username'],$_SESSION['ID_ADMIN'])){
header("Location:./admino.php");
}
?>
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
				<h2 class="title">Selamat Datang di Halaman Admin </h2>
				<div style="clear: both;">&nbsp;</div>
				<div class="entry">
					</div>
			</div>
			<div class="post">
				
			</div>
			<div style="clear: both;">&nbsp;</div>
		</div>
		<!-- end #content -->
		<div id="sidebar">
			<ul>
				<li>
					<h2>Kategori</h2>
					<ul>
						<li><a href="input_berita.php">Input Berita</a></li>
						<li><a href="arsip_berita.php">Update Berita</a></li>
						<li><a href="../mod/foto_form.php">Input Gallery</a></li>
						<li><a href="logout.php">LOGOUT</a></li>
					</ul>
				</li>
				</ul>
		</div>
		<!-- end #sidebar -->
		<div style="clear: both;">&nbsp;</div>
	</div>
	<div id="page-bgbtm"></div>
	<!-- end #page --> 
</div>
<div id="footer">
	<p>Web design By IT Department of 2 Mlati Muhammadiyah Junior High School</p>
</div>
<!-- end #footer -->
</body>
</html>
