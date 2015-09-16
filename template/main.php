<body style="margin:0">
<div class="container-fluid">
  	<div class="col-xs-12">
  		<h2 class="text-center">Mine</h2>
  	</div>
  	<div class="col-xs-12">
	  	<button type="button" class="btn btn-lg btn-block">What?</button>
	  	<video id="video" width="100%" autoplay></video>
	  	<br>
	  	<div class="text-center">
	  		<button type="button" id="what" class="btn btn-xl"><span class="glyphicon glyphicon-camera" aria-hidden="true"></span></button>
	  	</div>
		<canvas id="canvas" style="border: 5px solid black;"></canvas>
  	</div>
  	<div class="col-xs-12">
	  	<button type="button" class="btn btn-lg btn-block">Who?<br></button>
	  	<video id="video2" width="100%" autoplay></video>
	  	<br>
	  	<div class="text-center">
	  		<button type="button" id="who" class="btn btn-xl"><span class="glyphicon glyphicon-camera" aria-hidden="true"></span></button>
	  	</div>
		<canvas id="canvas2" style="border: 5px solid black;"></canvas>
  	</div>
</div>
	<form method="POST" action="try.php">
		<input type="hidden" name="what" value="" id="what-form">
		<input type="hidden" name="who" value="" id="who-form">
		<input type="submit" name="deconnexion" value="Me déconnecter">
	</form>
	
</body>