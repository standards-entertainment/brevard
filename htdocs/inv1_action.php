<?php
	include 'includes/connect.php';
	include 'includes/functions.php';
	
$db_id = $_GET['db_id'];
$get_db_id = $db_id;
$action = $_GET['action'];
?>
<html>
<head>
<title>
Brevard Medical Equipment :: Performing Action
</title>
</head>
<body>


<?php
$Query = "SELECT * FROM inventory1 WHERE `ID`='$get_db_id' ORDER BY ID DESC"; // Sort each entry by DATE, DESCENDING!

	$Result = mysqli_query($GLOBALS["___mysqli_ston"], $Query);// or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false))); 
	
	
                $information = mysqli_fetch_array($Result);
		$entry_ID = $information['ID'];
                $entry_PID = $information['PID'];  
		$entry_Name = $information['Name'];
		$entry_Description = $information['Description'];
		$entry_Comments = $information['Comments'];
		$entry_StockIn = $information['StockIn'];
		$entry_StockOut = $information['StockOut'];
		$entry_Poster = $information['Poster'];
		$entry_Editor = $information['Editor'];
		$searchinput = $_POST['search'];
	

?>
<div align=center>
<?php
	if($user_level < 2){
		echo "ERROR: USER IS NOT ADMINISTRATOR.";
		header('location: inventory1.php');
	} else {
$StockIn = $entry_StockIn;
$StockOut = $entry_StockOut;

if($action == 'add1') {
$StockIn = $entry_StockIn + 1;
}
if($action == 'add2') {
$StockOut = $entry_StockOut + 1;
}
if($action == 'sub1') {
$StockIn = $entry_StockIn - 1;
}
if($action == 'sub2') {
$StockOut = $entry_StockOut - 1;
}
?>


<?php
if($get_db_id != '' OR $action != ''){
mysqli_query($GLOBALS["___mysqli_ston"], "UPDATE inventory1 SET `StockIn`='$StockIn', `StockOut`='$StockOut', `Editor`='$username' WHERE ID = '$get_db_id'") or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
header('location: inventory1.php');
echo "<a href='inventory1.php'>Return</a>";
}
?>

</div>
</body>
</html>
<?php
}
?>