<?php
//	include 'assets/includes/config.php'; //No databases are used on actual version of the website
	include 'assets/includes/age_calculators.php';
//	include 'assets/includes/astrology_test.php'; // Disabled until a permanent API key is found.
//	include 'assets/includes/geolocalisation.php'; // Not used while Astrology is disabled
	include 'assets/includes/exoplanets.php';
// 	include 'assets/includes/launch_count.php'; // Disabled until a solution is found (see file's comments)
	include 'assets/includes/ovni_sightings.php';
	include 'assets/includes/trivia.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Mon Site</title>
	<!-- META -->
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <meta description="">
	<!-- CSS -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900" rel="stylesheet">
    <link rel="stylesheet" href="assets/styles/main.css">
</head>
<body>
<h3>Please enter your date of birth :</h3>
    <form method="post">
        <input type="date" name="date_of_birth">
        <input type="submit">
    </form>
</body>
</html>