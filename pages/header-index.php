<?php
/*************************************************
* Filename    : header-index.php
* Programmer  : Ranggi Rahman
* Date        : 2018 - 1 - 14
* Email       : ranggirahman@gmail.com
* Website     : 1400707.blog.upi.edu
* Deskripsi   : Header of Index Page
*
**************************************************/
?>

<div class="fixed-bg"></div>

<div class="navbar navbar-expand-lg fixed-top navbar-dark bg-primary">
  	<div class="container">
  		<div class="row">
  			<div class="col-md-8">
  				<div class="font-weight-light"><a href="index.php" class="navbar-brand"><img src="img/logo.png"  style="max-width: 5%; and height: auto">&nbsp; Choice of Computer Hardware Specifications</a></div>
  			</div>
  			<div class="col-md-4">
  				<table>
  					<tr>
  						<td width="288px" style="padding-right: 10px;">
  							<form action="pages/search.php" method="POST">
							  	<input class="form-control" name="search" placeholder="Product Search">
							  	<input type="submit" name="searchsubmit" style="display:none"/>
					        </form>	
  						</td>
  						<td>
			      			<ul class="nav navbar-nav ml-auto">
					            <li class="nav-item dropdown">
								    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="" role="button" aria-haspopup="true" aria-expanded="false"><img src="user/profile/<?php echo $_SESSION['username'] ?>.jpg?dummy=8484744" onerror=this.src="img/default_profile.jpg" class="rounded-circle" height="28px" width="28px" /></a>
								    <div class="dropdown-menu" style="margin-left: -100px;">
								    	<a class="dropdown-item disabled">Hi, <?php echo $_SESSION['username']; ?></a>
								    	<div class="dropdown-divider"></div>
								      	<a class="dropdown-item" href="pages/settings.php">Settings</a>
								      	<a class="dropdown-item" href="index.php?logout=1">Logout</a>
								    </div>
								</li>
					        </ul>
  						</td>
  					</tr>
  				</table>
  			</div>
  		</div>   
  	</div>
</div>