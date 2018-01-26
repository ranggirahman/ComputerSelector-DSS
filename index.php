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
	        		<div class="card">					  	
						<div class="card-body">
							<img src="img/processor.png" style="width: 100px">
							<hr>
							<h5 class="card-title">Processor</h5>
						   	<p class="card-text"> Fungsi utama dari CPU adalah melakukan operasi aritmetika dan logika terhadap data yang diambil dari memori atau dari informasi yang dimasukkan</p>
						   	<div class="btn btn-primary" data-toggle="modal" data-target="#processormodal">View Processor List</div>
						 </div>
					</div>
	        	</div>
	        	<div class="col-md-4">
	        		<div class="card">					  	
						<div class="card-body">
							<img src="img/vga.png" style="width: 142px">
							<hr>
							<h5 class="card-title">Video Graphic Array</h5>
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
							<h5 class="card-title">Solid State Disk</h5>
						   	<p class="card-text">Komponen perangkat keras yang menyimpan data sekunder. Menggunakan menggunakan nonvolatile memory tidak seperti hardisk konvensional</p>
						   	<div href="" class="btn btn-primary" data-toggle="modal" data-target="#ssdmodal">View SSD List</div>
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

	   	<!-- Processor Modal -->
	    <div class="modal fade" id="processormodal" tabindex="-1" role="dialog" aria-hidden="true">
		  	<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
		    	<div class="modal-content">
		      		<div class="modal-header">

		      			<?php 
		      				$cpu = mysqli_query($koneksi,"select *from cpu");
		      				$rcpu = mysqli_num_rows($cpu);
						?>		

		        		<img src="img/processor.png" style="max-width: 3%; and height: auto"><h5 class="modal-title" id="exampleModalLongTitle">&nbsp; Processor List (<?php echo $rcpu; ?> Product)</h5>
		        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          			<span aria-hidden="true">&times;</span>
		        		</button>
		      		</div>
			      	<div class="modal-body">
			        	<table class="table table-bordered table-striped">
			        		<thead class="thead-light">
				      			<tr>
				      				<th ><button type="button" class="btn btn-light">No</button></th>
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
						      				<td class="table-center"><?php echo $performance ?></td>
						      				<td class="table-center"><?php echo $single ?></td>
						      				<td class="table-center"><?php echo $intg ?></td>
						      				<td class="table-center"><?php echo $intgocl ?></td>
						      				<td class="table-center"><?php echo $ppw ?></td>
						      				<td class="table-center"><?php echo $value ?></td>
						      				<td class="table-center"><b><?php echo $cpuscore ?></b></td>
						      				<td></td>
						      			</tr>

						      			<?php
									}
								}
			      			?>
			      	</div>
			      	<div class="modal-footer">	
			      			<form action="" method="POST">		      						        	
				        		<tr>
				      				<td></td>
				      				<td><input class="form-control" type="text" name="cpuname" placeholder="Processor Name" maxlength="100" required></td>
				      				<td><input class="form-control" type="number" min="0" max="10" step="0.1" name="performance" placeholder="Performance" maxlength="5" required></td>
				      				<td><input class="form-control" type="number" min="0" max="10" step="0.1" name="single" placeholder="Single-Core Performance" maxlength="5" required></td>
				      				<td><input class="form-control" type="number" min="0" max="10" step="0.1" name="intg" placeholder="Integrated Graphics" maxlength="5" required></td>
				      				<td><input class="form-control" type="number" min="0" max="10" step="0.1" name="intgocl" placeholder="Integrated Graphics (OpenCL)" maxlength="5" required></td>
				      				<td><input class="form-control" type="number" min="0" max="10" step="0.1" name="ppw" placeholder="Performance Per Watt" maxlength="5" required></td>
				      				<td><input class="form-control" type="number" min="0" max="10" step="0.1" name="value" placeholder="Value" maxlength="5" required></td>
				      				<td><input class="form-control" type="number" min="0" max="10" step="0.1" name="cpuscore" placeholder="Score" maxlength="5" required></td>
				      				<td><input class="btn btn-success" type="submit" name="cpuadd" value="Add"></td>
				      			</tr>
				      		</form>
						</table>
			      	</div>
		    	</div>
		  	</div>
		  	<?php
			  	if(isset($_POST['cpuadd'])){

				    $cpuname = $_POST['cpuname'];
				    $performance = $_POST['performance'];
				    $single = $_POST['single'];
				    $intg = $_POST['intg'];
				    $intgocl = $_POST['intgocl'];
				    $ppw = $_POST['ppw'];
				    $value = $_POST['value'];
				    $cpuscore = $_POST['cpuscore'];

				    $cpuadd = mysqli_query($koneksi,"insert into cpu(cpuname,performance,single,intg,intgocl,ppw,value) values ('$cpuname','$performance','$single','$intg','$intgocl','$ppw','$value','$cpuscore')");

				    echo "<meta http-equiv='refresh' content='0'>";						   
			  	}
			?>
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

		        		<img src="img/vga.png" style="max-width: 4%; and height: auto"><h5 class="modal-title" id="exampleModalLongTitle">&nbsp; Video Graphic Array List (<?php echo $rvga; ?> Product)</h5>
		        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          			<span aria-hidden="true">&times;</span>
		        		</button>
		      		</div>
			      	<div class="modal-body">
			        	<table class="table table-striped">
			        		<thead class="thead-light">
				      			<tr>
				      				<th>No</th>
				      				<th width="20%">VGA Name</th>
				      				<th>Gaming</th>
				      				<th>Graphics</th>
				      				<th>Computing</th>
				      				<th>Performance Per Watt</th>
				      				<th>Value</th>
				      				<th>Noise and Power</th>
				      				<th width="10%">Total Score</th>
				      				<th></th>
				      			</tr>
			      			</thead>
			      			<?php		      				
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
						      				<td></td>
						      			</tr>

						      			<?php
									}
								}
			      			?>
			      	</div>
			      	<div class="modal-footer">	
			      			<form action="" method="POST">		      						        	
				        		<tr>
				      				<td></td>
				      				<td><input class="form-control" type="text" name="vganame" placeholder="VGA Name" maxlength="100" required></td>
				      				<td><input class="form-control" type="number" min="0" max="10" step="0.1" name="gaming" placeholder="Gaming" maxlength="5" required></td>
				      				<td><input class="form-control" type="number" min="0" max="10" step="0.1" name="graphics" placeholder="Graphic" maxlength="5" required></td>
				      				<td><input class="form-control" type="number" min="0" max="10" step="0.1" name="computing" placeholder="Computing" maxlength="5" required></td>
				      				<td><input class="form-control" type="number" min="0" max="10" step="0.1" name="ppw" placeholder="Performance Per Watt" maxlength="5" required></td>
				      				<td><input class="form-control" type="number" min="0" max="10" step="0.1" name="value" placeholder="Value" maxlength="5" required></td>
				      				<td><input class="form-control" type="number" min="0" max="10" step="0.1" name="nap" placeholder="Noise and Power" maxlength="5" required></td>
				      				<td><input class="form-control" type="number" min="0" max="10" step="0.1" name="vgascore" placeholder="Score" maxlength="5" required></td>
				      				<td><input class="btn btn-success" type="submit" name="vgaadd" value="Add"></td>
				      			</tr>
				      		</form>
						</table>
			      	</div>
		    	</div>
		  	</div>
		  	<?php
			  	if(isset($_POST['vgaadd'])){

				    $vganame = $_POST['vganame'];
				    $gaming = $_POST['gaming'];
				    $graphics = $_POST['graphics'];
				    $computing = $_POST['computing'];
				    $ppw = $_POST['ppw'];
				    $value = $_POST['value'];
				    $nap = $_POST['nap'];
				    $vgascore = $_POST['vgascore'];

				    $cpuadd = mysqli_query($koneksi,"insert into vga(vganame,gaming,graphics,computing,ppw,value,nap,vgascore) values ('$vganame','$gaming','$graphics','$computing','$ppw','$value','$nap','$vgascore')");

				    echo "<meta http-equiv='refresh' content='0'>";						   
			  	}
			?>
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

		        		<img src="img/ssd.png" style="max-width: 3%; and height: auto"><h5 class="modal-title" id="exampleModalLongTitle">&nbsp; Solid State Disk List (<?php echo $rssd; ?> Product)</h5></h5>
		        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          			<span aria-hidden="true">&times;</span>
		        		</button>
		      		</div>
			      	<div class="modal-body">
			        	<table class="table table-striped">
			        		<thead class="thead-light">
				      			<tr>
				      				<th>No</th>
				      				<th width="20%">SSD Name</th>
				      				<th>Read Performance</th>
				      				<th>Write Performance</th>
				      				<th>Real World Benchmarks</th>
				      				<th>Benchmarks</th>
				      				<th width="10%">Total Score</th>
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
											<td><?php echo $i ?></td>
						      				<td><b><i><?php echo $ssdname ?><i></b></td>
						      				<td><?php echo $readp ?></td>
						      				<td><?php echo $writep ?></td>
						      				<td><?php echo $realwb ?></td>
						      				<td><?php echo $bench ?></td>
						      				<td><b><?php echo $ssdscore ?></b></td>
						      				<td></td>
						      			</tr>

						      			<?php
									}
								}
			      			?>
			      	</div>
			      	<div class="modal-footer">	
			      			<form action="" method="POST">		      						        	
				        		<tr>
				      				<td></td>
				      				<td><input class="form-control" type="text" name="ssdname" placeholder="SSD Name" maxlength="100" required></td>
				      				<td><input class="form-control" type="number" min="0" max="10" step="0.1" name="readp" placeholder="Read Performance" maxlength="5" required></td>
				      				<td><input class="form-control" type="number" min="0" max="10" step="0.1" name="writep" placeholder="Write Performance" maxlength="5" required></td>
				      				<td><input class="form-control" type="number" min="0" max="10" step="0.1" name="realwb" placeholder="Real World Benchmarks" maxlength="5" required></td>
				      				<td><input class="form-control" type="number" min="0" max="10" step="0.1" name="bench" placeholder="Benchmarks" maxlength="5" required></td>				      				
				      				<td><input class="form-control" type="number" min="0" max="10" step="0.1" name="ssdscore" placeholder="Score" maxlength="5" required></td>
				      				<td><input class="btn btn-success" type="submit" name="ssdadd" value="Add"></td>
				      			</tr>
				      		</form>
						</table>
			      	</div>
		    	</div>
		  	</div>
		  	<?php
			  	if(isset($_POST['ssdadd'])){

				    $ssdname = $_POST['ssdname'];
				    $readp = $_POST['readp'];
				    $writep = $_POST['writep'];
				    $realwb = $_POST['realwb'];
				    $bench = $_POST['bench'];
				    $ssdscore = $_POST['ssdscore'];

				    $cpuadd = mysqli_query($koneksi,"insert into ssd(ssdname,readp,writep,realwb,bench,ssdscore) values ('$ssdname','$readp','$writep','$realwb','$bench','$ssdscore')");

				    echo "<meta http-equiv='refresh' content='0'>";						   
			  	}
			?>
		</div> 




	    <script src="js/jquery.min.js"></script>
	    <script src="js/popper.min.js"></script>
	    <script src="js/bootstrap.js"></script>
	    <script src="js/custom.js"></script> 
	    <script type="text/javascript">
	    	$(function () {
			  	$('[data-toggle="popover"]').popover()
			})
	    </script>

	</body>
</html>
