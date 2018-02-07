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
	    		<div class="col-md-12"><h5 class="display-4" style="font-size: 24px;"><i class="material-icons" style="font-size: 32px; color: grey;">assessment</i> Top 5 Best Total Score</h5></div>	    		
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
		    						<table class="table table-sm table-hover">	   
		    							<thead>		    								 								
			    							<tr>
			    								<th></th>
			    								<th>Name</th>
			    								<th>Score</th>
			    								<th></th>
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
								      				<td>
								      					<div class="progress" style="height: 25px;">
													  		<div class="progress-bar" role="progressbar" style="width: <?php echo $key['cpuscore']*10 ?>%;" aria-valuenow="<?php echo $key['cpuscore'] ?>" aria-valuemin="0" aria-valuemax="10"><?php echo $key['cpuscore'] ?></div>
														</div>
													</td>
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
	    					<h5 class="display-4" style="padding-top: 12px; font-size: 22px;"><img src="img/vga.png" style="max-width: 9%; and height: auto"> Video Graphic Array</h5>
	    				</div>
 					 	<div class="card-body">   
			    			<div class="row">
			    				<div class="col-md-12">			    					
		    						<table class="table table-sm table-hover">		    								
		    							<thead>		    								 								
			    							<tr>
			    								<th></th>
			    								<th>Name</th>
			    								<th>Score</th>
			    								<th></th>
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
								      				<td class="table-center">
								      					<div class="progress" style="height: 25px;">
													  		<div class="progress-bar" role="progressbar" style="width: <?php echo $key['vgascore']*10 ?>%;" aria-valuenow="<?php echo $key['vgascore'] ?>" aria-valuemin="0" aria-valuemax="10"><?php echo $key['vgascore'] ?></div>
														</div>
													</td>
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
		    						<table class="table table-sm table-hover">		    								
		    							<thead>		    								 								
			    							<tr>
			    								<th></th>
			    								<th>Name</th>
			    								<th>Score</th>
			    								<th></th>
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
								      				<td class="table-center">
								      					<div class="progress" style="height: 25px;">
													  		<div class="progress-bar" role="progressbar" style="width: <?php echo $key['ssdscore']*10 ?>%;" aria-valuenow="<?php echo $key['ssdscore'] ?>" aria-valuemin="0" aria-valuemax="10"><?php echo $key['ssdscore'] ?></div>
														</div>
													</td>
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
						    	<h5 class="card-title display-4" style="padding-top: 8px; font-size: 20px;">Spesification Select</h5>
						    	<p class="card-title display-4" style="font-size: 24px;">What Your Computer Can Do ?</p>
						  	</div>
						  	<div class="card-body">
						  		<div class="row">
						  			<div class="col-md-12 text-center">
						  				<div class="btn-group btn-group-toggle" data-toggle="buttons" style="width: 100%">
						  					<?php
									     		$sh = mysqli_query($koneksi,"select *from spesification");
									     		while($sr = mysqli_fetch_array($sh,MYSQLI_BOTH)){
									     	?>
						  					<label class="btn btn-light" style="width: 20%">
											    <input type="radio" name="options" id="options" value="<?php echo $sr['sid']; ?>" autocomplete="off"><br><i class="material-icons" style="font-size: 60px;"><?php echo $sr['sicon']; ?></i><br><?php echo $sr['sname']; ?><br><br>
											</label>
											<?php
												}
											?>									  
										</div>
						  			</div>
						  		</div>				    
						  	</div>
						  	<div class="card-footer">
						  		<div class="row">
						  			<div class="col-md-12 text-right"><button type="button" class="btn btn-primary" id="find">Find</button></div>
						  		</div>						  		
						  	</div>
						</form>
					</div>
	     		</div>     		
	     	</div>
	     	<br>

	     	<?php
	     		$s = mysqli_query($koneksi,"select *from spesification");
	     		while($sr = mysqli_fetch_array($s,MYSQLI_BOTH)){
	     	?>
 			<div id="<?php echo $sr['sid']; ?>" class="row" style="display: none;">
	     		<div class="col-md-12">
	     			<div class="card">
					  	<div class="card-body">
					  		<div class="card-title display-4" style="font-size: 24px;"><i class="material-icons" style="color: grey; font-size: 30px;">find_in_page</i> Result For <?php echo $sr['sname'] ?></div>
					  		<br>
					  		<div class="row">
					  			<div class="col-md-12">
					  				<table class="table table-center table-sm table-bordered">  
		    							<?php
		    								$cpu = mysqli_query($koneksi,$sr['psyntax']);
		    								$i = 0;
								      		echo "<tr><td></td><td></td>";
								      		while(mysqli_fetch_array($cpu,MYSQLI_BOTH)){
								      			$i++;
								      			?>
							      				<th width="200px"><p class="display-4" ><?php echo $i; ?><p></th>   												      			
								      		<?php								      		
								      		}
								      		echo "</tr>";
								    			$cpu = mysqli_query($koneksi,$sr['psyntax']);
								    			echo "<td rowspan='5' style='transform: rotate(270deg); padding-top: 5%;'>Processor</td>";
									      		echo "<tr><td>Name</td>";
									      		while($key = mysqli_fetch_array($cpu,MYSQLI_BOTH)){
									      			?>
								      				<td><?php echo $key['cpuname']; ?></td>							      												      			
									      		<?php								      		
									      		}
									      		echo "</tr>";
									      		echo "<tr><td>Score</td>";
									      		$cpu = mysqli_query($koneksi,$sr['psyntax']);
									      		while($key = mysqli_fetch_array($cpu,MYSQLI_BOTH)){
									      			?>
								      				<td><?php echo $key['cpuscore']; ?></td>							      												      			
									      		<?php								      		
									      		}
									      		echo "</tr>";
									      		echo "<tr><td>Price</td>";
									      		$cpu = mysqli_query($koneksi,$sr['psyntax']);
									      		while($key = mysqli_fetch_array($cpu,MYSQLI_BOTH)){
									      			?>
								      				<td>$<?php echo $key['cpuprice']; ?></td>							      												      			
									      		<?php								      		
									      		}
									      		echo "</tr>";
									      		echo "<tr><td></td>";
									      		$cpu = mysqli_query($koneksi,$sr['psyntax']);
									      		while($key = mysqli_fetch_array($cpu,MYSQLI_BOTH)){
									      			?>
								      				<td>
								      					<a class="btn btn-light btn-sm" href="https://www.google.com/search?q=<?php echo $key['cpuname'] ?>" target="_blank" role="button"><span aria-hidden="true"><i class="material-icons" style="font-size: 16px;">open_in_new</i></span></a>
								      					<a class="btn btn-light btn-sm" href="https://www.amazon.com/s/ref=nb_sb_noss?url=search-alias%3Daps&field-keywords=<?php echo $key['cpuname'] ?>" target="_blank" role="button"><span aria-hidden="true"><i class="material-icons" style="font-size: 16px;">shopping_cart</i></span></a>
								      				</td>							      												      			
									      		<?php								      		
									      		}
								      		echo "</tr>";
					    				?>
					    				
					    				<tr><td colspan="6"><br></td></tr>

		    							<?php
								      		echo "</tr>";
								    			$vga = mysqli_query($koneksi,$sr['vsyntax']);
									      		echo "<tr><td>Name</td>";
									      		while($key = mysqli_fetch_array($vga,MYSQLI_BOTH)){
									      			?>
								      				<td><?php echo $key['vganame']; ?></td>							      												      			
									      		<?php								      		
									      		}
									      		echo "</tr>";
									      		echo "<tr><td>Score</td>";
									      		$vga = mysqli_query($koneksi,$sr['vsyntax']);
									      		while($key = mysqli_fetch_array($vga,MYSQLI_BOTH)){
									      			?>
								      				<td><?php echo $key['vgascore']; ?></td>							      												      			
									      		<?php								      		
									      		}
									      		echo "</tr>";
									      		echo "<tr><td>Price</td>";
									      		$vga = mysqli_query($koneksi,$sr['vsyntax']);
									      		while($key = mysqli_fetch_array($vga,MYSQLI_BOTH)){
									      			?>
								      				<td>$<?php echo $key['vgaprice']; ?></td>							      												      			
									      		<?php								      		
									      		}
									      		echo "</tr>";
									      		echo "<tr><td></td>";
									      		$vga = mysqli_query($koneksi,$sr['vsyntax']);
									      		while($key = mysqli_fetch_array($vga,MYSQLI_BOTH)){
									      			?>
								      				<td>
								      					<a class="btn btn-light btn-sm" href="https://www.google.com/search?q=<?php echo $key['vganame'] ?>" target="_blank" role="button"><span aria-hidden="true"><i class="material-icons" style="font-size: 16px;">open_in_new</i></span></a>
								      					<a class="btn btn-light btn-sm" href="https://www.amazon.com/s/ref=nb_sb_noss?url=search-alias%3Daps&field-keywords=<?php echo $key['vganame'] ?>" target="_blank" role="button"><span aria-hidden="true"><i class="material-icons" style="font-size: 16px;">shopping_cart</i></span></a>
								      				</td>							      												      			
									      		<?php								      		
									      		}
								      		echo "</tr>";
					    				?>

					    				<tr><td colspan="6"><br></td></tr>

		    							<?php
								      		echo "</tr>";
							    			$ssd = mysqli_query($koneksi,$sr['ssyntax']);
								      		echo "<tr><td>Name</td>";
									      		while($key = mysqli_fetch_array($ssd,MYSQLI_BOTH)){
									      			?>
								      				<td><?php echo $key['ssdname']; ?></td>							      												      			
									      		<?php								      		
									      		}
									      		echo "</tr>";
									      		echo "<tr><td>Score</td>";
									      		$ssd = mysqli_query($koneksi,$sr['ssyntax']);
									      		while($key = mysqli_fetch_array($ssd,MYSQLI_BOTH)){
									      			?>
								      				<td><?php echo $key['ssdscore']; ?></td>							      												      			
									      		<?php								      		
									      		}
									      		echo "</tr>";
									      		echo "<tr><td>Price</td>";
									      		$ssd = mysqli_query($koneksi,$sr['ssyntax']);
									      		while($key = mysqli_fetch_array($ssd,MYSQLI_BOTH)){
									      			?>
								      				<td>$<?php echo $key['ssdprice']; ?></td>							      												      			
									      		<?php								      		
									      		}
									      		echo "</tr>";
									      		echo "<tr><td></td>";
									      		$ssd = mysqli_query($koneksi,$sr['ssyntax']);
									      		while($key = mysqli_fetch_array($ssd,MYSQLI_BOTH)){
									      			?>
								      				<td>
								      					<a class="btn btn-light btn-sm" href="https://www.google.com/search?q=<?php echo $key['ssdname'] ?>" target="_blank" role="button"><span aria-hidden="true"><i class="material-icons" style="font-size: 16px;">open_in_new</i></span></a>
								      					<a class="btn btn-light btn-sm" href="https://www.amazon.com/s/ref=nb_sb_noss?url=search-alias%3Daps&field-keywords=<?php echo $key['ssdname'] ?>" target="_blank" role="button"><span aria-hidden="true"><i class="material-icons" style="font-size: 16px;">shopping_cart</i></span></a>
								      				</td>							      												      			
									      		<?php								      		
									      		}
								      		echo "</tr>";
					    				?>
					    				
		    						</table>
					  			</div>
					  		</div>
					  		
					  		<div class="row">
					  			<div class="col-md-12 text-center">					  				
					  				<hr>
					  				<?php
					  					$r = "r".$sr['sid'];
					  					$nr = "nr".$sr['sid'];
					  				?>
					  				<form action="" method="post">
					  					<div class="btn-group" role="group" style="width: 60%;">
											<button type="submit" name="<?php echo $r ?>" class="btn btn-light" style="width: 50%;"><i class="material-icons" style="font-size: 40px;">thumb_up</i><h4 class="display-4" style="font-size: 20px;">Recommended (<?php echo $sr['fr'] ?>)</h4></button>
											<button type="submit" name="<?php echo $nr ?>" class="btn btn-light" style="width: 50%;"><i class="material-icons" style="font-size: 40px;">thumb_down</i><h4 class="display-4" style="font-size: 20px;">Not Recommended (<?php echo $sr['fnr'] ?>)</h4></button>
										</div>
					  				</form>
					  				<?php
									  	if(isset($_POST[$r])){
										   	$r = mysqli_query($koneksi,"update spesification set fr=fr+1 where sid='".$sr['sid']."'"); 
										   	echo "<meta http-equiv='refresh' content='0'>";	  
									  	}else if(isset($_POST[$nr])){
									  		$nr = mysqli_query($koneksi,"update spesification set fnr=fnr+1 where sid='".$sr['sid']."'");
									  		echo "<meta http-equiv='refresh' content='0'>";	
									  	}
									?>					  				
					  			</div>
					  		</div>				    
					  	</div>
					</div>
	     		</div>     		
	     	</div>
	     	<?php
	     		}
	     	?>
	     	
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

        		var options = $('input[name=options]:checked').val();

        		// reset display
        		setTimeout(function() {
			       $("#1").hide("slow");
			       $("#2").hide("slow");
			       $("#3").hide("slow");
			       $("#4").hide("slow");
			       $("#5").hide("slow");
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
