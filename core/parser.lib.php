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

function parseAddress() {
	global $CONTENT;
	/**
	  *  Check for actions.If action is set then validate for
	  *  Admin , judge , Login , profile ( View Users Profile ).
	 
	if(isset($_GET['action'])) {
		$action = $_GET['action'];
		if($action == 'login' || $action == 'logout')  return $CONTENT = getLoginPage();
		if($action == 'admin') return $CONTENT = adminPage();
		if($action == 'judge') return $CONTENT = adminPage();
	}
	if(!isset($_GET['page']) || $_GET['page'] =='/')  return $CONTENT = "WAIT FOR HOME PAGE";
	$urlRequest = explode("/",$_GET['page']);
	escape($urlRequest);

	// complete this if problems statement
	if($urlRequest[1] == 'problems') return $CONTENT = "WAIT"; 
	return $CONTENT = getContestPage($urlRequest);

*/
	return "Welcome";
}