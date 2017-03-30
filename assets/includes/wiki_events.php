<?php
$url = "http://www.vizgr.org/historical-events/search.php?&format=json&begin_date=19450000&end_date=19501231";
$path = '../cache/'.md5('event_wiki');


$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_TIMEOUT => 300,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
        "cache-control: no-cache"
    ),
));

$dataWiki = curl_exec($curl);
$dataWiki = json_decode($dataWiki, true);
$err = curl_error($curl);
curl_close($curl);

// $xml = simplexml_load_string($dataWiki);


echo '<pre>';
print_r(count($dataWiki));
echo '</pre>';


	// if (file_exists($path))
	// 	$forecast = file_get_contents($path);
	// else {
	// 	$forecast = file_get_contents($url);
	// 	file_put_contents($path, $forecast);
	// }
	// $dataWiki = json_encode($forecast, JSON_UNESCAPED_SLASHES);



// $data = file_get_contents($url);
// $data = json_encode($data, JSON_UNESCAPED_SLASHES);


?>

