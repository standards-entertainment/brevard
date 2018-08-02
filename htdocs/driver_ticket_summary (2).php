<?php
include 'includes/connect.php';
include 'includes/functions.php';
include 'header.php';

$DSTableGet = "<a href='driver_ticket.php?TableGet=1'>Delivery</a>";
$PUTableGet = "<a href='driver_ticket.php?TableGet=2'>Pick-up</a>";
$NCITableGet = "<a href='driver_ticket.php?TableGet=3'>New Cust. Info</a>";
$TableGet = "DeliverySlip";
$Table_Get = NULL; //for chekcboxes
$data      = filter_input(INPUT_POST, 'index', FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);
$get_db_ID = filter_input(INPUT_POST, 'Complete', FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);
$NTableGet = filter_input(INPUT_GET, 'TableGet', FILTER_SANITIZE_SPECIAL_CHARS);
$OTable_Get = filter_input(INPUT_POST, 'Table_Get', FILTER_SANITIZE_SPECIAL_CHARS);

if ($NTableGet ==="DeliverySlip")  {
        $TableGet = "DeliverySlip";
    } elseif ($NTableGet ==="PickupSlip")  {
        $TableGet = "PickupSlip";
    } elseif ($NTableGet ==="NewCustInfo") {
        $TableGet = "NewCustInfo";
    }else{
        $TableGet = "DeliverySlip";
}

$driverget = filter_input(INPUT_GET, 'driver', FILTER_SANITIZE_SPECIAL_CHARS);
if ($driverget != "") {
    $driverdisplay = "<font size=2>Currently Displaying:</font> <b>" . $driverget . "</b>";
    $communicate = $driverget;
} else {
    $driverdisplay = "";
    $communicate = $username;
}
$nickname = $username;
// ================================Driver Select Code================================
if(loggedin()){
// ============================= CHAT CODE ===============================
?>
        <title>Brevard Medical Equipment :: Driver Ticket</title>
        <div align=center>    
        <h2>Instant Communication</h2>

    
    <link rel="stylesheet" href="chatstyle1.css" type="text/css" />
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script type="text/javascript" src="chat.js"></script>
    <script type="text/javascript">
    
        // ask user for name with popup prompt    
        var name = "<?PHP echo $username; ?>";
        
        // default name is 'Guest'
    	if (!name || name === ' ') {
    	   name = "Unknown User";	
    	}
    	
    	// strip tags
    	name = name.replace(/(<([^>]+)>)/ig,"");
    	
    	// display name on page
    	$("#name-area").html("You are: <span>" + name + "</span>");
    	
    	// kick off chat
        var chat =  new Chat();
    	$(function() {
    	
    		 chat.getState(); 
    		 
    		 // watch textarea for key presses
             $("#sendie").keydown(function(event) {  
             
                 var key = event.which;  
           
                 //all keys including return.  
                 if (key >= 33) {
                   
                     var maxLength = $(this).attr("maxlength");  
                     var length = this.value.length;  
                     
                     // don't allow new content if length is maxed out
                     if (length >= maxLength) {  
                         event.preventDefault();  
                     }  
                  }  																																															});
    		 // watch textarea for release of key press
    		 $('#sendie').keyup(function(e) {	
    		 					 
    			  if (e.keyCode == 13) { 
    			  
                    var text = $(this).val();
    				var maxLength = $(this).attr("maxlength");  
                    var length = text.length; 
                     
                    // send 
                    if (length <= maxLength + 1) { 
                     
    			        chat.send(text, name);	
    			        $(this).val("");
    			        
                    } else {
                    
    					$(this).val(text.substring(0, maxLength));
    					
    				}	
    				
    			  }
             });
            
    	});
    </script>
</head>
<body onload="setInterval('chat.update()', 1000)">

    <div id="page-wrap" align=center>

        
        <p id="name-area"></p>
        
        <div id="chat-wrap"><div id="chat-area"></div></div>
        
        <form id="send-message-area">
            <p>Your message: </p>
            <textarea id="sendie" maxlength = '100' ></textarea>
        </form>
    
    </div>
</br></br></br></br></br></br>  
<?PHP
// ================================ !CHAT CODE ===============================

if (isset($_POST['Complete']) === true and isset($_POST['YesButton']) === FALSE){
$the_db = $_POST['Complete'][0];
echo '<title>Processing...</title>';
$Query = "SELECT `ID`,'$OTable_Get' as tbname FROM $OTable_Get WHERE `ID`='$the_db'"; // Sort each entry by DATE, DESCENDING!

	$Result = mysqli_query($GLOBALS["___mysqli_ston"], $Query);// or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false))); 
{
	while($information = mysqli_fetch_array($Result))
	{
					$db_ID = $information['ID'];
					$TableGet2 = $information['tbname'];
        }

$message = "finished with " . $OTable_Get . " #" . $the_db. "?";
?>
<div align=center>
Are you <?PHP echo $message; ?></br>
<form name='confirm' method='post' action="driver_ticket_summary.php">
<?php echo "<input name='Table_Get' type='checkbox'  value='$OTable_Get' checked hidden/>"; ?>
<?php echo "<input name='Complete[]' type='checkbox'  value='$the_db' checked hidden/>"; ?>
<input type='submit' name='YesButton' value='Yes'> | &nbsp;<a href='driver_ticket_summary.php?driver=<?PHP ECHO $username; ?>'>No</a></BR>
</form>
<?PHP
}
}else{
    //
}
?>
<div align=center>
<b> You must click <a href='driver_ticket_summary.php?driver=<?php echo $driverget; ?>'>refresh</a> <i>after</i> clicking update. </b><br>
    <?php if($user_level > 1) {
    // START USERNAME QUERY.
    $list_queryb = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM users");
        // CREATE ARRAY.
        while ( $user_array[] = $list_queryb->fetch_object()){
        //
        }
            // Blank @ End of Array Fix
            array_pop($user_array);
?>    
<form name="ViewDriver" method="GET" action="driver_ticket_summary.php">
			<select name="driver">
				<option value='<?php echo $username; ?>' default><?php echo $username; ?></option>
<?php   

    foreach($user_array as $option) : 
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
<form method="POST" action="driver_ticket_summary.php?driver=<?php echo $driverget; ?>"> <!-- This is where we post the order !-->
        <?php
//$tablearray = "DeliverySlip|PickupSlip|NewCustInfo";
//$table = explode("|", $tablearray);
$iteration = 0;
    formateddata($driverget, $user_level, $NTableGet, $username);
?>
    <br>
    <br>
<?php
} else { //they are logged in as driver
    ?><form method="POST" action="driver_ticket_summary.php" > <!-- This is where we post the order !-->
     <?php
    $iteration = 0;
    $ref1=2; // temporarily elevate driver privileges
    formateddata($username, $ref1, $NTableGet, $username);
  }
} else {
    echo "<div align=center><b>You must be logged in to do that!</b></div>";
}
        echo '<input name="UpdateButton" type="submit" value="Update">'; //maybe add security to this later
?>
        
</form>  <!-- POST for driver_ticket_summary-->
<?php
include("footer.php");

function formateddata(&$driverget1, &$user_level1, &$NTableGet1, &$username1) {
    global $iteration, $data, $conn, $driverget, $get_db_ID, $OTable_Get, $dbname;
$OIGet = 0;
$NOIGet = "order";
if($OIGet == 1){
    $NOIGet = "invoice";
} else {
    $NOIGet = "order";
}
 if ($driverget1 != "" AND $user_level1 > 1) {
$Query = <<<SQL
SELECT * FROM (SELECT NewCustInfo.Driver, SUBSTRING_INDEX(NewCustInfo.Driver, '/', -1) AS orderindex, SUBSTRING_INDEX(NewCustInfo.Driver, '/', 1) AS thedriver, NewCustInfo.id,NewCustInfo.Accomplished, Null as PatientNum, NewCustInfo.Referral, NewCustInfo.PreparedBy, NewCustInfo.Date1, 
NewCustInfo.Time, NewCustInfo.CustName, NewCustInfo.Height, NewCustInfo.Weight, NewCustInfo.Address, NewCustInfo.City, NewCustInfo.Zip, NewCustInfo.Phone, NewCustInfo.CSig1, 
NewCustInfo.Date2, NewCustInfo.DriverOffice, Null as LNUSPO2Del, Null as LNECPU, NewCustInfo.Poster, NewCustInfo.Sent, NewCustInfo.Complete, NewCustInfo.Verified, 
NewCustInfo.Sender, NewCustInfo.Completer, NewCustInfo.Verifier, NewCustInfo.specialinstructions, NewCustInfo.eq1, NewCustInfo.eq2, NewCustInfo.eq3, NewCustInfo.eq4, 
NewCustInfo.eq5, NewCustInfo.eq6, NewCustInfo.eq7, NewCustInfo.eq8, NewCustInfo.eq9, NewCustInfo.eq10, NewCustInfo.eq11, NewCustInfo.eq12, NewCustInfo.eq13, NewCustInfo.eq14, 
NewCustInfo.eq15, NewCustInfo.eq16, NewCustInfo.eq17, NewCustInfo.eq18, NewCustInfo.eq19, NewCustInfo.eq20, NewCustInfo.eq21, NewCustInfo.eq22, NewCustInfo.eq23, NewCustInfo.eq24, 
NewCustInfo.eq25, NewCustInfo.eq26, NewCustInfo.eq27, NewCustInfo.eq28, NewCustInfo.eq29, NewCustInfo.eq30, NewCustInfo.eq31, NewCustInfo.eq32, NewCustInfo.eq33, NewCustInfo.eq34, 
NewCustInfo.eq35, NewCustInfo.eq36, NewCustInfo.eq37, NewCustInfo.eq38, NewCustInfo.eq39, NewCustInfo.eq40, NewCustInfo.eq41, NewCustInfo.eq42, NewCustInfo.eq43, NewCustInfo.eq44, 
NewCustInfo.eq45, NewCustInfo.eq46, NewCustInfo.eq47, NewCustInfo.eq48, NewCustInfo.eq49, NewCustInfo.eq50, NewCustInfo.eq51, NewCustInfo.eq52, NewCustInfo.eq53, NewCustInfo.eq54, 
NewCustInfo.eq55, NewCustInfo.eq56, NewCustInfo.eq57, NewCustInfo.eq58, NewCustInfo.eq59, NewCustInfo.eq60, NewCustInfo.eq61, NewCustInfo.eq62, NewCustInfo.eq63, NewCustInfo.eq64, 
NewCustInfo.eq65, NewCustInfo.eq66, NewCustInfo.eq67, NewCustInfo.eq68, NewCustInfo.eq69, NewCustInfo.eq70, NewCustInfo.eq71, NewCustInfo.eq72, NewCustInfo.eq73, NewCustInfo.eq74, 
NewCustInfo.eq75, NewCustInfo.eq76, NewCustInfo.eq77, NewCustInfo.eq78, NewCustInfo.eq79, NewCustInfo.eq80, NewCustInfo.eq81, 'NewCustInfo' as tbname
 FROM NewCustInfo WHERE NewCustInfo.Driver REGEXP '{$driverget1}/' AND NewCustInfo.Accomplished='0') DUMMY_ALIAS1
UNION ALL
SELECT * FROM (SELECT PickupSlip.Driver, SUBSTRING_INDEX(PickupSlip.Driver, '/', -1) AS orderindex, SUBSTRING_INDEX(PickupSlip.Driver, '/', 1) AS thedriver,PickupSlip.id,PickupSlip.Accomplished, PickupSlip.PatientNum, PickupSlip.Referral, PickupSlip.PreparedBy,PickupSlip.Date1, 
PickupSlip.Time, PickupSlip.CustName, Null as Height, Null as Weight, PickupSlip.Address, PickupSlip.City, PickupSlip.Zip, PickupSlip.Phone, PickupSlip.CSig1, 
PickupSlip.Date2, PickupSlip.DriverOffice, Null as LNUSPO2Del, Null as LNECPU, PickupSlip.Poster, PickupSlip.Sent, PickupSlip.Complete, PickupSlip.Verified, 
PickupSlip.Sender, PickupSlip.Completer, PickupSlip.Verifier, PickupSlip.specialinstructions, PickupSlip.eq1, PickupSlip.eq2, PickupSlip.eq3, PickupSlip.eq4, 
PickupSlip.eq5, PickupSlip.eq6, PickupSlip.eq7, PickupSlip.eq8, PickupSlip.eq9, PickupSlip.eq10, PickupSlip.eq11, PickupSlip.eq12, PickupSlip.eq13, PickupSlip.eq14, 
PickupSlip.eq15, PickupSlip.eq16, PickupSlip.eq17, PickupSlip.eq18, PickupSlip.eq19, PickupSlip.eq20, PickupSlip.eq21, PickupSlip.eq22, PickupSlip.eq23, PickupSlip.eq24, 
PickupSlip.eq25, PickupSlip.eq26, PickupSlip.eq27, PickupSlip.eq28, PickupSlip.eq29, PickupSlip.eq30, PickupSlip.eq31, PickupSlip.eq32, PickupSlip.eq33, PickupSlip.eq34, 
PickupSlip.eq35, PickupSlip.eq36, PickupSlip.eq37, PickupSlip.eq38, PickupSlip.eq39, PickupSlip.eq40, PickupSlip.eq41, PickupSlip.eq42, PickupSlip.eq43, PickupSlip.eq44, 
PickupSlip.eq45, PickupSlip.eq46, PickupSlip.eq47, PickupSlip.eq48, PickupSlip.eq49, PickupSlip.eq50, PickupSlip.eq51, PickupSlip.eq52, PickupSlip.eq53, PickupSlip.eq54, 
PickupSlip.eq55, PickupSlip.eq56, PickupSlip.eq57, PickupSlip.eq58, PickupSlip.eq59, PickupSlip.eq60, PickupSlip.eq61, PickupSlip.eq62, PickupSlip.eq63, PickupSlip.eq64, 
PickupSlip.eq65, PickupSlip.eq66, PickupSlip.eq67, PickupSlip.eq68, PickupSlip.eq69, PickupSlip.eq70, PickupSlip.eq71, PickupSlip.eq72, PickupSlip.eq73, PickupSlip.eq74, 
PickupSlip.eq75, PickupSlip.eq76, PickupSlip.eq77, PickupSlip.eq78, PickupSlip.eq79, PickupSlip.eq80, PickupSlip.eq81, 'PickupSlip' as tbname 
FROM PickupSlip WHERE PickupSlip.Driver REGEXP '{$driverget1}/' AND PickupSlip.Accomplished='0') DUMMY_ALIAS2
UNION ALL
SELECT * FROM (SELECT DeliverySlip.Driver, SUBSTRING_INDEX(DeliverySlip.Driver, '/', -1) AS orderindex, SUBSTRING_INDEX(DeliverySlip.Driver, '/', 1) AS thedriver,DeliverySlip.id,DeliverySlip.Accomplished,DeliverySlip.PatientNum, DeliverySlip.Referral, DeliverySlip.PreparedBy, DeliverySlip.Date1, 
DeliverySlip.Time, DeliverySlip.CustName, DeliverySlip.Height, DeliverySlip.Weight, DeliverySlip.Address, DeliverySlip.City, DeliverySlip.Zip, DeliverySlip.Phone, DeliverySlip.CSig1, 
DeliverySlip.Date2, DeliverySlip.DriverOffice, DeliverySlip.LNUSPO2Del, DeliverySlip.LNECPU,DeliverySlip.Poster, DeliverySlip.Sent, DeliverySlip.Complete, DeliverySlip.Verified, 
DeliverySlip.Sender, DeliverySlip.Completer, DeliverySlip.Verifier, DeliverySlip.specialinstructions, DeliverySlip.eq1, DeliverySlip.eq2, DeliverySlip.eq3, DeliverySlip.eq4, 
DeliverySlip.eq5, DeliverySlip.eq6, DeliverySlip.eq7, DeliverySlip.eq8, DeliverySlip.eq9, DeliverySlip.eq10, DeliverySlip.eq11, DeliverySlip.eq12, DeliverySlip.eq13, DeliverySlip.eq14, 
DeliverySlip.eq15, DeliverySlip.eq16, DeliverySlip.eq17, DeliverySlip.eq18, DeliverySlip.eq19, DeliverySlip.eq20, DeliverySlip.eq21, DeliverySlip.eq22, DeliverySlip.eq23, DeliverySlip.eq24, 
DeliverySlip.eq25, DeliverySlip.eq26, DeliverySlip.eq27, DeliverySlip.eq28, DeliverySlip.eq29, DeliverySlip.eq30, DeliverySlip.eq31, DeliverySlip.eq32, DeliverySlip.eq33, DeliverySlip.eq34, 
DeliverySlip.eq35, DeliverySlip.eq36, DeliverySlip.eq37, DeliverySlip.eq38, DeliverySlip.eq39, DeliverySlip.eq40, DeliverySlip.eq41, DeliverySlip.eq42, DeliverySlip.eq43, DeliverySlip.eq44, 
DeliverySlip.eq45, DeliverySlip.eq46, DeliverySlip.eq47, DeliverySlip.eq48, DeliverySlip.eq49, DeliverySlip.eq50, DeliverySlip.eq51, DeliverySlip.eq52, DeliverySlip.eq53, DeliverySlip.eq54, 
DeliverySlip.eq55, DeliverySlip.eq56, DeliverySlip.eq57, DeliverySlip.eq58, DeliverySlip.eq59, DeliverySlip.eq60, DeliverySlip.eq61, DeliverySlip.eq62, DeliverySlip.eq63, DeliverySlip.eq64, 
DeliverySlip.eq65, DeliverySlip.eq66, DeliverySlip.eq67, DeliverySlip.eq68, DeliverySlip.eq69, DeliverySlip.eq70, DeliverySlip.eq71, DeliverySlip.eq72, DeliverySlip.eq73, DeliverySlip.eq74, 
DeliverySlip.eq75, DeliverySlip.eq76, DeliverySlip.eq77, DeliverySlip.eq78, DeliverySlip.eq79, DeliverySlip.eq80, DeliverySlip.eq81,
'DeliverySlip' as tbname FROM DeliverySlip WHERE DeliverySlip.Driver REGEXP '{$driverget1}/' AND DeliverySlip.Accomplished='0') DUMMY_ALIAS3
ORDER BY (orderindex+0) ASC
SQL;
if(!$result = $conn->query($Query)){
    die('There was an error running the query [' . $conn->error . ']');
} else {
    //no update for mysqli because we didnt post yet
}
    }

// ==================================!Driver Select Code============================================
?>
<?php
if($Query != '') {
	$Result = mysqli_query($GLOBALS["___mysqli_ston"], $Query);
	while($information = mysqli_fetch_array($Result)) {
					$db_ID = $information['id'];
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
                                        $TableGet1 = $information['tbname'];
                                        $index4 = explode("/", $driver); // 1 = index
                                        //$itemx = $itemx . $driver."-".$TableGet1."-".$db_ID."~";
if ($date2 != 1) {
$evitas = "";
} else {
$evitas = "VITAS";
}
    If ($TableGet1 === "DeliverySlip") {
        ?><hr><b>Delivery #<?php echo $index4[1];?></b> <br> 
        <a href="#bottom">Go to Update</a><br> <small>Order:</small><?php
        }elseif ($TableGet1 === "PickupSlip"){
            ?><hr><b>Pickup #<?php echo $index4[1];?></b> <br> 
        <a href="#bottom">Go to Update</a><br> <small>Order:</small><?php
        }elseif ($TableGet1 === "NewCustInfo"){
            ?><hr><b>New Customer Info #<?php echo $index4[1];?></b> <br> 
        <a href="#bottom">Go to Update</a><br> <small>Order:</small>
                <?php
        }else{
            
        }
//FIX THIS -- GLYPH
$dbname = "bme1";
if ($driverget != ""){ //check for GET reqyest
    if (isset($index4) === true and isset($data) === true){ //user exists in results and its not partial

$sql = <<<SQL
UPDATE `{$dbname}`.`{$TableGet1}`
SET `Driver` = '{$driverget1}/{$data[$iteration]}'
WHERE `{$TableGet1}`.`ID` = {$db_ID}
SQL;
    if(!$result = $conn->query($sql)){
        die('<br>There was an error running the query [' . $conn->error . ']');
    }
    }else{
        //user is partial or non existant
    }
} elseif ($username1 === $driverget1 and isset($data) === true){ //post request but no get request
//this means there was a request and its probably the driver loading his summary
$sql2 = <<<SQL
UPDATE `{$dbname}`.`{$TableGet1}`
SET `Driver` = '{$driverget1}/{$data[$iteration]}'
WHERE `{$TableGet1}`.`ID` = {$db_ID}
SQL;
    if(!$result = $conn->query($sql2)){
        die('There was an error running the query [' . $conn->error . ']');
        }
}else{
}
            
?>
                <input type="number" name="index[]" value ="<?php echo $iteration+1; ?>", min="0" />
            <!--  //min max calculation? !-->
                   <table border="2" style="width:100%">
							<tr>
                                <td> 
                                    <?php 
                                    echo "|<b><u><font size=3 COLOR=#ff3384> " . $city . "</FONT><FONT SIZE=3 COLOR=#000000> | </FONT><FONT SIZE=3 COLOR=##80b3ff>" . $address . "</font></u></b>";
                                    if ($evitas == "") {
                                        echo "<b><u><font size=3> | " . $custname . " </font></u></b>";
                                    } else {
                                        echo "<b><u><font size=3> | " . $custname . " </font></u></b>";
                                        }
                                        ?> 
                                </td>
                                <td>
                                    <?php
                                         echo " | " . "<font size=2>Zip:<b></font> " . $zip . " | </b>";
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
                                <td>
                               <?php echo $db_ID; ?>
                                <div align=center><form action='driver_ticket_summary.php' method='post' name='<?PHP ECHO $db_ID; ?>'>
                                <input type="hidden" name="Table_Get" value='<?php echo $TableGet1; ?>' />
                                <?php 
                                 echo "<input name='Complete[]' type='checkbox'  value='$db_ID' /> Complete";
                                 echo'<input type="submit" />';
                                  ?>
								</form>
								</div>
                                </td>
                                </TR>
                                <TR>
                                <td colspan=6 rowspan=4>
<?php
$iteration++;
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
} //end for loop
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
<?php 
        }
        //echo $itemx;
    }
$dbname2 = "bme1";
if (isset($get_db_ID) === true and isset($_POST['YesButton'])){
    $the_db2=$get_db_ID[0];
$Query = "SELECT `ID`,`{$dbname2}`.`{$OTable_Get}` as tbname FROM `{$dbname2}`.`{$OTable_Get}` WHERE `ID`='{$the_db2}'"; // Sort each entry by DATE, DESCENDING!
	$Result = mysqli_query($GLOBALS["___mysqli_ston"], $Query);// or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false))); 
{
	while($information = mysqli_fetch_array($Result))
	{
					$db_ID = $information['ID'];
					$TableGetted = $information['tbname'];
        }
$timedone = date("Y/m/d H:i:s");
$action = "DriverSlipAccomplished";
$sql33 = <<<SQL
UPDATE `{$dbname2}`.`{$OTable_Get}`
SET `Accomplished`= 1,`Accomplisher`='{$username1}',`AccomplishTime`='{$timedone}' 
WHERE `ID`= {$the_db2}
SQL;
    if(!$result = $conn->query($sql33)){
        die('<br>There was an error running the query [' . $conn->error . ']');
    }
mysqli_query($GLOBALS["___mysqli_ston"], "INSERT INTO AuditTrail (`ID`,`TableName`,`AuditID`,`Username`,`Action`,`Time`)
					Values('','$the_table','$db_ID','$username1','$action','$timedone')") or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
				echo "<br><b>Accomplished Successfully!<b><br>";
				echo "Return: <a href='driver_ticket_summary.php?driver=" . $username1 . "'>Previous Page</a><br>";
				//header('Location: ' . $_SERVER['HTTP_REFERER']);
    //echo $driverget = " = driverget<br>".$index4[0]." = index4[0] <br>".$index4[1]." = index4[1] <br>".$data[$iteration]." = data[$iteration] <br>".$driverget1."= driverget1<br>".$username1."= username1<br>";
}
}
}
echo '<div id="bottom"></div>';
$result->free();
if($_POST['UpdateButton']){

}