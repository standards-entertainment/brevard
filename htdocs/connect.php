<?php
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = 'root';
	$db = 'BWA1';
	
	$conn = ($GLOBALS["___mysqli_ston"] = mysqli_connect($dbhost, $dbuser, $dbpass));
	((bool)mysqli_query($GLOBALS["___mysqli_ston"], "USE $db"));
?>