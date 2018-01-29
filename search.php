<?php
/*************************************************
* Filename    : search.php
* Programmer  : Ranggi Rahman
* Date        : 2018 - 1 - 14
* Email       : ranggirahman@gmail.com
* Website     : 1400707.blog.upi.edu
* Deskripsi   : Search Result Page
*
**************************************************/

  	include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">    
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <link rel="stylesheet" href="css/bootstrap.css" media="screen">
	    <link rel="stylesheet" href="css/material-icons.css">
	    <link rel="stylesheet" href="css/modification.css">
	    <link href="css/jumbotron.css" rel="stylesheet">
	    <link rel="icon" href="img/favicon.ico">	   
	    <title>DSS : Pemilihan Spesifikasi Hardware Komputer</title>
  	</head>

  	<body>
  		<?php $search = $_POST['search']; ?>

	    <div class="navbar navbar-expand-lg fixed-top navbar-dark bg-primary">
	      	<div class="container">
	        	<a href="index.php" class="navbar-brand"><img src="img/logo.png" class="img-fluid" style="max-width: 5%; and height: auto">&nbsp; Decision Support System</a>

	        	<form class="col-lg-5" action="search.php" method="POST" class="form-inline">
				  	<input class="form-control" name="search" placeholder="Product Search" value="<?php echo $search ?>">
				  	<input type="submit" name="searchsubmit" style="display:none"/>
		        </form>
	      	</div>
	    </div>

	    

		<div class="container" style="padding-top: 60px;">
	      	<div class="row">
	      		<div class="col-md-12">
	      		<?php  					  				
					// cpu
   					$result = mysqli_query($koneksi,"select *from cpu where cpuname like'%$search%'");
					while($row = mysqli_fetch_array($result,MYSQLI_BOTH)){
						echo "<table border=0>"; 
							echo "<tr>";
						    	echo "<td rowspan='4' width='130'><img src='img/processor.png' style='max-width: 75%; and height: auto'></td>";
						    	echo "<td colspan='7'><a href='https://www.google.com/search?q=".$row['cpuname']."' target='_blank'><h5 class='display-4' style='font-size: 22px;'>".$row['cpuname']."</h5></a></td>";
						    echo "</tr>";
						    echo "<tr>";
						    	echo "<td width='200'>Perfomance</td>";
						    	echo "<td width='30'>".$row['performance']."</td>";
						    	echo "<td width='25' rowspan='4'></td>";
						    	echo "<td width='250'>Single-Core Perfomance</td>";
						    	echo "<td width='30'>".$row['single']."</td>";
						    	echo "<td width='30' rowspan='4'></td>";
						    	echo "<td width='250'>Total Score</td>";
						    echo "</tr>";
						    echo "<tr>";
						    	echo "<td>Integrated Graphic</td>";
						    	echo "<td>".$row['intg']."</td>";
						    	echo "<td>Integrated Graphic (OpenCL)</td>";
						    	echo "<td>".$row['intgocl']."</td>";					    	
						    	echo "<td rowspan='2'><h5 class='display-4' style='font-size: 36px;'>".$row['cpuscore']."</h5></td>";
						    echo "</tr>";
						    echo "<tr>";
						    	echo "<td>Performance Per Watt</td>";
						    	echo "<td>".$row['ppw']."</td>";
						    	echo "<td>Value (Pay)</td>";
						    	echo "<td>".$row['value']."</td>";						    	
						    echo "</tr>";
						echo "</table><br><br>";						    
					}

					// vga					
   					$result = mysqli_query($koneksi,"select *from vga where vganame like'%$search%'");
					while($row = mysqli_fetch_array($result,MYSQLI_BOTH)){
						echo "<table border=0>"; 
							echo "<tr>";
						    	echo "<td rowspan='4' width='130'><img src='img/vga.png' style='max-width: 80%; and height: auto'></td>";
						    	echo "<td colspan='7'><a href='https://www.google.com/search?q=".$row['vganame']."' target='_blank'><h5 class='display-4' style='font-size: 22px;'>".$row['vganame']."</h5></a></td>";
						    echo "</tr>";
						    echo "<tr>";
						    	echo "<td width='200'>Gaming</td>";
						    	echo "<td width='30'>".$row['gaming']."</td>";
						    	echo "<td width='25' rowspan='4'></td>";
						    	echo "<td width='250'>Graphic</td>";
						    	echo "<td width='30'>".$row['graphics']."</td>";
						    	echo "<td width='30' rowspan='4'></td>";
						    	echo "<td width='250'>Total Score</td>";
						    echo "</tr>";
						    echo "<tr>";
						    	echo "<td>Computing</td>";
						    	echo "<td>".$row['computing']."</td>";
						    	echo "<td>Performance Per Watt</td>";
						    	echo "<td>".$row['ppw']."</td>";					    	
						    	echo "<td rowspan='2'><h5 class='display-4' style='font-size: 36px;'>".$row['vgascore']."</h5></td>";
						    echo "</tr>";
						    echo "<tr>";
						    	echo "<td>Value (Pay)</td>";
						    	echo "<td>".$row['value']."</td>";
						    	echo "<td>Noise and Power</td>";
						    	echo "<td>".$row['nap']."</td>";						    	
						    echo "</tr>";
						echo "</table><br><br>";						    
					}

					// ssd					
   					$result = mysqli_query($koneksi,"select *from ssd where ssdname like'%$search%'");
					while($row = mysqli_fetch_array($result,MYSQLI_BOTH)){
						echo "<table border=0>"; 
							echo "<tr>";
						    	echo "<td rowspan='4' width='130'><img src='img/ssd.png' style='max-width: 70%; and height: auto'></td>";
						    	echo "<td colspan='7'><a href='https://www.google.com/search?q=".$row['ssdname']."' target='_blank'><h5 class='display-4' style='font-size: 22px;'>".$row['ssdname']."</h5></a></td>";
						    echo "</tr>";
						    echo "<tr>";
						    	echo "<td width='200'>Read Performance</td>";
						    	echo "<td width='30'>".$row['readp']."</td>";
						    	echo "<td width='25' rowspan='3'></td>";
						    	echo "<td width='250'>Write Performance</td>";
						    	echo "<td width='30'>".$row['writep']."</td>";
						    	echo "<td width='30' rowspan='3'></td>";
						    	echo "<td width='250'>Total Score</td>";
						    echo "</tr>";
						    echo "<tr>";
						    	echo "<td>Real World Performance</td>";
						    	echo "<td>".$row['realwb']."</td>";	
						    	echo "<td>Benchmarks</td>";
						    	echo "<td>".$row['bench']."</td>";				    	
						    	echo "<td rowspan='2'><h5 class='display-4' style='font-size: 36px;'>".$row['ssdscore']."</h5></td>";
						    echo "</tr>";
						    echo "<tr>";						    	
						    	echo "<td>&nbsp;</td>";
						    	echo "<td></td>";	
						    	echo "<td></td>";
						    	echo "<td></td>";						    	
						    echo "</tr>";
						echo "</table><br><br>";						    
					}
				?>
				</div>	        	
	     	</div>
	      	<hr>
	      	<footer>
	        	<p>&copy; 2018 Ranggi Rahman.</p>
	      	</footer>
		</div>

	    <script src="js/jquery.min.js"></script>
	    <script src="js/popper.min.js"></script>
	    <script src="js/bootstrap.js"></script>
	    <script src="js/custom.js"></script> 
	    <script type="text/javascript">
	    	$(function () {
			  	$('[data-toggle="popover"]').popover()
			})
	    </script>

	</body>
</html>
