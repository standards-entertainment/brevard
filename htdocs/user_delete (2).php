<?php
	include 'includes/connect.php';
	include 'includes/functions.php';
	include ("header.php");
	
$u_id = $_GET['u_id'];
$u_username = $_GET['u_username'];
$u_pass = $_GET['u_pass'];
$u_ulevel = $_GET['u_ulevel'];
$type = $_GET['type'];
?>
<html>
<head>
<title>
Deleting User - <?php echo $u_username; ?>
</title>
</head>
<body>
<div align=center>
<?php
	if($user_level <= 2){
		echo "ERROR: USER IS NOT ADMINISTRATOR.";
		header('location: profile.php');
	} else {
?>
Deleting User...
<?php
echo "Are you sure you want to delete " . $u_username . "?";
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
		
		mysqli_query($GLOBALS["___mysqli_ston"], "DELETE FROM users WHERE id='$u_id'") or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
		echo "Player has been deleted.";
		header('location: admin.php');
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