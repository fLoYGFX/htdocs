<?php

$nav = '

<!-- navigation -->
<div class="nav-links">
	<nav class="navbar navbar-inverse">
		<div class="container" style="height:50px; padding-top: 0px" >
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="../../index.php"><h1>Team Effect</h1></a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav link-effect">
					<li class="active"><a href="index.php">Startpage</a></li>
					<li class="dropdown">
							<a href="../kalender/kalender.php" >Kalender</a>
							<ul class="dropdown-menu agile_short_dropdown">
								<li><a href="csgo/kalender/matches.php">N&auml;chste Matches</a></li>
								<li><a href="csgo/kalender/training.php">Trainingsplan</a></li>

							</ul>
					</li>
					<li class="">
							<a href="maps.php">Maps</a>

					</li>
          <li><a href="csgo/scripts/scripts.php">Scripts</a></li>
          <li><a href="csgo/configs/config.php">Configs</a></li>
					<li><a href="../../login.php?logout=true">Logout</a></li>
				</ul>
			</div>
		</div>
	</nav>
</div>
<!-- /navigation -->
';




?>
