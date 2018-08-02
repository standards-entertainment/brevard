<?php
include 'includes/connect.php';
include 'includes/functions.php';
include("header.php");
	include('stylings.php');
	if(loggedin()){
		if($user_level <= 0){
			echo "User does not have access.";
		} else {
?>
<html>
<head>
<center><font size=3><b>BREVARD MEDICAL EQUIPMENT CRUISE RESERVATION FORM</b></font></center>
</head>
<body><CENTER><B><font size=1>
<script src="/includes/jquery-1.10.2.js"></script>
<FORM method='post'>
<TABLE BORDER=1>
<TR COLSPAN=3>
<TD><font size=2>
AGENCY <INPUT TYPE=TEXT NAME='AGENCY'></br>
AGENT <INPUT TYPE=TEXT NAME='AGENT'></font>
</TD>
<TD COLSPAN=2><font size=2>
PREPARED BY <INPUT TYPE=TEXT NAME='PREPAREDBY'></br>
PHONE <INPUT TYPE=TEXT NAME='PHONE1'></font>
</TD>
</TR>
<TR>
<TD COLSPAN=3><CENTER>
<font size=3><b>Customer Information</b></font></TD>
</TD>
</TR>
<TR>
<TD COLSPAN=3><font size=2>
NAME: <INPUT TYPE=TEXT NAME='FNAME'> <INPUT TYPE=TEXT NAME='LNAME'></BR>
HOME ADDRESS: <INPUT TYPE=TEXT NAME='HOMEADDRESS' size=63>
HOME PHONE: <INPUT TYPE=TEXT NAME='HOMEPHONE'> CELL PHONE:<INPUT TYPE=TEXT NAME='CELLPHONE'></BR>
HEIGHT: <INPUT TYPE=TEXT NAME='HEIGHT'> WEIGHT: <INPUT TYPE=TEXT NAME='HEIGHT'></BR></font>
</TD>
</TR>
<TR>
<TD COLSPAN=3><font size=2>
CRUISE SHIP: <INPUT TYPE=TEXT NAME='CRUISESHIP'> CABIN: <INPUT TYPE=TEXT NAME='CABIN'>
DATE DEPARTING: <INPUT TYPE=TEXT NAME='DATEDEPARTING'>
DATE RETURNING: <INPUT TYPE=TEXT NAME='DATERETURNING'></font>
</TD>
</TR>
<TR>
<TD><font size=2>
TRANSPORT CHAIR: <INPUT TYPE=TEXT NAME='EQ1'></BR>
SCOOTER: <INPUT TYPE=TEXT NAME='EQ3'></BR>
CONCENTRATOR: <INPUT TYPE=TEXT NAME='EQ5'></BR>
CONCEIVING DEVICE: <INPUT TYPE=TEXT NAME='EQ7'></BR>
E TANKS: <INPUT TYPE=TEXT NAME='EQ9'></BR>
</font>
</TD>
<TD><font size=2>
WIDE WHEELCHAIR: <INPUT TYPE=TEXT NAME='EQ2'></BR>
POWER CHAIR: <INPUT TYPE=TEXT NAME='EQ4'></BR>
PATIENT LIFT W/ SWING: <INPUT TYPE=TEXT NAME='EQ6'></BR>
HOSPITAL BED: <INPUT TYPE=TEXT NAME='EQ8'></BR>
APP: <INPUT TYPE=TEXT NAME='EQ10'></BR>
</font>
</TD>
<TD><font size=2>
CONSERVER: <INPUT TYPE=TEXT NAME='EQ11'></BR>
WHEELCHAIR: <INPUT TYPE=TEXT NAME='EQ13'></BR>
LIFT CHAIR: <INPUT TYPE=TEXT NAME='EQ15'></BR>
NEBULIZER: <INPUT TYPE=TEXT NAME='EQ12'></BR>
FREESTANDING TRAPEZE: <INPUT TYPE=TEXT NAME='EQ14'></BR>
3 WHEELED WALKER: <INPUT TYPE=TEXT NAME='EQ16'></BR></font>
</TD>
</TR>
<TR>
<TD COLSPAN=3><font size=2>
SPECIAL INSTRUCTION: <INPUT TYPE=TEXT NAME='SPECIALINSTRUCTIONS' SIZE=143></font>
</TD>
</TR>
<TR>
<TD COLSPAN=3><CENTER>
<font size=3><b>Method of Payment:</b></font></CENTER>
</TD>
</TR>
<TR>
<TD COLSPAN=3><CENTER><font size=2>
VISA <input name='VISA' type=checkbox class='css-checkbox' id='VISA' value='1'><label for='VISA' class='css-label radGroup1'></label> MASTERCARD <input name='MASTERCARD' type=checkbox class='css-checkbox' id='MASTERCARD' value='1'><label for='MASTERCARD' class='css-label radGroup1'></label> DISCOVER <input name='DISCOVER' type=checkbox class='css-checkbox' id='DISCOVER' value='1'><label for='DISCOVER' class='css-label radGroup1'></label> AMEX <input name='AMEX' type=checkbox class='css-checkbox' id='AMEX' value='1'><label for='AMEX' class='css-label radGroup1'></label></BR>
CREDIT CARD NUMBER: <INPUT NAME='CCN' TYPE=TEXT size=45> EXP DATE: <INPUT NAME='EXPDATE' TYPE=TEXT size=15></BR>
NAME ON CARD: <INPUT NAME='NAMEONCARD' TYPE=TEXT SIZE=45></BR>
TOTAL COST $: <input name='TOTALCOST' TYPE=TEXT></BR></CENTER></font>
</TD>
</TR>
</TABLE></FONT>
</BR>
</BR>
</BR>
</BR>
</BR>
</BR>
</BR>
</BR>
</BR>
</BR>
</BR>
</BR>
</BR>
</BR>
Signature: ________________________________________________________________________</BR>
</BR>
DRIVER: <INPUT NAME='DODRIVER' TYPE=TEXT></BR>
</BR>
<TABLE BORDER=1>
<TR>
<TD><center>
<font><b>Pick up Slip</b></font></center>
</TD>
</TR>
<TR>
<TD><center><font size=2>
DATE OF PICKUP: <INPUT TYPE=TEXT NAME='DATEOFPICKUP'>
CUSTOMER NAME: <INPUT TYPE=TEXT NAME='CUSTOMERNAME'>
NAME OF SHIP: <INPUT TYPE=TEXT NAME='NAMEOFSHIP'>
CABIN #: <INPUT TYPE=TEXT NAME='CABINNUM'></BR>
EQUIPMENT TO BE PICKED UP:  </br>
1: <INPUT TYPE=TEXT NAME='PU1'></br>
2: <INPUT TYPE=TEXT NAME='PU2'></br>
3: <INPUT TYPE=TEXT NAME='PU3'></br>
4: <INPUT TYPE=TEXT NAME='PU4'></br>
5: <INPUT TYPE=TEXT NAME='PU5'></br>
6: <INPUT TYPE=TEXT NAME='PU6'></br>
DRIVER: <INPUT TYPE=TEXT NAME='DRIVER'> DATE: <?PHP ECHO date("Y/m/d"); ?></center></font>
</TD>
</TR>
</TABLE>
</BR>
</BR>
</BR>
</BR>
</BR>
</BR>
</BR>
</BR>
</BR>
</BR>
</BR>
</BR>
</BR>
</BR>
Signature: ________________________________________________________________________</BR>
</BR>
DRIVER: <INPUT NAME='PUDRIVER' TYPE=TEXT></BR>
</BR>
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
<script>
.print:last-child {
     page-break-after: auto;
}
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
if($_POST['EQ1'] != ""){
$eq1 = "Transport Chair " . $_POST['EQ1'];
}
if($_POST['EQ2'] != ""){
$eq2 = "Wide Wheelchair " . $_POST['EQ2'];
}
if($_POST['EQ3'] != ""){
$eq3 = "Scooter " . $_POST['EQ3'];
}
if($_POST['EQ4'] != ""){
$eq4 = "Power Chair " . $_POST['EQ4'];
}
if($_POST['EQ5'] != ""){
$eq5 = "Concentrator " . $_POST['EQ5'];
}
if($_POST['EQ6'] != ""){
$eq6 = "Patient Lift w/ Swing " . $_POST['EQ6'];
}
if($_POST['EQ7'] != ""){
$eq7 = "Conceiving Device " . $_POST['EQ7'];
}
if($_POST['EQ8'] != ""){
$eq8 = "Hospital Bed " . $_POST['EQ8'];
}
if($_POST['EQ9'] != ""){
$eq9 = "E Tanks " . $_POST['EQ9'];
}
if($_POST['EQ10'] != ""){
$eq10 = "APP " . $_POST['EQ10'];
}
if($_POST['EQ11'] != ""){
$eq11 = "Conserver " . $_POST['EQ11'];
}
if($_POST['EQ12'] != ""){
$eq12 = "Nebulizer " . $_POST['EQ12'];
}
if($_POST['EQ13'] != ""){
$eq13 = "Wheelchair " . $_POST['EQ13'];
}
if($_POST['EQ14'] != ""){
$eq14 = "Freestanding Trapeze " . $_POST['EQ14'];
}
if($_POST['EQ15'] != ""){
$eq15 = "Lift Chair " . $_POST['EQ15'];
}
if($_POST['EQ16'] != ""){
$eq16 = "3 Wheeled Walker " . $_POST['EQ16'];
}
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
$dodriver = $_POST['DODRIVER'];
$pudriver = $_POST['PUDRIVER'];
$date = date("Y/m/d");
$poster = $username;
$doffice1 = '1';

	if($_POST['submit']) {
	if($doffice1 != '1') {
	$message = "Please fill out Driver/Office field!";
	} else {
				mysqli_query($GLOBALS["___mysqli_ston"], "INSERT INTO CruiseSlip (`ID`,`Agency`,`Agent`,`PreparedBy`,`Phone1`,`FName`, `LName`, `HomeAddress`, `HomePhone`,`CellPhone`,`Height`,`Weight`,`CruiseShip`,`Cabin`, `DateDeparting`, `DateReturning`, `EQ1`, `EQ2`, `EQ3`, `EQ4`, `EQ5`, `EQ6`, `EQ7`, `EQ8`, `EQ9`, `EQ10`, `EQ11`, `EQ12`, `EQ13`, `EQ14`, `EQ15`, `EQ16`, `DateofPickup`, `CustomerName`, `NameofShip`, `CabinNum`, `PU1`, `PU2`, `PU3`, `PU4`, `PU5`, `PU6`, `ES4`, `ES5`, `specialinstructions`, `Driver`, `Date`,`Poster`)
					Values('','$agency','$agent','$preparedby','$phone1','$fname','$lname','$homeaddress','$homephone','$cellphone','$height','$weight','$cruiseship','$cabin','$datedeparting','$datereturning','$eq1','$eq2','$eq3','$eq4','$eq5','$eq6','$eq7','$eq8','$eq9','$eq10','$eq11','$eq12','$eq13','$eq14','$eq15','$eq16','$dateofpickup','$customername','$nameofship','$cabinnum','$pu1','$pu2','$pu3','$pu4','$pu5','$pu6', '$dodriver', '$pudriver', '$specialinstructions','$driver','$date','$poster')") or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
//				mysqli_query($GLOBALS["___mysqli_ston"], "INSERT INTO Equipment (`ID`, `TableID`, `TableGet`, `eq1`, `eq2`, `eq3`, `eq4`, `eq5`, `eq6`, `eq7`, `eq8`, `eq9`, `eq10`, `eq11`, `eq12`, `eq13`, `eq14`, `eq15`, `eq16`, `eq17`, `eq18`, `eq19`, `eq20`, `eq21`, `eq22`, `eq23`, `eq24`, `eq25`, `eq26`, `eq27`, `eq28`, `eq29`, `eq30`, `eq31`, `eq32`, `eq33`, `eq34`, `eq35`, `eq36`, `eq37`, `eq38`, `eq39`, `eq40`, `eq41`, `eq42`, `eq43`, `eq44`, `eq45`, `eq46`, `eq47`, `eq48`, `eq49`, `eq50`, `eq51`, `eq52`, `eq53`, `eq54`, `eq55`, `eq56`, `eq57`, `eq58`, `eq59`, `eq60`, `eq61`, `eq62`, `eq63`, `eq64`, `eq65`, `eq66`, `eq67`, `eq68`, `eq69`, `eq70`, `eq71`, `eq72`, `eq73`, `eq74`, `eq75` )
				//	Values('','$db_ID','1','$eq[0]','$eq[1]','$eq[2]','$eq[3]','$eq[4]','$eq[5]','$eq[6]','$eq[7]','$eq[8]','$eq[9]','$eq[10]','$eq[11]','$eq[12]','$eq[13]','$eq[14]','$eq[15]','$eq[16]','$eq[17]','$eq[18]','$eq[19]','$eq[20]','$eq[21]','$eq[22]','$eq[23]','$eq[24]','$eq[25]','$eq[26]','$eq[27]','$eq[28]','$eq[29]','$eq[30]','$eq[31]','$eq[32]','$eq[33]','$eq[34]','$eq[35]','$eq[36]','$eq[37]','$eq[38]','$eq[39]','$eq[40]','$eq[41]','$eq[42]','$eq[43]','$eq[44]','$eq[45]','$eq[46]','$eq[47]','$eq[48]','$eq[49]','$eq[50]','$eq[51]','$eq[52]','$eq[53]','$eq[54]','$eq[55]','$eq[56]','$eq[57]','$eq[58]','$eq[59]','$eq[60]','$eq[61]','$eq[62]','$eq[63]','$eq[64]','$eq[65]','$eq[66]','$eq[67]','$eq[68]','$eq[69]','$eq[70]','$eq[71]','$eq[72]','$eq[73]','$eq[74]','$eq[75]')") or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));	
				echo "<div align=center>";
				echo "Data has been logged, thank you.</br>";
				echo "<br><a href='cruiseslip.php'>Next Form</a>";
				echo "</div>";
				header('Location: cruiseslip.php');
	}
}

?>
</font>
</body>
</FORM>
</CENTER>
</html>
<?php
		}
	} else {
echo "<div align=center><b>You must be logged in to do that!</b></div>";
	}
include("pfooter.php");
?>