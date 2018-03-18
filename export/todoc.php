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

	session_start();
	if( $_SESSION['islogin'] != 1){
		header("Location: ../pages/login.php");
	}else if(isset($_POST['logout'])){
	    session_unset();
	    session_destroy();
	    header("Location: ../pages/login.php");
  	}

	include "../db/connection.php";

	$sid = $_GET['s'];

	$result = mysqli_query($koneksi,"select *from user where username='".$_SESSION['username']."'");
	$us = mysqli_fetch_array($result);

	$result = mysqli_query($koneksi,"select *from spesification where sid='$sid'");
	$sr = mysqli_fetch_array($result,MYSQLI_BOTH);

	$epsy = explode(" ", $sr['psyntax']);
	$epsy['2'] = $epsy['2']." where cpuprice <= ".$us['bcpu'];
	$ipsy = implode(" ",$epsy);
	$cpu = mysqli_query($koneksi,$ipsy);

	$evsy = explode(" ", $sr['vsyntax']);
	$evsy['2'] = $evsy['2']." where vgaprice <= ".$us['bvga'];
	$ivsy = implode(" ",$evsy);
	$vga = mysqli_query($koneksi,$ivsy);

	$essy = explode(" ", $sr['ssyntax']);
	$essy['2'] = $essy['2']." where ssdprice <= ".$us['bssd'];
	$issy = implode(" ",$essy);
	$ssd = mysqli_query($koneksi,$issy);

	header("Content-Type: application/vnd.ms-word");
	header("Expires: 0");
	header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
	header("content-disposition: attachment;filename=Choice of Computer Hardware ".$sr['sname']." Specifications.doc");

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv=\"Content-Type\" content=\"text/html; charset=Windows-1252\">
		<link rel="icon" href="../img/favicon.ico">	   
	    <title>Choice of Computer Hardware Specifications</title>
  	</head>
	
	<body>
		
		<center>
		<hr>
		<h2>Choice of Computer Hardware Specifications Result</h2>
		<h4><i>for <?php echo $sr['sname'] ?></i></h4>
		<hr>
		<br>
		<table border="1">
			<tr>
				<th width="50px">Rank</th>
				<th width="100px"></th>
				<th width="200px">Processor</th>
				<th width="200px">VGA</th>
				<th width="200px">SSD</th>
			</tr>
	<?php
		for ($i = 1; $i <= 5; $i++) {
			$rcpu = mysqli_fetch_array($cpu,MYSQLI_BOTH);
			$rvga = mysqli_fetch_array($vga,MYSQLI_BOTH);
			$rssd = mysqli_fetch_array($ssd,MYSQLI_BOTH);
	?>
			<tr>
				<td rowspan="3" align="center"><?php echo $i ?></td>
				<td>Name</td>
				<td><i><?php echo $rcpu['cpuname'] ?></i></td>
				<td><i><?php echo $rvga['vganame'] ?></i></td>
				<td><i><?php echo $rssd['ssdname'] ?></i></td>
			</tr>
			<tr>
				<td>Score</td>
				<td><?php echo $rcpu['cpuscore'] ?></td>
				<td><?php echo $rvga['vgascore'] ?></td>
				<td><?php echo $rssd['ssdscore'] ?></td>
			</tr>
			<tr>
				<td>Price</td>
				<td>$<?php echo $rcpu['cpuprice'] ?></td>
				<td>$<?php echo $rvga['vgaprice'] ?></td>
				<td>$<?php echo $rssd['ssdprice'] ?></td>
			</tr>
	<?php 
		}
	?>
		</table>
		<br>
		<hr>

		<i>Generated on <?php echo date("d-M-Y");?> | &copy; 2018 Ranggi Rahman</i>
		</center>
	</body>
</html>

<?php
?>