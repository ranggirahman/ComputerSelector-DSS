<?php
/*************************************************
* Filename    : header.php
* Programmer  : Ranggi Rahman
* Date        : 2018 - 1 - 14
* Email       : ranggirahman@gmail.com
* Website     : 1400707.blog.upi.edu
* Deskripsi   : Header of Page
*
**************************************************/

    // get uri
    $uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $uri_segments = explode('/', $uri_path);

    if($uri_segments[2] == "index.php"){
        $dir_link = "";
    }else{
        $dir_link = "../";
    }

    // back reset
    if(isset($search)){
    }else{
        $search ='';
    }

?>

<div class="navbar navbar-expand-lg fixed-top navbar-dark bg-primary">
  	<div class="container d-flex justify-content-between">
        <div class="font-weight-light"><a href="<?php echo $dir_link; ?>index.php" class="navbar-brand"><img src="<?php echo $dir_link; ?>img/logo.png" class="mr-2" style="object-fit:cover; height: 20px; width: 20px;">CoCHS</a>
        </div>
        <?php 
            if( isset($_SESSION['islogin']) ){
                if($_SESSION['islogin'] == 1){
        ?>
            <div class="w-50">
                <form action="<?php echo $dir_link; ?>pages/search.php" method="POST">
                    <div class="input-group">
                        <input type="text" class="form-control form-control border-0" name="search" placeholder="Product Search" value="<?php echo $search ?>">
                        <div class="input-group-append">
                            <button class="btn bg-white" type="submit" name="searchsubmit"><i class="material-icons text-muted">search</i></button>
                        </div>
                    </div>
                </form>  
            </div>
            <div>
                <ul class="nav navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="" role="button" aria-haspopup="true" aria-expanded="false"><img src="<?php echo $dir_link; ?>user/profile/<?php echo $_SESSION['username'] ?>.jpg?dummy=8484744" onerror=this.src="<?php echo $dir_link; ?>img/default_profile.jpg" class="rounded-circle" style="object-fit:cover; height: 25px; width: 25px;" /></a>
                        <div class="dropdown-menu" style="margin-left: -100px;">
                            <a class="dropdown-item disabled">Hi, <?php echo $_SESSION['username']; ?></a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?php echo $dir_link; ?>pages/settings.php">Settings</a>
                            <a class="dropdown-item" href="<?php echo $dir_link; ?>index.php?logout=1">Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        <?php   }
            } ?>
    </div>  
</div>