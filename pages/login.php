<?php
/*************************************************
* Filename    : login.php
* Programmer  : Ranggi Rahman
* Date        : 2017 - 12 - 20
* Email       : ranggirahman@gmail.com
* Website     : 1400707.blog.upi.edu
* Deskripsi   : User Login Page
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

  		<div class="fixed-bg"></div>

	    <?php include "../pages/header-noaccess.php" ?>

	    <div class="jumbotron">
	    	<div class="container">	    	
			   	<div class="row">
		          	<div class="col-md-7">
		            	<h1 class="display-4" style="font-size: 64px;">Choice of Computer Hardware Specifications</h1>
		            </div>
		            <div class="col-md-1"></div>
		            <div class="col-md-1" style="border-left:1px solid lightgray;height:auto;"></div>
	            	<div class="col-md-3" style="padding-top: 15px;">            
		            	<form action="" method="POST">
		              	<table>
		                	<tr height="50px">
		                    	<td><input class="form-control" type="user" name="username" placeholder="Username" maxlength="40" size="40" required></td>
		               		</tr>
		               		<tr height="50px">
		                    	<td><input class="form-control" type="password" name="password" placeholder="Password" maxlength="20" size="40" required></td>
		                	</tr>
		                </table>
		                <table>
		                	<tr height="50px">
		                  		<td><input class="btn btn-success" type="submit" name="login" value="Login"></td>
		                  		<td><a class='btn btn-info' href='../pages/register.php' role='button'>Register</a></td>		                		
		                	</tr>                        
		              	</table>
		            	</form>
		          	</div>
		      	</div>
	    	</div>
		</div>

		<div class="container">	      	

	      	<?php include "../pages/footer.php" ?>
	      	
		</div>

	    <script src="../js/jquery.min.js"></script>
	    <script src="../js/popper.min.js"></script>
	    <script src="../js/bootstrap.js"></script>
	    <script src="../js/custom.js"></script> 
	</body>
</html>

<?php
  	if(isset($_POST['login'])){

	    $username = $_POST['username'];
	    $password = md5($_POST['password']);

	    $c = mysqli_query($koneksi,"select count(username) from user where username='$username' and password='$password'");

	    $cr = mysqli_fetch_array($c);
	    $ci = $cr['count(username)'];

	    if( $ci == 1 ){

	        session_start();
	        $_SESSION['username']= $username;
	        $_SESSION['islogin']= 1;

	        var_dump($_SESSION);

	        header("Location: ../index.php");
	    }else{
	    	$message = "Invalid Username or Password";
	        echo "<script type='text/javascript'>alert('$message');</script>";
	    }

  	}
?>