<?php
/**
 * ======================== Lunopia API calls ===========================
 */

//TODO : Use Geoloc to get user's location and calculate his timezone automatically
// Geoloc wip because we couldn't test the API correctly locally.
    $time_zone = 'Europe%2FParis';
	$key  = 'YWxsOzAuMTEyMTQwMDAgMTQ5MDg5MDc3ODtTV2RzYTJAZDsyNDU3ODQzLjE4MDMx';

		$url  = 'http://www.lunopia.com/call?what=ephem&timeZone='.$time_zone.'&when=specDate&day='.$day_of_birth.'&month='.$month_of_birth.'&year=2016&key='.$key;
        $path = '../cache/'.md5(date_format($date_of_birth, 'Y-m-d-ephem'));

        $forecast = file_get_contents($url);
		$dataEphem = json_decode($forecast, true);

/**
 * =========================================================================
 */
