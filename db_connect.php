<?php # Sample connection script - db_connect.php

// This file contains the database access information. 
// This file also establishes a connection to MySQL.
// To use this file correctly, comment out the connection you are NOT using.
// For localhost, USE lines 10-13 and comment out lines 18-21.
// For mstatewebdev.com, USE lines 18-21 and comment out lines 10-13.
// When you upload your files to the webserver, be SURE that localhost info is commented out!

/* Here is the localhost connection script from Fall 2014:*/
/*
$server = "localhost";
$user = "root";
$pw = "mustangs2";
$db = "webserverusername_db";
*/

// Here is the mstatewebdev.com server connection script from Fall 2014. 
// Edit the username, password and database with your correct information:
$server = "mstatewebdev.fatcowmysql.com";
$user = "kthorson";
$pw = "kthorson!11781359442";
$db = "kthorson_db";

// The following code connects to the specified database or provides the error. Don't change this!
$connect = mysqli_connect($server,$user,$pw,$db);
if(!$connect) {
	die("ERROR: Cannot connect to database $db on server $server using username $user (".mysqli_connect_errno().", ".mysqli_connect_error().")");
}

// The closing php statement is not required
