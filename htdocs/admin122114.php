<?php
	include 'includes/connect.php';
	include 'includes/functions.php';
	include ("header.php");
	
?>
<html>
<head>
<title>
Brevard Medical Equipment - Administration Panel
</title>
</head>
<body>

<?php
	if($user_level <= 2){
		echo "<div align=center>ERROR: USER IS NOT ADMINISTRATOR.</div>";
		header('location: profile.php');
} else {
?>
<div align=center>
</br>Administration Options</br></br>
<a href='admin.php?type=user'>User Settings</a>
</br></br>
</div>
<?php
}
?>

<p><div align=center>
<?php
if(isset($_GET['type']) && !empty($_GET['type'])){
?>
<table>
<tr><td width='150px'>Users</td><td>Options</td></tr>
<?php
$list_query = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM users");
while($run_list = mysqli_fetch_array($list_query)){
	$u_id = $run_list['id'];
	$u_username = $run_list['username'];
	$u_type = $run_list['type'];
	$u_ulevel = $run_list['user_level'];
	$u_cell = $run_list['cell'];
	$query_ulevel = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT name FROM user_level WHERE id='$u_ulevel'");
	$run_ulevel = mysqli_fetch_array($query_ulevel);
	$u_levelname = $run_ulevel['name'];
?>
<tr><td><?php echo $u_username ?></td><td>
<?php
			if($user_level <= $u_ulevel){
				echo "---------------------";
			} else {
	if($u_type == 'a'){
		echo " (" . $u_levelname . ") <a href='option.php?u_id=$u_id&type=$u_type'>Deactivate</a> | <a href='user_edit.php?u_id=$u_id&u_username=$u_username&u_ulevel=$u_ulevel&type=$u_type&u_cell=$u_cell'>Edit</a> | <a href='user_delete.php?u_id=$u_id&u_username=$u_username&u_ulevel=$u_ulevel&type=$u_type'>Delete</a>";
	} else {
		echo " (" . $u_levelname . ") <a href='option.php?u_id=$u_id&type=$u_type'>Activate</a> | <a href='user_edit.php?u_id=$u_id&u_username=$u_username&u_ulevel=$u_ulevel&type=$u_type&u_cell=$u_cell'>Edit</a> | <a href='user_delete.php?u_id=$u_id&u_username=$u_username&u_ulevel=$u_ulevel&type=$u_type'>Delete</a>";
	}
			}
?>
</div>
</td></tr>
<?php
}
?>
</table>
<div align=center>
</br></br></br>
Create A New User:
<form method='post'>
Username:</br>
<input type='text' name='username' /></br></br>
Password:</br>
<input type='password' name='password' />
</br></br>
<input type='submit' name='submit' value='Create'/>
</form>
</div>
<?php
} else {
	echo "Select options above";
}

?>
<?php
if(isset($_POST['submit'])){
	$nusername = $_POST['username'];
	$password = md5($_POST['password']);
	if(empty($nusername) or empty($password)){
		echo "<p><font color=red>Fields Empty!</p></font>";
	} else {
		mysqli_query($GLOBALS["___mysqli_ston"], "INSERT INTO users (`id`,`username`,`password`,`user_level`,`type`,`cell`) VALUES('', '$nusername', '$password', '1', 'a','')");
		echo "<div align=center><p>Successfully registered.</p></div>";
		header('location: index.php');
	}
}
?>

</body>
</html>
<?php
	include ("footer.php");

?>