<?php
/*************************************************
* Filename    : selector.php
* Programmer  : Ranggi Rahman
* Date        : 2018 - 1 - 15
* Email       : ranggirahman@gmail.com
* Website     : 1400707.blog.upi.edu
* Deskripsi   : Computer Hardware Selector Page
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
	    		<div class="col-md-12"><h5 class="display-4" style="font-size: 28px;"><i class="material-icons" style="font-size: 40px; color: grey;">assessment</i> Top 5 Best Score</h5></div>	    		
	    	</div>
	    	<hr>
	    	<div class="row">	    		
	    		<div class="col-md-4">
	    			<div class="card">
	    				<div class="card-header">
	    					<h5 class="text-center" style="padding-top: 12px;"><img src="img/processor.png" style="max-width: 9%; and height: auto"> Processor</h5>
	    				</div>
 					 	<div class="card-body">   
			    			<div class="row">
			    				<div class="col-md-12">			    					
		    						<table class="table table-sm">
		    							<thead class="">		    								
			    							<tr>
			    								<th></th>
			    								<th>Name</th>
			    								<th>Score</th>
			    							</tr>
		    							</thead>
		    							<?php
							    			$cpu = mysqli_query($koneksi,"select *from cpu order by cpuscore desc limit 5");
								      		$i = 0;

								      		while($key = mysqli_fetch_array($cpu,MYSQLI_BOTH)){
								      			$i++;
								      			?>
								      			<tr>
								      				<td><?php echo $i; ?></td>
								      				<td><?php echo $key['cpuname']; ?></td>
								      				<td><?php echo $key['cpuscore']; ?></td>
								      			</tr>
								      		<?php
								      		}
					    				?>
		    						</table>	    					
			    				</div>
			    			</div>
			    		</div>
			    	</div>
	    		</div>
	    		<div class="col-md-4">
	    			<div class="card">
	    				<div class="card-header">
	    					<h5 class="text-center" style="padding-top: 12px;"><img src="img/vga.png" style="max-width: 12%; and height: auto"> Video Graphic Array</h5>
	    				</div>
 					 	<div class="card-body">   
			    			<div class="row">
			    				<div class="col-md-12">			    					
		    						<table class="table table-sm">
		    							<thead class="">		    								
			    							<tr>
			    								<th></th>
			    								<th>Name</th>
			    								<th>Score</th>
			    							</tr>
		    							</thead>
		    							<?php
							    			$vga = mysqli_query($koneksi,"select *from vga order by vgascore desc limit 5");
								      		$i = 0;

								      		while($key = mysqli_fetch_array($vga,MYSQLI_BOTH)){
								      			$i++;
								      			?>
								      			<tr>
								      				<td><?php echo $i; ?></td>
								      				<td><?php echo $key['vganame']; ?></td>
								      				<td><?php echo $key['vgascore']; ?></td>
								      			</tr>
								      		<?php
								      		}
					    				?>
		    						</table>	    					
			    				</div>
			    			</div>
			    		</div>
			    	</div>
	    		</div>
	    		<div class="col-md-4">
	    			<div class="card">
	    				<div class="card-header">
	    					<h5 class="text-center" style="padding-top: 12px;"><img src="img/ssd.png" style="max-width: 9%; and height: auto"> Solid State Disk</h5>
	    				</div>
 					 	<div class="card-body">   
			    			<div class="row">
			    				<div class="col-md-12">			    					
		    						<table class="table table-sm">
		    							<thead class="">		    								
			    							<tr>
			    								<th></th>
			    								<th>Name</th>
			    								<th>Score</th>
			    							</tr>
		    							</thead>
		    							<?php
							    			$ssd = mysqli_query($koneksi,"select *from ssd order by ssdscore desc limit 5");
								      		$i = 0;

								      		while($key = mysqli_fetch_array($ssd,MYSQLI_BOTH)){
								      			$i++;
								      			?>
								      			<tr>
								      				<td><?php echo $i; ?></td>
								      				<td><?php echo $key['ssdname']; ?></td>
								      				<td><?php echo $key['ssdscore']; ?></td>
								      			</tr>
								      		<?php
								      		}
					    				?>
		    						</table>	    					
			    				</div>
			    			</div>
			    		</div>
			    	</div>
	    		</div>
	    	</div>
	    	<br>
	     	<hr>
	     	<br>
	     	<div class="row">
	     		<div class="col-md-12">
	     			<div class="card">
					  	<div class="card-header">
					    	<h5>Spesification Select</h5>
					  	</div>
					  	<div class="card-body">
					  		<div class="row">
					  			<div class="col-md-2">What Your Computer Can Do ?</div>
					  			<div class="col-md-10">
					  				<div class="btn-group btn-group-toggle" data-toggle="buttons">
									  <label class="btn btn-info">
									    <input type="radio" name="options" id="option1" autocomplete="off">Home Usage
									  </label>
									  <label class="btn btn-info">
									    <input type="radio" name="options" id="option2" autocomplete="off">Gaming
									  </label>
									  <label class="btn btn-info">
									    <input type="radio" name="options" id="option3" autocomplete="off">Graphic Rendering
									  </label>
									  <label class="btn btn-info">
									    <input type="radio" name="options" id="option4" autocomplete="off">Computing, Simulation, Mining
									  </label>
									  
									</div>
					  			</div>
					  		</div>				    
					  	</div>
					  	<div class="card-footer text-muted text-right">
					    	<a href="#" class="btn btn-primary">Find</a>
					  	</div>
					</div>
	     		</div>     		
	     	</div>
	     	<br>
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
