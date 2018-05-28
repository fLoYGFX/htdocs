<?php

$nav = '

<!-- navigation -->
<div class="nav-links">
	<nav class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php"><h1>Team Effect</h1></a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav link-effect">
					<li class="active"><a href="index.php">Startpage</a></li>
					<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span data-hover="Kalender">Kalender:</span> <b class="caret"></b></a>
							<ul class="dropdown-menu agile_short_dropdown">
								<li><a href="csgo/kalender/matches.php">N&auml;chste Matches</a></li>
								<li><a href="csgo/kalender/training.php">Trainingsplan</a></li>

							</ul>
					</li>
					<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span data-hover="Maps">Maps:</span> <b class="caret"></b></a>
							<ul class="dropdown-menu agile_short_dropdown">
								<li><a href="csgo/maps/mirage.php">Mirage</a></li>
								<li><a href="csgo/maps/cache.php">Cache</a></li>
								<li><a href="csgo/maps/overpass.php">Overpass</a></li>
								<li><a href="csgo/maps/train.php">Train</a></li>
								<li><a href="csgo/maps/inferno.php">Inferno</a></li>
							</ul>
					</li>
          <li><a href="csgo/scripts/scripts.php">Scripts</a></li>
          <li><a href="csgo/configs/config.php">Configs</a></li>
					<li><a href="login.php?logout=true">Logout</a></li>
				</ul>
			</div>
		</div>
	</nav>
</div>
<!-- /navigation -->
';




?>
