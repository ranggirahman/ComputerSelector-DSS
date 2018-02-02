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
	    					<h5 class="display-4" style="padding-top: 12px; font-size: 22px;"><img src="img/processor.png" style="max-width: 9%; and height: auto"> Processor</h5>
	    				</div>
 					 	<div class="card-body">   
			    			<div class="row">
			    				<div class="col-md-12">			    					
		    						<table class="table table-sm">	    								
		    							<tr>
		    								<th></th>
		    								<th>Name</th>
		    								<th>Score</th>
		    								<th></th>
		    							</tr>
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
								      				<td><a href="https://www.google.com/search?q=<?php echo $key['cpuname'] ?>" target="_blank" role="button"><span aria-hidden="true"><i class="material-icons" style="font-size: 16px;">open_in_new</i></span></a></td>
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
	    					<h5 class="display-4" style="padding-top: 12px; font-size: 22px;"><img src="img/vga.png" style="max-width: 12%; and height: auto"> Video Graphic Array</h5>
	    				</div>
 					 	<div class="card-body">   
			    			<div class="row">
			    				<div class="col-md-12">			    					
		    						<table class="table table-sm">		    								
		    							<tr>
		    								<th></th>
		    								<th>Name</th>
		    								<th>Score</th>
		    								<th></th>
		    							</tr>
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
								      				<td><a href="https://www.google.com/search?q=<?php echo $key['vganame'] ?>" target="_blank" role="button"><span aria-hidden="true"><i class="material-icons" style="font-size: 16px;">open_in_new</i></span></a></td>
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
	    					<h5 class="display-4" style="padding-top: 12px; font-size: 22px;"><img src="img/ssd.png" style="max-width: 9%; and height: auto"> Solid State Disk</h5>
	    				</div>
 					 	<div class="card-body">   
			    			<div class="row">
			    				<div class="col-md-12">			    					
		    						<table class="table table-sm">		    								
		    							<tr>
		    								<th></th>
		    								<th>Name</th>
		    								<th>Score</th>
		    								<th></th>
		    							</tr>
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
								      				<td><a href="https://www.google.com/search?q=<?php echo $key['ssdname'] ?>" target="_blank" role="button"><span aria-hidden="true"><i class="material-icons" style="font-size: 16px;">open_in_new</i></span></a></td>
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
	     				<form action="" method="post" accept-charset="utf-8">
						  	<div class="card-header">
						    	<h5 class="card-title display-4" style="padding-top: 8px; font-size: 24px;">Spesification Select</h5>
						  	</div>
						  	<div class="card-body">
						  		<div class="row">
						  			<div class="col-md-2">What Your Computer Can Do ?</div>
						  			<div class="col-md-10">
						  				<div class="btn-group btn-group-toggle" data-toggle="buttons">
											<label class="btn btn-info">
											    <input type="radio" name="options" id="options" value="1" autocomplete="off">Home Usage, Office
											</label>
											<label class="btn btn-info">
											    <input type="radio" name="options" id="options" value="2" autocomplete="off">Gaming
											</label>
											<label class="btn btn-info">
											    <input type="radio" name="options" id="options" value="3" autocomplete="off">Graphic Rendering
											</label>
											<label class="btn btn-info">
											    <input type="radio" name="options" id="options" value="4" autocomplete="off">Computing, Simulation, Mining
											</label>										  
										</div>
						  			</div>
						  		</div>				    
						  	</div>
						  	<div class="card-footer text-right">
						    	<button type="button" class="btn btn-primary" id="find">Find</button>
						  	</div>
						</form>
					</div>
	     		</div>     		
	     	</div>
	     	<br>
	     	<div id="1" class="row" style="display: none;">
	     		<div class="col-md-12">
	     			<div class="card">
					  	<div class="card-body">
					  		<div class="card-title display-4" style="font-size: 20px;">Result For Home Usage, Office</div>
					  		<br>
					  		<div class="row">
					  			<div class="col-md-4">
					  				<table class="table table-sm">	    								
		    							<tr>
		    								<th></th>
		    								<th>Processor</th>
		    								<th></th>
		    							</tr>
		    							<?php
							    			$cpu = mysqli_query($koneksi,"select *from cpu order by value desc limit 5");
								      		$i = 0;

								      		while($key = mysqli_fetch_array($cpu,MYSQLI_BOTH)){
								      			$i++;
								      			?>
								      			<tr>
								      				<td><?php echo $i; ?></td>
								      				<td><?php echo $key['cpuname']; ?></td>
								      				<td><a href="https://www.google.com/search?q=<?php echo $key['cpuname'] ?>" target="_blank" role="button"><span aria-hidden="true"><i class="material-icons" style="font-size: 16px;">open_in_new</i></span></a></td>
								      			</tr>
								      		<?php
								      		}
					    				?>
		    						</table>
					  			</div>
					  			<div class="col-md-4">
					  				<table class="table table-sm">	    								
		    							<tr>
		    								<th></th>
		    								<th>VGA</th>
		    								<th></th>
		    							</tr>
		    							<?php
							    			$vga = mysqli_query($koneksi,"select *from vga order by value asc limit 5");
								      		$i = 0;

								      		while($key = mysqli_fetch_array($vga,MYSQLI_BOTH)){
								      			$i++;
								      			?>
								      			<tr>
								      				<td><?php echo $i; ?></td>
								      				<td><?php echo $key['vganame']; ?></td>
								      				<td><a href="https://www.google.com/search?q=<?php echo $key['vganame'] ?>" target="_blank" role="button"><span aria-hidden="true"><i class="material-icons" style="font-size: 16px;">open_in_new</i></span></a></td>
								      			</tr>
								      		<?php
								      		}
					    				?>
		    						</table>
					  			</div>
					  			<div class="col-md-4">
					  				<table class="table table-sm">	    								
		    							<tr>
		    								<th></th>
		    								<th>SSD</th>
		    								<th></th>
		    							</tr>
		    							<?php
							    			$ssd = mysqli_query($koneksi,"select *from ssd order by realwb desc limit 5");
								      		$i = 0;

								      		while($key = mysqli_fetch_array($ssd,MYSQLI_BOTH)){
								      			$i++;
								      			?>
								      			<tr>
								      				<td><?php echo $i; ?></td>
								      				<td><?php echo $key['ssdname']; ?></td>
								      				<td><a href="https://www.google.com/search?q=<?php echo $key['ssdname'] ?>" target="_blank" role="button"><span aria-hidden="true"><i class="material-icons" style="font-size: 16px;">open_in_new</i></span></a></td>
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
	     	<div id="2" class="row" style="display: none;">
	     		<div class="col-md-12">
	     			<div class="card">
					  	<div class="card-body">
					  		<div class="card-title display-4" style="font-size: 20px;">Result For Gaming</div>
					  		<br>
					  		<div class="row">
					  			<div class="col-md-4">
					  				<table class="table table-sm">	    								
		    							<tr>
		    								<th></th>
		    								<th>Processor</th>
		    								<th></th>
		    							</tr>
		    							<?php
							    			$cpu = mysqli_query($koneksi,"select *from cpu order by performance desc limit 5");
								      		$i = 0;

								      		while($key = mysqli_fetch_array($cpu,MYSQLI_BOTH)){
								      			$i++;
								      			?>
								      			<tr>
								      				<td><?php echo $i; ?></td>
								      				<td><?php echo $key['cpuname']; ?></td>
								      				<td><a href="https://www.google.com/search?q=<?php echo $key['cpuname'] ?>" target="_blank" role="button"><span aria-hidden="true"><i class="material-icons" style="font-size: 16px;">open_in_new</i></span></a></td>
								      			</tr>
								      		<?php
								      		}
					    				?>
		    						</table>
					  			</div>
					  			<div class="col-md-4">
					  				<table class="table table-sm">	    								
		    							<tr>
		    								<th></th>
		    								<th>VGA</th>
		    								<th></th>
		    							</tr>
		    							<?php
							    			$vga = mysqli_query($koneksi,"select *from vga order by gaming desc limit 5");
								      		$i = 0;

								      		while($key = mysqli_fetch_array($vga,MYSQLI_BOTH)){
								      			$i++;
								      			?>
								      			<tr>
								      				<td><?php echo $i; ?></td>
								      				<td><?php echo $key['vganame']; ?></td>
								      				<td><a href="https://www.google.com/search?q=<?php echo $key['vganame'] ?>" target="_blank" role="button"><span aria-hidden="true"><i class="material-icons" style="font-size: 16px;">open_in_new</i></span></a></td>
								      			</tr>
								      		<?php
								      		}
					    				?>
		    						</table>
					  			</div>
					  			<div class="col-md-4">
					  				<table class="table table-sm">	    								
		    							<tr>
		    								<th></th>
		    								<th>SSD</th>
		    								<th></th>
		    							</tr>
		    							<?php
							    			$ssd = mysqli_query($koneksi,"select *from ssd order by readp desc limit 5");
								      		$i = 0;

								      		while($key = mysqli_fetch_array($ssd,MYSQLI_BOTH)){
								      			$i++;
								      			?>
								      			<tr>
								      				<td><?php echo $i; ?></td>
								      				<td><?php echo $key['ssdname']; ?></td>
								      				<td><a href="https://www.google.com/search?q=<?php echo $key['ssdname'] ?>" target="_blank" role="button"><span aria-hidden="true"><i class="material-icons" style="font-size: 16px;">open_in_new</i></span></a></td>
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
	     	<div id="3" class="row" style="display: none;">
	     		<div class="col-md-12">
	     			<div class="card">
					  	<div class="card-body">
					  		<div class="card-title display-4" style="font-size: 20px;">Result For Graphic Rendering</div>
					  		<br>
					  		<div class="row">
					  			<div class="col-md-4">
					  				<table class="table table-sm">	    								
		    							<tr>
		    								<th></th>
		    								<th>Processor</th>
		    								<th></th>
		    							</tr>
		    							<?php
							    			$cpu = mysqli_query($koneksi,"select *from cpu order by performance desc limit 5");
								      		$i = 0;

								      		while($key = mysqli_fetch_array($cpu,MYSQLI_BOTH)){
								      			$i++;
								      			?>
								      			<tr>
								      				<td><?php echo $i; ?></td>
								      				<td><?php echo $key['cpuname']; ?></td>
								      				<td><a href="https://www.google.com/search?q=<?php echo $key['cpuname'] ?>" target="_blank" role="button"><span aria-hidden="true"><i class="material-icons" style="font-size: 16px;">open_in_new</i></span></a></td>
								      			</tr>
								      		<?php
								      		}
					    				?>
		    						</table>
					  			</div>
					  			<div class="col-md-4">
					  				<table class="table table-sm">	    								
		    							<tr>
		    								<th></th>
		    								<th>VGA</th>
		    								<th></th>
		    							</tr>
		    							<?php
							    			$vga = mysqli_query($koneksi,"select *from vga order by graphics desc limit 5");
								      		$i = 0;

								      		while($key = mysqli_fetch_array($vga,MYSQLI_BOTH)){
								      			$i++;
								      			?>
								      			<tr>
								      				<td><?php echo $i; ?></td>
								      				<td><?php echo $key['vganame']; ?></td>
								      				<td><a href="https://www.google.com/search?q=<?php echo $key['vganame'] ?>" target="_blank" role="button"><span aria-hidden="true"><i class="material-icons" style="font-size: 16px;">open_in_new</i></span></a></td>
								      			</tr>
								      		<?php
								      		}
					    				?>
		    						</table>
					  			</div>
					  			<div class="col-md-4">
					  				<table class="table table-sm">	    								
		    							<tr>
		    								<th></th>
		    								<th>SSD</th>
		    								<th></th>
		    							</tr>
		    							<?php
							    			$ssd = mysqli_query($koneksi,"select *from ssd order by bench desc limit 5");
								      		$i = 0;

								      		while($key = mysqli_fetch_array($ssd,MYSQLI_BOTH)){
								      			$i++;
								      			?>
								      			<tr>
								      				<td><?php echo $i; ?></td>
								      				<td><?php echo $key['ssdname']; ?></td>
								      				<td><a href="https://www.google.com/search?q=<?php echo $key['ssdname'] ?>" target="_blank" role="button"><span aria-hidden="true"><i class="material-icons" style="font-size: 16px;">open_in_new</i></span></a></td>
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
	     	<div id="4" class="row" style="display: none;">
	     		<div class="col-md-12">
	     			<div class="card">
					  	<div class="card-body">
					  		<div class="card-title display-4" style="font-size: 20px;">Result For Computing, Simulation, Mining</div>
					  		<br>
					  		<div class="row">
					  			<div class="col-md-4">
					  				<table class="table table-sm">	    								
		    							<tr>
		    								<th></th>
		    								<th>Processor</th>
		    								<th></th>
		    							</tr>
		    							<?php
							    			$cpu = mysqli_query($koneksi,"select *from cpu order by performance desc limit 5");
								      		$i = 0;

								      		while($key = mysqli_fetch_array($cpu,MYSQLI_BOTH)){
								      			$i++;
								      			?>
								      			<tr>
								      				<td><?php echo $i; ?></td>
								      				<td><?php echo $key['cpuname']; ?></td>
								      				<td><a href="https://www.google.com/search?q=<?php echo $key['cpuname'] ?>" target="_blank" role="button"><span aria-hidden="true"><i class="material-icons" style="font-size: 16px;">open_in_new</i></span></a></td>
								      			</tr>
								      		<?php
								      		}
					    				?>
		    						</table>
					  			</div>
					  			<div class="col-md-4">
					  				<table class="table table-sm">	    								
		    							<tr>
		    								<th></th>
		    								<th>VGA</th>
		    								<th></th>
		    							</tr>
		    							<?php
							    			$vga = mysqli_query($koneksi,"select *from vga order by computing desc limit 5");
								      		$i = 0;

								      		while($key = mysqli_fetch_array($vga,MYSQLI_BOTH)){
								      			$i++;
								      			?>
								      			<tr>
								      				<td><?php echo $i; ?></td>
								      				<td><?php echo $key['vganame']; ?></td>
								      				<td><a href="https://www.google.com/search?q=<?php echo $key['vganame'] ?>" target="_blank" role="button"><span aria-hidden="true"><i class="material-icons" style="font-size: 16px;">open_in_new</i></span></a></td>
								      			</tr>
								      		<?php
								      		}
					    				?>
		    						</table>
					  			</div>
					  			<div class="col-md-4">
					  				<table class="table table-sm">	    								
		    							<tr>
		    								<th></th>
		    								<th>SSD</th>
		    								<th></th>
		    							</tr>
		    							<?php
							    			$ssd = mysqli_query($koneksi,"select *from ssd order by realwb desc limit 5");
								      		$i = 0;

								      		while($key = mysqli_fetch_array($ssd,MYSQLI_BOTH)){
								      			$i++;
								      			?>
								      			<tr>
								      				<td><?php echo $i; ?></td>
								      				<td><?php echo $key['ssdname']; ?></td>
								      				<td><a href="https://www.google.com/search?q=<?php echo $key['ssdname'] ?>" target="_blank" role="button"><span aria-hidden="true"><i class="material-icons" style="font-size: 16px;">open_in_new</i></span></a></td>
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

			// data process on find
			$('#find').on('click',function() {				

        		var options= $('input[name=options]:checked').val();

        		// reset display
        		setTimeout(function() {
			       $("#1").hide("slow");
			       $("#2").hide("slow");
			       $("#3").hide("slow");
			       $("#4").hide("slow");
			   	}, 100);

				if(options != undefined){					
					setTimeout(function() {
				       $("#"+options+"").show("slow");
				   	}, 100);
				}else{
					alert("Please Select The Spesification");
				}
		    });
	    </script>

	</body>
</html>
