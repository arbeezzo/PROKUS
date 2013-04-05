<?php 
if(!isset($_GET['v'])){
?>

			
<?php include"berita_baru.php"; ?>
		
<?php

}else if($_GET['v']=='berita'){
$id=$_GET['id'];

$query = "SELECT A.id_berita, B.nm_kategori, A.judul, A.namafoto,A.lokasi, A.isi, A.pengirim, A.tanggal
FROM berita A, kategori B WHERE A.id_kategori=B.id_kategori && A.id_berita='$id'";

$sql = mysql_query("SELECT A.id_berita, B.nm_kategori, A.judul, A.namafoto,A.lokasi, A.isi, A.pengirim, A.tanggal
				FROM berita A, kategori B WHERE A.id_kategori=B.id_kategori and A.id_berita='$id' ORDER BY A.tanggal DESC ");
$hasil = mysql_fetch_array($sql);
echo "<font size=5 color=blue>$hasil[judul]</font><br><br>";
    echo"<table>";
		echo"<tr><td><img width=400 height=300 src=\"$hasil[lokasi]\" /></td>";
		echo"</tr></table><br>";
echo "<small>Berita dikirimkan oleh <b>$hasil[pengirim]</b>
pada tanggal <b>$hasil[tanggal]</b> dalam kategori<b>$hasil[nm_kategori]</b></small>";
echo "<p>$hasil[isi]</p>";

?>		
<?php
}else if($_GET['v']=='international'){
	include "international.php";
}else if($_GET['v']=='home'){
?>
<div id="content">
			<div class="box">
				<?php include"berita_baru.php"; ?>
			</div>
			
			
			<br class="clearfix" />
</div>
<?php
}else if($_GET['v']=='tournament'){
	include "tournament.php";
}else if($_GET['v']=='home'){
?>
<div id="content">
			<div class="box">
				<?php include"berita_baru.php"; ?>
			</div>
			
			
			<br class="clearfix" />
</div>
<?php
}else if($_GET['v']=='pelatnas'){
	include "pelatnas.php";
}else if($_GET['v']=='home'){
?>
<div id="content">
			<div class="box">
				<?php include"berita_baru.php"; ?>
			</div>
			<br class="clearfix" />
</div>
<?php
}else if($_GET['v']=='gallery'){
	include "foto_view.php";
}else if($_GET['v']=='home'){
?>
<div id="content">
			<div class="box">
				<?php include"berita_baru.php"; ?>
			</div>
			<br class="clearfix" />
</div>
<?php
}
?>