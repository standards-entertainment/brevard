<?php
	include 'includes/connect.php';
	include 'includes/functions.php';


$u_id = $_GET['u_id'];
$type = $_GET['type'];


if($user_level <= 2){
	echo "ERROR: USER IS NOT ADMINISTRATOR.";
	header('location: profile.php');
} else {

if($type == 'a'){
	
	mysqli_query($GLOBALS["___mysqli_ston"], "UPDATE `users` SET `type`='d' WHERE `id`='$u_id'");
	header('location: admin.php?type=user');
} else if($type == 'd') {

	mysqli_query($GLOBALS["___mysqli_ston"], "UPDATE `users` SET `type`='a' WHERE `id`='$u_id'");
	header('location: admin.php?type=user');

}

}
?>