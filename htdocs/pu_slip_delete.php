<?php
	include 'includes/connect.php';
	include 'includes/functions.php';
	include ("header.php");
	
$db_id = $_GET['ID'];
$tbl_name = "PickupSlip";
$dbname = "Pickup Slip";
$home = "purecords.php";
?>
<html>
<head>
<title>
Delete Record? - <?php echo $db_id; ?>
</title>
</head>
<body>
<div align=center>
<?php
	if($user_level <= 4){
		echo "ERROR: NOT A SUPER USER. USER LEVEL TOO LOW. RELOCATING...";
		header('location: profile.php');
	} else {
?>
Deleting Record...
<?php
echo "Are you sure you want to delete " . $dbname . " ID #" . $db_id . "?";
?>
<form name='YesNo' method='post'>
<select name="YesNo">
<option value='no'>No</option>
<option value='yes'>Yes</option>
</select></br>
<input type='submit' name='submit'>
</form>
<?php
	$yesorno = $_POST['YesNo'];
	if($_POST['submit']) {
		if($yesorno == 'no') {
		header('location: ' . $home);
		} else {
		
		mysqli_query($GLOBALS["___mysqli_ston"], "DELETE FROM $tbl_name WHERE id='$db_id'") or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
		echo "Record has been deleted.";
		header('location: ' . $home);
		}
	} 
	
?>
<?php
}
?>
</div>
</body>
</html>
<?php
	include ("footer.php");
?>