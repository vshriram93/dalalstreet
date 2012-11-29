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

/// If config file is not defined then code will  stop executing
$config = @include_once($sourceFolder."/config.inc.php");

/// If config file is not defined then code will stop executing
if($config !== "DALAL IS READY") {
	//  If config does not exist or not configured.
	exit(0);
}

/// Contains functions which are common to many tasks and very frequently used.
require_once($sourceFolder."/common.lib.php");

/// connect to Database
connectDB();





/// Include all required libraries
require_once($sourceFolder."/graph.lib.php");
require_once($sourceFolder."/authenticate.lib.php");
require_once($sourceFolder."/parser.lib.php");



echo "Coming Soon :) <br/>";
print_r($GLOBALS);

    
?>
