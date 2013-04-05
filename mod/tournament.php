<?php
include "conn.php";
?>

<html>
<head><title>Index Berita</title>
<link rel="stylesheet" href="style.css">
</head>
<body>


<h2>Hot News</h2>
<?php
$query = "SELECT id_berita,judul,namafoto,lokasi,headline, pengirim, tanggal
FROM berita WHERE id_kategori=1  ORDER BY id_berita ";
$sql = mysql_query ($query);
while ($hasil = mysql_fetch_array ($sql)) {
$id_berita = $hasil['id_berita'];
$lokasi = stripslashes ($hasil ['lokasi']);
$judul = stripslashes ($hasil['judul']);
$headline = nl2br(stripslashes($hasil['headline']));
$pengirim = stripslashes ($hasil['pengirim']);
$tanggal = stripslashes ($hasil['tanggal']);

//tampilkan berita
echo "<font size=4> <a href='?v=berita&id=$id_berita'> $judul </a> </font> <br> <br>";
echo "<img width=200 height=125 src='$lokasi' > <br> <br>";
echo "<small> Berita dikirimkan oleh <b> $pengirim </b>pada tanggal <b>$tanggal</b> </small>";
echo "<p>$headline</p>";
echo "<hr>";
}
?>
</body>
</html>
