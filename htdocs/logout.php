<?php
	include 'includes/connect.php';
	include 'includes/functions.php';
	
session_destroy();

header('location: index.php');
	
?>
