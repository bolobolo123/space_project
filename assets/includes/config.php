<?php

/**
 * ======================== Database connection script ===========================
 */

//Is not used on actual version of the website, filled with default values for local hosting

define('DB_HOST','localhost');
define('DB_NAME','#');
define('DB_USER','root');
define('DB_PASS','root');

try {
	$pdo = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME,DB_USER,DB_PASS);
	$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
	die('Could not connect');
}

/**
 * ================================================================================
 */