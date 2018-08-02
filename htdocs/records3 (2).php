<?php
include 'includes/connect.php';
include 'includes/functions.php';
include("header.php");



$OIGet = 0;
$NOIGet = "order";
$NTableGet = $_GET['TableGet'];
if($NTableGet == ""){
$DSTableGet = "<a href='records3.php?TableGet=1'>Delivery</a>";
$PUTableGet = "<a href='records3.php?TableGet=2'>Pick-up</a>";
$NCITableGet = "<a href='records3.php?TableGet=3'>New Cust. Info</a>";
$InvTableGet = "<a href='records3.php?TableGet=4'>Invoice</a>";
$CruTableGet = "<a href='records3.php?TableGet=5'>Cruise</a>";
}
if($NTableGet == 1){
$TableGet = "DeliverySlip";
$OIGet = 0;
$ATableGet = "delslip";
$BTableGet = "Delivery";
$DSTableGet = "<b>Delivery</b>";
$PUTableGet = "<a href='records3.php?TableGet=2'>Pick-up</a>";
$NCITableGet = "<a href='records3.php?TableGet=3'>New Cust. Info</a>";
$InvTableGet = "<a href='records3.php?TableGet=4'>Invoice</a>";
$CruTableGet = "<a href='records3.php?TableGet=5'>Cruise</a>";
}
if($NTableGet == 2){
$TableGet = "PickupSlip";
$OIGet = 0;
$ATableGet = "pu_slip";
$BTableGet = "Pick-up";
$DSTableGet = "<a href='records3.php?TableGet=1'>Delivery</a>";
$PUTableGet = "<b>Pick-up</b>";
$NCITableGet = "<a href='records3.php?TableGet=3'>New Cust. Info</a>";
$InvTableGet = "<a href='records3.php?TableGet=4'>Invoice</a>";
$CruTableGet = "<a href='records3.php?TableGet=5'>Cruise</a>";
}
if($NTableGet == 3){
$TableGet = "NewCustInfo";
$OIGet = 0;
$ATableGet = "newcustinfo";
$BTableGet = "New Cust. Info";
$DSTableGet = "<a href='records3.php?TableGet=1'>Delivery</a>";
$PUTableGet = "<a href='records3.php?TableGet=2'>Pick-up</a>";
$NCITableGet = "<b>New Cust. Info</b>";
$InvTableGet = "<a href='records3.php?TableGet=4'>Invoice</a>";
$CruTableGet = "<a href='records3.php?TableGet=5'>Cruise</a>";
}
if($NTableGet == 4){
$TableGet = "Invoice";
$ATableGet = "invoice";
$BTableGet = "Invoice";
$DSTableGet = "<a href='records3.php?TableGet=1'>Delivery</a>";
$PUTableGet = "<a href='records3.php?TableGet=2'>Pick-up</a>";
$NCITableGet = "<a href='records3.php?TableGet=3'>New Cust. Info</a>";
$InvTableGet = "<b>Invoice</b>";
$CruTableGet = "<a href='records3.php?TableGet=5'>Cruise</a>";
}
if($NTableGet == 5){
$TableGet = "CruiseSlip";
$ATableGet = "cruiseslip";
$BTableGet = "Cruise";
$DSTableGet = "<a href='records3.php?TableGet=1'>Delivery</a>";
$PUTableGet = "<a href='records3.php?TableGet=2'>Pick-up</a>";
$NCITableGet = "<a href='records3.php?TableGet=3'>New Cust. Info</a>";
$InvTableGet = "<a href='records3.php?TableGet=4'>Invoice</a>";
$CruTableGet = "<b>Cruise</b>";
}
?>


    <html>
    <head>
        <title>Brevard Medical Equipment :: Records</title>
    </head>
    <body>
    <div align=center>
    
<form name='search' method='get'>
<input type="hidden" name="TableGet" value='<?php echo $NTableGet; ?>' />
<input type='text' name='search'>
<input type='submit' name='submit' value='Search'>
</form>

<?php
	if(loggedin()){
	if($user_level <= 1){
	echo "User does not have access.";
	} else {
?> Records:</br> <?php echo $DSTableGet; ?> | <?php echo $PUTableGet; ?> | <?php echo $NCITableGet; ?> | <?php echo $CruTableGet; ?> | <?php echo $InvTableGet; ?></br><hr>
    </div>
<?php
if ($NTableGet <= 2){
    //City, CustName, Date, Poster, Link
    $Query = "SELECT `City`,`Date1`,`Poster`,`CustName`,`ID` FROM " . $TableGet . " ORDER BY ID DESC"; // Sort each entry by DATE, DESCENDING!
} else {
    $Query = "SELECT * FROM " . $TableGet . " ORDER BY ID DESC"; // Sort each entry by DATE, DESCENDING!
}if(($_GET['search']) != '' and $_GET['submit'] == 'Search' and $_GET['TableGet'] != '')
{
	
	$searchVal = $_GET['search'];
 	$Query = "SELECT * FROM " . $TableGet . " WHERE PatientNum='" . $searchVal . "' OR Referral='" .$searchVal . "' OR Date1 ='" .$searchVal . "' OR CustName ='" .$searchVal . "' OR Poster ='" .$searchVal . "' ORDER BY ID DESC "; // Loop through each tech Query
}

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
					$eto = $information['InvTo'];
					$ebto = $information['BillTo'];
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
					$emop = array("", $information['mop1'], $information['mop2'], $information['mop3'], $information['mop4'], $information['mop5'], $information['mop6'], $information['mop7']);
					$eeq = array($information['eq1'], $information['eq2'], $information['eq3'], $information['eq4'], $information['eq5'], $information['eq6'], $information['eq7'], $information['eq8'], $information['eq9'], $information['eq10'], $information['eq11'], $information['eq12'], $information['eq13'], $information['eq14'], $information['eq15'], $information['eq16'], $information['eq17'], $information['eq18'], $information['eq19'], $information['eq20'], $information['eq21'], $information['eq22'], $information['eq23'], $information['eq24'], $information['eq25'], $information['eq26'], $information['eq27'], $information['eq28'], $information['eq29'], $information['eq30'], $information['eq31'], $information['eq32'], $information['eq33'], $information['eq34'], $information['eq35'], $information['eq36'], $information['eq37'], $information['eq38'], $information['eq39'], $information['eq40'], $information['eq41'], $information['eq42'], $information['eq43'], $information['eq44'], $information['eq45'], $information['eq46'], $information['eq47'], $information['eq48'], $information['eq49'], $information['eq50'], $information['eq51'], $information['eq52'], $information['eq53'], $information['eq54'], $information['eq55'], $information['eq56'], $information['eq57'], $information['eq58'], $information['eq59'], $information['eq60'], $information['eq61'], $information['eq62'], $information['eq63'], $information['eq64'], $information['eq65'], $information['eq66'], $information['eq67'], $information['eq68'], $information['eq69'], $information['eq70'], $information['eq71'], $information['eq72'], $information['eq73'], $information['eq74'], $information['eq75'], $information['eq76'], $information['eq77'], $information['eq78'], $information['eq79'], $information['eq80'], $information['eq81']);
					$ea = array("", $information['a1'], $information['a2'], $information['a3'], $information['a4'], $information['a5'], $information['a6'], $information['a7'], $information['a8'], $information['a9'], $information['a10'], $information['a11'], $information['a12'], $information['a13'], $information['a14'], $information['a15'], $information['a16']);
					$ebox = array("", $information['box1'], $information['box2'], $information['box3'], $information['box4']);
					$edwc1 = $information['dwc1'];
					$eestimate = $information['estimate'];
					$specialinstructions = $information['specialinstructions'];

	
	?>

                                    <?php
                                    	echo "Name: <b><u><font size=2>" . $custname . "</font></u></b>";

                                    ?>
                                </td>
                                <td>
<?php
                                    	echo "" . "<font size=2>City:<b></font> " . $city . "</b>";


	                                    echo "" . "<font size=2>Date:</font> " . $date1 . "";                                    
?>
                                Posted by: <?php echo $poster; ?>
                                
<?php
                                echo "<a href='" . $ATableGet . "_view.php?ID=$db_ID'>View " . $BTableGet . "</a>";
?>

</br>
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