<?php
include "conn.php";
?>
<html>
<head>
<style type="text/css">

.main {
width:200px;
border:1px solid black;
}

.month {
background-color:black;
font:bold 12px verdana;
color:white;
}

.daysofweek {
background-color:gray;
font:bold 12px verdana;
color:white;
}

.days {
font-size: 12px;
font-family:verdana;
color:black;
background-color: lightyellow;
padding: 2px;
}

.days #today{
font-weight: bold;
color: red;
}

</style>

<script type="text/javascript" src="basiccalendar.js"> </script>   


<meta name="description" content="" />
<meta name="keywords" content="" />
<title>Badmintonation</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style1.css" />
<script type="text/javascript" src="jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="jquery.dropotron-1.0.js"></script>
<script type="text/javascript" src="jquery.slidertron-1.1.js"></script>
<script type="text/javascript">
	$(function() {
		$('#menu > ul').dropotron({
			mode: 'fade',
			globalOffsetY: 11,
			offsetY: -15
		});
		$('#slider').slidertron({
			viewerSelector: '.viewer',
			indicatorSelector: '.indicator span',
			reelSelector: '.reel',
			slidesSelector: '.slide',
			speed: 'slow',
			advanceDelay: 4000
		});
	});
</script>
</head>
<body>
<div id="wrapper">
	<div id="header">
		<div id="logo">
			<h1 font ="Arial" color="orange">Badmintonation</h1>
		</div>
		<div id="slogan">
			<h2>when badminton cheer's up the life</h2>
		</div>
	</div>
	<div id="menu">
		<ul>
			<li class="first">
				<span class="opener">Services<b></b></span>
				<ul>
					<li><a href="#">Lorem Ipsum</a></li>
					<li><a href="#">Consequat Dolor</a></li>
					<li><a href="#">Magna Feugiat</a></li>
					<li>
						<span>Sed Tempus<b></b></span>
						<ul>
							<li><a href="#">Lorem Ipsum</a></li>
							<li><a href="#">Consequat Dolor</a></li>
							<li><a href="#">Magna Feugiat</a></li>
							<li><a href="#">Sed Tempus</a></li>
							<li><a href="#">Etiam Nullam</a></li>
							<li><a href="#">Amet Phasellus</a></li>
						</ul>
					</li>
					<li><a href="#">Etiam Nullam</a></li>
					<li><a href="#">Amet Phasellus</a></li>
				</ul>
			</li>
			<li><a href="?v=home">Home</a></li>
			<li><a href="#">Clients</a></li>
			<li>
				<span class="opener">Support<b></b></span>
				<ul>
					<li><a href="#">Lorem Ipsum</a></li>
					<li><a href="#">Consequat Dolor</a></li>
					<li><a href="#">Magna Feugiat</a></li>
					<li>
						<span>Sed Tempus<b></b></span>
						<ul>
							<li><a href="#">Lorem Ipsum</a></li>
							<li><a href="#">Consequat Dolor</a></li>
							<li><a href="#">Magna Feugiat</a></li>
							<li><a href="#">Sed Tempus</a></li>
							<li><a href="#">Etiam Nullam</a></li>
							<li><a href="#">Amet Phasellus</a></li>
						</ul>
					</li>
					<li><a href="#">Etiam Nullam</a></li>
					<li><a href="#">Amet Phasellus</a></li>
				</ul>
			</li>
			<li><a href="#">About</a></li>
			<li class="last"><a href="#">Contact</a></li>
		</ul>
		<br class="clearfix" />
	</div>
	<div id="slider">
		<div class="viewer">
			<div class="reel">
				<div class="slide">
					<img src="imagesi/leecw.jpg" alt="" />
				</div>
				<div class="slide">
					<img src="imagesi/th.jpg" alt="" />
				</div>
				<div class="slide">
					<img src="imagesi/pbsi.jpg" alt="" />
				</div>
				<div class="slide">
					<img src="imagesi/slide04.jpg" alt="" />
				</div>
				<div class="slide">
					<img src="imagesi/slide05.jpg" alt="" />
				</div>
			</div>
		</div>
		<div class="indicator">
			<span>1</span>
			<span>2</span>
			<span>3</span>
			<span>4</span>
			<span>5</span>
		</div>
	</div>
	<div id="page">
		<div id="content">
			<div class="box">
				<?php include"content.php"; ?>
			</div>			
			
		</div>
		<div id="sidebar">
			<div class="box">
				<h3>Kategori</h3>
				<ul class="list">
					<li class="first"><a href="?v=international">International</a></li>
					<li><a href="?v=tournament">Tournament</a></li>
					<li><a href="?v=pelatnas">Kabar Pelatnas</a></li>
					<li><a href="foto_view.php">Gallery</a></li>
					
				</ul>
			</div>
			<div class="box">
				<h3>Kalender</h3>
				<div class="date-list">
					<script type="text/javascript">
var todaydate=new Date()
var curmonth=todaydate.getMonth()+1 //get current month (1-12)
var curyear=todaydate.getFullYear() //get current year
document.write(buildCal(curmonth ,curyear, "main", "month", "daysofweek", "days", 1));
</script> 

				</div>
			</div>
		</div>
		<br class="clearfix" />
	</div>
	<div id="page-bottom">
		<div id="page-bottom-content">
			<h3>Magnis hendrerit erat</h3>
			<p>
				Euismod sodales sociis hendrerit pulvinar acursus urna. Consectetur egestas sodales at ornare laoreet turpis. Lorem id sapien ridiculus sagittis imperdiet urna suspendisse. Posuere arcu parturient quam risus. Aliquam nullam magnis integer gravida vulputate felis. Consectetur montes sollicitudin dictum. Auctor sociis hendrerit pulvinar acursus urna lorem ipsum dolor vivamus pulvinar libero. Massa egestas cubilia lacus augue mattis consectetur.
			</p>
		</div>
		<div id="page-bottom-sidebar">
			<h3>Sed interdum</h3>
			<ul class="list">
				<li class="first"><a href="#">Suspendisse ultricies</a></li>
				<li><a href="#">Tortor mollis enim</a></li>
				<li class="last"><a href="#">Lorem enim tempor</a></li>
			</ul>
		</div>
		<br class="clearfix" />
	</div>
</div>
<div id="footer">
	Copyright (c) 2012 Sitename.com. All rights reserved. Design by <a href="http://www.freecsstemplates.org">FCT</a>. Photos by <a href="http://fotogrph.com/">Fotogrph</a>.
</div>
</body>
</html>