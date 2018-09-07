<?php
/*************************************************
* Filename    : compare.php
* Programmer  : Ranggi Rahman
* Date        : 2018 - 9 - 6
* Email       : ranggirahman@gmail.com
* Website     : 1400707.blog.upi.edu
* Deskripsi   : Product Compare Page (Beta)
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

  		<?php $product = $_GET['p']; ?>
  		<?php $product2 = $_GET['p2']; ?>

	    <?php include "../pages/header.php" ?>	    

		<div class="container" style="padding-top: 40px;">
	      	<div class="row">	      		
	      		<?php

					// cpu 1
   					$cpu = mysqli_query($koneksi,"select *from cpu where cpuname='$product'");					
					if(mysqli_num_rows($cpu) != 0){
						$row = mysqli_fetch_array($cpu,MYSQLI_BOTH);
						$vp = mysqli_query($koneksi,"update cpu set cpuview=cpuview+1 where cpuname='$product'");
						$tpd = mysqli_query($koneksi,"select *from product_detail where pdid='".$row['pdid']."'");	
						$pd = mysqli_fetch_array($tpd,MYSQLI_BOTH);
						$view = $row['cpuview'];						 
						echo "<div class='col-md-5'>";
						echo "<div class='card'>";
						echo "<div class='card-body'>";
							echo "<div class='row'>";
								echo "<div class='col-md-10'><h5 class='display-4' style='font-size: 30px;'>".$row['cpuname']." </h5></div>";
								echo "<div class='col-md-2'><img class='float-right'  src='../".$pd['pdimg']."' height='45px' width='45px'></div>";
						    echo "</div>"; 	
						   	echo "<hr>";
						    echo "<div class='row'>";
						    	echo "<div class='col-md-12' style='font-size: 18px;'>Perfomance</div>";
						    echo "</div>";
						    echo "<div class='row'>";
						    	echo "<div class='col-md-12'><div class='progress' style='height: 30px;''><div class='progress-bar' role='progressbar' style='width: ".$row['performance']*10 ."%;' aria-valuenow='".$row['performance']."' aria-valuemin='0' aria-valuemax='10'>".$row['performance']."</div></div></div>";
						    echo "</div>";
						    echo "<br>";
						    echo "<div class='row'>";
						    	echo "<div class='col-md-12' style='font-size: 18px;'>Single-Core Perfomance</div>";
						    echo "</div>";
						    echo "<div class='row'>";		
						    	echo "<div class='col-md-12'><div class='progress' style='height: 30px;''><div class='progress-bar' role='progressbar' style='width: ".$row['single']*10 ."%;' aria-valuenow='".$row['single']."' aria-valuemin='0' aria-valuemax='10'>".$row['single']."</div></div></div>";
						    echo "</div>";
						    echo "<br>";
						    echo "<div class='row'>";
						    	echo "<div class='col-md-12' style='font-size: 18px;'>Integrated Graphic</div>";
						    echo "</div>";
						    echo "<div class='row'>";		
						    	echo "<div class='col-md-12'><div class='progress' style='height: 30px;''><div class='progress-bar' role='progressbar' style='width: ".$row['intg']*10 ."%;' aria-valuenow='".$row['intg']."' aria-valuemin='0' aria-valuemax='10'>".$row['intg']."</div></div></div>";
						    echo "</div>";
						    echo "<br>";
						    echo "<div class='row'>";
						    	echo "<div class='col-md-12' style='font-size: 18px;'>Integrated G. (OpenCL)</div>";
						    echo "</div>";
						    echo "<div class='row'>";	
						    	echo "<div class='col-md-12'><div class='progress' style='height: 30px;''><div class='progress-bar' role='progressbar' style='width: ".$row['intgocl']*10 ."%;' aria-valuenow='".$row['intgocl']."' aria-valuemin='0' aria-valuemax='10'>".$row['intgocl']."</div></div></div>";	
						    echo "</div>";
						    echo "<br>";
						    echo "<div class='row'>";
						    	echo "<div class='col-md-12' style='font-size: 18px;'>Performance Per Watt</div>";
						    echo "</div>";
						    echo "<div class='row'>";						    	
						    	echo "<div class='col-md-12'><div class='progress' style='height: 30px;''><div class='progress-bar' role='progressbar' style='width: ".$row['ppw']*10 ."%;' aria-valuenow='".$row['ppw']."' aria-valuemin='0' aria-valuemax='10'>".$row['ppw']."</div></div></div>";
						    echo "</div>";
						    echo "<br>";
						    echo "<div class='row'>";
						    	echo "<div class='col-md-12' style='font-size: 18px;'>Value (Pay)</div>";
						    echo "</div>";
						    echo "<div class='row'>";
						    	echo "<div class='col-md-12'><div class='progress' style='height: 30px;''><div class='progress-bar' role='progressbar' style='width: ".$row['value']*10 ."%;' aria-valuenow='".$row['value']."' aria-valuemin='0' aria-valuemax='10'>".$row['value']."</div></div></div>";
						    echo "</div>";
						    echo "<br><hr>";
						    echo "<div class='row'>";
						    	echo "<div class='col-md-12' style='font-size: 18px;'>Total Scores</div>";
						    echo "</div>";
						    echo "<div class='row'>";
						    	echo "<div class='col-md-12'><div class='progress' style='height: 30px;''><div class='progress-bar' role='progressbar' style='width: ".$row['cpuscore']*10 ."%;' aria-valuenow='".$row['cpuscore']."' aria-valuemin='0' aria-valuemax='10'>".$row['cpuscore']."</div></div></div>";
						    echo "</div>";
						    echo "<br>";
						echo "</div>";
						echo "<div class='card-footer'>";
							 echo "<div class='row'>";
						    	echo "<div class='col-md-12 text-right'><div class='text-center'><a class='btn btn-sm btn-light' href='".$pd['query']."".$row['cpuname']."' role='button'><span aria-hidden='true'><i class='material-icons' style='font-size: 20px;'>library_books</i></span> View Specifications</a>&nbsp;<a class='btn btn-sm btn-light' href='http://www.google.com/search?q=".$row['cpuname']."' role='button'><span aria-hidden='true'><i class='material-icons' style='font-size: 20px;'>search</i></span>Search in Google</a>&nbsp;<a class='btn btn-sm btn-light' href='".$st['query']."".$row['cpuname']."' role='button'><span aria-hidden='true'><i class='material-icons' style='font-size: 20px;'>shopping_cart</i></span>Buy</a></div></div>";
						    echo "</div>";
						echo "</div>";
						echo "</div>";
						echo "</div>";
					}

					echo "<div class='col-md-2 d-flex align-items-center justify-content-center'><h1 class='display-4 text-muted'>VS</h1></div>";

					// cpu 2
					if($product2 == '0'){
						
					}else{
						$cpu2 = mysqli_query($koneksi,"select *from cpu where cpuname='$product2'");					
						if(mysqli_num_rows($cpu2) != 0){
							$row2 = mysqli_fetch_array($cpu2,MYSQLI_BOTH);
							$vp2 = mysqli_query($koneksi,"update cpu set cpuview=cpuview+1 where cpuname='$product2'");
							$tpd2 = mysqli_query($koneksi,"select *from product_detail where pdid='".$row2['pdid']."'");	
							$pd2 = mysqli_fetch_array($tpd2,MYSQLI_BOTH);
							$view2 = $row2['cpuview'];						 
							echo "<div class='col-md-5'>";
							echo "<div class='card'>";
							echo "<div class='card-body'>";
								echo "<div class='row'>";
									echo "<div class='col-md-10'><h5 class='display-4' style='font-size: 30px;'>".$row2['cpuname']." </h5></div>";
									echo "<div class='col-md-2'><img class='float-right'  src='../".$pd2['pdimg']."' height='45px' width='45px'></div>";
							    echo "</div>"; 	
							   	echo "<hr>";
							    echo "<div class='row'>";
							    	echo "<div class='col-md-12' style='font-size: 18px;'>Perfomance</div>";
							    echo "</div>";
							    echo "<div class='row'>";
							    	echo "<div class='col-md-12'><div class='progress' style='height: 30px;''><div class='progress-bar' role='progressbar' style='width: ".$row2['performance']*10 ."%;' aria-valuenow='".$row2['performance']."' aria-valuemin='0' aria-valuemax='10'>".$row2['performance']."</div></div></div>";
							    echo "</div>";
							    echo "<br>";
							    echo "<div class='row'>";
							    	echo "<div class='col-md-12' style='font-size: 18px;'>Single-Core Perfomance</div>";
							    echo "</div>";
							    echo "<div class='row'>";
							    	echo "<div class='col-md-12'><div class='progress' style='height: 30px;''><div class='progress-bar' role='progressbar' style='width: ".$row2['single']*10 ."%;' aria-valuenow='".$row2['single']."' aria-valuemin='0' aria-valuemax='10'>".$row2['single']."</div></div></div>";
							    echo "</div>";
							    echo "<br>";
							    echo "<div class='row'>";
							    	echo "<div class='col-md-12' style='font-size: 18px;'>Integrated Graphic</div>";
							    echo "</div>";
							    echo "<div class='row'>";		
							    	echo "<div class='col-md-12'><div class='progress' style='height: 30px;''><div class='progress-bar' role='progressbar' style='width: ".$row2['intg']*10 ."%;' aria-valuenow='".$row2['intg']."' aria-valuemin='0' aria-valuemax='10'>".$row2['intg']."</div></div></div>";
							    echo "</div>";
							    echo "<br>";
							    echo "<div class='row'>";
							    	echo "<div class='col-md-12' style='font-size: 18px;'>Integrated G. (OpenCL)</div>";
							    echo "</div>";
							    echo "<div class='row'>";
							    	echo "<div class='col-md-12'><div class='progress' style='height: 30px;''><div class='progress-bar' role='progressbar' style='width: ".$row2['intgocl']*10 ."%;' aria-valuenow='".$row2['intgocl']."' aria-valuemin='0' aria-valuemax='10'>".$row2['intgocl']."</div></div></div>";
							    echo "</div>";
							    echo "<br>";
							    echo "<div class='row'>";
							    	echo "<div class='col-md-12' style='font-size: 18px;'>Performance Per Watt</div>";
							    echo "</div>";
							    echo "<div class='row'>";
							    	echo "<div class='col-md-12'><div class='progress' style='height: 30px;''><div class='progress-bar' role='progressbar' style='width: ".$row2['ppw']*10 ."%;' aria-valuenow='".$row2['ppw']."' aria-valuemin='0' aria-valuemax='10'>".$row2['ppw']."</div></div></div>";
							    echo "</div>";
							    echo "<br>";
							    echo "<div class='row'>";
							    	echo "<div class='col-md-12' style='font-size: 18px;'>Value (Pay)</div>";
							    echo "</div>";
							    echo "<div class='row'>";
							    	echo "<div class='col-md-12'><div class='progress' style='height: 30px;''><div class='progress-bar' role='progressbar' style='width: ".$row2['value']*10 ."%;' aria-valuenow='".$row2['value']."' aria-valuemin='0' aria-valuemax='10'>".$row2['value']."</div></div></div>";
							    echo "</div>";
							    echo "<br><hr>";
							    echo "<div class='row'>";
							    	echo "<div class='col-md-12' style='font-size: 18px;'>Total Scores</div>";
							    echo "</div>";
							    echo "<div class='row'>";
							    	echo "<div class='col-md-12'><div class='progress' style='height: 30px;''><div class='progress-bar' role='progressbar' style='width: ".$row2['cpuscore']*10 ."%;' aria-valuenow='".$row2['cpuscore']."' aria-valuemin='0' aria-valuemax='10'>".$row2['cpuscore']."</div></div></div>";
							    echo "</div>";
							    echo "<br>";
							echo "</div>";
							echo "<div class='card-footer'>";
								 echo "<div class='row'>";
							    	echo "<div class='col-md-12 text-right'><div class='text-center'><a class='btn btn-sm btn-light' href='".$pd2['query']."".$row2['cpuname']."' role='button'><span aria-hidden='true'><i class='material-icons' style='font-size: 20px;'>library_books</i></span> View Specifications</a>&nbsp;<a class='btn btn-sm btn-light' href='http://www.google.com/search?q=".$row2['cpuname']."' role='button'><span aria-hidden='true'><i class='material-icons' style='font-size: 20px;'>search</i></span>Search in Google</a>&nbsp;<a class='btn btn-sm btn-light' href='".$st['query']."".$row2['cpuname']."' role='button'><span aria-hidden='true'><i class='material-icons' style='font-size: 20px;'>shopping_cart</i></span>Buy</a></div></div>";
							    echo "</div>";
							echo "</div>";
							echo "</div>";
							echo "</div>";						
						}
					}
	   				
					

					// vga					
   					$vga = mysqli_query($koneksi,"select *from vga where vganame='$product'");
					if(mysqli_num_rows($vga) != 0 && $found == 0){
						$row = mysqli_fetch_array($vga,MYSQLI_BOTH);
						$vp = mysqli_query($koneksi,"update vga set vgaview=vgaview+1 where vganame='$product'"); 
						$tpd = mysqli_query($koneksi,"select *from product_detail where pdid='".$row['pdid']."'");	
						$pd = mysqli_fetch_array($tpd,MYSQLI_BOTH);
						$view = $row['vgaview'];
						echo "<div class='col-md-9'>";						
						echo "<div class='card'>";
						echo "<div class='card-body'>";
							echo "<div class='row'>";
							echo "<div class='col-md-1'><img src='../img/vga.png' height='55px' width='55px'></div>";
							echo "<div class='col-md-9'><h5 class='display-4' style='font-size: 40px;'>".$row['vganame']."</h5></div>";
							echo "<div class='col-md-2'><img class='float-right' src='../".$pd['pdimg']."' height='55px' width='55px'></div>";
						    echo "</div>"; 	
						   	echo "<hr>";
						    echo "<div class='row'>";
						    	echo "<div class='col-md-4' style='font-size: 18px;'>Gaming</div>";		
						    	echo "<div class='col-md-4' style='font-size: 18px;'>Graphic</div>";		
						    	echo "<div class='col-md-4' style='font-size: 18px;'>Computing</div>";		
						    echo "</div>";
						    echo "<div class='row'>";
						    	echo "<div class='col-md-4'><div class='progress' style='height: 30px;''><div class='progress-bar' role='progressbar' style='width: ".$row['gaming']*10 ."%;' aria-valuenow='".$row['gaming']."' aria-valuemin='0' aria-valuemax='10'>".$row['gaming']."</div></div></div>";
						    	echo "<div class='col-md-4'><div class='progress' style='height: 30px;''><div class='progress-bar' role='progressbar' style='width: ".$row['graphics']*10 ."%;' aria-valuenow='".$row['graphics']."' aria-valuemin='0' aria-valuemax='10'>".$row['graphics']."</div></div></div>";
						    	echo "<div class='col-md-4'><div class='progress' style='height: 30px;''><div class='progress-bar' role='progressbar' style='width: ".$row['computing']*10 ."%;' aria-valuenow='".$row['computing']."' aria-valuemin='0' aria-valuemax='10'>".$row['computing']."</div></div></div>";
						    echo "</div>";
						    echo "<br>";
						    echo "<div class='row'>";
						    	echo "<div class='col-md-4' style='font-size: 18px;'>Performance Per Watt</div>";		
						    	echo "<div class='col-md-4' style='font-size: 18px;'>Value (Pay)</div>";		
						    	echo "<div class='col-md-4' style='font-size: 18px;'>Noise and Power</div>";		
						    echo "</div>";
						    echo "<div class='row'>";
						    	echo "<div class='col-md-4'><div class='progress' style='height: 30px;''><div class='progress-bar' role='progressbar' style='width: ".$row['ppw']*10 ."%;' aria-valuenow='".$row['ppw']."' aria-valuemin='0' aria-valuemax='10'>".$row['ppw']."</div></div></div>";
						    	echo "<div class='col-md-4'><div class='progress' style='height: 30px;''><div class='progress-bar' role='progressbar' style='width: ".$row['value']*10 ."%;' aria-valuenow='".$row['value']."' aria-valuemin='0' aria-valuemax='10'>".$row['value']."</div></div></div>";
						    	echo "<div class='col-md-4'><div class='progress' style='height: 30px;''><div class='progress-bar' role='progressbar' style='width: ".$row['nap']*10 ."%;' aria-valuenow='".$row['nap']."' aria-valuemin='0' aria-valuemax='10'>".$row['nap']."</div></div></div>";
						    echo "</div>";
						    echo "<br><hr>";
						    echo "<div class='row'>";
						    	echo "<div class='col-md-12' style='font-size: 18px;'>Total Scores</div>";
						    echo "</div>";
						    echo "<div class='row'>";
						    	echo "<div class='col-md-12'><div class='progress' style='height: 30px;''><div class='progress-bar' role='progressbar' style='width: ".$row['vgascore']*10 ."%;' aria-valuenow='".$row['vgascore']."' aria-valuemin='0' aria-valuemax='10'>".$row['vgascore']."</div></div></div>";
						    echo "</div>";
						    echo "<br>";
						echo "</div>";
						echo "<div class='card-footer'>";
						echo "<div class='row'>";
					    	echo "<div class='col-md-12 text-right'><div class='pull-right'><a class='btn btn-sm btn-light' href='".$pd['query']."".$row['vganame']."' role='button'><span aria-hidden='true'><i class='material-icons' style='font-size: 20px;'>library_books</i></span> View Specifications</a>&nbsp;<a class='btn btn-sm btn-light' href='http://www.google.com/search?q=".$row['vganame']."' role='button'><span aria-hidden='true'><i class='material-icons' style='font-size: 20px;'>search</i></span>Search in Google</a>&nbsp;<a class='btn btn-sm btn-light' href='".$st['query']."".$row['vganame']."' role='button'><span aria-hidden='true'><i class='material-icons' style='font-size: 20px;'>shopping_cart</i></span>Buy</a></div></div>";
						    echo "</div>";
						echo "</div>";
						echo "</div>";
						echo "</div>";

						// related vga
						echo "<div class='col-md-3'>";
						echo "<div class='card'>";
						echo "<div class='card-header'>";
						echo "<h5 class='display-4' style='margin-bottom:-3px; font-size: 18px;'><i class='material-icons'>info</i> Related Product</h5>";
						echo "</div>";
						echo "<div class='card-body' style='height: 416px;'>";
							$rvga = mysqli_query($koneksi,"select *from vga where vgascore between '".$row['vgascore']."'-1 and '".$row['vgascore']."'+1 and vganame != '".$row['vganame']."' order by vgaprice asc limit 3");

				      		while($key = mysqli_fetch_array($rvga,MYSQLI_BOTH)){
				      			$rtpd = mysqli_query($koneksi,"select *from product_detail where pdid='".$key['pdid']."'");	
								$rpd = mysqli_fetch_array($rtpd,MYSQLI_BOTH);
				      			?>
				      			<div class="card">
									<div class="card-body" style="margin-top: -8px; margin-bottom: -8px;">
										<div class="row">
										<div class="col-md-5">
								<?php
									if( $key['pdid'] == 0){
										echo "<img src='../img/vga.png' height='50px' width='50px'>";
									}else{
										echo "<img src='../".$rpd['pdimg']."' height='50px' width='50px'>";
									}
								?>		
										</div>
										<div style="border-left:1px solid lightgray;height:auto;"></div>		      					
										<div class="col-md-6"><a href="../pages/product.php?p=<?php echo $key['vganame'] ?>" role="button"><?php echo $key['vganame']; ?></a></div>
										</div>
									</div>	      				
								</div>
								<br>		
							<?php
							}
						echo "</div>";
						echo "</div>";
						echo "</div>";
					}

					// ssd					
   					$ssd = mysqli_query($koneksi,"select *from ssd where ssdname='$product'");
   					if(mysqli_num_rows($ssd) != 0 && $found == 0){
  
						$row = mysqli_fetch_array($ssd,MYSQLI_BOTH);
						$vp = mysqli_query($koneksi,"update ssd set ssdview=ssdview+1 where ssdname='$product'"); 
						mysqli_query($koneksi,"select *from ssd where ssdname='$product'");
						$tpd = mysqli_query($koneksi,"select *from product_detail where pdid='".$row['pdid']."'");	
						$pd = mysqli_fetch_array($tpd,MYSQLI_BOTH);
						$view = $row['ssdview'];
						echo "<div class='col-md-9'>";
						echo "<div class='card'>";
						echo "<div class='card-body'>";
							echo "<div class='row'>";
							echo "<div class='col-md-1'><img src='../img/ssd.png' height='55px' width='55px'></div>";
							echo "<div class='col-md-9'><h5 class='display-4' style='font-size: 40px;'>".$row['ssdname']."</h5></div>";
							echo "<div class='col-md-2'><img class='float-right' src='../".$pd['pdimg']."' height='55px' width='55px'></div>";
						    echo "</div>"; 	
						   	echo "<hr>";
						    echo "<div class='row'>";
						    	echo "<div class='col-md-4' style='font-size: 18px;'>Read Perfomance</div>";		
						    	echo "<div class='col-md-4' style='font-size: 18px;'>Write Perfomance</div>";		
						    	echo "<div class='col-md-4' style='font-size: 18px;'>Real World Benchmarks</div>";		
						    echo "</div>";
						    echo "<div class='row'>";
						    	echo "<div class='col-md-4'><div class='progress' style='height: 30px;''><div class='progress-bar' role='progressbar' style='width: ".$row['readp']*10 ."%;' aria-valuenow='".$row['readp']."' aria-valuemin='0' aria-valuemax='10'>".$row['readp']."</div></div></div>";
						    	echo "<div class='col-md-4'><div class='progress' style='height: 30px;''><div class='progress-bar' role='progressbar' style='width: ".$row['writep']*10 ."%;' aria-valuenow='".$row['writep']."' aria-valuemin='0' aria-valuemax='10'>".$row['writep']."</div></div></div>";
						    	echo "<div class='col-md-4'><div class='progress' style='height: 30px;''><div class='progress-bar' role='progressbar' style='width: ".$row['realwb']*10 ."%;' aria-valuenow='".$row['realwb']."' aria-valuemin='0' aria-valuemax='10'>".$row['realwb']."</div></div></div>";
						    echo "</div>";
						    echo "<br>";
						    echo "<div class='row'>";
						    	echo "<div class='col-md-4' style='font-size: 18px;'>Benchmarks</div>";			
						    echo "</div>";
						    echo "<div class='row'>";
						    	echo "<div class='col-md-4'><div class='progress' style='height: 30px;''><div class='progress-bar' role='progressbar' style='width: ".$row['bench']*10 ."%;' aria-valuenow='".$row['bench']."' aria-valuemin='0' aria-valuemax='10'>".$row['bench']."</div></div></div>";
						    echo "</div>";
						    echo "<br><hr>";
						    echo "<div class='row'>";
						    	echo "<div class='col-md-12' style='font-size: 18px;'>Total Scores</div>";
						    echo "</div>";
						    echo "<div class='row'>";
						    	echo "<div class='col-md-12'><div class='progress' style='height: 30px;''><div class='progress-bar' role='progressbar' style='width: ".$row['ssdscore']*10 ."%;' aria-valuenow='".$row['ssdscore']."' aria-valuemin='0' aria-valuemax='10'>".$row['ssdscore']."</div></div></div>";
						    echo "</div>";
						    echo "<br>";
						echo "</div>";
						echo "<div class='card-footer'>";
							 echo "<div class='row'>";
						    	echo "<div class='col-md-12 text-right'><div class='pull-right'><a class='btn btn-sm btn-light' href='".$pd['query']."".$row['ssdname']."' role='button'><span aria-hidden='true'><i class='material-icons' style='font-size: 20px;'>library_books</i></span> View Specifications</a>&nbsp;<a class='btn btn-sm btn-light' href='http://www.google.com/search?q=".$row['ssdname']."' role='button'><span aria-hidden='true'><i class='material-icons' style='font-size: 20px;'>search</i></span>Search in Google</a>&nbsp;<a class='btn btn-sm btn-light' href='".$st['query']."".$row['ssdname']."' role='button'><span aria-hidden='true'><i class='material-icons' style='font-size: 20px;'>shopping_cart</i></span>Buy</a></div></div>";
						    echo "</div>";
						echo "</div>";
						echo "</div>";
						echo "</div>";

						// related ssd
						echo "<div class='col-md-3'>";
						echo "<div class='card'>";
						echo "<div class='card-header'>";
						echo "<h5 class='display-4' style='margin-bottom:-3px; font-size: 18px;'><i class='material-icons'>info</i> Related Product</h5>";
						echo "</div>";
						echo "<div class='card-body' style='height: 416px;'>";
							$rssd = mysqli_query($koneksi,"select *from ssd where ssdscore between '".$row['ssdscore']."'-3 and '".$row['ssdscore']."'+1 and ssdname != '".$row['ssdname']."' order by ssdprice asc limit 3");

				      		while($key = mysqli_fetch_array($rssd,MYSQLI_BOTH)){
				      			$rtpd = mysqli_query($koneksi,"select *from product_detail where pdid='".$key['pdid']."'");	
								$rpd = mysqli_fetch_array($rtpd,MYSQLI_BOTH);
				      			?>
				      			<div class="card">
				      				<div class="card-body" style="margin-top: -8px; margin-bottom: -8px;">
				      					<div class="row">
				      					<div class="col-md-5">
				      			<?php
					      			if( $key['pdid'] == 0){
					      				echo "<img src='../img/ssd.png' height='50px' width='50px'>";
					      			}else{
					      				echo "<img src='../".$rpd['pdimg']."' height='50px' width='50px'>";
					      			}
				      			?>		
				      					</div>
				      					<div style="border-left:1px solid lightgray;height:auto;"></div>		      					
					      				<div class="col-md-6"><a href="../pages/product.php?p=<?php echo $key['ssdname'] ?>" role="button"><?php echo $key['ssdname']; ?></a></div>
				      					</div>
				      				</div>	      				
				      			</div>
				      			<br>		
				      		<?php
				      		}
						echo "</div>";
						echo "</div>";
						echo "</div>";
					}	

				?>       	
	     	</div>

	    

	      	<?php include "../pages/footer.php" ?>
	      	
		</div>

	    <script src="../js/jquery.min.js"></script>
	    <script src="../js/popper.min.js"></script>
	    <script src="../js/bootstrap.js"></script>
	    <script src="../js/custom.js"></script> 


	</body>
</html>

