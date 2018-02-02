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

  	include "koneksi.php";
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
	    <title>DSS : Pemilihan Spesifikasi Hardware Komputer</title>
  	</head>

  	<body>
	    <div class="navbar navbar-expand-lg fixed-top navbar-dark bg-primary">
	      	<div class="container">
	        	<a href="index.php" class="navbar-brand"><img src="img/logo.png" class="img-fluid" style="max-width: 5%; and height: auto">&nbsp; Decision Support System</a>

	        	<form class="col-lg-5" action="search.php" method="POST" class="form-inline">
				  	<input class="form-control" name="search" placeholder="Product Search" value="<?php echo $search ?>">
				  	<input type="submit" name="searchsubmit" style="display:none"/>
		        </form>
	      	</div>
	    </div>

	    

		<div class="container" style="padding-top: 60px;">
	      	<div class="row">
	      		<div class="col-md-12">
	      			
				</div>	        	
	     	</div>
	      	<hr>
	      	<footer>
	      		<div class="row">
	      			<div class="col-md-9">
	      				<p class="display-4" style="font-size: 16px; padding: 4px 0px 8px 0px;">&copy; 2018 Ranggi Rahman</p>
	      			</div>
	      			<div class="col-md-3 text-right">
	      				<button type="button" class="btn btn-light btn-sm" onclick="toggleFullScreen()"><i class="material-icons">fullscreen</i></button>
	      				<a class="btn btn-light btn-sm" href="settings.php" role="button"><i class="material-icons">settings</i></a>
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

	    	// fullscreen
			function toggleFullScreen() {
			  	if ((document.fullScreenElement && document.fullScreenElement !== null) || (!document.mozFullScreen && !document.webkitIsFullScreen)) {
				    if (document.documentElement.requestFullScreen) {  
				      	document.documentElement.requestFullScreen();  
				    }else if(document.documentElement.mozRequestFullScreen) {  
				      	document.documentElement.mozRequestFullScreen();  
				    }else if(document.documentElement.webkitRequestFullScreen) {  
				      	document.documentElement.webkitRequestFullScreen(Element.ALLOW_KEYBOARD_INPUT);  
				    }  
			  	}else{  
				    if(document.cancelFullScreen) {  
				      	document.cancelFullScreen();  
				    }else if(document.mozCancelFullScreen) {  
				      	document.mozCancelFullScreen();  
				    }else if(document.webkitCancelFullScreen) {  
				      	document.webkitCancelFullScreen();  
				    }  
			  	}  
			}
	    </script>

	</body>
</html>
