<?php
include_once("../includes/connect.php");
include("../functions.php");
if(isset($_GET["sort_order"])) {
	$id_ary = explode(",",$_GET["sort_order"]);
	for($i=0;$i<count($id_ary);$i++) {		
		$sql1 = "UPDATE deliveryslip SET Order1='" . $i . "' WHERE ID=". $id_ary[$i];
		$sql2 = "UPDATE pickupslip SET Order1='" . $i . "' WHERE ID=". $id_ary[$i];
		$sql3 = "UPDATE newcustinfo SET Order1='" . $i . "' WHERE ID=". $id_ary[$i];
		mysqli_query($conn, $sql1)or die("database error:". mysqli_error($conn));
		mysqli_query($conn, $sql2)or die("database error:". mysqli_error($conn));
		mysqli_query($conn, $sql3)or die("database error:". mysqli_error($conn));
	}
}
?>