<?php 
	if (!empty($_GET)) {
		// DATE RECUPERATION
		$year = $_GET['birth'];
		$url = 'http://exoplanetarchive.ipac.caltech.edu/cgi-bin/nstedAPI/nph-nstedAPI?table=exoplanets&select=pl_hostname,pl_disc&where=pl_disc%3C'.$year.'&order=pl_disc&format=JSON';
		// URL
		$path = '../cache/'.md5($year.'-exoplanets');
		if (file_exists($path))
			$forecast = file_get_contents($path);
		else {
			$forecast = file_get_contents($url);
			file_put_contents($path, $forecast);
		}
		$dataExos = json_decode($forecast, true);
	}

	echo '<pre>';
	print_r($dataExos);
	echo '</pre>';
	// Taille maintenant & taille avec la birth

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="#" method="GET">
		<input type="year" name="birth" class="dateInp">
		<input type="submit">
	</form>
</body>
</html>