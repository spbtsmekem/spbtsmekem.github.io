<?php
$con= mysqli_connect("localhost","root","") or die ("Unable to connect");
mysqli_select_db($con, "spbtsmekem");
$sql= "SELECT * FROM pelajar";
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
			<a href="guru.php" style= "color:#000000;">Guru</a>
			</p>
			
			<p>		
			<a href="input01.php" style= "color:#000000;">Key-in Maklumat</a>
			</p>
			
			</div>
		
		<div class="main">
		
		 <button class="dropbtn">Dropdown</button>
			<div class="dropdown-content">
				<a href="#">Link 1</a>
				<a href="#">Link 2</a>
				<a href="#">Link 3</a>
			</div>
		
		<table align="center" border="1px" style="width:600px; line-height:40px;">
			<tr>
				<th colspan="17"><h2>1 Bestari</h2></th>
			</tr>
			<t>
				<th> Nama Pelajar </th>
				<th> BM </th>
				<th> GEO </th>
				<th> SEJ </th>
				<th> MAT </th>
				<th> SNS </th>
				<th> PJPK </th>
				<th> PI </th>
				<th> PM </th>
				<th> BA </th>
				<th> RBT </th>
				<th> PSV </th>
				<th> PULSE </th>
				<th> ASK </th>
				<th> PMZ </th>
				<th> SEJAMBAK BAKTI </th>
				<th> KUINGIN BERTERIMA KASIH </th>
			</t>
			
		<?php
			while($rows=$result->fetch_assoc())
			{
		?>	
				<tr>
					<td><?php echo $rows['Nama_pelajar'];?></td>
					<td><?php echo $rows['BM'];?></td>
					<td><?php echo $rows['GEO'];?></td>
					<td><?php echo $rows['SEJ'];?></td>
					<td><?php echo $rows['MAT'];?></td>
					<td><?php echo $rows['SNS'];?></td>
					<td><?php echo $rows['PJPK'];?></td>
					<td><?php echo $rows['PI'];?></td>
					<td><?php echo $rows['PM'];?></td>
					<td><?php echo $rows['BA'];?></td>
					<td><?php echo $rows['RBT'];?></td>
					<td><?php echo $rows['PSV'];?></td>
					<td><?php echo $rows['PULSE'];?></td>
					<td><?php echo $rows['ASK'];?></td>
					<td><?php echo $rows['PMZ'];?></td>
					<td><?php echo $rows['SEJAMBAK'];?></td>
					<td><?php echo $rows['KUINGIN'];?></td>
				</tr>
				
		<?php
			}
		?>
		</table>
		</div>
		
		</div>
	
		
	</body>
</html>