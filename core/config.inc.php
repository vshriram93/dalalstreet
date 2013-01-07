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
define("FB_APP_ID","192502374226520");

// defining the FB SECRET ID 
define("FB_APP_SECRET_ID","8ec6e1ce43448572e8b784b25743a3cf");

// Set Default time zone
date_default_timezone_set('Asia/Calcutta');


/*******CONFIGURATION SETTINGS************************/
/**
 * Error reporting level -
 * 0 - Turn off all error reporting
 * 1 - Report simple running errors
 * 2 - Reporting E_NOTICE can be good too (to report uninitialized variables or catch variable name misspellings ...)
 * 3 - Report all errors except E_NOTICE, This is the default value set in php.ini
 * 4 - Report all PHP errors (bitwise 63 may be used in PHP 3)
 * 5 - Report all PHP errors (bitwise 63 may be used in PHP 3) + Pragyan CMS Debugging Mode
 */
$error_level = 0;
switch($error_level) {
	case 0 : $error_text = 0; break;
	case 1 : $error_text = E_ERROR | E_WARNING | E_PARSE; break;
	case 2 : $error_text = E_ERROR | E_WARNING | E_PARSE | E_NOTICE; break;
	case 3 : $error_text = E_ALL ^ E_NOTICE;break;
	case 4 : $error_text = E_ALL; break;
	case 5 : $error_text = E_ALL; $debugSet='on'; break;
}
ini_set('error_reporting', $error_text);
ini_set('display_errors', 0);

/*****SESSION SETTINGS*********************************/
/**
  *	SESSION is stored in core/uploads/session.Give 777 permission to sessions.
  *
**/
$sessdir = $sourceFolder."/sessions";
if (!is_dir($sessdir)) { mkdir($sessdir, 0777); }
ini_set('session.save_path', $sessdir);
if(session_id() == '') session_start();


return "DALAL IS READY";
?>