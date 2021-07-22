<?php
$con= mysqli_connect("localhost","root","") or die ("Unable to connect");
mysqli_select_db($con, "spbtsmekem");
$sql= "SELECT * FROM pelajar WHERE Kelas='2A' OR Kelas='2B' OR Kelas='2C' OR Kelas='2D' ORDER BY Kelas, Nama_pelajar ASC";
$result=$con->query($sql);
?>
<!DOCTYPE html>
<html lang = "en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Tingkatan 2</title>
		<style>
		
		body{
			background-color:#ADD8E6 ;
		}
		
		.menu{
			font-family: Arial;
			font-weight: bold;
			background-color:#A7C7E7;
			display: inline-block;
			text-align: center;
			border-radius: 25px;
			padding: 20px;
			width: 200px;
			height:70%;
			float: left;
		}
		
			
			
		.main{
			display: inline-block;
			width: 69%;
			height:70%;
			font-family: Arial;
			font-weight: bold;
			border-radius: 25px;
			padding: 20px;
			background-color:#A7C7E7;
			color: #000000;
		}
		
		
		
		</style>
	</head>
	<body>
	
		<div class="header">
		<center><img src= "image/bannerboss.jpg" style=" width:100%; display: block; border-radius: 25px;padding: 20px;></img> </center>
		</div>
		
		<div class="content">
			<div class="menu">
			<p>
			<a href="index.php" style= "color:#000000;">Home</a>
			</p>
			
			<p>
			<a href="tingkatan_1.php" style= "color:#000000;"> Tingkatan 1</a>
			</p>
			
			<p>
			<a href= "tingkatan_2.php" style= "color:#000000;">Tingkatan 2 </a>
			</p>
			
			<p>
			<a href="tingkatan_3.php" style= "color:#000000;">Tingkatan 3</a>
			</p>
			
			<p>
			<a href="tingkatan_4.php" style= "color:#000000;">Tingkatan 4</a>
			</p>	
			
			<p>		
			<a href="tingkatan_5.php" style= "color:#000000;">Tingkatan 5</a>
			</p>
			
			
			<p>		
			Key-in Maklumat
			- <a href="input01.php" style= "color:#000000;">Menengah Rendah</a> <br>
			- <a href="input02.php" style= "color:#000000;">Menengah Atas</a>
			</p>
			
			
			</div>
		
		<div class="main">
		<p><center>Kelas Tingkatan 2</center></p>
		 
				<button><a href="dua_a.php">2 Arif</a></button>
				<button><a href="dua_b.php">2 Bestari </a></button>
				<button><a href="dua_c.php">2 Cendekiawan</a></button>
				<button><a href="dua_d.php">2 Dinamik</a></button>
				<button><a href="duaabcd.php">Seluruh tingkatan</a></button>
				
		
		</div>
		
		</div>
	
		
	</body>
</html>