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

  		<?php 
  			$product = $_GET['p'];
  			$product2 = $_GET['p2'];
  			$s = $_GET['s']; 
  			$s2 = $_GET['s2']; 
  			$st = $_GET['st']; 
  			$st2 = $_GET['st2'];

  			if($s == '0'){
  				$sp = '';
  			}else{
  				$sp = $s;
  			}

  			if($s2 == '0'){
  				$sp2 = '';
  			}else{
  				$sp2 = $s2;
  			}

  		?>


	    <?php include "../pages/header.php" ?>	    

		<div class="container" style="padding-top: 40px;">
	      	<div class="row">	      		
	      		<?php
					// product 1
		      		echo "<div class='col-md-5'>";
						echo "<div class='card'>";
	      			// product 1 search
					if($product == '0'){
							echo "<div class='card-body' style='height:775px;'>";
								echo "<div class='row'>";
									echo "<div class='col-md-12'>";
									echo "<form action='' method='POST'><div class='input-group mb-3'>
									  <input type='text' class='form-control' value='".$sp."' placeholder='Product 1' aria-label='cs' aria-describedby='button-addon2' name='s'>
									  <div class='input-group-append'>
									    <button class='btn' type='submit' id='button-addon2' name='cs'>Search</button>
									  </div>
									</div></form><hr>";
					        		if(isset($_POST['cs'])){
					        			$s = $_POST['s'];
					        			echo "<meta http-equiv='refresh' content='0; url=../pages/compare.php?&p=".$product."&p2=".$product2."&s=".$s."&s2=".$s2."&st=".$st."&st2=".$st2."'/>";
					        		}

					        		if($s != '0'){
					        			echo "<div class='row'>";
					        			echo "<div class='col-md-12' style='overflow-y: scroll; height:670px;'>";

					        			// cpu search
					        			if($st == '0' || $st == '1'){
					        				$result = mysqli_query($koneksi,"select *from cpu where cpuname like'%$s%'");
											while($row = mysqli_fetch_array($result,MYSQLI_BOTH)){
												echo "<div class='row'>"; 
												    	echo "<div class='col-md-1'><img src='../img/processor.png' style='height='34px' width='34px''></div>";	
												    	echo "<div class='col-md-11' style='padding-top: 4px;'><a href='../pages/compare.php?&p=".$row['cpuname']."&p2=".$product2."&s=".$s."&s2=".$s2."&st=1&st2=1'>".$row['cpuname']."</a></div>";
												echo "</div><hr>";						    
											}
										}

										// vga search
										if($st == '0' || $st == '2'){
											$result = mysqli_query($koneksi,"select *from vga where vganame like'%$s%'");
											while($row = mysqli_fetch_array($result,MYSQLI_BOTH)){
												echo "<div class='row'>"; 
												    	echo "<div class='col-md-1'><img src='../img/vga.png' style='height='34px' width='34px''></div>";	
												    	echo "<div class='col-md-11' style='padding-top: 4px;'><a href='../pages/compare.php?&p=".$row['vganame']."&p2=".$product2."&s=".$s."&s2=".$s2."&st=2&st2=2'>".$row['vganame']."</a></div>";
												echo "</div><hr>";						    
											}
										}

										// ssd search
										if($st == '0' || $st == '3'){
											$result = mysqli_query($koneksi,"select *from ssd where ssdname like'%$s%'");
											while($row = mysqli_fetch_array($result,MYSQLI_BOTH)){
												echo "<div class='row'>"; 
												    	echo "<div class='col-md-1'><img src='../img/ssd.png' style='height='34px' width='34px''></div>";	
												    	echo "<div class='col-md-11' style='padding-top: 4px;'><a href='../pages/compare.php?&p=".$row['ssdname']."&p2=".$product2."&s=".$s."&s2=".$s2."&st=3&&st2=3'>".$row['ssdname']."</a></div>";
												echo "</div><hr>";						    
											}
										}
										
										echo "</div>";
										echo "</div>";
					        		}

									echo "</div>";
								echo "</div>";
							echo "</div>";
						echo "</div>";
					echo "</div>";

					// product 1 search found
					}else{
						// cpu 1
						if($st == '1'){
							$cpu = mysqli_query($koneksi,"select *from cpu where cpuname='$product'");					
							if(mysqli_num_rows($cpu) != 0){
								$row = mysqli_fetch_array($cpu,MYSQLI_BOTH);
								$tpd = mysqli_query($koneksi,"select *from product_detail where pdid='".$row['pdid']."'");	
								$pd = mysqli_fetch_array($tpd,MYSQLI_BOTH);
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
							}
						// vga 1
						}else if($st == '2'){
							$vga = mysqli_query($koneksi,"select *from vga where vganame='$product'");					
							if(mysqli_num_rows($vga) != 0){
								$row = mysqli_fetch_array($vga,MYSQLI_BOTH);
								$tpd = mysqli_query($koneksi,"select *from product_detail where pdid='".$row['pdid']."'");	
								$pd = mysqli_fetch_array($tpd,MYSQLI_BOTH);	
								echo "<div class='card-body'>";
									echo "<div class='row'>";
										echo "<div class='col-md-10'><h5 class='display-4' style='font-size: 30px;'>".$row['vganame']." </h5></div>";
										echo "<div class='col-md-2'><img class='float-right'  src='../".$pd['pdimg']."' height='45px' width='45px'></div>";
								    echo "</div>"; 	
								   	echo "<hr>";
								    echo "<div class='row'>";
								    	echo "<div class='col-md-12' style='font-size: 18px;'>Gaming</div>";
								    echo "</div>";
								    echo "<div class='row'>";
								    	echo "<div class='col-md-12'><div class='progress' style='height: 30px;''><div class='progress-bar' role='progressbar' style='width: ".$row['gaming']*10 ."%;' aria-valuenow='".$row['gaming']."' aria-valuemin='0' aria-valuemax='10'>".$row['gaming']."</div></div></div>";
								    echo "</div>";
								    echo "<br>";
								    echo "<div class='row'>";
								    	echo "<div class='col-md-12' style='font-size: 18px;'>Graphic</div>";
								    echo "</div>";
								    echo "<div class='row'>";		
								    	echo "<div class='col-md-12'><div class='progress' style='height: 30px;''><div class='progress-bar' role='progressbar' style='width: ".$row['graphics']*10 ."%;' aria-valuenow='".$row['graphics']."' aria-valuemin='0' aria-valuemax='10'>".$row['graphics']."</div></div></div>";
								    echo "</div>";
								    echo "<br>";
								    echo "<div class='row'>";
								    	echo "<div class='col-md-12' style='font-size: 18px;'>Computing</div>";
								    echo "</div>";
								    echo "<div class='row'>";		
								    	echo "<div class='col-md-12'><div class='progress' style='height: 30px;''><div class='progress-bar' role='progressbar' style='width: ".$row['computing']*10 ."%;' aria-valuenow='".$row['computing']."' aria-valuemin='0' aria-valuemax='10'>".$row['computing']."</div></div></div>";
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
								    echo "<br>";
								    echo "<div class='row'>";
								    	echo "<div class='col-md-12' style='font-size: 18px;'>Noise and Power</div>";
								    echo "</div>";
								    echo "<div class='row'>";
								    	echo "<div class='col-md-12'><div class='progress' style='height: 30px;''><div class='progress-bar' role='progressbar' style='width: ".$row['nap']*10 ."%;' aria-valuenow='".$row['nap']."' aria-valuemin='0' aria-valuemax='10'>".$row['nap']."</div></div></div>";
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
							}
						// ssd 1
						}else if($st == '3'){
							$ssd = mysqli_query($koneksi,"select *from ssd where ssdname='$product'");					
							if(mysqli_num_rows($ssd) != 0){
								$row = mysqli_fetch_array($ssd,MYSQLI_BOTH);
								$tpd = mysqli_query($koneksi,"select *from product_detail where pdid='".$row['pdid']."'");	
								$pd = mysqli_fetch_array($tpd,MYSQLI_BOTH);
								echo "<div class='card-body'>";
									echo "<div class='row'>";
										echo "<div class='col-md-10'><h5 class='display-4' style='font-size: 30px;'>".$row['ssdname']." </h5></div>";
										echo "<div class='col-md-2'><img class='float-right'  src='../".$pd['pdimg']."' height='45px' width='45px'></div>";
								    echo "</div>"; 	
								   	echo "<hr>";
								    echo "<div class='row'>";
								    	echo "<div class='col-md-12' style='font-size: 18px;'>Read Performance</div>";
								    echo "</div>";
								    echo "<div class='row'>";
								    	echo "<div class='col-md-12'><div class='progress' style='height: 30px;''><div class='progress-bar' role='progressbar' style='width: ".$row['readp']*10 ."%;' aria-valuenow='".$row['readp']."' aria-valuemin='0' aria-valuemax='10'>".$row['readp']."</div></div></div>";
								    echo "</div>";
								    echo "<br>";
								    echo "<div class='row'>";
								    	echo "<div class='col-md-12' style='font-size: 18px;'>Write Performance</div>";
								    echo "</div>";
								    echo "<div class='row'>";		
								    	echo "<div class='col-md-12'><div class='progress' style='height: 30px;''><div class='progress-bar' role='progressbar' style='width: ".$row['writep']*10 ."%;' aria-valuenow='".$row['writep']."' aria-valuemin='0' aria-valuemax='10'>".$row['realwb']."</div></div></div>";
								    echo "</div>";
								    echo "<br>";
								    echo "<div class='row'>";
								    	echo "<div class='col-md-12' style='font-size: 18px;'>Real World Benchmarks</div>";
								    echo "</div>";
								    echo "<div class='row'>";		
								    	echo "<div class='col-md-12'><div class='progress' style='height: 30px;''><div class='progress-bar' role='progressbar' style='width: ".$row['realwb']*10 ."%;' aria-valuenow='".$row['realwb']."' aria-valuemin='0' aria-valuemax='10'>".$row['realwb']."</div></div></div>";
								    echo "</div>";
								    echo "<br>";
								    echo "<div class='row'>";
								    	echo "<div class='col-md-12' style='font-size: 18px;'>Benchmarks</div>";
								    echo "</div>";
								    echo "<div class='row'>";	
								    	echo "<div class='col-md-12'><div class='progress' style='height: 30px;''><div class='progress-bar' role='progressbar' style='width: ".$row['bench']*10 ."%;' aria-valuenow='".$row['bench']."' aria-valuemin='0' aria-valuemax='10'>".$row['bench']."</div></div></div>";	
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
							}
						}
						echo "<div class='card-footer'>";
							echo "<div class='row'>";
						    	echo "<div class='col-md-12 text-center'><a class='btn btn-sm btn-light' href='../pages/product.php?&p=".$product."' role='button'><span aria-hidden='true'><i class='material-icons' style='font-size: 20px;'>pageview</i></span> View Product</a><a class='btn btn-sm btn-light' href='../pages/compare.php?&p=0&p2=".$product2."&s=0&s2=".$s2."&st=0&st2=".$st2."' role='button'><span aria-hidden='true'><i class='material-icons' style='font-size: 20px;'>autorenew</i></span> Compare Another Product</a></div>";
						    echo "</div>";
						echo "</div>";
						echo "</div>";
						echo "</div>";
	   					
					}

					echo "<div class='col-md-2 d-flex align-items-center justify-content-center'><h1 class='text-muted'><i class='material-icons' style='font-size:60px;'>compare_arrows</i></h1></div>";

					// product 2
					echo "<div class='col-md-5'>";
						echo "<div class='card'>";

					// product 2 search 
					if($product2 == '0'){
							echo "<div class='card-body' style='height:775px;'>";
								echo "<div class='row'>";
									echo "<div class='col-md-12'>";
									echo "<form action='' method='POST'><div class='input-group mb-3'>
									  <input type='text' class='form-control' value='".$sp2."' placeholder='Product 2' aria-label='cs2' aria-describedby='button-addon2' name='s2'>
									  <div class='input-group-append'>
									    <button class='btn' type='submit' id='button-addon2' name='cs2'>Search</button>
									  </div>
									</div></form><hr>";
					        		if(isset($_POST['cs2'])){
					        			$s2 = $_POST['s2'];
					        			echo "<meta http-equiv='refresh' content='0; url=../pages/compare.php?&p=".$product."&p2=".$product2."&s=".$s."&s2=".$s2."&st=".$st."&st2=".$st2."'/>";
					        		}

					        		if($s2 != '0'){
					        			echo "<div class='row'>";
					        			echo "<div class='col-md-12' style='overflow-y: scroll; height:670px;'>";

					        			// cpu search
					        			if($st2 == '0' || $st2 == '1'){
					        				$result = mysqli_query($koneksi,"select *from cpu where cpuname like'%$s2%'");
											while($row = mysqli_fetch_array($result,MYSQLI_BOTH)){
												echo "<div class='row'>"; 
												    	echo "<div class='col-md-1'><img src='../img/processor.png' style='height='34px' width='34px''></div>";	
												    	echo "<div class='col-md-11' style='padding-top: 4px;'><a href='../pages/compare.php?&p=".$product."&p2=".$row['cpuname']."&s=".$s."&s2=".$s2."&st=1&st2=1'>".$row['cpuname']."</a></div>";
												echo "</div><hr>";						    
											}
										}

										// vga search
										if($st2 == '0' || $st2 == '2'){
											$result = mysqli_query($koneksi,"select *from vga where vganame like'%$s2%'");
											while($row = mysqli_fetch_array($result,MYSQLI_BOTH)){
												echo "<div class='row'>"; 
												    	echo "<div class='col-md-1'><img src='../img/vga.png' style='height='34px' width='34px''></div>";	
												    	echo "<div class='col-md-11' style='padding-top: 4px;'><a href='../pages/compare.php?&p=".$product."&p2=".$row['vganame']."&s=".$s."&s2=".$s2."&st=2&st2=2'>".$row['vganame']."</a></div>";
												echo "</div><hr>";						    
											}
										}

										// ssd search
										if($st2 == '0' || $st2 == '3'){
											$result = mysqli_query($koneksi,"select *from ssd where ssdname like'%$s2%'");
											while($row = mysqli_fetch_array($result,MYSQLI_BOTH)){
												echo "<div class='row'>"; 
												    	echo "<div class='col-md-1'><img src='../img/ssd.png' style='height='34px' width='34px''></div>";	
												    	echo "<div class='col-md-11' style='padding-top: 4px;'><a href='../pages/compare.php?&p=".$product."&p2=".$row['ssdname']."&s=".$s."&s2=".$s2."&st=3&&st2=3'>".$row['ssdname']."</a></div>";
												echo "</div><hr>";						    
											}
										}

										echo "</div>";
										echo "</div>";
					        		}

									echo "</div>";
								echo "</div>";
							echo "</div>";
						echo "</div>";
					echo "</div>";

					// product 2 search found
					}else{
						// cpu 2
						if($st2 == '1'){
							$cpu2 = mysqli_query($koneksi,"select *from cpu where cpuname='$product2'");					
							if(mysqli_num_rows($cpu2) != 0){
								$row2 = mysqli_fetch_array($cpu2,MYSQLI_BOTH);
								$tpd2 = mysqli_query($koneksi,"select *from product_detail where pdid='".$row2['pdid']."'");	
								$pd2 = mysqli_fetch_array($tpd2,MYSQLI_BOTH);
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
							}
						// vga 2
						}else if($st2 == '2'){
							$vga2 = mysqli_query($koneksi,"select *from vga where vganame='$product2'");					
							if(mysqli_num_rows($vga) != 0){
								$row2 = mysqli_fetch_array($vga2,MYSQLI_BOTH);
								$tpd2 = mysqli_query($koneksi,"select *from product_detail where pdid='".$row2['pdid']."'");	
								$pd2 = mysqli_fetch_array($tpd2,MYSQLI_BOTH);
								echo "<div class='card-body'>";
									echo "<div class='row'>";
										echo "<div class='col-md-10'><h5 class='display-4' style='font-size: 30px;'>".$row2['vganame']." </h5></div>";
										echo "<div class='col-md-2'><img class='float-right'  src='../".$pd2['pdimg']."' height='45px' width='45px'></div>";
								    echo "</div>"; 	
								   	echo "<hr>";
								    echo "<div class='row'>";
								    	echo "<div class='col-md-12' style='font-size: 18px;'>Gaming</div>";
								    echo "</div>";
								    echo "<div class='row'>";
								    	echo "<div class='col-md-12'><div class='progress' style='height: 30px;''><div class='progress-bar' role='progressbar' style='width: ".$row2['gaming']*10 ."%;' aria-valuenow='".$row2['gaming']."' aria-valuemin='0' aria-valuemax='10'>".$row2['gaming']."</div></div></div>";
								    echo "</div>";
								    echo "<br>";
								    echo "<div class='row'>";
								    	echo "<div class='col-md-12' style='font-size: 18px;'>Graphic</div>";
								    echo "</div>";
								    echo "<div class='row'>";		
								    	echo "<div class='col-md-12'><div class='progress' style='height: 30px;''><div class='progress-bar' role='progressbar' style='width: ".$row2['graphics']*10 ."%;' aria-valuenow='".$row2['graphics']."' aria-valuemin='0' aria-valuemax='10'>".$row2['graphics']."</div></div></div>";
								    echo "</div>";
								    echo "<br>";
								    echo "<div class='row'>";
								    	echo "<div class='col-md-12' style='font-size: 18px;'>Computing</div>";
								    echo "</div>";
								    echo "<div class='row'>";		
								    	echo "<div class='col-md-12'><div class='progress' style='height: 30px;''><div class='progress-bar' role='progressbar' style='width: ".$row2['computing']*10 ."%;' aria-valuenow='".$row2['computing']."' aria-valuemin='0' aria-valuemax='10'>".$row2['computing']."</div></div></div>";
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
								    echo "<br>";
								    echo "<div class='row'>";
								    	echo "<div class='col-md-12' style='font-size: 18px;'>Noise and Power</div>";
								    echo "</div>";
								    echo "<div class='row'>";
								    	echo "<div class='col-md-12'><div class='progress' style='height: 30px;''><div class='progress-bar' role='progressbar' style='width: ".$row2['nap']*10 ."%;' aria-valuenow='".$row2['nap']."' aria-valuemin='0' aria-valuemax='10'>".$row2['nap']."</div></div></div>";
								    echo "</div>";
								    echo "<br><hr>";
								    echo "<div class='row'>";
								    	echo "<div class='col-md-12' style='font-size: 18px;'>Total Scores</div>";
								    echo "</div>";
								    echo "<div class='row'>";
								    	echo "<div class='col-md-12'><div class='progress' style='height: 30px;''><div class='progress-bar' role='progressbar' style='width: ".$row2['vgascore']*10 ."%;' aria-valuenow='".$row2['vgascore']."' aria-valuemin='0' aria-valuemax='10'>".$row2['vgascore']."</div></div></div>";
								    echo "</div>";
								    echo "<br>";
								echo "</div>";								
							}
						// ssd 2
						}else if($st2 == '3'){
							$ssd2 = mysqli_query($koneksi,"select *from ssd where ssdname='$product2'");					
							if(mysqli_num_rows($ssd2) != 0){
								$row2 = mysqli_fetch_array($ssd2,MYSQLI_BOTH);
								$tpd2 = mysqli_query($koneksi,"select *from product_detail where pdid='".$row2['pdid']."'");	
								$pd2 = mysqli_fetch_array($tpd2,MYSQLI_BOTH);
								echo "<div class='card-body'>";
									echo "<div class='row'>";
										echo "<div class='col-md-10'><h5 class='display-4' style='font-size: 30px;'>".$row2['ssdname']." </h5></div>";
										echo "<div class='col-md-2'><img class='float-right'  src='../".$pd2['pdimg']."' height='45px' width='45px'></div>";
								    echo "</div>"; 	
								   	echo "<hr>";
								    echo "<div class='row'>";
								    	echo "<div class='col-md-12' style='font-size: 18px;'>Read Performance</div>";
								    echo "</div>";
								    echo "<div class='row'>";
								    	echo "<div class='col-md-12'><div class='progress' style='height: 30px;''><div class='progress-bar' role='progressbar' style='width: ".$row2['readp']*10 ."%;' aria-valuenow='".$row2['readp']."' aria-valuemin='0' aria-valuemax='10'>".$row2['readp']."</div></div></div>";
								    echo "</div>";
								    echo "<br>";
								    echo "<div class='row'>";
								    	echo "<div class='col-md-12' style='font-size: 18px;'>Write Performance</div>";
								    echo "</div>";
								    echo "<div class='row'>";		
								    	echo "<div class='col-md-12'><div class='progress' style='height: 30px;''><div class='progress-bar' role='progressbar' style='width: ".$row2['writep']*10 ."%;' aria-valuenow='".$row2['writep']."' aria-valuemin='0' aria-valuemax='10'>".$row2['realwb']."</div></div></div>";
								    echo "</div>";
								    echo "<br>";
								    echo "<div class='row'>";
								    	echo "<div class='col-md-12' style='font-size: 18px;'>Real World Benchmarks</div>";
								    echo "</div>";
								    echo "<div class='row'>";		
								    	echo "<div class='col-md-12'><div class='progress' style='height: 30px;''><div class='progress-bar' role='progressbar' style='width: ".$row2['realwb']*10 ."%;' aria-valuenow='".$row2['realwb']."' aria-valuemin='0' aria-valuemax='10'>".$row2['realwb']."</div></div></div>";
								    echo "</div>";
								    echo "<br>";
								    echo "<div class='row'>";
								    	echo "<div class='col-md-12' style='font-size: 18px;'>Benchmarks</div>";
								    echo "</div>";
								    echo "<div class='row'>";	
								    	echo "<div class='col-md-12'><div class='progress' style='height: 30px;''><div class='progress-bar' role='progressbar' style='width: ".$row2['bench']*10 ."%;' aria-valuenow='".$row2['bench']."' aria-valuemin='0' aria-valuemax='10'>".$row2['bench']."</div></div></div>";	
								    echo "</div>";								    
								    echo "<br><hr>";
								    echo "<div class='row'>";
								    	echo "<div class='col-md-12' style='font-size: 18px;'>Total Scores</div>";
								    echo "</div>";
								    echo "<div class='row'>";
								    	echo "<div class='col-md-12'><div class='progress' style='height: 30px;''><div class='progress-bar' role='progressbar' style='width: ".$row2['ssdscore']*10 ."%;' aria-valuenow='".$row2['ssdscore']."' aria-valuemin='0' aria-valuemax='10'>".$row2['ssdscore']."</div></div></div>";
								    echo "</div>";
								    echo "<br>";
								echo "</div>";								
							}
						}
						echo "<div class='card-footer'>";
							echo "<div class='row'>";
						    	echo "<div class='col-md-12 text-center'><a class='btn btn-sm btn-light' href='../pages/product.php?&p=".$product2."' role='button'><span aria-hidden='true'><i class='material-icons' style='font-size: 20px;'>pageview</i></span> View Product</a><a class='btn btn-sm btn-light' href='../pages/compare.php?&p=".$product."&p2=0&s=".$s."&s2=0&st=".$st."&st2=0' role='button'><span aria-hidden='true'><i class='material-icons' style='font-size: 20px;'>autorenew</i></span> Compare Another Product</a></div>";
						    echo "</div>";
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

