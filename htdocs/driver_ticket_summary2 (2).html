<?php
include 'includes/connect.php';
include 'includes/functions.php';
include("header.php"); 
$OIGet = 0;
$NOIGet = "order";
$NTableGet = $_GET['TableGet'];
//$NDTableGet = $_GET['TableGet'];
if($NDTableGet == ""){
//$NDTableGet = 1;
}
if($NTableGet == ""){
$DSTableGet = "<a href='driver_ticket.php?TableGet=1'>Delivery</a>";
$PUTableGet = "<a href='driver_ticket.php?TableGet=2'>Pick-up</a>";
$NCITableGet = "<a href='driver_ticket.php?TableGet=3'>New Cust. Info</a>";
// $InvTableGet = "<a href='driver_ticket.php?TableGet=4'>Invoice</a>";
}
if($NTableGet == 1){
$TableGet = "DeliverySlip";
$OIGet = 0;
$ATableGet = "delslip";
$BTableGet = "Delivery";
$DSTableGet = "<b>Delivery</b>";
$PUTableGet = "<a href='driver_ticket.php?TableGet=2'>Pick-up</a>";
$NCITableGet = "<a href='driver_ticket.php?TableGet=3'>New Cust. Info</a>";
// $InvTableGet = "<a href='driver_ticket.php?TableGet=4'>Invoice</a>";
}
if($NTableGet == 2){
$TableGet = "PickupSlip";
$OIGet = 0;
$ATableGet = "pu_slip";
$BTableGet = "Pick-up";
$DSTableGet = "<a href='driver_ticket.php?TableGet=1'>Delivery</a>";
$PUTableGet = "<b>Pick-up</b>";
$NCITableGet = "<a href='driver_ticket.php?TableGet=3'>New Cust. Info</a>";
// $InvTableGet = "<a href='driver_ticket.php?TableGet=4'>Invoice</a>";
}
if($NTableGet == 3){
$TableGet = "NewCustInfo";
$OIGet = 0;
$ATableGet = "newcustinfo";
$BTableGet = "New Cust. Info";
$DSTableGet = "<a href='driver_ticket.php?TableGet=1'>Delivery</a>";
$PUTableGet = "<a href='driver_ticket.php?TableGet=2'>Pick-up</a>";
$NCITableGet = "<b>New Cust. Info</b>";
// $InvTableGet = "<a href='driver_ticket.php?TableGet=4'>Invoice</a>";
} /* HIDE INVOICE FROM driver_ticket FORM
if($NTableGet == 4){
$TableGet = "Invoice";
$OIGet = 1;
$ATableGet = "invoice";
$BTableGet = "Invoice";
$DSTableGet = "<a href='driver_ticket.php?TableGet=1'>Delivery</a>";
$PUTableGet = "<a href='driver_ticket.php?TableGet=2'>Pick-up</a>";
$NCITableGet = "<a href='driver_ticket.php?TableGet=3'>New Cust. Info</a>";
$InvTableGet = "<b>Invoice</b>";
} */
if($OIGet == 1){
$NOIGet = "invoice";
} else {
$NOIGet = "order";
}

$driverget = $_GET['driver'];

if ($driverget != "") {
$driverdisplay = "<font size=2>Currently Displaying:</font> <b>" . $driverget . "</b>";
} else {
$driverdisplay = "";
}
?>


    <html>
    <head>
        <title>Brevard Medical Equipment :: Driver Ticket</title>
    </head>
    <body>
    <div align=center>
<?php
// ================================Driver Select Code================================
	if(loggedin()){
/*
View: <?php echo $DSTableGet; ?> | <?php echo $PUTableGet; ?> | <?php echo $NCITableGet; ?></br><hr>
 */
if($user_level > 1) {
// START USERNAME QUERY.

$list_queryb = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM users");


// CREATE ARRAY.
while($user_array[] = $list_queryb->fetch_object());


// Blank @ End of Array Fix
array_pop($user_array);
?>
<?php echo $driverdisplay; ?>
<form name="ViewDriver" method="get">
			<input type='text' name='TableGet' value='<?php echo $NDTableGet; ?>' hidden></br>
			<select name="driver">
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
			</select></br>
                    <input type="submit" name="view" value="View"></br>
</form>

<?php
}
if ($driverget != "" AND $_GET['view'] != "" AND $user_level > 1) {
$TableGet = "DeliverySlip";
$Query = "SELECT * FROM `$TableGet` WHERE`Driver`='" . $driverget . "' AND `Accomplished`='0' ORDER BY ID DESC"; // Sort each entry by DATE, DESCENDING!
} else {
$TableGet = "DeliverySlip";
$Query = "SELECT * FROM `$TableGet` WHERE `Driver`='" . $username . "' AND `Accomplished`='0' ORDER BY ID DESC"; // Sort each entry by DATE, DESCENDING!
}

// ==================================!Driver Select Code============================================

if($Query != '')
{
	$Result = mysqli_query($GLOBALS["___mysqli_ston"], $Query)
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
					$custname = $information['CustName'];
					$height = $information['Height'];
					$weight = $information['Weight'];
					$address = $information['Address'];
					$city = $information['City'];
					$zip = $information['Zip'];
					$phone = $information['Phone'];
					$equip = $information['Equip'] . " " . $information['Equip2'] . " " . $information['Equip3'];
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
					$sender = $information['Sender'];
					$completer = $information['Completer'];
					$verifier = $information['Verifier'];
					$specialinstructions = $information['specialinstructions'];
					$eeq = array($information['eq1'], $information['eq2'], $information['eq3'], $information['eq4'], $information['eq5'], $information['eq6'], $information['eq7'], $information['eq8'], $information['eq9'], $information['eq10'], $information['eq11'], $information['eq12'], $information['eq13'], $information['eq14'], $information['eq15'], $information['eq16'], $information['eq17'], $information['eq18'], $information['eq19'], $information['eq20'], $information['eq21'], $information['eq22'], $information['eq23'], $information['eq24'], $information['eq25'], $information['eq26'], $information['eq27'], $information['eq28'], $information['eq29'], $information['eq30'], $information['eq31'], $information['eq32'], $information['eq33'], $information['eq34'], $information['eq35'], $information['eq36'], $information['eq37'], $information['eq38'], $information['eq39'], $information['eq40'], $information['eq41'], $information['eq42'], $information['eq43'], $information['eq44'], $information['eq45'], $information['eq46'], $information['eq47'], $information['eq48'], $information['eq49'], $information['eq50'], $information['eq51'], $information['eq52'], $information['eq53'], $information['eq54'], $information['eq55'], $information['eq56'], $information['eq57'], $information['eq58'], $information['eq59'], $information['eq60'], $information['eq61'], $information['eq62'], $information['eq63'], $information['eq64'], $information['eq65'], $information['eq66'], $information['eq67'], $information['eq68'], $information['eq69'], $information['eq70'], $information['eq71'], $information['eq72'], $information['eq73'], $information['eq74'], $information['eq75'], $information['eq76'], $information['eq77'], $information['eq78'], $information['eq79'], $information['eq80'], $information['eq81']);
	
	?>
<?php
if ($date2 != 1) {
$evitas = "";
} else {
$evitas = "VITAS";
}
?><hr>Delivery:

                   <table border="2" style="width:100%">
							<tr>
                                <td> | <font color=red><b><?php echo $evitas ?></b></font> | 
                                    <?php
                                    echo "<b><u><font size=4>" . $custname . "</font></u></b>";
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    echo "" . "<font size=2>City:<b></font> " . $city . "</b>";
                                    ?>
                                </td>
                                <td>
                                	<?php
                                	echo "" . "<font size=2>Phone:<b></font> " . $phone . "</b>";
                                	?>
                                </td>
                                <td>
                                    <?php
                                    echo "" . "<font size=2>Special Instructions: <b><font color=red>" . $specialinstructions . "</b></font> | ";
                                    echo "" . "<font size=2>Date:</font> " . $date1 . "";
                                    ?>
                                </td>
                                <td>
                                	<?php
                                	echo "" . $time . "";
                                	?>
                                </td>
                                <td>
                                Posted by: <?php echo $poster; ?>
                                </td>
                                <td><div align=center>
                                <?php
                                //echo "<a href='" . $ATableGet . "_view.php?ID=$db_ID'>View " . $BTableGet . "</a>";
								?>
								</div>
                                </td>
                                </TR>
                                <TR>
                                <td colspan=6 rowspan=4>
<?php
$eeqcount = count($eeq);

for($x = 0; $x < $eeqcount; $x++) {
	if($eeq[$x] == ""){
	} else {
			if ($x >= 14 AND $x <= 28) {
			echo "<u><b><SPAN STYLE=' background-color:#FF0000'>";
			echo $eeq[$x];
			echo "</span></b></u> | ";
			} else {
    echo "<u>";
    echo $eeq[$x];
    echo "</u> | ";
    		}
    }
}
?>
                                </td>
                                <td><div align=center>
                                <?PHP // ECHO "<a href='" . $ATableGet . "_edit.php?ID=" . $db_ID . "'>Edit</a>"; ?>
                                </form></div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                Sent by: <?php echo $sender; ?>
                                </td>
                            </tr>
</table></br>
</hr>
<?php /*
if($query = "SELECT * FROM `DeliverySlip` WHERE `Driver`='" . $driverget . "' AND `Accomplished`='0' ORDER BY ID DESC"){
$query = "SELECT * FROM `PickupSlip` WHERE `Driver`='" . $driverget . "' AND `Accomplished`='0' ORDER BY ID DESC"; // Sort each entry by ID, DESCENDING!
}
if($query = "SELECT * FROM `PickupSlip` WHERE `Driver`='" . $driverget . "' AND `Accomplished`='0' ORDER BY ID DESC"){
$query = "SELECT * FROM `NewCustInfo` WHERE `Driver`='" . $driverget . "' AND `Accomplished`='0' ORDER BY ID DESC"; // Sort each entry by ID, DESCENDING!
}
if($query = "SELECT * FROM `NewCustInfo` WHERE `Driver`='" . $driverget . "' AND `Accomplished`='0' ORDER BY ID DESC"){
$query = "SELECT * FROM `DeliverySlip` WHERE `Driver`='" . $driverget . "' AND `Accomplished`='0' ORDER BY ID DESC"; // Sort each entry by ID, DESCENDING!
} */
}
?>
    </body>
    </html>


    <br>
<?php
}
if ($driverget != "" AND $_GET['view'] != "" AND $user_level > 1) {
$TableGet = "PickupSlip";
$Query = "SELECT * FROM `$TableGet` WHERE `Driver`='" . $driverget . "' AND `Accomplished`='0' ORDER BY ID DESC"; // Sort each entry by DATE, DESCENDING!
} else {
$TableGet = "PickupSlip";
$Query = "SELECT * FROM `$TableGet` WHERE `Driver`='" . $username . "' AND `Accomplished`='0' ORDER BY ID DESC"; // Sort each entry by DATE, DESCENDING!
}

// ==================================!Driver Select Code============================================

if($Query != '')
{
	$Result = mysqli_query($GLOBALS["___mysqli_ston"], $Query)
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
					$custname = $information['CustName'];
					$height = $information['Height'];
					$weight = $information['Weight'];
					$address = $information['Address'];
					$city = $information['City'];
					$zip = $information['Zip'];
					$phone = $information['Phone'];
					$equip = $information['Equip'] . " " . $information['Equip2'] . " " . $information['Equip3'];
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
					$sender = $information['Sender'];
					$completer = $information['Completer'];
					$verifier = $information['Verifier'];
					$specialinstructions = $information['specialinstructions'];
					$eeq = array($information['eq1'], $information['eq2'], $information['eq3'], $information['eq4'], $information['eq5'], $information['eq6'], $information['eq7'], $information['eq8'], $information['eq9'], $information['eq10'], $information['eq11'], $information['eq12'], $information['eq13'], $information['eq14'], $information['eq15'], $information['eq16'], $information['eq17'], $information['eq18'], $information['eq19'], $information['eq20'], $information['eq21'], $information['eq22'], $information['eq23'], $information['eq24'], $information['eq25'], $information['eq26'], $information['eq27'], $information['eq28'], $information['eq29'], $information['eq30'], $information['eq31'], $information['eq32'], $information['eq33'], $information['eq34'], $information['eq35'], $information['eq36'], $information['eq37'], $information['eq38'], $information['eq39'], $information['eq40'], $information['eq41'], $information['eq42'], $information['eq43'], $information['eq44'], $information['eq45'], $information['eq46'], $information['eq47'], $information['eq48'], $information['eq49'], $information['eq50'], $information['eq51'], $information['eq52'], $information['eq53'], $information['eq54'], $information['eq55'], $information['eq56'], $information['eq57'], $information['eq58'], $information['eq59'], $information['eq60'], $information['eq61'], $information['eq62'], $information['eq63'], $information['eq64'], $information['eq65'], $information['eq66'], $information['eq67'], $information['eq68'], $information['eq69'], $information['eq70'], $information['eq71'], $information['eq72'], $information['eq73'], $information['eq74'], $information['eq75'], $information['eq76'], $information['eq77'], $information['eq78'], $information['eq79'], $information['eq80'], $information['eq81']);
	
	?>
<?php
if ($date2 != 1) {
$evitas = "";
} else {
$evitas = "VITAS";
}
?><hr>Pickup:
                   <table border="2" style="width:100%">
							<tr>
                                <td> | <font color=red><b><?php echo $evitas ?></b></font> | 
                                    <?php
                                    echo "<b><u><font size=4>" . $custname . "</font></u></b>";
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    echo "" . "<font size=2>City:<b></font> " . $city . "</b>";
                                    ?>
                                </td>
                                <td>
                                	<?php
                                	echo "" . "<font size=2>Phone:<b></font> " . $phone . "</b>";
                                	?>
                                </td>
                                <td>
                                    <?php
                                    echo "" . "<font size=2>Special Instructions: <b><font color=red>" . $specialinstructions . "</b></font> | ";
                                    echo "" . "<font size=2>Date:</font> " . $date1 . "";
                                    ?>
                                </td>
                                <td>
                                	<?php
                                	echo "" . $time . "";
                                	?>
                                </td>
                                <td>
                                Posted by: <?php echo $poster; ?>
                                </td>
                                <td><div align=center>
                                <?php
                                //echo "<a href='" . $ATableGet . "_view.php?ID=$db_ID'>View " . $BTableGet . "</a>";
								?>
								</div>
                                </td>
                                </TR>
                                <TR>
                                <td colspan=6 rowspan=4>
<?php
$eeqcount = count($eeq);

for($x = 0; $x < $eeqcount; $x++) {
	if($eeq[$x] == ""){
	} else {
			if ($x >= 14 AND $x <= 28) {
			echo "<u><b><SPAN STYLE=' background-color:#FF0000'>";
			echo $eeq[$x];
			echo "</span></b></u> | ";
			} else {
    echo "<u>";
    echo $eeq[$x];
    echo "</u> | ";
    		}
    }
}
?>
                                </td>
                                <td><div align=center>
                                <?PHP // ECHO "<a href='" . $ATableGet . "_edit.php?ID=" . $db_ID . "'>Edit</a>"; ?>
                                </form></div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                Sent by: <?php echo $sender; ?>
                                </td>
                            </tr>
</table></br>
</hr>
<?php /*
if($query = "SELECT * FROM `DeliverySlip` WHERE `Driver`='" . $driverget . "' AND `Accomplished`='0' ORDER BY ID DESC"){
$query = "SELECT * FROM `PickupSlip` WHERE `Driver`='" . $driverget . "' AND `Accomplished`='0' ORDER BY ID DESC"; // Sort each entry by ID, DESCENDING!
}
if($query = "SELECT * FROM `PickupSlip` WHERE `Driver`='" . $driverget . "' AND `Accomplished`='0' ORDER BY ID DESC"){
$query = "SELECT * FROM `NewCustInfo` WHERE `Driver`='" . $driverget . "' AND `Accomplished`='0' ORDER BY ID DESC"; // Sort each entry by ID, DESCENDING!
}
if($query = "SELECT * FROM `NewCustInfo` WHERE `Driver`='" . $driverget . "' AND `Accomplished`='0' ORDER BY ID DESC"){
$query = "SELECT * FROM `DeliverySlip` WHERE `Driver`='" . $driverget . "' AND `Accomplished`='0' ORDER BY ID DESC"; // Sort each entry by ID, DESCENDING!
} */
}
?>
    </body>
    </html>


    <br>
<?php
}
if ($driverget != "" AND $_GET['view'] != "" AND $user_level > 1) {
$TableGet = "NewCustInfo";
$Query = "SELECT * FROM `$TableGet` WHERE `Driver`='" . $driverget . "' AND `Accomplished`='0' ORDER BY ID DESC"; // Sort each entry by DATE, DESCENDING!
} else {
$TableGet = "NewCustInfo";
$Query = "SELECT * FROM `$TableGet` WHERE `Driver`='" . $username . "' AND `Accomplished`='0' ORDER BY ID DESC"; // Sort each entry by DATE, DESCENDING!
}

// ==================================!Driver Select Code============================================

if($Query != '')
{
	$Result = mysqli_query($GLOBALS["___mysqli_ston"], $Query)
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
					$custname = $information['CustName'];
					$height = $information['Height'];
					$weight = $information['Weight'];
					$address = $information['Address'];
					$city = $information['City'];
					$zip = $information['Zip'];
					$phone = $information['Phone'];
					$equip = $information['Equip'] . " " . $information['Equip2'] . " " . $information['Equip3'];
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
					$sender = $information['Sender'];
					$completer = $information['Completer'];
					$verifier = $information['Verifier'];
					$specialinstructions = $information['specialinstructions'];
					$eeq = array($information['eq1'], $information['eq2'], $information['eq3'], $information['eq4'], $information['eq5'], $information['eq6'], $information['eq7'], $information['eq8'], $information['eq9'], $information['eq10'], $information['eq11'], $information['eq12'], $information['eq13'], $information['eq14'], $information['eq15'], $information['eq16'], $information['eq17'], $information['eq18'], $information['eq19'], $information['eq20'], $information['eq21'], $information['eq22'], $information['eq23'], $information['eq24'], $information['eq25'], $information['eq26'], $information['eq27'], $information['eq28'], $information['eq29'], $information['eq30'], $information['eq31'], $information['eq32'], $information['eq33'], $information['eq34'], $information['eq35'], $information['eq36'], $information['eq37'], $information['eq38'], $information['eq39'], $information['eq40'], $information['eq41'], $information['eq42'], $information['eq43'], $information['eq44'], $information['eq45'], $information['eq46'], $information['eq47'], $information['eq48'], $information['eq49'], $information['eq50'], $information['eq51'], $information['eq52'], $information['eq53'], $information['eq54'], $information['eq55'], $information['eq56'], $information['eq57'], $information['eq58'], $information['eq59'], $information['eq60'], $information['eq61'], $information['eq62'], $information['eq63'], $information['eq64'], $information['eq65'], $information['eq66'], $information['eq67'], $information['eq68'], $information['eq69'], $information['eq70'], $information['eq71'], $information['eq72'], $information['eq73'], $information['eq74'], $information['eq75'], $information['eq76'], $information['eq77'], $information['eq78'], $information['eq79'], $information['eq80'], $information['eq81']);
	
	?>
<?php
if ($date2 != 1) {
$evitas = "";
} else {
$evitas = "VITAS";
}
?><hr>New Customer Info:
                   <table border="2" style="width:100%">
							<tr>
                                <td> | <font color=red><b><?php echo $evitas ?></b></font> | 
                                    <?php
                                    echo "<b><u><font size=4>" . $custname . "</font></u></b>";
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    echo "" . "<font size=2>City:<b></font> " . $city . "</b>";
                                    ?>
                                </td>
                                <td>
                                	<?php
                                	echo "" . "<font size=2>Phone:<b></font> " . $phone . "</b>";
                                	?>
                                </td>
                                <td>
                                    <?php
                                    echo "" . "<font size=2>Special Instructions: <b><font color=red>" . $specialinstructions . "</b></font> | ";
                                    echo "" . "<font size=2>Date:</font> " . $date1 . "";
                                    ?>
                                </td>
                                <td>
                                	<?php
                                	echo "" . $time . "";
                                	?>
                                </td>
                                <td>
                                Posted by: <?php echo $poster; ?>
                                </td>
                                <td><div align=center>
                                <?php
                                // echo "<a href='" . $ATableGet . "_view.php?ID=$db_ID'>View " . $BTableGet . "</a>";
								?>
								</div>
                                </td>
                                </TR>
                                <TR>
                                <td colspan=6 rowspan=4>
<?php
$eeqcount = count($eeq);

for($x = 0; $x < $eeqcount; $x++) {
	if($eeq[$x] == ""){
	} else {
			if ($x >= 14 AND $x <= 28) {
			echo "<u><b><SPAN STYLE=' background-color:#FF0000'>";
			echo $eeq[$x];
			echo "</span></b></u> | ";
			} else {
    echo "<u>";
    echo $eeq[$x];
    echo "</u> | ";
    		}
    }
}
?>
                                </td>
                                <td><div align=center>
                                <?PHP // ECHO "<a href='" . $ATableGet . "_edit.php?ID=" . $db_ID . "'>Edit</a>"; ?>
                                </form></div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                Sent by: <?php echo $sender; ?>
                                </td>
                            </tr>
</table></br>
</hr>
<?php /*
if($query = "SELECT * FROM `DeliverySlip` WHERE `Driver`='" . $driverget . "' AND `Accomplished`='0' ORDER BY ID DESC"){
$query = "SELECT * FROM `PickupSlip` WHERE `Driver`='" . $driverget . "' AND `Accomplished`='0' ORDER BY ID DESC"; // Sort each entry by ID, DESCENDING!
}
if($query = "SELECT * FROM `PickupSlip` WHERE `Driver`='" . $driverget . "' AND `Accomplished`='0' ORDER BY ID DESC"){
$query = "SELECT * FROM `NewCustInfo` WHERE `Driver`='" . $driverget . "' AND `Accomplished`='0' ORDER BY ID DESC"; // Sort each entry by ID, DESCENDING!
}
if($query = "SELECT * FROM `NewCustInfo` WHERE `Driver`='" . $driverget . "' AND `Accomplished`='0' ORDER BY ID DESC"){
$query = "SELECT * FROM `DeliverySlip` WHERE `Driver`='" . $driverget . "' AND `Accomplished`='0' ORDER BY ID DESC"; // Sort each entry by ID, DESCENDING!
} */
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