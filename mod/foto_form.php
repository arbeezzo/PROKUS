<html>
	<head></head>
	<body>
		<div style="background-color:#ffe597;  width: 230px;height: 71px">
		<form  method="POST" id="form1" enctype="multipart/form-data" action="foto_action.php">
			<legend>
				Upload foto
			</legend>
			<input type="file" name='nama_file'>
			<button type="submit">
				Upload
			</button>
		</form>
		</div>
			
			<?php
// KODE UNTUK MENAMPILKAN PESAN STATUS
if(isset($_GET['status'])) {
	$status=$_GET['status'];
	switch($status) {
		case 0 :
			echo " upload sukses!";
			break;
		case 1 :
			echo " Anda belum memilih file yang akan diupload!";
			break;
		case 2 :
			echo " upload gagal, Format yang diperbolehkan hanya jpg,png dan gif!";
			break;
		case 3 :
			echo " upload gagal, Ukuran file terlalu besar!";
			break;
	}
}
?>

	</body>
</html>
