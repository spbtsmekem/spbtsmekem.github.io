<?php
$con= mysqli_connect("localhost","root","") or die ("Unable to connect");
mysqli_select_db($con, "spbtsmekem");
$sql= "SELECT * FROM pelajar WHERE Kelas='1A' OR Kelas='1B' OR Kelas='1C' OR Kelas='1D' ORDER BY Kelas, Nama_pelajar ASC";
$result=$con->query($sql);
?>
<!DOCTYPE html>
<html lang = "en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Tingkatan 1</title>
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
			<a href="index.html" style= "color:#000000;">Home</a>
			</p>
			
			<p>
			<a href="tingkatan_1.html" style= "color:#000000;"> Tingkatan 1</a>
			</p>
			
			<p>
			<a href= "tingkatan_2.html" style= "color:#000000;">Tingkatan 2 </a>
			</p>
			
			<p>
			<a href="tingkatan_3.html" style= "color:#000000;">Tingkatan 3</a>
			</p>
			
			<p>
			<a href="tingkatan_4.html" style= "color:#000000;">Tingkatan 4</a>
			</p>	
			
			<p>		
			<a href="tingkatan_5.html" style= "color:#000000;">Tingkatan 5</a>
			</p>
			
			
			<p>		
			Key-in Maklumat
			- <a href="input01.html" style= "color:#000000;">Menengah Rendah</a> <br>
			- <a href="input02.html" style= "color:#000000;">Menengah Atas</a>
			</p>
			
			</div>
		
		<div class="main">
		<p><center>Pilihan</center></p>
		 
				<button><a href="satu_a.html">1 Arif</a></button>
				<button><a href="satu_b.html">1 Bestari </a></button>
				<button><a href="satu_c.html">1 Cendekiawan</a></button>
				<button><a href="satu_d.html">1 Dinamik</a></button>
				<button><a href="satuabcd.html">Seluruh tingkatan</a></button>
				
				
		
		</div>
		
		</div>
	
		
	</body>
</html>