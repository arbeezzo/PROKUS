<?php
include "conn.php";
?>

<html>
<head><title>Index Berita</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<br>
<h2>Hot News From The World</h2>
<?php
$query = "SELECT A.id_berita, B.nm_kategori, A.judul,A.namafoto,A.lokasi,A.headline, A.pengirim, A.tanggal
FROM berita A, kategori B WHERE A.id_kategori=B.id_kategori ORDER BY A.id_berita ";
$sql = mysql_query ($query);
while ($hasil = mysql_fetch_array ($sql)) {
$id_berita = $hasil['id_berita'];
$kategori = stripslashes ($hasil['nm_kategori']);
$lokasi = stripslashes ($hasil ['lokasi']);
$judul = stripslashes ($hasil['judul']);
$headline = nl2br(stripslashes($hasil['headline']));
$pengirim = stripslashes ($hasil['pengirim']);
$tanggal = stripslashes ($hasil['tanggal']);

//tampilkan berita
echo "<font size=4> <a href='?v=berita&id=$id_berita'> $judul </a> </font> <br> <br>";
echo "<img width=200 height=125 src='$lokasi' > <br> <br>";
echo "<small> Berita dikirimkan oleh <b> $pengirim </b>pada tanggal <b>$tanggal</b> dalam kategori<b> $kategori </b> </small>";
echo "<p>$headline</p>";
echo "<hr>";
}
?>
</body>
</html>
