<?php 
	// Key & Zone
	$key  = 'YWxsOzAuNTMyNjQ3MDAgMTQ5MDY5MjY5MztTV2RzYTJAZDsyNDU3ODQwLjg4NzY2';
	$timeZone = 'Europe%2FParis';

	// DATE
	if (!empty($_GET)) {
		// DATE RECUPERATION
		$date = date_create($_GET['date']);
		$year = date_format($date, 'Y');
		$month = date_format($date, 'm');
		$day = date_format($date, 'd');
		// URL
		$url  = 'http://www.lunopia.com/call?what=ephem&timeZone='.$timeZone.'&when=specDate&day='.$day.'&month='.$month.'&year='.$year.'&key='.$key;
		$path = '../cache/'.md5(date_format($date, 'Y-m-d').'-ephem');
		if (file_exists($path))
			$forecast = file_get_contents($path);
		else {
			$forecast = file_get_contents($url);
			file_put_contents($path, $forecast);
		}
		$dataEphem = json_decode($forecast, true);
	}

/*
			Age (20) * 100
			_______________		BIG BANG >	0,000000148%
			13 500 000 000

			Age (20) * 100
			_______________ 	VOIE LACTEE > PAREIL
			13 200 000 000

			Age (20) * 100
			_______________ 	TERRE > 0,0000004376%
			 4 570 000 000

			 Age (19) * 365
			 _______________ 	Nombre de rotation terre sur elle-même > 6 954
			 0.99726968
*/



?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Astrology</title>
</head>
<body>
	<form action="#" method="GET">
		<input type="date" name="date" class="dateInp">
		<input type="text" name="city" class="city">
		<input type="submit">
	</form>
	<div>
		Vous êtes née sous le signe du <?= $dataEphem[0]['CONSTELLATION'] ?>
		la lune était en phase <?= $dataEphem[0]['TRAJECTOIRE'] ?> 
		et montrait son <?= $dataEphem[0]['PHASE'] ?>
	</div>

</body>
</html>
