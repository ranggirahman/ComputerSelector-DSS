<?php
/*************************************************
* Filename    : product.php
* Programmer  : Ranggi Rahman
* Date        : 2018 - 1 - 14
* Email       : ranggirahman@gmail.com
* Website     : 1400707.blog.upi.edu
* Deskripsi   : Product Information Page
*
**************************************************/
	session_start();
	if( $_SESSION['islogin'] != 1){
		header("Location: login.php");
	}else if(isset($_POST['logout'])){
	    session_unset();
	    session_destroy();
	    header("Location: login.php");
  	}

  	include "koneksi.php";

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
	    <title>DSS : Choice of Computer Hardware Specifications</title>
  	</head>

  	<body>
  		<?php $product = $_GET['p']; ?>

	    <div class="navbar navbar-expand-lg fixed-top navbar-dark bg-primary">
	      	<div class="container">
	        	<a href="index.php" class="navbar-brand"><img src="img/logo.png" class="img-fluid" style="max-width: 5%; and height: auto">&nbsp; Decision Support System</a>

	        	<form class="col-lg-5" action="search.php" method="POST" class="form-inline">
				  	<input class="form-control" name="search" placeholder="Product Search">
				  	<input type="submit" name="searchsubmit" style="display:none"/>
		        </form>
	      	</div>
	    </div>

	    

		<div class="container" style="padding-top: 60px;">
	      	<div class="row">
	      		<div class="col-md-12">
	      		<?php  					
	      			$found = 0;

					// cpu
   					$result = mysqli_query($koneksi,"select *from cpu where cpuname='$product'");
					while($row = mysqli_fetch_array($result,MYSQLI_BOTH)){
						$found = 1;
						echo "<div class='card'><div class='card-body'><table border=0>"; 
							echo "<tr>";
						    	echo "<td rowspan='4' width='130'><img src='img/processor.png' style='max-width: 75%; and height: auto'></td>";
						    	echo "<td colspan='7'><a href='https://www.google.com/search?q=".$row['cpuname']."' target='_blank'><h5 class='display-4' style='font-size: 22px;'>".$row['cpuname']."</h5></a></td>";
						    echo "</tr>";
						    echo "<tr>";
						    	echo "<td width='200'>Perfomance</td>";
						    	echo "<td width='30'>".$row['performance']."</td>";
						    	echo "<td width='25' rowspan='4'></td>";
						    	echo "<td width='250'>Single-Core Perfomance</td>";
						    	echo "<td width='30'>".$row['single']."</td>";
						    	echo "<td width='30' rowspan='4'></td>";
						    	echo "<td width='250'>Total Score</td>";
						    echo "</tr>";
						    echo "<tr>";
						    	echo "<td>Integrated Graphic</td>";
						    	echo "<td>".$row['intg']."</td>";
						    	echo "<td>Integrated Graphic (OpenCL)</td>";
						    	echo "<td>".$row['intgocl']."</td>";					    	
						    	echo "<td rowspan='2'><h5 class='display-4' style='font-size: 36px;'>".$row['cpuscore']."</h5></td>";
						    echo "</tr>";
						    echo "<tr>";
						    	echo "<td>Performance Per Watt</td>";
						    	echo "<td>".$row['ppw']."</td>";
						    	echo "<td>Value (Pay)</td>";
						    	echo "<td>".$row['value']."</td>";						    	
						    echo "</tr>";
						echo "</table></div></div><br><br>";						    
					}

					// vga					
   					$result = mysqli_query($koneksi,"select *from vga where vganame='$product'");
					while($row = mysqli_fetch_array($result,MYSQLI_BOTH)){
						$found = 1;
						echo "<div class='card'><div class='card-body'><table border=0>"; 
							echo "<tr>";
						    	echo "<td rowspan='4' width='130'><img src='img/vga.png' style='max-width: 75%; and height: auto'></td>";
						    	echo "<td colspan='7'><a href='https://www.google.com/search?q=".$row['vganame']."' target='_blank'><h5 class='display-4' style='font-size: 22px;'>".$row['vganame']."</h5></a></td>";
						    echo "</tr>";
						    echo "<tr>";
						    	echo "<td width='200'>Gaming</td>";
						    	echo "<td width='30'>".$row['gaming']."</td>";
						    	echo "<td width='25' rowspan='4'></td>";
						    	echo "<td width='250'>Graphic</td>";
						    	echo "<td width='30'>".$row['graphics']."</td>";
						    	echo "<td width='30' rowspan='4'></td>";
						    	echo "<td width='250'>Total Score</td>";
						    echo "</tr>";
						    echo "<tr>";
						    	echo "<td>Computing</td>";
						    	echo "<td>".$row['computing']."</td>";
						    	echo "<td>Performance Per Watt</td>";
						    	echo "<td>".$row['ppw']."</td>";					    	
						    	echo "<td rowspan='2'><h5 class='display-4' style='font-size: 36px;'>".$row['vgascore']."</h5></td>";
						    echo "</tr>";
						    echo "<tr>";
						    	echo "<td>Value (Pay)</td>";
						    	echo "<td>".$row['value']."</td>";
						    	echo "<td>Noise and Power</td>";
						    	echo "<td>".$row['nap']."</td>";						    	
						    echo "</tr>";
						echo "</table></div></div><br><br>";						    
					}

					// ssd					
   					$result = mysqli_query($koneksi,"select *from ssd where ssdname='$product'");
					while($row = mysqli_fetch_array($result,MYSQLI_BOTH)){
						$found = 1;
						echo "<div class='card'><div class='card-body'><table border=0>"; 
							echo "<tr>";
						    	echo "<td rowspan='4' width='130'><img src='img/ssd.png' style='max-width: 75%; and height: auto'></td>";
						    	echo "<td colspan='7'><a href='https://www.google.com/search?q=".$row['ssdname']."' target='_blank'><h5 class='display-4' style='font-size: 22px;'>".$row['ssdname']."</h5></a></td>";
						    echo "</tr>";
						    echo "<tr>";
						    	echo "<td width='200'>Read Performance</td>";
						    	echo "<td width='30'>".$row['readp']."</td>";
						    	echo "<td width='25' rowspan='3'></td>";
						    	echo "<td width='250'>Write Performance</td>";
						    	echo "<td width='30'>".$row['writep']."</td>";
						    	echo "<td width='30' rowspan='3'></td>";
						    	echo "<td width='250'>Total Score</td>";
						    echo "</tr>";
						    echo "<tr>";
						    	echo "<td>Real World Performance</td>";
						    	echo "<td>".$row['realwb']."</td>";	
						    	echo "<td>Benchmarks</td>";
						    	echo "<td>".$row['bench']."</td>";				    	
						    	echo "<td rowspan='2'><h5 class='display-4' style='font-size: 36px;'>".$row['ssdscore']."</h5></td>";
						    echo "</tr>";
						    echo "<tr>";						    	
						    	echo "<td>&nbsp;</td>";
						    	echo "<td></td>";	
						    	echo "<td></td>";
						    	echo "<td></td>";						    	
						    echo "</tr>";
						echo "</table></div></div><br><br>";						    
					}

					if($found == 0){
						echo "
							<div class='row' style='padding: 200px 0px 200px 0px;'>
						   		<div class='col-md-1'>
						   		</div>
						   		<div class='col-md-2'>
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

	     	<hr>			  	
		  	<div class="row">
		  		<div class="col-sm-10">							
				</div>					
				<div class="col-sm-2w">
					<?php 
						$c = mysqli_query($koneksi,"select count(resid) from product_response where product_name='$product'"); 
						$cr = mysqli_fetch_array($c);
   						$replycount = $cr['count(resid)'];

					?>


					<i class="material-icons" style="font-size: 20px;">comment</i> <?php echo "$replycount"; ?> Comments
				</div>   	
			</div>	
			<?php
				$result = mysqli_query($koneksi,"select *from product_response where product_name='$product'");

				if($result == TRUE){
					while($key = mysqli_fetch_array($result,MYSQLI_BOTH)){
						$tresu = mysqli_query($koneksi,"select name from user where username='".$key['resuser']."'");
						$resu = mysqli_fetch_array($tresu);
						echo "<hr><div class='row'>
								<div class='col-sm-2'>	
									<center><img src='user/profile/".$key['resuser'].".jpg?dummy=8484744' onerror=this.src='img/default_profile.jpg' class='rounded-circle' height=70px' width='70px'/></center>									
								</div>
								<div class='col-sm-10'>	
									<h5>".$resu['name']."</h5>									
									".$key['comment']."
								</div>
							</div>
							";
					}
				}
			?> 	
			<hr>
			<div class="row">
				<div class='col-sm-2'>	
					<center><img src='user/profile/<?php echo $_SESSION['username'] ?>.jpg?dummy=8484744' onerror=this.src='img/default_profile.jpg' class='rounded-circle' height=70px' width='70px'/></center>									
				</div>
				<div class='col-sm-10'>
					<form action="" method="POST">
						<textarea class="form-control" rows="3" name="comment" placeholder="Reply Post.." required></textarea>
						<hr>
						<input class="btn btn-success float-right" type="submit" name="post" value="Post">
					</form>							
				</div>
			</div>


	      	<hr>
	      	<footer>
	      		<div class="row">
	      			<div class="col-md-10">
	      				<p class="display-4" style="font-size: 16px; padding: 4px 0px 8px 0px;">&copy; 2018 Ranggi Rahman</p>
	      			</div>
	      			<div class="col-md-2">
	      				<table class="float-right">
	      					<tr>
	      						<td><a class="btn btn-light btn-sm" href="settings.php" role="button" title="Settings"><i class="material-icons">settings_applications</i></a></td>
	      						<td><form action="" method="post"><button type="submit" class="btn btn-light btn-sm" name="logout" title="Sign Out"><i class="material-icons">exit_to_app</i></button></form></td>
	      					</tr>
	      				</table>
	      			</div>
	      		</div>	        	
	      	</footer>
		</div>

	    <script src="js/jquery.min.js"></script>
	    <script src="js/popper.min.js"></script>
	    <script src="js/bootstrap.js"></script>
	    <script src="js/custom.js"></script> 


	</body>
</html>

<?php
	if(isset($_POST['post'])){

	    $comment = mysql_real_escape_string($_POST['comment']);
	    $result = mysqli_query($koneksi,"insert into product_response(product_name,resuser,comment) values ('$product','".$_SESSION['username']."','$comment')");

	    echo "<meta http-equiv='refresh' content='0'>";
	}
?>
