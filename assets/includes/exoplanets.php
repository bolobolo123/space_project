<?php 

        $url = 'http://exoplanetarchive.ipac.caltech.edu/cgi-bin/nstedAPI/nph-nstedAPI?table=exoplanets&select=pl_hostname,pl_disc&where=pl_disc%3C' . $year_of_birth . '&order=pl_disc&format=JSON';
        // URL
        $path = '../cache/' . md5($year_of_birth . '-exoplanets');
        if (file_exists($path))
            $forecast = file_get_contents($path);
        else {
            $forecast = file_get_contents($url);
            file_put_contents($path, $forecast);
        }
        $data_Exos_birth = json_decode($forecast, true);

        $url = 'http://exoplanetarchive.ipac.caltech.edu/cgi-bin/nstedAPI/nph-nstedAPI?table=exoplanets&select=pl_hostname,pl_disc&where=pl_disc%3C' . $current_year . '&order=pl_disc&format=JSON';
        // URL
        $path = '../cache/' . md5($current_year . '-exoplanets');
        if (file_exists($path))
            $forecast = file_get_contents($path);
        else {
            $forecast = file_get_contents($url);
            file_put_contents($path, $forecast);
        }
        $data_Exos_current = json_decode($forecast, true);

        $data_Exos_birth = count($data_Exos_birth);
        $data_Exos_current = count($data_Exos_current);

/**
 * ======================== Exoplanets API calls ===========================
 */

	echo '<pre>';
    echo '<h4>/////////////////////////////////////Exoplanets API/////////////////////////////////////</h4>';
    echo '<br/>';
	print_r('nbr of exoplanets discovered on your birthday : '.$data_Exos_birth);
	echo '<br/>';
	print_r('nbr of exoplanets discovered during your life : '.($data_Exos_current - $data_Exos_birth));
	echo '</pre>';