<?php
$mysqli = new mysqli('localhost','root','root','test1');

if(isset($_POST["submit"])) {
$id_ary = explode(",",$_POST["row_order"]);
for($i=0;$i<count($id_ary);$i++) {
$mysqli->query("UPDATE php_questions SET row_order='" . $i . "' WHERE id=". $id_ary[$i]);
}
}
$result = $mysqli->query("SELECT * FROM php_questions ORDER BY row_order");
?>
<html lang="en">
<head>
  <title>Sorting MySQL Row Order using jQuery</title>
  <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
  <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
  <style>
  body{width:610px;}
  #sortable-row { list-style: none; }
  #sortable-row li { margin-bottom:4px; padding:10px; background-color:#BBF4A8;cursor:move;}
  .btnSave{padding: 10px 20px;background-color: #09F;border: 0;color: #FFF;cursor: pointer;margin-left:40px;}  
  #sortable-row li.ui-state-highlight { height: 1.0em; background-color:#F0F0F0;border:#ccc 2px dotted;}
  </style>
  <script>
$(function() {
$( "#sortable-rows" ).sortable({
placeholder: "ui-state-highlight",
update: function( event, ui ) {
updateDisplayOrder();
}
});
});
  function saveOrder() {
	var selectedLanguage = new Array();
	$('ul#sortable-row li').each(function() {
	selectedLanguage.push($(this).attr("id"));
	});
	document.getElementById("row_order").value = selectedLanguage;
  }
  </script>
</head>
<body>

<form name="frmQA" method="POST" />
<input type = "hidden" name="row_order" id="row_order" /> 
<ul id="sortable-rows">
<?php
$sql = "SELECT id, question FROM php_questions ORDER BY display_order";
$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
while( $rows = mysqli_fetch_assoc($resultset) ) {
?>
<li id=<?php echo $rows["id"]; ?>><?php echo $rows["question"]; ?></li>
<?php } ?>
</ul>
</ul>
<input type="submit" class="btnSave" name="submit" value="Save Order" onClick="saveOrder();" />
</form> 
</body>
</html>