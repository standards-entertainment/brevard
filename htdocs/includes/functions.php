<?php

session_start();

function loggedin(){
	if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){
		return true;
	} else {
		return false;
	}
}
// Set default timezone to Eastern time.
date_default_timezone_set('America/New_York');

/*
//Create procedure for moving sql data.
DELIMITER $$
CREATE PROCEDURE move_to_archive(IN _id INT)
BEGIN
	START TRANSACTION;
	INSERT INTO archived
	SELECT *
	FROM registrations
	WHERE id = _id;
	DELETE
	FROM registrations
	WHERE id= _id;
	COMMIT;
END$$
DELIMITER ;
*/

/*
array_search(function)
if(function_exists[populate_event_from_template_attributes])
(end_function
)

*/


//Check if user is logged in.
if(loggedin()){
$my_id = $_SESSION['user_id'];
$user_query = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT username, user_level, cell FROM users WHERE id='$my_id'");
$run_user = mysqli_fetch_array($user_query);
$username = $run_user['username'];
$user_level = $run_user['user_level'];
$query_level = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT name FROM user_level WHERE id='$user_level'");
$run_level = mysqli_fetch_array($query_level);
$level_name = $run_level['name'];
$user_cell = $run_user['cell'];
}
$IP = $_SERVER['REMOTE_ADDR'];

?>
