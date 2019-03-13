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
	    <title>Register</title>
  	</head>

  	<body>

	    <?php include "../pages/header.php" ?>

    	<div class="container" style="padding-top: 40px;">
			<div class="row">
	      		<div class="col-md-12">
	      			<div class="card">
					  	<div class="card-header"><i class="material-icons">people</i> Register</div>
					  	<div class="card-body">
					     	<form enctype="multipart/form-data" action="" method="POST">
					  			<div class="row">
					  				<div class="col-md-1"></div>
					  				<div class="col-md-10">
					  					<table class="table table-responsive borderless">
					  						<tr>
					  							<td class="align-middle" width="150px">Email</td>
						  						<td width="250px"><input class="form-control" type="email" name="username" required></td>
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
						  						<td><input class="form-control" type="password" name="password1" required=""></td>
						  						<td width="250px"><input class="form-control" type="password" name="password2" placeholder="Confirm Password" required></td>
						  					</tr>
						  					<tr>
						  						<td class="align-middle">Secret Question</td>
						  						<td colspan="2">
						  							<select class="form-control" name="scq" required>
						  								<option value="1">In what city were you born ?</option>
						  								<option value="2">What is your favorite movie ?</option>
						  								<option value="3">What is your favorite color ?</option>
						  								<option value="4">In what town or city did your mother and father meet ?</option>
						  								<option value="5">What is the name of your favorite pet ?</option>
						  							</select>
						  						</td>
						  						<td width="250px"><input class="form-control" type="text" name="sca" placeholder="Secret Answer" required></td>
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
		$name = $_POST['name'];
	    $organization = $_POST['organization'];	    
	    $scqt = $_POST['scq'];  
	    $scat = $_POST['sca'];  
	    $password1 = $_POST['password1'];
	    $password2 = $_POST['password2'];

	    $c = mysqli_query($koneksi,"select count(username) from user where username='$username'");

	    $cr = mysqli_fetch_array($c);
	    $ci = $cr['count(username)'];

	    if( $ci == 0 ){
	    	if($password1 == $password2){
	    		// md5 encrypted
	    		$password = md5($password1);
	    		$scq = md5($scqt);  
	    		$sca = md5($scat);  
	    		
	    		$result = mysqli_query($koneksi,"insert into user(username,password,name,organization,scq,sca,bcpu,bvga,bssd,storeid) values ('$username','$password','$name','$organization','$scq','$sca','500','400','300','1')");

	    		header("Location: ../pages/login.php");
	    	}else{
		    	$msg = "Password not Correct";
				echo "<script type='text/javascript'>alert('$msg');</script>";
			}		        
	    }else{
	    	$message = "Email Already Registered";
	        echo "<script type='text/javascript'>alert('$message');</script>";
	    }

	    //echo "<meta http-equiv='refresh' content='0'>";		
	}
?>