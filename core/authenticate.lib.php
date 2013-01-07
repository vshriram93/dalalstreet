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

function loginForm() {
	$appId = FB_APP_ID;
	$loginForm =<<<LOGINBUTTON
		<div id="fb-root"></div>
		<script>
			(function(d, s, id) {
  				var js, fjs = d.getElementsByTagName(s)[0];
  				if (d.getElementById(id)) return;
  				js = d.createElement(s); js.id = id;
  				js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=$appId";
  				fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));
		</script>
LOGINBUTTON;
return $loginForm;
	
}