<?php
include 'includes/connect.php';
include 'includes/functions.php';
include("header.php");
	include('stylings.php');
$get_db_id = $_GET['ID'];
	if(loggedin()){
		if($user_level <= 0){
			echo "User does not have access.";
		} else {
?>
<html>
<head>
<center><H2>BREVARD MEDICAL EQUIPMENT CRUISE RESERVATION FORM</H2></br></center>
</head>
<body><CENTER><B>
<script src="/includes/jquery-1.10.2.js"></script>
<FORM method='post'>
<?php
$Query = "SELECT * FROM CruiseSlip WHERE `ID`='$get_db_id' ORDER BY ID DESC"; // Sort each entry by DATE, DESCENDING!

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
					
$agency = $information['Agency'];
$agent = $information['Agent'];
$phone1 = $information['Phone1'];
$fname = $information['FNAME'];
$lname = $information['LName'];
$homeaddress = $information['HomeAddress'];
$homephone = $information['HomePhone'];
$cellphone = $information['CellPhone'];
$height = $information['Height'];
$weight = $information['Weight'];
$cruiseship = $information['CruiseShip'];
$cabin = $information['Cabin'];
$datedeparting = $information['DateDeparting'];
$datereturning = $information['DateReturning'];
$eq1 = $information['EQ1'];
$eq2 = $information['EQ2'];
$eq3 = $information['EQ3'];
$eq4 = $information['EQ4'];
$eq5 = $information['EQ5'];
$eq6 = $information['EQ6'];
$eq7 = $information['EQ7'];
$eq8 = $information['EQ8'];
$eq9 = $information['EQ9'];
$eq10 = $information['EQ10'];
$eq11 = $information['EQ11'];
$eq12 = $information['EQ12'];
$eq13 = $information['EQ13'];
$eq14 = $information['EQ14'];
$eq15 = $information['EQ15'];
$eq16 = $information['EQ16'];
$dateofpickup = $information['DateofPickup'];
$customername = $information['CustomerName'];
$nameofship = $information['NameofShip'];
$cabinnum = $information['CabinNum'];
$pu1 = $information['PU1'];
$pu2 = $information['PU2'];
$pu3 = $information['PU3'];
$pu4 = $information['PU4'];
$pu5 = $information['PU5'];
$pu6 = $information['PU6'];
$date = $information['Date'];

?>
<TABLE BORDER=1><TR>
<TD COLSPAN=2><CENTER>
<H3>Referral Information</H3></B></CENTER>
</TD>
</TR>
<TR>
<TD>
AGENCY <INPUT TYPE=TEXT NAME='AGENCY' VALUE='<?php echo $agency; ?>'></BR>
AGENT <INPUT TYPE=TEXT NAME='AGENT' VALUE='<?php echo $agent; ?>'>
</TD>
<TD>
PREPARED BY <INPUT TYPE=TEXT NAME='PREPAREDBY' VALUE='<?php echo $preparedby; ?>'></BR>
PHONE <INPUT TYPE=TEXT NAME='PHONE1' VALUE='<?php echo $phone1; ?>'></BR>
</TD>
</TR>
<TR>
<TD COLSPAN=2><CENTER>
<H3>Customer Information</H3></TD>
</TD>
</TR>
<TR>
<TD COLSPAN=2>
NAME: <INPUT TYPE=TEXT NAME='FNAME' VALUE='<?php echo $fname; ?>'> <INPUT TYPE=TEXT NAME='LNAME' VALUE='<?php echo $lname; ?>'></BR>
HOME ADDRESS: <INPUT TYPE=TEXT NAME='HOMEADDRESS' VALUE='<?php echo $homeaddress; ?>'></BR>
HOME PHONE: <INPUT TYPE=TEXT NAME='HOMEPHONE' VALUE='<?php echo $homephone; ?>'> CELL PHONE:<INPUT TYPE=TEXT NAME='CELLPHONE' VALUE='<?php echo $cellphone; ?>'></BR>
HEIGHT: <INPUT TYPE=TEXT NAME='HEIGHT' VALUE='<?php echo $height; ?>'> WEIGHT: <INPUT TYPE=TEXT NAME='HEIGHT' VALUE='<?php echo $weight ?>'></BR>
</TD>
</TR>
<TR>
<TD COLSPAN=2>
CRUISE SHIP: <INPUT TYPE=TEXT NAME='CRUISESHIP' VALUE='<?php echo $cruiseship; ?>'> CABIN: <INPUT TYPE=TEXT NAME='CABIN' VALUE='<?php echo $cabin; ?>'></BR>
DATE DEPARTING: <INPUT TYPE=TEXT NAME='DATEDEPARTING' VALUE='<?php echo $datedeparting; ?>'></BR>
DATE RETURNING: <INPUT TYPE=TEXT NAME='DATERETURNING' VALUE='<?php echo $datereturning; ?>'>
</TD>
</TR>
<TR>
<TD>
TRANSPORT CHAIR: <INPUT TYPE=TEXT NAME='EQ1' VALUE='<?php echo $eq1; ?>'></BR>
SCOOTER: <INPUT TYPE=TEXT NAME='EQ3' VALUE='<?php echo $eq3; ?>'></BR>
CONCENTRATOR: <INPUT TYPE=TEXT NAME='EQ5' VALUE='<?php echo $eq5; ?>'></BR>
CONCEIVING DEVICE: <INPUT TYPE=TEXT NAME='EQ7' VALUE='<?php echo $eq7; ?>'></BR>
E TANKS: <INPUT TYPE=TEXT NAME='EQ9' VALUE='<?php echo $eq9; ?>'></BR>
CONSERVER: <INPUT TYPE=TEXT NAME='EQ11' VALUE='<?php echo $eq11; ?>'></BR>
WHEELCHAIR: <INPUT TYPE=TEXT NAME='EQ13' VALUE='<?php echo $eq13; ?>'></BR>
LIFT CHAIR: <INPUT TYPE=TEXT NAME='EQ15' VALUE='<?php echo $eq15; ?>'></BR>
</TD>
<TD>
WIDE WHEELCHAIR: <INPUT TYPE=TEXT NAME='EQ2' VALUE='<?php echo $eq2; ?>'></BR>
POWER CHAIR: <INPUT TYPE=TEXT NAME='EQ4' VALUE='<?php echo $eq4; ?>'></BR>
PATIENT LIFT W/ SWING: <INPUT TYPE=TEXT NAME='EQ6' VALUE='<?php echo $eq6; ?>'></BR>
HOSPITAL BED: <INPUT TYPE=TEXT NAME='EQ8' VALUE='<?php echo $eq8; ?>'></BR>
APP: <INPUT TYPE=TEXT NAME='EQ10' VALUE='<?php echo $eq10; ?>'></BR>
NEBULIZER: <INPUT TYPE=TEXT NAME='EQ12' VALUE='<?php echo $eq12; ?>'></BR>
FREESTANDING TRAPEZE: <INPUT TYPE=TEXT NAME='EQ14' VALUE='<?php echo $eq14; ?>'></BR>
3 WHEELED WALKER: <INPUT TYPE=TEXT NAME='EQ16' VALUE='<?php echo $eq16; ?>'></BR>
</TD>
</TR>
<TR>
<TD COLSPAN=2>
SPECIAL INSTRUCTION: <INPUT TYPE=TEXT NAME='SPECIALINSTRUCTIONS' SIZE=85 VALUE='<?php echo $specialinstructions; ?>'>
</TD>
</TR>
<TR>
<TD COLSPAN=2><CENTER>
<H3>METHOD OF PAYMENT:</H3></CENTER>
</TD>
</TR>
<TR>
<TD COLSPAN=2><CENTER>
VISA <input name='VISA' type=checkbox class='css-checkbox' id='VISA' value='1'><label for='VISA' class='css-label radGroup1'></label> MASTERCARD <input name='MASTERCARD' type=checkbox class='css-checkbox' id='MASTERCARD' value='1'><label for='MASTERCARD' class='css-label radGroup1'></label> DISCOVER <input name='DISCOVER' type=checkbox class='css-checkbox' id='DISCOVER' value='1'><label for='DISCOVER' class='css-label radGroup1'></label> AMEX <input name='AMEX' type=checkbox class='css-checkbox' id='AMEX' value='1'><label for='AMEX' class='css-label radGroup1'></label></BR>
CREDIT CARD NUMBER: <INPUT NAME='CCN' TYPE=TEXT> EXP DATE: <INPUT NAME='EXPDATE' TYPE=TEXT></BR>
NAME ON CARD: <INPUT NAME='NAMEONCARD' TYPE=TEXT></BR>
TOTAL COST $: <input name='TOTALCOST' TYPE=TEXT></BR></CENTER>
</TD>
</TR>
</TABLE>
<TABLE BORDER=1>
<TR>
<TD><center>
<H3>PICK UP SLIP</H3></center>
</TD>
</TR>
<TR>
<TD><center>
DATE OF PICKUP: <INPUT TYPE=TEXT NAME='DATEOFPICKUP' VALUE='<?php echo $dateofpickup; ?>'></br>
CUSTOMER NAME: <INPUT TYPE=TEXT NAME='CUSTOMERNAME' VALUE='<?php echo $customername; ?>'></br>
NAME OF SHIP: <INPUT TYPE=TEXT NAME='NAMEOFSHIP' VALUE='<?php echo $nameofship; ?>'></br>
CABIN #: <INPUT TYPE=TEXT NAME='CABINNUM' VALUE='<?php echo $cabinnum; ?>'></br>
EQUIPMENT TO BE PICKED UP:  </br>
1: <INPUT TYPE=TEXT NAME='PU1' VALUE='<?php echo $pu1; ?>'></br>
2: <INPUT TYPE=TEXT NAME='PU2' VALUE='<?php echo $pu2; ?>'></br>
3: <INPUT TYPE=TEXT NAME='PU3' VALUE='<?php echo $pu3; ?>'></br>
4: <INPUT TYPE=TEXT NAME='PU4' VALUE='<?php echo $pu4; ?>'></br>
5: <INPUT TYPE=TEXT NAME='PU5' VALUE='<?php echo $pu5; ?>'></br>
6: <INPUT TYPE=TEXT NAME='PU6' VALUE='<?php echo $pu6; ?>'></br>
DRIVER: <INPUT TYPE=TEXT NAME='DRIVER' VALUE='<?php echo $driver; ?>'> DATE: <?PHP ECHO date("Y/m/d"); ?></center>
</TD>
</TR>
</TABLE>
<INPUT TYPE=SUBMIT NAME='submit' id='submit' class='no-print'>
<script>
	$( "*" ).keydown(function(event) {
		if (event.keyCode == 222) {
		event.preventDefault();
	}
	});
</script>
<script>/*
$( "form" ).submit(function( event ) {
  if ( $( "#doffice" ).val() != "" ) {
    $( "#flag" ).text( "Submitting..." ).show();
    return;
  }
 
  $( "#flag" ).text( "Driver/Office field MUST be filled!" ).show().fadeOut( 1000 );
  event.preventDefault();
  
});*/
</script>
<script type="text/javascript">
     function PopIt() { return "Please Select an Option:"; }
     function UnPopIt()  { /* nothing to return */ } 
 
     $(document).ready(function() {
     	window.onbeforeunload = PopIt;
		$("a").click(function(){ window.onbeforeunload = UnPopIt; });
     });
</script>
<?php

$agency = $_POST['AGENCY'];
$agent = $_POST['AGENT'];
$preparedby = $_POST['PREPAREDBY'];
$phone1 = $_POST['PHONE1'];
$fname = $_POST['FNAME'];
$lname = $_POST['LNAME'];
$homeaddress = $_POST['HOMEADDRESS'];
$homephone = $_POST['HOMEPHONE'];
$cellphone = $_POST['CELLPHONE'];
$height = $_POST['HEIGHT'];
$weight = $_POST['WEIGHT'];
$cruiseship = $_POST['CRUISESHIP'];
$cabin = $_POST['CABIN'];
$datedeparting = $_POST['DATEDEPARTING'];
$datereturning = $_POST['DATERETURNING'];
$specialinstructions = $_POST['SPECIALINSTRUCTIONS'];
$eq1 = $_POST['EQ1'];
$eq2 = $_POST['EQ2'];
$eq3 = $_POST['EQ3'];
$eq4 = $_POST['EQ4'];
$eq5 = $_POST['EQ5'];
$eq6 = $_POST['EQ6'];
$eq7 = $_POST['EQ7'];
$eq8 = $_POST['EQ8'];
$eq9 = $_POST['EQ9'];
$eq10 = $_POST['EQ10'];
$eq11 = $_POST['EQ11'];
$eq12 = $_POST['EQ12'];
$eq13 = $_POST['EQ13'];
$eq14 = $_POST['EQ14'];
$eq15 = $_POST['EQ15'];
$eq16 = $_POST['EQ16'];
$dateofpickup = $_POST['DATEOFPICKUP'];
$customername = $_POST['CUSTOMERNAME'];
$nameofship = $_POST['NAMEOFSHIP'];
$cabinnum = $_POST['CABINNUM'];
$pu1 = $_POST['PU1'];
$pu2 = $_POST['PU2'];
$pu3 = $_POST['PU3'];
$pu4 = $_POST['PU4'];
$pu5 = $_POST['PU5'];
$pu6 = $_POST['PU6'];
$driver = $_POST['DRIVER'];
$date = date("Y/m/d");
$edittime = $date;
$tablename = "CruiseSlip";
$action = "Edit";
$doffice1 = "1";


	if($_POST['submit']) {
	if($doffice1 != "1") {
	$message = "Please fill out Driver field!";
	} else {
				mysqli_query($GLOBALS["___mysqli_ston"], "UPDATE CruiseSlip SET `Agency`='$agency',`Agent`='$agent',`PreparedBy`='$preparedby',`Phone1`='$phone1', `FName`='$fname', `LName`='$lname',`HomeAddress`='$homeaddress',`HomePhone`='$homephone',`CellPhone`='$cellphone',`Height`='$height',`Weight`='$weight', `CruiseShip`='$cruiseship', `Cabin`='$cabin', `DateDeparting`='$datedeparting', `DateReturning`='$datereturning', `EQ1`='$eq1', `EQ2`='$eq2', `EQ3`='$eq3', `EQ4`='$eq4', `EQ5`='$eq5', `EQ6`='$EQ6', `EQ7`='$eq7', `EQ8`='$eq8', `EQ9`='$eq9', `EQ10`='$eq10', `EQ11`='$eq11', `EQ12`='$eq12', `EQ13`='$eq13', `EQ14`='$eq14', `EQ15`='$eq15', `EQ16`='$eq16',`DateofPickup`='$dateofpickup', `CustomerName`='$customername',`NameofShip`='$nameofship',`CabinNum`='$cabinnum',`PU1`='$pu1',`PU2`='$pu2',`PU3`='$pu3',`PU4`='$pu4',`PU5`='$pu5',`PU6`='$pu6',`specialinstructions`='$specialinstructions',`Driver`='$driver',`Editor`='$username',`Edittime`='$edittime' WHERE `ID`='$get_db_id'") or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));	
				mysqli_query($GLOBALS["___mysqli_ston"], "INSERT INTO AuditTrail (`ID`,`TableName`,`AuditID`,`Username`,`Action`,`Time`)
					Values('','$tablename','$get_db_id','$username','$action','$edittime')") or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
				echo "<div align=center>";
				echo "Data has been logged, thank you.</br>";
				echo "<br><a href='cruiseslip.php'>Next Form</a>";
				echo "</div>";
				header('Location: cruiseslip.php');
	}
}
?>
</body>
</FORM>
</CENTER>
</html>
<?php
}
}
		}
	} else {
echo "<div align=center><b>You must be logged in to do that!</b></div>";
	}
include("footer.php");
?>