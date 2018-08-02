<?php
	include 'includes/connect.php';
	include 'includes/functions.php';
	include ("header.php");
	
$db_id = $_GET['db_id'];
$entry_zone = $_GET['entry_zone'];
$entry_date = $_GET['entry_date'];
$entry_van = $_GET['entry_van'];
$entry_beg02count = $_GET['entry_beg02count'];
$entry_timeout = $_GET['entry_timeout'];
$entry_tech = $_GET['entry_tech'];
$entry_cell = $_GET['entry_cell'];
$entry_timein = $_GET['entry_timein'];
$entry_end02count = $_GET['entry_end02count'];
$entry_referral = $_GET['entry_referral'];
$entry_timecalledin = $_GET['entry_timecalledin'];
$entry_deliverytime = $_GET['entry_deliverytime'];
$entry_customernumber = $_GET['entry_customernumber'];
$entry_fname = $_GET['entry_fname'];
$entry_lname = $_GET['entry_lname'];
$entry_Streetnumber = $_GET['entry_Streetnumber'];
$entry_Streetname = $_GET['entry_Streetname'];
$entry_City = $_GET['entry_City'];
$entry_Zip = $_GET['entry_Zip'];
$entry_phone = $_GET['entry_phone'];
$entry_delpu = $_GET['entry_delpu'];
$entry_equipment = $_GET['entry_equipment'];
$entry_status = $_GET['entry_status'];
$entry_comments = $_GET['entry_comments'];
$dstatusb = $entry_status;
$dstatusa = $entry_delpu;

?>
<html>
<head>
<title>
Brevard Medical Equipment Database - Edit
</title>
</head>
<body>
<?php
	if(loggedin()){
?>
<?php
	if($user_level == 1){
		echo "ERROR: USER DOES NOT HAVE ACCESS.";
		header('location: profile.php');
} else {
?>
<?php echo "Entry ID: <b>" . $db_id . "</b>" ?>
<form name="DBEdit" method ="post" />
<table border="3" style="width:100%">
	<tr>
		<td>
		<input type="text" name="Zone" value="<?php echo $entry_zone ?>" />
		</td>
	</tr>
	<tr><td></td>
		<td>
		<input type="text" name="Van" value="<?php echo $entry_van ?>" />
		</td>
		<td>Beg 02 Count: <input type="text" name="Beg02Count" value="<?php echo $entry_beg02count ?>" /></td>
		<td>Time Out: <input type="text" name="TimeOut" value="<?php echo $entry_timeout ?>"/></td>
	</tr>
<?php
// START USERNAME QUERY.

$list_query = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM users");


// CREATE ARRAY.
while($user_array[] = $list_query->fetch_object());


// Blank @ End of Array Fix
array_pop($user_array);

?>
	<tr>
		<td>Tech:
			<select name="user_select">
				<option value='<?php echo $username; ?>' default><?php echo $username; ?></option>
			<?php foreach($user_array as $option) : ?>
				<?php
				if($option->username == $username){
				} else {
				?>
				<option value='<?php echo $option->username; ?>'><?php echo $option->username; ?></option>
			<?php
				} 
			endforeach; 
			?>
			</select>
		</td>
		<td>Cell: <input type="text" name="Cell" value="<?php echo $entry_cell ?>" /> </td>
		<td>Time In: <input type="text" name="TimeIn" value="<?php echo $entry_timein ?>" /></td>
		<td>End 02 Count: <input type="text" name="End02Count" value="<?php echo $entry_end02count ?>" /></td>
	</tr>
		<tr>
		<td>Referral: <input type="text" name="Referral" value="<?php echo $entry_referral ?>" /></td>
		<td>Time Called In: <input type="text" name="TimeCalledIn" value="<?php echo $entry_timecalledin ?>" /></td>
		<td>Delivery Time: <input type="text" name="DeliveryTime" value="<?php echo $entry_deliverytime ?>" /></td>
		<td>Customer Number: <input type="text" name="CustomerNumber" value="<?php echo $entry_customernumber ?>" /></td>

	</tr>
	<tr>
		<td>Name:<br> 
		<font size=2>
		First:
		<input type="text" name="FName" value="<?php echo $entry_fname; ?>" /><br>
		Last:
		<input type="text" name="LName" value="<?php echo $entry_lname; ?>" /><br>
		</font>
		</td>
		<td>Phone: <input type="text" name="Phone" value="<?php echo $entry_phone ?>" /></td>
		<td>
		<input type="radio" name="DelPU"
		<?php if (isset($dstatusa) && $dstatusa=="delivery") echo "checked";?>
		value="delivery">Delivery
		</br>
		<input type="radio" name="DelPU"
		<?php if (isset($dstatusa) && $dstatusa=="pickup") echo "checked";?>
		value="pickup">Pick-up
		</br>
		<input type="radio" name="DelPU"
		<?php if (isset($dstatusa) && $dstatusa=="repair") echo "checked";?>
		value="repair">Repair
		</td>
	</tr>
	<tr>
		<td>Address:</br> <font size=1>
		House Number:&nbsp;&nbsp;<input type="text" name="Streetnumber" value="<?php echo $entry_Streetnumber ?>" /></br>
		Street Name:&nbsp;&nbsp;<input type="text" name="Streetname" value="<?php echo $entry_Streetname ?>" /></br>
		City:&nbsp;&nbsp;<input type="text" name="City" value="<?php echo $entry_City ?>" /></br>
		Zip Code:&nbsp;&nbsp;<input type="text" name="Zip" value="<?php echo $entry_Zip ?>" /></font>
		</td>
		<td>
		Equipment:<br><textarea rows="4" cols="50" name="Equipment"><?php echo $entry_equipment ?></textarea>
		</td>
		<td>
		Status:<br>
		<input type="radio" name="status"
		<?php if (isset($dstatusb) && $dstatusb=="completed") echo "checked";?>
		value="completed">Completed
		</br>
		<input type="radio" name="status"
		<?php if (isset($dstatusb) && $dstatusb=="other") echo "checked";?>
		value="other">Other
		</td>
		<td>
		Comments:<br><textarea rows="4" cols="50" name="Comments"><?php echo $entry_comments ?></textarea>
		</td>
	</tr>	
</table>
<div align="center">
<p><input type="submit" name="submit"/></p>
</form>
<?php
	$newzone = $_POST['Zone'];
	$newvan = $_POST['Van'];
	$newbeg02count = $_POST['Beg02Count'];
	$newtimeout = $_POST['TimeOut'];
	$newcell = $_POST['Cell'];
	$newtimein = $_POST['TimeIn'];
	$newend02count = $_POST['End02Count'];
	$newreferral = $_POST['Referral'];
	$newtimecalledin = $_POST['TimeCalledIn'];
	$newdeliverytime = $_POST['DeliveryTime'];
	$newcustomernumber = $_POST['CustomerNumber'];
	$newfname = $_POST['FName'];
	$newlname = $_POST['LName'];
	$newStreetnumber = $_POST['Streetnumber'];
	$newStreetname = $_POST['Streetname'];
	$new_city = $_POST['City'];
	$new_zip = $_POST['Zip'];
	$newphone = $_POST['Phone'];
	$newdelpu = $_POST['DelPU'];
	$newequipment = $_POST['Equipment'];
	$newstatus = $_POST['status'];
	$newcomments = $_POST['Comments'];
	
	$newtech = $_POST['user_select'];
	
	
	if($_POST['submit']) {
		mysqli_query($GLOBALS["___mysqli_ston"], "UPDATE `info` SET `zone`='$newzone', `van`='$newvan', `beg 02 count`='$newbeg02count', `time out`='$newtimeout', `tech`='$newtech', `cell`='$newcell', `time in`='$newtimein', `end 02 count`='$newend02count', `referral`='$newreferral', `time called in`='$newtimecalledin', `delivery time`='$newdeliverytime', `CustomerNumber`='$newcustomernumber', `fname`='$newfname', `lname`='$newlname', `Streetnumber`='$newStreetnumber', `Streetname`='$newStreetname', `City`='$new_city', `Zip`='$new_zip', `phone`='$newphone', `Del_PU`='$newdelpu', `equipment`='$newequipment', `comments`='$newcomments', `status`='$newstatus' WHERE `id`='$db_id'") or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));	
		echo "Database Entry Has Been Updated!";
		header('Location: entry_database.php');
	}
?>

<?php
}
?>



</body>
</html>
<?php
} else {
echo "<div align=center><b>You must be logged in to do that!</b></div>";
}
	include ("footer.php");

?>