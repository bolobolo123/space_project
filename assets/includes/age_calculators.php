<?php
/**
 * ============= Dates processing and formating ==============
 */

    $date_of_birth    = date_create($_POST['date_of_birth']);
    $date_incremented = strtotime('+1 day', strtotime($_POST['date_of_birth']));
    $date_incremented = date('Y-m-d', $date_incremented);
    $timestamp        = time();
    $current_year     = date('Y');
    $year_of_birth    = date_format($date_of_birth, 'Y');
    $month_of_birth   = date_format($date_of_birth, 'm');
    $day_of_birth     = date_format($date_of_birth, 'd');
    $age              = $current_year - $year_of_birth;

/**
 * ===================== Dates formating =====================
 */

    $date_formated_unix      = date_format($date_of_birth, 'U');
    $date_formated_UFO       = date_format($date_of_birth, 'Y/m/d');
    $date_formated_UFO_2     = date_format(date_create($date_incremented), 'Y/m/d');
    $date_formated_trivia    = date_format($date_of_birth, 'Ymd');
    $date_ts_formated_trivia = date('Ymd');
    $date_formated_launch    = date('Y-m-d');

/**
 * =================== Dates manipulation =====================
 */

    $data_compare_bigbang   = number_format((($age * 100)/1.35E10), 8);
    $data_compare_milky     = number_format((($age * 100)/1.32E10), 8);
    $data_compare_earth     = number_format((($age * 100)/4.57E9), 8);
    $data_compare_rotations = number_format((($age * 365)/0.99726968), 2);

/**
 * ============================================================
 */

echo '<pre>';
//print_r($result);
echo '<h4>/////////////////////////////////////Age calculators API/////////////////////////////////////</h4>';
echo '<br/>';
print_r('Your existence represents '.$data_compare_bigbang.'% of the bigbang age');
echo '<br/>';
print_r('Your existence represents '.$data_compare_milky.'% of the milky age');
echo '<br/>';
print_r('Your existence represents '.$data_compare_earth.'% of the earth age' );
echo '<br/>';
print_r('During your existence the earth rotated '.$data_compare_rotations.' times');
echo '</pre>';
