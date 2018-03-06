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
	session_start();
	if( $_SESSION['islogin'] != 1){
		header("Location: login.php");
	}else if(isset($_POST['logout'])){
	    session_unset();
	    session_destroy();
	    header("Location: login.php");
  	}

  	include "koneksi.php";

  	$result = mysqli_query($koneksi,"select *from user where username='".$_SESSION['username']."'");
	$us = mysqli_fetch_array($result);

	$result = mysqli_query($koneksi,"select *from store where storeid='".$us['storeid']."'");
	$st = mysqli_fetch_array($result);
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
	    <title>Choice of Computer Hardware Specifications</title>
  	</head>

  	<body>
	    <div class="navbar navbar-expand-lg fixed-top navbar-dark bg-primary">
	      	<div class="container">
	        	<a href="index.php" class="navbar-brand"><img src="img/logo.png" class="img-fluid" style="max-width: 5%; and height: auto">&nbsp; Choice of Computer Hardware Specifications</a>

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
	    					<h5 class="display-4" style="padding-top: 7px; font-size: 22px;">Processor</h5>
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
	    					<h5 class="display-4" style="padding-top: 7px; font-size: 22px;">Video Graphic Array</h5>
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
	    					<h5 class="display-4" style="padding-top: 7px; font-size: 22px;">Solid State Disk</h5>
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
						  	<div class="card-footer text-muted">
						  		<div class="row">
						  			<div class="col-md-4"><a class="btn btn-light" href="settings.php" role="button" style="color: grey;">Price Filtered by Budget Settings</a></div>
						  			<div class="col-md-8 text-right"><button type="button" class="btn btn-primary" id="find">Find</button></div>
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
					  		<div class="row">
					  			<div class="col-md-12">
					  				<table class="table table-sm" border="0">  
		    							<?php 
		    								$i = 1;

		    								echo "
		    									<tr class='bg-light'>
		    										<td width='7%'></td>
		    										<td width='10%'></td>
		    										<td class='table-center' width='26%'><img src='img/processor.png' style='width: 50px'><br>Processor</td>
		    										<td class='table-center' width='26%'><img src='img/vga.png' style='width: 50px'><br>VGA</td>
		    										<td class='table-center' width='26%'><img src='img/ssd.png' style='width: 50px'><br>SSD</td>

		    									</tr>
		    									<tr><td colspan=5><br></td></tr>
		    								";

		    								$epsy = explode(" ", $sr['psyntax']);
		    								$epsy['2'] = $epsy['2']." where cpuprice <= ".$us['bcpu'];
		    								$ipsy = implode(" ",$epsy);
		    								$cpu = mysqli_query($koneksi,$ipsy);

		    								$evsy = explode(" ", $sr['vsyntax']);
		    								$evsy['2'] = $evsy['2']." where vgaprice <= ".$us['bvga'];
		    								$ivsy = implode(" ",$evsy);
		    								$vga = mysqli_query($koneksi,$ivsy);

 											$essy = explode(" ", $sr['ssyntax']);
		    								$essy['2'] = $essy['2']." where ssdprice <= ".$us['bssd'];
		    								$issy = implode(" ",$essy);
		    								$ssd = mysqli_query($koneksi,$issy);
		    								

		    								while ($i <= 5) {
		    									$rcpu = mysqli_fetch_array($cpu,MYSQLI_BOTH);
		    									$rvga = mysqli_fetch_array($vga,MYSQLI_BOTH);
		    									$rssd = mysqli_fetch_array($ssd,MYSQLI_BOTH);
		    									echo "<tr>";
			    								echo "<td rowspan=3 class='align-middle bg-light table-center'><h1 class=display-4>$i<h1></td>";
			    								echo "<td style='padding-left: 30px;'>Name</td>";
			    								echo "<td style='padding-right: 20px; padding-left: 20px;'><b>".$rcpu['cpuname']."</b> <a href='https://www.google.com/search?q=".$rcpu['cpuname']."' target='_blank' role='button'><span aria-hidden='true'><i class='material-icons' style='font-size: 16px;'>open_in_new</i></span></a></td>";
			    								echo "<td style='padding-right: 20px; padding-left: 20px;'><b>".$rvga['vganame']."</b> <a href='https://www.google.com/search?q=".$rvga['vganame']."' target='_blank' role='button'><span aria-hidden='true'><i class='material-icons' style='font-size: 16px;'>open_in_new</i></span></a></td>";
			    								echo "<td style='padding-right: 20px; padding-left: 20px;'><b>".$rssd['ssdname']."</b> <a href='https://www.google.com/search?q=".$rssd ['ssdname']."' target='_blank' role='button'><span aria-hidden='true'><i class='material-icons' style='font-size: 16px;'>open_in_new</i></span></a></td>";
			    								echo "</tr>";
			    								echo "<tr>";
			    								echo "<td style='padding-left: 30px;'>Score</td>";
			    								echo "<td style='padding-right: 20px; padding-left: 20px;'><div class='progress' style='height: 25px;''><div class='progress-bar' role='progressbar' style='width: ".$rcpu['cpuscore']*10 ."%;' aria-valuenow='".$rcpu['cpuscore']."' aria-valuemin='0' aria-valuemax='10'>".$rcpu['cpuscore']."</div></div></td>";
			    								echo "<td style='padding-right: 20px; padding-left: 20px;'><div class='progress' style='height: 25px;''><div class='progress-bar' role='progressbar' style='width: ".$rvga['vgascore']*10 ."%;' aria-valuenow='".$rvga['vgascore']."' aria-valuemin='0' aria-valuemax='10'>".$rvga['vgascore']."</div></div></td>";
			    								echo "<td style='padding-right: 20px; padding-left: 20px;'><div class='progress' style='height: 25px;''><div class='progress-bar' role='progressbar' style='width: ".$rssd['ssdscore']*10 ."%;' aria-valuenow='".$rssd['ssdscore']."' aria-valuemin='0' aria-valuemax='10'>".$rssd['ssdscore']."</div></div></td>";
			    								echo "</tr>";
			    								echo "<tr>";
			    								echo "<td style='padding-left: 30px;'>Price</td>";
			    								echo "<td style='padding-right: 20px; padding-left: 20px;'>$".$rcpu['cpuprice']." <a href='".$st['query']."".$rcpu['cpuname']."' target='_blank' role='button'><span aria-hidden='true'><i class='material-icons' style='font-size: 16px;'>shopping_cart</i></span></a></td>";
			    								echo "<td style='padding-right: 20px; padding-left: 20px;'>$".$rvga['vgaprice']." <a href='".$st['query']."".$rvga['vganame']."' target='_blank' role='button'><span aria-hidden='true'><i class='material-icons' style='font-size: 16px;'>shopping_cart</i></span></a></td>";
			    								echo "<td style='padding-right: 20px; padding-left: 20px;'>$".$rssd['ssdprice']." <a href='".$st['query']."".$rssd['ssdname']."' target='_blank' role='button'><span aria-hidden='true'><i class='material-icons' style='font-size: 16px;'>shopping_cart</i></span></a></td>";
			    								echo "</tr>";

			    								echo "<tr><td colspan=5><br></td></tr>";
			    								$i++;
		    								}
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
											<button type="submit" name="<?php echo $r ?>" class="btn btn-light" style="width: 50%;"><i class="material-icons" style="font-size: 40px;">thumb_up</i><h4 class="display-4" style="font-size: 20px;">Recommended</h4></button>
											<button type="submit" name="<?php echo $nr ?>" class="btn btn-light" style="width: 50%;"><i class="material-icons" style="font-size: 40px;">thumb_down</i><h4 class="display-4" style="font-size: 20px;">Not Recommended</h4></button>
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
	      			<div class="col-md-10">
	      				<p class="display-4" style="font-size: 16px; padding: 4px 0px 8px 0px;">&copy; 2018 Ranggi Rahman</p>
	      			</div>
	      			<div class="col-md-2">
	      				<table class="float-right">
	      					<tr>
	      						<td><a class="btn btn-light btn-sm" href="settings.php" role="button" title="Settings"><i class="material-icons">settings_applications</i></a></td>
	      						<td><form action="" method="post"><button type="submit" class="btn btn-light btn-sm" name="logout" title="Sign Out"><i class="material-icons">exit_to_app</i></button></form></td>
	      					</tr>
	      				</table>
	      			</div>
	      		</div>	        	
	      	</footer>
		</div>

	    <script src="js/jquery.min.js"></script>
	    <script src="js/popper.min.js"></script>
	    <script src="js/bootstrap.js"></script>
	    <script src="js/custom.js"></script> 

	    <script type="text/javascript">
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
