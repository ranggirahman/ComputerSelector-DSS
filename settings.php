<?php
/*************************************************
* Filename    : settings.php
* Programmer  : Ranggi Rahman
* Date        : 2018 - 1 - 14
* Email       : ranggirahman@gmail.com
* Website     : 1400707.blog.upi.edu
* Deskripsi   : Settings Page
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
	    <div class="navbar navbar-expand-lg fixed-top navbar-dark bg-primary">
	      	<div class="container">
	        	<a href="index.php" class="navbar-brand"><img src="img/logo.png" class="img-fluid" style="max-width: 5%; and height: auto">&nbsp; Decision Support System</a>

	        	<form class="col-lg-5" action="search.php" method="POST" class="form-inline">
				  	<input class="form-control" name="search" placeholder="Product Search">
				  	<input type="submit" name="searchsubmit" style="display:none"/>
		        </form>
	      	</div>
	    </div>

	    

		<div class="container" style="padding-top: 60px;">
	      	<div class="row">
	      		<div class="col-md-12">
	      			<div class="card">
					  	<div class="card-header">
					    	Add Product
					  	</div>
					  	<div class="card-body">
						    <ul class="nav nav-tabs" id="myTab" role="tablist">
							  <li class="nav-item">
							    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#processor" role="tab" aria-selected="true">Processor</a>
							  </li>
							  <li class="nav-item">
							    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#vga" role="tab" aria-selected="false">Video Graphic Array</a>
							  </li>
							  <li class="nav-item">
							    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#ssd" role="tab" aria-selected="false">Solid State Disk</a>
							  </li>
							</ul>
							<div class="tab-content" id="myTabContent">
							  	<div class="tab-pane fade show active" id="processor" role="tabpanel">
							  		<form action="" method="POST">
							  			<br>
							  			<div class="row">
							  				<div class="col-md-12">
							  					<table class="table borderless">
									  				<tr>
									      				<td width="150px">Processor Name</td>
									      				<td><input class="form-control" type="text" name="cpuname" maxlength="100" required></td>
									      			</tr>
									      		</table>
									      		<hr>
									      		<table class="table borderless">
									      			<tr>
									      				<td width="150px">Performance</td>
									      				<td><input class="form-control" type="number" min="0" max="10" step="0.1" name="performance" maxlength="5" required></td>
									      				<td>Single-Core Performance</td>
									      				<td><input class="form-control" type="number" min="0" max="10" step="0.1" name="single" maxlength="5" required></td>	
									      				<td>Integrated Graphics</td>
									      				<td><input class="form-control" type="number" min="0" max="10" step="0.1" name="intg" maxlength="5" required></td>
									      				<td>Integrated Graphic (OpenCL)</td>
									      				<td><input class="form-control" type="number" min="0" max="10" step="0.1" name="intgocl" maxlength="5" required></td>
									      				</tr>
									      			<tr>
									      				<td>Performance Per Watt</td>
									      				<td><input class="form-control" type="number" min="0" max="10" step="0.1" name="ppw" maxlength="5" required></td>
									      				<td>Value (Pay)</td>
									      				<td><input class="form-control" type="number" min="0" max="10" step="0.1" name="value" maxlength="5" required></td>
									      				<td>Total Score</td>
									      				<td><input class="form-control" type="number" min="0" max="10" step="0.1" name="cpuscore" maxlength="5" required></td>		
									      			</tr>	
								      			</table>
							  				</div>						  												  										      			
							      		</div>
							      		<hr>
							      		<div class="row">
							      			<div class="col-md-12 text-right">
							      				<input class="btn btn-success" type="submit" name="cpuadd" value="Add">
							      			</div>							      			
							      		</div>
								  	</form>
								  	<?php
									  	if(isset($_POST['cpuadd'])){

										    $cpuname = $_POST['cpuname'];
										    $performance = $_POST['performance'];
										    $single = $_POST['single'];
										    $intg = $_POST['intg'];
										    $intgocl = $_POST['intgocl'];
										    $ppw = $_POST['ppw'];
										    $value = $_POST['value'];
										    $cpuscore = $_POST['cpuscore'];

										    $cpuadd = mysqli_query($koneksi,"insert into cpu(cpuname,performance,single,intg,intgocl,ppw,value,cpuscore) values ('$cpuname','$performance','$single','$intg','$intgocl','$ppw','$value','$cpuscore')");

										    echo "<meta http-equiv='refresh' content='0'>";						   
									  	}
									?>							  		
							  	</div>
							  	<div class="tab-pane fade" id="vga" role="tabpanel">
							  		<form action="" method="POST">
							  			<br>
							  			<div class="row">
							  				<div class="col-md-12">
							  					<table class="table borderless">
									  				<tr>
									      				<td width="150px">VGA Name</td>
									      				<td><input class="form-control" type="text" name="vganame" maxlength="100" required></td>
									      			</tr>
									      		</table>
									      		<hr>
									      		<table class="table borderless">
									      			<tr>
									      				<td width="150px">Gaming</td>
									      				<td><input class="form-control" type="number" min="0" max="10" step="0.1" name="gaming" maxlength="5" required></td>
									      				<td>Graphic</td>
									      				<td><input class="form-control" type="number" min="0" max="10" step="0.1" name="graphics" maxlength="5" required></td>	
									      				<td>Computing</td>
									      				<td><input class="form-control" type="number" min="0" max="10" step="0.1" name="computing" maxlength="5" required></td>
									      				<td>Performance Per Watt</td>
									      				<td><input class="form-control" type="number" min="0" max="10" step="0.1" name="ppw" maxlength="5" required></td>
									      				</tr>
									      			<tr>
									      				<td>Value (Pay)</td>
									      				<td><input class="form-control" type="number" min="0" max="10" step="0.1" name="value" maxlength="5" required></td>
									      				<td>Noise and Power</td>
									      				<td><input class="form-control" type="number" min="0" max="10" step="0.1" name="nap" maxlength="5" required></td>
									      				<td>Total Score</td>
									      				<td><input class="form-control" type="number" min="0" max="10" step="0.1" name="vgascore" maxlength="5" required></td>		
									      			</tr>	
								      			</table>
							  				</div>		
							      		</div>
							      		<hr>
							      		<div class="row">
							      			<div class="col-md-12 text-right">
							      				<input class="btn btn-success" type="submit" name="vgaadd" value="Add">
							      			</div>							      			
							      		</div>
								  	</form>
								  	<?php
									  	if(isset($_POST['vgaadd'])){

										    $vganame = $_POST['vganame'];
										    $gaming = $_POST['gaming'];
										    $graphics = $_POST['graphics'];
										    $computing = $_POST['computing'];
										    $ppw = $_POST['ppw'];
										    $value = $_POST['value'];
										    $nap = $_POST['nap'];
										    $vgascore = $_POST['vgascore'];

										    $cpuadd = mysqli_query($koneksi,"insert into vga(vganame,gaming,graphics,computing,ppw,value,nap,vgascore) values ('$vganame','$gaming','$graphics','$computing','$ppw','$value','$nap','$vgascore')");

										    echo "<meta http-equiv='refresh' content='0'>";						   
									  	}
									?>
							  	</div>
							  	<div class="tab-pane fade" id="ssd" role="tabpanel">
							  		<form action="" method="POST">
							  			<br>
							  			<div class="row">
							  				<div class="col-md-12">
							  					<table class="table borderless">
									  				<tr>
									      				<td width="150px">SSD Name</td>
									      				<td><input class="form-control" type="text" name="ssdname" maxlength="100" required></td>
									      			</tr>
									      		</table>
									      		<hr>
									      		<table class="table borderless">
									      			<tr>
									      				<td width="150px">Read Performance</td>
									      				<td><input class="form-control" type="number" min="0" max="10" step="0.1" name="readp" maxlength="5" required></td>
									      				<td>Write Performance</td>
									      				<td><input class="form-control" type="number" min="0" max="10" step="0.1" name="writep" maxlength="5" required></td>	
									      				<td>Real World Benchmarks</td>
									      				<td><input class="form-control" type="number" min="0" max="10" step="0.1" name="realwb" maxlength="5" required></td>
									      			<tr>
									      				<td>Benchmarks</td>
									      				<td><input class="form-control" type="number" min="0" max="10" step="0.1" name="bench" maxlength="5" required></td>
									      				<td>Total Score</td>
									      				<td><input class="form-control" type="number" min="0" max="10" step="0.1" name="ssdscore" maxlength="5" required></td>	
									      			</tr>	
								      			</table>
							  				</div>		
							      		</div>
							      		<hr>
							      		<div class="row">
							      			<div class="col-md-12 text-right">
							      				<input class="btn btn-success" type="submit" name="ssdadd" value="Add">
							      			</div>							      			
							      		</div>
								  	</form>
								  	<?php
									  	if(isset($_POST['ssdadd'])){

										    $ssdname = $_POST['ssdname'];
										    $readp = $_POST['readp'];
										    $writep = $_POST['writep'];
										    $realwb = $_POST['realwb'];
										    $bench = $_POST['bench'];
										    $ssdscore = $_POST['ssdscore'];

										    $cpuadd = mysqli_query($koneksi,"insert into ssd(ssdname,readp,writep,realwb,bench,ssdscore) values ('$ssdname','$readp','$writep','$realwb','$bench','$ssdscore')");

										    echo "<meta http-equiv='refresh' content='0'>";						   
									  	}
									?>
							  	</div>
							</div>
					  	</div>
					</div>
				</div>	        	
	     	</div>
	      	<hr>
	      	<div class="row">
	      		<div class="col-md-12">
	      			<div class="card">
					  	<div class="card-header">
					    	Add Spesification
					  	</div>
					  	<div class="card-body">
						    <h5 class="card-title">Special title treatment</h5>
						    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
						    <a href="#" class="btn btn-primary">Go somewhere</a>
					  	</div>
					</div>
				</div>	        	
	     	</div>
	     	<hr>
	      	<footer>
	      		<div class="row">
	      			<div class="col-md-9">
	      				<p class="display-4" style="font-size: 16px; padding: 4px 0px 8px 0px;">&copy; 2018 Ranggi Rahman</p>
	      			</div>
	      			<div class="col-md-3 text-right">
	      				<button type="button" class="btn btn-light btn-sm" onclick="toggleFullScreen()"><i class="material-icons">fullscreen</i></button>
	      				<a class="btn btn-light btn-sm" href="settings.php" role="button"><i class="material-icons">settings</i></a>
	      			</div>
	      		</div>	        	
	      	</footer>
		</div>

	    <script src="js/jquery.min.js"></script>
	    <script src="js/popper.min.js"></script>
	    <script src="js/bootstrap.js"></script>
	    <script src="js/custom.js"></script> 
	    
	    <script type="text/javascript">
	    	// pop over
	    	$(function () {
			  	$('[data-toggle="popover"]').popover()
			})

	    	// fullscreen
			function toggleFullScreen() {
			  	if ((document.fullScreenElement && document.fullScreenElement !== null) || (!document.mozFullScreen && !document.webkitIsFullScreen)) {
				    if (document.documentElement.requestFullScreen) {  
				      	document.documentElement.requestFullScreen();  
				    }else if(document.documentElement.mozRequestFullScreen) {  
				      	document.documentElement.mozRequestFullScreen();  
				    }else if(document.documentElement.webkitRequestFullScreen) {  
				      	document.documentElement.webkitRequestFullScreen(Element.ALLOW_KEYBOARD_INPUT);  
				    }  
			  	}else{  
				    if(document.cancelFullScreen) {  
				      	document.cancelFullScreen();  
				    }else if(document.mozCancelFullScreen) {  
				      	document.mozCancelFullScreen();  
				    }else if(document.webkitCancelFullScreen) {  
				      	document.webkitCancelFullScreen();  
				    }  
			  	}  
			}
	    </script>

	</body>
</html>
