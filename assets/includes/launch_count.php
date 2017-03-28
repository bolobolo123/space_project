<?php

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