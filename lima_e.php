<?php
$con= mysqli_connect("localhost","root","") or die ("Unable to connect");
mysqli_select_db($con, "spbtsmekem");
$sql= "SELECT * FROM pelajar WHERE Kelas='5E' ORDER BY Nama_pelajar ASC";
$result=$con->query($sql);
?>

<!DOCTYPE html>
<html lang = "en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>5 Elit</title>
		
	</head>
	<body>

		<table align="center" border="1px" style="width:600px; line-height:40px;">
			<tr>
				<th colspan="22"><h2>5 Elit</h2></th>
			</tr>
			<t>
				<th> Nama Pelajar </th>
				<th> BM </th>
				<th> SEJ </th>
				<th> MAT </th>
				<th> PJPK </th>
				<th> PI </th>
				<th> PM </th>
				<th> ENGLISH DOWNLOAD </th>
				<th> SNS </th>
				<th> REKA CIPTA </th>
				<th> PTN </th>
				<th> GEO </th>
				<th> EKO </th>
				<th> TASAWWUR </th>
				<th> MUZIK </th>
				<th> SAINS SUKAN </th>
				<th> SILIR DAKSINA</th>
				<th> SEJADAH RINDU </th>
			</t>
			
		<?php
			while($rows=$result->fetch_assoc())
			{
		?>	
				<tr>
					<td><?php echo $rows['Nama_pelajar'];?></td>
					<td><?php echo $rows['BM'];?></td>
					<td><?php echo $rows['SEJ'];?></td>
					<td><?php echo $rows['MAT'];?></td>
					<td><?php echo $rows['PJPK'];?></td>
					<td><?php echo $rows['PI'];?></td>
					<td><?php echo $rows['PM'];?></td>
					<td><?php echo $rows['download'];?></td>
					<td><?php echo $rows['SNS'];?></td>
					<td><?php echo $rows['rc'];?></td>
					<td><?php echo $rows['pertanian'];?></td>
					<td><?php echo $rows['GEO'];?></td>
					<td><?php echo $rows['ekonomi'];?></td>
					<td><?php echo $rows['tasawwur'];?></td>
					<td><?php echo $rows['PMZ'];?></td>
					<td><?php echo $rows['sainssukan'];?></td>
					<td><?php echo $rows['silirdaksina'];?></td>
					<td><?php echo $rows['sejadahrindu'];?></td>
					
				</tr>
				
		<?php
			}
		?>
		</table>
		
	</body>
</html>