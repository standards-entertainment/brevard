<?php
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = 'root';//'9696aaAA!'
	$db = 'dev';//'BME1'

	
	$conn = ($GLOBALS["___mysqli_ston"] = mysqli_connect($dbhost, $dbuser, $dbpass));
// Check connection ^
	if (mysqli_connect_errno())
	  {
		 echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  }
	((bool)mysqli_query($GLOBALS["___mysqli_ston"], "USE $db"));


?>