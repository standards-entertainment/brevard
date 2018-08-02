<?PHP
include('includes/connect.php');
include('includes/functions.php');
include('header.php');



$TableGet = $_POST['TableGet'];
$get_db_ID = $_POST['Complete'];




//echo $get_db_ID;
?>
<html>
<head>
	<title>Processing...</title>
<?php
$Query = "SELECT `ID`,'$TableGet' as tbname FROM $TableGet WHERE `ID`='$get_db_ID'"; // Sort each entry by DATE, DESCENDING!

	$Result = mysqli_query($GLOBALS["___mysqli_ston"], $Query);// or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false))); 
{
	while($information = mysqli_fetch_array($Result))
	{
					$db_ID = $information['ID'];
					$TableGet1 = $information['tbname'];
					

$message = "finished with " . $TableGet1 . " #" . $db_ID . "?";
?>

<div align=center>
Are you <?PHP echo $message; ?></br>
<form name='confirm' method='post'>
<input type='submit' name='YesButton' value='Yes'> | &nbsp;<a href='driver_ticket_summary.php?driver=<?PHP ECHO $username; ?>'>No</a></BR>
</form>
<?PHP
$timedone = date("Y/m/d H:i:s");
$action = "DriverSlipAccomplished";
$accomplished = 1;

//echo "UPDATE $TableGet1 SET `Accomplisher`='$username',`AccomplishTime`='$timedone',`Accomplished`='$accomplished' WHERE `ID`='$db_ID'";//) or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));	

if($_POST['YesButton']){
				mysqli_query($GLOBALS["___mysqli_ston"], "UPDATE $TableGet1 SET `Accomplished`='$accomplished',`Accomplisher`='$username',`AccomplishTime`='$timedone' WHERE `ID`='$db_ID'");// or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
				mysqli_query($GLOBALS["___mysqli_ston"], "INSERT INTO AuditTrail (`ID`,`TableName`,`AuditID`,`Username`,`Action`,`Time`)
					Values('','$TableGet1','$db_ID','$username','$action','$timedone')") or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
				echo "<b>Accomplished Successfully!<b></br>";
				echo "Return: <a href='driver_ticket_summary.php?driver=" . $username . "'>Previous Page</a>";
				header('Location: ' . $_SERVER['HTTP_REFERER']);
}
	}
}
?>
</div>
</head>
<body>

</body>
</html>
<?PHP
include('footer.php');
?>