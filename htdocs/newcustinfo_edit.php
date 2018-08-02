<?php
include(__DIR__ . "/includes/connect.php");
include(__DIR__ . "/includes/functions.php");
include(__DIR__ . "/header.php");
	include('stylings.php');
$get_db_id = $_GET['ID'];
	if(loggedin()){
		
		//---ADD SECURITY---
		if($user_level <= 0 AND $edriver != $username){
			echo "<CENTER><B><FONT COLOR=RED SIZE = 5>AUTHORIZATION ERROR: ACCESS DENIED.</FONT></B></CENTER>";
	} else {
		
		
		?>



    <html>
    <head>
        <title>Brevard Medical Equipment :: New Customer Information Edit</title>
    <div align=center>
    <font size=6 COLOR="#FFFFFF"><b><SPAN STYLE="Background-Color:#E61669">
    NEW CUSTOMER INFORMATION</SPAN></b></BR>
    </font>
    </div>
	<script src="/includes/jquery-1.10.2.js"></script>
    </head>
    <body>
    <div align=center>
<?php

$Query = "SELECT * FROM NewCustInfo WHERE `ID`='$get_db_id' ORDER BY ID DESC"; // Sort each entry by DATE, DESCENDING!

if($Query != '')
{
	$Result = mysqli_query($GLOBALS["___mysqli_ston"], $Query)// or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false))); 

	
?>
<?php

	while($information = mysqli_fetch_array($Result))
	{
					$db_ID = $information['ID'];
					$epatientnum = $information['PatientNum'];
					$ereferral = $information['Referral'];
					$epreparedby = $information['PreparedBy'];
					$edate1 = $information['Date1'];
					$etime = $information['Time'];
					$edateofservice = $information['DateofService'];
					$ecustname = $information['CustName'];
					$eheight = $information['Height'];
					$eweight = $information['Weight'];
					$ealtcontact = $information['AltContact'];
					$eaddress = $information['Address'];
					$ecity = $information['City'];
					$estate = $information['State'];
					$ezip = $information['Zip'];
					$ephone = $information['Phone'];
					$esex = $information['Sex'];
					$ephone2 = $information['Phone2'];
					$erelationship = $information['Relationship'];
					$edateofbirth = $information['DateofBirth'];
					$ediagnosis = $information['Diagnosis'];
					$epcp1 = $information['Pcp1'];
					$epcp1phone = $information['Pcp1Phone'];
					$eins1 = $information['Ins1'];
					$eins1num = $information['Ins1Number'];
					$eins2 = $information['Ins2'];
					$eins2num = $information['Ins2Number'];
					$eequip = $information['Equip'] . " " . $information['Equip2'] . " " . $information['Equip3'];
					$eCSig = $information['CSig1'];
					$edate2 = $information['Date2'];
					$edoffice = $information['DriverOffice'];
					$elnuspo2del = $information['LNUSPO2Del'];
					$elnecpu = $information['LNECPU'];
					$eposter = $information['Poster'];
					$esent = $information['Sent'];
					$ecomplete = $information['Complete'];
					$everified = $information['Verified'];
					$edriver = $information['Driver'];
					$esender = $information['Sender'];
					$ecompleter = $information['Completer'];
					$everifier = $information['Verifier'];
					$especialinstructions = $information['specialinstructions'];
					$elotnumbers = $information['LotNumbers'];
					$eedittime = $information['EditTime'];
					$eeq = array($information['eq1'], $information['eq2'], $information['eq3'], $information['eq4'], $information['eq5'], $information['eq6'], $information['eq7'], $information['eq8'], $information['eq9'], $information['eq10'], $information['eq11'], $information['eq12'], $information['eq13'], $information['eq14'], $information['eq15'], $information['eq16'], $information['eq17'], $information['eq18'], $information['eq19'], $information['eq20'], $information['eq21'], $information['eq22'], $information['eq23'], $information['eq24'], $information['eq25'], $information['eq26'], $information['eq27'], $information['eq28'], $information['eq29'], $information['eq30'], $information['eq31'], $information['eq32'], $information['eq33'], $information['eq34'], $information['eq35'], $information['eq36'], $information['eq37'], $information['eq38'], $information['eq39'], $information['eq40'], $information['eq41'], $information['eq42'], $information['eq43'], $information['eq44'], $information['eq45'], $information['eq46'], $information['eq47'], $information['eq48'], $information['eq49'], $information['eq50'], $information['eq51'], $information['eq52'], $information['eq53'], $information['eq54'], $information['eq55'], $information['eq56'], $information['eq57'], $information['eq58'], $information['eq59'], $information['eq60'], $information['eq61'], $information['eq62'], $information['eq63'], $information['eq64'], $information['eq65'], $information['eq66'], $information['eq67'], $information['eq68'], $information['eq69'], $information['eq70'], $information['eq71'], $information['eq72'], $information['eq73'], $information['eq74'], $information['eq75'], $information['eq76'], $information['eq77'], $information['eq78'], $information['eq79'], $information['eq80'], $information['eq81']);
					$bhosp = $information['bhosp'];
					
					

	?> 
    <form method="post">
    <table border=1>
    <tr>
    <td>
    Referral: <input name="referral" type=text value="<?php echo $ereferral; ?>"> | 
    <?php
    if($edate2 != 1) {
    echo "<input name='vitas' type=checkbox class='css-checkbox' id='vitas' value='1'><label for='vitas' class='css-label radGroup1'></label>";
    } else {
    echo "<input name='vitas' type=checkbox class='css-checkbox' id='vitas' value='1' checked><label for='vitas' class='css-label radGroup1'></label>";
    }
    ?> <font color=red><b>VITAS</b></font> | 
    <?php 
    if($bhosp != 1) {
    echo "<input name='bhosp' type=checkbox class='css-checkbox' id='bhosp' value='1'><label for='bhosp' class='css-label radGroup1'></label>";
    } else {
    echo "<input name='bhosp' type=checkbox class='css-checkbox' id='bhosp' value='1' checked><label for='bhosp' class='css-label radGroup1'></label>";
    }
    ?> <font color=red><b>BHOSP</b></font> | 
    </td>
    <td>
    Prepared By: <input name="preparedby" type=text value="<?php echo $epreparedby; ?>"></br>
    </td>
    <td>
    Date: <b><u><?php echo $edate1; ?></u></b> &nbsp;Time: <b><u><?php echo $etime; ?></u></b>
    Edit: <b><u><?php echo $eedittime; ?></u></b>
    </td>
    </tr>
    <tr>
    <td colspan=3>
    Customer Name: <input name="custname" type=text SIZE=75 value="<?php echo $ecustname; ?>">
    </td>
    <td>
    Date of Service: <input name="dateofservice" type=text size=15 value="<?php echo $edateofservice; ?>"></br>
    </td>
    </tr>
    <tr>
    <td colspan=4>
    Address: <input name="address" type=text size=80 value="<?php echo $eaddress; ?>"></br>
    </td>
    </tr>
    <tr>
    <td>
    City: <input name="city" type=text size=37 value="<?php echo $ecity; ?>">
    </td>
    <td><div align=center>
    State <input name="state" type=text size=10 value="<?php echo $estate; ?>"></div>
    </td>
    <td>
    Zip: <input name="zip" type=text size=10 value="<?php echo $ezip; ?>">
    </td>
    <td>
    Phone: <input name="phone" type=text size=20 value="<?php echo $ephone; ?>">
    </td>
    </tr>
    <tr>
    <td>
    Date of Birth: <input name="dateofbirth" size=15 type=text value="<?php echo $edateofbirth; ?>"></br>
    </td>
    <td>
    Sex:&nbsp;&nbsp;
    	<input type="radio" name="sex"
		<?php if (isset($esex) && $esex=="Male") echo "checked";?>
		value="Male">Male&nbsp;&nbsp;
		<input type="radio" name="sex"
		<?php if (isset($esex) && $esex=="Female") echo "checked";?>
		value="Female">Female
	</td>
	<td>
    Height: <input name="height" type=text size=15 value="<?php echo $eheight; ?>">
    </td>
    <td>
    Weight: <input name="weight" type=text size=15 value="<?php echo $eweight; ?>"></br>
    </td>
	</tr>
	<tr>
    <td>
    Alternate Contact: <input name="altcontact" type=text size=39 value="<?php echo $ealtcontact; ?>">
    </td>
    <td>
    Phone: <input name="phone2" type=text size=20 value="<?php echo $ephone2; ?>">
    </td>
    <td>
    Relationship <font size=1>(to patient)</font>: <input name="relationship" type=text value="<?php echo $erelationship; ?>">
    </td>
    </tr>
    </table>
   <hr>
   <table>
   <tr>
   <td>
    Diagnosis: <input name="diagnosis" type=text size=172 value="<?php echo $ediagnosis; ?>"></br>
    Primary Care Physician: <input name="PCP1" type=text size=70 value="<?php echo $epcp1; ?>">
    Phone: <input name="PCP1Phone" type=text size=69 value="<?php echo $epcp1phone; ?>"></br>
    Insurance #1: <input name="ins1" type=text size=83 value="<?php echo $eins1; ?>">
    Number: <input name="ins1number" type=text size=67 value="<?php echo $eins1num; ?>"></br>
    Insurance #2: <input name="ins2" type=text size=83 value="<?php echo $eins2; ?>">
    Number: <input name="ins2number" type=text size=67 value="<?php echo $eins2num; ?>">
    </tr>
    </td>
   </table>
   <hr>
   <div align=center>
   <font size=5 color=#E61669>
   EQUIPMENT
   </font>
   </div>
    <table>
    <tr>
 <td>
    <?php
    if($eeq[0] == "") {
    echo "<input name='1a' type=checkbox class='css-checkbox' id='cb1' value='Hospital Bed, Electric # '><label for='cb1' class='css-label radGroup1'></label>";
    } else {
    echo "<input name='1a' type=checkbox class='css-checkbox' id='cb1' value='Hospital Bed, Electric # ' checked><label for='cb1' class='css-label radGroup1'></label>";
    }
    ?>
    Hospital Bed, Electric [#<input name="1b" type=text value="<?php echo $eeq[1]; ?>">]</br>
    &nbsp;&nbsp;
    <?php
    if($eeq[2] == "") {
    echo "<input name='2a' type=checkbox class='css-checkbox' id='cb2' value='Full Rails'><label for='cb2' class='css-label radGroup1'></label>";
    } else {
    echo "<input name='2a' type=checkbox class='css-checkbox' id='cb2' value='Full Rails' checked><label for='cb2' class='css-label radGroup1'></label>";
    }
    ?>
    Full Rails</br>
    &nbsp;&nbsp;
    <?php
    if($eeq[3] == "") {
    echo "<input name='3a' type=checkbox class='css-checkbox' id='cb3' value='Half Rails'><label for='cb3' class='css-label radGroup1'></label>";
    } else {
    echo "<input name='3a' type=checkbox class='css-checkbox' id='cb3' value='Half Rails' checked><label for='cb3' class='css-label radGroup1'></label>";
    }
    ?>
   	Half Rails</br>
    &nbsp;&nbsp;
    <?php
    if($eeq[4] == "") {
    echo "<input name='4a' type=checkbox class='css-checkbox' id='cb4' value='Lowbed'><label for='cb4' class='css-label radGroup1'></label>";
    } else {
    echo "<input name='4a' type=checkbox class='css-checkbox' id='cb4' value='Lowbed' checked><label for='cb4' class='css-label radGroup1'></label>";
    }
    ?>    
	Lowbed</br>
    <?php
    if($eeq[5] == "") {
    echo "<input name='5a' type=checkbox class='css-checkbox' id='cb5' value='Trapeze'><label for='cb5' class='css-label radGroup1'></label>";
    } else {
    echo "<input name='5a' type=checkbox class='css-checkbox' id='cb5' value='Trapeze' checked><label for='cb5' class='css-label radGroup1'></label>";
    }
    ?>
    Trapeze </br>
    &nbsp;&nbsp;
    <?php
    if($eeq[6] == "") {
    echo "<input name='6a' type=checkbox class='css-checkbox' id='cb6' value='Bed Attached #'><label for='cb6' class='css-label radGroup1'></label>";
    } else {
    echo "<input name='6a' type=checkbox class='css-checkbox' id='cb6' value='Bed Attached #' checked><label for='cb6' class='css-label radGroup1'></label>";
    }
    ?>
	Bed Attached [#<input name="6b" type=text value="<?php echo $eeq[7]; ?>">]</br>
    &nbsp;&nbsp;
    <?php
    if($eeq[8] == "") {
    echo "<input name='7a' type=checkbox class='css-checkbox' id='cb7' value='Free Standing #'><label for='cb7' class='css-label radGroup1'></label>";
    } else {
    echo "<input name='7a' type=checkbox class='css-checkbox' id='cb7' value='Free Standing #' checked><label for='cb7' class='css-label radGroup1'></label>";
    }
    ?>
	Free Standing [#<input name="7b" type=text value="<?php echo $eeq[9]; ?>">]</br>
    <?php
    if($eeq[10] == "") {
    echo "<input name='8a' type=checkbox class='css-checkbox' id='cb8' value='APPP Overlay #'><label for='cb8' class='css-label radGroup1'></label>";
    } else {
    echo "<input name='8a' type=checkbox class='css-checkbox' id='cb8' value='APPP Overlay #' checked><label for='cb8' class='css-label radGroup1'></label>";
    }
    ?>
    APPP Overlay [#<input name="8b" type=text value="<?php echo $eeq[11]; ?>">]</br>
    <?php
    if($eeq[12] == "") {
    echo "<input name='9a' type=checkbox class='css-checkbox' id='cb9' value='AP Mattress Plexus Style #'><label for='cb9' class='css-label radGroup1'></label>";
    } else {
    echo "<input name='9a' type=checkbox class='css-checkbox' id='cb9' value='AP Mattress Plexus Style #' checked><label for='cb9' class='css-label radGroup1'></label>";
    }
    ?>
    AP Mattress Plexus Style [#<input name="9b" type=text value="<?php echo $eeq[13]; ?>">]</br>
    <?php
    if($eeq[14] == "") {
    echo "<input name='10a' type=checkbox class='css-checkbox' id='cb10' value='O2 Concentrator #'><label for='cb10' class='css-label radGroup1'></label>";
    } else {
    echo "<input name='10a' type=checkbox class='css-checkbox' id='cb10' value='O2 Concentrator #' checked><label for='cb10' class='css-label radGroup1'></label>";
    }
    ?>
    O2 Concentrator [#<input name="10b" type=text value="<?php echo $eeq[15]; ?>">]</br>
    &nbsp;&nbsp;
	<?php
    if($eeq[16] == "") {
    echo "<input name='11a' type=checkbox class='css-checkbox' id='cb11' value='1 - 4 LPM'><label for='cb11' class='css-label radGroup1'></label>";
    } else {
    echo "<input name='11a' type=checkbox class='css-checkbox' id='cb11' value='1 - 4 LPM' checked><label for='cb11' class='css-label radGroup1'></label>";
    }
    ?>
    1 - 4 LPM</br>
    &nbsp;&nbsp;
    <?php
    if($eeq[17] == "") {
    echo "<input name='12a' type=checkbox class='css-checkbox' id='cb12' value='10 LPM'><label for='cb12' class='css-label radGroup1'></label>";
    } else {
    echo "<input name='12a' type=checkbox class='css-checkbox' id='cb12' value='10 LPM' checked><label for='cb12' class='css-label radGroup1'></label>";
    }
    ?>
    10 LPM</br>
    <?php
    if($eeq[18] == "") {
    echo "<input name='13a' type=checkbox class='css-checkbox' id='cb13' value='Portable E-Tank System'><label for='cb13' class='css-label radGroup1'></label>";
    } else {
    echo "<input name='13a' type=checkbox class='css-checkbox' id='cb13' value='Portable E-Tank System' checked><label for='cb13' class='css-label radGroup1'></label>";
    }
    ?>
    Portable E-Tank System</br>
    <?php
    if($eeq[19] == "") {
    echo "<input name='14a' type=checkbox class='css-checkbox' id='cb14' value='Portable M-6 Tank w/ Conserver System'><label for='cb14' class='css-label radGroup1'></label>";
    } else {
    echo "<input name='14a' type=checkbox class='css-checkbox' id='cb14' value='Portable M-6 Tank w/ Conserver System' checked><label for='cb14' class='css-label radGroup1'></label>";
    }
    ?>
    Portable M-6 Tank w/ Conserver System</br>
    <?php
    if($eeq[20] == "") {
    echo "<input name='15a' type=checkbox class='css-checkbox' id='cb15' value='E-Tank 682 Liter Refill USP Medical Oxygen'><label for='cb15' class='css-label radGroup1'></label>";
    } else {
    echo "<input name='15a' type=checkbox class='css-checkbox' id='cb15' value='E-Tank 682 Liter Refill USP Medical Oxygen' checked><label for='cb15' class='css-label radGroup1'></label>";
    }
    ?>
    <input name="15b" type=text size=5 value="<?php echo $eeq[21]; ?>"> E-Tank 682 Liter Refill USP Medical Oxygen</br>
    <?php
    if($eeq[22] == "") {
    echo "<input name='16a' type=checkbox class='css-checkbox' id='cb16' value='M-6 Tank 165 Liter Refill USP Medical Oxygen'><label for='cb16' class='css-label radGroup1'></label>";
    } else {
    echo "<input name='16a' type=checkbox class='css-checkbox' id='cb16' value='M-6 Tank 165 Liter Refill USP Medical Oxygen' checked><label for='cb16' class='css-label radGroup1'></label>";
    }
    ?>
    <input name="16b" type=text size=5 value="<?php echo $eeq[23]; ?>"> M-6 Tank 165 Liter Refill USP Medical Oxygen</br>
    </br></br>
    </td>
    
    <td>
    <?php
    if($eeq[24] == "") {
    echo "<input name='17a' type=checkbox class='css-checkbox' id='cb17' value='D Tank 415 Liter Refill USP Medical Oxygen'><label for='cb17' class='css-label radGroup1'></label>";
    } else {
    echo "<input name='17a' type=checkbox class='css-checkbox' id='cb17' value='D Tank 415 Liter Refill USP Medical Oxygen' checked><label for='cb17' class='css-label radGroup1'></label>";
    }
    ?>
	D Tank 415 Liter Refill USP Medical Oxygen</br>
    <?php
    if($eeq[29] == "") {
    echo "<input name='19a' type=checkbox class='css-checkbox' id='cb18' value='Bedside Commode'><label for='cb18' class='css-label radGroup1'></label>";
    } else {
    echo "<input name='19a' type=checkbox class='css-checkbox' id='cb18' value='Bedside Commode' checked><label for='cb18' class='css-label radGroup1'></label>";
    }
    ?>
    Bedside Commode</br>
    &nbsp;&nbsp;
    <?php
    if($eeq[30] == "") {
    echo "<input name='20a' type=checkbox class='css-checkbox' id='cb19' value='Standard #'><label for='cb19' class='css-label radGroup1'></label>";
    } else {
    echo "<input name='20a' type=checkbox class='css-checkbox' id='cb19' value='Standard #' checked><label for='cb19' class='css-label radGroup1'></label>";
    }
    ?>
    Standard [# <input type=text name="20b" value="<?php echo $eeq[31]; ?>"> ]</br>
    &nbsp;&nbsp;
    <?php
    if($eeq[32] == "") {
    echo "<input name='21a' type=checkbox class='css-checkbox' id='cb20' value='X Wide #'><label for='cb20' class='css-label radGroup1'></label>";
    } else {
    echo "<input name='21a' type=checkbox class='css-checkbox' id='cb20' value='X Wide #' checked><label for='cb20' class='css-label radGroup1'></label>";
    }
    ?>
    X Wide [# <input type=text name="21b" value="<?php echo $eeq[33]; ?>"> ]</br>
    <?php
    if($eeq[34] == "") {
    echo "<input name='22a' type=checkbox class='css-checkbox' id='cb21' value='Walker'><label for='cb21' class='css-label radGroup1'></label>";
    } else {
    echo "<input name='22a' type=checkbox class='css-checkbox' id='cb21' value='Walker' checked><label for='cb21' class='css-label radGroup1'></label>";
    }
    ?>
    Walker </br>
    &nbsp;&nbsp;
    <?php
    if($eeq[35] == "") {
    echo "<input name='23a' type=checkbox class='css-checkbox' id='cb22' value='w/ 2 Front Wheels #'><label for='cb22' class='css-label radGroup1'></label>";
    } else {
    echo "<input name='23a' type=checkbox class='css-checkbox' id='cb22' value='W/ 2 Front Wheels #' checked><label for='cb22' class='css-label radGroup1'></label>";
    }
    ?>
    w/ 2 Front Wheels [# <input type=text name="23b" value="<?php echo $eeq[36]; ?>"> ]</br>
    &nbsp;&nbsp;
    <?php
    if($eeq[37] == "") {
    echo "<input name='24a' type=checkbox class='css-checkbox' id='cb23' value='w/ 4 Wheels & Seat #'><label for='cb23' class='css-label radGroup1'></label>";
    } else {
    echo "<input name='24a' type=checkbox class='css-checkbox' id='cb23' value='w/ 4 Wheels & Seat #' checked><label for='cb23' class='css-label radGroup1'></label>";
    }
    ?>
    w/ 4 Wheels & Seat [# <input type=text name="24b" value="<?php echo $eeq[38]; ?>"> ]</br>
    <?php
    if($eeq[39] == "") {
    echo "<input name='25a' type=checkbox class='css-checkbox' id='cb24' value='Nebulizer #'><label for='cb24' class='css-label radGroup1'></label>";
    } else {
    echo "<input name='25a' type=checkbox class='css-checkbox' id='cb24' value='Nebulizer #' checked><label for='cb24' class='css-label radGroup1'></label>";
    }
    ?>
    Nebulizer [# <input type=text name="25b" value="<?php echo $eeq[40]; ?>"> ]</br>
    &nbsp;&nbsp;
    <?php
    if($eeq[41] == "") {
    echo "<input name='26a' type=checkbox class='css-checkbox' id='cb25' value='Nebulizer Tubing'><label for='cb25' class='css-label radGroup1'></label>";
    } else {
    echo "<input name='26a' type=checkbox class='css-checkbox' id='cb25' value='Nebulizer Tubing' checked><label for='cb25' class='css-label radGroup1'></label>";
    }
    ?>
    Nebulizer Tubing</br>
    &nbsp;&nbsp;&nbsp;&nbsp;
    <?php
    if($eeq[42] == "") {
    echo "<input name='27a' type=checkbox class='css-checkbox' id='cb26' value='w/ Mouthpiece'><label for='cb26' class='css-label radGroup1'></label>";
    } else {
    echo "<input name='27a' type=checkbox class='css-checkbox' id='cb26' value='w/ Mouthpiece' checked><label for='cb26' class='css-label radGroup1'></label>";
    }
    ?>
    w/ Mouthpiece</br>
    &nbsp;&nbsp;&nbsp;&nbsp;
    <?php
    if($eeq[43] == "") {
    echo "<input name='28a' type=checkbox class='css-checkbox' id='cb27' value='w/ Mask'><label for='cb27' class='css-label radGroup1'></label>";
    } else {
    echo "<input name='28a' type=checkbox class='css-checkbox' id='cb27' value='w/ Mask' checked><label for='cb27' class='css-label radGroup1'></label>";
    }
    ?>
    w/ Mask</br>
    <?php
    if($eeq[44] == "") {
    echo "<input name='29a' type=checkbox class='css-checkbox' id='cb28' value='Suction Pump #'><label for='cb28' class='css-label radGroup1'></label>";
    } else {
    echo "<input name='29a' type=checkbox class='css-checkbox' id='cb28' value='Suction Pump #' checked><label for='cb28' class='css-label radGroup1'></label>";
    }
    ?>
    Suction Pump [#<input name="29b" type=text value="<?php echo $eeq[45]; ?>">]</br>
    <?php
    if($eeq[46] == "") {
    echo "<input name='30a' type=checkbox class='css-checkbox' id='cb29' value='Over-the-bed Table'><label for='cb29' class='css-label radGroup1'></label>";
    } else {
    echo "<input name='30a' type=checkbox class='css-checkbox' id='cb29' value='Over-the-bed Table' checked><label for='cb29' class='css-label radGroup1'></label>";
    }
    ?>
    Over-the-bed Table [#<input name="30b" type=text value="<?php echo $eeq[47]; ?>">]</br>
    <?php
    if($eeq[48] == "") {
    echo "<input name='31a' type=checkbox class='css-checkbox' id='cb30' value='Shower Chair'><label for='cb30' class='css-label radGroup1'></label>";
    } else {
    echo "<input name='31a' type=checkbox class='css-checkbox' id='cb30' value='Shower Chair' checked><label for='cb30' class='css-label radGroup1'></label>";
    }
    ?>
    Shower Chair</br>
    &nbsp;&nbsp;
    <?php
    if($eeq[49] == "") {
    echo "<input name='32a' type=checkbox class='css-checkbox' id='cb31' value='w/ Back #'><label for='cb31' class='css-label radGroup1'></label>";
    } else {
    echo "<input name='32a' type=checkbox class='css-checkbox' id='cb31' value='w/ Back #' checked><label for='cb31' class='css-label radGroup1'></label>";
    }
    ?>
    w/ Back [# <input name="32b" type=text value="<?php echo $eeq[50]; ?>"> ]</br>
    &nbsp;&nbsp;
    <?php
    if($eeq[51] == "") {
    echo "<input name='33a' type=checkbox class='css-checkbox' id='cb32' value='w/o Back'><label for='cb32' class='css-label radGroup1'></label>";
    } else {
    echo "<input name='33a' type=checkbox class='css-checkbox' id='cb32' value='w/o Back' checked><label for='cb32' class='css-label radGroup1'></label>";
    }
    ?>
    w/o Back [# <input name="33b" type=text value="<?php echo $eeq[52]; ?>"> ]</br>
    </br></br>
    </td>
<td>
    <?php
    if($eeq[53] == "") {
    echo "<input name='34a' type=checkbox class='css-checkbox' id='cb33' value='Wheelchair'><label for='cb33' class='css-label radGroup1'></label>";
    } else {
    echo "<input name='34a' type=checkbox class='css-checkbox' id='cb33' value='Wheelchair' checked><label for='cb33' class='css-label radGroup1'></label>";
    }
    ?>
    Wheelchair</br>
    &nbsp;&nbsp;
    <?php
    if($eeq[54] == "") {
    echo "<input name='35a' type=checkbox class='css-checkbox' id='cb34' value='16in Standard #'><label for='cb34' class='css-label radGroup1'></label>";
    } else {
    echo "<input name='35a' type=checkbox class='css-checkbox' id='cb34' value='16in Standard #' checked><label for='cb34' class='css-label radGroup1'></label>";
    }
    ?>
    16" Standard [#<input name="35b" type=text value="<?php echo $eeq[55]; ?>">]</br>
    &nbsp;&nbsp;
    <?php
    if($eeq[56] == "") {
    echo "<input name='36a' type=checkbox class='css-checkbox' id='cb35' value='18in Standard #'><label for='cb35' class='css-label radGroup1'></label>";
    } else {
    echo "<input name='36a' type=checkbox class='css-checkbox' id='cb35' value='18in Standard #' checked><label for='cb35' class='css-label radGroup1'></label>";
    }
    ?>
    18" Standard [#<input name="36b" type=text value="<?php echo $eeq[57]; ?>">]</br>
    &nbsp;&nbsp;
    <?php
    if($eeq[58] == "") {
    echo "<input name='37a' type=checkbox class='css-checkbox' id='cb36' value='20in Wide #'><label for='cb36' class='css-label radGroup1'></label>";
    } else {
    echo "<input name='37a' type=checkbox class='css-checkbox' id='cb36' value='20in Wide #' checked><label for='cb36' class='css-label radGroup1'></label>";
    }
    ?>
    20" Wide [#<input name="37b" type=text value="<?php echo $eeq[59]; ?>">]</br>
    &nbsp;&nbsp;
    <?php
    if($eeq[60] == "") {
    echo "<input name='38a' type=checkbox class='css-checkbox' id='cb37' value='22in X Wide #'><label for='cb37' class='css-label radGroup1'></label>";
    } else {
    echo "<input name='38a' type=checkbox class='css-checkbox' id='cb37' value='22in X Wide #' checked><label for='cb37' class='css-label radGroup1'></label>";
    }
    ?>
    22" X Wide[#<input name="38b" type=text value="<?php echo $eeq[61]; ?>">]</br>
    &nbsp;&nbsp;
    <?php
    if($eeq[62] == "") {
    echo "<input name='39a' type=checkbox class='css-checkbox' id='cb38' value='24in XX Wide #'><label for='cb38' class='css-label radGroup1'></label>";
    } else {
    echo "<input name='39a' type=checkbox class='css-checkbox' id='cb38' value='2in XX Wide #' checked><label for='cb38' class='css-label radGroup1'></label>";
    }
    ?>
    24" XX Wide [#<input name="39b" type=text value="<?php echo $eeq[63]; ?>">]</br>
    &nbsp;&nbsp;
    <?php
    if($eeq[64] == "") {
    echo "<input name='40a' type=checkbox class='css-checkbox' id='cb39' value='Reclining #'><label for='cb39' class='css-label radGroup1'></label>";
    } else {
    echo "<input name='40a' type=checkbox class='css-checkbox' id='cb39' value='Reclining #' checked><label for='cb39' class='css-label radGroup1'></label>";
    }
    ?>
    Reclining [#<input name="40b" type=text value="<?php echo $eeq[65]; ?>">]</br>
    <?php
    if($eeq[66] == "") {
    echo "<input name='41a' type=checkbox class='css-checkbox' id='cb40' value='Transport/Travel Chair #'><label for='cb40' class='css-label radGroup1'></label>";
    } else {
    echo "<input name='41a' type=checkbox class='css-checkbox' id='cb40' value='Transport/Travel Chair #' checked><label for='cb40' class='css-label radGroup1'></label>";
    }
    ?>
    Transport/Travel Chair [# <input name="41b" type=text value="<?php echo $eeq[67]; ?>"> ]</br>
    <?php
    if($eeq[68] == "") {
    echo "<input name='42a' type=checkbox class='css-checkbox' id='cb41' value='Reclining Geri-Chair #'><label for='cb41' class='css-label radGroup1'></label>";
    } else {
    echo "<input name='42a' type=checkbox class='css-checkbox' id='cb41' value='Reclining Geri-Chair #' checked><label for='cb41' class='css-label radGroup1'></label>";
    }
    ?>Reclining Geri-Chair [# <input name="42b" type=text value="<?php echo $eeq[69]; ?>"> ]</br>
    <?php
    if($eeq[70] == "") {
    echo "<input name='43a' type=checkbox class='css-checkbox' id='cb42' value='Lift Chair'><label for='cb42' class='css-label radGroup1'></label>";
    } else {
    echo "<input name='43a' type=checkbox class='css-checkbox' id='cb42' value='Lift Chair' checked><label for='cb42' class='css-label radGroup1'></label>";
    }
    ?>
    Lift Chair</br>
    &nbsp;&nbsp;
    <?php
    if($eeq[71] == "") {
    echo "<input name='44a' type=checkbox class='css-checkbox' id='cb43' value='Capri #'><label for='cb43' class='css-label radGroup1'></label>";
    } else {
    echo "<input name='44a' type=checkbox class='css-checkbox' id='cb43' value='Capri #' checked><label for='cb43' class='css-label radGroup1'></label>";
    }
    ?>
    Capri [#<input name="44b" type=text value="<?php echo $eeq[72]; ?>">]</br>
    &nbsp;&nbsp;
    <?php
    if($eeq[73] == "") {
    echo "<input name='45a' type=checkbox class='css-checkbox' id='cb44' value='Maxi #'><label for='cb44' class='css-label radGroup1'></label>";
    } else {
    echo "<input name='45a' type=checkbox class='css-checkbox' id='cb44' value='Maxi #' checked><label for='cb44' class='css-label radGroup1'></label>";
    }
    ?>
    Maxi [#<input name="45b" type=text value="<?php echo $eeq[74]; ?>">]</br>
    &nbsp;&nbsp;
    <?php
    if($eeq[75] == "") {
    echo "<input name='46a' type=checkbox class='css-checkbox' id='cb45' value='Regal #'><label for='cb45' class='css-label radGroup1'></label>";
    } else {
    echo "<input name='46a' type=checkbox class='css-checkbox' id='cb45' value='Regal #' checked><label for='cb45' class='css-label radGroup1'></label>";
    }
    ?>
    Regal [#<input name="46b" type=text value="<?php echo $eeq[76]; ?>">]</br>
    <?php
    if($eeq[77] == "") {
    echo "<input name='47a' type=checkbox class='css-checkbox' id='cb46' value='Patient Lift #'><label for='cb46' class='css-label radGroup1'></label>";
    } else {
    echo "<input name='47a' type=checkbox class='css-checkbox' id='cb46' value='Patient Lift #' checked><label for='cb46' class='css-label radGroup1'></label>";
    }
    ?>
    Patient Lift [#<input name="47b" type=text value="<?php echo $eeq[78]; ?>">]</br>
    <?php
    if($eeq[79] == "") {
    echo "<input name='48a' type=checkbox class='css-checkbox' id='cb47' value='Other'><label for='cb47' class='css-label radGroup1'></label>";
    } else {
    echo "<input name='48a' type=checkbox class='css-checkbox' id='cb47' value='Other' checked><label for='cb47' class='css-label radGroup1'></label>";
    }
    ?>
    Other</br> <textarea name="48b" rows=3 cols=40><?php echo $eeq[80]; ?></textarea></br>
    </td>
    </tr>
    <td colspan=3>
    Lot Number(s): <input name="lotnumbers" type=text size=225 value="<?php echo $elotnumbers; ?>"></br>
    </td>
    </table>
    <hr>
    
 	<?php
 	/* DOESN'T YET WORK
    $equiparray = array("1a","1b","2a","3a","4a","5a","6a","6b","7a","7b","8a","8b","9a","9b","10a","10b","11a","12a","13a","14a","15a","15b","16a","16b","17a","17b","18a","18b","19a","19b","20a","20b","21a","21b","22a","23a","24a","25a","26a","27a","28a","29a","30a","31a","32a","33a","34a","35a","36a","37a","38a","39a","40a","41a","42a","43a","44a","45a","46a","47a","48a");
    foreach($equiparray as $equip2){
    $equip1 = $_POST['$equip2'];
    }
    echo "Equipment Count: <b>" . count($equiparray) . "</b></br";
    */
	
	// Temporary Equipment Strings
	
    $a1 = $_POST['1a'];
    $b1 = $_POST['1b'];
    $a2 = $_POST['2a'];
    $a3 = $_POST['3a'];
    $a4 = $_POST['4a'];
    $a5 = $_POST['5a'];
    $a6 = $_POST['6a'];
    $b6 = $_POST['6b'];
    $a7 = $_POST['7a'];
    $b7 = $_POST['7b'];
    $a8 = $_POST['8a'];
    $b8 = $_POST['8b'];
    $a9 = $_POST['9a'];
    $b9 = $_POST['9b'];
    $a10 = $_POST['10a'];
    $b10 = $_POST['10b'];
    $a11 = $_POST['11a'];
    $a12 = $_POST['12a'];
    $a13 = $_POST['13a'];
    $a14 = $_POST['14a'];
    $a15 = $_POST['15a'];
    $b15 = $_POST['15b'];
    $a16 = $_POST['16a'];
    $b16 = $_POST['16b'];
    $a17 = $_POST['17a'];
    $b17 = $_POST['17b'];
    $a18 = $_POST['18a'];
    $b18 = $_POST['18b'];
    $c18 = $_POST['18c'];
    $a19 = $_POST['19a'];
    $b19 = $_POST['19b'];
    $a20 = $_POST['20a'];
    $b20 = $_POST['20b'];
    $a21 = $_POST['21a'];
    $b21 = $_POST['21b'];
    $a22 = $_POST['22a'];
    $a23 = $_POST['23a'];
    $b23 = $_POST['23b'];
    $a24 = $_POST['24a'];
    $b24 = $_POST['24b'];
    $a25 = $_POST['25a'];
    $b25 = $_POST['25b'];
    $a26 = $_POST['26a'];
    $a27 = $_POST['27a'];
    $a28 = $_POST['28a'];
    $a29 = $_POST['29a'];
    $b29 = $_POST['29b'];
    $a30 = $_POST['30a'];
    $b30 = $_POST['30b'];
    $a31 = $_POST['31a'];
    $a32 = $_POST['32a'];
    $b32 = $_POST['32b'];
    $a33 = $_POST['33a'];
    $b33 = $_POST['33b'];
    $a34 = $_POST['34a'];
    $a35 = $_POST['35a'];
    $b35 = $_POST['35b'];
    $a36 = $_POST['36a'];
    $b36 = $_POST['36b'];
    $a37 = $_POST['37a'];
    $b37 = $_POST['37b'];
    $a38 = $_POST['38a'];
    $b38 = $_POST['38b'];
    $a39 = $_POST['39a'];
    $b39 = $_POST['39b'];
    $a40 = $_POST['40a'];
    $b40 = $_POST['40b'];
    $a41 = $_POST['41a'];
    $b41 = $_POST['41b'];
    $a42 = $_POST['42a'];
    $b42 = $_POST['42b'];
    $a43 = $_POST['43a'];
    $a44 = $_POST['44b'];
    $b44 = $_POST['44b'];
    $a45 = $_POST['45a'];
    $b45 = $_POST['45b'];
    $a46 = $_POST['46a'];
    $b46 = $_POST['46b'];
    $a47 = $_POST['47a'];
    $b47 = $_POST['47b'];
    $a48 = $_POST['48a'];
    $b48 = $_POST['48b'];
    
    	$eq = array($a1,$b1,$a2,$a3,$a4,$a5,$a6,$b6,$a7,$b7,$a8,$b8,$a9,$b9,$a10,$b10,$a11,$a12,$a13,$a14,$a15,$b15,$a16,$b16,$a17,$b17,$a18,$b18,$c18,$a19,$a20,$b20,$a21,$b21,$a22,$a23,$b23,$a24,$b24,$a25,$b25,$a26,$a27,$a28,$a29,$b29,$a30,$b30,$a31,$a32,$b32,$a33,$b33,$a34,$a35,$b36,$a36,$b36,$a37,$b37,$a38,$b38,$a39,$b39,$a40,$b40,$a41,$b41,$a42,$b42,$a43,$a44,$b44,$a45,$b45,$a46,$b46,$a47,$b47,$a48,$b48);
    
    // End Temp Equip Strings
    ?>
    
    <?php
    // EQUIPMENT ENDS HERE
    ?>
    <i>
    <font size=3>
    I request payment of authorized benefits be made on my behalf, and hereby assign these benefits payable to <b>Brevard Medical Equipment</b> for services and equipment rensered. I certify that I have received the above listed equipment in perfect condition and that I have been instructed on how to use the equipment properly and safely. I have been presented with the warranty information on the product(s). I hereby give permission for <b>Brevard Medical Equipment</b> to contact me by telephone concerning my health insurance covered equipment and/or supplies.
    </font>
    </i>
    </br></br>

    <b>
    <table>
    <tr>
    <td>
    <FONT SIZE=3><B>
    Customer's Signature: _________________________________________ Date: <b><u>_____________________</u></b></br></br>
    </b>
    </FONT>
    </td>
    </tr>
    <tr>
    <td>
    <FONT SIZE=3><b>
    Driver/Office: <input name="driver_office" id="doffice" type=text SIZE=50 value="<?php echo $edoffice; ?>">
    </b>
    </FONT>
    </td>
    </tr>
    <tr>
    <td>
    <div align=center><input type="submit" name="submit" id="submit" value="Update" class="no-print"></div>
	</form>
    </td>
    </td>
    </table>
    </b>
    </font>
<?php
if(isset($_POST['vitas'])){
    //$vitas is checked and value = 1
    $vitas = $_POST['vitas'];
}
else{
    //$vitas is not checked and value=0
    $vitas=0;
}
// BHOSP
if(isset($_POST['bhosp'])){
    //bhosp is checked and value = 1
    $bhosp = $_POST['bhosp'];
}
else{
    //$bhosp is not checked and value=0
    $bhosp=0;
}
	$referral = $_POST['referral'];
	$preparedby = $_POST['preparedby'];
	$date1 = date("Y/m/d");
	$time = date("h:i:sa");
	$custname = $_POST['custname'];
	$dateofservice = $_POST['dateofservice'];
	$height = $_POST['height'];
	$weight = $_POST['weight'];
	$address = $_POST['address'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$zip = $_POST['zip'];
	$phone = $_POST['phone'];
	$sex = $_POST['sex'];
	$dateofbirth = $_POST['dateofbirth'];
	$altcontact = $_POST['altcontact'];
	$phone2 = $_POST['phone2'];
	$relationship = $_POST['relationship'];
	$diagnosis = $_POST['diagnosis'];
	$pcp1 = $_POST['PCP1'];
	$pcp1phone = $_POST['PCP1Phone'];
	$ins1 = $_POST['ins1'];
	$ins1number = $_POST['ins1number'];
	$ins2 = $_POST['ins2'];
	$ins2number = $_POST['ins2number'];
	$CSig = $_POST['cSignature'];
	$date2 = $vitas;
	$doffice = $_POST['driver_office'];
	$lotnumbers = $_POST['lotnumbers'];
	$edittime = date("h:i:sa") . " " . date("Y/m/d");
	$tablename = "NewCustInfo";
	$action = "Edit";
	$doffice1 = "1";
	
	
	
	if($_POST['submit']) {
	if($doffice1 != "1") {
	$message = "Please fill out Driver/Office field!";
	} else {
				mysqli_query($GLOBALS["___mysqli_ston"], "UPDATE NewCustInfo SET `Referral`='$referral',`PreparedBy`='$preparedby',`DateofService`='$dateofservice', `CustName`='$custname', `Height`='$height',`Weight`='$weight',`Address`='$address',`City`='$city',`State`='$state',`Zip`='$zip',`Phone`='$phone',`Sex`='$sex',`CSig1`='$CSig', `Date2`='$date2',`DriverOffice`='$doffice',`DateofBirth`='$dateofbirth',`AltContact`='$altcontact',`Relationship`='$relationship',`Diagnosis`='$diagnosis',`Pcp1`='$pcp1',`Pcp1Phone`='$pcp1phone',`Ins1`='$ins1',`Ins1Number`='$ins1number',`Ins2`='$ins2',`Ins2Number`='$ins2number', `eq1`='$eq[0]', `eq2`='$eq[1]', `eq3`='$eq[2]', `eq4`='$eq[3]', `eq5`='$eq[4]', `eq6`='$eq[5]', `eq7`='$eq[6]', `eq8`='$eq[7]', `eq9`='$eq[8]', `eq10`='$eq[9]', `eq11`='$eq[10]', `eq12`='$eq[11]', `eq13`='$eq[12]', `eq14`='$eq[13]', `eq15`='$eq[14]', `eq16`='$eq[15]', `eq17`='$eq[16]', `eq18`='$eq[17]', `eq19`='$eq[18]', `eq20`='$eq[19]', `eq21`='$eq[20]', `eq22`='$eq[21]', `eq23`='$eq[22]', `eq24`='$eq[23]', `eq25`='$eq[24]', `eq26`='$eq[25]', `eq27`='$eq[26]', `eq28`='$eq[27]', `eq29`='$eq[28]', `eq30`='$eq[29]', `eq31`='$eq[30]', `eq32`='$eq[31]', `eq33`='$eq[32]', `eq34`='$eq[33]', `eq35`='$eq[34]', `eq36`='$eq[35]', `eq37`='$eq[36]', `eq38`='$eq[37]', `eq39`='$eq[38]', `eq40`='$eq[39]', `eq41`='$eq[40]', `eq42`='$eq[41]', `eq43`='$eq[42]', `eq44`='$eq[43]', `eq45`='$eq[44]', `eq46`='$eq[45]', `eq47`='$eq[46]', `eq48`='$eq[47]', `eq49`='$eq[48]', `eq50`='$eq[49]', `eq51`='$eq[50]', `eq52`='$eq[51]', `eq53`='$eq[52]', `eq54`='$eq[53]', `eq55`='$eq[54]', `eq56`='$eq[55]', `eq57`='$eq[56]', `eq58`='$eq[57]', `eq59`='$eq[58]', `eq60`='$eq[59]', `eq61`='$eq[60]', `eq62`='$eq[61]', `eq63`='$eq[62]', `eq64`='$eq[63]', `eq65`='$eq[64]', `eq66`='$eq[65]', `eq67`='$eq[66]', `eq68`='$eq[67]', `eq69`='$eq[68]', `eq70`='$eq[69]', `eq71`='$eq[70]', `eq72`='$eq[71]', `eq73`='$eq[72]', `eq74`='$eq[73]', `eq75`='$eq[74]',`eq76`='$eq[75]',`eq77`='$eq[76]',`eq78`='$eq[77]',`eq79`='$eq[78]',`eq80`='$eq[79]',`eq81`='$eq[80]',`LotNumbers`='$lotnumbers',`specialinstructions`='$specialinstructions',`Editor`='$username',`EditTime`='$edittime',`bhosp`='$bhosp' WHERE `ID`='$get_db_id'") or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));	
				mysqli_query($GLOBALS["___mysqli_ston"], "INSERT INTO AuditTrail (`ID`,`TableName`,`AuditID`,`Username`,`Action`,`Time`)
					Values('','$tablename','$get_db_id','$username','$action','$edittime')") or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
				echo "<div align=center>";
				echo "Data has been logged, thank you.</br>";
				echo "<br><a href='newcustinfo_edit.php?ID=" . $get_db_id . "'>Next Form</a>";
				echo "</div>";
				header('Location: newcustinfo_edit.php?ID=' . $get_db_id);
	}
	}
	}
	}
?>

 </br><span id="flag"></span>   
	</div>
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


    </body><br>
    </html>
<?php
		}
	} else {
echo "<div align=center><b>You must be logged in to do that!</b></div>";
	}
include(__DIR__ . "/pfooter.php");
include(__DIR__ . "/hippa.php");
?>