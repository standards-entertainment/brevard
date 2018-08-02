<?php
	include 'includes/connect.php';	
?>
<html>
<hr><div align=center>
<font size=1>
Current Version: 06.2.01
</div>



<div align="center">
All Rights Reserved</br>
</font>
<form name="back" method="post">
<input type=submit name="backbutton" value="Refresh"></br>
<?php
if($_POST['backbutton']){
header('Location: ' . $_SERVER['HTTP_REFERER']);
}
?>
</form>
</div>
<footer>
</footer>
</html>