<?php
if(!defined('__DALALSTREET__')) { 
	header($_SERVER['SERVER_PROTOCOL'].' 403 Forbidden');
	echo "<h1>403 Forbidden<h1><h4>You are not authorized to access the page.</h4>";
	echo '<hr/>'.$_SERVER['SERVER_SIGNATURE'];
	exit(1);
}
/**
 * Project	: Dalal Street
 * Author 	: Shriram
 * Author 	: Hari
 * Concept	: Stock
 */

/*******MYSQL SETTINGS************************/
// defining the ip address of the mysql server.
define("MYSQL_SERVER","localhost");

// defining the username to connect to the database.
define("MYSQL_USERNAME","root");

// defining the password used to connect to the database.
define("MYSQL_PASSWORD","root");

// defining the name of the database to connect to.
define("MYSQL_DATABASE","dalalstreet");


/*********FACEBOOK CONNECT *********************/

// connect to FB app

// defining the FB APP ID to connect.
define("FB_APP_ID","");


return "DALAL IS READY";
?>