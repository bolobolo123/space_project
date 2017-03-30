<?php
/**
 * ================== Displaying API Values outside the front to check and debut quicker ======================
 * TODO Disable the include to avoid bugs in html/css formating
 */

echo '<pre>';
echo '<h4>/////////////////////////////////////UFO sightings API/////////////////////////////////////</h4>';
echo '<br/>';
print_r('sightings on your birthday : '.$data_UFO_sightings);
echo '</pre>';

echo '<pre>';
echo '<h4>/////////////////////////////////////Exoplanets API/////////////////////////////////////</h4>';
echo '<br/>';
print_r('nbr of exoplanets discovered on your birthday : '.$data_Exos_birth);
echo '<br/>';
print_r('nbr of exoplanets discovered during your life : '.($data_Exos_current - $data_Exos_birth));
echo '</pre>';

echo '<pre>';
echo '<h4>/////////////////////////////////////Age calculators API/////////////////////////////////////</h4>';
echo '<br/>';
print_r('Your existence represents '.$data_compare_bigbang.'% of the bigbang age');
echo '<br/>';
print_r('Your existence represents '.$data_compare_milky.'% of the milky age');
echo '<br/>';
print_r('Your existence represents '.$data_compare_earth.'% of the earth age' );
echo '<br/>';
print_r('During your existence the earth rotated '.$data_compare_rotations.' times');
echo '<br/>';
print_r('You traveled '.$data_compare_traveled.' km in space');
echo '<br/>';
print_r('You are '.$date_compare_mercury.' years old on Mercury');
echo '<br/>';
print_r('You are '.$date_compare_venus.' years old on Venus');
echo '<br/>';
print_r('You are '.$date_compare_mars.' years old on Mars');
echo '<br/>';
print_r('You are '.$date_compare_jupiter.' years old on Jupiter');
echo '<br/>';
print_r('You are '.$date_compare_saturn.' years old on Saturn');
echo '<br/>';
print_r('You are '.$date_compare_uranus.' years old on Uranus');
echo '<br/>';
print_r('You are '.$date_compare_neptune.' years old on Neptune');
echo '<br/>';
print_r('You are '.$date_compare_pluto.' years old on Pluto');
echo '<br/>';
echo '</pre>';

echo '<pre>';
echo '<h4>/////////////////////////////////////LaunchLibrary API data/////////////////////////////////////</h4>';
echo '<br/>';
print_r('Operation name closest from your birthdate: '.$data_launch_close_op.' the '.$data_launch_close_op_date);
echo '<br/>';
print_r('Wiki page : <a href="'.$data_launch_rocket_wiki.'">'.$data_launch_rocket_name.'</a> <br/>');
print_r('Number of launches since your birth: '.$data_launch_nbr);
echo '</pre>';

echo '<pre>';
echo '<h4>/////////////////////////////////////Lunopia API/////////////////////////////////////</h4>';
echo '<br/>';
print_r('You\'re born under the sign of the'.$dataEphem[0]['CONSTELLATION']);
echo '<br/>';
print_r('Moon was on stage'.$dataEphem[0]['TRAJECTOIRE']);
echo '<br/>';
print_r('Was showing'.$dataEphem[0]['PHASE']);
echo '</pre>';