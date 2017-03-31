
<?php

/**
 * ======================== Exoplanets API calls ===========================
 */

        $url = 'http://exoplanetarchive.ipac.caltech.edu/cgi-bin/nstedAPI/nph-nstedAPI?table=exoplanets&select=pl_hostname,pl_disc&where=pl_disc%3C' . ($year_of_birth+1). '&order=pl_disc&format=JSON';
        $forecast = file_get_contents($url);
        $data_Exos_birth = json_decode($forecast, true);

        $url = 'http://exoplanetarchive.ipac.caltech.edu/cgi-bin/nstedAPI/nph-nstedAPI?table=exoplanets&select=pl_hostname,pl_disc&where=pl_disc%3C' . $current_year . '&order=pl_disc&format=JSON';
        $forecast = file_get_contents($url);
        $data_Exos_current = json_decode($forecast, true);

        $data_Exos_birth   = count($data_Exos_birth);
        $data_Exos_current = count($data_Exos_current);

