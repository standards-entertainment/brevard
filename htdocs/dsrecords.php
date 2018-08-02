<html>

<HEAD>
<link href="/style/style.css" rel="stylesheet" type="test/css">
<title>Records :: Delivery Slip</title>


</HEAD>
<BODY>
  
<?php
	include('includes/connect.php');	
	include('includes/functions.php'); 
	include('header.php');
	include('stylings.php');
	$tbl_name = "DeliverySlip";		//your table name
	// How many adjacent pages should be shown on each side?
	$adjacents = 3;
	$DSTableGet = "<b><u>Delivery</b></u>";
	$PUTableGet = "<a href='purecords.php'>Pick Up</a>";
	$NCITableGet = "<a href='ncirecords.php'>New Customer Info</a>";
	$CruTableGet = "<a href='crurecords.php'>Cruise</a>";
	$InvTableGet = "<a href='invrecords.php'>Invoice</a>";
	$ATableGet = "delslip";
	$BTableGet = "Delivery";
	if(loggedin()){
	if($user_level <= 1){
	echo "User does not have access.";
	} else {
?>
<div align=center>
Records:</br> <?php echo $DSTableGet; ?> | <?php echo $PUTableGet; ?> | <?php echo $NCITableGet; ?> | <?php echo $CruTableGet; ?> | <?php echo $InvTableGet; ?></br><hr>
</div>
<?PHP


	/* 
	   First get total number of rows in data table. 
	   If you have a WHERE clause in your query, make sure you mirror it here.
	*/
	$Query = "SELECT COUNT(*) as num FROM $tbl_name";
	$total_pages = mysqli_fetch_array(mysqli_query($GLOBALS["___mysqli_ston"], $Query));
	$total_pages = $total_pages[num];
	
	/* Setup vars for query. */
	$targetpage = "dsrecords.php"; 	//your file name  (the name of this file)
	$limit = 350; 								//how many items to show per page
	$page = $_GET['page'];
	if($page) 
		$start = ($page - 1) * $limit; 			//first item to display on this page
	else
		$start = 0;								//if no page var is given, set start to 0
	
	/* Get data. */
	$sql = "SELECT * FROM " . $tbl_name . " ORDER BY ID DESC LIMIT " . $start . ", " . $limit . "";
	$Result = mysqli_query($GLOBALS["___mysqli_ston"], $sql);
	
	/* Setup page vars for display. */
	if ($page == 0) $page = 1;					//if no page var is given, default to 1.
	$prev = $page - 1;							//previous page is page - 1
	$next = $page + 1;							//next page is page + 1
	$lastpage = ceil($total_pages/$limit);		//lastpage is = total pages / items per page, rounded up.
	$lpm1 = $lastpage - 1;						//last page minus 1
?>
<div align=center>
<?php
	/* 
		Now we apply our rules and draw the pagination object. 
		We're actually saving the code to a variable in case we want to draw it more than once.
	*/
	$pagination = "";
	if($lastpage > 1)
	{	
		$pagination .= "<div class=\"pagination\">";
		//previous button
		if ($page > 1) 
			$pagination.= "<a href=\"$targetpage?page=$prev\">Previous</a>";
		else
			$pagination.= "<span class=\"disabled\">Previous</span>";	
		
		//pages	
		if ($lastpage < 7 + ($adjacents * 2))	//not enough pages to bother breaking it up
		{	
			for ($counter = 1; $counter <= $lastpage; $counter++)
			{
				if ($counter == $page)
					$pagination.= "<span class=\"current\">$counter</span>";
				else
					$pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";					
			}
		}
		elseif($lastpage > 5 + ($adjacents * 2))	//enough pages to hide some
		{
			//close to beginning; only hide later pages
			if($page < 1 + ($adjacents * 2))		
			{
				for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++)
				{
					if ($counter == $page)
						$pagination.= "<span class=\"current\">$counter</span>";
					else
						$pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";					
				}
				$pagination.= "...";
				$pagination.= "<a href=\"$targetpage?page=$lpm1\">$lpm1</a>";
				$pagination.= "<a href=\"$targetpage?page=$lastpage\">$lastpage</a>";		
			}
			//in middle; hide some front and some back
			elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))
			{
				$pagination.= "<a href=\"$targetpage?page=1\">1</a>";
				$pagination.= "<a href=\"$targetpage?page=2\">2</a>";
				$pagination.= "...";
				for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
				{
					if ($counter == $page)
						$pagination.= "<span class=\"current\">$counter</span>";
					else
						$pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";					
				}
				$pagination.= "...";
				$pagination.= "<a href=\"$targetpage?page=$lpm1\">$lpm1</a>";
				$pagination.= "<a href=\"$targetpage?page=$lastpage\">$lastpage</a>";		
			}
			//close to end; only hide early pages
			else
			{
				$pagination.= "<a href=\"$targetpage?page=1\">1</a>";
				$pagination.= "<a href=\"$targetpage?page=2\">2</a>";
				$pagination.= "...";
				for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++)
				{
					if ($counter == $page)
						$pagination.= "<span class=\"current\">$counter</span>";
					else
						$pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";					
				}
			}
		}
		
		//next button
		if ($page < $counter - 1) 
			$pagination.= "<a href=\"$targetpage?page=$next\">Next</a>";
		else
			$pagination.= "<span class=\"disabled\">Next</span>";
		$pagination.= "</div>\n";		
	}
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
$cruiseeq = array("", $eq1, $eq2, $eq3, $eq4, $eq5, $eq6, $eq7, $eq8, $eq9, $eq10, $eq11, $eq12, $eq13, $eq14, $eq15, $eq16);					
$cruisepu = array("", $pu1, $pu2, $pu3, $pu4, $pu5, $pu6);
$bhosp = $information['bhosp'];

//================================END OF QUERY	
	?>

<?php

//==================================START OF DISPLAY
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
                                <td> <?php
                                if($NTableGet != 5){
                                		echo "| <font color=red><b>" . $evitas  . $eBHOSP . "</b></font> | "; 
                                	} else {
                                	
                                	}
                                	?>
                                    <?php
                                    if($NTableGet != 5){
                                    	echo "<b><u><font size=4>" . $custname . $eto . "</font></u></b>";
                                    } else {
                                    	echo "<b><u><font size=4>" . $customername . " " . "</font></u></b>";
                                    }
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    if($NTableGet != 5){
                                    	echo "" . "<font size=2>City:<b></font> " . $city . "</b>";
                                    } else {
                                    	echo "" . "<font size=2>Ship:<b></font> " . $cruiseship . " / " . $nameofship . "</b> <font size=2>Cabin: </font><b>" . $cabin . " / " . $cabinnum . "</b>";
                                    }
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    if($NTableGet != 5){
	                                    echo "" . "<font size=2>Date:</font> " . $date1 . "";                                    
                                    } else {
										echo "" . "<font size=2>Date of Departure:</font> " . $datedeparting . " <font size=2>Date of Pickup:</font> " . $dateofpickup . "";
                                    }
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
                                if($NTableGet == 5){
                                echo "";
                                } else {
                                echo "<a href='" . $ATableGet . "_view.php?ID=$db_ID'>View " . $BTableGet . "</a>";
                                }
								?>
								</div>
                                </td>
                                </TR>
                                <TR>
                                <td colspan=6 rowspan=2>|
<?php
if($NTableGet != 5){
// Main display box.
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
} else {
echo "Delivery: ";
$cruiseeqcount = count($cruiseeq);

for($y = 0; $y < $cruiseeqcount; $y++) {
	if($cruiseeq[$y] == ""){
	} else {
    echo "<u>";
    echo $cruiseeq[$y];
    echo "</u> | ";
    }
}
if($ebto != "") {
echo $ebto . " | ";
}
echo " | Pickup: ";
$cruisepucount = count($cruisepu);

for($w = 0; $w < $cruisepucount; $w++) {
	if($cruisepu[$w] == ""){
	} else {
    echo "<u>";
    echo $cruisepu[$w];
    echo "</u> | ";
    }
}
}
if($ebto != "") {
echo $ebto . " | ";
}
$mopcount = count($emop);

for($z = 0; $z < $mopcount; $z++) {
	if($emop[$z] == ""){
	} else {
	echo "<u>";
	echo $emop[$z];
	echo "</u> | ";
	}
}
if($edwc1 != "") {
echo $edwc1 . " | ";
}
if($eestimate != "") {
echo "<b><SPAN STYLE =' background-color:#889900'>" . $eestimate . "</b> | ";
}
?>
                                </td>
                                <td><div align=center>
                                <?PHP
								ECHO "<a href='" . $ATableGet . "_edit.php?ID=" . $db_ID . "'>Edit</a>";
								?>
								<?PHP
								if($user_level >= 5){
								echo " | <a href='" . $ATableGet. "_delete.php?ID=" . $db_ID . "'>Delete</a>";
								}
								?>
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
?>
                            <?php echo $driver; ?></br>
                            <?php echo $laccomplished; ?>
                            <?php echo $lverified; ?>
                            <?php echo $lcomplete; ?>
                            </div>
                            </td>
                            </tr>
                            <tr>
                            <td colspan=6>
                            <?php
                            echo "<span style='Background-Color:#FFFF00'>";
                            echo $specialinstructions;
                            echo "</span>";
                            if($ebox[1] != "") {
                            echo "<span style='Background-Color:#FFFF00'><b>Desc. of Prob.:</b></span> | <span style='Background-Color:#FFFF00'> <b>" . $ebox[1] . "</b></span> | ";
                            }
                            if($ea[16] != "") {
                            echo "<span style='Background-Color:#FF2200'><b>Total Due:</b></span> | <span style='Background-Color:#FF2200'><b>" . $ea[16] . "</b></span> | ";
                            }
                            ?></span>
                            </td>
                            </tr>
</table></br>
<?php
//=======================================END OF DISPLAY	

	
		}
	?>

<?=$pagination?>
</body>
</html>
<?php
}
} else {
echo "<div align='center'><b>You must be logged in to do that!</b></div>";
}
include('footer.php');
	