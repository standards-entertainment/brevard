<?php
	include 'includes/connect.php';
	include 'includes/functions.php';
	include ("header.php");
	
// Variables to pull from previous page.
$u_id = $_GET['u_id'];
$u_username = $_GET['u_username'];
$u_ulevel = $_GET['u_ulevel'];
$utype = $_GET['type'];
$u_cell = $_GET['u_cell'];
$dstatus1 = $u_ulevel;
$dstatus2 = $utype;


?>
<html>
<head>
<title>
Brevard Medical Equipment Database :: User Edit
</title>
</head>
<body>
<?php
	if($user_level <= 2){
		echo "<div align=center>ERROR: USER IS NOT ADMINISTRATOR.</div>";
		header('location: profile.php');
	} else if($user_level <= $u_ulevel){
		echo "<div align=center>ERROR: USER DOES NOT HAVE AUTHORITY.</div>";
		header('location: profile.php');
	} else {
?>

<?php echo "User ID: <b>" . $u_id . "</b></br>"; ?>
<form method="post" name="user_edit">
Username: <input type='text' name='name' value='<?php echo $u_username; ?>'></br>
New Password: <input type='password' name='password'> <font size=2>(Leave blank to keep it the same.)</font></br>
Confirm Pass: <input type='password' name='confirmpass'></br>
User Cell: <input type='text' name='newu_cell' value='<?php echo $u_cell ?>'></br></br>
User Authorization: </br>
		<input type="radio" name="user_level"
		<?php if (isset($dstatus1) && $dstatus1=="1") echo "checked";?>
		value="1">Driver
		</br>
		<input type="radio" name="user_level"
		<?php if (isset($dstatus1) && $dstatus1=="2") echo "checked";?>
		value="2">Editor
		</br>
		<input type="radio" name="user_level"
		<?php if (isset($dstatus1) && $dstatus1=="3") echo "checked";?>
		value="3">Admin</br></br>
Account Status: </br> 
		<input type="radio" name="type"
		<?php if (isset($dstatus2) && $dstatus2=="a") echo "checked";?>
		value="a">Activated
		</br>
		<input type="radio" name="type"
		<?php if (isset($dstatus2) && $dstatus2=="d") echo "checked";?>
		value="d">Deactivated
		</br>
<input type='submit' name='submit' value='Update'>
</form>
<?php
	$newname = $_POST['name'];
	$newpass = md5($_POST['password']);
	$newulevel = $_POST['user_level'];
	$newstatus = $_POST['type'];
	$confirm = md5($_POST['confirmpass']);
	$newucell = $_POST['newu_cell'];
	if($_POST['submit']) {
		if($newpass == $confirm) {
			if(empty($_POST['password'])) {
			mysqli_query($GLOBALS["___mysqli_ston"], "UPDATE `users` SET `username`='$newname', `user_level`='$newulevel', `type`='$newstatus', `cell`='$newucell' WHERE `id`='$u_id'") or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
			echo "User Information Has Been Updated!";
			header('Location: admin.php?type=user');
			} else {
				mysqli_query($GLOBALS["___mysqli_ston"], "UPDATE `users` SET `username`='$newname', `password`='$newpass', `user_level`='$newulevel', `type`='$newstatus', `cell`='$newucell' WHERE `id`='$u_id'") or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));	
				echo "User Information Has Been Updated!";
				header('Location: admin.php?type=user');
			}
		} else {
					echo "Passwords do not match!";
		}
	}
?>

<?php
}
?>



</body>
</html>
<?php
	include ("footer.php");

?>