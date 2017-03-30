<?php

/**
 * ======================== Launch count API calls ===========================
 */



$headers = array(
    'Accept: application/json'
);

$ua = 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36';

// Instantiate curl
$curl = curl_init();
$url = 'https://launchlibrary.net/1.2/launch/'.$_POST['date_of_birth'].'/'.$date_formated_launch;
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
curl_setopt($curl, CURLOPT_USERAGENT, $ua);
$result = curl_exec($curl);
curl_close($curl);

// Json decode
$result = json_decode($result);

$data_launch_close_op = $result->launches[0]->name;
$data_launch_close_op_date = $result->launches[0]->windowstart;
$data_launch_nbr = $result->total;
$data_launch_rocket_name = $result->launches[0]->rocket->name;
$data_launch_rocket_wiki = $result->launches[0]->rocket->wikiURL;


echo '<pre>';
echo '<br/>';
echo '<h4>/////////////////////////////////////LaunchLibrary API data/////////////////////////////////////</h4>';
echo '<br/>';
print_r('Operation name closest from your birthdate: '.$data_launch_close_op.' the '.$data_launch_close_op_date);
echo '<br/>';
print_r('Wiki page : <a href="'.$data_launch_rocket_wiki.'">'.$data_launch_rocket_name.'</a> <br/>');
print_r('Number of launches since your birth: '.$data_launch_nbr);
echo '</pre>';



?>


