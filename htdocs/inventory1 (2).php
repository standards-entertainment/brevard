<?php
include 'includes/connect.php';
include 'includes/functions.php';
include("header.php");


?>


    <html>
    <head>
        <title>Brevard Medical Equipment :: Melbourne Warehouse Inventory</title>
    </head>
    <body>
    <div align=center>
<?php
	if(loggedin()){
	if($user_level < 1){
	echo "User does not have access.";
	} else {
?>
<?php echo "<a href='inv1_add.php'>Add New</a>"; ?>
<?php
/* ------ !SEARCH DISENGAGED -------
<form name='search' method='get'>
<br>
<input type='text' name='search'>
<input type='submit' name='submit' value='Search'>

<br>
<br>
</form>
*/
?>
    </div>
<?php
if ($_GET['submit'] != 'Search')
{
	$Query = "SELECT * FROM inventory1 ORDER BY ID DESC"; // Sort each entry by ID, DESCENDING!
}		
else if(($_GET['search']) != '' and $_GET['submit'] == 'Search')
{
	$searchVal = $_GET['search'];
 	$Query = "SELECT * FROM inventory1 WHERE ID='" . $searchVal . "' OR PID='" .$searchVal . "' OR Name ='" .$searchVal . "' OR Description ='" .$searchVal . "'
	OR Comments  ='" .$searchVal . "' OR Poster  ='" .$searchVal . "' OR Editor  ='" .$searchVal . "' OR StockIn  ='" .$searchVal . "' OR StockOut  ='" .$searchVal . "' ORDER BY ID DESC "; // Loop through each tech Query
}

if($Query != '')
{
	$Result = mysqli_query($GLOBALS["___mysqli_ston"], $Query) or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false))); 

	
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
		$searchinput = $_POST['search'];
	
	

	?>
                   <table border="1" style="width:100%">
							<tr>
                                <td style="width:25%">
                                    <?php
                                    echo "<h3>" . $entry_Name . "</h3>";
                                    ?>
                                </td>
                                <td colspan=2>
                                    <?php
                                    echo "" . "<font size=2>Description:</font> " . $entry_Description . " ";
                                    ?>
                                </td>
                                <td>
                                	<?php
                                	$Quantity = $entry_StockIn - $entry_StockOut;
                                	echo "" . "<font size=2>Quantity:</font> <font size=5 color=red>" . $Quantity . "</font> ";
                                	?>
                                </td>
                                <td>
                                    <?php
                                    echo "" . "<font size=2>Poster:</font> " . $entry_Poster . " ";
                                    ?>
                                </td>
                    		</tr>
                            <tr>
                                <td>
                                    <?php
                                    echo "" . "<font size=2>Last Editor:</font> " . $entry_Editor . " ";
                                    ?>
                                </td>
                                <td>
                                	<?php
                                	echo "" . "<font size=2>Stock In:</font> " . $entry_StockIn . " ";
                                	?>
                                </td>
                                <td>
                                	<?php
                                	echo "" . "<font size=2>Stock Out:</font> " . $entry_StockOut . " ";
                                	?>
                                </td>
                    		<td><div align=center>
                    		<?php echo "<a href='inv1_ed.php?ID=$entry_ID'>Edit</a>"; ?>
                    		</td></div>
                            <td><div align=center>
                                    <?php echo "<a href='inv1_del.php?db_id=$entry_ID'>Delete</a>"; ?>
                            </td></div>
</table></br>
<?php	
	}
}
?>
    </body>
    </html>


    <br>
<?php
}
} else {
echo "<div align=center><b>You must be logged in to do that!</b></div>";
}
include("footer.php");

?>