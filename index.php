<?php
session_start(); 
?>
<!doctype html>
<?php
require 'template/_header.php';
?>
  <body>
  <?php if(isset($_SESSION['FBID'])){ ?>      <!--  After user login  -->
		<div class="container">
		<div class="hero-unit">
		  <h1>Hello <?php echo $_SESSION['FULLNAME']; ?></h1>
		  <p>Welcome to "facebook login" tutorial</p>
		  </div>
		<div class="span4">
		 <ul class="nav nav-list">
		<li class="nav-header">Image</li>
			<li><img src="https://graph.facebook.com/<?php echo $_SESSION['FBID']; ?>/picture"></li>
		<li class="nav-header">Facebook Nom</li>
		<li><?php echo $_SESSION['FULLNAME']; ?></li>
		<li class="nav-header">Facebook Email</li>
		<li><?php echo $_SESSION['EMAIL']; ?></li>
		<div><a href="facebookconnect/logout.php">Deconnexion</a></div>
		</ul></div></div>
    <?php }else{ ?>  
		<!-- Before login --> 
		<img class="img-login" src="css/img/login.png">
		<div class="container">
			<div class="main-buttons">
				<div class="col-xs-12  text-center">
					<a href="facebookconnect/fbconfig.php" class="btn-fb">Connectez-vous avec Facebook</a>
				</div>
				<div class="col-xs-8 col-xs-offset-2 text-center">
					<a href="dashboard.php" class="pass">Passer cette étape</a>
				</div>
			</div>
		</div>

    <?php }; ?>
  </body>
</html>
