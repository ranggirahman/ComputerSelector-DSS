<?php
/*************************************************
* Filename    : forget.php
* Programmer  : Ranggi Rahman
* Date        : 2019 - 03 - 08
* Email       : ranggirahman@gmail.com
* Website     : 1400707.blog.upi.edu
* Deskripsi   : Forget Password Page
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
					  	<div class="card-header"><i class="material-icons">lock</i> Forget Password</div>
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
						  						<td class="align-middle">Secret Question</td>
						  						<td colspan="3">
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
					  					</table>
					  				</div>
					  				<div class="col-md-1"></div>
					  			</div>
					  			<hr>	
					  			<div class="row">
					  				<div class="col-md-12 text-center">
					      				<input class="btn btn-success" type="submit" name="forget" value="Reset Password">
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
	if(isset($_POST['forget'])){

	    $username = $_POST['username'];
	    $scq = md5($_POST['scq']);
	    $sca = md5($_POST['sca']);

	    $c = mysqli_query($koneksi,"select count(username) from user where username='$username' and scq ='$scq' and sca ='$sca'");

	    $cr = mysqli_fetch_array($c);
	    $ci = $cr['count(username)'];

	    if( $ci == 1 ){

	        session_start();
	        $_SESSION['username']= $username;
	        $_SESSION['islogin']= 1;

	        $message = "Please Change Your Password Immediately !";
	        echo "<script type='text/javascript'>alert('$message');</script>";

	        header("Location: ../pages/settings.php");
	    }else{
	    	$message = "Invalid Email or Secret Question";
	        echo "<script type='text/javascript'>alert('$message');</script>";
	    }

  	}
?>