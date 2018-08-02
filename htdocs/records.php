<html>

<HEAD>
<link href="/style/style.css" rel="stylesheet" type="test/css">

</HEAD>
<BODY>
  
<?php
	/*
		Place code to connect to your DB here.
	*/
	include('includes/connect.php');	// include your code to connect to DB.
	include('includes/functions.php'); // 
	include('header.php');
	// How many adjacent pages should be shown on each side?
	$adjacents = 3;
	$DSTableGet = "<a href='dsrecords.php'>Delivery</a>";
	$PUTableGet = "<a href='purecords.php'>Pick Up</a>";
	$NCITableGet = "<a href='ncirecords.php'>New Customer Info</a>";
	$CruTableGet = "<a href='crurecords.php'>Cruise</a>";
	$InvTableGet = "<a href='invrecords.php'>Invoice</a>";

	if(loggedin()){
	if($user_level <= 1){
	echo "User does not have access.";
	} else {
?>
<div align=center>
Records:</br> <?php echo $DSTableGet; ?> | <?php echo $PUTableGet; ?> | <?php echo $NCITableGet; ?> | <?php echo $CruTableGet; ?> | <?php echo $InvTableGet; ?></br><hr>
</div>
</body>
</html>
<?php
}
} else {
echo "<div align='center'><b>You must be logged in to do that!</b></div>";
}
include('footer.php');
	