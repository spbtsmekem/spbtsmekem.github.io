<?php
$con= mysqli_connect("localhost","root","") or die ("Unable to connect");
mysqli_select_db($con, "spbtsmekem");
$sql= "SELECT * FROM pelajar WHERE Kelas='3C' ORDER BY Nama_pelajar ASC";
$result=$con->query($sql);
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset= "UTF-8">
		<title>3 Cendekiawan</title>
	</head>
	<body>
		<table align="center" border="1px" style="width:1000px; line-height:40px;">
			<tr>
				<th colspan="14"><h2>3 Cendekiawan</h2></th>
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
				<th> RBT </th>
				<th> CLOSE UP </th>
				<th> PMZ </th>
				<th> HEMPASAN OMBAK </th>
				<th> BINTANG HATI </th>
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

					<td><?php echo $rows['RBT'];?></td>

					<td><?php echo $rows['closeup'];?></td>

					<td><?php echo $rows['PMZ'];?></td>
					<td><?php echo $rows['hempasan'];?></td>
					<td><?php echo $rows['bintanghati'];?></td>
				</tr>
				
		<?php
			}
		?>
		</table>
	</body>
</html>