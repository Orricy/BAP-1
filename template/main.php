<body>
	<video id="video" width="640" height="480" autoplay></video>
	<button id="who">Who</button>
	<button id="what">What</button>
	<canvas id="canvas" width="640" height="480" style="border: 5px solid black;"></canvas>
	<form method="POST" action="try.php">
		<input type="hidden" name="what" value="" id="what-form">
		<input type="hidden" name="who" value="" id="who-form">
		<input type="submit" name="deconnexion" value="Me déconnecter">
	</form>
	<video id="video2" width="640" height="480" autoplay></video>
	<canvas id="canvas2" width="640" height="480" style="border: 5px solid black;"></canvas>
</body>