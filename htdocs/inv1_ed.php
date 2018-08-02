<?php
include(__DIR__ . "/includes/connect.php");
include(__DIR__ . "/includes/functions.php");
include(__DIR__ . "/header.php");
$get_db_id = $_GET['ID'];
	if(loggedin()){
		if($user_level <= 0){
			echo "User does not have access.";
		} else {
?>


    <html>
    <head>
        <title>Brevard Medical Equipment :: Delivery Slip Edit</title>
	<script src="/includes/jquery-1.10.2.js"></script>
    </head>
    <div align=center> 
<?php
$Query = "SELECT * FROM inventory1 WHERE `ID`='$get_db_id' ORDER BY ID DESC"; // Sort each entry by DATE, DESCENDING!

if($Query != '')
{
	$Result = mysqli_query($GLOBALS["___mysqli_ston"], $Query)// or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false))); 

	
?>
<?php

	while($information = mysqli_fetch_array($Result))
	{
		$entry_ID = $information['ID'];
        $entry_PID = $information['PID'];  
		$entry_Name = $information['Name'];
		$entry_Description = $information['Description'];
		$entry_Comments = $information['Comments'];
		$entry_StockIn = $information['StockIn'];
		$entry_StockOut = $information['StockOut'];
		$entry_Poster = $information['Poster'];
		$entry_Editor = $information['Editor'];
	}
	
	?>
    <form method="post">
Product ID: <input name="PID" type=text value="<?php echo $entry_PID; ?>">
Name: <input name="Name" type=text value="<?php echo $entry_Name; ?>">
Description: <input name="Description" type=text value="<?php echo $entry_Description; ?>">
Comments: <input name="Comments" type=text value="<?php echo $entry_Comments; ?>">
Stock In: <input name="StockIn" type=number value="<?php echo $entry_StockIn; ?>">
Stock Out: <input name="StockOut" type=number value="<?php echo $entry_StockOut; ?>">
    </font>
    <input type="submit" name="submit" id="submit" value="Update" class="no-print">
    </form>
<?php
	$PID = $_POST['PID'];
	$Name = $_POST['Name'];
	$Description = $_POST['Description'];
	$Comments = $_POST['Comments'];
	$StockIn = $_POST['StockIn'];
	$StockOut = $_POST['StockOut'];
	$tablename = "Inventory1";
	$action = "Edit";
	$edittime = date("h:i:sa") . " " . date("Y/m/d");
	
	if($_POST['submit']) {
				mysqli_query($GLOBALS["___mysqli_ston"], "UPDATE inventory1 SET `PID`='$PID',`Name`='$Name',`Description`='$Description',`Comments`='$Comments', `StockIn`='$StockIn', `StockOut`='$StockOut', `Editor`='$username' WHERE ID = '$get_db_id'") or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));	
				mysqli_query($GLOBALS["___mysqli_ston"], "INSERT INTO AuditTrail (`ID`,`TableName`,`AuditID`,`Username`,`Action`,`Time`)
					Values('','$tablename','$get_db_id','$username','$action','$edittime')") or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
				echo "<div align=center>";
				echo "Data has been logged, thank you.</br>";
				echo "<br><a href='inv1_ed.php?ID=" . $get_db_id . "'>Next Form</a></br><a href='inventory1.php'>Return</a>";
				echo "</div>";
				header('Location: inv1_ed.php?ID=' . $get_db_id);
	}
	}
?>
    
 </br><span id="flag"></span>   
	</div>
<script>
	$( "*" ).keydown(function(event) {
		if (event.keyCode == 222) {
		event.preventDefault();
	}
	});
</script>

    </body><br>
    </html>
<?php
		}
	} else {
echo "<div align=center><b>You must be logged in to do that!</b></div>";
	}
include("pfooter.php"); 
?>