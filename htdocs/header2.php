<html>
<body>
<div align=center>
<table>
<tr>
<td>
<a href='index.php'><img src="logo-brevard.png" class="no-print"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</td>
<td class='no-print'>
<DIV ALIGN=CENTER>
<?php
	if(loggedin()){
?>	
</div>
	<div align="center">
	<font size=5>Slips </br>
	</font>
<?php
if($user_level ==4){
echo "<a href='delslip.php'>Delivery</a> | <a href='pu_slip.php'>Pick-up</a> | <a href='newcustinfo.php'>New Customer Info</a> | <a href='invoice.php'>Invoice</a> | <a href='cruiseslip.php'>Cruise</a> | <a href='hipaa.php'>HIPAA</a> </BR>Navigation</BR> <a href='admin.php'>Admin Panel</a> | <a href='driver_ticket_summary.php'>Driver Tickets</a> | <a href='completion.php'> Completion </a> | <a href='records.php'>Records</a> | <a href='distribution.php'>Distribution</a> | <a href='inventory1.php'>Inventory</a> | <a href='vitasreport.php'>VITAS Report</a> | <a href='bhospreport.php'>BHOSP Report</a>";
} 
if($user_level ==3){
echo "<a href='delslip.php'>Delivery</a> | <a href='pu_slip.php'>Pick-up</a> | <a href='newcustinfo.php'>New Customer Info</a> | <a href='invoice.php'>Invoice</a> | <a href='cruiseslip.php'>Cruise</a> | <a href='hipaa.php'>HIPAA</a> </BR>Navigation</BR> <a href='admin.php'>Admin Panel</a> | <a href='driver_ticket_summary.php'>Driver Tickets</a> | <a href='completion.php'> Completion </a> | <a href='records.php'>Records</a> | <a href='distribution.php'>Distribution</a> | <a href='inventory1.php'>Inventory</a> | <a href='vitasreport.php'>VITAS Report</a> | <a href='bhospreport.php'>BHOSP Report</a>";
} 
if($user_level ==2){
echo "<a href='delslip.php'>Delivery</a> | <a href='pu_slip.php'>Pick-up</a> | <a href='newcustinfo.php'>New Customer Info</a> | <a href='invoice.php'>Invoice</a> | <a href='cruiseslip.php'>Cruise</a> | <a href='hipaa.php'>HIPAA</a></br>Navigation</br><a href='driver_ticket_summary.php'>Driver Tickets</a> | <a href='records.php'>Records</a> | <a href='distribution.php'>Distribution</a> | <a href='inventory1.php'>Inventory</a>";
}
if($user_level ==1){
 echo "<a href='driver_ticket_summary.php'>Driver Tickets</a>";
}
?></br>
</font>
</td>
<td class='no-print'>
<font size=2>
<div align=right>
You are logged in as: <a href='profile.php'><?php echo $username; ?></a> | (<?php echo $level_name; ?>)</br>
	<a href='logout.php'>Log Out</a>
	</div>
</font>


</td>
<?php
	} else { 
?>
	<a href='login.php'>Log In</a> | 
	<a href='register.php'>Register</a></br></br>
	
</td>
</tr>
<?php
	}
?>
</table>
Brevard Medical Equipment, Inc.</br>
O<font size=1>2</font> MANUFACTURING PERMIT #30:00103 05/31/2018 - O<FONT SIZE=1>2</FONT> RETAIL PERMIT #32:00229 06/28/2018</br>
</div>
<hr>
</body>
</html>