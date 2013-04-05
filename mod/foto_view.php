<div id="page">
		<div id="content">
			<div class="box">
				<head>
		<script type="text/javascript" src="fb/jquery.js"></script>
		<link rel="stylesheet" type="text/css" href="style1.css" />
		<link rel="stylesheet" href="fb/jquery.fancybox.css?v=2.1.0" type="text/css" media="screen" />
		<script type="text/javascript" src="fb/jquery.fancybox.pack.js?v=2.1.0"></script>
		<script type="text/javascript">$(document).ready(function() {
				/*
				 *  Simple image gallery. Uses default settings
				 */

				$('.fancybox').fancybox();
			});
</script>
	</head>
	<body>
		<h2> Gallery</h2>
		<?php

require_once ('conn.php');

$query="SELECT * from foto  ";
$result=mysql_query($query) or die(mysql_error());
$no=1;
//proses menampilkan data
while($rows=mysql_fetch_object($result)){
		?>

		<a class="fancybox" href='foto/<?=$rows -> nama_file;?>'
		data-fancybox-group="gallery" > <img class="img-polaroid" 
		src='foto/<?=$rows -> nama_file;?>'
		width='150' height='150' alt="" /> </a>
		<?php
}?>
	</body>

			</div>			
			
		</div>
		<div id="sidebar">
			<div class="box">
				<h3>EXIT GALLERY</h3>
				<ul class="list">
					
					<li class="last"><a href="index.php">EXIT</a></li>
				</ul>
			</div>

		</div>
		<br class="clearfix" />
	</div>



	