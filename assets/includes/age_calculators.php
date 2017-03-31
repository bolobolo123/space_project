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

    $data_compare_bigbang   = number_format((($age * 100)/1.35E10),8);
    $data_compare_milky     = number_format((($age * 100)/1.32E10),8);
    $data_compare_earth     = number_format((($age * 100)/4.57E9),8);
    $data_compare_rotations = number_format((($age * 365)/0.99726968),2);
    $data_compare_traveled  = number_format(($age * 9.3732E7),2);

    $data_compare_haley     = number_format(2061 - $current_year);
    $date_compare_mercury   = number_format((($age * 365)/87.969),2);
    $date_compare_venus     = number_format((($age * 365)/224.701),2);
    $date_compare_mars      = number_format((($age * 365)/686.980),2);
    $date_compare_jupiter   = number_format((($age * 365)/4332.6),2);
    $date_compare_saturn    = number_format((($age * 365)/10759.2),2);
    $date_compare_uranus    = number_format((($age * 365)/30688.4),2);
    $date_compare_neptune   = number_format((($age * 365)/601813),2);
    $date_compare_pluto     = number_format((($age * 365)/90469.7),2);

/**
 * ============================================================
 */
