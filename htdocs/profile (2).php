<?php
	include 'includes/connect.php';
	include 'includes/functions.php';
	include ("header.php");
	
	
	
?>
<html>
<head>
<title>
Brevard Medical Equipment - Profile Page
</title>
<?php
	if(loggedin()){
?>


</head>
<body>
<p>You are logged in as <b><?php echo $username ?></b> <?php echo "(" . $level_name . ")" ?></p>
</div>

Change Password:
<form name='PWChange' method='post'>
<ul>

Old Password: <input type='password' name='oldpassword'></br>


New Password: <input type='password' name='newpassword'></br>

Confirm: <input type='password' name='confirmpassword'></br>
</ul>
<input type='submit' name='submit' value='Change Password'>

</form>
<?php
	$oldpass = md5($_POST['oldpassword']);
	$newpass = md5($_POST['newpassword']);
	$confirm = md5($_POST['confirmpassword']);
	$passQuery = "SELECT * FROM users WHERE username='".$username."' and password='".$oldpass."' LIMIT 1";
	$passqueryres = mysqli_query($GLOBALS["___mysqli_ston"], $passQuery);
	if($_POST['submit']) {
		if($newpass != $confirm) {
			echo "Passwords do not match!";
		} else {
			if(mysqli_num_rows($passqueryres) == 1) {
				mysqli_query($GLOBALS["___mysqli_ston"], "UPDATE `users` SET `password`='$newpass' WHERE `id`='$my_id'") or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));	
				echo "Password has been updated, thank you.";
				header('Location: admin.php');
		
			} else {
				echo "Current password incorrect!";
			}
		}
	
	}
?>
Change Cell Number:
<form name='CellChange' method='post'>
<ul>


New Cell Number: <input type='text' name='newcell'></br>

Confirm Cell Number: <input type='text' name='confirmcell'></br>
</ul>
<input type='submit' name='submitCell' value='Change Cell'>

</form>
<?php
	$oldcell = $_POST['oldcell'];
	$newcell = $_POST['newcell'];
	$confirmcell = $_POST['confirmcell'];
	$passCell = "SELECT * FROM users WHERE username='".$username."' LIMIT 1";
	$passCellres = mysqli_query($GLOBALS["___mysqli_ston"], $passCell);
	if($_POST['submitCell']) {
		if($newcell != $confirmcell) {
			echo "Cell numbers do not match!";
		} else {
			if(mysqli_num_rows($passCellres) == 1) {
				mysqli_query($GLOBALS["___mysqli_ston"], "UPDATE `users` SET `Cell`='$newcell' WHERE `id`='$my_id'") or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));	
				echo "Cell number has been updated, thank you.";
				header('Location: admin.php');
		
			} else {
				echo "User does not exist!";
			}
		}
	
	}
?>

</body>
</html>
<?php
} else {
echo "<div align=center><b>You are not logged in, please <a href='login.php'>Log In</a></b></div>";
}
	include ("footer.php");

?>