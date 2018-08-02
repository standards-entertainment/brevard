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
        <title>Brevard Medical Equipment :: Invoice View</title>
    </head>
    <body>
<?php
$Query = "SELECT * FROM Invoice WHERE ID = '$get_db_id'"; // Sort each entry by DATE, DESCENDING!

if($Query != '') {
	$Result = mysqli_query($GLOBALS["___mysqli_ston"], $Query) or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false))); 


	while($information = mysqli_fetch_array($Result))
	{
					$db_ID = $information['ID'];
					$date = array("", $information['Date1'], $information['Date2'], $information['Date3'], );	
					$invto = $information['InvTo'];
					$billto = $information['BillTo'];
					$phone = $information['Phone'];
					$q = array("", $information['q1'], $information['q2'], $information['q3'], $information['q4'], $information['q5'], $information['q6'], $information['q7'], $information['q8'], $information['q9'], $information['q10'], $information['q11'], $information['q12']);
					$p = array("", $information['p1'], $information['p2'], $information['p3'], $information['p4'], $information['p5'], $information['p6'], $information['p7'], $information['p8']);
					$up = array("", $information['up1'], $information['up2'], $information['up3'], $information['up4'], $information['up5'], $information['up6'], $information['up7'], $information['up8'], $information['up9'], $information['up10'], $information['up11'], $information['up12']);
					$a = array("", $information['a1'], $information['a2'], $information['a3'], $information['a4'], $information['a5'], $information['a6'], $information['a7'], $information['a8'], $information['a9'], $information['a10'], $information['a11'], $information['a12'], $information['a13'], $information['a14'], $information['a15'], $information['a16']);
					$mop = array("", $information['mop1'], $information['mop2'], $information['mop3'], $information['mop4'], $information['mop5'], $information['mop6'], $information['mop7']);
					$box = array("", $information['box1'], $information['box2'], $information['box3'], $information['box4']);
					$csig = array("", $information['CSig1'], $information['CSig2']);
					$time = $information['Time'];
					$dwc1 =  $information['dwc1'];
					$estimate = $information['estimate'];
					$poster = $information['Poster'];
	?>
    <form name="infoequip" method="post">
    <div align=center>
    <font size=6 COLOR="#FFFFFF"><b>
    <span STYLE="Background-Color:#000000;max-width: 300px">INVOICE</span></b></br>
    </font>
    <font size=2>
    <?php echo $estimate; ?></br>
    </font>
    <font size=4>
    <b>Chris Watson</b>, <i>Certified Repair Technician</i>
    </font>
    </div>
    <br>
    <div align=center>
    <table>
    <tr>
    <td>
    <div align=right>
	Date: <b><u><?php echo $date[1]; ?></b></u> Time: <b><u><?php echo $time; ?></u></b>
    </div>
    <div align=left>
    <font size=2>To:</font> <?php echo $invto; ?>
    <font size=2>Bill To:</font> <?php echo $billto; ?></br>
    <font size=2>Phone:</font> <?php echo $phone; ?>
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
    <div align=center><?php echo $q[1]; ?></div>
    </TD>
    <TD>
    <div align=center>
    <?php echo $p[1]; ?>
    </div>
    </TD>
    <TD>
    <div align=center><?php echo $up[1]; ?></div>
    </TD>
    <TD>
    <div align=center><?php echo $a[1]; ?></div>
    </TD>
    </TR>
    <TR>
    <TD>
    <div align=center><?php echo $q[2]; ?></div>
    </TD>
    <TD>
	<div align=center><?php echo $p[2]; ?></div>
    </TD>
    <TD>
    <div align=center><?php echo $up[2]; ?></div>
    </TD>
    <TD>
    <div align=center><?php echo $a[2]; ?></div>
    </TD>
    </TR>
    <TR>
    <TD>
    <div align=center><?php echo $q[3]; ?></div>
    </TD>
    <TD>
	<div align=center><?php echo $p[3]; ?></div>
    </TD>
    <TD>
    <div align=center><?php echo $up[3]; ?></div>
    </TD>
    <TD>
    <div align=center><?php echo $a[3]; ?></div>
    </TD>
    </TR>
    <TR>
    <TD>
    <div align=center><?php echo $q[4]; ?></div>
    </TD>
    <TD>
	<div align=center><?php echo $p[4]; ?></div>
    </TD>
    <TD>
    <div align=center><?php echo $up[4]; ?></div>
    </TD>
    <TD>
    <div align=center><?php echo $a[4]; ?></div>
    </TD>
    </TR>
    <TR>
    <TD>
    <div align=center><?php echo $q[5]; ?></div>
    </TD>
    <TD>
	<div align=center><?php echo $p[5]; ?></div>
    </TD>
    <TD>
    <div align=center><?php echo $up[5]; ?></div>
    </TD>
    <TD>
    <div align=center><?php echo $a[5]; ?></div>
    </TD>
    </TR>
    <TR>
    <TD>
    <div align=center><?php echo $q[6]; ?></div>
    </TD>
    <TD>
	<div align=center><?php echo $p[6]; ?></div>
    </TD>
    <TD>
    <div align=center><?php echo $up[6]; ?></div>
    </TD>
    <TD>
    <div align=center><?php echo $a[6]; ?></div>
    </TD>
    </TR>
    <TR>
    <TD>
    <div align=center><?php echo $q[7]; ?></div>
    </TD>
    <TD>
    Description of Problem: <?php echo $box[1]; ?>
    </TD>
    <TD>
    <div align=center><?php echo $up[7]; ?></div>
    </TD>
    <TD>
    <div align=center><?php echo $a[7]; ?></div>
    </TD>
    </TR>
    <TR>
    <TD>
    <div align=center><?php echo $q[8]; ?></div>
    </TD>
    <TD>
    <div align=center><?php echo $p[7]; ?></div>
    <TD>
    <div align=center><?php echo $up[8]; ?></div>
    </TD>
    <TD>
    <div align=center><?php echo $a[8]; ?></div>
    </TD>
    </TR>
    <TR>
    <TD>
    <div align=center><?php echo $q[9]; ?></div>
    </TD>
    <TD>
    <div align=center><?php echo $p[8]; ?></div>
    <TD>
    <div align=center><?php echo $up[9]; ?></div>
    </TD>
    <TD>
    <div align=center><?php echo $a[9]; ?></div>
    </TD>
    </TR>
    <TR>
    <TD>
    <div align=center><?php echo $q[10]; ?></div>
    </TD>
    <TD>
    Serial# <?php echo $box[2]; ?>
    </TD>
    <TD>
    <div align=center><?php echo $up[10]; ?></div>
    </TD>
    <TD>
    <div align=center><?php echo $a[10]; ?></div>
    </TD>
    </TR>
    <TR>
    <TD>
    <div align=center><?php echo $q[11]; ?></div>
    </TD>
    <TD>
    Model/Make <?php echo $box[3]; ?>
    </TD>
    <TD>
    <div align=center><?php echo $up[11]; ?></div>
    </TD>
    <TD>
    <div align=center><?php echo $a[11]; ?></div>
    </TD>
    </TR>
    <TR>
    <TD>
    <div align=center><?php echo $q[12]; ?></div>
    </TD>
    <TD>
    Date of Purchase <?php echo $box[4]; ?>
    </TD>
    <TD>
    <div align=center><?php echo $up[12]; ?></div>
    </TD>
    <TD>
    <div align=center><?php echo $a[12]; ?></div>
    </TD>
    </TR>
    <tr>
    <td colspan=2 rowspan=4>
    METHOD OF PAYMENT:<?php echo $mop[1]; ?> <?php echo $mop[2]; ?> <?php echo $mop[3]; ?></br>
    <DIV ALIGN=RIGHT>
    <?php echo $mop[4]; ?></br>
    <?php echo $mop[6]; ?> <?php echo $mop[5]; ?></br>
    <?php echo $mop[7]; ?></br>
    </DIV>
    DATE WORK COMPLETED: <?php echo $dwc1; ?>
    </td>
    <TD>
    LABOR
    </TD>
    <TD>
    <div align=center><?php echo $a[13]; ?></div>
    </TD>
	</tr>
	<TR>
	<TD>
	SUBTOTAL
	</TD>
	<TD>
	<div align=center><?php echo $a[14]; ?></div>
	</TD>
	</TR>
	<TR>
	<TD>
	SALES TAX
	</TD>
	<TD>
	<div align=center><?php echo $a[15]; ?></div>
	</TD>
	</TR>
	<TR>
	<TD>
	TOTAL DUE
	</TD>
	<TD>
	<div align=center><?php echo $a[16]; ?></div>
	</TD>
	</TR>
    </TABLE></br>
<table border=1>
<tr>
<td>
Created By:
</td>
<td>
At:
</td>
<td>
Edited By:
</td>
<td>
At:
</td>
<td>
Sent By:
</td>
<td>
At:
</td>
</tr>
<tr>
<td>
<?php echo $poster; ?>
</td>
<td>
<?php echo $time; ?> <?php echo $date1; ?>
</td>
<td>
<?php echo $editor; ?>
</td>
<td>
<?php echo $eedittime; ?>
</td>
<td>
<?php echo $sender; ?>
</td>
<td>
<?php echo $esendtime; ?>
</td>
</tr>
<tr>
<td>
Accomplished By:
</td>
<td>
At:
</td>
<td>
Verified By:
</td>
<td>
At:
</td>
<td>
Completed By:
</td>
<td>
At:
</td>
</tr>
<tr>
<td>
<?php echo $accomplisher; ?>
</td>
<td>
<?php echo $eaccomplishtime; ?>
</td>
<td>
<?php echo $verifier; ?>
</td>
<td>
<?php echo $everifytime; ?>
</td>
<td>
<?php echo $completer; ?>
</td>
<td>
<?php echo $ecompletetime; ?>
</td>
</tr>
</table>
</div>
	</form><div align=center>
<?PHP ECHO "<a href='invoice_edit.php?ID=" . $get_db_id . "'>Edit</a></br>"; ?></div>
    </body>
</html>
<?php
}
}
}
	} else {
echo "<div align=center><b>You must be logged in to do that!</b></div>";
	}
include(__DIR__ . "/footer.php");
?>