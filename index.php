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
	        	<a href="index.php" class="navbar-brand"><img src="img/logo.png" class="img-fluid" style="max-width: 3%; and height: auto">	&nbsp; Decision Support System</a>
	      	</div>
	    </div>

	    <div class="jumbotron">
	    	<div class="container">	    	
			   	<div class="row">
			   		<div class="col-md-2">
			   			<img src="img/desktop.png" style="padding-top: 20px; max-width: 150%; and height: auto">
			   		</div>
		          	<div class="col-md-10">
		            	<h1 class="display-3" style="padding-left: 130px;">Pemilihan Spesifikasi Hardware Komputer</h1>
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
		  	<div class="modal-dialog modal-dialog-centered" role="document">
		    	<div class="modal-content">
		      		<div class="modal-header">
		        		<h5 class="modal-title" id="exampleModalLongTitle">Processor List</h5>
		        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          			<span aria-hidden="true">&times;</span>
		        		</button>
		      		</div>
			      	<div class="modal-body">
			        ...
			      	</div>
			      	<div class="modal-footer">
			        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			        	<button type="button" class="btn btn-primary">Save changes</button>
			      	</div>
		    	</div>
		  	</div>
		</div>  

		<!-- Processor Modal -->
	    <div class="modal fade" id="vgamodal" tabindex="-1" role="dialog" aria-hidden="true">
		  	<div class="modal-dialog modal-dialog-centered" role="document">
		    	<div class="modal-content">
		      		<div class="modal-header">
		        		<h5 class="modal-title" id="exampleModalLongTitle">VGA List</h5>
		        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          			<span aria-hidden="true">&times;</span>
		        		</button>
		      		</div>
			      	<div class="modal-body">
			        ...
			      	</div>
			      	<div class="modal-footer">
			        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			        	<button type="button" class="btn btn-primary">Save changes</button>
			      	</div>
		    	</div>
		  	</div>
		</div>  

		<!-- Processor Modal -->
	    <div class="modal fade" id="ssdmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		  	<div class="modal-dialog modal-dialog-centered" role="document">
		    	<div class="modal-content">
		      		<div class="modal-header">
		        		<h5 class="modal-title" id="exampleModalLongTitle">SSD List</h5>
		        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          			<span aria-hidden="true">&times;</span>
		        		</button>
		      		</div>
			      	<div class="modal-body">
			        ...
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
