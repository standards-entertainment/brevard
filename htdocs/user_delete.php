<?php
	include 'includes/connect.php';
	include 'includes/functions.php';
	include ("header.php");
	
$u_id1 = $_GET['u_id'];
$u_username1 = $_GET['u_username'];
?>
<html>
<?php
$list_query = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM users WHERE id='$u_id1'");
while($run_list = mysqli_fetch_array($list_query)){
	$u_id = $run_list['id'];
	$u_username = $run_list['username'];
	$u_type = $run_list['type'];
	$u_ulevel = $run_list['user_level'];
	$u_cell = $run_list['cell'];
	$query_ulevel = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT name FROM user_level WHERE id='$u_ulevel'");
	$run_ulevel = mysqli_fetch_array($query_ulevel);
	$u_levelname = $run_ulevel['name'];

	if($user_level <= 2 OR $u_ulevel >= $user_level){
		echo "ERROR: USER LEVEL NOT HIGH ENOUGH TO COMPLETE ACTION.";
		header('location: profile.php');
	} else {
?>
<head>
<title>
Deleting User - <?php echo $u_username; ?>
</title>
</head>
<body>
<div align=center>
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
		echo "User has been deleted.";
		header('location: admin.php');
		}
	}
?>
<?php
	}
}
?>
</div>
</body>
</html>
<?php
	include ("footer.php");
?>