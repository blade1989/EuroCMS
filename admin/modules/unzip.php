<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Unzippping via php</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php

$zip = new ZipArchive;
if ($zip->open("help.zip")===TRUE){
	$zip->extractTo("test/");
	echo "succes";
} else {
	echo "Failed";
}

	?>
	<hr>

<h2>Reference</h2>
<a href="https://www.youtube.com/watch?v=aCyWNmeq97A#t=203">Working with Zip(Compressing and Extracting) in PHP</a>
</body>
</html>