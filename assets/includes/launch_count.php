<?php

/**
 * ======================== Launch count API calls ===========================
 */

//TODO Find a POST method to get access to the API - contact the API provider to get more informations
//Current status of https://launchlibrary.net/1.1/ API in the project is disabled : couldn't access the data through regular PHP queries.
//Code is still a WIP and not working attemps were concerved for debugging.
//To access it, uncomment the corresponding line in index.php's includes.

	$launch   = "launch/";
	$missions = "mission/";
	$rocket   = "rocket";

	$aContext = array(
	    'http' => array(
	        'proxy' => 'tcp://192.168.0.2',
	        'request_fulluri' => true,
	        'user_agent' => '#',
	        'method' => 'GET',
	    ),
	);
	$cxContext = stream_context_create($aContext);
	$url = "https://launchlibrary.net/1.1/launch";
	$data = json_decode( file_get_contents($url), true,  $cxContext);
	echo '<pre>';
	print_r($data);
	echo '</pre>';

// $auth = base64_encode('LOGIN:PASSWORD');

// $aContext = array(
//     'http' => array(
//         'proxy' => 'tcp://192.168.0.2:3128',
//         'request_fulluri' => true,
//         'header' => "Proxy-Authorization: Basic $auth",
//     ),
// );

?>