<?php
session_start(); 
?>
<!doctype html>
<?php
require 'template/_header.php';
?>
  <body>
  <?php if ($_SESSION['FBID']): ?>      <!--  After user login  -->
<div class="container">
<div class="hero-unit">
  <h1>Hello <?php echo $_SESSION['FULLNAME']; ?></h1>
  <p>Welcome to "facebook login" tutorial</p>
  </div>
<div class="span4">
 <ul class="nav nav-list">
<li class="nav-header">Image</li>
	<li><img src="https://graph.facebook.com/<?php echo $_SESSION['FBID']; ?>/picture"></li>
<li class="nav-header">Facebook ID</li>
<li><?php echo  $_SESSION['FBID']; ?></li>
<li class="nav-header">Facebook Nom</li>
<li><?php echo $_SESSION['FULLNAME']; ?></li>
<li class="nav-header">Facebook Email</li>
<li><?php echo $_SESSION['EMAIL']; ?></li>
<div><a href="facebookconnect/logout.php">Deconnexion</a></div>
</ul></div></div>
    <?php else: ?>  
<!-- Before login --> 

<div class="container">
	<div class="col-md-4 col-md-offset-4">
		<a href="facebookconnect/fbconfig.php">Connectez vous avec Facebook</a>
	</div>
	<a href="dashboard.php">Passer cette étape</a>
</div>

    <?php endif ?>
  </body>
</html>
