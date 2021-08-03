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
	    <title>Login</title>
  	</head>

  	<body>

  		<div class="fixed-bg"></div>

	    <?php include "../pages/header.php" ?>

	    <div class="jumbotron">
	    	<div class="container">	    	
			   	<div class="row">
		          	<div class="col-md-7 my-auto">
		            	<h1 class="display-4" style="font-size: 64px;">Choice of Computer Hardware Specifications</h1>
		            </div>
	            	<div class="offset-md-2 col-md-3 my-auto">         
		            	<form action="" method="POST">
		            		<input class="form-control mb-2" type="email" name="username" placeholder="Email" maxlength="40" size="40" required>
		            		<div class="form-group">
                                <div class="input-group border border-black-50 rounded" id="show_hide_password">
                                    <input id="password" name="password" type="password" class="form-control border-0" style="width: 170px;" placeholder="Password" required min="3" pattern=".{3,}" autocomplete="off">
                                    <div class="input-group-addon">
                                        <a class="btn bg-white border-0 px-2" onclick="showpass()"><i class="material-icons text-muted" style="font-size: 18px;" id="pass_indicator">visibility</i></a>
                                    </div>
                                </div>
                            </div>
		            		<input class="btn btn-primary w-100 mb-2" type="submit" name="login" value="Login">
		            		<div class="text-center"><a href="../pages/forget.php" class="text-muted text" style="font-size: 14px;">Forget Password ?</a></div>
		            		<hr>
		            		<a class='btn btn-info w-100' href='../pages/register.php' role='button'>Register</a>
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
	// login logic 
  	if(isset($_POST['login'])){

	    $username = $_POST['username'];
	    $password = md5($_POST['password']);

	    $c = mysqli_query($koneksi,"select count(username) from user where username='$username' and password='$password'");

	    $cr = mysqli_fetch_array($c);
	    $ci = $cr['count(username)'];

	    if( $ci == 1 ){

	    	$qn= mysqli_query($koneksi,"select name from user where username='$username'");
	    	$an = mysqli_fetch_array($qn);
	    	$name = $an['name'];

	    	// new method
	    	session_unset();
		    session_destroy();

	        session_start();

	        $_SESSION['username']= $username;
	        $_SESSION['name']= $name;
	        $_SESSION['islogin']= 1;

	        header("Location: ../index.php");
	    }else{
	    	$message = "Invalid Email or Password";
	        echo "<script type='text/javascript'>alert('$message');</script>";
	    }

  	}
?>

<script type="text/javascript">
	// password show hide logic
	$sp = 0;
	function showpass() {
		if( $sp == 0 ){
			$('#password').prop('type', 'text');
			$('#pass_indicator').html('visibility_off');
			$sp = 1;
		}else{
			$('#password').prop('type', 'password');
			$('#pass_indicator').html('visibility');
			$sp = 0;
		}
	}
</script>