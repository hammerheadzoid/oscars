<?php

// This function makes the connection to the database
function dbConnect()
{
	// Connect to the database.
	//*********If on Localhost******************
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	/*****************************************/	

	/********* If on live *********************
	$dbhost = 'mysql1713int.cp.blacknight.com';
	$dbuser = 'u1286261_alpha';
	$dbpass = 'ha15dod272';
	******************************************/

	$conn = mysql_connect($dbhost, $dbuser, $dbpass);
	if(! $conn ) { die('Could not connect: ' . mysql_error()); }
	else { echo 'Connected successfully'; }

	//mysql_select_db( 'db1286261_alpha' );
	mysql_select_db( 'oscars' );
}

?>

