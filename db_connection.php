<?php 
	$mysqli = @mysqli_connect('localhost','root','', 'cr10_christian_simic_biglibrary');
	if (!$mysqli) {
	   die("Connection failed: " . mysqli_connect_error());
	}
?>