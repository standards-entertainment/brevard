<?php
include 'includes/connect.php';
include 'includes/functions.php';
include("header.php");



$OIGet = 0;
$NOIGet = "order";
$NTableGet = $_GET['TableGet'];
if($NTableGet == ""){
$DSTableGet = "<a href='distribution.php?TableGet=1'>Delivery</a>";
$PUTableGet = "<a href='distribution.php?TableGet=2'>Pick-up</a>";
$NCITableGet = "<a href='distribution.php?TableGet=3'>New Cust. Info</a>";
// $InvTableGet = "<a href='distribution.php?TableGet=4'>Invoice</a>";
}
if($NTableGet == 1){
$TableGet = "DeliverySlip";
$OIGet = 0;
$ATableGet = "delslip";
$BTableGet = "Delivery";
$DSTableGet = "<b>Delivery</b>";
$PUTableGet = "<a href='distribution.php?TableGet=2'>Pick-up</a>";
$NCITableGet = "<a href='distribution.php?TableGet=3'>New Cust. Info</a>";
// $InvTableGet = "<a href='distribution.php?TableGet=4'>Invoice</a>";
}
if($NTableGet == 2){
$TableGet = "PickupSlip";
$OIGet = 0;
$ATableGet = "pu_slip";
$BTableGet = "Pick-up";
$DSTableGet = "<a href='distribution.php?TableGet=1'>Delivery</a>";
$PUTableGet = "<b>Pick-up</b>";
$NCITableGet = "<a href='distribution.php?TableGet=3'>New Cust. Info</a>";
// $InvTableGet = "<a href='distribution.php?TableGet=4'>Invoice</a>";
}
if($NTableGet == 3){
$TableGet = "NewCustInfo";
$OIGet = 0;
$ATableGet = "newcustinfo";
$BTableGet = "New Cust. Info";
$DSTableGet = "<a href='distribution.php?TableGet=1'>Delivery</a>";
$PUTableGet = "<a href='distribution.php?TableGet=2'>Pick-up</a>";
$NCITableGet = "<b>New Cust. Info</b>";
// $InvTableGet = "<a href='distribution.php?TableGet=4'>Invoice</a>";
}/* HIDE INVOICE FROM DISTRIBUTION FORM
if($NTableGet == 4){
$TableGet = "Invoice";
$OIGet = 1;
$ATableGet = "invoice";
$BTableGet = "Invoice";
$DSTableGet = "<a href='distribution.php?TableGet=1'>Delivery</a>";
$PUTableGet = "<a href='distribution.php?TableGet=2'>Pick-up</a>";
$NCITableGet = "<a href='distribution.php?TableGet=3'>New Cust. Info</a>";
$InvTableGet = "<b>Invoice</b>";
} */
if($OIGet == 1){
$NOIGet = "invoice";
} else {
$NOIGet = "order";
}
?>


    <html>
    <head>
        <title>Brevard Medical Equipment :: Distribution</title>
    </head>
    <body>
    <div align=center>
<?php
	if(loggedin()){
	if($user_level <= 1){
	echo "User does not have access.";
	} else {
?> Distribution: </br><?php echo $DSTableGet; ?> | <?php echo $PUTableGet; ?> | <?php echo $NCITableGet; ?></br><hr>
    </div>
<?php
$Query = "SELECT * FROM " . $TableGet . " WHERE `Sent`='0' OR `Verified`='0' ORDER BY ID DESC"; // Sort each entry by DATE, DESCENDING!

if($Query != '')
{
	$Result = mysqli_query($GLOBALS["___mysqli_ston"], $Query)// or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false))); 

	
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
					$accomplished = $information['Accomplished'];
					$accomplisher = $information['Accomplisher'];
					$complete = $information['Complete'];
					$verified = $information['Verified'];
					$driver = $information['Driver'];
					$sender = $information['Sender'];
					$completer = $information['Completer'];
					$verifier = $information['Verifier'];
					$eeq = array($information['eq1'], $information['eq2'], $information['eq3'], $information['eq4'], $information['eq5'], $information['eq6'], $information['eq7'], $information['eq8'], $information['eq9'], $information['eq10'], $information['eq11'], $information['eq12'], $information['eq13'], $information['eq14'], $information['eq15'], $information['eq16'], $information['eq17'], $information['eq18'], $information['eq19'], $information['eq20'], $information['eq21'], $information['eq22'], $information['eq23'], $information['eq24'], $information['eq25'], $information['eq26'], $information['eq27'], $information['eq28'], $information['eq29'], $information['eq30'], $information['eq31'], $information['eq32'], $information['eq33'], $information['eq34'], $information['eq35'], $information['eq36'], $information['eq37'], $information['eq38'], $information['eq39'], $information['eq40'], $information['eq41'], $information['eq42'], $information['eq43'], $information['eq44'], $information['eq45'], $information['eq46'], $information['eq47'], $information['eq48'], $information['eq49'], $information['eq50'], $information['eq51'], $information['eq52'], $information['eq53'], $information['eq54'], $information['eq55'], $information['eq56'], $information['eq57'], $information['eq58'], $information['eq59'], $information['eq60'], $information['eq61'], $information['eq62'], $information['eq63'], $information['eq64'], $information['eq65'], $information['eq66'], $information['eq67'], $information['eq68'], $information['eq69'], $information['eq70'], $information['eq71'], $information['eq72'], $information['eq73'], $information['eq74'], $information['eq75'], $information['eq76'], $information['eq77'], $information['eq78'], $information['eq79'], $information['eq80'], $information['eq81']);
					$specialinstructions = $information['specialinstructions'];
					$bhosp = $information['bhosp'];
					
	
	?>
<?php
if ($date2 != 1) {
$evitas = "";
} else {
$evitas = "VITAS";
}
if ($bhosp != 1) {
$eBHOSP = "";
} else {
$eBHOSP = "BHOSP";
}
?>
                   <table border="2" style="width:100%">
							<tr>
                                <td>
                                
                                    <?php
                                    echo "" . "<font size=3 COLOR=#ff3384> " . $city . "</font></b></u><FONT SIZE=3 COLOR=#000000> | </FONT></b></u>";
                                    echo "<b><u><font size=3 COLOR=#80b3ff>" . $address . "</font></u></b> | ";
                                    echo "<b><u><font size=3>" . $custname . "</font></u></b> | ";
                                    ?>
                                    <font color=red><b><?php echo $evitas . " " . $eBHOSP ?></b></font> | 
                                </td>
                                <td>
                                    <?php
                                    echo "" . "<font size=2>Zip:<b></font> " . $zip . "</b>";
                                    ?>
                                </td>
                                <td>
                                    <?php
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
                                <td>
                                Sent by: <?php echo $sender; ?>
                                </td>
                                <td><div align=center>
                                <?php
                                echo "<a href='" . $ATableGet . "_view.php?ID=$db_ID'>View " . $BTableGet . "</a>";
								?>
								</div>
                                </td>
                                </TR>
                                <TR>
                                <td colspan=6 rowspan=2>|
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
                                <?PHP ECHO "<a href='" . $ATableGet . "_edit.php?ID=" . $db_ID . "'>Edit</a>"; ?>
                                </form></div>
                                </td>
                            </tr>
                            <tr>
                            <td><div align=center>
<?php
if($verified == 1) {
$lverified = "<b><u>V</b></u>";
} else {
$lverified = "";
}
if($accomplished == 1) {
$laccomplished = "<b><u>A</b></u>";
} else {
$laccomplished = "";
}
if($complete == 1) {
$lcomplete = "<b><u>C</b></u>";
} else {
$lcomplete = "";
}
//Display correct driver name in echo:
$drivername = explode("/", $driver); // 0 = name | 1 = sort order (we dont need sort order here)
?>
                            <?php echo $drivername[0]; ?></br>
                            <?php echo $laccomplished; ?>
                            <?php echo $lverified; ?>
                            <?php echo $lcomplete; ?>
                            </div>
                            </td>
                            </tr>
                            <tr>
                            <td colspan=6><span style="Background-Color:#FFFF00">
                            <?php echo $specialinstructions; ?></span>
                            </td>
                            </tr>
</table></br>
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
include("footer.php");

?>