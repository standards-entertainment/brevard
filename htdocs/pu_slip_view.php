<?php
include 'includes/connect.php';
include 'includes/functions.php';
include("header.php");
	include('stylings.php');
$get_db_id = $_GET['ID'];


$result = mysqli_query($GLOBALS["___mysqli_ston"], $query);

$list_query = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM PickupSlip");
while ($run_list = mysqli_fetch_array($list_query)) 
{
}
?>


    <html>
    <head>
        <title>Brevard Medical Equipment :: Pick-up View</title>
    </head>
    <body>
    <div align=center>
<?php
	if(loggedin()){
	if($user_level == 1){
	echo "User does not have access.";
	} else {
?>


    </div>
<?php
$Query = "SELECT * FROM PickupSlip WHERE ID = '$get_db_id'"; // Sort each entry by DATE, DESCENDING!

if($Query != '')
{
	$Result = mysqli_query($GLOBALS["___mysqli_ston"], $Query) or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false))); 

	
?>
<?php

	while($information = mysqli_fetch_array($Result))
	{
					$db_ID = $information['ID'];
					$patientnum = $information['PatientNum'];
					$referral = $information['Referral'];
					$preparedby = $information['PreparedBy'];
					$date1 = $information['Date1'];
					$time = $information['Time'];
					$dateofpickup = $information['dateofpickup'];
					$custname = $information['CustName'];
					$height = $information['Height'];
					$weight = $information['Weight'];
					$address = $information['Address'];
					$city = $information['City'];
					$zip = $information['Zip'];
					$phone = $information['Phone'];
					$equip1 = $information['Equip'];
					$equip2 = $information['Equip2'];
					$equip3 = $information['Equip3'];
					$CSig = $information['CSig1'];
					$date2 = $information['Date2'];
					$doffice = $information['DriverOffice'];
					$lnuspo2del = $information['LNUSPO2Del'];
					$lnecpu = $information['LNECPU'];
					$poster = $information['Poster'];
					$sent = $information['Sent'];
					$complete = $information['Complete'];
					$verified = $information['Verified'];
					$driver = $information['Driver'];
					$specialinstructions = $information['specialinstructions'];
					$sender = $information['Sender'];
					$verifier = $information['Verifier'];
					$completer = $information['Completer'];
					$accomplished = $information['Accomplished'];
					$accomplisher = $information['Accomplisher'];
					$eeq = array($information['eq1'], $information['eq2'], $information['eq3'], $information['eq4'], $information['eq5'], $information['eq6'], $information['eq7'], $information['eq8'], $information['eq9'], $information['eq10'], $information['eq11'], $information['eq12'], $information['eq13'], $information['eq14'], $information['eq15'], $information['eq16'], $information['eq17'], $information['eq18'], $information['eq19'], $information['eq20'], $information['eq21'], $information['eq22'], $information['eq23'], $information['eq24'], $information['eq25'], $information['eq26'], $information['eq27'], $information['eq28'], $information['eq29'], $information['eq30'], $information['eq31'], $information['eq32'], $information['eq33'], $information['eq34'], $information['eq35'], $information['eq36'], $information['eq37'], $information['eq38'], $information['eq39'], $information['eq40'], $information['eq41'], $information['eq42'], $information['eq43'], $information['eq44'], $information['eq45'], $information['eq46'], $information['eq47'], $information['eq48'], $information['eq49'], $information['eq50'], $information['eq51'], $information['eq52'], $information['eq53'], $information['eq54'], $information['eq55'], $information['eq56'], $information['eq57'], $information['eq58'], $information['eq59'], $information['eq60'], $information['eq61'], $information['eq62'], $information['eq63'], $information['eq64'], $information['eq65'], $information['eq66'], $information['eq67'], $information['eq68'], $information['eq69'], $information['eq70'], $information['eq71'], $information['eq72'], $information['eq73'], $information['eq74'], $information['eq75'], $information['eq76'], $information['eq77'], $information['eq78'], $information['eq79'], $information['eq80'], $information['eq81']);
					$esendtime = $information['SendTime'];
					$ecompletetime = $information['CompleteTime'];
					$eaccomplishtime = $information['AccomplishTime'];
					$everifytime = $information['VerifyTime'];
					$eedittime = $information['EditTime'];
					$editor = $information['Editor'];
					
	
	?>
    <body>
    <div align=center>
    <font size=6 color="#000000"><b><span style="Background-Color:#FFFF00">
    PICK-UP SLIP</SPAN></b></BR>
    </font>
    </div>
    <div align=center> 
    <form name="infoequip" method="post">
    <table>
    <tr>
    <td>
<?php
if ($date2 != 1) {
$evitas = "";
} else {
$evitas = "VITAS";
}
?>
    Patient #: <?php echo $patientnum; ?></br>
    Referral: <?php echo $referral; ?> | <font color=red><b><?php echo $evitas ?></b></font> | 
    Prepared By: <?php echo $preparedby; ?>&nbsp;
    Date: <b><u><?php echo $date1; ?> </u></b>&nbsp;
    Time: <b><u><?php echo $time; ?> </u></b></br>
    Date of Pickup: <?php echo $dateofpickup; ?></br>
    Customer Name: <?php echo $custname; ?>
    Height: <?php echo $height; ?>
    Weight: <?php echo $weight; ?></br>
    Address: <?php echo $address; ?></br>
    City: <?php echo $city; ?>
    Phone: <?php echo $phone; ?>
    </td>
    </tr>
    </table>
    <?php
   //  Equipment Starts Here //
   ?>
   </br>
   <div align=center>
   <font size=5><SPAN STYLE="BACKGROUND-COLOR: #FFFF00">
   EQUIPMENT
   </SPAN></font>
   </div>
    <table></br>
    <tr>
    <td>|
<?php
$eeqcount = count($eeq);

for($x = 0; $x < $eeqcount; $x++) {
	if($eeq[$x] == ""){
	} else {
    echo "<u>";
    echo $eeq[$x];
    echo "</u> | ";
    }
}
?>
    </td>
    </tr>
    </table>
    <?php
    // EQUIPMENT ENDS HERE
    ?>
    <FONT SIZE=3>
   </br></br>
    Driver/Office: <b><?php echo $doffice; ?></br></br> 
    </b>
    Special Instructions:</br>
    <?php echo $specialinstructions; ?></br>
    
<?php
//BUTTONS MENU START
if($user_level >= 2) {
	if($sent == 1){
            //Display correct driver name in echo:
            $drivername = explode("/", $driver);
		echo "Status: (" .  $drivername[0] . ") <input type='submit' name='Retract' value='Retract'>";
	
		//echo "Status: (" . $driver . ") <a href='order_option.php?TableGet=1&db_id=1&sent=0&complete=$complete&verified=$verified'>Retract</a>";
	} else if ($sent == 0){
		echo "Status: ( No Driver Selected )";
	}
}
if($user_level >= 1) {
		if($accomplished == 1){
			echo "<input type='submit' name='AccomplishA' value='Accomplished'>";
	
		//echo " | <a href='order_option.php?TableGet=1&db_id=1&sent=$sent&complete=0&verified=$verified'>Mark as Incomplete</a>";
		} else if($accomplished == 0){
			echo "<input type='submit' name='AccomplishB' value='Unaccomplished'>";
		
		//echo " | <a href='order_option.php?TableGet=1&db_id=1&sent=$sent&complete=1&verified=$verified'>Mark as Complete</a>";
		}
}
if($user_level >= 3) {
	if($verified == 1){
		echo "<input type='submit' name='VerifyA' value='Verified'>";
	
		//echo " | <a href='order_option.php?TableGet=1&db_id=1&sent=$sent&complete=$complete&verified=0'>Cancel Verification</a>";
	} else if($verified == 0){
		echo "<input type='submit' name='VerifyB' value='Unverified'>";
	
		//echo " | <a href='order_option.php?TableGet=1&db_id=1&sent=$sent&complete=$complete&verified=1'>Verify</a>";
	}
}
if($user_level >= 4) {
	if($complete == 1){
		echo "<input type='submit' name='CompleteA' value='Complete'>";
	
		//echo " | <a href='order_option.php?TableGet=1&db_id=1&sent=$sent&complete=0&verified=$verified'>Mark as Incomplete</a>";
	} else if($complete == 0){
		echo "<input type='submit' name='CompleteB' value='Incomplete'>";
		
		//echo " | <a href='order_option.php?TableGet=1&db_id=1&sent=$sent&complete=1&verified=$verified'>Mark as Complete</a>";
	}
}
//BUTTON MENU ENDS
?>
									</div>
                            	</td>
                            </tr>
</table></br><div align=center>
<?PHP ECHO "<a href='pu_slip_edit.php?ID=" . $get_db_id . "'>Edit</a></br>"; ?>
								<?php
// START USERNAME QUERY.

$list_queryb = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM users");


// CREATE ARRAY.
while($user_array[] = $list_queryb->fetch_object());


// Blank @ End of Array Fix
array_pop($user_array);

?>
<form name="SendDriver" method="post">

			<select name="driverA">
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
			$driverA = $_POST['driverA'];
			?>
			</select></br>
                    <input type="submit" name="SubmitA" value="Send to User"></br>

<?php
$sendtime = date("h:i:sa") . " " . date("Y/m/d");
$accomplishtime = date("Y/m/d");
$accomplishtime2 = date("h:i:sa");
$verifytime = date("h:i:sa") . " " . date("Y/m/d");
$completetime = date("h:i:sa") . " " . date("Y/m/d");
$edittime = date("h:i:sa") . " " . date("Y/m/d");
$tablename = "PickupSlip";
$saction = "Send";
$aaction = "Accomplish";
$vaction = "Verify";
$caction = "Complete";
$raction = "Retract";
$icaction = "Incomplete";
$uaaction = "Unaccomplish";
$uvaction = "Unverify";

                if($_POST['Retract']) {
				mysqli_query($GLOBALS["___mysqli_ston"], "UPDATE PickupSlip SET `Driver`='', `Sent`='0', `Sender`='" . $username . "' WHERE `ID`='" . $db_ID . "'") or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));	
					mysqli_query($GLOBALS["___mysqli_ston"], "INSERT INTO AuditTrail (`ID`,`TableName`,`AuditID`,`Username`,`Action`,`Time`)
					Values('','$tablename','$db_ID','$username','$raction','$edittime')") or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
					echo "Driver ticket has been issued successfully, thank you.</br>";
					echo "<br><a href='pu_slip_view.php?ID=" . $db_ID . "'>Refresh</a>";
					header('Location: pu_slip_view.php?ID=' . $db_ID);
				} 
				
                if($_POST['CompleteA']) {
				mysqli_query($GLOBALS["___mysqli_ston"], "UPDATE PickupSlip SET `Complete`='0', `Completer`='" . $username . "', `Verified`='0', `Verifier`='" . $username . "' WHERE `ID`='" . $db_ID . "'") or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));	
					mysqli_query($GLOBALS["___mysqli_ston"], "INSERT INTO AuditTrail (`ID`,`TableName`,`AuditID`,`Username`,`Action`,`Time`)
					Values('','$tablename','$db_ID','$username','$icaction','$edittime')") or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
					echo "Driver ticket has been issued successfully, thank you.</br>";
					echo "<br><a href='pu_slip_view.php?ID=" . $db_ID . "'>Refresh</a>";
					header('Location: pu_slip_view.php?ID=' . $db_ID);
				} 
				
                if($_POST['CompleteB']) {
				mysqli_query($GLOBALS["___mysqli_ston"], "UPDATE PickupSlip SET `Complete`='1', `Completer`='" . $username . "',`CompleteTime`='$completetime', `Verified`='1', `Verifier`='" . $username . "',`VerifyTime`='$verifytime' WHERE `ID`='" . $db_ID . "'") or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));	
					mysqli_query($GLOBALS["___mysqli_ston"], "INSERT INTO AuditTrail (`ID`,`TableName`,`AuditID`,`Username`,`Action`,`Time`)
					Values('','$tablename','$db_ID','$username','$caction','$edittime')") or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
					echo "Driver ticket has been issued successfully, thank you.</br>";
					echo "<br><a href='pu_slip_view.php?ID=" . $db_ID . "'>Refresh</a>";
					header('Location: pu_slip_view.php?ID=' . $db_ID);
				} 
				
                if($_POST['VerifyA']) {
				mysqli_query($GLOBALS["___mysqli_ston"], "UPDATE PickupSlip SET `Verified`='0', `Verifier`='" . $username . "', `Complete`='0', `Completer`='" . $username . "' WHERE `ID`='" . $db_ID . "'") or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));	
					mysqli_query($GLOBALS["___mysqli_ston"], "INSERT INTO AuditTrail (`ID`,`TableName`,`AuditID`,`Username`,`Action`,`Time`)
					Values('','$tablename','$db_ID','$username','$uvaction','$edittime')") or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
					echo "Driver ticket has been issued successfully, thank you.</br>";
					echo "<br><a href='pu_slip_view.php?ID=" . $db_ID . "'>Refresh</a>";
					header('Location: pu_slip_view.php?ID=' . $db_ID);
				} 
				
                if($_POST['VerifyB']) {
				mysqli_query($GLOBALS["___mysqli_ston"], "UPDATE PickupSlip SET `Verified`='1', `Verifier`='" . $username . "',`VerifyTime`='$verifytime', `Complete`='1', `Completer`='" . $username . "',`CompleteTime`='$completetime' WHERE `ID`='" . $db_ID . "'") or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));	
					mysqli_query($GLOBALS["___mysqli_ston"], "INSERT INTO AuditTrail (`ID`,`TableName`,`AuditID`,`Username`,`Action`,`Time`)
					Values('','$tablename','$db_ID','$username','$vaction','$edittime')") or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
					echo "Driver ticket has been issued successfully, thank you.</br>";
					echo "<br><a href='pu_slip_view.php?ID=" . $db_ID . "'>Refresh</a>";
					header('Location: pu_slip_view.php?ID=' . $db_ID);
				} 
                if($_POST['SubmitA']) {
                   //edited for correct input
                    $drivername = explode("/", $driver);
                    $DriverNew=$driverA."/".$drivername[1];
				mysqli_query($GLOBALS["___mysqli_ston"], "UPDATE PickupSlip SET `Driver`='" .  $DriverNew . "', `Sent`='1', `Sender`='" . $username . "',`SendTime`='$sendtime' WHERE `ID`='" . $db_ID . "'") or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));	
					mysqli_query($GLOBALS["___mysqli_ston"], "INSERT INTO AuditTrail (`ID`,`TableName`,`AuditID`,`Username`,`Action`,`Time`)
					Values('','$tablename','$db_ID','$username','$saction','$edittime')") or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
					echo "Driver ticket has been issued successfully, thank you.</br>";
					echo "<br><a href='pu_slip_view.php?ID=" . $db_ID . "'>Refresh</a>";
					header('Location: pu_slip_view.php?ID=' . $db_ID);
				} 
                if($_POST['AccomplishA']) {
				mysqli_query($GLOBALS["___mysqli_ston"], "UPDATE PickupSlip SET `Accomplished`='0' WHERE `ID`='" . $db_ID . "'") or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));	
					mysqli_query($GLOBALS["___mysqli_ston"], "INSERT INTO AuditTrail (`ID`,`TableName`,`AuditID`,`Username`,`Action`,`Time`)
					Values('','$tablename','$db_ID','$username','$uaaction','$edittime')") or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
					echo "Driver ticket has been issued successfully, thank you.</br>";
					echo "<br><a href='pu_slip_view.php?ID=" . $db_ID . "'>Refresh</a>";
					header('Location: pu_slip_view.php?ID=' . $db_ID);
				} 
				
                if($_POST['AccomplishB']) {
				mysqli_query($GLOBALS["___mysqli_ston"], "UPDATE PickupSlip SET `Accomplished`='1', `Accomplisher`='" . $username . "',`AccomplishTime`='$accomplishtime',`CSig1`='$accomplishtime2' WHERE `ID`='" . $db_ID . "'") or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));	
					mysqli_query($GLOBALS["___mysqli_ston"], "INSERT INTO AuditTrail (`ID`,`TableName`,`AuditID`,`Username`,`Action`,`Time`)
					Values('','$tablename','$db_ID','$username','$aaction','$edittime')") or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
					echo "Driver ticket has been issued successfully, thank you.</br>";
					echo "<br><a href='pu_slip_view.php?ID=" . $db_ID . "'>Refresh</a>";
					header('Location: pu_slip_view.php?ID=' . $db_ID);
				} 
				
?>
</form></br>
<table border=1>
<tr>
<td>
Created By:
</td>
<td>
At:
</td>
<td>
Edited By:
</td>
<td>
At:
</td>
<td>
Sent By:
</td>
<td>
At:
</td>
</tr>
<tr>
<td>
<?php echo $poster; ?>
</td>
<td>
<?php echo $time; ?> <?php echo $date1; ?>
</td>
<td>
<?php echo $editor; ?>
</td>
<td>
<?php echo $eedittime; ?>
</td>
<td>
<?php echo $sender; ?>
</td>
<td>
<?php echo $esendtime; ?>
</td>
</tr>
<tr>
<td>
Accomplished By:
</td>
<td>
At:
</td>
<td>
Verified By:
</td>
<td>
At:
</td>
<td>
Completed By:
</td>
<td>
At:
</td>
</tr>
<tr>
<td>
<?php echo $accomplisher; ?>
</td>
<td>
<?php echo $eaccomplishtime; ?>
</td>
<td>
<?php echo $verifier; ?>
</td>
<td>
<?php echo $everifytime; ?>
</td>
<td>
<?php echo $completer; ?>
</td>
<td>
<?php echo $ecompletetime; ?>
</td>
</tr>
</table>
</div>
<?php
}
?>
    </body>
    </html>


    <br>
<?php
}
}
} else {
echo "<div align=center><b>You must be logged in to do that!</b></div>";
}
include(__DIR__ . "/footer.php");

?>