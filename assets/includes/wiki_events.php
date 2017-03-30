<?php
$url = "http://www.vizgr.org/historical-events/search.php?begin_date=19450000&end_date=19501231";
$path = '../cache/'.md5('event_wiki');

	if (file_exists($path))
		$forecast = file_get_contents($path);
	else {
		$forecast = file_get_contents($url);
		file_put_contents($path, $forecast);
	}
	$dataWiki = json_encode($forecast, JSON_UNESCAPED_SLASHES);

// $data = file_get_contents($url);
// $data = json_encode($data, JSON_UNESCAPED_SLASHES);

echo '<pre>';
print_r($dataWiki);
echo '</pre>';
