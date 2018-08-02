<?php
	$dbhost = 'localhost';
	$dbuser = 'id2435446_root';
	$dbpass = 'BMETEST11';
	$db = 'id2435446_bme1';

	
	$conn = ($GLOBALS["___mysqli_ston"] = mysqli_connect($dbhost, $dbuser, $dbpass));
// Check connection ^
	if (mysqli_connect_errno())
	  {
		 echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  }
	((bool)mysqli_query($GLOBALS["___mysqli_ston"], "USE $db"));


?>