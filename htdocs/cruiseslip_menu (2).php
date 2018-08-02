<?php
include 'includes/connect.php';
include 'includes/functions.php';
include("header.php");
	include('stylings.php');
	if(loggedin()){
		if($user_level <= 0){
			echo "User does not have access.";
		} else {
?>
<html>
<head>
<center><font size=3><b><u>BREVARD MEDICAL EQUIPMENT CRUISE MENU</u></b></font></center>
</head>
<body><CENTER><B><font size=1>
<script src="/includes/jquery-1.10.2.js"></script>

</body>
</FORM>
</CENTER>
</html>
<?php
	}
	} else {
echo "<div align=center><b>You must be logged in to do that!</b></div>";
	}
include("footer.php");
?>