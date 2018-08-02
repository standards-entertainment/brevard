<?php
	include 'includes/connect.php';
	include 'includes/functions.php';
	include ("header.php");
	
$db_id = $_GET['db_id'];
?>
<html>
<head>
<title>
Deleting Entry
</title>
</head>
<body>
<div align=center>
<?php
	if($user_level < 3){
		echo "ERROR: USER IS NOT ADMINISTRATOR.";
		header('location: profile.php');
	} else {
?>
Deleting Entry...
<?php
echo "Are you sure you want to delete database entry?";
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
		header('location: admin.php');
		} else {
		
		mysqli_query($GLOBALS["___mysqli_ston"], "DELETE FROM inventory1 WHERE id='$db_id'") or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
		echo "Entry has been deleted.</br>";
		echo "<a href='inventory1.php'>Return</a>";
		header('location: inventory1.php');
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