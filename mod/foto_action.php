<?php
//status upload 
/* status 0: Sukses
 * status 1: file yang diupload kosong
 * status 2: file bukan file gambar
 * status 3: ukuran file terlalu besar
 * status 4: Gagal menyimpan ke database
 */
include ('conn.php');

$nama_file = $_POST['nama_file'];

//kode upload
$lokasi_file = $_FILES['nama_file']['tmp_name'];
$nama_file = $_FILES['nama_file']['name'];
$tipe_file = $_FILES['nama_file']['type'];
$ukuran_file = $_FILES['nama_file']['size'];

//kode untuk mengganti spasi dan karakter pada nama file
// serta karakter non alphabet menjadi garis bawah

$nama_baru = preg_replace("/\s+/", "_", $nama_file);
$direktori = "foto/$nama_baru";

$MAX_FILE_SIZE = 5000000; //50kb

//cek apakah file kosong? 
if(strlen($nama_file)<1){
	header("Location:foto_form.php?status=1");
	exit();
}
//cek apakah format file adalah format gambar
$formatgambar = array("image/jpg", "image/jpeg","image/gif", "image/png");
if(!in_array($tipe_file, $formatgambar)) {
  header("Location:foto_form.php?status=2");
	exit();

}
//cek apakah ukuran file diatas 50kb 
if($ukuran_file > $MAX_FILE_SIZE) {
	header("Location:foto_form.php?status=3");
	exit();
}
//code untuk mengkopi file ke fodler foto
move_uploaded_file($lokasi_file, $direktori);
$sql = "INSERT INTO foto(nama_file)
		VALUES('$nama_baru')";

//masukan nama file kedalam tabel foto di database mysql 
$result = mysql_query($sql) or die(mysql_error());

//check if query successful
if($result==true) {
	header('location:foto_form.php?status=0');
} else {
	header('location:foto_form.php?status=4');
}
mysql_close();
?>
