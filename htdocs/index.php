<?php
	include 'includes/connect.php';
	include 'includes/functions.php';
	include ("header.php");
	
?>
<html>
<head>
<title>
Brevard Medical Equipment
</title>
</head>
<body>
</br>
<font size=3>
<div align=center>
<?php
	if(loggedin()){
?>
Login successful!</br> Welcome, <?php echo $username; ?>
<?php
	} else {
echo "You are not logged in.";
}
?>

</div>
</font>
</br>
</body>
</html>
<?php
	include ("footer.php");

?>