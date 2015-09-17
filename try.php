<?php
require 'config/config.php';
require('model/functions.fn.php');

if (isset($_POST["what"]) && isset($_POST["who"])) {
	if (!empty($_POST["what"]) && !empty($_POST["who"])) {
		//echo $_POST["what"];
		//prepare what image
		$img = $_POST['what'];
		$img = str_replace('data:image/png;base64,', '', $img);
		$img = str_replace(' ', '+', $img);
		$fileData = base64_decode($img);

		//echo $_POST["who"];
		//prepare who image
		$img2 = $_POST['who'];
		$img2 = str_replace('data:image/png;base64,', '', $img2);
		$img2 = str_replace(' ', '+', $img2);
		$fileData2 = base64_decode($img2);
		//saving
		$fileName1 = 'image/'.uniqid(true).'.png';
		file_put_contents($fileName1, $fileData2);
		$fileName2 = 'image/'.uniqid(true).'.png';
		file_put_contents($fileName2, $fileData);
		$photoObject = substr($fileName1, 6);
		$photoPerson = substr($fileName2, 6);
		insertSharedObject($db, "fucj", "you", $photoObject, $photoPerson);
	}
}

//echo "<img src=".$_POST["object"].">";
?>