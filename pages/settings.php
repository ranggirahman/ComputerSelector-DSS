<?php
/*************************************************
* Filename    : settings.php
* Programmer  : Ranggi Rahman
* Date        : 2018 - 1 - 14
* Email       : ranggirahman@gmail.com
* Website     : 1400707.blog.upi.edu
* Deskripsi   : User Settings Page
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
	    <title>Settings</title>
  	</head>

  	<body>

	    <?php include "../pages/header.php" ?>	  	    

		<div class="container" style="padding-top: 40px;">
			<div class="card" style="height:790px;">
				<div class="card-header"><i class="material-icons">settings</i> Settings</div>
				<div class="card-body">
					<div class="row">
						<div class="col-md-2 border-right" style="padding-top: 4px; height:700px;">
						  	<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
							  	<a class="nav-link active" data-toggle="pill" href="#tab-profile" role="tab" aria-selected="true"><i class="material-icons">person</i> Profile</a>
							  	<a class="nav-link" data-toggle="pill" href="#tab-settings" role="tab" aria-selected="false"><i class="material-icons">desktop_windows</i> Result</a>

							  	<?php if($us['usertype'] == '2'){// admin access only ?>	     							

							  	<a class="nav-link" data-toggle="pill" href="#tab-product" role="tab" aria-selected="false"><i class="material-icons">view_module</i> Product</a>
							  	<a class="nav-link" data-toggle="pill" href="#tab-store" role="tab" aria-selected="false"><i class="material-icons">shopping_cart</i> Store</a>
							  	<a class="nav-link" data-toggle="pill" href="#tab-spesification" role="tab" aria-selected="false"><i class="material-icons">build</i> Spesification</a>
							  	<a class="nav-link" data-toggle="pill" href="#tab-users" role="tab" aria-selected="false"><i class="material-icons">people</i> Users</a>

							  	<?php } ?>
							</div>
						</div>
						<div class="col-md-10">
							<div class="tab-content" id="v-pills-tabContent">

								<!-- Profile Settings Tab -->
							  	<div class="tab-pane fade show active" id="tab-profile" role="tabpanel">
							  		<form enctype="multipart/form-data" action="" method="POST">
							  			<div class="row" style="height: 630px;">
							  				<div class="col-md-12">
							  					<table class="table table-sm borderless">
							  						<tr>
							  							<td width="10%" rowspan="4">
							  								<div class="card">
							  									<div class="card-body text-center" style="width: 140px;">
							  										<img src="../user/profile/<?php echo $_SESSION['username'] ?>.jpg?dummy=8484744" onerror=this.src="../img/default_profile.jpg" class="rounded-circle" height="80px" width="80px"/>
							  										<input class="btn btn-sm" type="file" name="uploaded_file" style="width: 100%">
							  									</div>
							  								</div>
							  							</td>
							  							<td width="20px" rowspan="4"></td>
							  							<td width="130px" class="align-middle">Username</td>
								  						<td><input class="form-control form-control-sm" type="text" name="username" value="<?php echo($us['username'])?>" disabled></td>
								  						<td rowspan="3"></td>
								  						<td width="200px" rowspan="4"></td>
							  						</tr>
							  						<tr>
								  						<td class="align-middle">Name</td>
								  						<td><input class="form-control form-control-sm" type="text" name="name" value="<?php echo($us['name'])?>"></td>
								  					</tr>
								  					<tr>
								  						<td class="align-middle">Organization</td>
								  						<td><input class="form-control form-control-sm" type="text" name="organization" value="<?php echo($us['organization'])?>"></td>
								  					</tr>
								  					<tr>
								  						<td class="align-middle">Password</td>
								  						<td><input class="form-control form-control-sm" type="password" name="password1" placeholder="Not Change"></td>
								  						<td><input class="form-control form-control-sm" type="password" name="password2" placeholder="Not Change"></td>
								  					</tr>
							  					</table>
							  				</div>
							  			</div>
							  			<hr>	
							  			<div class="row">
							  				<div class="col-md-12 text-right">
							      				<input class="btn btn-sm btn-success" type="submit" name="save" value="Save">
							  				</div>
							  			</div>
									</form>
									<?php
										if(isset($_POST['save'])){

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
												$path = "../user/profile/".$us['username'].".jpg";
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

							  	<!-- Result Settings Tab -->
							  	<div class="tab-pane fade" id="tab-settings" role="tabpanel">
					  				<form action="" method="POST">
							  			<div class="row" style="height: 630px;">
							  				<div class="col-md-12" style="padding-left: 30px;">
									      		<table class="table table-sm borderless">
									      			<tr>
									      				<td class="align-middle" width="200px">Price Limit for CPU</td>
									      				<td width="200px"><input class="form-control form-control-sm" type="number" name="bcpu" value="<?php echo $us['bcpu'] ?>" required></td>
									      				<td rowspan="4"></td>									      				
									      			</tr>
									      			<tr>
									      				<td class="align-middle">Price Limit for VGA</td>
									      				<td><input class="form-control form-control-sm" type="number" name="bvga" value="<?php echo $us['bvga'] ?>" required></td>
									      				<td width="10px"></td>
									      				
									      			</tr>
									      			<tr>
									      				<td class="align-middle">Price Limit for SSD</td>
									      				<td><input class="form-control form-control-sm" type="number" name="bssd" value="<?php echo $us['bssd'] ?>" required></td>
									      			</tr>
									      			<tr>
									      				<td class="align-middle">Store</td>
									      				<td>
										      				<select class="custom-select form-control-sm" name="storeid" >
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
							      				<input class="btn btn-sm btn-success" type="submit" name="apply" value="Apply">
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

							  	<?php if($us['usertype'] == '2'){// admin access only ?>

 								<!-- Product Tab -->
							  	<div class="tab-pane fade" id="tab-product" role="tabpanel">
							  		<ul class="nav nav-tabs" id="myTab" role="tablist">
									  	<li class="nav-item">
										    <a class="nav-link active" data-toggle="tab" href="#dprocessor" role="tab" aria-selected="true"><img src="../img/processor.png" style="max-width: 22px; and height: 22px;"> Processor</a>
										</li>
										<li class="nav-item">
										    <a class="nav-link" data-toggle="tab" href="#dvga" role="tab" aria-selected="false"><img src="../img/vga.png" style="max-width: 22px; and height: 22px;"> VGA</a>
										</li>
										<li class="nav-item">
										    <a class="nav-link" data-toggle="tab" href="#dssd" role="tab" aria-selected="false"><img src="../img/ssd.png" style="max-width: 22px; and height: 22px;"> SSD</a>
										</li>							  								  	
									  	<li class="nav-item">
									    	<a class="nav-link" data-toggle="tab" href="#pdetail" role="tab" aria-selected="true"><i class="material-icons">note</i> Product Detail</a>
									  	</li>						  
									</ul>
									<!-- Product Tab - CPU -->
									<div class="tab-content">	
									  	<div class="tab-pane fade show active" id="dprocessor" role="tabpanel">
									  		<form action="" method="POST">
									  			<div class="row" style="overflow-y: scroll; height:340px;">
									  				<div class="col-sm-12">
									  					<table class="table table-sm">
															<tr class="borderless" style="height: 40px; color: darkslategrey;">
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
								      						<td><a href="../pages/product.php?p=<?php echo $key['cpuname'] ?>" role="button"><?php echo $key['cpuname'] ?></a></td>
								      						<td class="align-middle table-center"><button class="btn btn-sm btn-light" type="submit" name="<?php echo $key['cpuname'] ?>" title="Delete"><i class="material-icons" style="font-size: 16px;">delete</i></button></td>
														</tr>													
									      					
								      				<?php
									      						if(isset($_POST[$key['cpuname']])){
																    $dcpu = $key['cpuname'];

																    $result = mysqli_query($koneksi,"delete from cpu where cpuname = '$dcpu'");

																    $message = "Processor ".$dcpu." was Deleted";
							        								echo "<script type='text/javascript'>alert('$message');</script>";
																    echo "<meta http-equiv='refresh' content='0'>";
																}
															}
														}
													?>
														</table>
									  				</div>					  												  										      			
									      		</div>							      		
										  	</form>										  	
									  		<hr>
										  	<form action="" method="POST">
									  			<div class="row">
									  				<div class="col-md-12">
									  					<table class="table table-sm borderless">
											  				<tr>
											  					<td width="150px" class="align-middle">Processor Name</td>
											      				<td width="60%"><input class="form-control form-control-sm" type="text" name="cpuname" maxlength="100" required></td>
											      				<td width="80px" class="align-middle">Product</td>
											      				<td>
											      					<select class="custom-select form-control-sm" name="pdidcpu" >
												      					<?php
													      					$result = mysqli_query($koneksi,"select *from product_detail");
												    						while($pd = mysqli_fetch_array($result,MYSQLI_BOTH)){
												    							?>

												    							<option value='<?php echo $pd['pdid'] ?>'><?php echo $pd['pdname'] ?></option>

												    							<?php
												    						}
												      					?>
																	</select>
											      				</td>
											      			</tr>
											      		</table>
											      		<table class="table table-sm borderless">
											      			<hr>
											      			<tr>
											      				<td>Performance<input class="form-control form-control-sm" type="number" min="0" max="10" step="0.1" name="performance" maxlength="5" required></td>
											      				<td>Single-Core Performance<input class="form-control form-control-sm" type="number" min="0" max="10" step="0.1" name="single" maxlength="5" required></td>	
											      				<td>Integrated Graphics<input class="form-control form-control-sm" type="number" min="0" max="10" step="0.1" name="intg" maxlength="5" required></td>
											      				<td>Integrated Graphic (OpenCL)<input class="form-control form-control-sm" type="number" min="0" max="10" step="0.1" name="intgocl" maxlength="5" required></td>
											      				</tr>
											      			<tr>
											      				<td>Performance Per Watt<input class="form-control form-control-sm" type="number" min="0" max="10" step="0.1" name="ppw" maxlength="5" required></td>
											      				<td>Value (Pay)<input class="form-control form-control-sm" type="number" min="0" max="10" step="0.1" name="value" maxlength="5" required></td>
											      				<td>Total Score<input class="form-control form-control-sm" type="number" min="0" max="10" step="0.1" name="cpuscore" maxlength="5" required></td>
											      				<td>Price ($)<input class="form-control form-control-sm" type="number" name="cpuprice" required></td>			
											      			</tr>	
										      			</table>
									  				</div>						  												  										      			
									      		</div>
									      		<hr>
									      		<div class="row">
									      			<div class="col-md-12 text-right">
									      				<input class="btn btn-sm btn-success" type="submit" name="cpuadd" value="Add">
									      			</div>							      			
									      		</div>
										  	</form>
										  	<?php
											  	if(isset($_POST['cpuadd'])){

											  		$cpuname = $_POST['cpuname'];
											  		$pdidcpu = $_POST['pdidcpu'];
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
													    $cpuadd = mysqli_query($koneksi,"insert into cpu(cpuname,pdid,performance,single,intg,intgocl,ppw,value,cpuscore,cpuprice) values ('$cpuname','$pdidcpu','$performance','$single','$intg','$intgocl','$ppw','$value','$cpuscore','$cpuprice')");

													    $message = "Processor ".$cpuname." was Added";
				        								echo "<script type='text/javascript'>alert('$message');</script>";
													    echo "<meta http-equiv='refresh' content='0'>";
												    }else if ( $ci >= 1 ) {
											    		$message = "Error : CPU Name Already Exists";
		        										echo "<script type='text/javascript'>alert('$message');</script>";
												    }										    					   
											  	}
											?>						  	
									  	</div>

									  	<!-- Product Tab - VGA -->
									  	<div class="tab-pane fade" id="dvga" role="tabpanel">
									  		<form action="" method="POST">
									  			<div class="row" style="overflow-y: scroll; height:340px;">
									  				<div class="col-sm-12">
									  					<table class="table table-sm">
															<tr class="borderless" style="height: 40px; color: darkslategrey;">
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
								      						<td><a href="../pages/product.php?p=<?php echo $key['vganame'] ?>" role="button"><?php echo $key['vganame'] ?></a></td>
								      						<td class="align-middle table-center"><button class="btn btn-sm btn-light" type="submit" name="<?php echo $key['vganame'] ?>" title="Delete"><i class="material-icons" style="font-size: 16px;">delete</i></button></td>
														</tr>													
									      					
								      				<?php
									      						if(isset($_POST[$key['vganame']])){
																    $dvga = $key['vganame'];

																    $result = mysqli_query($koneksi,"delete from vga where vganame = '$dvga'");

																  	$message = "VGA ".$dvga." was Deleted";
							        								echo "<script type='text/javascript'>alert('$message');</script>";
																    echo "<meta http-equiv='refresh' content='0'>";
																}
															}
														}
													?>
														</table>
									  				</div>						  												  										      			
									      		</div>							      		
										  	</form>
										  	<form action="" method="POST">
								  			<hr>
								  			<div class="row">
								  				<div class="col-md-12">
								  					<table class="table table-sm borderless">
										  				<tr>
										      				<td width="150px" class="align-middle">VGA Name</td>
										      				<td width="60%"><input class="form-control form-control-sm" type="text" name="vganame" maxlength="100" required></td>
										      				<td width="80px" class="align-middle">Product</td>
										      				<td>
										      					<select class="custom-select form-control-sm" name="pdidvga" >
											      					<?php
												      					$result = mysqli_query($koneksi,"select *from product_detail");
											    						while($pd = mysqli_fetch_array($result,MYSQLI_BOTH)){
											    							?>

											    							<option value='<?php echo $pd['pdid'] ?>'><?php echo $pd['pdname'] ?></option>

											    							<?php
											    						}
											      					?>
																</select>
										      				</td>
										      			</tr>
										      		</table>
										      		<table class="table table-sm borderless">
										      			<hr>
										      			<tr>
										      				<td>Gaming<input class="form-control form-control-sm" type="number" min="0" max="10" step="0.1" name="gaming" maxlength="5" required></td>
										      				<td>Graphic<input class="form-control form-control-sm" type="number" min="0" max="10" step="0.1" name="graphics" maxlength="5" required></td>	
										      				<td>Computing<input class="form-control form-control-sm" type="number" min="0" max="10" step="0.1" name="computing" maxlength="5" required></td>
										      				<td>Performance Per Watt<input class="form-control form-control-sm" type="number" min="0" max="10" step="0.1" name="ppw" maxlength="5" required></td>
										      			</tr>
										      			<tr>
										      				<td>Value (Pay)<input class="form-control form-control-sm" type="number" min="0" max="10" step="0.1" name="value" maxlength="5" required></td>
										      				<td>Noise and Power<input class="form-control form-control-sm" type="number" min="0" max="10" step="0.1" name="nap" maxlength="5" required></td>
										      				<td>Total Score<input class="form-control form-control-sm" type="number" min="0" max="10" step="0.1" name="vgascore" maxlength="5" required></td>
										      				<td>Price ($)<input class="form-control form-control-sm" type="number" name="vgaprice" required></td>		
										      			</tr>	
									      			</table>
								  				</div>		
								      		</div>
								      		<hr>
								      		<div class="row">
								      			<div class="col-md-12 text-right">
								      				<input class="btn btn-sm btn-success" type="submit" name="vgaadd" value="Add">
								      			</div>							      			
								      		</div>
									  	</form>
									  	<?php
										  	if(isset($_POST['vgaadd'])){

											    $vganame = $_POST['vganame'];
											    $pdidvga = $_POST['pdidvga'];
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
												    $vgaadd = mysqli_query($koneksi,"insert into vga(vganame,pdid,gaming,graphics,computing,ppw,value,nap,vgascore,vgaprice) values ('$vganame','$pdidvga','$gaming','$graphics','$computing','$ppw','$value','$nap','$vgascore','$vgaprice')");

												    $message = "VGA ".$vganame." was Added";
			        								echo "<script type='text/javascript'>alert('$message');</script>";
												    echo "<meta http-equiv='refresh' content='0'>";
											    }else if ( $ci >= 1 ) {
										    		$message = "Error : VGA Name Already Exists";
	        										echo "<script type='text/javascript'>alert('$message');</script>";
											    }					   
										  	}
										?>	
									  	</div>

									  	<!-- Product Tab - SSD -->
									  	<div class="tab-pane fade" id="dssd" role="tabpanel">
									  		<form action="" method="POST">
									  			<div class="row" style="overflow-y: scroll; height:340px;">
									  				<div class="col-sm-12">
									  					<table class="table table-sm">
															<tr class="borderless" style="height: 40px; color: darkslategrey;">
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
								      						<td><a href="../pages/product.php?p=<?php echo $key['ssdname'] ?>" role="button"><?php echo $key['ssdname'] ?></a></td>
								      						<td class="align-middle table-center"><button class="btn btn-sm btn-light" type="submit" name="<?php echo $key['ssdname'] ?>" title="Delete"><i class="material-icons" style="font-size: 16px;">delete</i></button></td>
														</tr>													
									      					
								      				<?php
									      						if(isset($_POST[$key['ssdname']])){
																    $dssd = $key['ssdname'];
																    $result = mysqli_query($koneksi,"delete from ssd where ssdname = '$dssd'");

																    $message = "SSD ".$dssd." was Deleted";
							        								echo "<script type='text/javascript'>alert('$message');</script>";
																    echo "<meta http-equiv='refresh' content='0'>";
																}
															}
														}
													?>
														</table>
									  				</div>						  												  										      			
									      		</div>							      		
										  	</form>	
								  			<hr>
										  	<form action="" method="POST">
								  			<div class="row">
								  				<div class="col-md-12">
								  					<table class="table table-sm borderless">
										  				<tr>
										      				<td width="150px" class="align-middle">SSD Name</td>
										      				<td width="60%"><input class="form-control form-control-sm" type="text" name="ssdname" maxlength="100" required></td>
										      				<td width="80px" class="align-middle">Product</td>
										      				<td>
										      					<select class="custom-select form-control-sm" name="pdidssd" >
											      					<?php
												      					$result = mysqli_query($koneksi,"select *from product_detail");
											    						while($pd = mysqli_fetch_array($result,MYSQLI_BOTH)){
											    							?>

											    							<option value='<?php echo $pd['pdid'] ?>'><?php echo $pd['pdname'] ?></option>

											    							<?php
											    						}
											      					?>
																</select>
										      				</td>
										      			</tr>
										      		</table>
										      		<table class="table table-sm borderless">
										      			<hr>
										      			<tr>
										      				<td>Read Performance<input class="form-control form-control-sm" type="number" min="0" max="10" step="0.1" name="readp" maxlength="5" required></td>
										      				<td>Write Performance<input class="form-control form-control-sm" type="number" min="0" max="10" step="0.1" name="writep" maxlength="5" required></td>
										      				<td>Real World Benchmarks<input class="form-control form-control-sm" type="number" min="0" max="10" step="0.1" name="realwb" maxlength="5" required></td>
										      				<td>Benchmarks<input class="form-control form-control-sm" type="number" min="0" max="10" step="0.1" name="bench" maxlength="5" required></td>
										      			<tr>
										      				<td>Total Score<input class="form-control form-control-sm" type="number" min="0" max="10" step="0.1" name="ssdscore" maxlength="5" required></td>
										      				<td>Price ($)<input class="form-control form-control-sm" type="number" name="ssdprice" required></td>	
										      			</tr>	
									      			</table>
								  				</div>		
								      		</div>
								      		<hr>
								      		<div class="row">
								      			<div class="col-md-12 text-right">
								      				<input class="btn btn-sm btn-success" type="submit" name="ssdadd" value="Add">
								      			</div>							      			
								      		</div>
									  	</form>
									  	<?php
										  	if(isset($_POST['ssdadd'])){

											    $ssdname = $_POST['ssdname'];
											    $pdidssd = $_POST['pdidssd'];
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
												    $ssdadd = mysqli_query($koneksi,"insert into ssd(ssdname,pdid,readp,writep,realwb,bench,ssdscore,ssdprice) values ('$ssdname','$pdidssd','$readp','$writep','$realwb','$bench','$ssdscore','$ssdprice')");

												    $message = "SSD ".$ssdname." was Added";
			        								echo "<script type='text/javascript'>alert('$message');</script>";
												    echo "<meta http-equiv='refresh' content='0'>";
											    }else if ( $ci >= 1 ) {
										    		$message = "Error : SSD Name Already Exists";
	        										echo "<script type='text/javascript'>alert('$message');</script>";
											    }									    				   
										  	}
										?>
									  	</div>

									  	<!-- Product Tab - Product Detail -->
									  	<div class="tab-pane fade" id="pdetail" role="tabpanel">							  		
									  		<form enctype="multipart/form-data" action="" method="POST">
									  			<form enctype="multipart/form-data" action="" method="POST">
									  			<div class="row" style="overflow-y: scroll; height:580px;">
									  				<div class="col-sm-12">
									  					<table class="table table-sm">
															<tr class="borderless" style="height: 40px; color: darkslategrey;">
																<th class="align-middle text-center" width="20px">Product Id</th>
																<th class="align-middle" width="130px">Product Detail Name</th>
																<th class="align-middle" width="10px">Image</th>
																<th class="align-middle" width="250px">Syntax</th>
																<th width="60px"></th>
															</tr>
									  				<?php 
									      				$pdlist = mysqli_query($koneksi,"select *from product_detail");
									      				if($pdlist == TRUE){
															while($key = mysqli_fetch_array($pdlist,MYSQLI_BOTH)){
																$pn = "pdname".$key['pdid'];
																$pi = "pdimg".$key['pdid'];
																$pq = "pdquery".$key['pdid'];
																$pe = "pdedit".$key['pdid'];
																$pt = "pddelete".$key['pdid'];
													?>	
														<tr>
															<td class="align-middle text-center"><?php echo $key['pdid'] ?></td>
															<td class="align-middle"><input class="form-control form-control-sm" type="text" name="<?php echo $pn ?>" value="<?php echo $key['pdname'] ?>"></td>
															<td class="align-middle"><img src="../<?php echo $key['pdimg'] ?>?dummy=8484744" onerror=this.src="../img/product/Other.png" height="25px" width="25px"/><input class="btn btn-sm" type="file" name="<?php echo $pi ?>" style="width: 70%"></td>
															<td class="align-middle"><input class="form-control form-control-sm" type="text" name="<?php echo $pq ?>" value="<?php echo $key['query'] ?>"></td>								      						
								      						<td class="align-middle table-center"><button class="btn btn-sm btn-light" type="submit" name="<?php echo $pe ?>" title="Save Changes"><i class="material-icons" style="font-size: 16px;">save</i></button>&nbsp;<button class="btn btn-sm btn-light" type="submit" name="<?php echo $pt ?>" title="Delete"><i class="material-icons" style="font-size: 16px;">delete</i></button></td>
														</tr>													
									      					
								      				<?php
								      							if(isset($_POST[$pe]) || isset($_POST[$pt])){

									      							$pdname = $_POST[$pn];
									      							$pdquery = $_POST[$pq];
																    $epd = $key['pdid'];
																	    
										      						if(isset($_POST[$pe])){
																	    $result = mysqli_query($koneksi,"update product_detail set pdname='$pdname', query='$pdquery' where pdid='$epd'");

				        												if (empty($_FILES[$pi]['name'])) {
				        													// No file was selected for upload, your (re)action goes here
																		}else{
																			$path = "../img/product/".$pdname.".png";
																	    	if(move_uploaded_file($_FILES[$pi]['tmp_name'], $path)) {
																	    		// success upload refresh cache
																		    }else{
																		    	$msg = "Problem with photo upload";
									    										echo "<script type='text/javascript'>alert('$msg');</script>";
																		    }
																		}

																	    $message = "Product Name ".$pdname." was Edited";
				        												echo "<script type='text/javascript'>alert('$message');</script>";
																	    echo "<meta http-equiv='refresh' content='0'>";
																	}

										      						if(isset($_POST[$pt])){								      							
																	    $result = mysqli_query($koneksi,"delete from product_detail where pdname='$pdname'");

																	    unlink('../img/product/'.$pdname.'.png');

																	    $message = "Product Name ".$pdname." was Deleted";
				        												echo "<script type='text/javascript'>alert('$message');</script>";
																	    echo "<meta http-equiv='refresh' content='0'>";
																	}
																}
															}
														}
													?>
														</table>
									  				</div>						  												  										      			
									      		</div>
									      	</form>
									      		<form action="" method="POST">
									  			<hr>
									  			<div class="row">
									  				<div class="col-md-12">
									  					<table class="table table-sm borderless">
									  						<tr>
											  					<td width="10px" class="text-center"><i class="material-icons" style="color: darkslategrey; font-size: 30px;">note_add</i></td>
											      				<td width="100px"><input class="form-control form-control-sm" type="text" name="productname" maxlength="20" placeholder="Product Name" required></td>
											      				<td width="60px"><input class="btn btn-sm" type="file" name="pdimg" style="width: 80%"></td>
											      				<td width="150px"><input class="form-control form-control-sm" type="text" name="productsyntax" maxlength="200" placeholder="Syntax" required></td>
											      				<td width="10px" class="text-center"><input class="btn btn-sm btn-success" type="submit" name="productadd" value="Add"></td>
											      			</tr>
									  					</table>
									  				</div>
									  			</div>
												</form>
											<?php
												if(isset($_POST['productadd'])){

												    $productname = $_POST['productname'];
												    $pdimg = "img/product".$_FILES['pdimg']['name'];
												    $productsyntax = $_POST['productsyntax'];

												    $c = mysqli_query($koneksi,"select count(pdname) from product_detail where pdname='$productname'");

												    $cr = mysqli_fetch_array($c);
												    $ci = $cr['count(pdname)'];

												    if( $ci == 0 ){		
													    $result = mysqli_query($koneksi,"insert into product_detail(pdname,pdimg,query) values ('$productname','$pdimg','$productsyntax')");

													    if (empty($_FILES['pdimg']['name'])) {
														    // No file was selected for upload, your (re)action goes here
														}else{
															$path = "../img/product/".$productname.".png";
													    	if(move_uploaded_file($_FILES['pdimg']['tmp_name'], $path)) {
													    		// success upload refresh cache
														    }else{
														    	$msg = "Problem with photo upload";
					    										echo "<script type='text/javascript'>alert('$msg');</script>";
														    }
														}
													    echo "<meta http-equiv='refresh' content='0'>";

													    $message = "Product Name ".$productname." was Added";
				        								echo "<script type='text/javascript'>alert('$message');</script>";
													    echo "<meta http-equiv='refresh' content='0'>";
												    }else if ( $ci >= 1 ) {
											    		$message = "Error : Product Name Already Exists";
		        										echo "<script type='text/javascript'>alert('$message');</script>";
												    }
												}
											?>
									  	</div>
									</div>
							  	</div>

							  	<!-- Store Tab -->
							  	<div class="tab-pane fade" id="tab-store" role="tabpanel">							  		
						  			<div class="row">
						  				<div class="col-sm-12" style="overflow-y: scroll; height:620px;">
						  					<form action="" method="POST">
							  					<table class="table table-sm">
													<tr class="borderless" style="height: 40px; color: darkslategrey;">
														<th width="45px" class="align-middle text-center">Store Id</th>
														<th width="10px" class="align-middle"></th>
														<th width="100px" class="align-middle">Store Name</th>
														<th width="250px" class="align-middle">Syntax</th>
														<th width="50px"></th>
													</tr>
							  				<?php 
							      				$pdlist = mysqli_query($koneksi,"select *from store");
							      				if($pdlist == TRUE){
													while($key = mysqli_fetch_array($pdlist,MYSQLI_BOTH)){
														$stn = "stname".$key['storeid'];
														$sts = "storesyntax".$key['storeid'];
														$sts = "storesyntax".$key['storeid'];														
														$ste = "storeedit".$key['storeid'];
														$std = "storedelete".$key['storeid'];
											?>	
												<tr>
													<td class="align-middle text-center"><?php echo $key['storeid'] ?></td>
													<td class="align-right"><img src="../img/store/<?php echo $key['name'] ?>.ico?dummy=8484744" onerror=this.src="../img/store/Other.png" height="25px" width="25px"/></td>
													<td class="align-middle"><input class="form-control form-control-sm" type="text" name="<?php echo $stn ?>" value="<?php echo $key['name'] ?>"></td>
													<td class="align-middle"><input class="form-control form-control-sm" type="text" name="<?php echo $sts ?>" value="<?php echo $key['query'] ?>"></td>						      						
						      						<td class="align-middle table-center"><button class="btn btn-sm btn-light" type="submit" name="<?php echo $ste ?>" title="Save Changes"><i class="material-icons" style="font-size: 16px;">save</i></button>&nbsp;<button class="btn btn-sm btn-light" type="submit" name="<?php echo $std ?>" title="Delete"><i class="material-icons" style="font-size: 16px;">delete</i></button></td>
												</tr>	
				      						<?php
					      							if(isset($_POST[$ste]) || isset($_POST[$std])){

					      								$stname = $_POST[$stn];
					      								$stsyntax = $_POST[$sts];
							      						$est = $key['storeid'];

					      								if(isset($_POST[$ste])){							      							

														    $result = mysqli_query($koneksi,"update store set name='$stname', query='$stsyntax' where storeid='$est'");

														    $parse = parse_url($stsyntax);
														    $domain = "https://".$parse['host']."/favicon.ico";
														    $favdir = "../img/store/".$stname.".ico";

														    copy( $domain, $favdir );
															
														    $message = "Store ".$stname." was Edited";
	        												echo "<script type='text/javascript'>alert('$message');</script>";
														    echo "<meta http-equiv='refresh' content='0'>";
														}

							      						if(isset($_POST[$std])){
							      							
														    $result = mysqli_query($koneksi,"delete from store where name='$stname'");
														    unlink('../img/store/'.$stname.'.png');

														    $message = "Store ".$stname." was Deleted";
	        												echo "<script type='text/javascript'>alert('$message');</script>";
														    echo "<meta http-equiv='refresh' content='0'>";
														}
					      							}							      						
												}
											}
											?>											
												</table>
											</form>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<form action="" method="POST">
									  			<hr>
									  			<div class="row">
									  				<div class="col-md-12">
									  					<table class="table table-sm borderless">
									  						<tr>
																<td width="45px" class="align-middle table-center"><i class="material-icons" style="color: darkslategrey; font-size: 30px;">add_shopping_cart</i></td>
																<td width="135px"><input class="form-control form-control-sm" type="text" name="storename" maxlength="20" placeholder="Store Name" required></td>
																<td width="220px"><input class="form-control form-control-sm" type="text" name="storesyntax" maxlength="200" placeholder="Syntax" required></td>
																<td width="60px" class="align-middle table-center"><input class="btn btn-sm btn-success" type="submit" name="storeadd" value="Add"></td>
															</tr>	
									  					</table>
									  				</div>
									  			</div>
											</form>
											<?php
												if(isset($_POST['storeadd'])){
												    $storename = $_POST['storename'];
												    $storesyntax = $_POST['storesyntax'];

												    $c = mysqli_query($koneksi,"select count(name) from store where name='$storename'");			
												    $cr = mysqli_fetch_array($c);
												    $ci = $cr['count(name)'];

												    if( $ci == 0 ){		
													    $result = mysqli_query($koneksi,"insert into store(name,query) values ('$storename','$storesyntax')");

													    $parse = parse_url($storesyntax);
													    $domain = "https://".$parse['host']."/favicon.ico";
													    $favdir = "../img/store/".$storename.".ico";

													    copy( $domain, $favdir );

													    $message = "Store Name ".$storename." was Added";
				        								echo "<script type='text/javascript'>alert('$message');</script>";
													    echo "<meta http-equiv='refresh' content='0'>";
												    }else if ( $ci >= 1 ) {
											    		$message = "Error : Store Name Already Exists";
		        										echo "<script type='text/javascript'>alert('$message');</script>";
												    }
												}
											?>
										</div>
									</div>
							  	</div>

							  	<!-- Spesification Tab -->
							  	<div class="tab-pane fade" id="tab-spesification" role="tabpanel">
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
												// spesification information
												$sn = "sname".$sr['sid'];			
												$dc = "sdescription".$sr['sid'];
												$si = "sicon".$sr['sid'];	
										  		$ss = "s".$sr['sid'];

										  		// calculating variable
										  		// cpu
										  		$spcp = "spcp".$sr['sid'];
										  		$spcs = "spcs".$sr['sid'];
										  		$spci = "spci".$sr['sid'];
										  		$spco = "spco".$sr['sid'];
										  		$spcw = "spcw".$sr['sid'];
										  		$spcv = "spcv".$sr['sid'];
										  		$spcg = "spcg".$sr['sid'];
										  		$sc = "cpusyntax".$sr['sid'];

										  		// vga
										  		$spvg = "spvg".$sr['sid'];
										  		$spvr = "spvr".$sr['sid'];
										  		$spvc = "spvc".$sr['sid'];
										  		$spvw = "spvw".$sr['sid'];
										  		$spvv = "spvv".$sr['sid'];
										  		$spvn = "spvn".$sr['sid'];
												$sv = "vgasyntax".$sr['sid'];

												// ssd
												$spsr = "spsr".$sr['sid'];
												$spsw = "spsw".$sr['sid'];
												$spse = "spse".$sr['sid'];
												$spsb = "spsb".$sr['sid'];
												$sd = "ssdsyntax".$sr['sid'];

												// ram
												$sm = "minram".$sr['sid'];
										?>
									  	<div class="tab-pane fade <?php if($sf == 0){echo 'show active';} ?>" id="<?php echo $sr['sid'] ?>" role="tabpanel">
									  		<br>
									  		<form action="" method="POST">
									  			<div class="row" style="height: 560px;">
									  				<div class="col-md-12">
									  					<table class="table table-sm borderless">
											  				<tr>
											      				<td width="20px" class="align-middle">Spesification Name</td>
											      				<td width="250px"><input class="form-control form-control-sm" type="text" name="<?php echo $sn ?>" maxlength="100" value="<?php echo $sr['sname'] ?>" required></td>
											      				<td width="10px" class="align-middle">Icon <a href="https://material.io/icons/" target="_blank" role="button"><span aria-hidden="true"><i class="material-icons" style="font-size: 16px;">open_in_new</i></span></a></td>
											      				<td width="100px"><input class="form-control form-control-sm" type="text" name="<?php echo $si ?>" maxlength="100" value="<?php echo $sr['sicon'] ?>" required></td>
											      			</tr>
											      			<tr>
											      				<td class="align-middle">Description</td>
											      				<td colspan="3"><textarea class="form-control form-control-sm" rows="2" name="<?php echo $dc ?>"><?php echo $sr['description'] ?></textarea></td>
											      			</tr>
											      		</table>
											      		<hr>
											      		<table class="table table-sm borderless">
											      			<tr>
											      				<td width="180px" class="align-middle">Weighting Criteria Processor (%)</td>
											      				<td>Performance All Cores<input class="form-control form-control-sm" type="number" min="0" max="100" step="1" name="<?php echo $spcp ?>" value="<?php echo $sr['pcperformance'] ?>" maxlength="3" required></td>
											      				<td>Single-Core Performance<input class="form-control form-control-sm" type="number" min="0" max="100" step="1" name="<?php echo $spcs ?>" value="<?php echo $sr['pcsingle'] ?>" maxlength="3" required></td>
											      				<td>Integrated Graphic<input class="form-control form-control-sm" type="number" min="0" max="100" step="1" name="<?php echo $spci ?>" value="<?php echo $sr['pcintg'] ?>" maxlength="3" required></td>
											      				<td>Integrated Graphic (OpenCL)<input class="form-control form-control-sm" type="number" min="0" max="100" step="1" name="<?php echo $spco ?>" value="<?php echo $sr['pcintgocl'] ?>" maxlength="3" required></td>
											      				<td>Performance Per Watt<input class="form-control form-control-sm" type="number" min="0" max="100" step="1" name="<?php echo $spcw ?>" value="<?php echo $sr['pcppw'] ?>" maxlength="3" required></td>
											      				<td>Value (Paying for)<input class="form-control form-control-sm" type="number" min="0" max="100" step="1" name="<?php echo $spcv ?>" value="<?php echo $sr['pcvalue'] ?>" maxlength="3" required></td>
											      			</tr>											      				
											      			<tr>
											      				<td class="align-middle">Syntax</td>
											      				<td colspan="6"><input class="form-control form-control-sm" type="text" name="<?php echo $sc ?>" maxlength="300" value="<?php echo $sr['psyntax'] ?>" required></td>
											      			</tr>
											      			<tr>
											      				<td width="180px" class="align-middle">Weighting Criteria VGA (%)</td>
											      				<td>Gaming Performance<input class="form-control form-control-sm" type="number" min="0" max="100" step="1" name="<?php echo $spvg ?>" value="<?php echo $sr['pvgaming'] ?>" maxlength="3" required></td>
											      				<td>Graphic Performance<input class="form-control form-control-sm" type="number" min="0" max="100" step="1" name="<?php echo $spvr ?>" value="<?php echo $sr['pvgraphics'] ?>" maxlength="3" required></td>
											      				<td>Computing Perfomance<input class="form-control form-control-sm" type="number" min="0" max="100" step="1" name="<?php echo $spvc ?>" value="<?php echo $sr['pvcomputing'] ?>" maxlength="3" required></td>
											      				<td>Performance Per Watt<input class="form-control form-control-sm" type="number" min="0" max="100" step="1" name="<?php echo $spvw ?>" value="<?php echo $sr['pvppw'] ?>" maxlength="3" required></td>
											      				<td>Value (Paying for)<input class="form-control form-control-sm" type="number" min="0" max="100" step="1" name="<?php echo $spvv ?>" value="<?php echo $sr['pvvalue'] ?>" maxlength="3" required></td>
											      				<td>Noise and Power<input class="form-control form-control-sm" type="number" min="0" max="100" step="1" name="<?php echo $spvn ?>" value="<?php echo $sr['pvnap'] ?>" maxlength="3" required></td>
											      			</tr>
											      			<tr>
											      				<td class="align-middle">Syntax</td>
											      				<td colspan="6"><input class="form-control form-control-sm" type="text" name="<?php echo $sv ?>" maxlength="300" value="<?php echo $sr['vsyntax'] ?>" required></td>
											      			</tr>
											      			<tr>
											      				<td width="180px" class="align-middle">Weighting Criteria SSD (%)</td>
											      				<td>Read Performance<input class="form-control form-control-sm" type="number" min="0" max="100" step="1" name="<?php echo $spsr ?>" value="<?php echo $sr['psreadp'] ?>" maxlength="3" required></td>
											      				<td>Write Performance<input class="form-control form-control-sm" type="number" min="0" max="100" step="1" name="<?php echo $spsw ?>" value="<?php echo $sr['pswritep'] ?>" maxlength="3" required></td>
											      				<td>Real World Benchmarks<input class="form-control form-control-sm" type="number" min="0" max="100" step="1" name="<?php echo $spse ?>" value="<?php echo $sr['psrealwb'] ?>" maxlength="3" required></td>
											      				<td>Common Benchmarks<input class="form-control form-control-sm" type="number" min="0" max="100" step="1" name="<?php echo $spsb ?>" value="<?php echo $sr['psbench'] ?>" maxlength="3" required></td>
											      			</tr>
											      			</tr>
											      			<tr>
											      				<td class="align-middle">Syntax</td>
											      				<td colspan="6"><input class="form-control form-control-sm" type="text" name="<?php echo $sd ?>" maxlength="300" value="<?php echo $sr['ssyntax'] ?>" required></td>
											      			</tr>
											      			<tr>
											      				<td width="150px" class="align-middle">Minimum RAM</td>
											      				<td width="80px"><input class="form-control form-control-sm" type="number" min="0" step="1" name="<?php echo $sm ?>" maxlength="3" value="<?php echo $sr['mram'] ?>" required></td>
											      				<td class="align-middle">GB</td>
											      			</tr>		
										      			</table>
									  				</div>		
									      		</div>
									      		<hr>
									      		<div class="row">
									      			<div class="col-md-12 text-right">							      				
									      				<input class="btn btn-sm btn-success" type="submit" name="<?php echo $ss?>" value="Change">
									      			</div>							      			
									      		</div>
										  	</form>
										  	<?php
											  	if(isset($_POST[$ss])){
												    $sname = $_POST[$sn];
												    $sdescription = mysql_real_escape_string($_POST[$dc]);
												    $sicon = $_POST[$si];
												    $psyntax = $_POST[$sc];
												    $vsyntax = $_POST[$sv];
												    $ssyntax = $_POST[$sd];
												    $mram = $_POST[$sm];

												    $pcperformance = $_POST[$spcp];
												    $pcsingle = $_POST[$spcs];
												    $pcintg = $_POST[$spci];
												    $pcintgocl = $_POST[$spco];
												    $pcppw = $_POST[$spcw];
												    $pcvalue = $_POST[$spcv];

												    $pvgaming = $_POST[$spvg];
												    $pvgraphics = $_POST[$spvr];
												    $pvcomputing = $_POST[$spvc];
												    $pvppw = $_POST[$spvw];
												    $pvvalue = $_POST[$spvv];
												    $pvnap = $_POST[$spvn];

												    $psreadp = $_POST[$spsr];
												    $pswritep = $_POST[$spsw];
												    $psrealwb = $_POST[$spse];
												    $psbench = $_POST[$spsb];

												    $result = mysqli_query($koneksi,"update spesification set sname='$sname', description='$sdescription', sicon='$sicon', psyntax='$psyntax', vsyntax='$vsyntax', ssyntax='$ssyntax', mram='$mram' , pcperformance='$pcperformance', pcsingle='$pcsingle', pcintg='$pcintg', pcintgocl='$pcintgocl', pcppw='$pcppw', pcvalue='$pcvalue', pvgaming='$pvgaming', pvgraphics='$pvgraphics', pvcomputing='$pvcomputing', pvppw='$pvppw', pvvalue='$pvvalue', pvnap='$pvnap', psreadp='$psreadp', pswritep='$pswritep', psrealwb='$psrealwb', psbench='$psbench' where sid='".$sr['sid']."'");

												    // processor calculating
												    $cpu = mysqli_query($koneksi,"select *from cpu");
								      				while($ckey = mysqli_fetch_array($cpu,MYSQLI_BOTH)){
								      					$ccal = ((($ckey['performance'] * $pcperformance) / 100 ) + (($ckey['single'] * $pcsingle) / 100 ) + (($ckey['intg'] * $pcintg) / 100 ) + (($ckey['intgocl'] * $pcintgocl) / 100 ) + (($ckey['ppw'] * $pcppw) / 100 ) + (($ckey['value'] * $pcvalue) / 100 ));

								      					$cs = "s".$sr['sid'];
								      					$result = mysqli_query($koneksi,"update cpu set $cs=$ccal where cpuid='".$ckey['cpuid']."'");
								      				}

								      				// vga calculating
												    $vga = mysqli_query($koneksi,"select *from vga");
								      				while($vkey = mysqli_fetch_array($vga,MYSQLI_BOTH)){
								      					$vcal = ((($vkey['gaming'] * $pvgaming) / 100 ) + (($vkey['graphics'] * $pvgraphics) / 100 ) + (($vkey['computing'] * $pvcomputing) / 100 ) + (($vkey['ppw'] * $pvppw) / 100 ) + (($vkey['value'] * $pvvalue) / 100 ) + (($vkey['nap'] * $pvnap)/ 100 ));

								      					$vs = "s".$sr['sid'];
								      					$result = mysqli_query($koneksi,"update vga set $vs=$vcal where vgaid='".$vkey['vgaid']."'");
								      				}

								      				// ssdcalculating
												    $ssd = mysqli_query($koneksi,"select *from ssd");
								      				while($skey = mysqli_fetch_array($ssd,MYSQLI_BOTH)){
								      					$scal = ((($skey['readp'] * $psreadp) / 100 ) + (($skey['writep'] * $pswritep) / 100 ) + (($skey['realwb'] * $psrealwb) / 100 ) + (($skey['bench'] * $psbench) / 100 ));

								      					$ds = "s".$sr['sid'];
								      					$result = mysqli_query($koneksi,"update ssd set $ds=$scal where ssdid='".$skey['ssdid']."'");
								      				}

												    $message = "".$sname." Spesification was Edited";
			        								echo "<script type='text/javascript'>alert('$message');</script>";
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

							  	<!-- Users Management Tab -->
							  	<div class="tab-pane fade" id="tab-users" role="tabpanel">
							  		<form action="" method="POST">
							  			<div class="row" style="overflow-y: scroll; height:620px;">
							  				<div class="col-sm-12">
							  					<table class="table table-sm">
													<tr class="borderless" style="height: 40px; color: darkslategrey;">
														<th class="align-middle text-center">User Id</th>
														<th class="align-middle">Usertype</th>
														<th class="align-middle">Username</th>
														<th class="align-middle">Password</th>
														<th class="align-middle">Name</th>
														<th class="align-middle">Organization</th>
														<th></th>
													</tr>
							  				<?php 
							      				$userlist = mysqli_query($koneksi,"select *from user");
							      				if($userlist == TRUE){
													while($key = mysqli_fetch_array($userlist,MYSQLI_BOTH)){
														$ut = "usertype".$key['userid'];
														$ps = "password".$key['userid'];
											?>	
												<tr>
													<td class="align-middle text-center"><?php echo $key['userid'] ?></td>
													<td class="align-middle" width="128px">
														<select class="custom-select form-control-sm" name="<?php echo $ut ?>">
									      					<?php
									    						for ($i=0; $i <= 2; $i++){
									    							?>
									    							<option value='<?php echo $i ?>' <?php if($key['usertype'] == $i){echo 'selected';} ?> ><?php if($i == 0 ){echo "User"; }elseif ($i == 1) {echo "Moderator"; }elseif ($i == 2) {echo "Admin"; } ?></option>

									    							<?php
									    						}
									      					?>
														</select>
													</td>
													<td class="align-middle"><?php echo $key['username'] ?></td>
													<td class="align-middle" width="150px"><input class="form-control form-control-sm" type="password" name="<?php echo $ps ?>" placeholder="Not Change"></td>
													<td class="align-middle"><?php echo $key['name'] ?></td>
													<td class="align-middle"><?php echo $key['organization'] ?></td>
						      						
						      						<td class="align-middle table-center"><button class="btn btn-sm btn-light" type="submit" name="<?php echo $key['userid'] ?>" title="Save Changes"><i class="material-icons" style="font-size: 16px;">save</i></button>&nbsp;<button class="btn btn-sm btn-light" type="submit" name="<?php echo $key['username'] ?>" title="Delete"><i class="material-icons" style="font-size: 16px;">delete</i></button></td>
												</tr>													
							      					
						      				<?php
							      						if(isset($_POST[$key['userid']])){
							      							$usertype = $_POST[$ut];
							      							$password = md5($_POST[$ps]);
														    $euser = $key['userid'];

														    $result = mysqli_query($koneksi,"update user set usertype='$usertype', password='$password' where userid='$euser'");

														    $message = "User ".$key['username']." was Edited";
	        												echo "<script type='text/javascript'>alert('$message');</script>";

														    echo "<meta http-equiv='refresh' content='0'>";
														}

							      						if(isset($_POST[$key['username']])){
							      							// delete from all record table
							      							$result = mysqli_query($koneksi,"delete from product_comment where resuser = '".$key['username']."'");
							      							$result = mysqli_query($koneksi,"delete from product_response where resuser = '".$key['username']."'");
							      							$result = mysqli_query($koneksi,"delete from spesification_response where resuser = '".$key['username']."'");
							      							// delete from user table
														    $result = mysqli_query($koneksi,"delete from user where username = '".$key['username']."'");

														    $message = "User ".$key['username']." was Deleted";
	        												echo "<script type='text/javascript'>alert('$message');</script>";
														    echo "<meta http-equiv='refresh' content='0'>";
														}
													}
												}
											?>
												</table>
							  				</div>						  												  										      			
							      		</div>	
						      		</form>
						      		<form enctype="multipart/form-data" action="" method="POST">
							  			<hr>
							  			<div class="row">
							  				<div class="col-md-12">
							  					<table class="table table-sm borderless">
							  						<tr>
							  							<td width="45px" class="align-middle table-center"><i class="material-icons" style="color: darkslategrey; font-size: 30px;">person_add</i></td>
								  						<td width="150px"><input class="form-control form-control-sm" type="text" name="username" placeholder="Username" required></td>
								  						<td width="200px"><input class="form-control form-control-sm" type="text" name="name" placeholder="Name" required></td>
								  						<td width="200px"><input class="form-control form-control-sm" type="text" name="organization" placeholder="Organization" required></td>
								  						<td width="150px"><input class="form-control form-control-sm" type="password" name="password1" placeholder="Password" required></td>
								  						<td width="150px"><input class="form-control form-control-sm" type="password" name="password2" placeholder="Password" required></td>
								  						<td width=""><input class="btn btn-sm btn-success" type="submit" name="register" value="Register"></td>
							  						</tr>							  						
							  					</table>
							  				</div>
							  			</div>
									</form>
									<?php
										if(isset($_POST['register'])){

											$username = $_POST['username'];		
										    $password1 = $_POST['password1'];
										    $password2 = $_POST['password2'];
											$name = $_POST['name'];
										    $organization = $_POST['organization'];

										    $c = mysqli_query($koneksi,"select count(username) from user where username='$username'");

										    $cr = mysqli_fetch_array($c);
										    $ci = $cr['count(username)'];

										    if( $ci == 0 ){
										    	if($password1 == $password2){
										    		$password = md5($password1);
										    		$result = mysqli_query($koneksi,"insert into user(username,password,name,organization,bcpu,bvga,bssd,storeid) values ('$username','$password','$name','$organization','500','400','300','1')");

										    		$message = "User ".$username." was Added";
			        								echo "<script type='text/javascript'>alert('$message');</script>";
												    echo "<meta http-equiv='refresh' content='0'>";
										    	}else{
											    	$msg = "Password not Correct";
													echo "<script type='text/javascript'>alert('$msg');</script>";
												}		        
										    }else{
										    	$message = "Username Already Taken";
										        echo "<script type='text/javascript'>alert('$message');</script>";
										    }	
										}
									?>
							  	</div>
							  		
							  	<?php } ?>

							</div>
						</div>				
					</div>
				</div>
			</div>			

	      	<?php include "../pages/footer.php" ?>
	      	
		</div>

	    <script src="../js/jquery.min.js"></script>
	    <script src="../js/popper.min.js"></script>
	    <script src="../js/bootstrap.js"></script>
	    <script src="../js/custom.js"></script> 

	    <script type="text/javascript">
	    	// pop over
	    	$(function () {
			  	$('[data-toggle="popover"]').popover()
			})
	    </script>

	</body>
</html>
