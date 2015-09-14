<?php 
echo $_POST["object"];
$img = $_POST['object'];
$img = str_replace('data:image/png;base64,', '', $img);
$img = str_replace(' ', '+', $img);
$fileData = base64_decode($img);
//saving
$fileName = 'image/'.uniqid(true).'.png';
file_put_contents($fileName, $fileData);
//echo "<img src=".$_POST["object"].">";
?>