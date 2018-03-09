<?php
/*************************************************
* Filename    : settings.php
* Programmer  : Ranggi Rahman
* Date        : 2018 - 1 - 14
* Email       : ranggirahman@gmail.com
* Website     : 1400707.blog.upi.edu
* Deskripsi   : Settings Page
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
	    <title>Choice of Computer Hardware Specifications</title>
  	</head>

  	<body>
	    <div class="navbar navbar-expand-lg fixed-top navbar-dark bg-primary">
	      	<div class="container">
	        	<a href="index.php" class="navbar-brand"><img src="img/logo.png" class="img-fluid" style="max-width: 5%; and height: auto">&nbsp; Choice of Computer Hardware Specifications</a>

	        	<form class="col-lg-5" action="search.php" method="POST" class="form-inline">
				  	<input class="form-control" name="search" placeholder="Product Search">
				  	<input type="submit" name="searchsubmit" style="display:none"/>
		        </form>
	      	</div>
	    </div>	    

		<div class="container" style="padding-top: 60px;">
			<div class="row">
	      		<div class="col-md-12">
	      			<div class="card">
					  	<div class="card-header"><i class="material-icons" style="color: grey;">people</i> Personalization</div>
					  	<div class="card-body">
					     	<ul class="nav nav-tabs" id="myTab" role="tablist">
							  	<li class="nav-item">
							    	<a class="nav-link active" data-toggle="tab" href="#profile" role="tab" aria-selected="true"><i class="material-icons">portrait</i> Profile</a>
							  	</li>
							  	<li class="nav-item">
							    	<a class="nav-link" data-toggle="tab" href="#settings" role="tab" aria-selected="true"><i class="material-icons">build</i> Settings</a>
							  	</li>						  
							</ul>
							<div class="tab-content">	
							  	<div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="home-tab">							  		
							  		<form enctype="multipart/form-data" action="" method="POST">
							  			<br>
							  			<div class="row">
							  				<div class="col-md-12">
							  					<table class="table table-responsive borderless">
							  						<tr>
							  							<td width="10%" rowspan="4">
							  								<div class="card">
							  									<div class="card-body">
							  										<img src="user/profile/<?php echo $_SESSION['username'] ?>.jpg?dummy=8484744" onerror=this.src="img/default_profile.jpg" class="rounded-circle" height="125px" width="125px"/>
							  									</div>
							  									<div class="card-footer">
							  										<input class="btn btn-sm" type="file" name="uploaded_file" style="width: 80%">
							  									</div>
							  								</div>
							  							</td>
							  							<td width="20px" rowspan="4"></td>
							  							<td class="align-middle">Username</td>
								  						<td><input class="form-control" type="text" name="username" value="<?php echo($us['username'])?>" disabled></td>
								  						<td></td>
								  						<td width="200px" rowspan="4"></td>
							  						</tr>
							  						<tr>
								  						<td class="align-middle">Name</td>
								  						<td><input class="form-control" type="text" name="name" value="<?php echo($us['name'])?>"></td>
								  						<td></td>
								  					</tr>
								  					<tr>
								  						<td class="align-middle">Organization</td>
								  						<td><input class="form-control" type="text" name="organization" value="<?php echo($us['organization'])?>"></td>
								  						<td></td>
								  					</tr>
								  					<tr>
								  						<td class="align-middle">Password</td>
								  						<td><input class="form-control" type="password" name="password1" placeholder="Not Change"></td>
								  						<td><input class="form-control" type="password" name="password2" placeholder="Not Change"></td>
								  					</tr>
							  					</table>
							  				</div>
							  			</div>
							  			<hr>	
							  			<div class="row">
							  				<div class="col-md-12 text-right">
							      				<input class="btn btn-success" type="submit" name="update" value="Update">
							  				</div>
							  			</div>
									</form>
									<?php
										if(isset($_POST['update'])){

										    $name = $_POST['name'];
										    $organization = $_POST['organization'];
										    $password1 = $_POST['password1'];
										    $password2 = $_POST['password2'];

										    $result = mysqli_query($koneksi,"update user set name='$name', organization='$organization' where username='".$_SESSION['username']."'");

										    if($password1 != ''){
										    	if($password1 == $password2){
										    		$password = md5($password1);
										    		$result = mysqli_query($koneksi,"update user set password='$password' where username='".$_SESSION['username']."'");
												}else{
											    	$msg = "Password not Correct";
		    										echo "<script type='text/javascript'>alert('$msg');</script>";
												}
										    }

										    if (empty($_FILES['uploaded_file']['name'])) {
											    // No file was selected for upload, your (re)action goes here
											}else{
												$path = "user/profile/".$us['username'].".jpg";
										    	if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
										    		// success upload refresh cache
											    }else{
											    	$msg = "Problem with photo upload";
		    										echo "<script type='text/javascript'>alert('$msg');</script>";
											    }
											}
										    echo "<meta http-equiv='refresh' content='0'>";
										}
									?>
							  	</div>
							  	<div class="tab-pane fade" id="settings" role="tabpanel" aria-labelledby="profile-tab">
							  		<form action="" method="POST">
							  			<br>
							  			<div class="row">
							  				<div class="col-md-12">
									      		<table class="table table-responsive borderless">
									      			<tr>
									      				<td class="align-middle" width="150px">Budget for CPU</td>
									      				<td><input class="form-control" type="number" name="bcpu" value="<?php echo $us['bcpu'] ?>" required></td>
									      				<td class="align-middle" width="150px">Budget for VGA</td>
									      				<td><input class="form-control" type="number" name="bvga" value="<?php echo $us['bvga'] ?>" required></td>
									      				<td class="align-middle" width="150px">Budget for SSD</td>
									      				<td><input class="form-control" type="number" name="bssd" value="<?php echo $us['bssd'] ?>" required></td>
									      			</tr>
									      			<tr>
									      				<td class="align-middle">Store</td>
									      				<td>
										      				<select class="custom-select" name="storeid" >
										      					<?php
											      					$result = mysqli_query($koneksi,"select *from store");
										    						while($st = mysqli_fetch_array($result,MYSQLI_BOTH)){
										    							?>

										    							<option value='<?php echo $st['storeid'] ?>' <?php if($us['storeid'] == $st['storeid']){echo 'selected';} ?> ><?php echo $st['name'] ?></option>

										    							<?php
										    						}
										      					?>
															</select>
														</td>
									      			</tr>	
								      			</table>
							  				</div>						  												  										      			
							      		</div>
							      		<hr>
							      		<div class="row">
							      			<div class="col-md-12 text-right">
							      				<input class="btn btn-success" type="submit" name="apply" value="Apply">
							      			</div>							      			
							      		</div>
								  	</form>
								  	<?php
									  	if(isset($_POST['apply'])){

										    $bcpu = $_POST['bcpu'];
										    $bvga = $_POST['bvga'];
										    $bssd = $_POST['bssd'];
										    $storeid = $_POST['storeid'];

										  	$result = mysqli_query($koneksi,"update user set bcpu='$bcpu', bvga='$bvga', bssd='$bssd', storeid='$storeid' where username='".$_SESSION['username']."'");

										    echo "<meta http-equiv='refresh' content='0'>";						   
									  	}
									?>		
							  	</div>
							</div>
						</div>
					</div>
				</div>	        	
	     	</div>


	     	<?php if($us['usertype'] == '1'){
	     	?>

	     	<br><br>
	     	
	      	<div class="row">
	      		<div class="col-md-12">
	      			<div class="card">
					  	<div class="card-header"><i class="material-icons" style="color: grey;">add_box</i> Add Product</div>
					  	<div class="card-body">
						    <ul class="nav nav-tabs" id="myTab" role="tablist">
							  <li class="nav-item">
							    <a class="nav-link active" data-toggle="tab" href="#processor" role="tab" aria-selected="true"><img src="img/processor.png" style="max-width: 28px; and height: 28px;"> Processor</a>
							  </li>
							  <li class="nav-item">
							    <a class="nav-link" data-toggle="tab" href="#vga" role="tab" aria-selected="false"><img src="img/vga.png" style="max-width: 28px; and height: 28px;"> Video Graphic Array</a>
							  </li>
							  <li class="nav-item">
							    <a class="nav-link" data-toggle="tab" href="#ssd" role="tab" aria-selected="false"><img src="img/ssd.png" style="max-width: 28px; and height: 28px;"> Solid State Disk</a>
							  </li>
							</ul>
							<div class="tab-content">
							  	<div class="tab-pane fade show active" id="processor" role="tabpanel">
							  		<form action="" method="POST">
							  			<br>
							  			<div class="row">
							  				<div class="col-md-12">
							  					<table class="table borderless">
									  				<tr>
									      				<td width="150px" class="align-middle">Processor Name</td>
									      				<td><input class="form-control" type="text" name="cpuname" maxlength="100" required></td>
									      			</tr>
									      		</table>
									      		<hr>
									      		<table class="table table-responsive borderless">
									      			<tr>
									      				<td width="150px">Performance</td>
									      				<td><input class="form-control" type="number" min="0" max="10" step="0.1" name="performance" maxlength="5" required></td>
									      				<td>Single-Core Performance</td>
									      				<td><input class="form-control" type="number" min="0" max="10" step="0.1" name="single" maxlength="5" required></td>	
									      				<td>Integrated Graphics</td>
									      				<td><input class="form-control" type="number" min="0" max="10" step="0.1" name="intg" maxlength="5" required></td>
									      				<td>Integrated Graphic (OpenCL)</td>
									      				<td><input class="form-control" type="number" min="0" max="10" step="0.1" name="intgocl" maxlength="5" required></td>
									      				</tr>
									      			<tr>
									      				<td>Performance Per Watt</td>
									      				<td><input class="form-control" type="number" min="0" max="10" step="0.1" name="ppw" maxlength="5" required></td>
									      				<td>Value (Pay)</td>
									      				<td><input class="form-control" type="number" min="0" max="10" step="0.1" name="value" maxlength="5" required></td>
									      				<td>Total Score</td>
									      				<td><input class="form-control" type="number" min="0" max="10" step="0.1" name="cpuscore" maxlength="5" required></td>
									      				<td>Price ($)</td>
									      				<td><input class="form-control" type="number" name="cpuprice" required></td>			
									      			</tr>	
								      			</table>
							  				</div>						  												  										      			
							      		</div>
							      		<hr>
							      		<div class="row">
							      			<div class="col-md-12 text-right">
							      				<input class="btn btn-success" type="submit" name="cpuadd" value="Add">
							      			</div>							      			
							      		</div>
								  	</form>
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
										    $cpuprice = $_POST['cpuprice'];

									  		$c = mysqli_query($koneksi,"select count(cpuname) from cpu where cpuname='$cpuname'");

										    $cr = mysqli_fetch_array($c);
										    $ci = $cr['count(cpuname)'];

										    if( $ci == 0 ){		
											    $cpuadd = mysqli_query($koneksi,"insert into cpu(cpuname,performance,single,intg,intgocl,ppw,value,cpuscore,cpuprice) values ('$cpuname','$performance','$single','$intg','$intgocl','$ppw','$value','$cpuscore','$cpuprice')");

											    echo "<meta http-equiv='refresh' content='0'>";
										    }else if ( $ci >= 1 ) {
									    		$message = "Error : CPU Name Already Exists";
        										echo "<script type='text/javascript'>alert('$message');</script>";
										    }										    					   
									  	}
									?>							  		
							  	</div>
							  	<div class="tab-pane fade" id="vga" role="tabpanel">
							  		<form action="" method="POST">
							  			<br>
							  			<div class="row">
							  				<div class="col-md-12">
							  					<table class="table borderless">
									  				<tr>
									      				<td width="150px" class="align-middle">VGA Name</td>
									      				<td><input class="form-control" type="text" name="vganame" maxlength="100" required></td>
									      			</tr>
									      		</table>
									      		<hr>
									      		<table class="table borderless">
									      			<tr>
									      				<td width="150px">Gaming</td>
									      				<td><input class="form-control" type="number" min="0" max="10" step="0.1" name="gaming" maxlength="5" required></td>
									      				<td>Graphic</td>
									      				<td><input class="form-control" type="number" min="0" max="10" step="0.1" name="graphics" maxlength="5" required></td>	
									      				<td>Computing</td>
									      				<td><input class="form-control" type="number" min="0" max="10" step="0.1" name="computing" maxlength="5" required></td>
									      				<td>Performance Per Watt</td>
									      				<td><input class="form-control" type="number" min="0" max="10" step="0.1" name="ppw" maxlength="5" required></td>
									      				</tr>
									      			<tr>
									      				<td>Value (Pay)</td>
									      				<td><input class="form-control" type="number" min="0" max="10" step="0.1" name="value" maxlength="5" required></td>
									      				<td>Noise and Power</td>
									      				<td><input class="form-control" type="number" min="0" max="10" step="0.1" name="nap" maxlength="5" required></td>
									      				<td>Total Score</td>
									      				<td><input class="form-control" type="number" min="0" max="10" step="0.1" name="vgascore" maxlength="5" required></td>
									      				<td>Price ($)</td>
									      				<td><input class="form-control" type="number" name="vgaprice" required></td>		
									      			</tr>	
								      			</table>
							  				</div>		
							      		</div>
							      		<hr>
							      		<div class="row">
							      			<div class="col-md-12 text-right">
							      				<input class="btn btn-success" type="submit" name="vgaadd" value="Add">
							      			</div>							      			
							      		</div>
								  	</form>
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
										    $vgaprice = $_POST['vgaprice'];

										    $c = mysqli_query($koneksi,"select count(vganame) from vga where vganame='$vganame'");

										    $cr = mysqli_fetch_array($c);
										    $ci = $cr['count(vganame)'];

										    if( $ci == 0 ){		
											    $vgaadd = mysqli_query($koneksi,"insert into vga(vganame,gaming,graphics,computing,ppw,value,nap,vgascore,vgaprice) values ('$vganame','$gaming','$graphics','$computing','$ppw','$value','$nap','$vgascore','$vgaprice')");

											    echo "<meta http-equiv='refresh' content='0'>";
										    }else if ( $ci >= 1 ) {
									    		$message = "Error : VGA Name Already Exists";
        										echo "<script type='text/javascript'>alert('$message');</script>";
										    }					   
									  	}
									?>
							  	</div>
							  	<div class="tab-pane fade" id="ssd" role="tabpanel">
							  		<form action="" method="POST">
							  			<br>
							  			<div class="row">
							  				<div class="col-md-12">
							  					<table class="table borderless">
									  				<tr>
									      				<td width="150px" class="align-middle">SSD Name</td>
									      				<td><input class="form-control" type="text" name="ssdname" maxlength="100" required></td>
									      			</tr>
									      		</table>
									      		<hr>
									      		<table class="table borderless">
									      			<tr>
									      				<td width="150px">Read Performance</td>
									      				<td><input class="form-control" type="number" min="0" max="10" step="0.1" name="readp" maxlength="5" required></td>
									      				<td>Write Performance</td>
									      				<td><input class="form-control" type="number" min="0" max="10" step="0.1" name="writep" maxlength="5" required></td>	
									      				<td>Real World Benchmarks</td>
									      				<td><input class="form-control" type="number" min="0" max="10" step="0.1" name="realwb" maxlength="5" required></td>
									      				<td>Benchmarks</td>
									      				<td><input class="form-control" type="number" min="0" max="10" step="0.1" name="bench" maxlength="5" required></td>
									      			<tr>
									      				<td>Total Score</td>
									      				<td><input class="form-control" type="number" min="0" max="10" step="0.1" name="ssdscore" maxlength="5" required></td>
									      				<td>Price ($)</td>
									      				<td><input class="form-control" type="number" name="ssdprice" required></td>	
									      			</tr>	
								      			</table>
							  				</div>		
							      		</div>
							      		<hr>
							      		<div class="row">
							      			<div class="col-md-12 text-right">
							      				<input class="btn btn-success" type="submit" name="ssdadd" value="Add">
							      			</div>							      			
							      		</div>
								  	</form>
								  	<?php
									  	if(isset($_POST['ssdadd'])){

										    $ssdname = $_POST['ssdname'];
										    $readp = $_POST['readp'];
										    $writep = $_POST['writep'];
										    $realwb = $_POST['realwb'];
										    $bench = $_POST['bench'];
										    $ssdscore = $_POST['ssdscore'];
										    $ssdprice = $_POST['ssdprice'];

										    $c = mysqli_query($koneksi,"select count(ssdname) from ssd where ssdname='$ssdname'");

										    $cr = mysqli_fetch_array($c);
										    $ci = $cr['count(ssdname)'];

										    if( $ci == 0 ){		
											    $ssdadd = mysqli_query($koneksi,"insert into ssd(ssdname,readp,writep,realwb,bench,ssdscore,ssdprice) values ('$ssdname','$readp','$writep','$realwb','$bench','$ssdscore','$ssdprice')");

											    echo "<meta http-equiv='refresh' content='0'>";
										    }else if ( $ci >= 1 ) {
									    		$message = "Error : SSD Name Already Exists";
        										echo "<script type='text/javascript'>alert('$message');</script>";
										    }									    				   
									  	}
									?>
							  	</div>
							</div>
					  	</div>
					</div>
				</div>	        	
	     	</div>

	      	<br><br>

	      	<div class="row">
	      		<div class="col-md-12">
	      			<div class="card">
					  	<div class="card-header"><i class="material-icons" style="color: grey;">delete_sweep</i> Remove Product</div>
					  	<div class="card-body">
						    <ul class="nav nav-tabs" id="myTab" role="tablist">
							  <li class="nav-item">
							    <a class="nav-link active" data-toggle="tab" href="#dprocessor" role="tab" aria-selected="true"><img src="img/processor.png" style="max-width: 28px; and height: 28px;"> Processor</a>
							  </li>
							  <li class="nav-item">
							    <a class="nav-link" data-toggle="tab" href="#dvga" role="tab" aria-selected="false"><img src="img/vga.png" style="max-width: 28px; and height: 28px;"> Video Graphic Array</a>
							  </li>
							  <li class="nav-item">
							    <a class="nav-link" data-toggle="tab" href="#dssd" role="tab" aria-selected="false"><img src="img/ssd.png" style="max-width: 28px; and height: 28px;"> Solid State Disk</a>
							  </li>
							</ul>
							<div class="tab-content">
							  	<div class="tab-pane fade show active" id="dprocessor" role="tabpanel">
							  		<form action="" method="POST">
							  			<div class="row" style="overflow-y: scroll; height:358px;">
							  				<div class="col-sm-12">
							  					<table class="table table-sm">
													<tr style="height: 40px;">
														<th class="align-middle table-center">No.</th>
														<th class="align-middle">Product Name</th>
														<th></th>
													</tr>
							  				<?php 
							      				$cpu = mysqli_query($koneksi,"select *from cpu");

							      				$i = 0;
							      				if($cpu == TRUE){
													while($key = mysqli_fetch_array($cpu,MYSQLI_BOTH)){
														$i++;
											?>	
												<tr>
													<td class="align-middle table-center"><?php echo $i ?></td>
						      						<td><a href="product.php?p=<?php echo $key['cpuname'] ?>" role="button"><?php echo $key['cpuname'] ?> <span aria-hidden="true"><i class="material-icons" style="font-size: 16px;">open_in_new</i></span></a></td>
						      						<td class="align-middle table-center"><button class="btn btn-sm btn-warning" type="submit" name="<?php echo $key['cpuname'] ?>" title="Delete"><i class="material-icons" style="font-size: 16px;">delete</i></button></td>
												</tr>													
							      					
						      				<?php
							      						if(isset($_POST[$key['cpuname']])){
														    $dcpu = $key['cpuname'];

														    $result = mysqli_query($koneksi,"delete from cpu where cpuname = '$dcpu'");

														    echo "<meta http-equiv='refresh' content='0'>";
														}
													}
												}
											?>
												</table>
							  				</div>						  												  										      			
							      		</div>							      		
								  	</form>						  	
							  	</div>
							  	<div class="tab-pane fade" id="dvga" role="tabpanel">
							  		<form action="" method="POST">
							  			<div class="row" style="overflow-y: scroll; height:358px;">
							  				<div class="col-sm-12">
							  					<table class="table table-sm">
													<tr style="height: 40px;">
														<th class="align-middle table-center">No.</th>
														<th class="align-middle">Product Name</th>
														<th></th>
													</tr>
							  				<?php 
							      				$vga = mysqli_query($koneksi,"select *from vga");

							      				$i = 0;
							      				if($vga == TRUE){
													while($key = mysqli_fetch_array($vga,MYSQLI_BOTH)){
														$i++;
											?>	
												<tr>
													<td class="align-middle table-center"><?php echo $i ?></td>
						      						<td><a href="product.php?p=<?php echo $key['vganame'] ?>" role="button"><?php echo $key['vganame'] ?> <span aria-hidden="true"><i class="material-icons" style="font-size: 16px;">open_in_new</i></span></a></td>
						      						<td class="align-middle table-center"><button class="btn btn-sm btn-warning" type="submit" name="<?php echo $key['vganame'] ?>" title="Delete"><i class="material-icons" style="font-size: 16px;">delete</i></button></td>
												</tr>													
							      					
						      				<?php
							      						if(isset($_POST[$key['vganame']])){
														    $dvga = $key['vganame'];

														    $result = mysqli_query($koneksi,"delete from vga where vganame = '$dvga'");

														    echo "<meta http-equiv='refresh' content='0'>";
														}
													}
												}
											?>
												</table>
							  				</div>						  												  										      			
							      		</div>							      		
								  	</form>	
							  	</div>
							  	<div class="tab-pane fade" id="dssd" role="tabpanel">
							  		<form action="" method="POST">
							  			<div class="row" style="overflow-y: scroll; height:358px;">
							  				<div class="col-sm-12">
							  					<table class="table table-sm">
													<tr style="height: 40px;">
														<th class="align-middle table-center">No.</th>
														<th class="align-middle">Product Name</th>
														<th></th>
													</tr>
							  				<?php 
							      				$ssd = mysqli_query($koneksi,"select *from ssd");

							      				$i = 0;
							      				if($ssd == TRUE){
													while($key = mysqli_fetch_array($ssd,MYSQLI_BOTH)){
														$i++;
											?>	
												<tr>
													<td class="align-middle table-center"><?php echo $i ?></td>
						      						<td><a href="product.php?p=<?php echo $key['ssdname'] ?>" role="button"><?php echo $key['ssdname'] ?> <span aria-hidden="true"><i class="material-icons" style="font-size: 16px;">open_in_new</i></span></a></td>
						      						<td class="align-middle table-center"><button class="btn btn-sm btn-warning" type="submit" name="<?php echo $key['ssdname'] ?>" title="Delete"><i class="material-icons" style="font-size: 16px;">delete</i></button></td>
												</tr>													
							      					
						      				<?php
							      						if(isset($_POST[$key['ssdname']])){
														    $dssd = $key['ssdname'];

														    $result = mysqli_query($koneksi,"delete from ssd where ssdname = '$dssd'");

														    echo "<meta http-equiv='refresh' content='0'>";
														}
													}
												}
											?>
												</table>
							  				</div>						  												  										      			
							      		</div>							      		
								  	</form>	
							  	</div>

							</div>
					  	</div>
					</div>
				</div>	        	
	     	</div>

	      	<br><br>

	      	<div class="row">
	      		<div class="col-md-12">
	      			<div class="card">
					  	<div class="card-header"><i class="material-icons" style="color: grey;">edit</i> Edit Spesification</div>
					  	<div class="card-body">
					     	<ul class="nav nav-tabs" id="myTab" role="tablist">
					     		<?php
					     			$stab = mysqli_query($koneksi,"select *from spesification");
					     			$sf = 0;
									while($sr = mysqli_fetch_array($stab,MYSQLI_BOTH)){
								?>
							  	<li class="nav-item">
							    	<a class="nav-link <?php if($sf == 0){echo 'active';} ?>" data-toggle="tab" href="#<?php echo $sr['sid'] ?>" role="tab" aria-selected="true"><i class="material-icons"><?php echo $sr['sicon'] ?></i> <?php echo $sr['sname'] ?></a>
							  	</li>
							  	<?php
							  		$sf = 1;
							  		}
							  	?>							  
							</ul>
							<div class="tab-content">
								<?php
									$scon = mysqli_query($koneksi,"select *from spesification");
					     			$sf = 0;
									while($sr = mysqli_fetch_array($scon,MYSQLI_BOTH)){
										$sn = "sname".$sr['sid'];
										$si = "sicon".$sr['sid'];
										$sc = "cpusyntax".$sr['sid'];
										$sv = "vgasyntax".$sr['sid'];
										$sd = "ssdsyntax".$sr['sid'];
								  		$ss = "s".$sr['sid'];
								?>
							  	<div class="tab-pane fade <?php if($sf == 0){echo 'show active';} ?>" id="<?php echo $sr['sid'] ?>" role="tabpanel">
							  		<form action="" method="POST">
							  			<div class="row">
							  				<div class="col-md-12">
							  					<br>
							  					<table class="table borderless">
									  				<tr>
									      				<td width="180px" class="align-middle">Spesification Name</td>
									      				<td width="55%"><input class="form-control" type="text" name="<?php echo $sn ?>" maxlength="100" value="<?php echo $sr['sname'] ?>" required></td>
									      				<td class="align-middle">Icon</td>
									      				<td><input class="form-control" type="text" name="<?php echo $si ?>" maxlength="100" value="<?php echo $sr['sicon'] ?>" required></td>
									      			</tr>
									      		</table>
									      		<hr>
									      		<table class="table borderless">
									      			<tr>
									      				<td width="180px" class="align-middle">Processor Syntax</td>
									      				<td><input class="form-control" type="text" name="<?php echo $sc ?>" maxlength="300" value="<?php echo $sr['psyntax'] ?>" required></td>
									      			<tr>
									      				<td width="150px" class="align-middle">VGA Syntax</td>
									      				<td><input class="form-control" type="text" name="<?php echo $sv ?>" maxlength="300" value="<?php echo $sr['vsyntax'] ?>" required></td>
									      			</tr>
									      			<tr>
									      				<td width="150px" class="align-middle">SSD Syntax</td>
									      				<td><input class="form-control" type="text" name="<?php echo $sd ?>" maxlength="300" value="<?php echo $sr['ssyntax'] ?>" required></td>
									      			</tr>		
								      			</table>
							  				</div>		
							      		</div>
							      		<hr>
							      		<div class="row">
							      			<div class="col-md-12 text-right">							      				
							      				<input class="btn btn-success" type="submit" name="<?php echo $ss?>" value="Save">
							      			</div>							      			
							      		</div>
								  	</form>
								  	<?php
									  	if(isset($_POST[$ss])){
										    $sname = $_POST[$sn];
										    $sicon = $_POST[$si];
										    $psyntax = $_POST[$sc];
										    $vsyntax = $_POST[$sv];
										    $ssyntax = $_POST[$sd];

										    $result = mysqli_query($koneksi,"update spesification set sname='$sname', sicon='$sicon', psyntax='$psyntax', vsyntax='$vsyntax', ssyntax='$ssyntax' where sid='".$sr['sid']."'");

										    echo "<meta http-equiv='refresh' content='0'>";
										}
									?>
							  	</div>
							  	<?php
							  		$sf = 1;
							  		}
							  	?>
							</div>
					  	</div>
					</div>
				</div>	        	
	     	</div>
	     	
	     	<?php 	}   ?>

	     	<br><hr>

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

	    <script type="text/javascript">
	    	// pop over
	    	$(function () {
			  	$('[data-toggle="popover"]').popover()
			})
	    </script>

	</body>
</html>
