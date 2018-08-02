<?php
include(__DIR__ . "/includes/connect.php");
include(__DIR__ . "/includes/functions.php");
include(__DIR__ . "/header.php");
	include('stylings.php');
$get_db_id = $_GET['ID'];

	if(loggedin()) {
		if($user_level == 1) {
			echo "User does not have access.";
		} else {
?>


    <html>
    <head>
        <title>Brevard Medical Equipment :: Invoice Edit</title>
    <div align=center>
    <font size=6 COLOR="#FFFFFF"><b>
    <span STYLE="Background-Color:#000000;max-width: 300px">INVOICE</span></b></br>
<?php
$Query = "SELECT * FROM Invoice WHERE ID = '$get_db_id'"; // Sort each entry by DATE, DESCENDING!

if($Query != '') {
	$Result = mysqli_query($GLOBALS["___mysqli_ston"], $Query) or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false))); 

	

	while($information = mysqli_fetch_array($Result))
	{
					$edb_ID = $information['ID'];
					$edate = array("", $information['Date1'], $information['Date2'], $information['Date3'], );	
					$einvto = $information['InvTo'];
					$ebillto = $information['BillTo'];
					$ephone = $information['Phone'];
					$eq = array("", $information['q1'], $information['q2'], $information['q3'], $information['q4'], $information['q5'], $information['q6'], $information['q7'], $information['q8'], $information['q9'], $information['q10'], $information['q11'], $information['q12']);
					$ep = array("", $information['p1'], $information['p2'], $information['p3'], $information['p4'], $information['p5'], $information['p6'], $information['p7'], $information['p8']);
					$eup = array("", $information['up1'], $information['up2'], $information['up3'], $information['up4'], $information['up5'], $information['up6'], $information['up7'], $information['up8'], $information['up9'], $information['up10'], $information['up11'], $information['up12']);
					$ea = array("", $information['a1'], $information['a2'], $information['a3'], $information['a4'], $information['a5'], $information['a6'], $information['a7'], $information['a8'], $information['a9'], $information['a10'], $information['a11'], $information['a12'], $information['a13'], $information['a14'], $information['a15'], $information['a16']);
					$emop = array("", $information['mop1'], $information['mop2'], $information['mop3'], $information['mop4'], $information['mop5'], $information['mop6'], $information['mop7']);
					$ebox = array("", $information['box1'], $information['box2'], $information['box3'], $information['box4']);
					$ecsig = array("", $information['CSig1'], $information['CSig2']);
					$etime = $information['Time'];
					$edwc1 =  $information['dwc1'];
					$eestimate = $information['estimate'];
					$eedittime = $information['EditTime'];
	?>
    <form name="infoequip" method="post"> 
    </FONT>
    <?php
    if($eestimate == "") {
    echo "<input name='estimate' type=checkbox class='css-checkbox' id='est1' value='THIS IS AN ESTIMATE'><label for='est1' class='css-label radGroup1'></label>ESTIMATE</br>";
    } else if($eestimate == "THIS IS AN ESTIMATE") {
    echo "<input name='estimate' type=checkbox class='css-checkbox' id='est1' value='THIS IS AN ESTIMATE' checked><label for='est1' class='css-label radGroup1'></label>ESTIMATE</br>";
    }
    ?>
    <font size=4>
    <b>Chris Watson</b>, <i>Certified Repair Technician</i>
    </font>
    </div>
    <script src="/includes/jquery-1.10.2.js"></script>
    </head>
    <body>
    <div align=center>
    <table>
    <tr>
    <td colspan=2>
    <div align=right>
	Date: <b><u><?php echo $edate[1]; ?></u></b> Time: <b><u><?php echo $etime; ?></u></b>
    Edit: <b><u><?php echo $eedittime; ?></u></b>
	</div>
	</td>
	</tr>
    <tr>
    <td>
    To:<br> <textarea name="invto" rows=5 cols=30><?php echo $einvto; ?></textarea>    
    </td>
    <td>
    <div align=left>
    Bill To:<br> <textarea name="billto" rows=5 cols=30><?php echo $ebillto; ?></textarea></br>
    </td>
    </tr>
    <tr>
    <td colspan=2>
    Phone: <input type=text name="phone" size=80 value="<?php echo $ephone; ?>">
    </div>
    </td>
    </tr>
    </table>
    </div>
    <hr>
    <DIV ALIGN=CENTER>
    <TABLE BORDER=1>
    <TR>
    <TD BGCOLOR=#000000>
    <FONT COLOR=#FFFFFF>
    QUANTITY
    </FONT>
    </TD>
    <TD BGCOLOR=#000000>
    <FONT COLOR=#FFFFFF>
    <DIV ALIGN=CENTER>
	PARTS
	</DIV>
	</FONT>
    </TD>
    <TD BGCOLOR=#000000>
    <FONT COLOR=#FFFFFF>
    UNIT PRICE
    </FONT>
    </TD>
    <TD BGCOLOR=#000000>
    <FONT COLOR=#FFFFFF>
    AMOUNT
    </FONT>
    </TD>
    </TR>
    <TR>
    <TD>
    <input type=text name="q1" size=30 value="<?php echo $eq[1]; ?>">
    </TD>
    <TD>
    <div align=center>
    <input type=text name="p1" size=50 value="<?php echo $ep[1]; ?>">
    </div>
    </TD>
    <TD>
    <input type=text name="up1" value="<?php echo $eup[1]; ?>">
    </TD>
    <TD>
    <input type=text name="a1" value="<?php echo $ea[1]; ?>">
    </TD>
    </TR>
    <TR>
    <TD>
    <input type=text name="q2" size=30 value="<?php echo $eq[2]; ?>">
    </TD>
    <TD>
    <div align=center>
    <input type=text name="p2" size=50 value="<?php echo $ep[2]; ?>">
    </div>
    </TD>
    <TD>
    <input type=text name="up2" value="<?php echo $eup[2]; ?>">
    </TD>
    <TD>
    <input type=text name="a2" value="<?php echo $ea[2]; ?>">
    </TD>
    </TR>
    <TR>
    <TD>
    <input type=text name="q3" size=30 value="<?php echo $eq[3]; ?>">
    </TD>
    <TD>
    <div align=center>
    <input type=text name="p3" size=50 value="<?php echo $ep[3]; ?>">
    </div>
    </TD>
    <TD>
    <input type=text name="up3" value="<?php echo $eup[3]; ?>">
    </TD>
    <TD>
    <input type=text name="a3" value="<?php echo $ea[3]; ?>">
    </TD>
    </TR>
    <TR>
    <TD>
    <input type=text name="q4" size=30 value="<?php echo $eq[4]; ?>">
    </TD>
    <TD>
    <div align=center>
    <input type=text name="p4" size=50 value="<?php echo $ep[4]; ?>">
    </div>
    </TD>
    <TD>
    <input type=text name="up4" value="<?php echo $eup[4]; ?>">
    </TD>
    <TD>
    <input type=text name="a4" value="<?php echo $ea[4]; ?>">
    </TD>
    </TR>
    <TR>
    <TD>
    <input type=text name="q5" size=30 value="<?php echo $eq[5]; ?>">
    </TD>
    <TD>
    <div align=center>
    <input type=text name="p5" size=50 value="<?php echo $ep[5]; ?>">
    </div>
    </TD>
    <TD>
    <input type=text name="up5" value="<?php echo $eup[5]; ?>">
    </TD>
    <TD>
    <input type=text name="a5" value="<?php echo $ea[5]; ?>">
    </TD>
    </TR>
    <TR>
    <TD>
    <input type=text name="q6" size=30 value="<?php echo $eq[6]; ?>">
    </TD>
    <TD>
    <div align=center>
    <input type=text name="p6" size=50 value="<?php echo $ep[6]; ?>">
    </div>
    </TD>
    <TD>
    <input type=text name="up6" value="<?php echo $eup[6]; ?>">
    </TD>
    <TD>
    <input type=text name="a6" value="<?php echo $ea[6]; ?>">
    </TD>
    </TR>
    <TR>
    <TD>
    <input type=text name="q7" size=30 value="<?php echo $eq[7]; ?>">
    </TD>
    <TD rowspan=3>
    Description of Problem: </br> <textarea name="box1" cols=37 rows=4><?php echo $ebox[1]; ?></textarea>
    </TD>
    <TD>
    <input type=text name="up7" value="<?php echo $eup[7]; ?>">
    </TD>
    <TD>
    <input type=text name="a7" value="<?php echo $ea[7]; ?>">
    </TD>
    </TR>
    <TR>
    <TD>
    <input type=text name="q8" size=30 value="<?php echo $eq[8]; ?>">
    </TD>
    <TD>
    <input type=text name="up8" value="<?php echo $eup[8]; ?>">
    </TD>
    <TD>
    <input type=text name="a8" value="<?php echo $ea[8]; ?>">
    </TD>
    </TR>
    <TR>
    <TD>
    <input type=text name="q9" size=30 value="<?php echo $eq[9]; ?>">
    </TD>
    <TD>
    <input type=text name="up9" value="<?php echo $eup[9]; ?>">
    </TD>
    <TD>
    <input type=text name="a9" value="<?php echo $ea[9]; ?>">
    </TD>
    </TR>
    <TR>
    <TD>
    <input type=text name="q10" size=30 value="<?php echo $eq[10]; ?>">
    </TD>
    <TD>
    Serial#<input type=text name="box2" size=42 value="<?php echo $ebox[2]; ?>">
    </TD>
    <TD>
    <input type=text name="up10" value="<?php echo $eup[10]; ?>">
    </TD>
    <TD>
    <input type=text name="a10" value="<?php echo $ea[10]; ?>">
    </TD>
    </TR>
    <TR>
    <TD>
    <input type=text name="q11" size=30 value="<?php echo $eq[11]; ?>">
    </TD>
    <TD>
    Model/Make<input type=text name="box3" size=35 value="<?php echo $ebox[3]; ?>">
    </TD>
    <TD>
    <input type=text name="up11" value="<?php echo $eup[11]; ?>">
    </TD>
    <TD>
    <input type=text name="a11" value="<?php echo $ea[11]; ?>">
    </TD>
    </TR>
    <TR>
    <TD>
    <input type=text name="q12" size=30 value="<?php echo $eq[12]; ?>">
    </TD>
    <TD>
    Date of Purchase<input type=text name="box4" size=30 value="<?php echo $ebox[4]; ?>">
    </TD>
    <TD>
    <input type=text name="up12" value="<?php echo $eup[12]; ?>">
    </TD>
    <TD>
    <input type=text name="a12" value="<?php echo $ea[12]; ?>">
    </TD>
    </TR>
    <tr>
    <td colspan=2 rowspan=4>
    METHOD OF PAYMENT: 30 day billing     
    <?php
    if($emop[1] == "") {
    echo "<input name='mop1' type=checkbox class='css-checkbox' id='cb1' value='30 day billing'><label for='cb1' class='css-label radGroup1'></label>";
    } else {
    echo "<input name='mop1' type=checkbox class='css-checkbox' id='cb1' value='30 day billing' checked><label for='cb1' class='css-label radGroup1'></label>";
    }
    ?>
    Insurance 
    <?php
    if($emop[2] == "") {
    echo "<input name='mop2' type=checkbox class='css-checkbox' id='cb2' value='Insurance'><label for='cb2' class='css-label radGroup1'></label>";
    } else {
    echo "<input name='mop2' type=checkbox class='css-checkbox' id='cb2' value='Insurance' checked><label for='cb2' class='css-label radGroup1'></label>";
    }
    ?>
    Private Pay
    <?php
    if($emop[3] == "") {
    echo "<input name='mop3' type=checkbox class='css-checkbox' id='cb3' value='Private Pay'><label for='cb3' class='css-label radGroup1'></label>";
    } else {
    echo "<input name='mop3' type=checkbox class='css-checkbox' id='cb3' value='Private Pay' checked><label for='cb3' class='css-label radGroup1'></label>";
    }
    ?></br>
    <DIV ALIGN=RIGHT>
    CASH
    <?php
    if($emop[4] == "") {
    echo "<input name='mop4' type=checkbox class='css-checkbox' id='cb4' value='CASH'><label for='cb4' class='css-label radGroup1'></label>";
    } else {
    echo "<input name='mop4' type=checkbox class='css-checkbox' id='cb4' value='CASH' checked><label for='cb4' class='css-label radGroup1'></label>";
    }
    ?></br>
    CHECK # <input type=text name="mop5" value="<?php echo $emop[5]; ?>">
    <?php
    if($emop[6] == "") {
    echo "<input name='mop6' type=checkbox class='css-checkbox' id='cb6' value='CHECK #'><label for='cb6' class='css-label radGroup1'></label>";
    } else {
    echo "<input name='mop6' type=checkbox class='css-checkbox' id='cb6' value='CHECK #' checked><label for='cb6' class='css-label radGroup1'></label>";
    }
    ?></br>
    CHARGE 
    <?php
    if($emop[7] == "") {
    echo "<input name='mop7' type=checkbox class='css-checkbox' id='cb7' value='CHARGE'><label for='cb7' class='css-label radGroup1'></label>";
    } else {
    echo "<input name='mop7' type=checkbox class='css-checkbox' id='cb7' value='CHARGE' checked><label for='cb7' class='css-label radGroup1'></label>";
    }
    ?></br>
    </DIV>
    DATE WORK COMPLETED: <input type=text name="dwc1" value="<?php echo $edwc1; ?>">
    </td>
    <TD>
    LABOR
    </TD>
    <TD>
    <input type=text name="a13" value="<?php echo $ea[13]; ?>">
    </TD>
	</tr>
	<TR>
	<TD>
	SUBTOTAL
	</TD>
	<TD>
	<input type=text name="a14" value="<?php echo $ea[14]; ?>">
	</TD>
	</TR>
	<TR>
	<TD>
	SALES TAX
	</TD>
	<TD>
	<input type=text name="a15" value="<?php echo $ea[15]; ?>">
	</TD>
	</TR>
	<TR>
	<TD>
	TOTAL DUE
	</TD>
	<TD>
	<input type=text name="a16" value="<?php echo $ea[16]; ?>">
	</TD>
	</TR>
    </TABLE>
    <TABLE>
    <TR>
    </TR>
    </TABLE></BR></BR>
	Customer's Signature: _________________________________________ Date: <b><u>_____________________</u></b></br></br>
    <i>
    I request payment of authorized benefits be made on my behalf and hereby assign these benefits payable to <b>Brevard Medical Equipment</b> for services and equipment rensered. I certify that I have received the above listed equipment in perfect condition and that I have been instructed on how to use the equipment properly and safely. I have been presented with the warranty information for the product(s). I hereby give permission for <b>Brevard Medical Equipment</b> to contact me by telephone concerning my health insurance covered equipment and/or supplies.
    </i>
    </br></br></br>
    <TABLE>
    <TR>
    <TD>
	Customer's Signature: _________________________________________ Date: <b><u>_____________________</u></b></br></br>
    </TD>
    </TR>
    </TABLE>
    <font size=4>
    Make all checks payable to <B>BREVARD MEDICAL EQUIPMENT</B></br>
    If you have any questions concerning this invoice, call Chris Watson at (321) 453-3370</br>
    </font>
    <font size=6>
    <i>
    Thank You for Your Business!
    </i>
    </font></br>
    <input type="submit" name="Submit2" value="Update" class="no-print">
    <?php
    $date = array(date("Y/m/d"),date("Y/m/d"),date("Y/m/d"));
    $invform = array("", $_POST['invto'], $_POST['billto'], $_POST['phone']);
    $q = array("", $_POST['q1'], $_POST['q2'], $_POST['q3'], $_POST['q4'], $_POST['q5'], $_POST['q6'], $_POST['q7'], $_POST['q8'], $_POST['q9'], $_POST['q10'], $_POST['q11'], $_POST['q12']);
    $p = array("", $_POST['p1'], $_POST['p2'], $_POST['p3'], $_POST['p4'], $_POST['p5'], $_POST['p6'], $_POST['p7'], $_POST['p8']);
    $up = array("", $_POST['up1'], $_POST['up2'], $_POST['up3'], $_POST['up4'], $_POST['up5'], $_POST['up6'], $_POST['up7'], $_POST['up8'], $_POST['up9'], $_POST['up10'], $_POST['up11'], $_POST['up12']);
    $a = array("", $_POST['a1'], $_POST['a2'], $_POST['a3'], $_POST['a4'], $_POST['a5'], $_POST['a6'], $_POST['a7'], $_POST['a8'], $_POST['a9'], $_POST['a10'], $_POST['a11'], $_POST['a12'], $_POST['a13'], $_POST['a14'], $_POST['a15'], $_POST['a16']);
    $box = array("", $_POST['box1'],$_POST['box2'],$_POST['box3'],$_POST['box4']);
    $mop = array("", $_POST['mop1'],$_POST['mop2'],$_POST['mop3'],$_POST['mop4'],$_POST['mop5'],$_POST['mop6'],$_POST['mop7']);
    $csig = array("", "", "");
    $driver = "";
    $time = date("h:i:sa"); 
    $dwc1 = $_POST['dwc1'];
    $estimate = $_POST['estimate'];
    $edittime = date("h:i:sa") . " " . date("Y/m/d");
    $tablename = "Invoice";
    $action = "Edit";
    
    	 if($_POST['Submit2']) {
				mysqli_query($GLOBALS["___mysqli_ston"], "UPDATE `Invoice` SET`InvTo`='$invform[1]',`BillTo`='$invform[2]',`Phone`='$invform[3]',`q1`='$q[1]', `q2`='$q[2]', `q3`='$q[3]',`q4`='$q[4]',`q5`='$q[5]',`q6`='$q[6]',`q7`='$q[7]',`q8`='$q[8]',`q9`='$q[9]', `q10`='$q[10]',`q11`='$q[11]',`q12`='$q[12]', `p1`='$p[1]',`p2`='$p[2]',`p3`='$p[3]',`p4`='$p[4]',`p5`='$p[5]',`p6`='$p[6]',`p7`='$p[7]',`p8`='$p[8]', `up1`='$up[1]',`up2`='$up[2]',`up3`='$up[3]',`up4`='$up[4]',`up5`='$up[5]',`up6`='$up[6]',`up7`='$up[7]',`up8`='$up[8]',`up9`='$up[9]',`up10`='$up[10]',`up11`='$up[11]',`up12`='$up[12]',`a1`='$a[1]',`a2`='$a[2]',`a3`='$a[3]',`a4`='$a[4]',`a5`='$a[5]',`a6`='$a[6]',`a7`='$a[7]',`a8`='$a[8]',`a9`='$a[9]',`a10`='$a[10]',`a11`='$a[11]',`a12`='$a[12]',`a13`='$a[13]',`a14`='$a[14]',`a15`='$a[15]',`a16`='$a[16]',`mop1`='$mop[1]',`mop2`='$mop[2]',`mop3`='$mop[3]',`mop4`='$mop[4]',`mop5`='$mop[5]',`mop6`='$mop[6]',`mop7`='$mop[7]',`box1`='$box[1]',`box2`='$box[2]',`box3`='$box[3]',`box4`='$box[4]',`dwc1`='$dwc1',`CSig1`='$csig[0]',`Date2`='$date[2]',`CSig2`='$csig[1]',`Date3`='$date[3]',`Driver`='',`Editor`='$username',`EditTime`='$edittime',`estimate`='$estimate' WHERE `ID`='$get_db_id'") or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
				mysqli_query($GLOBALS["___mysqli_ston"], "INSERT INTO AuditTrail (`ID`,`TableName`,`AuditID`,`Username`,`Action`,`Time`)
					Values('','$tablename','$get_db_id','$username','$action','$edittime')") or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));

				echo "</br>Data has been logged, thank you.</br>";
				echo "<br><a href='invoice_edit.php?ID=" . $get_db_id . "'>Refresh</a>";
				header('Location: invoice_edit.php?ID=' . $get_db_id); 
		}
	?>
	</div>
	</form>
<script>
	$( "*" ).keydown(function(event) {
		if (event.keyCode == 222) {
		event.preventDefault();
	}
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
}
		}
	} else {
echo "<div align=center><b>You must be logged in to do that!</b></div>";
	}
include(__DIR__ . "/pfooter.php");
?>