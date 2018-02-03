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

  		<div class="fixed-bg"></div>
	    <div class="navbar navbar-expand-lg fixed-top navbar-dark bg-primary">
	      	<div class="container">
	        	<a href="index.php" class="navbar-brand"><img src="img/logo.png" class="img-fluid" style="max-width: 5%; and height: auto">&nbsp; Decision Support System</a>

	        	<form  class="col-lg-5" action="search.php" method="POST">
				  	<input class="form-control" name="search" placeholder="Product Search">
				  	<input type="submit" name="searchsubmit" style="display:none"/>
		        </form>
	      	</div>
	    </div>

	    <div class="jumbotron">
	    	<div class="container">	    	
			   	<div class="row">
			   		<div class="col-md-2">
			   			<img src="img/desktop.png" style="padding-top: 18px; max-width: 115%; and height: auto">
			   		</div>
		          	<div class="col-md-10">
		            	<h1 class="display-4" style="padding-left: 50px;">Pemilihan Spesifikasi Hardware Komputer</h1>
		            </div>
		      	</div>
		      	<hr>
		      	<div class="row">
		      		<div class="col-md-12">
		      			<p class="lead" align="justify">Sistem pendukung keputusan untuk membantu pengguna melakukan pemilihan spesifikasi hardware komputer dengan metode Utility Additive (UTA) yang digunakan untuk menentukan setiap perangkat khususnya seperti processor, vga, storage dan perangkat pendukung lainnya agar sesuai dengan kebutuhan sehingga keputusan yang diambil pengguna akan tepat.</p>
		      		</div> 
		      	</div>
		      	<div class="row">
		      		<div class="col-md-4">
						<a class="btn btn-secondary" href="selector.php" role="button"><span aria-hidden="true"><i class="material-icons" style="font-size: 20px;">touch_app</i></span> Pick Your Own Computer</a>
					</div>
		      	</div>
	    	</div>
		</div>

		<div class="container">
	      	<div class="row">
	        	<div class="col-md-4">
	        		<div class="card">					  	
						<div class="card-body">
							<img src="img/processor.png" style="width: 100px">
							<hr>
							<h5 class="card-title display-4" style="font-size: 22px;">Processor</h5>
						   	<p class="card-text"> Fungsi utama dari CPU adalah melakukan operasi aritmetika dan logika terhadap data yang diambil dari memori atau dari informasi yang dimasukkan</p>
						   	<div class="btn btn-primary" data-toggle="modal" data-target="#processormodal">View Processor List</div>
						 </div>
					</div>
	        	</div>
	        	<div class="col-md-4">
	        		<div class="card">					  	
						<div class="card-body">
							<img src="img/vga.png" style="width: 100px">
							<hr>
							<h5 class="card-title display-4" style="font-size: 22px;">Video Graphic Array</h5>
						   	<p class="card-text">Kartu VGA berguna untuk menerjemahkan keluaran komputer ke monitor. Untuk menggambar / design graphic ataupun untuk bermain game</p>
						   	<div class="btn btn-primary" data-toggle="modal" data-target="#vgamodal">View VGA List</div>
						 </div>
					</div>
	        	</div>
	        	<div class="col-md-4">
	        		<div class="card">					  	
						<div class="card-body">
							<img src="img/ssd.png" style="width: 100px">
							<hr>
							<h5 class="card-title display-4" style="font-size: 22px;">Solid State Disk</h5>
						   	<p class="card-text">Komponen perangkat keras yang menyimpan data sekunder. Menggunakan menggunakan nonvolatile memory tidak seperti hardisk konvensional</p>
						   	<div href="" class="btn btn-primary" data-toggle="modal" data-target="#ssdmodal">View SSD List</div>
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
			        	<table class="table table-hover table-bordered table-striped">
			        		<thead class="thead-light">
				      			<tr>
				      				<th class="table-center"><button type="button" class="btn btn-light">No</button></th>
				      				<th width="15%"><button type="button" class="btn btn-light">CPU Name</button></th>
				      				<th class="table-center"><button type="button" class="btn btn-wrap btn-info" data-container="body" data-toggle="popover" title="Benchmark Performance Using All Cores" data-placement="bottom" data-content="PCMark Accelerated, PassMark, Geekbench Multi-Core">Performance</button></th>
				      				<th class="table-center"><button type="button" class="btn btn-wrap btn-info" data-container="body" data-toggle="popover" title="Individual Core Benchmark Performance" data-placement="bottom" data-content="PassMark Single-Core, Geekbench Single-Core, AES Single-Core">Single-Core</button></th>
				      				<th class="table-center"><button type="button" class="btn btn-wrap btn-info" data-container="body" data-toggle="popover" title="Integrated GPU Performance for Graphics" data-placement="bottom" data-content="Sky Driver, Cloud Gate">Graphics</button></th>
				      				<th class="table-center"><button type="button" class="btn btn-wrap btn-info" data-container="body" data-toggle="popover" title="Integrated GPU Performance for Parallel Computing" data-placement="bottom" data-content="Bitcoin Minning, Face Detection, Ocean Simulation, CompuBench T-Rex, Video Composition">OpenCL</button></th>
				      				<th class="table-center"><button type="button" class="btn btn-wrap btn-info" data-container="body" data-toggle="popover" title="Performance Per Watt" data-placement="bottom" data-content="Sky Driver, Cloud Gate, CompuBench, PCMark, PassMark, Geekbench, TDP">Perf / Watt</button></th>
				      				<th class="table-center"><button type="button" class="btn btn-wrap btn-info" data-container="body" data-toggle="popover" title="Paying for Performance" data-placement="bottom" data-content="Sky Driver, Cloud Gate, CompuBench, PCMark, PassMark, Geekbench, TDP">Value</button></th>
				      				<th class="table-center"><button type="button" class="btn btn-wrap btn-info" data-container="body" data-toggle="popover" title="Combination of All Six Facets" data-placement="bottom" data-content="Performance, Single-Core Performance, Integrated Graphics, Performance Per Watt, Value">Total Score</button></th>
				      				<th></th>
				      			</tr>
			      			</thead>
			      			<?php			      							      				
								$i = 0;

			      				if($cpu == TRUE){
									while($key = mysqli_fetch_array($cpu,MYSQLI_BOTH)){
										$i++;										
										?>
										<tr>
											<td class="table-center"><?php echo $i ?></td>
						      				<td><b><i><?php echo $key['cpuname'] ?><i></b></td>
						      				<td class="table-center"><?php echo $key['performance'] ?></td>
						      				<td class="table-center"><?php echo $key['single'] ?></td>
						      				<td class="table-center"><?php echo $key['intg'] ?></td>
						      				<td class="table-center"><?php echo $key['intgocl'] ?></td>
						      				<td class="table-center"><?php echo $key['ppw'] ?></td>
						      				<td class="table-center"><?php echo $key['value']; ?></td>
						      				<td class="table-center"><b><?php echo $key['cpuscore']; ?></b></td>
						      				<td class="table-center"><a class="btn btn-light" href="https://www.google.com/search?q=<?php echo $key['cpuname'] ?>" target="_blank" role="button"><span aria-hidden="true"><i class="material-icons" style="font-size: 20px;">open_in_new</i></span></a></td>
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
			        	<table class="table table-hover table-bordered table-striped">
			        		<thead class="thead-light">
				      			<tr>
				      				<th class="table-center"><button type="button" class="btn btn-light">No</button></th>
				      				<th width="20%"><button type="button" class="btn btn-light">VGA Name</button></th>				      				
				      				<th class="table-center"><button type="button" class="btn btn-wrap btn-info" data-container="body" data-toggle="popover" title="Gaming Performance Benchmark" data-placement="bottom" data-content="Battlefield 4, Bioshock Infinite, Crysis 3, Dirt 3, Farcry 3, CSGO, Diablo III, Fifa 16, GTA 5, The Witcher 3">Gaming</button></th>
				      				<th class="table-center"><button type="button" class="btn btn-wrap btn-info" data-container="body" data-toggle="popover" title="Graphic Benchmark" data-placement="bottom" data-content="T-Rex, Manhattan, Gate Factor">Graphics</button></th>
				      				<th class="table-center"><button type="button" class="btn btn-wrap btn-info" data-container="body" data-toggle="popover" title="Benchmark Performance Using All Cores" data-placement="bottom" data-content="Face Detection, Ocean Surface Simulation, Particle Simulation, Video Composition, Bitcoin Minning">Computing</button></th>
				      				<th class="table-center"><button type="button" class="btn btn-wrap btn-info" data-container="body" data-toggle="popover" title="Performance Per Watt" data-placement="bottom" data-content="Battlefield 4, Bioshock Infinite, Crysis 3, Dirt 3, Farcry 3, CSGO, Diablo III, Fifa 16, GTA 5, The Witcher 3, T-Rex, Manhattan, Gate Factor, Face Detection, Ocean Surface Simulation, Particle Simulation, Video Composition, Bitcoin Minning">Perf / Watt</button></th>
				      				<th class="table-center"><button type="button" class="btn btn-wrap btn-info" data-container="body" data-toggle="popover" title="Paying for Performance" data-placement="bottom" data-content="Battlefield 4, Bioshock Infinite, Crysis 3, Dirt 3, Farcry 3, CSGO, Diablo III, Fifa 16, GTA 5, The Witcher 3, T-Rex, Manhattan, Gate Factor, Face Detection, Ocean Surface Simulation, Particle Simulation, Video Composition, Bitcoin Minning">Value</button></th>
				      				<th class="table-center"><button type="button" class="btn btn-wrap btn-info" data-container="body" data-toggle="popover" title="Noise and Power" data-placement="bottom" data-content="TDP, Idle Power Consumtion, Load Power Consumtion, Idle Noise Level, Load Noise Level">Noise Power</button></th>
				      				<th class="table-center"><button type="button" class="btn btn-wrap btn-info" data-container="body" data-toggle="popover" title="Combination of All Six Facets" data-placement="bottom" data-content="Gaming, Graphic, Computing, Performance Per Watt, Value, Noise and Power">Total Score</button></th>
				      				<th></th>
				      			</tr>
			      			</thead>
			      			<?php		      				
								$i = 0;

			      				if($vga == TRUE){
									while($key = mysqli_fetch_array($vga,MYSQLI_BOTH)){
										$i++;
										?>
										<tr>
											<td class="table-center"><?php echo $i ?></td>
						      				<td><b><i><?php echo $key['vganame'] ?><i></b></td>
						      				<td class="table-center"><?php echo $key['gaming'] ?></td>
						      				<td class="table-center"><?php echo $key['graphics'] ?></td>
						      				<td class="table-center"><?php echo $key['computing'] ?></td>
						      				<td class="table-center"><?php echo $key['ppw'] ?></td>
						      				<td class="table-center"><?php echo $key['value'] ?></td>
						      				<td class="table-center"><?php echo $key['nap'] ?></td>
						      				<td class="table-center"><b><?php echo $key['vgascore']; ?></b></td>
						      				<td class="table-center"><a class="btn btn-light" href="https://www.google.com/search?q=<?php echo $key['vganame'] ?>" target="_blank" role="button"><span aria-hidden="true"><i class="material-icons" style="font-size: 20px;">open_in_new</i></span></a></td>
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
			        	<table class="table table-hover table-bordered table-striped">
			        		<thead class="thead-light">
				      			<tr>
				      				<th class="table-center"><button type="button" class="btn btn-light">No</button></th>
				      				<th width="20%"><button type="button" class="btn btn-light">SSD Name</button></th>
				      				<th class="table-center"><button type="button" class="btn btn-wrap btn-info" data-container="body" data-toggle="popover" title="How Quickly Data Is Read From The Drive" data-placement="bottom" data-content="4K Random Read, 4K Random Read Access Time, 512K Squential Read">Read Perf</button></th>
				      				<th class="table-center"><button type="button" class="btn btn-wrap btn-info" data-container="body" data-toggle="popover" title="How Quickly Data Is Written To The Drive" data-placement="bottom" data-content="4K Random Write, 4K Random Write Access Time, 512K Squential Write">Write Perf</button></th>
				      				<th class="table-center"><button type="button" class="btn btn-wrap btn-info" data-container="body" data-toggle="popover" title="Real World Benchmarks, How Well The Drive Performs Common Task" data-placement="bottom" data-content="Photoshop Lens Filter, AS SSD ISO Copy">Real World</button></th>
				      				<th class="table-center"><button type="button" class="btn btn-wrap btn-info" data-container="body" data-toggle="popover" title="How Well The Drive Performs On Common Benchmarks" data-placement="bottom" data-content="PCMark Vantage, AS SSD Score">Benchmarks</button></th>
				      				<th class="table-center"><button type="button" class="btn btn-wrap btn-info" data-container="body" data-toggle="popover" title="Combination of All Four Facets" data-placement="bottom" data-content="Read Performance, Write Performance, Real World Benchmarks, Benchmarks">Total Score</button></th>
				      				<th></th>
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
											<td class="table-center"><?php echo $i ?></td>
						      				<td><b><i><?php echo $key['ssdname'] ?><i></b></td>
						      				<td class="table-center"><?php echo $key['readp'] ?></td>
						      				<td class="table-center"><?php echo $key['writep'] ?></td>
						      				<td class="table-center"><?php echo $key['realwb'] ?></td>
						      				<td class="table-center"><?php echo $key['bench'] ?></td>
						      				<td class="table-center"><b><?php echo $key['ssdscore'] ?></b></td>
						      				<td class="table-center"><a class="btn btn-light" href="https://www.google.com/search?q=<?php echo $key['ssdname'] ?>" target="_blank" role="button"><span aria-hidden="true"><i class="material-icons" style="font-size: 20px;">open_in_new</i></span></a></td>
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
