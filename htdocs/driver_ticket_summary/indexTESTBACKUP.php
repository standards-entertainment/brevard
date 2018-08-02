<?php 
include('jquerycalls.php');
include_once("../includes/connect.php");
include("../includes/functions.php");
include('../header.php');
?>


<title>Test Sorting</title>
<script src="lib/jquery-1.10.2.js"></script>
<script src="lib/jquery-ui.js"></script>
<script src="functions.js"></script>
<link rel="stylesheet" href="style.css" type="text/css" media="all">
<div class="container">
	Sorting Test, Implemented With Fetched Text From The Database, WITH HTML Tables
	
	<ul id="sortable-rows">
	<?php
	$sql = "SELECT * FROM newcustinfo ORDER BY Order1";
	$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
	while( $rows = mysqli_fetch_assoc($resultset) ) { 
	?>	
	<li id=<?php echo $rows["ID"]; ?>>
	<?php echo $rows["Date1"]; ?>
--
<?php
//variables
					$db_ID = $rows['ID'];
					$patientnum = $rows['PatientNum'];
					$referral = $rows['Referral'];
					$preparedby = $rows['PreparedBy'];
					$date1 = $rows['Date1'];
					$dateofdelivery = $rows['DateofDelivery'];
					$dateofpickup = $rows['dateofpickup'];
					$time = $rows['Time'];
					$custname = $rows['CustName'];
					$height = $rows['Height'];
					$weight = $rows['Weight'];
					$address = $rows['Address'];
					$city = $rows['City'];
					$zip = $rows['Zip'];
					$phone = $rows['Phone'];
					$equip = $rows['Equip'] . " " . $rows['Equip2'] . " " . $rows['Equip3'];
					$CSig = $rows['CSig1'];
					$date2 = $rows['Date2'];
					$doffice = $rows['DriverOffice'];
					$lnuspo2del = $rows['LNUSPO2Del'];
					$lnecpu = $rows['LNECPU'];
					$poster = $rows['Poster'];
					$sent = $rows['Sent'];
					$complete = $rows['Complete'];
					$verified = $rows['Verified'];
					$driver = $rows['Driver'];
					$sender = $rows['Sender'];
					$completer = $rows['Completer'];
					$verifier = $rows['Verifier'];
					$specialinstructions = $rows['specialinstructions'];
					$eeq = array($information['eq1'], $rows['eq2'], $rows['eq3'], $rows['eq4'], $rows['eq5'], $rows['eq6'], $rows['eq7'], $rows['eq8'], $rows['eq9'], $rows['eq10'], $rows['eq11'], $rows['eq12'], $rows['eq13'], $rows['eq14'], $rows['eq15'], $rows['eq16'], $rows['eq17'], $rows['eq18'], $rows['eq19'], $rows['eq20'], $rows['eq21'], $rows['eq22'], $rows['eq23'], $rows['eq24'], $rows['eq25'], $rows['eq26'], $rows['eq27'], $rows['eq28'], $rows['eq29'], $rows['eq30'], $rows['eq31'], $rows['eq32'], $rows['eq33'], $rows['eq34'], $rows['eq35'], $rows['eq36'], $rows['eq37'], $rows['eq38'], $rows['eq39'], $rows['eq40'], $rows['eq41'], $rows['eq42'], $rows['eq43'], $rows['eq44'], $rows['eq45'], $rows['eq46'], $rows['eq47'], $rows['eq48'], $rows['eq49'], $rows['eq50'], $rows['eq51'], $rows['eq52'], $rows['eq53'], $rows['eq54'], $rows['eq55'], $rows['eq56'], $rows['eq57'], $rows['eq58'], $rows['eq59'], $rows['eq60'], $rows['eq61'], $rows['eq62'], $rows['eq63'], $rows['eq64'], $rows['eq65'], $rows['eq66'], $rows['eq67'], $rows['eq68'], $rows['eq69'], $rows['eq70'], $rows['eq71'], $rows['eq72'], $rows['eq73'], $rows['eq74'], $rows['eq75'], $rows['eq76'], $rows['eq77'], $rows['eq78'], $rows['eq79'], $rows['eq80'], $rows['eq81']);
                                        $TableGet1 = $rows['tbname'];
                                        $index4 = explode("/", $driver); // 1 = index
                                        //$itemx = $itemx . $driver."-".$TableGet1."-".$db_ID."~";

//endvariables
?>

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
                                    echo "" . "<font size=2>Special Instructions: <b><font color=red>" . $specialinstructions . "</b></font>";
									?>
								</TD>
								<TD>
									<?PHP
                                    echo "" . "<font size=3>Date:</font> " . $date1 . "";
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
</table>
	
	
--	

	</li>
	<?php }	?>	
	</ul>
</div>
