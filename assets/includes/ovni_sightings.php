<?php

/**
 * ======= Get the number of UFO sightings on birthday =======
 */


$result = file_get_contents('https://ufo-api.herokuapp.com/api/sightings/search?from='.$date_formated_UFO.'&to='.$date_formated_UFO_2.'&limit=200');
$result = json_decode($result);

$data_UFO_sightings = $result->sightingsReturned;


echo '<pre>';
echo '<br/>';
echo '<h4>/////////////////////////////////////UFO sightings API/////////////////////////////////////</h4>';
echo '<br/>';
print_r('sightings on your birthday : '.$data_UFO_sightings);
echo '</pre>';

/**
 * ===========================================================
 */
