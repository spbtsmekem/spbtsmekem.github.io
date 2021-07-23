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
	</head>
	
	<body>
			<table align="center" border="1px" style="width:600px; line-height:40px;">
			<tr>
				<th colspan="18"><h2>Tingkatan 2</h2></th>
			</tr>
			<t>
				<th> Nama Pelajar </th>
				<th> Kelas </th>
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
				<th> DARAH TITIK DI SEMANTAN</th>
				<th> BAIK BUDI INDAH BAHASA </th>
			</t>
			
		<?php
			while($rows=$result->fetch_assoc())
			{
		?>	
				<tr>
					<td><?php echo $rows['Nama_pelajar'];?></td>
					<td><?php echo $rows['Kelas'];?></td>
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
					<td><?php echo $rows['darahtitik'];?></td>
					<td><?php echo $rows['baikbudi'];?></td>
				</tr>
				
		<?php
			}
		?>
		</table>
		
	</body>
</html>