<?php
	include 'includes/connect.php';
	include 'includes/functions.php';
	include 'header.php';
?>
<html>
<head>
<title>
Brevard Medical Equipment - Driver Registration
</title>
</head>
<body>

<div align=center>
<form method='post'>
Username:</br>
<input type='text' name='username' /></br></br>
Password:</br>
<input type='password' name='password' />
</br></br>
Confirm Password:</br>
<input type='password' name='confirm' />
</br></br>
<input type='submit' name='submit' value='Register'/>
</form>
</div>
<?php
if(isset($_POST['submit'])){
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$confirm = md5($_POST['confirm']);
	if($password != $confirm) {
		echo "Passwords do not match!";
	} else {
	if(empty($username) or empty($password)){
		echo "<p><font color=red>Fields Empty!</p></font>";
	} else {
		mysqli_query($GLOBALS["___mysqli_ston"], "INSERT INTO users (`id`,`username`,`password`,`user_level`,`type`,`cell`) VALUES('', '$username', '$password', '1', 'd','')");
		echo "<div align=center><p>Successfully registered.</p>";
		echo "<p>Redirecting, or <a href='index.php'>click here</a>.</div>";
		header('location: index.php');
	}
	}
}
?>


</body>
</html>
<?php
	include ("footer.php");

?>