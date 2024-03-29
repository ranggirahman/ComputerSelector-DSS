<?php
/*************************************************
* Filename    : index.php
* Programmer  : Ranggi Rahman
* Date        : 2017 - 12 - 20
* Email       : ranggirahman@gmail.com
* Website     : 1400707.blog.upi.edu
* Deskripsi   : Home Page
*
**************************************************/

 	session_start();
	if( $_SESSION['islogin'] != 1){
		header("Location: pages/login.php");
	}else if(isset($_GET['logout'])){
		if($_GET['logout'] == 1){
		    session_unset();
		    session_destroy();
		    header("Location: pages/login.php");
		}
  	}

  	include "db/connection.php";

  	$result = mysqli_query($koneksi,"select *from user where username='".$_SESSION['username']."'");
	$us = mysqli_fetch_array($result);
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

  		<?php include "pages/header.php" ?>
	    
	    <div class="jumbotron">
	    	<div class="container">	    	
			   	<div class="row">
			   		<div class="col-md-2">
			   			<img src="img/desktop.png" style="padding-top: 18px; max-width: 115%; and height: auto">
			   		</div>
		          	<div class="col-md-10">
		            	<h1 class="display-4" style="padding-left: 50px;">Choice of Computer Hardware Specifications</h1>
		            </div>
		      	</div>
		      	<hr>
		      	<div class="row">
		      		<div class="col-md-2">
						<a class="btn btn-primary" href="pages/selector.php" role="button" style="width: 185px; margin-top: 8px;"><i class="material-icons" style="font-size: 50px;">touch_app</i><hr style="border-color: white; margin-bottom: 3px;"> Pick Your Computer</a>
					</div>
		      		<div class="col-md-10" style="padding-left: 70px;">
		      			<p class="lead" align="justify">Sistem pendukung keputusan untuk membantu pengguna melakukan pemilihan spesifikasi hardware komputer dengan metode Utility Additive (UTA) yang digunakan untuk menentukan setiap perangkat khususnya seperti processor, vga, storage dan perangkat pendukung lainnya agar sesuai dengan kebutuhan sehingga keputusan yang diambil pengguna akan tepat.</p>
		      		</div> 
		      	</div>
	    	</div>
		</div>

		<div class="container">
	      	<div class="row">
	        	<div class="col-md-3">
	        		<div class="card">					  	
						<div class="card-body">
							<img src="img/processor.png" style="width: 100px">
							<hr>
							<h5 class="card-title display-4" style="font-size: 22px;">Processor</h5>
						   	<p class="card-text">Fungsi utama dari CPU adalah melakukan operasi aritmetika dan logika terhadap data yang diambil dari memori atau dari informasi yang dimasukkan</p>
						   	<div class="btn btn-primary" data-toggle="modal" data-target="#processormodal"><i class="material-icons" style="font-size: 20px;">format_list_bulleted</i> Processor List</div>
						 </div>
					</div>
	        	</div>
	        	<div class="col-md-3">
	        		<div class="card">					  	
						<div class="card-body">
							<img src="img/vga.png" style="width: 100px">
							<hr>
							<h5 class="card-title display-4" style="font-size: 22px;">Video Graphic Array</h5>
						   	<p class="card-text">Kartu VGA berguna untuk menerjemahkan keluaran komputer ke monitor. Untuk menggambar / design graphic ataupun untuk bermain game</p>
						   	<div class="btn btn-primary" data-toggle="modal" data-target="#vgamodal"><i class="material-icons" style="font-size: 20px;">format_list_bulleted</i> VGA List</div>
						 </div>
					</div>
	        	</div>
	        	<div class="col-md-3">
	        		<div class="card">					  	
						<div class="card-body">
							<img src="img/ssd.png" style="width: 100px">
							<hr>
							<h5 class="card-title display-4" style="font-size: 22px;">Solid State Disk</h5>
						   	<p class="card-text">Komponen perangkat keras yang menyimpan data sekunder. Menggunakan menggunakan nonvolatile memory tidak seperti hardisk konvensional</p>
						   	<div href="" class="btn btn-primary" data-toggle="modal" data-target="#ssdmodal"><i class="material-icons" style="font-size: 20px;">format_list_bulleted</i> SSD List</div>
						 </div>
					</div>
	        	</div>
	        	<div class="col-md-3">
	        		<div class="card" style="height: 410px;">					  	
						<div class="card-body">
							<img src="img/ram.png" style="width: 100px">
							<hr>
							<h5 class="card-title display-4" style="font-size: 22px;">RAM</h5>
						   	<p class="card-text">Random Access Memory (RAM) yaitu suatu memori tempat penyimpanan data sementara, ketika saat komputer dijalankan dan diakses secara acak</p>						   	
						 </div>
					</div>
	        	</div>
	     	</div>
	     	<br>
	     	<div class="row">	    		
	    		<div class="col-md-3">
	    			<div class="card">
 					 	<div class="card-body">   
			    			<div class="row">
			    				<div class="col-md-12">
			    					<div class="display-4" style="font-size: 20px;"><i class="material-icons" style="color: grey; font-size: 30px;">trending_up</i> Processor Trends</div>	
			    					<hr>   					
		    						<table class="table table-sm table-hover borderless">
		    							<?php
							    			$cpu = mysqli_query($koneksi,"select *from cpu order by cpuview desc limit 5");
								      		$i = 0;

								      		while($key = mysqli_fetch_array($cpu,MYSQLI_BOTH)){
								      			$i++;
								      			?>
								      			<tr>
								      				<td><?php echo $i; ?></td>
								      				<td><a class="text-truncate" href="pages/product.php?p=<?php echo $key['cpuname'] ?>" role="button"><?php echo $key['cpuname']; ?></a></td>
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
	    		<div class="col-md-3">
	    			<div class="card">
 					 	<div class="card-body">   
			    			<div class="row">
			    				<div class="col-md-12">
			    					<div class="display-4" style="font-size: 20px;"><i class="material-icons" style="color: grey; font-size: 30px;">trending_up</i> VGA Trends</div>
			    					<hr>				
		    						<table class="table table-sm table-hover borderless">
		    							<?php
							    			$vga = mysqli_query($koneksi,"select *from vga order by vgaview desc limit 5");
								      		$i = 0;

								      		while($key = mysqli_fetch_array($vga,MYSQLI_BOTH)){
								      			$i++;
								      			?>
								      			<tr>
								      				<td><?php echo $i; ?></td>
								      				<td><a class="text-truncate" href="pages/product.php?p=<?php echo $key['vganame'] ?>" role="button"><span aria-hidden="true"><?php echo $key['vganame']; ?></span></td>
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
	    		<div class="col-md-3">
	    			<div class="card">
 					 	<div class="card-body">   
			    			<div class="row">
			    				<div class="col-md-12">
			    					<div class="display-4" style="font-size: 20px;"><i class="material-icons" style="color: grey; font-size: 30px;">trending_up</i> SSD Trends</div>
			    					<hr>			    					
		    						<table class="table table-sm table-hover borderless">
		    							<?php
							    			$ssd = mysqli_query($koneksi,"select *from ssd order by ssdview desc limit 5");
								      		$i = 0;

								      		while($key = mysqli_fetch_array($ssd,MYSQLI_BOTH)){
								      			$i++;
								      			?>
								      			<tr>
								      				<td><?php echo $i; ?></td>
								      				<td><a class="text-truncate" href="pages/product.php?p=<?php echo $key['ssdname'] ?>" role="button"><?php echo $key['ssdname']; ?></a></td>
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
	    		<div class="col-md-3">
	    			<div class="card" style="height: 280px;">
 					 	<div class="card-body text-center">
 					 		<div class="display-4" style="font-size: 20px; padding-bottom: 4px;">Product Compare </div>
 					 		<hr>
 					 		<form action='' method='POST'>   
			    			<div class="row">
			    				<div class="col-md-12">
		    						<input type='text' class='form-control' placeholder='Product 1' name='s' required>
		    					</div>
		    				</div>
		    				<div class="row">
		    					<div class="col-md-12 text-center">
		    						<i class="material-icons text-muted" style="font-size: 30px; padding-top: 5px; padding-bottom: 5px; ">compare_arrows</i>
		    					</div>
		    				</div>
		    				<div class="row">
		    					<div class="col-md-12">	
		    						<input type='text' class='form-control' placeholder='Product 2' name='s2' required>	
			    				</div>
			    			</div>			    			
			    		</div>
			    		<div class="card-footer text-center">
			    			<button class='btn btn-success' type='submit' name='cs'><i class="material-icons">flip</i> Compare</button>
			    		</div>
			    		</form>
			    	</div>
	    		</div>
	    		<?php 
		    		if(isset($_POST['cs'])){
						$s = $_POST['s'];
						$s2 = $_POST['s2'];
						echo "<meta http-equiv='refresh' content='0; url=pages/compare.php?&p=0&p2=0&s=".$s."&s2=".$s2."&st=0&st2=0'/>";
					}
				?>
	    	</div>

	      	<?php include "pages/footer.php" ?>
	      	
		</div>

	   	<!-- Processor Modal -->
	    <div class="modal fade" id="processormodal" tabindex="-1" role="dialog" aria-hidden="true">
		  	<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
		    	<div class="modal-content">
		      		<div class="modal-header">

		      			<?php 
		      				$cpu = mysqli_query($koneksi,"select *from cpu");
		      				$rcpu = mysqli_num_rows($cpu);
						?>		

		        		<img src="img/processor.png" style="max-width: 2%; and height: auto"><h5 class="modal-title" id="exampleModalLongTitle">&nbsp; Processor List (<?php echo $rcpu; ?> Product)</h5>
		        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          			<span aria-hidden="true">&times;</span>
		        		</button>
		      		</div>
			      	<div class="modal-body">
			        	<table class="table table-sm table-hover table-bordered">
			        		<thead class="thead-light">
				      			<tr>
				      				<th class="table-center font-weight-normal text-muted">No</th>
				      				<th class="table-center font-weight-normal text-muted" width="15%">Processor Name</th>
				      				<th class="table-center font-weight-normal text-muted">Performance<a class="text-muted cursor-pointer ml-2" tabindex="0" data-container="body" data-toggle="popover" data-trigger="focus" title="Benchmark Performance Using All Cores" data-placement="bottom" data-content="PCMark Accelerated, PassMark, Geekbench Multi-Core"><i class="material-icons">info</i></a></th>
				      				<th class="table-center font-weight-normal text-muted">Single-Core<a class="text-muted cursor-pointer ml-2" tabindex="0"data-container="body" data-toggle="popover" data-trigger="focus" title="Individual Core Benchmark Performance" data-placement="bottom" data-content="PassMark Single-Core, Geekbench Single-Core, AES Single-Core"><i class="material-icons">info</i></a></th>
				      				<th class="table-center font-weight-normal text-muted">Graphics<a class="text-muted cursor-pointer ml-2" tabindex="0"data-container="body" data-toggle="popover" data-trigger="focus" title="Integrated GPU Performance for Graphics" data-placement="bottom" data-content="Sky Driver, Cloud Gate"><i class="material-icons">info</i></a></th>
				      				<th class="table-center font-weight-normal text-muted">G. OpenCL<a class="text-muted cursor-pointer ml-2" tabindex="0"data-container="body" data-toggle="popover" data-trigger="focus" title="Integrated GPU Performance for Parallel Computing" data-placement="bottom" data-content="Bitcoin Minning, Face Detection, Ocean Simulation, CompuBench T-Rex, Video Composition"><i class="material-icons">info</i></a></th>
				      				<th class="table-center font-weight-normal text-muted">Perf / Watt<a class="text-muted cursor-pointer ml-2" tabindex="0"data-container="body" data-toggle="popover" data-trigger="focus" title="Performance Per Watt" data-placement="bottom" data-content="Sky Driver, Cloud Gate, CompuBench, PCMark, PassMark, Geekbench, TDP"><i class="material-icons">info</i></a></th>
				      				<th class="table-center font-weight-normal text-muted">Value (Pay)<a class="text-muted cursor-pointer ml-2" tabindex="0"data-container="body" data-toggle="popover" data-trigger="focus" title="Paying for Performance" data-placement="bottom" data-content="Sky Driver, Cloud Gate, CompuBench, PCMark, PassMark, Geekbench, TDP"><i class="material-icons">info</i></a></th>
				      				<th class="table-center text-muted">Total Score<a class="text-muted cursor-pointer ml-2" tabindex="0"data-container="body" data-toggle="popover" data-trigger="focus" title="Combination of All Six Facets" data-placement="bottom" data-content="Performance, Single-Core Performance, Integrated Graphics, Performance Per Watt, Value"><i class="material-icons">info</i></a></th>
				      			</tr>
			      			</thead>
			      			<?php			      							      				
								$i = 0;
			      				if($cpu == TRUE){
									while($key = mysqli_fetch_array($cpu,MYSQLI_BOTH)){
										$i++;										
										?>
										<tr>
											<td class="align-middle table-center" width="50px"><?php echo $i ?></td>
						      				<td class="align-middle"><a href="pages/product.php?p=<?php echo $key['cpuname'] ?>" role="button"><?php echo $key['cpuname'] ?></a></td>
						      				<td class="table-center">
						      					<div class="progress" style="height: 33px;">
											  		<div class="progress-bar" role="progressbar" style="width: <?php echo $key['performance']*10 ?>%;" aria-valuenow="<?php echo $key['performance'] ?>" aria-valuemin="0" aria-valuemax="10"><?php echo $key['performance'] ?></div>
												</div>
											</td>
											<td class="table-center">
						      					<div class="progress" style="height: 33px;">
											  		<div class="progress-bar" role="progressbar" style="width: <?php echo $key['single']*10 ?>%;" aria-valuenow="<?php echo $key['single'] ?>" aria-valuemin="0" aria-valuemax="10"><?php echo $key['single'] ?></div>
												</div>
											</td>
											<td class="table-center">
						      					<div class="progress" style="height: 33px;">
											  		<div class="progress-bar" role="progressbar" style="width: <?php echo $key['intg']*10 ?>%;" aria-valuenow="<?php echo $key['intg'] ?>" aria-valuemin="0" aria-valuemax="10"><?php echo $key['intg'] ?></div>
												</div>
											</td>
											<td class="table-center">
						      					<div class="progress" style="height: 33px;">
											  		<div class="progress-bar" role="progressbar" style="width: <?php echo $key['intgocl']*10 ?>%;" aria-valuenow="<?php echo $key['intgocl'] ?>" aria-valuemin="0" aria-valuemax="10"><?php echo $key['intgocl'] ?></div>
												</div>
											</td>
											<td class="table-center">
						      					<div class="progress" style="height: 33px;">
											  		<div class="progress-bar" role="progressbar" style="width: <?php echo $key['ppw']*10 ?>%;" aria-valuenow="<?php echo $key['ppw'] ?>" aria-valuemin="0" aria-valuemax="10"><?php echo $key['ppw'] ?></div>
												</div>
											</td>
						      				<td class="table-center">
						      					<div class="progress" style="height: 33px;">
											  		<div class="progress-bar" role="progressbar" style="width: <?php echo $key['value']*10 ?>%;" aria-valuenow="<?php echo $key['value'] ?>" aria-valuemin="0" aria-valuemax="10"><?php echo $key['value'] ?></div>
												</div>
											</td>
											<td class="table-center">
						      					<div class="progress" style="height: 33px;">
											  		<div class="progress-bar" role="progressbar" style="width: <?php echo $key['cpuscore']*10 ?>%;" aria-valuenow="<?php echo $key['cpuscore'] ?>" aria-valuemin="0" aria-valuemax="10"><?php echo $key['cpuscore'] ?></div>
												</div>
											</td>
						      			</tr>
						      			<?php
									}
								}
			      			?>
			      		</table>
			      	</div>
		    	</div>
		  	</div>
		</div>  

		<!-- VGA Modal -->
	    <div class="modal fade" id="vgamodal" tabindex="-1" role="dialog" aria-hidden="true">
		  	<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
		    	<div class="modal-content">
		      		<div class="modal-header">

		      			<?php 
		      				$vga = mysqli_query($koneksi,"select *from vga");
		      				$rvga = mysqli_num_rows($vga);
						?>		      			

		        		<img src="img/vga.png" style="max-width: 2%; and height: auto"><h5 class="modal-title" id="exampleModalLongTitle">&nbsp; Video Graphic Array List (<?php echo $rvga; ?> Product)</h5>
		        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          			<span aria-hidden="true">&times;</span>
		        		</button>
		      		</div>
			      	<div class="modal-body">
			        	<table class="table table-sm table-hover table-bordered ">
			        		<thead class="thead-light">
				      			<tr>
				      				<th class="table-center font-weight-normal text-muted">No</th>
				      				<th class="table-center font-weight-normal text-muted" width="20%">VGA Name</th>				      				
				      				<th class="table-center font-weight-normal text-muted">Gaming<a class="text-muted cursor-pointer ml-2" tabindex="0" data-container="body" data-toggle="popover" data-trigger="focus" title="Gaming Performance Benchmark" data-placement="bottom" data-content="Battlefield 4, Bioshock Infinite, Crysis 3, Dirt 3, Farcry 3, CSGO, Diablo III, Fifa 16, GTA 5, The Witcher 3"><i class="material-icons">info</i></a></th>
				      				<th class="table-center font-weight-normal text-muted">Graphic<a class="text-muted cursor-pointer ml-2" tabindex="0" data-container="body" data-toggle="popover" data-trigger="focus" title="Graphic Benchmark" data-placement="bottom" data-content="T-Rex, Manhattan, Gate Factor"><i class="material-icons">info</i></a></th>
				      				<th class="table-center font-weight-normal text-muted">Computing<a class="text-muted cursor-pointer ml-2" tabindex="0" data-container="body" data-toggle="popover" data-trigger="focus" title="Computing Performance" data-placement="bottom" data-content="Face Detection, Ocean Surface Simulation, Particle Simulation, Video Composition, Bitcoin Minning"><i class="material-icons">info</i></a></th>
				      				<th class="table-center font-weight-normal text-muted">Perf / Watt<a class="text-muted cursor-pointer ml-2" tabindex="0" data-container="body" data-toggle="popover" data-trigger="focus" title="Performance Per Watt" data-placement="bottom" data-content="Battlefield 4, Bioshock Infinite, Crysis 3, Dirt 3, Farcry 3, CSGO, Diablo III, Fifa 16, GTA 5, The Witcher 3, T-Rex, Manhattan, Gate Factor, Face Detection, Ocean Surface Simulation, Particle Simulation, Video Composition, Bitcoin Minning"><i class="material-icons">info</i></a></th>
				      				<th class="table-center font-weight-normal text-muted">Value (Pay)<a class="text-muted cursor-pointer ml-2" tabindex="0" data-container="body" data-toggle="popover" data-trigger="focus" title="Paying for Performance" data-placement="bottom" data-content="Battlefield 4, Bioshock Infinite, Crysis 3, Dirt 3, Farcry 3, CSGO, Diablo III, Fifa 16, GTA 5, The Witcher 3, T-Rex, Manhattan, Gate Factor, Face Detection, Ocean Surface Simulation, Particle Simulation, Video Composition, Bitcoin Minning"><i class="material-icons">info</i></a></th>
				      				<th class="table-center font-weight-normal text-muted">Noise Power<a class="text-muted cursor-pointer ml-2" tabindex="0" data-container="body" data-toggle="popover" data-trigger="focus" title="Noise and Power" data-placement="bottom" data-content="TDP, Idle Power Consumtion, Load Power Consumtion, Idle Noise Level, Load Noise Level"><i class="material-icons">info</i></a></th>
				      				<th class="table-center text-muted">Total Score<a class="text-muted cursor-pointer ml-2" tabindex="0" data-container="body" data-toggle="popover" data-trigger="focus" title="Combination of All Six Facets" data-placement="bottom" data-content="Gaming, Graphic, Computing, Performance Per Watt, Value, Noise and Power"><i class="material-icons">info</i></a></th>
				      			</tr>
			      			</thead>
			      			<?php		      				
								$i = 0;
			      				if($vga == TRUE){
									while($key = mysqli_fetch_array($vga,MYSQLI_BOTH)){
										$i++;
										?>
										<tr>
											<td class="align-middle table-center" width="50px"><?php echo $i ?></td>
						      				<td class="align-middle"><a href="pages/product.php?p=<?php echo $key['vganame'] ?>" role="button"><?php echo $key['vganame'] ?></a></td>
						      				<td class="table-center">
						      					<div class="progress" style="height: 33px;">
											  		<div class="progress-bar" role="progressbar" style="width: <?php echo $key['gaming']*10 ?>%;" aria-valuenow="<?php echo $key['gaming'] ?>" aria-valuemin="0" aria-valuemax="10"><?php echo $key['gaming'] ?></div>
												</div>
											</td>
											<td class="table-center">
						      					<div class="progress" style="height: 33px;">
											  		<div class="progress-bar" role="progressbar" style="width: <?php echo $key['graphics']*10 ?>%;" aria-valuenow="<?php echo $key['graphics'] ?>" aria-valuemin="0" aria-valuemax="10"><?php echo $key['graphics'] ?></div>
												</div>
											</td>
											<td class="table-center">
						      					<div class="progress" style="height: 33px;">
											  		<div class="progress-bar" role="progressbar" style="width: <?php echo $key['computing']*10 ?>%;" aria-valuenow="<?php echo $key['computing'] ?>" aria-valuemin="0" aria-valuemax="10"><?php echo $key['computing'] ?></div>
												</div>
											</td>
						      				<td class="table-center">
						      					<div class="progress" style="height: 33px;">
											  		<div class="progress-bar" role="progressbar" style="width: <?php echo $key['ppw']*10 ?>%;" aria-valuenow="<?php echo $key['ppw'] ?>" aria-valuemin="0" aria-valuemax="10"><?php echo $key['ppw'] ?></div>
												</div>
											</td>
						      				<td class="table-center">
						      					<div class="progress" style="height: 33px;">
											  		<div class="progress-bar" role="progressbar" style="width: <?php echo $key['value']*10 ?>%;" aria-valuenow="<?php echo $key['value'] ?>" aria-valuemin="0" aria-valuemax="10"><?php echo $key['value'] ?></div>
												</div>
											</td>
						      				<td class="table-center">
						      					<div class="progress" style="height: 33px;">
											  		<div class="progress-bar" role="progressbar" style="width: <?php echo $key['nap']*10 ?>%;" aria-valuenow="<?php echo $key['nap'] ?>" aria-valuemin="0" aria-valuemax="10"><?php echo $key['nap'] ?></div>
												</div>
											</td>
						      				<td class="table-center">
						      					<div class="progress" style="height: 33px;">
											  		<div class="progress-bar" role="progressbar" style="width: <?php echo $key['vgascore']*10 ?>%;" aria-valuenow="<?php echo $key['vgascore'] ?>" aria-valuemin="0" aria-valuemax="10"><?php echo $key['vgascore'] ?></div>
												</div>
											</td>						      				
						      			</tr>

						      			<?php
									}
								}
			      			?>			      	
						</table>
			      	</div>
		    	</div>
		  	</div>		  	
		</div>  

		<!-- SSD Modal -->
	    <div class="modal fade" id="ssdmodal" tabindex="-1" role="dialog" aria-hidden="true">
		  	<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
		    	<div class="modal-content">
		      		<div class="modal-header">

		      			<?php 
		      				$ssd = mysqli_query($koneksi,"select *from ssd");
		      				$rssd = mysqli_num_rows($ssd);
						?>		      			

		        		<img src="img/ssd.png" style="max-width: 2%; and height: auto"><h5 class="modal-title" id="exampleModalLongTitle">&nbsp; Solid State Disk List (<?php echo $rssd; ?> Product)</h5></h5>
		        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          			<span aria-hidden="true">&times;</span>
		        		</button>
		      		</div>
			      	<div class="modal-body">
			        	<table class="table table-sm table-hover table-bordered">
			        		<thead class="thead-light">
				      			<tr>
				      				<th class="table-center font-weight-normal text-muted">No</th>
				      				<th class="table-center font-weight-normal text-muted" width="20%">SSD Name</th>
				      				<th class="table-center font-weight-normal text-muted">Read Perf<a class="text-muted cursor-pointer ml-2" tabindex="0" data-container="body" data-toggle="popover" data-trigger="focus" title="How Quickly Data Is Read From The Drive" data-placement="bottom" data-content="4K Random Read, 4K Random Read Access Time, 512K Squential Read"><i class="material-icons">info</i></a></th>
				      				<th class="table-center font-weight-normal text-muted">Write Perf<a class="text-muted cursor-pointer ml-2" tabindex="0" data-container="body" data-toggle="popover" data-trigger="focus" title="How Quickly Data Is Written To The Drive" data-placement="bottom" data-content="4K Random Write, 4K Random Write Access Time, 512K Squential Write"><i class="material-icons">info</i></a></th>
				      				<th class="table-center font-weight-normal text-muted">Real World<a class="text-muted cursor-pointer ml-2" tabindex="0" data-container="body" data-toggle="popover" data-trigger="focus" title="Real World Benchmarks, How Well The Drive Performs Common Task" data-placement="bottom" data-content="Photoshop Lens Filter, AS SSD ISO Copy"><i class="material-icons">info</i></a></th>
				      				<th class="table-center font-weight-normal text-muted">Benchmarks<a class="text-muted cursor-pointer ml-2" tabindex="0" data-container="body" data-toggle="popover" data-trigger="focus" title="How Well The Drive Performs On Common Benchmarks" data-placement="bottom" data-content="PCMark Vantage, AS SSD Score"><i class="material-icons">info</i></a></th>
				      				<th class="table-center text-muted">Total Score<a class="text-muted cursor-pointer ml-2" tabindex="0" data-container="body" data-toggle="popover" data-trigger="focus" title="Combination of All Four Facets" data-placement="bottom" data-content="Read Performance, Write Performance, Real World Benchmarks, Benchmarks"><i class="material-icons">info</i></a></th>
				      			</tr>
			      			</thead>
			      			<?php		      				
								$i = 0;
			      				if($ssd == TRUE){
									while($key = mysqli_fetch_array($ssd,MYSQLI_BOTH)){
										$i++;
										$ssdname = $key['ssdname'];
										$readp = $key['readp'];
										$writep = $key['writep'];
										$realwb = $key['realwb'];
										$bench = $key['bench'];
										$ssdscore = $key['ssdscore'];
										?>
										<tr>
											<td class="align-middle table-center" width="50px"><?php echo $i ?></td>
						      				<td class="align-middle"><a href="pages/product.php?p=<?php echo $key['ssdname'] ?>" role="button"><?php echo $key['ssdname'] ?></a></td>
						      				<td class="table-center">
						      					<div class="progress" style="height: 33px;">
											  		<div class="progress-bar" role="progressbar" style="width: <?php echo $key['readp']*10 ?>%;" aria-valuenow="<?php echo $key['readp'] ?>" aria-valuemin="0" aria-valuemax="10"><?php echo $key['readp'] ?></div>
												</div>
											</td>
											<td class="table-center">
						      					<div class="progress" style="height: 33px;">
											  		<div class="progress-bar" role="progressbar" style="width: <?php echo $key['writep']*10 ?>%;" aria-valuenow="<?php echo $key['writep'] ?>" aria-valuemin="0" aria-valuemax="10"><?php echo $key['writep'] ?></div>
												</div>
											</td>
						      				<td class="table-center">
						      					<div class="progress" style="height: 33px;">
											  		<div class="progress-bar" role="progressbar" style="width: <?php echo $key['realwb']*10 ?>%;" aria-valuenow="<?php echo $key['realwb'] ?>" aria-valuemin="0" aria-valuemax="10"><?php echo $key['realwb'] ?></div>
												</div>
											</td>
						      				<td class="table-center">
						      					<div class="progress" style="height: 33px;">
											  		<div class="progress-bar" role="progressbar" style="width: <?php echo $key['bench']*10 ?>%;" aria-valuenow="<?php echo $key['bench'] ?>" aria-valuemin="0" aria-valuemax="10"><?php echo $key['bench'] ?></div>
												</div>
											</td>
						      				<td class="table-center">
						      					<div class="progress" style="height: 33px;">
											  		<div class="progress-bar" role="progressbar" style="width: <?php echo $key['ssdscore']*10 ?>%;" aria-valuenow="<?php echo $key['ssdscore'] ?>" aria-valuemin="0" aria-valuemax="10"><?php echo $key['ssdscore'] ?></div>
												</div>
											</td>
						      			</tr>

						      			<?php
									}
								}
			      			?>
						</table>
			      	</div>
		    	</div>
		  	</div>		  	
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
	    </script>

	</body>
</html>