<?php
/*************************************************
* Filename    : redirect.php
* Programmer  : Ranggi Rahman
* Date        : 2018 - 9 - 6
* Email       : ranggirahman@gmail.com
* Website     : 1400707.blog.upi.edu
* Deskripsi   : Redirect Page (Beta)
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

	    <?php 

	    include "../pages/header-noaccess.php";
	    $link = $_GET['l']; 
	    $parse = parse_url($link);
		$linkimg = "https://".$parse['host']."/favicon.ico";

		?>

    	<div class="container" style="padding-top: 40px;">
			<div class="row">
	      		<div class="col-md-12">
	      			<div class="card">
					  	<div class="card-header text-muted"><i class="material-icons">launch</i> You are leaving DSS-CS, to external site</div>
					  	<div class="card-body">
					     	<div class="row">
					     		<div class="col-md-1">
					     			<img class="float-right" src="<?php echo $linkimg ?>?dummy=8484744" onerror=this.src="../img/store/Other.png" height="25px" width="25px"/>
					     		</div>
					     		<div style="border-left:1px solid lightgray;height:auto;"></div>
					     		<div class="col-md-9">
					     			<?php echo $link; ?>
					     		</div>
					     	</div>
						</div>
						<div class="card-footer">
							<a href="#" onClick="history.go(-1);return true;" class="btn btn-light btn-sm text-muted"><i class="material-icons" style="font-size: 15px;">arrow_back</i> Back to DSS-CS</a>
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