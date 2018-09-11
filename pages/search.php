<?php
/*************************************************
* Filename    : search.php
* Programmer  : Ranggi Rahman
* Date        : 2018 - 1 - 14
* Email       : ranggirahman@gmail.com
* Website     : 1400707.blog.upi.edu
* Deskripsi   : Search Result Page
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

  	if(isset($_POST['search'])){
		$search = $_POST['search'];
	}
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

	   	<?php include "../pages/header-search.php" ?>	    

		<div class="container" style="padding-top: 40px;">
	      	<div class="row">
	      		<div class="col-md-8">
	      		<?php  					
	      			$found = 0;

	      			if(isset($_POST['search'])){
		      			if($search != ''){

			      			if(isset($_POST['search'])){
				      			// cpu
			   					$result = mysqli_query($koneksi,"select *from cpu where cpuname like'%$search%'");
								while($row = mysqli_fetch_array($result,MYSQLI_BOTH)){
									$found = 1;
									echo "<div class='card'><div class='card-body'><div class='row'>"; 
									    	echo "<div class='col-md-1'><img src='../img/processor.png' style='height='34px' width='34px''></div>";
									    	echo "<div style='border-left:1px solid lightgray;height:auto;'></div>";
									    	echo "<div class='col-md-8' style='padding-top: 4px;'><a href='../pages/product.php?p=".$row['cpuname']."'>".$row['cpuname']."</a></div>";
									    	echo "<div style='border-left:1px solid lightgray;height:auto;'></div>";
									    	echo "<div class='col-md-2 text-center' style='padding-top: 4px;'><span aria-hidden='true'><i class='material-icons' style='font-size: 16px;'>attach_money</i></span>".$row['cpuprice']."</div>";
									echo "</div></div></div><br>";						    
								}

								// vga					
			   					$result = mysqli_query($koneksi,"select *from vga where vganame like'%$search%'");
								while($row = mysqli_fetch_array($result,MYSQLI_BOTH)){
									$found = 1;
									echo "<div class='card'><div class='card-body'><div class='row'>"; 
									    	echo "<div class='col-md-1'><img src='../img/vga.png' style='height='34px' width='34px''></div>";
									    	echo "<div style='border-left:1px solid lightgray;height:auto;'></div>";
									    	echo "<div class='col-md-8' style='padding-top: 4px;'><a href='../pages/product.php?p=".$row['vganame']."'>".$row['vganame']."</a></div>";
									    	echo "<div style='border-left:1px solid lightgray;height:auto;'></div>";
									    	echo "<div class='col-md-2 text-center' style='padding-top: 4px;'><span aria-hidden='true'><i class='material-icons' style='font-size: 16px;'>attach_money</i></span>".$row['vgaprice']."</div>";
									echo "</div></div></div><br>";							    
								}

								// ssd					
			   					$result = mysqli_query($koneksi,"select *from ssd where ssdname like'%$search%'");
								while($row = mysqli_fetch_array($result,MYSQLI_BOTH)){
									$found = 1;
									echo "<div class='card'><div class='card-body'><div class='row'>"; 
									    	echo "<div class='col-md-1'><img src='../img/ssd.png' style='height='34px' width='34px''></div>";
									    	echo "<div style='border-left:1px solid lightgray;height:auto;'></div>";
									    	echo "<div class='col-md-8' style='padding-top: 4px;'><a href='../pages/product.php?p=".$row['ssdname']."'>".$row['ssdname']."</a></div>";
									    	echo "<div style='border-left:1px solid lightgray;height:auto;'></div>";
									    	echo "<div class='col-md-2 text-center' style='padding-top: 4px;'><span aria-hidden='true'><i class='material-icons' style='font-size: 16px;'>attach_money</i></span>".$row['ssdprice']."</div>";
									echo "</div></div></div><br>";							    
								}						
			      			}
						}
					}
					if($found == 0){
						echo "
							<div class='row' style='padding: 200px 0px 200px 0px;'>						   		
						   		<div class='col-md-3'>
						   			<i class='material-icons' style='font-size: 150px; color:lightgray;'>search</i>
						   		</div>
					          	<div class='col-md-8'>
					            	<h4 class='display-4'>sorry we can't find what you're looking for</h4>
					            </div>
					            <div class='col-md-1'>
						   		</div>
					        </div>
						";
					}
				?>
				</div>	        	
	     	</div>

	      	<?php include "../pages/footer.php" ?>

		</div>

	    <script src="../js/jquery.min.js"></script>
	    <script src="../js/popper.min.js"></script>
	    <script src="../js/bootstrap.js"></script>
	    <script src="../js/custom.js"></script> 


	</body>
</html>
