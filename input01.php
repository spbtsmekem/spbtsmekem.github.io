<?php
$con = mysqli_connect("localhost","root","") or die ("Unable to connect");
mysqli_select_db($con, "spbtsmekem");
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset= "UTF-8">
		<title>Key-in Maklumat</title>
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
			height:400px;
			float: left;
		}
		
			
			
		.main{
			display: inline-block;
			width: 69%;
			height:400px;
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
		<center><img src= "image/bannerboss.jpg" style=" width:1200px; display: block; border-radius: 25px;padding: 20px;></img> </center>
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

			<form class= "myform" action="input01.php" method="POST">
			Maklumat Pinjaman Buku Teks <br>
			<br>Menengah Rendah<br>
			
			<label><b>Nama:</b></label>
			<input name= "Nama_pelajar" type="text" class="inputvalues" placeholder="Masukkan nama pelajar" required/> <br>
			<label><b>Kelas:</b></label>
			<input name= "Kelas" type="text" class="inputvalues" placeholder="Masukkan kelas" required/> <br>
			
			
			<br>Teras <br>
			<label><b>BM:</b></label>
			<input name= "BM" type="text" class="inputvalues" placeholder="Sudah mengambil buku BM?" required/> <br>
			<label><b>GEO:</b></label>
			<input name= "GEO" type="text" class="inputvalues" placeholder="Sudah mengambil buku GEO?" required/> <br>
			<label><b>SEJ:</b></label>
			<input name= "SEJ" type="text" class="inputvalues" placeholder="Sudah mengambil buku SEJ?" required/> <br>
			<label><b>MAT:</b></label>
			<input name= "MAT" type="text" class="inputvalues" placeholder="Sudah mengambil buku MAT?" required/> <br>
			<label><b>SNS:</b></label>
			<input name= "SNS" type="text" class="inputvalues" placeholder="Sudah mengambil buku SNS?" required/> <br>
			<label><b>PJPK:</b></label>	
			<input name= "PJPK" type="text" class="inputvalues" placeholder="Sudah mengambil buku PJPK?" required/> <br>
			<label><b>P. islam:</b></label>	
			<input name= "PI" type="text" class="inputvalues" placeholder="Sudah mengambil buku PI?"/> <br>
			<label><b>PULSE:</b></label>	
			<input name= "PULSE" type="text" class="inputvalues" placeholder="Sudah mengambil buku PULSE?"/> <br>
			
			<label><b>CLOSE - UP:</b></label>	
			<input name= "CLOSEUP" type="text" class="inputvalues" placeholder="Sudah mengambil buku CLOSE UP?"/> <br>
					
			<label><b>P. Moral:</b></label>	
			<input name= "PM" type="text" class="inputvalues" placeholder="Sudah mengambil buku PM?"/> <br><br>
			Elektif<br>
			<label><b>B. Arab:</b></label>	
			<input name= "BA" type="text" class="inputvalues" placeholder="Sudah mengambil buku BA?"/> <br>
			<label><b>RBT:</b></label>	
			<input name= "RBT" type="text" class="inputvalues" placeholder="Sudah mengambil buku RBT?"/> <br>
			<label><b>PSV:<b/></label>	
			<input name= "PSV" type="text" class="inputvalues" placeholder="Sudah mengambil buku PSV?"/> <br
			<label><b>ASK:</b></label>	
			<input name= "ASK" type="text" class="inputvalues" placeholder="Sudah mengambil buku ASK?"/> <br>
			<label><b>MUZIK:</b></label>	
			<input name= "MUZIK" type="text" class="inputvalues" placeholder="Sudah mengambil buku MUZIK?"/> <br>
			
			
			<br> KOMSAS TINGKATAN 1 <br>
			<label><b>Sejambak Bakti:</b></label>	
			<input name= "SEJAMBAK" type="text" class="inputvalues" placeholder="Sudah mengambil buku?"/> <br>
			
			<label><b>Kuingin Berterima Kasih:</b></label>	
			<input name= "KUINGIN" type="text" class="inputvalues" placeholder="Sudah mengambil buku?"/> <br>
			

			<br>KOMSAS TINGKATAN 2 <br>
			<label><b>Darah Titik Di Semantan:</b></label>	
			<input name= "darahtitik" type="text" class="inputvalues" placeholder="Sudah mengambil buku?"/> <br>
			<label><b>Baik Budi Indah Bahasa:</b></label>	
			<input name= "baikbudi" type="text" class="inputvalues" placeholder="Sudah mengambil buku?"/> <br>
			
			
			<br>KOMSAS TINGKATAN 3 <br>
			<label><b>Hempasan Ombak:</b></label>	
			<input name= "hempasan" type="text" class="inputvalues" placeholder="Sudah mengambil buku?"/> <br>
			<label><b>Bintang Hati:</b></label>	
			<input name= "bintanghati" type="text" class="inputvalues" placeholder="Sudah mengambil buku?"/> <br>
			
			
			
			
			<input name="submit_btn" type = "submit" id="signup_btn" value="Enter"/>
			</form>
			
			<?php  
				if(isset($_POST['submit_btn']))
				{
					$Nama_pelajar=$_POST['Nama_pelajar'];
					$Kelas=$_POST['Kelas'];
					$Bahasa=$_POST['BM'];
					$Geografi=$_POST['GEO'];
					$Sejarah=$_POST['SEJ'];
					$Matematik=$_POST['MAT'];
					$Sains=$_POST['SNS'];
					$Pjpk=$_POST['PJPK'];
					$Islam=$_POST['PI'];
					$Moral=$_POST['PM'];
					$Arab=$_POST['BA'];
					$Rbt=$_POST['RBT'];
					$Seni=$_POST['PSV'];
					$Pulse=$_POST['PULSE'];
					$Ask=$_POST['ASK'];	
					$Muzik=$_POST['MUZIK'];
					$Sejambak=$_POST['SEJAMBAK'];					
					$Kuingin=$_POST['KUINGIN'];					
					$Darahtitik=$_POST['darahtitik'];					
					$Baikbudi=$_POST['baikbudi'];					
					$Closeup=$_POST['CLOSEUP'];					
					$Hempasan=$_POST['hempasan'];					
					$Bintanghati=$_POST['bintanghati'];					
					$Ask=$_POST['ASK'];					
					
					
					
					$sql="INSERT INTO `pelajar` (`NO_ID`, `Nama_pelajar`, `Kelas`, `BM`, `GEO`, `SEJ`, `MAT`, `SNS`, `PJPK`, `PI`, `PM`, `BA`, `RBT`, `PSV`, `PULSE`, `ASK`, `PMZ`, `SEJAMBAK`, `KUINGIN`, `darahtitik`, `baikbudi`, `closeup`, `hempasan`, `bintanghati`, `fullblast`, `fizik`, `bio`, `kimia`, `addmath`, `rc`, `pertanian`, `ekonomi`, `tasawwur`, `sainssukan`, `disebalik`, `jaketkulit`, `download`, `silirdaksina`, `sejadahrindu`) VALUES (NULL, '$Nama_pelajar', '$Kelas', '$Bahasa', '$Geografi', '$Sejarah', '$Matematik', '$Sains', '$Pjpk', '$Islam', '$Moral', '$Arab', '$Rbt', '$Seni', '$Pulse', '$Ask', '$Muzik', '$Sejambak', '$Kuingin', '$Darahtitik', '$Baikbudi', '$Closeup', '$Hempasan', '$Bintanghati', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '')";
					$sql_run=mysqli_query($con, $sql);
					
						if($sql_run) {
							echo '<script type="text/javascript">alert("Maklumat diterima.")</script>';
						}
						else{
							echo '<script type="text/javascript">alert("Error.")</script>';
						}
				}
			?>
			
			</div>
		
		</div>
	
		
	<body>
</html>

