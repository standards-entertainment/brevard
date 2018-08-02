<?php
echo "<br><b>DO NOT REFRESH PAGE, DO NOT EXIT BEFORE COMPLETE.</b><BR>";
include 'includes/connect.php';
//grab all users from db
$Query = <<<SQL
SELECT * FROM (SELECT users.username
FROM users) DUMMY_ALIAS1
SQL;
if(!$result = $conn->query($Query)){
    die('There was an error running the query [' . $conn->error . ']');
}
$names="";
//throw the users into an array with "/" delimiter
$Result = mysqli_query($GLOBALS["___mysqli_ston"], $Query);
while($information = mysqli_fetch_array($Result)) {
    $allusers = $information['username'];
    if ($allusers != ""){
   $names = $allusers . "-" . $names;
    }
}
$howmanyusers=explode("-", $names);
array_pop($howmanyusers);

$tables = "DeliverySlip,PickupSlip,NewCustInfo";
$atable=explode(",",$tables); //i love exploding tables!

foreach ($howmanyusers as $updateduser){ //loop until were out of users
    foreach ($atable as $thename){ // loop until were out of tables1
if ( $updateduser != ""){
     echo "UPDATE `{$db}`.`{$thename}` SET `Driver` = '{$updateduser}/0' WHERE `{$thename}`.`Driver` = '{$updateduser}' <br>";
$update = <<<SQL
    UPDATE `{$db}`.`{$thename}`
    SET `Driver` = '{$updateduser}/0'
    WHERE `{$thename}`.`Driver` = '{$updateduser}'
SQL;
    if(!$result = $conn->query($update)){
        die('There was an error running the query [' . $conn->error . ']');
        }
}
    }
}
echo "<br><b>DONE UPDATING - DO NOT REFRESH PAGE / YOU CAN EXIT THIS WINDOW NOW!</b>";
?>