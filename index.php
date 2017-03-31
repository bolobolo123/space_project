<?php
	        include 'assets/includes/age_calculators.php';
	 		include 'assets/includes/astrology.php';
	    	include 'assets/includes/exoplanets.php ';
	 	    include 'assets/includes/launch_count.php';
		    include 'assets/includes/ovni_sightings.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Home</title>
	<!-- META -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <meta description="">
	<!-- CSS -->
    <link rel="stylesheet" href="assets/styles/main.css">
    <link href="https://fonts.googleapis.com/css?family=Space+Mono:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700" rel="stylesheet">
</head>
<body>
	<div class="container-door">
        <div class="loading-message">Processing...</div>
		<div class="left">
			<div class="logo">
				<img src="assets/img/logo.png" alt="spaceviz-logo">
			</div>
		</div>
		<div class="right"></div>
		<div class="container-birth">
			<form action="./assets/views/pages/landing.php" method="POST" class="form-birth">
				<div class="inputs">
					<label for="name">ENTER YOUR NAME</label>
					<input type="text" name="name" id="name" autofocus>
					<label for="birth">ENTER YOUR BIRTH DATE</label>
					<input type="date" name="date_of_birth" id="birth">
				</div>
				<div class="code-form">
					<div class="numbers">
						<div class="number">1</div>
						<div class="number">2</div>
						<div class="number">3</div>
						<div class="number">4</div>
						<div class="number">5</div>
						<div class="number">6</div>
						<div class="number">7</div>
						<div class="number">8</div>
						<div class="number">9</div>
						<div class="number">0</div>
					</div>
					<div class="submit">
						<input type="submit" name="birthdate" value="VALID">
					</div>
				</div>
			</form>
		</div>
	</div>
	<!-- SCRIPTS -->
	<script src="assets/scripts/home.js"></script>
</body>
</html>