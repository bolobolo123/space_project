<?php
/**
 * ======= Get the number of UFO sightings on birthday =======
 */

$result = file_get_contents('https://ufo-api.herokuapp.com/api/sightings/search?from='.$date_formated_UFO.'&to='.$date_formated_UFO_2.'&limit=15000');
$result = json_decode($result);
//TODO Delete this part
echo '<pre>';
print_r('sightings on your birthday : '.$result->sightingsReturned);
echo '</pre>';

/**
 * ===========================================================
 */
