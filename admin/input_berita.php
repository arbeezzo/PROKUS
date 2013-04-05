
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
//proses input berita
if (isset($_POST['Input'])) {
$judul = addslashes (strip_tags ($_POST['judul']));
$kategori = $_POST['kategori'];
$headline = addslashes (strip_tags ($_POST['headline']));
$isi_berita = addslashes (strip_tags ($_POST['isi']));
$pengirim = addslashes (strip_tags ($_POST['pengirim']));

 $fileName = $_FILES['foto']['name']; //nama file
    $fileSize = $_FILES['foto']['size']; //ukuran file
    $fileError = $_FILES['foto']['error']; //
    $uploaddir='../mod/img/';
    $lokasi=$uploaddir.$fileName;
if($fileSize > 0 || $fileError == 0){ //Check jika error
 $move = move_uploaded_file($_FILES['foto']['tmp_name'],$lokasi); //save gambar ke folder
    if($move){
    echo "<h3>Success! </h3>";

 
} else{
    echo "<h3>Failed! </h3>";
    }
    } else {
    echo "Failed to Upload : ".$fileError;
    }

if (empty($headline) && empty($judul)) {
	
	header('location:input_berita.php?error= 1');
	break;
} else if (empty($judul)) {
	
	header('location:input_berita.php?error= 2');
	break;
} else if (empty($isi_berita)) {
	
	header('location:input_berita.php?error=3');
	break;
}
//insert ke tabel
$query = "INSERT INTO berita
VALUES('','$kategori','$judul','$fileName','img/$fileName','$headline','$isi_berita','$pengirim',
now())";
$sql = mysql_query ($query);
if ($sql) {
echo "<h2><font color=blue>Berita telah berhasil
ditambahkan</font></h2>";
} else {
echo "<h2><font color=red>Berita gagal
ditambahkan</font></h2>";
}
}
?>
<html>
<head><title>Input Berita</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<?php

//menampilkan pesan eror
if (!empty($_GET['error'])) {
    if ($_GET['error'] == 1) {
        echo '<h3>Headline dan Judul belum diisi!</h3>';
    } else if ($_GET['error'] == 2) {
        echo '<h3>Judul belum diisi!</h3>';
    } else if ($_GET['error'] == 3) {
        echo '<h3>berita belum diisi!</h3>';
    } 
}
?>
<a href="admin_home.php">Halaman Depan admin</a> |

<br><br>

<FORM ACTION="" METHOD="POST" NAME="input" ENCTYPE="multipart/form-data">
<table cellpadding="0" cellspacing="0" border="0"
width="700">
<tr>
<td colspan="2"><h2></h2></td>
</tr>
<tr>
<td width="200">Judul Berita</td>
<td>: <input type="text" name="judul"
size="30"></td>
</tr>
<tr>
<td>Photo</td>
<td>:  <input name='foto' type='file' id='foto' >
  </td>
</tr>
<tr>
<td>Kategori</td>
<td>:
<select name="kategori">
<?php
$query = "SELECT id_kategori, nm_kategori
FROM kategori ORDER BY nm_kategori";
$sql = mysql_query ($query);
while ($hasil = mysql_fetch_array ($sql)) {
echo "<option value='$hasil[id_kategori]'>$hasil[nm_kategori]</option>";
}
?>
</select></td>
</tr>
<tr>
<td>Headline Berita</td>
<td>: <textarea name="headline" cols="50" rows="4">
</textarea></td>
</tr>
<tr>
<td>Isi Berita</td>
<td>: <textarea name="isi" cols="50" rows="10">
</textarea></td>
</tr>
<tr>
<td>Pengirim</td>
<td>: <input type="text" name="pengirim" size="20">
</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;&nbsp;<input type="submit" name="Input"
value="Input Berita">&nbsp;
<input type="reset" name="reset" value="Cancel">
</td>
</tr>
</table>
</FORM>
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
