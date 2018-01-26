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
	    <link rel="stylesheet" href="css/custom.min.css">
	    <link rel="stylesheet" href="css/modification.css">
	    <link href="css/jumbotron.css" rel="stylesheet">
	    <link rel="icon" href="img/favicon.ico">	   
	    <title>DSS : Pemilihan Spesifikasi Hardware Komputer</title>
  	</head>

  	<body>

  		<div class="fixed-bg"></div>
	    <div class="navbar navbar-expand-lg fixed-top navbar-dark bg-primary">
	      	<div class="container">
	        	<a href="index.php" class="navbar-brand"><img src="img/logo.png" class="img-fluid" style="max-width: 3%; and height: auto">&nbsp; Decision Support System</a>
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
		      			<p class="lead">Sistem pendukung keputusan untuk membantu pengguna melakukan pemilihan spesifikasi hardware komputer dengan metode Utility Additive (UTA) yang digunakan untuk menentukan setiap perangkat khususnya seperti processor, vga, storage dan perangkat pendukung lainnya agar sesuai dengan kebutuhan sehingga keputusan yang diambil pengguna akan tepat.</p>
		      		</div> 
		      	</div>
	    	</div>
		</div>

		<div class="container">
	      	<div class="row">
	        	<div class="col-md-4">
	        		<div class="card" style="width: 18rem;">					  	
						<div class="card-body">
							<img src="img/processor.png" style="width: 100px">
							<hr>
							<h5 class="card-title">Processor</h5>
						   	<p class="card-text"> Fungsi utama dari CPU adalah melakukan operasi aritmetika dan logika terhadap data yang diambil dari memori atau dari informasi yang dimasukkan</p>
						   	<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#processormodal">View Processor List</a>
						 </div>
					</div>
	        	</div>
	        	<div class="col-md-4">
	        		<div class="card" style="width: 18rem;">					  	
						<div class="card-body">
							<img src="img/vga.png" style="width: 142px">
							<hr>
							<h5 class="card-title">Video Graphic Array</h5>
						   	<p class="card-text">Kartu VGA berguna untuk menerjemahkan keluaran komputer ke monitor. Untuk menggambar / design graphic ataupun untuk bermain game</p>
						   	<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#vgamodal">View VGA List</a>
						 </div>
					</div>
	        	</div>
	        	<div class="col-md-4">
	        		<div class="card" style="width: 18rem;">					  	
						<div class="card-body">
							<img src="img/ssd.png" style="width: 100px">
							<hr>
							<h5 class="card-title">Solid State Disk</h5>
						   	<p class="card-text">Sebuah komponen perangkat keras yang menyimpan data sekunder. Menggunakan nonvolatile memory sebagai media</p>
						   	<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#ssdmodal">View SSD List</a>
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

	   	<!-- Processor Modal -->
	    <div class="modal fade" id="processormodal" tabindex="-1" role="dialog" aria-hidden="true">
		  	<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
		    	<div class="modal-content">
		      		<div class="modal-header">
		        		<img src="img/processor.png" style="max-width: 3%; and height: auto"><h5 class="modal-title" id="exampleModalLongTitle">&nbsp; Processor List</h5>
		        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          			<span aria-hidden="true">&times;</span>
		        		</button>
		      		</div>
			      	<div class="modal-body">
			        	<table class="table table-striped">
			        		<thead class="thead-light">
				      			<tr>
				      				<th>No</th>
				      				<th width="30%">CPU Name</th>
				      				<th>Performance</th>
				      				<th>Single-Core Performance</th>
				      				<th>Integrated Graphics</th>
				      				<th>Integrated Graphics (OpenCL)</th>
				      				<th>Performance Per Watt</th>
				      				<th>Value</th>
				      				<th width="10%">Total Score</th>
				      			</tr>
			      			</thead>
			      			<?php
			      				$cpu = mysqli_query($koneksi,"select *from cpu");			      				
								$i = 0;

			      				if($cpu == TRUE){
									while($key = mysqli_fetch_array($cpu,MYSQLI_BOTH)){
										$i++;
										$cpuname = $key['cpuname'];
										$performance = $key['performance'];
										$single = $key['single'];
										$intg = $key['intg'];
										$intgocl = $key['intgocl'];
										$ppw = $key['ppw'];
										$value = $key['value'];
										$cpuscore = $key['cpuscore'];
										?>
										<tr>
											<td><?php echo $i ?></td>
						      				<td><b><i><?php echo $cpuname ?><i></b></td>
						      				<td><?php echo $performance ?></td>
						      				<td><?php echo $single ?></td>
						      				<td><?php echo $intg ?></td>
						      				<td><?php echo $intgocl ?></td>
						      				<td><?php echo $ppw ?></td>
						      				<td><?php echo $value ?></td>
						      				<td><b><?php echo $cpuscore ?></b></td>
						      			</tr>

						      			<?php
									}
								}
			      			?>
						</table>
			      	</div>
			      	<div class="modal-footer">
			        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			        	<button type="button" class="btn btn-primary">Save changes</button>
			      	</div>
		    	</div>
		  	</div>
		</div>  

		<!-- VGA Modal -->
	    <div class="modal fade" id="vgamodal" tabindex="-1" role="dialog" aria-hidden="true">
		  	<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
		    	<div class="modal-content">
		      		<div class="modal-header">
		        		<img src="img/vga.png" style="max-width: 4%; and height: auto"><h5 class="modal-title" id="exampleModalLongTitle">&nbsp; Video Graphic Array List</h5>
		        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          			<span aria-hidden="true">&times;</span>
		        		</button>
		      		</div>
			      	<div class="modal-body">
			        	<table class="table table-striped">
			        		<thead class="thead-light">
				      			<tr>
				      				<th>No</th>
				      				<th width="30%">VGA Name</th>
				      				<th>Gaming</th>
				      				<th>Graphics</th>
				      				<th>Computing</th>
				      				<th>Performance Per Watt</th>
				      				<th>Value</th>
				      				<th>Noise and Power</th>
				      				<th width="10%">Total Score</th>
				      			</tr>
			      			</thead>
			      			<?php
			      				$vga = mysqli_query($koneksi,"select *from vga");			      				
								$i = 0;

			      				if($vga == TRUE){
									while($key = mysqli_fetch_array($vga,MYSQLI_BOTH)){
										$i++;
										$vganame = $key['vganame'];
										$gaming = $key['gaming'];
										$graphics = $key['graphics'];
										$computing = $key['computing'];
										$ppw = $key['ppw'];
										$value= $key['value'];
										$nap = $key['nap'];
										$vgascore = $key['vgascore'];
										?>
										<tr>
											<td><?php echo $i ?></td>
						      				<td><b><i><?php echo $vganame ?><i></b></td>
						      				<td><?php echo $gaming ?></td>
						      				<td><?php echo $graphics ?></td>
						      				<td><?php echo $computing ?></td>
						      				<td><?php echo $ppw ?></td>
						      				<td><?php echo $value ?></td>
						      				<td><?php echo $nap ?></td>
						      				<td><b><?php echo $vgascore ?></b></td>
						      			</tr>

						      			<?php
									}
								}
			      			?>
						</table>
			      	</div>
			      	<div class="modal-footer">
			        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			        	<button type="button" class="btn btn-primary">Save changes</button>
			      	</div>
		    	</div>
		  	</div>
		</div>    

		<!-- SSD Modal -->
	    <div class="modal fade" id="ssdmodal" tabindex="-1" role="dialog" aria-hidden="true">
		  	<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
		    	<div class="modal-content">
		      		<div class="modal-header">
		        		<img src="img/ssd.png" style="max-width: 3%; and height: auto"><h5 class="modal-title" id="exampleModalLongTitle">&nbsp; Solid State Disk List</h5>
		        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          			<span aria-hidden="true">&times;</span>
		        		</button>
		      		</div>
			      	<div class="modal-body">
			        	<table class="table table-striped">
			        		<thead class="thead-light">
				      			<tr>
				      				<th>No</th>
				      				<th width="30%">SSD Name</th>
				      				<th>Read Performance</th>
				      				<th>Write Performance</th>
				      				<th>Real World Benchmarks</th>
				      				<th>Benchmarks</th>
				      				<th width="10%">Total Score</th>
				      			</tr>
			      			</thead>
			      			<?php
			      				$ssd = mysqli_query($koneksi,"select *from ssd");			      				
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
											<td><?php echo $i ?></td>
						      				<td><b><i><?php echo $ssdname ?><i></b></td>
						      				<td><?php echo $readp ?></td>
						      				<td><?php echo $writep ?></td>
						      				<td><?php echo $realwb ?></td>
						      				<td><?php echo $bench ?></td>
						      				<td><b><?php echo $ssdscore ?></b></td>
						      			</tr>

						      			<?php
									}
								}
			      			?>
						</table>
			      	</div>
			      	<div class="modal-footer">
			        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			        	<button type="button" class="btn btn-primary">Save changes</button>
			      	</div>
		    	</div>
		  	</div>
		</div>  

	</body>
</html>
