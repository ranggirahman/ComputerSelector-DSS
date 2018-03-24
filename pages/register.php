<?php
/*************************************************
* Filename    : register.php
* Programmer  : Ranggi Rahman
* Date        : 2017 - 12 - 20
* Email       : ranggirahman@gmail.com
* Website     : 1400707.blog.upi.edu
* Deskripsi   : Register Page
*
**************************************************/

	session_start();
	if(array_key_exists('islogin',$_SESSION) && !empty($_SESSION['islogin'])) {
	   	header("Location: ../index.php");
	}

  	include "../db/connection.php";
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

	    <div class="navbar navbar-expand-lg fixed-top navbar-dark bg-primary">
	      	<div class="container">
	        	<a href="../index.php" class="navbar-brand"><img src="../img/logo.png" class="img-fluid" style="max-width: 3%; and height: auto">&nbsp; Choice of Computer Hardware Specifications</a>
	      	</div>
	    </div>

    	<div class="container" style="padding-top: 60px;">
			<div class="row">
	      		<div class="col-md-12">
	      			<div class="card">
					  	<div class="card-header"><i class="material-icons" style="color: grey;">people</i> Register</div>
					  	<div class="card-body">
					     	<form enctype="multipart/form-data" action="" method="POST">
					  			<div class="row">
					  				<div class="col-md-1"></div>
					  				<div class="col-md-10">
					  					<table class="table table-responsive borderless">
					  						<tr>
					  							<td class="align-middle" width="150px">Username</td>
						  						<td width="250px"><input class="form-control" type="text" name="username" required></td>
						  						<td></td>
						  						<td width="200px" rowspan="4"></td>
					  						</tr>
					  						<tr>
						  						<td class="align-middle">Name</td>
						  						<td><input class="form-control" type="text" name="name" required></td>
						  						<td></td>
						  					</tr>
						  					<tr>
						  						<td class="align-middle">Organization</td>
						  						<td><input class="form-control" type="text" name="organization" required></td>
						  						<td></td>
						  					</tr>
						  					<tr>
						  						<td class="align-middle">Password</td>
						  						<td><input class="form-control" type="password" name="password1"</td>
						  						<td width="250px"><input class="form-control" type="password" name="password2"</td>
						  					</tr>
						  					<tr>
						  						<td></td>
						  						<td colspan="2">
						  							<div class="custom-control custom-checkbox mr-sm-2">
												        <input type="checkbox" class="custom-control-input" id="customControlAutosizing" required>
												        <label class="custom-control-label" for="customControlAutosizing">I Agree Terms and Conditions</label>
												    </div>
						  						</td>
						  					</tr>
					  					</table>
					  				</div>
					  				<div class="col-md-1"></div>
					  			</div>
					  			<hr>	
					  			<div class="row">
					  				<div class="col-md-12 text-center">
					      				<input class="btn btn-success" type="submit" name="register" value="Register">
					  				</div>
					  			</div>
							</form>
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
	</body>
</html>

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
	    		$result = mysqli_query($koneksi,"insert into user(username,password,name,organization,bcpu,bvga,bssd,storeid) values ('$username','$password','$name','$organization','1000','1000','1000','1')");

	    		header("Location: ../pages/login.php");
	    	}else{
		    	$msg = "Password not Correct";
				echo "<script type='text/javascript'>alert('$msg');</script>";
			}		        
	    }else{
	    	$message = "Username Already Taken";
	        echo "<script type='text/javascript'>alert('$message');</script>";
	    }		

	    echo "<meta http-equiv='refresh' content='0'>";
	}
?>