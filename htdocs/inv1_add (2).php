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
    <form method="post">
Product ID: <input name="PID" type=text>
Name: <input name="Name" type=text>
Description: <input name="Description" type=text>
Comments: <input name="Comments" type=text>
Stock In: <input name="StockIn" type=number>
Stock Out: <input name="StockOut" type=number>
    </font>
    <input type="submit" name="submit" id="submit" value="Add Item" class="no-print">
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
				mysqli_query($GLOBALS["___mysqli_ston"], "INSERT INTO inventory1 (`ID`,`PID`,`Name`,`Description`,`Comments`,`StockIn`,`StockOut`,`Poster`)
					Values('','$PID','$Name','$Description','$Comments','$StockIn','$StockOut','$username')") or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
				echo "<div align=center>";
				echo "Entry has been saved, thank you.</br>";
				echo "<br><a href='inv1_add.php'>Next Blank Entry</a></br><a href='inventory1.php'>Return</a>";
				echo "</div>";
				header('Location: inv1_add.php');
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