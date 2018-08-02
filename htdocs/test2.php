<html>

<HEAD>
<link href="/style/style.css" rel="stylesheet" type="test/css">
<title>TEST2 TEST2 TEST2</title>


</HEAD>
<BODY>
  
<?php
//START MYSQLI QUERIES FOR IF AND THEN UP AND DOWN
$ORDERUP = $ORDER1 + 1;
$ORDERDOWN = $ORDER1 - 1;
                if($_POST['UpButton']) {
				mysqli_query($GLOBALS["___mysqli_ston"], "UPDATE DeliverySlip SET `Order1`='" . $ORDERUP . "' WHERE `Order1`='" . $ORDERDOWN . "'") or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));	
				mysqli_query($GLOBALS["___mysqli_ston"], "UPDATE DeliverySlip SET `Order1`='" . $ORDERDOWN . "' WHERE `ID`='" . $db_ID . "'") or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));	
				header('Location: test.php');
				} 

                if($_POST['DownButton']) {
				mysqli_query($GLOBALS["___mysqli_ston"], "UPDATE DeliverySlip SET `Order1`='" . $ORDERUP . "' WHERE `ID`='" . $db_ID . "' AND `Order1`='" . $ORDERUP . "'") or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));	
				mysqli_query($GLOBALS["___mysqli_ston"], "UPDATE DeliverySlip SET `Order1`='" . $ORDERDOWN . "' WHERE `ID`='" . $db_ID . "' AND `Order1`='" . $ORDERDOWN . "'") or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));	
				header('Location: test.php');
				} 				
//END UP/DOWN BUTTON

?>