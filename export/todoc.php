<?php
/*************************************************
* Filename    : todoc.php
* Programmer  : Ranggi Rahman
* Date        : 2018 - 3 - 16
* Email       : ranggirahman@gmail.com
* Website     : 1400707.blog.upi.edu
* Deskripsi   : Computer Hardware Selector Page
*
**************************************************/

	$specifications = $_GET['s'];



	header("Content-type: application/vnd.ms-word");
	header("Content-Disposition: attachment;Filename=Computer Selector.doc");

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv=\"Content-Type\" content=\"text/html; charset=Windows-1252\">
		<link rel="icon" href="../img/favicon.ico">	   
	    <title>Choice of Computer Hardware Specifications</title>
  	</head>

	
	<body>
		<?php
			echo $specifications;
		?>
	</body>
</html>
<?php
?>