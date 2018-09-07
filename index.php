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

  		<?php include "pages/header-index.php" ?>
	    
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
						<a class="btn btn-success" href="pages/selector.php" role="button" style="width: 185px; margin-top: 8px;"><i class="material-icons" style="font-size: 50px;">touch_app</i><hr style="border-color: white; margin-bottom: 3px;"> Pick Your Computer</a>
					</div>
		      		<div class="col-md-10" style="padding-left: 70px;"">
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
								      				<td><a href="pages/product.php?p=<?php echo $key['cpuname'] ?>" role="button"><?php echo $key['cpuname']; ?></a></td>
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
								      				<td><a href="pages/product.php?p=<?php echo $key['vganame'] ?>" role="button"><span aria-hidden="true"><?php echo $key['vganame']; ?></span></td>
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
								      				<td><a href="pages/product.php?p=<?php echo $key['ssdname'] ?>" role="button"><?php echo $key['ssdname']; ?></a></td>
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
 					 	<div class="card-body">   
			    			<div class="row">
			    				<div class="col-md-12 text-center">
			    					<div class="display-4" style="font-size: 20px;">Welcome<br><br><img src="user/profile/<?php echo $_SESSION['username'] ?>.jpg?dummy=8484744" onerror=this.src="img/default_profile.jpg" class="rounded-circle" height="93px" width="93px"/><br><br><?php echo $us['name'] ?></div>		    					
		    						
			    				</div>
			    			</div>
			    		</div>
			    		<div class="card-footer text-center">
			    			<a href="pages/settings.php" role="button"><i class="material-icons">settings_applications</i> User Settings</a>
			    		</div>
			    	</div>
	    		</div>
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
				      				<th class="table-center"><button type="button" class="btn btn-light btn-sm">No</button></th>
				      				<th class="table-center" width="15%"><button type="button" class="btn btn-light btn-sm">Processor Name</button></th>
				      				<th class="table-center"><button type="button" class="btn btn-wrap btn-info btn-sm" data-container="body" data-toggle="popover" title="Benchmark Performance Using All Cores" data-placement="bottom" data-content="PCMark Accelerated, PassMark, Geekbench Multi-Core">Performance</button></th>
				      				<th class="table-center"><button type="button" class="btn btn-wrap btn-info btn-sm" data-container="body" data-toggle="popover" title="Individual Core Benchmark Performance" data-placement="bottom" data-content="PassMark Single-Core, Geekbench Single-Core, AES Single-Core">Single-Core</button></th>
				      				<th class="table-center"><button type="button" class="btn btn-wrap btn-info btn-sm" data-container="body" data-toggle="popover" title="Integrated GPU Performance for Graphics" data-placement="bottom" data-content="Sky Driver, Cloud Gate">Graphics</button></th>
				      				<th class="table-center"><button type="button" class="btn btn-wrap btn-info btn-sm" data-container="body" data-toggle="popover" title="Integrated GPU Performance for Parallel Computing" data-placement="bottom" data-content="Bitcoin Minning, Face Detection, Ocean Simulation, CompuBench T-Rex, Video Composition">G. OpenCL</button></th>
				      				<th class="table-center"><button type="button" class="btn btn-wrap btn-info btn-sm" data-container="body" data-toggle="popover" title="Performance Per Watt" data-placement="bottom" data-content="Sky Driver, Cloud Gate, CompuBench, PCMark, PassMark, Geekbench, TDP">Perf / Watt</button></th>
				      				<th class="table-center"><button type="button" class="btn btn-wrap btn-info btn-sm" data-container="body" data-toggle="popover" title="Paying for Performance" data-placement="bottom" data-content="Sky Driver, Cloud Gate, CompuBench, PCMark, PassMark, Geekbench, TDP">Value (Pay)</button></th>
				      				<th class="table-center"><button type="button" class="btn btn-wrap btn-info btn-sm" data-container="body" data-toggle="popover" title="Combination of All Six Facets" data-placement="bottom" data-content="Performance, Single-Core Performance, Integrated Graphics, Performance Per Watt, Value">Total Score</button></th>
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
				      				<th class="table-center"><button type="button" class="btn btn-light btn-sm">No</button></th>
				      				<th class="table-center" width="20%"><button type="button" class="btn btn-light btn-sm">VGA Name</button></th>				      				
				      				<th class="table-center"><button type="button" class="btn btn-wrap btn-info btn-sm" data-container="body" data-toggle="popover" title="Gaming Performance Benchmark" data-placement="bottom" data-content="Battlefield 4, Bioshock Infinite, Crysis 3, Dirt 3, Farcry 3, CSGO, Diablo III, Fifa 16, GTA 5, The Witcher 3">Gaming</button></th>
				      				<th class="table-center"><button type="button" class="btn btn-wrap btn-info btn-sm" data-container="body" data-toggle="popover" title="Graphic Benchmark" data-placement="bottom" data-content="T-Rex, Manhattan, Gate Factor">Graphics</button></th>
				      				<th class="table-center"><button type="button" class="btn btn-wrap btn-info btn-sm" data-container="body" data-toggle="popover" title="Computing Performance" data-placement="bottom" data-content="Face Detection, Ocean Surface Simulation, Particle Simulation, Video Composition, Bitcoin Minning">Computing</button></th>
				      				<th class="table-center"><button type="button" class="btn btn-wrap btn-info btn-sm" data-container="body" data-toggle="popover" title="Performance Per Watt" data-placement="bottom" data-content="Battlefield 4, Bioshock Infinite, Crysis 3, Dirt 3, Farcry 3, CSGO, Diablo III, Fifa 16, GTA 5, The Witcher 3, T-Rex, Manhattan, Gate Factor, Face Detection, Ocean Surface Simulation, Particle Simulation, Video Composition, Bitcoin Minning">Perf / Watt</button></th>
				      				<th class="table-center"><button type="button" class="btn btn-wrap btn-info btn-sm" data-container="body" data-toggle="popover" title="Paying for Performance" data-placement="bottom" data-content="Battlefield 4, Bioshock Infinite, Crysis 3, Dirt 3, Farcry 3, CSGO, Diablo III, Fifa 16, GTA 5, The Witcher 3, T-Rex, Manhattan, Gate Factor, Face Detection, Ocean Surface Simulation, Particle Simulation, Video Composition, Bitcoin Minning">Value (Pay)</button></th>
				      				<th class="table-center"><button type="button" class="btn btn-wrap btn-info btn-sm" data-container="body" data-toggle="popover" title="Noise and Power" data-placement="bottom" data-content="TDP, Idle Power Consumtion, Load Power Consumtion, Idle Noise Level, Load Noise Level">Noise Power</button></th>
				      				<th class="table-center"><button type="button" class="btn btn-wrap btn-info btn-sm" data-container="body" data-toggle="popover" title="Combination of All Six Facets" data-placement="bottom" data-content="Gaming, Graphic, Computing, Performance Per Watt, Value, Noise and Power">Total Score</button></th>
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
				      				<th class="table-center"><button type="button" class="btn btn-sm btn-light">No</button></th>
				      				<th class="table-center" width="20%"><button type="button" class="btn btn-sm btn-light">SSD Name</button></th>
				      				<th class="table-center"><button type="button" class="btn btn-sm btn-wrap btn-info" data-container="body" data-toggle="popover" title="How Quickly Data Is Read From The Drive" data-placement="bottom" data-content="4K Random Read, 4K Random Read Access Time, 512K Squential Read">Read Perf</button></th>
				      				<th class="table-center"><button type="button" class="btn btn-sm btn-wrap btn-info" data-container="body" data-toggle="popover" title="How Quickly Data Is Written To The Drive" data-placement="bottom" data-content="4K Random Write, 4K Random Write Access Time, 512K Squential Write">Write Perf</button></th>
				      				<th class="table-center"><button type="button" class="btn btn-sm btn-wrap btn-info" data-container="body" data-toggle="popover" title="Real World Benchmarks, How Well The Drive Performs Common Task" data-placement="bottom" data-content="Photoshop Lens Filter, AS SSD ISO Copy">Real World</button></th>
				      				<th class="table-center"><button type="button" class="btn btn-sm btn-wrap btn-info" data-container="body" data-toggle="popover" title="How Well The Drive Performs On Common Benchmarks" data-placement="bottom" data-content="PCMark Vantage, AS SSD Score">Benchmarks</button></th>
				      				<th class="table-center"><button type="button" class="btn btn-sm btn-wrap btn-info" data-container="body" data-toggle="popover" title="Combination of All Four Facets" data-placement="bottom" data-content="Read Performance, Write Performance, Real World Benchmarks, Benchmarks">Total Score</button></th>
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