<body>
<div class="container">
  	<div class="col-xs-12">
  		<h2 class="text-center">Mine</h2>
  	</div>
  	<div class="col-xs-12">
	  	<button type="button" class="btn btn-lg btn-block">What?<br><span class="glyphicon glyphicon-camera" aria-hidden="true"></span></button>
	  	<video id="video" width="340" height="240" autoplay class="col-xs-offset-4"></video>
	  	<br>
		<button id="what" class="col-xs-offset-5 col-xs-2">Shoot</button>
		<canvas id="canvas" width="340" height="240" style="border: 5px solid black;"></canvas>
  	</div>
  	<div class="col-xs-12">
	  	<button type="button" class="btn btn-lg btn-block">Who?<br><span class="glyphicon glyphicon-camera" aria-hidden="true"></span></button>
	  	<video id="video2" width="340" height="240" autoplay class="col-xs-offset-4"></video>
	  	<br>
		<button id="who" class="col-xs-offset-5 col-xs-2">Shoot</button>
		<canvas id="canvas2" width="340" height="240" style="border: 5px solid black;"></canvas>
  	</div>
</div>
	<form method="POST" action="try.php">
		<input type="hidden" name="what" value="" id="what-form">
		<input type="hidden" name="who" value="" id="who-form">
		<input type="submit" name="deconnexion" value="Me déconnecter">
	</form>
	
</body>