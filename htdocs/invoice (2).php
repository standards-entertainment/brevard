<?php
include("includes/connect.php");
include("includes/functions.php");
include(__DIR__ . "/header.php");
	include('stylings.php');
	if(loggedin()){
		if($user_level == 1){
			echo "User does not have access.";
		} else {
?>


    <html>
    <head>
        <title>Brevard Medical Equipment :: Invoice</title>
    <div align=center>
    <font size=6 COLOR="#FFFFFF"><b>
    <span STYLE="Background-Color:#000000;max-width: 300px">INVOICE</span></b></br>
    <form name="infoequip" method="post"> 
    </FONT>
    <input name='estimate' type=checkbox class='css-checkbox' id='est1' value='THIS IS AN ESTIMATE'><label for='est1' class='css-label radGroup1'></label>ESTIMATE</br> 
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
	Date: <b><u><?php echo date("Y/m/d"); ?></u></b>
	</div>
	</td>
	</tr>
    <tr>
    <td>
    To:<br> <textarea name="invto" rows=5 cols=30></textarea>    
    </td>
    <td>
    <div align=left>
    Bill To:<br> <textarea name="billto" rows=5 cols=30></textarea></br>
    </td>
    </tr>
    <tr>
    <td colspan=2>
    Phone: <input type=text name="phone" size=80>
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
    <input type=text name="q1" size=30>
    </TD>
    <TD>
    <div align=center>
    <input type=text name="p1" size=50>
    </div>
    </TD>
    <TD>
    <input type=text name="up1">
    </TD>
    <TD>
    <input type=text name="a1">
    </TD>
    </TR>
    <TR>
    <TD>
    <input type=text name="q2" size=30>
    </TD>
    <TD>
    <div align=center>
    <input type=text name="p2" size=50>
    </div>
    </TD>
    <TD>
    <input type=text name="up2">
    </TD>
    <TD>
    <input type=text name="a2">
    </TD>
    </TR>
    <TR>
    <TD>
    <input type=text name="q3" size=30>
    </TD>
    <TD>
    <div align=center>
    <input type=text name="p3" size=50>
    </div>
    </TD>
    <TD>
    <input type=text name="up3">
    </TD>
    <TD>
    <input type=text name="a3">
    </TD>
    </TR>
    <TR>
    <TD>
    <input type=text name="q4" size=30>
    </TD>
    <TD>
    <div align=center>
    <input type=text name="p4" size=50>
    </div>
    </TD>
    <TD>
    <input type=text name="up4">
    </TD>
    <TD>
    <input type=text name="a4">
    </TD>
    </TR>
    <TR>
    <TD>
    <input type=text name="q5" size=30>
    </TD>
    <TD>
    <div align=center>
    <input type=text name="p5" size=50>
    </div>
    </TD>
    <TD>
    <input type=text name="up5">
    </TD>
    <TD>
    <input type=text name="a5">
    </TD>
    </TR>
    <TR>
    <TD>
    <input type=text name="q6" size=30>
    </TD>
    <TD>
    <div align=center>
    <input type=text name="p6" size=50>
    </div>
    </TD>
    <TD>
    <input type=text name="up6">
    </TD>
    <TD>
    <input type=text name="a6">
    </TD>
    </TR>
    <TR>
    <TD>
    <input type=text name="q7" size=30>
    </TD>
    <TD rowspan=3>
    Description of Problem:</br> <textarea name="box1" cols=37 rows=4></textarea>
    </TD>
    <TD>
    <input type=text name="up7">
    </TD>
    <TD>
    <input type=text name="a7">
    </TD>
    </TR>
    <TR>
    <TD>
    <input type=text name="q8" size=30>
    </TD>
    <TD>
    <input type=text name="up8">
    </TD>
    <TD>
    <input type=text name="a8">
    </TD>
    </TR>
    <TR>
    <TD>
    <input type=text name="q9" size=30>
    </TD>
    <TD>
    <input type=text name="up9">
    </TD>
    <TD>
    <input type=text name="a9">
    </TD>
    </TR>
    <TR>
    <TD>
    <input type=text name="q10" size=30>
    </TD>
    <TD>
    Serial#<input type=text name="box2" size=42>
    </TD>
    <TD>
    <input type=text name="up10">
    </TD>
    <TD>
    <input type=text name="a10">
    </TD>
    </TR>
    <TR>
    <TD>
    <input type=text name="q11" size=30>
    </TD>
    <TD>
    Model/Make<input type=text name="box3" size=35>
    </TD>
    <TD>
    <input type=text name="up11">
    </TD>
    <TD>
    <input type=text name="a11">
    </TD>
    </TR>
    <TR>
    <TD>
    <input type=text name="q12" size=30>
    </TD>
    <TD>
    Date of Purchase<input type=text name="box4" size=30>
    </TD>
    <TD>
    <input type=text name="up12">
    </TD>
    <TD>
    <input type=text name="a12">
    </TD>
    </TR>
    <tr>
    <td colspan=2 rowspan=4>
    METHOD OF PAYMENT: 30 day billing <input name='mop1' type=checkbox class='css-checkbox' id='cb1' value='30 day billing'><label for='cb1' class='css-label radGroup1'></label> Insurance <input name='mop2' type=checkbox class='css-checkbox' id='cb2' value='Insurance'><label for='cb2' class='css-label radGroup1'></label> Private Pay <input name='mop3' type=checkbox class='css-checkbox' id='cb3' value='Private Pay'><label for='cb3' class='css-label radGroup1'></label></br>
    <DIV ALIGN=RIGHT>
    CASH <input name='mop4' type=checkbox class='css-checkbox' id='cb4' value='CASH'><label for='cb4' class='css-label radGroup1'></label></br>
    CHECK # <input type=text name="mop5"> <input name='mop6' type=checkbox class='css-checkbox' id='cb6' value='CHECK #'><label for='cb6' class='css-label radGroup1'></label></br>
    CHARGE <input name='mop7' type=checkbox class='css-checkbox' id='cb7' value='CHARGE'><label for='cb7' class='css-label radGroup1'></label></br>
    </DIV>
    DATE WORK COMPLETED: <input type=text name="dwc1">
    </td>
    <TD>
    LABOR
    </TD>
    <TD>
    <input type=text name="a13">
    </TD>
	</tr>
	<TR>
	<TD>
	SUBTOTAL
	</TD>
	<TD>
	<input type=text name="a14">
	</TD>
	</TR>
	<TR>
	<TD>
	SALES TAX
	</TD>
	<TD>
	<input type=text name="a15">
	</TD>
	</TR>
	<TR>
	<TD>
	TOTAL DUE
	</TD>
	<TD>
	<input type=text name="a16">
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
    Make all checks payable to <B>BREVARD MEDICAL EQUIPMENT</B></BR>
    If you have any questions concerning this invoice, call Chris Watson at (321) 453-3370</br>
    </font>
    <font size=6>
    <i>
    Thank You for Your Business!
    </i>
    </font></br>
    <input type="submit" name="Submit2" value="Store" class="no-print">
    <?php
    $date = array(date("Y/m/d"),date("Y/m/d"),date("Y/m/d"));
    $invform = array("", $_POST['invto'], $_POST['billto'], $_POST['phone']);
    $q = array("", $_POST['q1'], $_POST['q2'], $_POST['q3'], $_POST['q4'], $_POST['q5'], $_POST['q6'], $_POST['q7'], $_POST['q8'], $_POST['q9'], $_POST['q10'], $_POST['q11'], $_POST['q12']);
    $p = array("", $_POST['p1'], $_POST['p2'], $_POST['p3'], $_POST['p4'], $_POST['p5'], $_POST['p6'], $_POST['p7'], $_POST['p8']);
    $up = array("", $_POST['up1'], $_POST['up2'], $_POST['up3'], $_POST['up4'], $_POST['up5'], $_POST['up6'], $_POST['up7'], $_POST['up8'], $_POST['up9'], $_POST['up10'], $_POST['up11'], $_POST['up12']);
    $a = array("", $_POST['a1'], $_POST['a2'], $_POST['a3'], $_POST['a4'], $_POST['a5'], $_POST['a6'], $_POST['a7'], $_POST['a8'], $_POST['a9'], $_POST['a10'], $_POST['a11'], $_POST['a12'], $_POST['a13'], $_POST['a14'], $_POST['a15'], $_POST['a16']);
    $box = array($_POST['box1'],$_POST['box2'],$_POST['box3'],$_POST['box4']);
    $mop = array($_POST['mop1'],$_POST['mop2'],$_POST['mop3'],$_POST['mop4'],$_POST['mop5'],$_POST['mop6'],$_POST['mop7']);
    $csig = array("", "");
    $driver = "";
    $time = date("h:i:sa"); 
    $dwc1 = $_POST['dwc1'];
    $estimate = $_POST['estimate'];
    	 if($_POST['Submit2']) {
				mysqli_query($GLOBALS["___mysqli_ston"], "INSERT INTO Invoice (`ID`,`Date1`,`InvTo`,`BillTo`,`Phone`,`q1`, `q2`, `q3`,`q4`,`q5`,`q6`,`q7`,`q8`,`q9`, `q10`,`q11`,`q12`, `p1`,`p2`,`p3`,`p4`,`p5`,`p6`,`p7`,`p8`, `up1`,`up2`,`up3`,`up4`,`up5`,`up6`,`up7`,`up8`,`up9`,`up10`,`up11`,`up12`,`a1`,`a2`,`a3`,`a4`,`a5`,`a6`,`a7`,`a8`,`a9`,`a10`,`a11`,`a12`,`a13`,`a14`,`a15`,`a16`,`mop1`,`mop2`,`mop3`,`mop4`,`mop5`,`mop6`,`mop7`,`box1`,`box2`,`box3`,`box4`,`dwc1`,`CSig1`,`Date2`,`CSig2`,`Date3`,`Poster`,`Driver`,`Sent`,`Complete`,`Verified`,`Time`,`estimate`)
					Values('','$date[0]','$invform[1]','$invform[2]','$invform[3]','$q[1]','$q[2]','$q[3]','$q[4]','$q[5]','$q[6]','$q[7]','$q[8]', '$q[9]', '$q[10]', '$q[11]' ,'$q[12]','$p[1]','$p[2]','$p[3]','$p[4]','$p[5]','$p[6]','$p[7]','$p[8]','$up[1]','$up[2]','$up[3]','$up[4]','$up[5]','$up[6]','$up[7]','$up[8]','$up[9]','$up[10]','$up[11]','$up[12]','$a[1]','$a[2]','$a[3]','$a[4]','$a[5]','$a[6]','$a[7]','$a[8]','$a[9]','$a[10]','$a[11]','$a[12]','$a[13]','$a[14]','$a[15]','$a[16]','$mop[0]','$mop[1]','$mop[2]','$mop[3]','$mop[4]','$mop[5]','$mop[6]','$box[0]','$box[1]','$box[2]','$box[3]','$dwc1','$csig[0]','$date[1]','$csig[1]','$date[2]','$username','$driver','0','0','0','$time','$estimate')") or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
				echo "</br>Data has been logged, thank you.</br>";
				echo "<br><a href='invoice.php'>Next Form</a>";
				header('Location: invoice.php'); 
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
	} else {
echo "<div align=center><b>You must be logged in to do that!</b></div>";
	}
include(__DIR__ . "/pfooter.php");

?>