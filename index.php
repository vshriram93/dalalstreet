<?php

/**
 * Project	: Dalal Street
 * Author 	: Shriram
 * Author 	: Hari
 * Concept	: Stock
 */

/// Prevent direct access to php files 
define("__DALALSTREET__", "DALAL STREET");

/// Location of source folder
$sourceFolder = substr($_SERVER['SCRIPT_FILENAME'], 0, strrpos($_SERVER['SCRIPT_FILENAME'], '/'))."/core";

/// Location of Script folder for front end purpose
$scriptFolder = substr($_SERVER['SCRIPT_NAME'], 0, strrpos($_SERVER['SCRIPT_NAME'], '/'))."/core";

/// If config file is not defined then code will  stop executing
$config = @include_once($sourceFolder."/config.inc.php");

/// If config file is not defined then code will stop executing
if($config !== "DALAL IS READY") {
	//  If config does not exist or not configured.
	exit(0);
}

/// Define $userId;
/// This will be content of questions or login page.
$CONTENT = "";

/// ERROR STRING , WARNING STRING AND INFORMATION STRING
$WARNINGSTRING = "";
$INFOSTRING = "";
$ERRORSTRING = "";

/// define FOOTER AND HEADER
$HEADER = "";
$FOOTER = "";
$facebook = "";



/// Get FB Id FOR User to log in
require_once($sourceFolder."/fbapi.lib.php");
initFBApi();
$userId = $facebook->getUser();

/// Contains functions which are common to many tasks and very frequently used.
require_once($sourceFolder."/common.lib.php");

/// connect to Database
connectDB();

/// Include all required libraries
require_once($sourceFolder."/graph.lib.php");
require_once($sourceFolder."/authenticate.lib.php");
require_once($sourceFolder."/parser.lib.php");
require_once($sourceFolder."/template.lib.php");
require_once($sourceFolder."/content.lib.php");

/// parses the server address with actions
parseAddress();

if(!getTemplate()) {
///	Exit When Template is Not Found
	exit(0);
}

//echo "Coming Soon :) <br/>";


    
?>
