<?php
$con= mysqli_connect("localhost","root","") or die ("Unable to connect");
mysqli_select_db($con, "spbtsmekem");
$sql= "SELECT * FROM pelajar WHERE Kelas='2A'ORDER BY Nama_pelajar ASC";
$result=$con->query($sql);
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset= "UTF-8">
		<title>2 Arif</title>
	</head>
	<body>
		<table align="center" border="1px" style="width:1000px; line-height:40px;">
			<tr>
				<th colspan="15"><h2>2 Arif</h2></th>
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
				<th> BA </th>
				<th> RBT </th>
				<th> PSV </th>
				<th> PULSE </th>
				<th> DARAH TITIK DI SEMANTAN </th>
				<th> BAIK BUDI INDAH BAHASA </th>
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
					<td><?php echo $rows['BA'];?></td>
					<td><?php echo $rows['RBT'];?></td>
					<td><?php echo $rows['PSV'];?></td>
					<td><?php echo $rows['PULSE'];?></td>
					<td><?php echo $rows['darahtitik'];?></td>
					<td><?php echo $rows['baikbudi'];?></td>
				</tr>
				
		<?php
			}
		?>
		</table>
	</body>
</html>