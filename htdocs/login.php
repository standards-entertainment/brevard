<?php
	include 'includes/connect.php';
	include 'includes/functions.php';
	include 'header.php';
	

?>
<html>
<head>
<title>
Brevard Medical Equipment - User Login
</title>
</head>
<body>
<?php
	if(loggedin()){
?>
You are logged in.
<?php
header('location: profile.php');
	} else { 
?>
<div align=center>
<form method='post'>

Username:</br>
<input type='text' name='username' /></br></br> 
Password:</br>
<input type='password' name='password' />
</br></br>
<input type='submit' name='submit' value='Login'/>
</form>
<?php
if($user_level != 1){
$indexa = "index.php";
} else {
$indexa = "driver_ticket_summary.php";
}
$edittime = date("h:i:sa") . " " . date("Y/m/d");
$IP = $_SERVER['REMOTE_ADDR'];
if(isset($_POST['submit'])){
	$username1 = $_POST['username'];
	$password1 = $_POST['password'];
	$username = filter_var($username1, FILTER_SANITIZE_STRING);
	$password2 = filter_var($password1, FILTER_SANITIZE_STRING);
	$password = md5($password2);
	if(empty($username) or empty($password)){
		echo "<p><font color=red>Fields Empty!</p></font>";
	} else {
		$check_login = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT id, type FROM users WHERE username='$username' AND password='$password'");
				mysqli_query($GLOBALS["___mysqli_ston"], "INSERT INTO AuditTrail (`ID`,`TableName`,`AuditID`,`Username`,`Action`,`Time`)
				Values('','LOGIN','00','$username','Login From $IP','$edittime')") or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
		if(mysqli_num_rows($check_login) == 1){
			$run = mysqli_fetch_array($check_login);
			$user_id = $run['id'];
			$type = $run['type'];
			if($type == 'd'){
				echo "<p>Your account has not yet been activated or has been deactivated by an administrator.</p>";

			} else {
				$_SESSION['user_id'] = $user_id;
				echo "You are now logged in. You are being redirected, or click</br>";
				echo "<a href='" . $indexa . "'>Here</a> if it doesn't load automatically.";
				header('location: ' . $indexa);
			}
		} else {
			echo "<p><font color=red>Wrong Username and/or Password</font></p>";
		}
	}
}

/*
XML PARSING REMOVED


*/
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