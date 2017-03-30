<?php

/**
 * ======================== Lunopia API calls ===========================
 */

//TODO : Wait for provider's response and get a permanent API key for LunopiaAPI.
//To access it, uncomment the corresponding line in index.php's includes.
//Following key was a 2 hours trial and is expired.

	$key  = 'YWxsOzAuNTMyNjQ3MDAgMTQ5MDY5MjY5MztTV2RzYTJAZDsyNDU3ODQwLjg4NzY2';

	if (!empty($_GET)) {
		// DATE RECUPERATION
		$date = date_create($_GET['date']);
		$year = date_format($date, 'Y');
		$month = date_format($date, 'm');
		$day = date_format($date, 'd');
		$url  = 'http://www.lunopia.com/call?what=ephem&timeZone='.$time_zone.'&when=specDate&day='.$day.'&month='.$month.'&year='.$year.'&key='.$key;
		$path = '../cache/'.md5(date_format($date, 'Y-m-d').'-ephem');

		// $url  = 'http://www.lunopia.com/call?what=ephem&timeZone='.$time_zone.'&when=specDate&day='.$day_of_birth.'&month='.$month_of_birth.'&year='.$year_of_birth.'&key='.$key;
		// $path = '../cache/'.md5(date_format($date_of_birth, 'Y-m-d-ephem'));

		if (file_exists($path))
			$forecast = file_get_contents($path);
		else {
			$forecast = file_get_contents($url);
			file_put_contents($path, $forecast);
		}
		$dataEphem = json_decode($forecast, true);
	}

/**
 * =========================================================================
 */