<?php
        include '../../includes/age_calculators.php';
 		include '../../includes/astrology.php';
    	include '../../includes/exoplanets.php ';
 	    include '../../includes/launch_count.php';
	    include '../../includes/ovni_sightings.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Your Space Viz</title>
	<!-- META -->
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <meta description="">
	<!-- CSS -->
    <link rel="stylesheet" href="../../styles/main.css">
    <link href="https://fonts.googleapis.com/css?family=Space+Mono:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700" rel="stylesheet">
</head>
<body>
	<div class="recap-container">
		<header class="header"> 
			<div class="info-perso">
				<p class="name"><?= $_POST['name'] ?></p> 
				<p class="birth"> /<?= $_POST['date_of_birth'] ?>/</p>
				<div class="line"></div>
			</div>
			<h1>SUMMARY</h1> 
			<a href="#" alt="close" class="close">&times;</a> 
		</header>
	   	<div class="container">
			<div class="recap-event">
				<h2>Events</h2>
				<div class="line"></div>
					<p><strong>Closest rocket takeoff :</strong><?= $data_launch_close_op ?></p>
					<p><strong>Rocket name :</strong> <?= $data_launch_rocket_name ?></p>
					<p><strong>Rockets Launched since Birthday :</strong> <?= $data_launch_nbr ?></p>
			</div>
			<div class="square">
				<div class="recap-evolution">
					<h2>Evolution</h2>
					<div class="line"></div>
					<p><strong>Exoplanets discovered on your birthday :</strong> <?= $data_Exos_birth ?></p>
					<p><strong>Exoplanets discovered since your birthday :</strong> <?= ($data_Exos_current - $data_Exos_birth)  ?></p>
				</div>
				<div class="recap-time">
					<h2>Time</h2>
					<div class="line"></div>
						<p><strong>Your entire existance represents, compared to the Big Bang : </strong><?= $data_compare_bigbang ?><strong> % of its span time</strong></p>
						<p><strong>Your entire existance represents, compared to the Milky Way : </strong><?= $data_compare_milky ?><strong> % of its span time</strong></p>
						<p><strong>Your entire existance represents, compared to the Earth : </strong><?= $data_compare_earth ?><strong> % of its span time</strong></p>
				</div>
			</div>
			<div class="square">
				<div class="recap-astrology">
					<h2>Astrology</h2>
					<div class="line"></div>
						<p><strong>Born under :</strong> <?= $dataEphem[0]['CONSTELLATION'] ?></p>
						<p><strong>Moon was on stage :</strong> <?= $dataEphem[0]['TRAJECTOIRE'] ?></p>
						<p><strong>Moon was showing :</strong> <?= $dataEphem[0]['PHASE'] ?></p>
				</div>
				<div class="recap-funfact">
					<h2>Fun Facts</h2>
					<div class="line"></div>
						<p><strong>UFO sightings on your birth day :</strong> <?= $data_UFO_sightings ?></p>
				</div>
			</div>
	    </div>
    </div>
	<div class="container-landing">
		<header class="header">
			<div class="header-left">
				<div class="logo">
					<img src="../../img/logo.png" alt="logo">
				</div>
				<div class="info-perso">
					<p class="name"><?= $_POST['name'] ?></p> 
					<p class="birth"> /<?= $_POST['date_of_birth'] ?>/ </p>
					<div class="line"></div>
				</div>
			</div>
			<div class="header-right">
				<div class="summary">
					<img src="../../img/landing/share.png" alt="summary">
				</div>
				<a href="../../../index.php" class="newViz">
					<img src="../../img/landing/reset.png" alt="new">
				</a>
			</div>
		</header>		
		<div class="container">
			<div class="resume advance">
				<div class="title-container">
					<h1 class="title">EVOLUTION</h1>
					<div class="line"></div>
				</div>
				<div class="content-container">
					<div class="content-box">
						<div class="intro">N° of exoplanets discovered on your first year of existance :</div>
						<div class="data"><?= $data_Exos_birth ?></div>
					</div>
					<div class="content-box">
						<div class="intro">N° of exoplanets discovered during your life :</div>
						<div class="data"> <?= ($data_Exos_current - $data_Exos_birth) ?> </div>
					</div>
				</div>
			</div>
			<div class="resume clock">
				<div class="title-container">
					<h1 class="title">TIME</h1>
					<div class="line"></div>
				</div>
				<div class="content-container">
					<div class="content-box">
						<div class="intro">COMPARED TO THE BIGBANG's, YOUR LIFESPAN REPRESENTS :</div>
						<div class="data"><?= $data_compare_bigbang ?> %</div>
						<div class="data-text">
							<div class="wrap">
							<div class="text">
							<ul>
								<li><strong>OMPARED TO THE MILKY WAY's, YOUR LIFESPAN REPRESENTS : </strong> <?= $data_compare_milky ?> %</li>
								<li><strong>OMPARED TO THE EARTH's, YOUR LIFESPAN REPRESENTS : </strong><?= $data_compare_earth ?> %</li>

							</ul>
							</div>
							</div>
						</div>
					</div>
					<div class="content-box">
						<div class="intro">YOU'RE OLDER THAN YOU THINK, ON MERCURY YOU WOULD BE :</div>
						<div class="data"> <?= $date_compare_mercury ?> years old</div>
						<div class="data-text">
							<div class="wrap">
							<div class="text">
							<ul>
								<li><strong>ON VENUS :</strong> <?= $date_compare_venus ?> years old</li>
							</ul>
							</div>
							</div>
						</div>
					</div>
					<div class="content-box">
						<div class="intro">YOU'RE YOUNGER THAN YOU THINK, ON JUPITER YOU WOULD BE :</div>
						<div class="data"> <?= $date_compare_jupiter ?> years old</div>
						<div class="data-text">
							<div class="wrap">
							<div class="text">
							<ul>
                                <li><strong>ON MARS :</strong> <?= $date_compare_mars ?> years old</li>
								<li><strong>ON SATURN :</strong> <?= $date_compare_saturn ?> years old</li>
								<li><strong>ON URANUS :</strong> <?= $date_compare_uranus ?> years old</li>
								<li><strong>ON NEPTUNE :</strong> <?= $date_compare_neptune ?> years old</li>
								<li><strong>ON PLUTO :</strong> <?= $date_compare_pluto ?> years old</li>
							</ul>
							</div>
							</div>
						</div>
					</div>
					<div class="content-box">
						<div class="intro">EARTH ROTATIONS SINCE YOUR BIRTHDAY </div>
						<div class="data"><?= $data_compare_rotations ?></div>
					</div>
					<div class="content-box">
						<div class="intro">DISTANCE TRAVELED IN THE SOLAR SYSTEM :</div>
						<div class="data"><?php $data_compare_traveled ?> Km</div>
						<div class="data-text">
								This result is based on the rotations of Earth around the Sun. You are like a spaceman that travel a lot everyday don't forget it !
						</div>
					</div>
				</div>
			</div>
			<div class="resume evolutions">
				<div class="title-container">
					<h1 class="title">EVENTS</h1>
					<div class="line"></div>
				</div>
				<div class="content-container">
					<div class="content-box">
						<div class="intro">CLOSEST ROCKET TAKEOFF OF YOUR BIRTH DAY :</div>
						<div class="data"><?= $data_launch_close_op ?></div>
						<div class="data"><strong>The </strong><?= $data_launch_close_op_date ?> </div>
					</div>
					<div class="content-box">
						<div class="intro">ROCKET NAME :</div>
						<div class="data"><?= $data_launch_rocket_name ?></div>
						<div class="data-text">
							<a href="<?=$data_launch_rocket_wiki?>">Wiki link</a>
						</div>
					</div>
					<div class="content-box">
						<div class="intro">ROCKET LAUNCH SINCE YOUR BIRTHDAY :</div>
						<div class="data"> <?= $data_launch_nbr ?> rockets</div>
					</div>
				</div>
			</div>
			<div class="resume facts">
				<div class="title-container">
					<h1 class="title">FUN FACTS</h1>
					<div class="line"></div>
				</div>
				<div class="content-container">
					<div class="content-box">
						<div class="intro">UFO SIGHTINGS ON YOUR BIRTH DAY :</div>
						<div class="data"><?= $data_UFO_sightings ?></div>
					</div>
				</div>
			</div>
			<div class="resume astrology">
				<div class="title-container">
					<h1 class="title">ASTROLOGY</h1>
					<div class="line"></div>
				</div>
				<div class="content-container">
					<div class="content-box">
						<div class="intro">YOU'RE BORN UNDER THE SIGN OF THE</div>
						<div class="data"><?= $dataEphem[0]['CONSTELLATION'] ?></div>
					</div>
					<div class="content-box">
						<div class="intro">MOON WAS ON STAGE :</div>
						<div class="data"><?= $dataEphem[0]['TRAJECTOIRE'] ?></div>
					</div>
					<div class="content-box">
						<div class="intro">AND SHE WAS SHOWING HER :</div>
						<div class="data"><?= $dataEphem[0]['PHASE']?></div>
					</div>
				</div>
			</div>
			<div class="planet">
				<div class="planet-icon ufo"></div>
				<div class="planet-icon astro active"></div>
				<div class="planet-icon advances"></div>
				<div class="planet-icon event"></div>
				<div class="planet-icon age"></div>
				<img src="../../img/landing/planet.png" alt="planet" class="planet-img">
				<img src="../../img/landing/clickpoint.png" alt="click" class="clickpoint">
				<img src="../../img/landing/clickpoint.png" alt="click" class="clickpoint">
				<img src="../../img/landing/clickpoint.png" alt="click" class="clickpoint">
				<img src="../../img/landing/clickpoint.png" alt="click" class="clickpoint">
				<img src="../../img/landing/clickpoint.png" alt="click" class="clickpoint">
			</div>
		</div>
		<div class="share" data-href="https://Spaceviz.com/index.php" data-layout="button" data-size="small" data-mobile-iframe="true">
            <a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2FSpaceviz.com%2Findex.php&amp;src=sdkpreparse">Share the experience</a>
		</div>
		<div class="infos">
			<img src="../../img/landing/info.png" alt="infos">
		</div>
	</div>	
	<!-- SCRIPTS -->
	<script src="../../scripts/landing.js"></script>
</body>
</html>