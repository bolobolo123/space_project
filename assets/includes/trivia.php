<?php

$url = 'www.vizgr.org/historical-events/search.php?format=json&query=space&begin_date='.$date_formated_trivia.'&end_date='.$date_ts_formated_trivia;
//$result = file_get_contents($url);
//$result = json_decode($result);

//TODO Make a working system with XML or find a way to convert it

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

$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);

$xml = simplexml_load_string($response);
print_r($xml);
print_r($login);




echo '<pre>';
print_r($response);
echo '</pre>';

