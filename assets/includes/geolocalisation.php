<?php

/**
 * ===================== Geoloc formating =====================
 */

// Formating used in Astrology API, see astrology.php for more informations

$geoloc = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$_SERVER['REMOTE_ADDR']));
$time_zone = '';

if($geoloc['geoplugin_continentCode'] == 'EUR')
{
    $time_zone = 'EUROPE%2F'.$geoloc['geoplugin_city'];
}
else if($geoloc['geoplugin_continentCode'] == 'ASIA'){
    $time_zone = 'ASIA%2F'.$geoloc['geoplugin_city'];
}
else if($geoloc['geoplugin_continentCode'] == 'NA'){
    $time_zone = 'NORTHAMERICA%2F'.$geoloc['geoplugin_city'];
}
else if($geoloc['geoplugin_continentCode'] == 'SA'){
    $time_zone = 'SOUTHAMERICA%2F'.$geoloc['geoplugin_city'];
}
else if($geoloc['geoplugin_continentCode'] == 'AFR'){
    $time_zone = 'AFRICA%2F'.$geoloc['geoplugin_city'];
}

/**
 * ============================================================
 */
