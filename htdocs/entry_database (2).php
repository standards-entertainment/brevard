<?php
include 'includes/connect.php';
include 'includes/functions.php';
include("header.php");


$query = "SELECT DISTINCT `Tech` FROM Info"; // SELECT Technicians only first
$result = mysqli_query($GLOBALS["___mysqli_ston"], $query);
$techs = array();

$list_query = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM inventory1");
while ($run_list = mysqli_fetch_array($list_query)) 
{
}
$sortby = $_GET['sortby'];
if ($sortby == ''){
$sortby = 'all';
}
$dmydate = $_GET['year'] . "/" . $_GET['month'] . "/" . $_GET['day'];

?>


    <html>
    <head>
        <title>Brevard Medical Equipment - Entry Database</title>
    </head>
    <body>
    <div align=center>
<?php
	if(loggedin()){
	if($user_level == 1){
	echo "User does not have access.";
	} else {
?>
<form name='search' method='get'>
<select name="year">
<?php
for($y=date("Y"); $y<=2020; $y++){
?>
<option value='<?php echo "$y"; ?>'><?php echo "$y"; ?></option>
<?php
}
?>
</select>
<select name="month">
<?php
for($m=1; $m<=12; $m++){
	if($m<10){
		$mm = "0" . $m;	
	} else {
		$mm = $m;
	}
	switch($mm){
		case "01": $mmm = "January"; break;
		case "02": $mmm = "February"; break;
		case "03": $mmm = "March"; break;
		case "04": $mmm = "April"; break;
		case "05": $mmm = "May"; break;
		case "06": $mmm = "June"; break;
		case "07": $mmm = "July"; break;
		case "08": $mmm = "August"; break;
		case "09": $mmm = "September"; break;
		case "10": $mmm = "October"; break;
		case "11": $mmm = "November"; break;
		case "12": $mmm = "December"; break;
		
		
	}
	?>
	<option value='<?php echo "$mm"; ?>'><?php echo "$mmm"; ?></option>
	<?php
}
?>
</select>

<select name='day'>
<?php

for($dd=1;$dd<=31;$dd++){
	if($dd<10){
		$ddd = "0" . $dd;
	} else {
		$ddd = $dd;
	}
?>
<option value='<?php echo "$ddd"; ?>'><?php echo "$ddd"; ?></option>
<?php
}

?>
</select>
<br>
<input type='text' name='search'>
<input type='submit' name='submit' value='Search'>

<br>
<br>
</form>
    </div>
<?php
if ($sortby == 'all' and $_GET['submit'] != 'Search')
{
	$Query = "SELECT * FROM Info ORDER BY ID DESC"; // Sort each entry by ID, DESCENDING!
}		
else if(($_GET['search']) != '' and $_GET['submit'] == 'Search')
{
	$searchVal = $_GET['search'];
 	$Query = "SELECT * FROM Info WHERE Tech='" . $searchVal . "' OR Zone='" .$searchVal . "' OR Date ='" .$searchVal . "' OR Date ='" .$dmydate . "' OR Van ='" .$searchVal . "'
	OR 'Beg 02 Count'  ='" .$searchVal . "' OR 'Time Out'  ='" .$searchVal . "' OR Cell  ='" .$searchVal . "' OR 'Time In'   ='" .$searchVal . "' 
	OR 'End 02 Count'  ='" .$searchVal . "' OR Referral  ='" .$searchVal . "' OR 'Time Called In'  ='" .$searchVal . "' OR 'Delivery Time' ='" .$searchVal . "' OR CustomerNumber ='" .$searchVal . "'
	OR FName  ='" .$searchVal . "' OR LName  ='" .$searchVal . "' OR Streetnumber ='" .$searchVal . "' OR Streetname ='" .$searchVal . "' OR City ='" .$searchVal . "' OR Zip ='" .$searchVal . "' OR Phone ='" .$searchVal . "' OR Del_PU  ='" .$searchVal . "' OR Equipment  ='" .$searchVal . "'
	OR Comments  ='" .$searchVal . "' OR Poster  ='" .$searchVal . "' OR STATUS  ='" .$searchVal . "' OR id  ='" .$searchVal . "' ORDER BY Date DESC "; // Loop through each tech Query
}
else if(($_GET['search']) == '' and $_GET['submit'] == 'Search' and $_GET['sortby'] != 'all')
{
	$d = $dmydate;
	$Query = "SELECT * FROM Info WHERE Date='" . $d . "' ORDER BY ID DESC "; // Loop through each tech Query
}

if($Query != '')
{
	$Result = mysqli_query($GLOBALS["___mysqli_ston"], $Query) or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false))); 

	
?>
<?php

	while($information = mysqli_fetch_array($Result))
	{
		$entry_zone = $information['Zone'];
        $entry_date = $information['Date'];
        $db_id = $information['id'];   
		$entry_van = $information['Van'];
		$entry_beg02count = $information['Beg 02 Count'];
		$entry_timeout = $information['Time Out'];
		$entry_tech = $information['Tech'];
		$entry_cell = $information['Cell'];
		$entry_timein = $information['Time In'];
		$entry_end02count = $information['End 02 Count'];
		$entry_referral = $information['Referral'];
		$entry_timecalledin = $information['Time Called In'];
		$entry_deliverytime = $information['Delivery Time'];
		$entry_customernumber = $information['CustomerNumber'];
		$entry_fname = $information['FName'];
		$entry_lname = $information['LName'];
		$entry_Streetnumber = $information['Streetnumber'];
		$entry_Streetname = $information['Streetname'];
		$entry_City = $information['City'];
		$entry_Zip = $information['Zip'];
		$entry_phone = $information['Phone'];
		$entry_delpu = $information['Del_PU'];
		$entry_equipment = $information['Equipment'];
		$entry_status = $information['Status'];
		$entry_comments = $information['Comments'];
		$entry_name = $information['FName'] . " " . $information['LName'];
		$address = $information['Streetnumber'] . " " . $information['Streetname'] . " " . $information['City'] . " " . $information['Zip'];
		$searchinput = $_POST['search'];
	
	?>
                   <table border="1" style="width:100%">
							<tr>
                                <td>
                                    <?php
                                    echo "<h3>" . $information['Zone'] . "</h3>";
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <?php
                                    echo "" . "<font size=2>Date:</span></font> " . $information['Date'] . " ";
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    echo "" . "<font size=2>Van:</font> " . $information['Van'] . " ";
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    echo "" . "<font size=2>Beg 02 Count:</font> " . $information['Beg 02 Count'] . " ";
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    echo "" . "<font size=2>Time Out:</font> " . $information['Time Out'] . " ";
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <?php
                                    echo "" . "<font size=2>Tech:</font> " . $information['Tech'] . " ";
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    echo "" . "<font size=2>Cell:</font> " . $information['Cell'] . "</p>";
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    echo "" . "<font size=2>Time In:</font> " . $information['Time In'] . "</p>";
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    echo "" . "<font size=2>End 02 Count:</font> " . $information['End 02 Count'] . "</p>";
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <?php
                                    echo "" . "<font size=2>Referral:</font> " . $information['Referral'] . "</p>";
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    echo "" . "<font size=2>Time Called In:</font> " . $information['Time Called In'] . "</p>";
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    echo "" . "<font size=2>Delivery Time:</font> " . $information['Delivery Time'] . "</p>";
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    echo "" . "<font size=2>Customer Number:</font> " . $information['CustomerNumber'] . "</p>";
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <?php
                                    echo "" . "<font size=2>Name:</font> <b><font size=3><span style='background-color: #FF9900'>" . $entry_name . "</span></font></b></p>";
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    echo "" . "<font size=2>Address:</font> <b><font size=3><span style='background-color: #FF9900'>" . $address . "</span></font></b></p>";
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    echo "" . "<font size=2>Phone:</font> " . $information['Phone'] . "</p>";
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    echo "" . $information['Del_PU'] . "</p>";
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <?php
                                    echo "" . "<font size=2>Equipment:</font> <b><font size=3><span style='background-color: #FF9900'>" . $information['Equipment'] . "</span></font></b></p>";
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    echo "" . "<font size=2>Status:</font> " . $information['Status'] . "</p>";
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    echo "" . "<font size=2>Comments:</font> " . $information['Comments'] . "</p>";
                                    ?>
                                </td>
                                <td>
                                	<?php
                                	echo "" . "<font size=2>Content Poster:</font> " . $information['Poster'] . "</p>";
                                	?>
                                </td>
                            </tr>
                            <td>
                                <div align="center">
                                    <?php

                                    echo "<a href='db_delete.php?db_id=$db_id'>Delete Entry</a>";

                                    ?>
                                </div>
                            </td>
                    		<td>
                    		<?php echo "<a href='db_edit.php?db_id=$db_id&entry_zone=$entry_zone&entry_van=$entry_van&entry_beg02count=$entry_beg02count&entry_timeout=$entry_timeout&entry_tech=$entry_tech&entry_cell=$entry_cell&entry_timein=$entry_timein&entry_end02count=$entry_end02count&entry_referral=$entry_referral&entry_timecalledin=$entry_timecalledin&entry_deliverytime=$entry_deliverytime&entry_customernumber=$entry_customernumber&entry_fname=$entry_fname&entry_lname=$entry_lname&entry_Streetnumber=$entry_Streetnumber&entry_Streetname=$entry_Streetname&entry_City=$entry_City&entry_Zip=$entry_Zip&entry_phone=$entry_phone&entry_delpu=$entry_delpu&entry_equipment=$entry_equipment&entry_status=$entry_status&entry_comments=$entry_comments'>Edit Entry</a>"; ?>
                    		</td>
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