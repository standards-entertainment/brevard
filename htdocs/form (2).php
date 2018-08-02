<?php
	include 'includes/connect.php';
	include 'includes/functions.php';
	include ("header.php");
	
?>
<html>
<head>
<title>
Brevard Medical Equipment :: Driver Form
</title>
<div align=center></br>
</head>
<body>
<?php
	if(loggedin()){
?>
<form name="Entry" method ="post" />
<table border="3" style="width:100%">
	<tr>
		<td>
		<div align="right">
		<select name="Zone">
		<option value="beachside">Beach Side</option>
		<option value="melbourne">Melbourne</option>
		<option value="merrittisland">Merritt Island</option>
		<option value="palmbay">Palm Bay</option>
		<option value="titusville">Titusville</option>
		<option value="saturdaysandspecials">Saturdays & Specials</option>
		<option value="cocoa">Cocoa</option>
		<option value="rockledge">Rockledge</option>
		<option value=""></option>
		</select>
		</td>
	</tr>
	<tr>
		<td>Date: <?php echo date("Y/m/d"); ?> </td>
		<td>
		<div align="right">
		<select name="Van">
		<option value="van1">Van 1</option>
		<option value="van2">Van 2</option>
		<option value="van3">Van 3</option>
		<option value="van4">Van 4</option>
		<option value="van5">Van 5</option>
		<option value="van6">Van 6</option>
		</select>
		</div>
		</td>
		<td>Beg 02 Count: <input type="text" name="Beg02Count" /></td>
		<td>Time Out: <input type="text" name="TimeOut" /></td>
	</tr>
<?php
// START USERNAME QUERY.

$list_query = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM users");


// CREATE ARRAY.
while($user_array[] = $list_query->fetch_object());


// Blank @ End of Array Fix
array_pop($user_array);

?>
	<tr>
		<td>Tech:
		<?php 
		if($user_level == 1){
		echo $username; 
		} else {
		?>
			<select name="user_select">
			<?php foreach($user_array as $option) : ?>
				<option value='<?php echo $option->id; ?>'><?php echo $option->username; ?></option>
			<?php endforeach; ?>
			</select>
		<?php
		}
		
		?>
		</td>
		<td>Cell: <?php echo $user_cell ?></td>
		<td>Time In: <input type="text" name="TimeIn" /></td>
		<td>End 02 Count: <input type="text" name="End02Count" /></td>
	</tr>
		<tr>
		<td>Referral: <input type="text" name="Referral" /></td>
		<td>Time Called In: <input type="text" name="TimeCalledIn" /></td>
		<td>Delivery Time: <input type="text" name="DeliveryTime" /></td>
		<td>Customer Number: <input type="text" name="CustomerNumber" /></td>

	</tr>
	<tr>
		<td>Name:<br> 
		<font size=2>
		First:
		<input type="text" name="FName" /><br>
		Last:
		<input type="text" name="LName" /><br>
		</font>
		</td>
		<td>Phone: <input type="text" name="Phone" /></td>
		<td>
		<div align="right">
		<select name="DelPU">
		<option value="delivery">Delivery</option>
		<option value="pickup">Pick-up</option>
		<option value="repair">Repair</option>
		</select>
		</div>
		</td>
	</tr>
	<tr>
		<td>Address:</br> <font size=1>
		House Number:&nbsp;&nbsp;<input type="text" name="Streetnumber" /></br>
		Street Name:&nbsp;&nbsp;<input type="text" name="Streetname" /></br>
		City:&nbsp;&nbsp;<input type="text" name="City" /></br>
		Zip Code:&nbsp;&nbsp;<input type="text" name="Zip" /></font>
		</td>
		<td>
		Equipment:<br><textarea rows="4" cols="50" name="Equipment" ></textarea>
		</td>
		<td>
		Status:<br>
		<input type="radio" name="status"
		<?php if (isset($dstatusb) && $dstatusb=="completed") echo "checked";?>
		value="completed">Completed
		</br>
		<input type="radio" name="status"
		<?php if (isset($dstatusb) && $dstatusb=="other") echo "checked";?>
		value="other">Other
		</td>
		<td>
		Comments:<br><textarea rows="4" cols="50" name="Comments" ></textarea>
		</td>
	</tr>	
</table>
<div align="center">
<p><input type="submit" name="submit"/></p>
</form>
<?php
	$zone = $_POST['Zone'];
	$date = date("Y/m/d");
	$van = $_POST['Van'];
	$beg02count = $_POST['Beg02Count'];
	$timeout = $_POST['TimeOut'];
	$timein = $_POST['TimeIn'];
	$end02count = $_POST['End02Count'];
	$referral = $_POST['Referral'];
	$timecalledin = $_POST['TimeCalledIn'];
	$deliverytime = $_POST['DeliveryTime'];
	$customernumber = $_POST['CustomerNumber'];
	$fname = $_POST['FName'];
	$lname = $_POST['LName'];
	$streetnumber = $_POST['Streetnumber'];
	$streetname = $_POST['Streetname'];
	$city = $_POST['City'];
	$zip = $_POST['Zip'];
	$phone = $_POST['Phone'];
	$delpu = $_POST['DelPU'];
	$equipment = $_POST['Equipment'];
	$comments = $_POST['Comments'];
	$status = $_POST['status'];
	
	if($user_level == 1){
	$techname = $username;
	} else {
	$techID = $_POST['user_select'];
	$posterQuery = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM users WHERE id='$techID'");
	$run_poster = mysqli_fetch_array($posterQuery);
	$poster = $run_poster['username'];
	$techname = $poster;
	}
	
	if(!$_POST['submit']) {
		echo "<div align=center>";
		echo "Please Fill Out The Form</br>";
		echo "<br><a href='form.php'>Reset Form</a>";
		echo "</div>";
	} else {
			if(empty($fname) OR empty($lname)){
				echo "<div align='center'><p><font color=red>Fields Empty! Please go back and check your form! </br> </p></font><a href='form.php'>Back to Form</a></div>";
			} else {
				mysqli_query($GLOBALS["___mysqli_ston"], "INSERT INTO Info (`Zone`,`Date`,`Van`,`Beg 02 Count`,`Time Out`, `Tech`, `Cell`,`Time In`,`End 02 Count`,`Referral`,`Time Called In`,`Delivery Time`,`CustomerNumber`,`FName`, `LName`,`Streetnumber`,`Streetname`,`City`,`Zip`,`Phone`,`Del_PU`,`Equipment`, `Comments`, `Poster`, `Status`)
					Values('$zone','$date','$van','$beg02count','$timeout','$techname','$user_cell','$timein','$end02count','$referral','$timecalledin','$deliverytime','$customernumber','$fname','$lname','$streetnumber','$streetname','$city','$zip','$phone','$delpu','$equipment', '$comments', '$username', '$status')") or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));	
				echo "<div align=center>";
				echo "Data has been logged, thank you.</br>";
				echo "<br><a href='form.php'>Next Form</a>";
				echo "</div>";
				header('Location: form.php');
			}
	}
?>

</div>
<?php
	} else { 
?>
	<div align=center>
	<b>You must be logged in to fill out the form.</b></br></br></br>
	<a href='login.php'>Log In</a> | 
	<a href='register.php'>Register</a></br></br>
	</div>
<?php
	}
?>
</body>
</html>
<?php
	include ("footer.php");
?>