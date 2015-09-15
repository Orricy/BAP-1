<?php 
echo $_POST["what"];
$img = $_POST['what'];
$img = str_replace('data:image/png;base64,', '', $img);
$img = str_replace(' ', '+', $img);
$fileData = base64_decode($img);

echo $_POST["who"];
$img2 = $_POST['who'];
$img2 = str_replace('data:image/png;base64,', '', $img2);
$img2 = str_replace(' ', '+', $img2);
$fileData2 = base64_decode($img2);
//saving
$fileName = 'image/'.uniqid(true).'.png';
file_put_contents($fileName, $fileData2);
$fileName = 'image/'.uniqid(true).'.png';
file_put_contents($fileName, $fileData);

//echo "<img src=".$_POST["object"].">";
?>