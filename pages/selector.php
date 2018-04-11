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
		header("Location: ../pages/login.php");
	}else if(isset($_POST['logout'])){
		if($_GET['logout'] == 1){
		    session_unset();
		    session_destroy();
		    header("Location: ../pages/login.php");
		}	    
  	}

  	include "../db/connection.php";


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
	    <link rel="stylesheet" href="../css/bootstrap.css" media="screen">
	    <link rel="stylesheet" href="../css/material-icons.css">
	    <link rel="stylesheet" href="../css/modification.css">
	    <link href="../css/jumbotron.css" rel="stylesheet">
	    <link rel="icon" href="../img/favicon.ico">	   
	    <title>Choice of Computer Hardware Specifications</title>
  	</head>

  	<body>

	    <?php include "../pages/header.php" ?>	    

		<div class="container" style="padding-top: 40px;">
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
			    							</tr>
		    							</thead>
		    							<?php
							    			$cpu = mysqli_query($koneksi,"select *from cpu order by cpuscore desc limit 5");
								      		$i = 0;

								      		while($key = mysqli_fetch_array($cpu,MYSQLI_BOTH)){
								      			$i++;
								      			?>
								      			<tr class="borderless">
								      				<td><?php echo $i; ?></td>
								      				<td><a href="../pages/product.php?p=<?php echo $key['cpuname'] ?>" role="button"><?php echo $key['cpuname']; ?></a></td>
								      				<td>
								      					<div class="progress" style="height: 25px;">
													  		<div class="progress-bar" role="progressbar" style="width: <?php echo $key['cpuscore']*10 ?>%;" aria-valuenow="<?php echo $key['cpuscore'] ?>" aria-valuemin="0" aria-valuemax="10"><?php echo $key['cpuscore'] ?></div>
														</div>
													</td>
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
			    							</tr>
		    							</thead>
		    							<?php
							    			$vga = mysqli_query($koneksi,"select *from vga order by vgascore desc limit 5");
								      		$i = 0;

								      		while($key = mysqli_fetch_array($vga,MYSQLI_BOTH)){
								      			$i++;
								      			?>
								      			<tr class="borderless">
								      				<td><?php echo $i; ?></td>
								      				<td><a href="../pages/product.php?p=<?php echo $key['vganame'] ?>" role="button"><span aria-hidden="true"><?php echo $key['vganame']; ?></span></td>
								      				<td class="table-center">
								      					<div class="progress" style="height: 25px;">
													  		<div class="progress-bar" role="progressbar" style="width: <?php echo $key['vgascore']*10 ?>%;" aria-valuenow="<?php echo $key['vgascore'] ?>" aria-valuemin="0" aria-valuemax="10"><?php echo $key['vgascore'] ?></div>
														</div>
													</td>
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
			    							</tr>
		    							</thead>
		    							<?php
							    			$ssd = mysqli_query($koneksi,"select *from ssd order by ssdscore desc limit 5");
								      		$i = 0;

								      		while($key = mysqli_fetch_array($ssd,MYSQLI_BOTH)){
								      			$i++;
								      			?>
								      			<tr class="borderless">
								      				<td><?php echo $i; ?></td>
								      				<td><a href="../pages/product.php?p=<?php echo $key['ssdname'] ?>" role="button"><?php echo $key['ssdname']; ?></a></td>
								      				<td class="table-center">
								      					<div class="progress" style="height: 25px;">
													  		<div class="progress-bar" role="progressbar" style="width: <?php echo $key['ssdscore']*10 ?>%;" aria-valuenow="<?php echo $key['ssdscore'] ?>" aria-valuemin="0" aria-valuemax="10"><?php echo $key['ssdscore'] ?></div>
														</div>
													</td>
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
						  			<div class="col-md-4"><a class="btn btn-light" href="../pages/settings.php" role="button" style="color: grey;"><i class="material-icons" style="font-size: 16px;">settings</i> Price Limit by Settings</a></div>
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

		    								echo "
		    									<tr class='bg-light'>
		    										<td width='7%'></td>
		    										<td width='8%'></td>
		    										<td class='table-center' width='24%'><img src='../img/processor.png' style='width: 50px'><br>Processor</td>
		    										<td class='table-center' width='24%'><img src='../img/vga.png' style='width: 50px'><br>VGA</td>
		    										<td class='table-center' width='24%'><img src='../img/ssd.png' style='width: 50px'><br>SSD</td>
		    										<td class='table-center' width='10%'><i class='material-icons' style='font-size:40px; color:grey; padding-top:6px; padding-bottom:5px;'>attach_money</i><br>Total Price</td>


		    									</tr>
		    									<tr><td colspan=6><br></td></tr>
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
		    								

		    								for ($i = 1; $i <= 5; $i++) {
		    									$rcpu = mysqli_fetch_array($cpu,MYSQLI_BOTH);
		    									$rvga = mysqli_fetch_array($vga,MYSQLI_BOTH);
		    									$rssd = mysqli_fetch_array($ssd,MYSQLI_BOTH);
		    									$total = $rcpu['cpuprice'] + $rvga['vgaprice'] + $rssd['ssdprice'];
		    									echo "<tr>";
			    								echo "<td rowspan=3 class='align-middle bg-light table-center'><h1 class=display-4>$i<h1></td>";
			    								echo "<td style='padding-left: 20px;'>Name</td>";
			    								echo "<td style='padding-right: 20px; padding-left: 20px;'><b>".$rcpu['cpuname']."</b> <a href='../pages/product.php?p=".$rcpu['cpuname']."' role='button'><span aria-hidden='true'><i class='material-icons' style='font-size: 16px;'>open_in_new</i></span></a></td>";
			    								echo "<td style='padding-right: 20px; padding-left: 20px;'><b>".$rvga['vganame']."</b> <a href='../pages/product.php?p=".$rvga['vganame']."' role='button'><span aria-hidden='true'><i class='material-icons' style='font-size: 16px;'>open_in_new</i></span></a></td>";
			    								echo "<td style='padding-right: 20px; padding-left: 20px;'><b>".$rssd['ssdname']."</b> <a href='../pages/product.php?p=".$rssd ['ssdname']."' role='button'><span aria-hidden='true'><i class='material-icons' style='font-size: 16px;'>open_in_new</i></span></a></td>";
			    								// total price
			    								echo "<td rowspan=3 class='align-middle bg-light table-center'><h1 class=display-4 style='font-size:25px;'>$ $total<h1></td>";
			    								echo "</tr>";
			    								echo "<tr>";
			    								echo "<td style='padding-left: 20px;'>Score</td>";
			    								echo "<td style='padding-right: 20px; padding-left: 20px;'><div class='progress' style='height: 25px;''><div class='progress-bar' role='progressbar' style='width: ".$rcpu['cpuscore']*10 ."%;' aria-valuenow='".$rcpu['cpuscore']."' aria-valuemin='0' aria-valuemax='10'>".$rcpu['cpuscore']."</div></div></td>";
			    								echo "<td style='padding-right: 20px; padding-left: 20px;'><div class='progress' style='height: 25px;''><div class='progress-bar' role='progressbar' style='width: ".$rvga['vgascore']*10 ."%;' aria-valuenow='".$rvga['vgascore']."' aria-valuemin='0' aria-valuemax='10'>".$rvga['vgascore']."</div></div></td>";
			    								echo "<td style='padding-right: 20px; padding-left: 20px;'><div class='progress' style='height: 25px;''><div class='progress-bar' role='progressbar' style='width: ".$rssd['ssdscore']*10 ."%;' aria-valuenow='".$rssd['ssdscore']."' aria-valuemin='0' aria-valuemax='10'>".$rssd['ssdscore']."</div></div></td>";
			    								echo "</tr>";
			    								echo "<tr>";
			    								echo "<td style='padding-left: 20px;'>Price</td>";
			    								echo "<td style='padding-right: 20px; padding-left: 20px;'>$".$rcpu['cpuprice']." <a href='".$st['query']."".$rcpu['cpuname']."' role='button'><span aria-hidden='true'><i class='material-icons' style='font-size: 16px;'>shopping_cart</i></span></a></td>";
			    								echo "<td style='padding-right: 20px; padding-left: 20px;'>$".$rvga['vgaprice']." <a href='".$st['query']."".$rvga['vganame']."'  role='button'><span aria-hidden='true'><i class='material-icons' style='font-size: 16px;'>shopping_cart</i></span></a></td>";
			    								echo "<td style='padding-right: 20px; padding-left: 20px;'>$".$rssd['ssdprice']." <a href='".$st['query']."".$rssd['ssdname']."'  role='button'><span aria-hidden='true'><i class='material-icons' style='font-size: 16px;'>shopping_cart</i></span></a></td>";
			    								echo "</tr>";

			    								echo "<tr><td colspan=6><br></td></tr>";
		    								}

		    								echo "
		    									<tr class='bg-light'>
		    										<td width='7%'></td>
		    										<td width='10%' class='text-center'><img src='../img/ram.png' style='width: 50px'></td>
		    										<td class='table-center align-middle' width='26%' colspan='4'>Minimum Size of RAM is ".$sr['mram']." GB</td>
		    									</tr>		    								
		    									";
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

					  					// recommend counter
					  					$ttr = mysqli_query($koneksi,"select count(resid) from spesification_response where ressid='".$sr['sid']."' and feedback='1'");
					  					$ftr = mysqli_fetch_array($ttr);
									    $str = $ftr['count(resid)'];

					  					$tnr = mysqli_query($koneksi,"select count(resid) from spesification_response where ressid='".$sr['sid']."' and feedback='2'");
					  					$fnr = mysqli_fetch_array($tnr);
									    $snr = $fnr['count(resid)'];

									    // recommend button status
									    $htr = mysqli_query($koneksi,"select count(resid) from spesification_response where ressid='".$sr['sid']."' and resuser='".$_SESSION['username']."' and feedback='1'");
									    $hsr = mysqli_fetch_array($htr);
									    $hr = $hsr['count(resid)'];

									    $hnr = mysqli_query($koneksi,"select count(resid) from spesification_response where ressid='".$sr['sid']."' and resuser='".$_SESSION['username']."' and feedback='2'");
									    $hsnr = mysqli_fetch_array($hnr);
									    $hnr = $hsnr['count(resid)'];		    						    
					  					
					  				?>
					  				<form action="" method="post">
					  					<div class="btn-group" role="group" style="width: 40%;">
											<button type="submit" name="<?php echo $r ?>" class="btn <?php if($hr == 1){echo 'btn-success';}else{echo 'btn-light';} ?>" style="width: 50%;"><i class="material-icons" style="font-size: 28px;">thumb_up</i><h4 class="display-4" style="font-size: 18px;">(<b><?php echo $str ?></b>) Recommended</h4></button>
											<button type="submit" name="<?php echo $nr ?>" class="btn <?php if($hnr == 1){echo 'btn-danger';}else{echo 'btn-light';} ?>" style="width: 50%;"><i class="material-icons" style="font-size: 28px;">thumb_down</i><h4 class="display-4" style="font-size: 18px;">(<b><?php echo $snr ?></b>) Not Recommended</h4></button>		
										</div>
										<a class="btn btn-light" href="../export/todoc.php?s=<?php echo $sr['sid'] ?>" role="button"><span aria-hidden="true"><i class="material-icons" style="font-size: 28px;">insert_drive_file</i></span> <h4 class="display-4" style="font-size: 18px;">Save</h4></a>
					  				</form>
					  				<?php

					  					if( isset($_POST[$r])|| isset($_POST[$nr])){

					  						// is user recommend exist
					  						$c = mysqli_query($koneksi,"select count(resid) from spesification_response where resuser='".$_SESSION['username']."' and ressid='".$sr['sid']."'");

										    $cr = mysqli_fetch_array($c);
										    $ci = $cr['count(resid)'];

										    // if exsist just update 
										    if( $ci == 1 ){	
										    	if(isset($_POST[$r])){
												   	$r = mysqli_query($koneksi,"update spesification_response set feedback='1' where resuser='".$_SESSION['username']."' and ressid='".$sr['sid']."' "); 
											  	}else if(isset($_POST[$nr])){
											  		$nr = mysqli_query($koneksi,"update spesification_response set feedback='2' where resuser='".$_SESSION['username']."' and ressid='".$sr['sid']."'");
											  	}
											// if not do insert
											}else{
												if(isset($_POST[$r])){
												   	$r = mysqli_query($koneksi,"insert into spesification_response(resuser,ressid,feedback) values ('".$_SESSION['username']."','".$sr['sid']."','1')"); 
											  	}else if(isset($_POST[$nr])){
											  		$nr = mysqli_query($koneksi,"insert into spesification_response(resuser,ressid,feedback) values ('".$_SESSION['username']."','".$sr['sid']."','2')");
											  	}
											}

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
	     	
	      	<?php include "../pages/footer.php" ?>
	      	
		</div>

	    <script src="../js/jquery.min.js"></script>
	    <script src="../js/popper.min.js"></script>
	    <script src="../js/bootstrap.js"></script>
	    <script src="../js/custom.js"></script> 

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
