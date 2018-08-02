<?php
include(__DIR__ . "/includes/connect.php");
include(__DIR__ . "/includes/functions.php");
include(__DIR__ . "/header.php");
	include('stylings.php');
	if(loggedin()){
		if($user_level == 1){
			echo "User does not have access.";
		} else {
?>


    <html>
    <head>
        <title>Brevard Medical Equipment :: Pickup Slip</title>
    <div align=center>
    <font size=6 color="#000000"><b><span style="Background-Color:#FFFF00">
    PICK-UP SLIP</SPAN></b></BR>
    </font>
    </div>
	<script src="/includes/jquery-1.10.2.js"></script>
    </head>
    <body>
    <div align=center> 
    <form method="post">
    <table>
    <tr>
    <td>
    Patient #: <input name="patientnum" type=text></br>
    Referral: <input name="referral" type=text> | <input name='vitas' type=checkbox class='css-checkbox' id='vitas' value='1'><label for='vitas' class='css-label radGroup1'></label> <font color=red><b>VITAS</b></font> | <input name='bhosp' type=checkbox class='css-checkbox' id='bhosp' value='1'><label for='bhosp' class='css-label radGroup1'></label> <font color=red><b>BHOSP</b></font> |
    Prepared By: <input name="preparedby" type=text>
    Date: <b><u><?php echo date("Y/m/d"); ?></u></b></br>
    Date of Pickup: <input name="dateofpickup" type=text size=55></br>
    Customer Name: <input name="custname" type=text size=100></br>
    Address: <input name="address" type=text size=110></br>
    City: <input name="city" type=text size=49>
    Phone: <input name="phone" type=text size=49>
    </td>
    </tr>
    </table>
    <?php
   //  Equipment Starts Here //
   ?>
   <div align=center>
   <font size=5><SPAN STYLE="BACKGROUND-COLOR: #FFFF00">
   EQUIPMENT
   </SPAN></font>
   </div>
    <table>
    <tr>
    <td>
    <input name="1a" type=checkbox class="css-checkbox" id="cb1" value= "Hospital Bed, Electric #"><label for="cb1" class="css-label radGroup1"></label>Hospital Bed, Electric [#<input name="1b" type=text>]</br>
    &nbsp;&nbsp;<input name="2a" type=checkbox class="css-checkbox" id="cb2" value="Full Rails"><label for="cb2" class="css-label radGroup1"></label>Full Rails</br>
    &nbsp;&nbsp;<input name="3a" type=checkbox class="css-checkbox" id="cb3" value="Half Rails"><label for="cb3" class="css-label radGroup1"></label>Half Rails</br>
    &nbsp;&nbsp;<input name="4a" type=checkbox class="css-checkbox" id="cb4" value="Lowbed"><label for="cb4" class="css-label radGroup1"></label>Lowbed</br>
    <input name="5a" type=checkbox class="css-checkbox" id="cb5" value="Trapeze"><label for="cb5" class="css-label radGroup1"></label>Trapeze </br>
    &nbsp;&nbsp;<input name="6a" type=checkbox class="css-checkbox" id="cb6" value="Bed Attached #"><label for="cb6" class="css-label radGroup1"></label>Bed Attached [#<input name="6b" type=text>]</br>
    &nbsp;&nbsp;<input name="7a" type=checkbox class="css-checkbox" id="cb7" value="Free Standing #"><label for="cb7" class="css-label radGroup1"></label>Free Standing [#<input name="7b" type=text>]</br>
    <input name="8a" type=checkbox class="css-checkbox" id="cb8" value="APPP Overlay #"><label for="cb8" class="css-label radGroup1"></label>APPP Overlay [#<input name="8b" type=text>]</br>
    <input name="9a" type=checkbox class="css-checkbox" id="cb9" value="AP Mattress (Plexus Style) #"><label for="cb9" class="css-label radGroup1"></label>AP Mattress (Plexus Style) [#<input name="9b" type=text>]</br>
    <input name="10a" type=checkbox class="css-checkbox" id="cb10" value="O2 Concentrator #"><label for="cb10" class="css-label radGroup1"></label>O2 Concentrator [#<input name="10b" type=text>]</br>
    &nbsp;&nbsp;<input name="11a" type=checkbox class="css-checkbox" id="cb11" value="1 - 4 LPM"><label for="cb11" class="css-label radGroup1"></label>1 - 4 LPM </br>
    &nbsp;&nbsp;<input name="12a" type=checkbox class="css-checkbox" id="cb12" value="10 LPM"><label for="cb12" class="css-label radGroup1"></label>10 LPM</br>
    <input name="13a" type=checkbox class="css-checkbox" id="cb13" value="Portable E-Tank System"><label for="cb13" class="css-label radGroup1"></label>Portable E-Tank System</br>
    <input name="14a" type=checkbox class="css-checkbox" id="cb14" value="Portable M-6 Tank w/ Conserver System"><label for="cb14" class="css-label radGroup1"></label>Portable M-6 Tank w/ Conserver System</br>
    <input name="15a" type=checkbox class="css-checkbox" id="cb15" value="E-Tank 682 Liter Refill USP Medical Oxygen"><input name="15b" type=text SIZE=5><label for="cb15" class="css-label radGroup1"></label>E-Tank 682 Liter Refill USP Medical Oxygen</br>
    <input name="16a" type=checkbox class="css-checkbox" id="cb16" value="M-6 Tank 165 Liter Refill USP Medical Oxygen"><input name="16b" type=text SIZE=5><label for="cb16" class="css-label radGroup1"></label>M-6 Tank 165 Liter Refill USP Medical Oxygen</br>
	</br></br>
    </td>
    <td>
    <input name="17a" type=checkbox class="css-checkbox" id="cb17" value="D Tank 415 Liter Refill USP Medical Oxygen"><label for="cb17" class="css-label radGroup1"></label>D Tank 415 Liter Refill USP Medical Oxygen</br>
    <input name="19a" type=checkbox class="css-checkbox" id="cb18" value="Bedside Commode"><label for="cb18" class="css-label radGroup1"></label>Bedside Commode</br>
    &nbsp;&nbsp;<input name="20a" type=checkbox class="css-checkbox" id="cb19" value="Standard #"><label for="cb19" class="css-label radGroup1"></label>Standard [# <input name="20b"> ]</br>
    &nbsp;&nbsp;<input name="21a" type=checkbox class="css-checkbox" id="cb20" value="X Wide #"><label for="cb20" class="css-label radGroup1"></label>X Wide [# <input name="21b"> ]</br>
    <input name="22a" type=checkbox class="css-checkbox" id="cb21" value="Walker #"><label for="cb21" class="css-label radGroup1"></label>Walker </br>
    &nbsp;&nbsp;<input name="23a" type=checkbox class="css-checkbox" id="cb22" value="w/ 2 Front Wheels #"><label for="cb22" class="css-label radGroup1"></label>w/ 2 Front Wheels [# <input name="23b"> ]</br>
    &nbsp;&nbsp;<input name="24a" type=checkbox class="css-checkbox" id="cb23" value="w/ 4 Wheels & Seat #"><label for="cb23" class="css-label radGroup1"></label>w/ 4 Wheels & Seat [# <input name="24b"> ]</br>
    <input name="25a" type=checkbox class="css-checkbox" id="cb24" value="Nebulizer #"><label for="cb24" class="css-label radGroup1"></label>Nebulizer [# <input name="25b"> ]</br>
    &nbsp;&nbsp;<input name="26a" type=checkbox class="css-checkbox" id="cb25" value="Nebulizer Tubing"><label for="cb25" class="css-label radGroup1"></label>Nebulizer Tubing</br>
    &nbsp;&nbsp;&nbsp;&nbsp;<input name="27a" type=checkbox class="css-checkbox" id="cb26" value="w/ Mouthpiece"><label for="cb26" class="css-label radGroup1"></label>w/ Mouthpiece</br>
    &nbsp;&nbsp;&nbsp;&nbsp;<input name="28a" type=checkbox class="css-checkbox" id="cb27" value="w/ Mask"><label for="cb27" class="css-label radGroup1"></label>w/ Mask</br>
    <input name="29a" type=checkbox class="css-checkbox" id="cb28" value="Suction Pump #"><label for="cb28" class="css-label radGroup1"></label>Suction Pump [#<input name="29b" type=text>]</br>
    <input name="30a" type=checkbox class="css-checkbox" id="cb29" value="Over-the-bed Table #"><label for="cb29" class="css-label radGroup1"></label>Over-the-bed Table [#<input name="30b" type=text>]</br>
    <input name="31a" type=checkbox class="css-checkbox" id="cb30" value="Shower Chair"><label for="cb30" class="css-label radGroup1"></label>Shower Chair</br>
    &nbsp;&nbsp;<input name="32a" type=checkbox class="css-checkbox" id="cb31" value="w/ Back #"><label for="cb31" class="css-label radGroup1"></label>w/ Back [# <input name="32b"> ]</br>
    &nbsp;&nbsp;<input name="33a" type=checkbox class="css-checkbox" id="cb32" value="w/o Back #"><label for="cb32" class="css-label radGroup1"></label>w/o Back [# <input name="33b"> ]</br>
    </br></br>
    </td>
    <td>
    <input name="34a" type=checkbox class="css-checkbox" id="cb33" value="Wheelchair"><label for="cb33" class="css-label radGroup1"></label>Wheelchair</br>
    &nbsp;&nbsp;<input name="35a" type=checkbox class="css-checkbox" id="cb34" value="16in Standard #"><label for="cb34" class="css-label radGroup1"></label>16" Standard [#<input name="35b" type=text>]</br>
    &nbsp;&nbsp;<input name="36a" type=checkbox class="css-checkbox" id="cb35" value="18in Standard #"><label for="cb35" class="css-label radGroup1"></label>18" Standard [#<input name="36b" type=text>]</br>
    &nbsp;&nbsp;<input name="37a" type=checkbox class="css-checkbox" id="cb36" value="20in Wide #"><label for="cb36" class="css-label radGroup1"></label>20" Wide [#<input name="37b" type=text>]</br>
    &nbsp;&nbsp;<input name="38a" type=checkbox class="css-checkbox" id="cb37" value="22in X Wide #"><label for="cb37" class="css-label radGroup1"></label>22" X Wide[#<input name="38b" type=text>]</br>
    &nbsp;&nbsp;<input name="39a" type=checkbox class="css-checkbox" id="cb38" value="24in XX Wide #"><label for="cb38" class="css-label radGroup1"></label>24" XX Wide [#<input name="39b" type=text>]</br>
    &nbsp;&nbsp;<input name="40a" type=checkbox class="css-checkbox" id="cb39" value="Reclining #"><label for="cb39" class="css-label radGroup1"></label>Reclining [#<input name="40b" type=text>]</br>
    <input name="41a" type=checkbox class="css-checkbox" id="cb40" value="Transport/Travel Chair #"><label for="cb40" class="css-label radGroup1"></label>Transport/Travel Chair [# <input name="41b" type=text> ]</br>
    <input name="42a" type=checkbox class="css-checkbox" id="cb41" value="Reclining Geri-Chair #"><label for="cb41" class="css-label radGroup1"></label>Reclining Geri-Chair [# <input name="42b" type=text> ]</br>
    <input name="43a" type=checkbox class="css-checkbox" id="cb42" value="Lift Chair"><label for="cb42" class="css-label radGroup1"></label>Lift Chair</br>
    &nbsp;&nbsp;<input name="44a" type=checkbox class="css-checkbox" id="cb43" value="Capri #"><label for="cb43" class="css-label radGroup1"></label>Capri [#<input name="44b" type=text>]</br>
    &nbsp;&nbsp;<input name="45a" type=checkbox class="css-checkbox" id="cb44" value="Maxi #"><label for="cb44" class="css-label radGroup1"></label>Maxi [#<input name="45b" type=text>]</br>
    &nbsp;&nbsp;<input name="46a" type=checkbox class="css-checkbox" id="cb45" value="Regal #"><label for="cb45" class="css-label radGroup1"></label>Regal [#<input name="46b" type=text>]</br>
    <input name="47a" type=checkbox class="css-checkbox" id="cb46" value="Patient Lift #"><label for="cb46" class="css-label radGroup1"></label>Patient Lift [#<input name="47b" type=text>]</br>
    <input name="48a" type=checkbox class="css-checkbox" id="cb47" value="Other"><label for="cb47" class="css-label radGroup1"></label>Other</br> <textarea name="48b" rows=3 cols=40></textarea></br>
    </td>
    </tr>
    <tr>
    <td colspan=3>
    Lot Numbers: <input name="lotnumbers" type=text size=178>
    </td>
    </tr>
    </table>
    
    
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
    <FONT SIZE=3>
    <b></br></br></br>
    <table>
    <tr>
    <td>
    <b>Customer's Signature: _________________________________________ Date: <b><u>_____________________</u></b></br>
    </td>
    </tr>
    <td><b>
    Driver/Office: <input name="driver_office" type=text size=50 id="doffice"><font SIZE="2" color=red><b>*REQUIRED</b></font></br></br>
    </b>
    </td>
    </tr>
    </table>
    Special Instructions:</br>
	<textarea name="specialinstructions" cols=100 rows=11></textarea></br>
    </font>
    <input type="submit" name="submit" id="submit" value="Save" class="no-print">
    </form>
<?php
if(isset($_POST['vitas'])){
    //$vitas is checked and value = 1
    $vitas = $_POST['vitas'];
}
else{
    //$vitas is not checked and value=0
    $bhosp=0;
}

// Bhosp
if(isset($_POST['bhosp'])){
    //$bhosp is checked and value = 1
    $bhosp = $_POST['bhosp'];
}
else{
    //$bhosp is not checked and value=0
    $bhosp=0;
}
	$patientnum = $_POST['patientnum'];
	$referral = $_POST['referral'];
	$preparedby = $_POST['preparedby'];
	$date1 = date("Y/m/d");
	$time = date("h:i:sa");
	$custname = $_POST['custname'];
	$dateofpickup = $_POST['dateofpickup'];
	$specialinstructions = $_POST['specialinstructions'];
	$address = $_POST['address'];
	$city = $_POST['city'];
	$zip = $_POST['zip'];
	$phone = $_POST['phone'];
	$CSig = $_POST['cSignature'];
	$date2 = $vitas;
	$doffice = $_POST['driver_office'];
	$lotnumbers = $_POST['lotnumbers'];
	

	if($_POST['submit']) {
	 if($doffice == '')
	{
	$message = "Please fill out Driver/Office field!";
	} else { 
	
                    $correctedusername = $username . "/0";
				mysqli_query($GLOBALS["___mysqli_ston"], "INSERT INTO PickupSlip (`ID`,`PatientNum`,`Referral`,`PreparedBy`,`Date1`,`Time`, `CustName`, `dateofpickup`,`specialinstructions`,`Address`,`City`,`Zip`,`Phone`, `eq1`, `eq2`, `eq3`, `eq4`, `eq5`, `eq6`, `eq7`, `eq8`, `eq9`, `eq10`, `eq11`, `eq12`, `eq13`, `eq14`, `eq15`, `eq16`, `eq17`, `eq18`, `eq19`, `eq20`, `eq21`, `eq22`, `eq23`, `eq24`, `eq25`, `eq26`, `eq27`, `eq28`, `eq29`, `eq30`, `eq31`, `eq32`, `eq33`, `eq34`, `eq35`, `eq36`, `eq37`, `eq38`, `eq39`, `eq40`, `eq41`, `eq42`, `eq43`, `eq44`, `eq45`, `eq46`, `eq47`, `eq48`, `eq49`, `eq50`, `eq51`, `eq52`, `eq53`, `eq54`, `eq55`, `eq56`, `eq57`, `eq58`, `eq59`, `eq60`, `eq61`, `eq62`, `eq63`, `eq64`, `eq65`, `eq66`, `eq67`, `eq68`, `eq69`, `eq70`, `eq71`, `eq72`, `eq73`, `eq74`, `eq75`,`eq76`,`eq77`,`eq78`,`eq79`,`eq80`,`eq81`,`CSig1`, `Date2`,`DriverOffice`,`Poster`, `Driver`, `Sent`, `Complete`, `Verified`, `Sender`, `lotnumbers`,`bhosp`)
					Values('','$patientnum','$referral','$preparedby','$date1','$time','$custname','$dateofpickup','$specialinstructions','$address','$city','$zip','$phone','$eq[0]','$eq[1]','$eq[2]','$eq[3]','$eq[4]','$eq[5]','$eq[6]','$eq[7]','$eq[8]','$eq[9]','$eq[10]','$eq[11]','$eq[12]','$eq[13]','$eq[14]','$eq[15]','$eq[16]','$eq[17]','$eq[18]','$eq[19]','$eq[20]','$eq[21]','$eq[22]','$eq[23]','$eq[24]','$eq[25]','$eq[26]','$eq[27]','$eq[28]','$eq[29]','$eq[30]','$eq[31]','$eq[32]','$eq[33]','$eq[34]','$eq[35]','$eq[36]','$eq[37]','$eq[38]','$eq[39]','$eq[40]','$eq[41]','$eq[42]','$eq[43]','$eq[44]','$eq[45]','$eq[46]','$eq[47]','$eq[48]','$eq[49]','$eq[50]','$eq[51]','$eq[52]','$eq[53]','$eq[54]','$eq[55]','$eq[56]','$eq[57]','$eq[58]','$eq[59]','$eq[60]','$eq[61]','$eq[62]','$eq[63]','$eq[64]','$eq[65]','$eq[66]','$eq[67]','$eq[68]','$eq[69]','$eq[70]','$eq[71]','$eq[72]','$eq[73]','$eq[74]','$eq[75]','$eq[76]','$eq[77]','$eq[78]','$eq[79]','$eq[80]','$CSig','$date2','$doffice','$correctedusername', '', '0', '0', '0', '', '$lotnumbers','$bhosp')") or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));	
				echo "<div align=center>";
				echo "</br>Data has been logged, thank you.</br>";
				echo "<br><a href='pu_slip.php'>Next Form</a>";
				echo "</div>";
				header('Location: pu_slip.php');
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
<script>
$( "form" ).submit(function( event ) {
  if ( $( "#doffice" ).val() != "" ) {
    $( "#flag" ).text( "Submitting..." ).show();
    return;
  }
 
  $( "#flag" ).text( "Driver/Office field MUST be filled!" ).show().fadeOut( 1000 );
  event.preventDefault();
});
</script>
<script type="text/javascript">
     function PopIt() { return "Please Select an Option:"; }
     function UnPopIt()  { /* nothing to return */ } 
 
     $(document).ready(function() {
     	window.onbeforeunload = PopIt;
		$("a").click(function(){ window.onbeforeunload = UnPopIt; });
     });
</script>

    </body>
    </html>
<?php
		}
	} else {
echo "<div align=center><b>You must be logged in to do that!</b></div>";
	}
include(__DIR__ . "/pfooter.php");
?>