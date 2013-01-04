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

