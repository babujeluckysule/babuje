<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>HNG Stage 1</title>
	<style>
		ul li{
			float: left;
			list-style: none;
			padding: 20px
		}
		a{
			text-decoration: none;
			font-size: 30px
		}
		header{
			background-color: #ADEEED;
			height: 100px
		}
		body{
			background-color: #C4C4C4;
		}
		footer{
			background-color: #ADEEED;
			height: 100px;
			font-size: 20px;
			margin-top: 280px
		}
		p{
			text-align: center;
			padding: 38px;
			font-size: 23px
		}
		h1{
			color: white
		}
	</style>
</head>
<body style="background-image: url('img.jpg'); background-size: cover; opacity: 0.9">
	<header>
		<ul>
			<li><a href="#"></a>Logo</li>
		</ul>
		<ul style="margin-left: 800px">
			<li><a href="#">Home</a></li>
			<li><a href="#">About</a></li>
			<li><a href="#">Contact</a></li>
		</ul>
	</header><br><br>
	
		<h1 style="text-align: center; font-size: 64px; margin-top: 80px"> <?php echo date('D - M - Y'); ?> <?php echo date("h:i a"); ?></h1>
	
	
<footer>
	<p>Copyright: Designed by Babuje Lucky -<?php echo date(' M - Y'); ?></p>
</footer>
</body>
</html>