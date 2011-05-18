<?php

$db_host = "localhost";
$db_username = "remanber_pstatus";
$db_password = "remanber";
$db_name = "remanber_pstatus";


// Finds voter's IP address

if ( isset($_SERVER["REMOTE_ADDR"]) ) 
{ 
	$user_ip=$_SERVER["REMOTE_ADDR"] . ' '; 
} else if ( isset($_SERVER["HTTP_X_FORWARDED_FOR"]) )
{ 
	$user_ip=$_SERVER["HTTP_X_FORWARDED_FOR"] . ' '; 
} else if ( isset($_SERVER["HTTP_CLIENT_IP"]) )
{ 
	$user_ip=$_SERVER["HTTP_CLIENT_IP"] . ' '; 
} 


// Connects to MySQL database

mysql_connect($db_host, $db_username, $db_password);
mysql_select_db($db_name);


// Figure session by UNIX Time

function vote_session($cur_time) {

	// Session 1 start and end times

	$Start1 = 1306504800;
	$End1 = 1306612800;
	

	// Session 2 start and end times
	
	$Start2 = 1306675800;
	$End2 = 1306783800;


	// Session 3 start and end times

	$Start3 = 1307107800;
	$End3 = 1307214000;


	// Session 4 start and end times

	$Start4 = 1307280600;
	$End4 = 1307386800;


	// Returns session # based on where current time falls

	if ( ($cur_time >= $Start1) && ($cur_time <= $End1) ) {
		return 1;
	} else if ( ($cur_time >= $Start2) && ($cur_time <= $End2) ) {
		return 2;
	} else if ( ($cur_time >= $Start3) && ($cur_time <= $End3) ) {
		return 3;
	} else if ( ($cur_time >= $Start4) && ($cur_time <= $End4) ) {
		return 4;
	} else {
		return 5; // Returns 5 if time is out of specified range
	}

}


// Return grade depending on integer input

function grade($integer) {

	switch($integer) {
		case 1:
			return 'F';
			break;
		case 2:
			return 'C';
			break;
		case 3:
			return 'B';
			break;
		case 4:
			return 'A';
			break;
		default:
			return 'ERR';
	}

}

?>


