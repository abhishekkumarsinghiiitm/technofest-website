<?php include('server.php'); ?>p1

<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>technofest</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="main.css">
	<link rel="stylesheet" href="css/fixed.css">
</head>
<body data-spy="scroll" data-target="#navbarResponsive">
	<!---start home-->
	<div id="home">

					<!---start navigation-->
	<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
		<a class="navbar-brand" href="#"><img src="img/l.png" height="10%" width="10%">ECHNOFEST</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link" href="#about">About</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#rules">Rules</a>
				</li>
				<li>
					<a class="nav-link" href="#register">Register</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="main1.php#home">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="main1.php#events">Events</a>
				</li>
			</ul>
		</div>
	</nav>
		<!---end navigation-->
		
	</div>
		<!---end home-->
	<!---start about-->
	<div id="about" class="offset text-light bg-dark">

		<div class="col-12 narrow text-center">
			<h1><br><br>ROBOSOCCER</h1></div>
			<p class="lead"><ul><h4>Description</h4>
<li>The traditional game of soccer played through the hands (or feet) of robots.</li>

<h4>Task</h4>
<li>To build a manually-controlled robot capable of playing soccer on an arena specially designed for robotic soccer match.<br> The robot would compete against others in 1 vs 1, or 2 vs 2 matches.</li>

<h4>Prizes</h4>
<li>Worth ₹15k</li></p>	
</ul>	
	
	</div>
		<!---end about-->
			<!---start events-->
	<div id="rules" class="offset">
	
		<!--- start of jumbotron-->

		<div class="jumbotron">
			<div class="narrow">
				<div class="col-12 text-center">
					<h1 class="heading"><br><br>RULES</h1></div>
					<div class="heading-underline"></div>
					<p class="lead"><ul><h4>Bot Specifications</h4>
<li>Both Wired and RC wireless bots are allowed.</li>
<li>Maximum bot size: 30 x 25 x 20 cm.</li>
<li>The weight limit of the robot for this competition is 5 kg.</li>
<li>The kicking mechanism of the robot should not damage the arena.</li>
<li>The design to stretch a robot's body or its parts may be allowed after a match has started, but it must remain a single centralised robot.</li>
<h4>General Rules</h4>
<li>Bots are not supposed to carry/hold the ball.</li>
<li>Ready-made LEGO kits are not allowed.</li>
<li>No last minute repairs will be allowed in the arena. However, each team can tak a time-out of 1 minute once during a match.</li>
<li>Bots would be checked for their safety before the match and may be discarded if found unsafe for other team or spectators.</li>
<li>Teams can have a maximum of 4 participants.</li>
</ul></p>
				
				</div>
			</div>
		</div>
		<!--- end of jumbotron-->
	</div>
		<!---end events-->
					<!---start team-->
	<div id="register" class="offset text-light bg-dark">
		<div class="narrow text-center">
			<h4>To register please login</h4>
			<a class="btn btn-outline-light btn-lg" href="main1.php#login">LOGIN</a>
			<p><br><br><br><br><br><br><br></p>
		</div>
	</div>
		<!---end team-->
					<!---start sponsors-->
	<div id="sponsors" class="offset">
		
	</div>
		<!---end sponsors-->
								
			
	<!---sources start-->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="bootstrap/4.1.3-dist/js/bootstrap.min.js"></script>
<script src="fontawesome/js/all.js"></script>
<!---sources end-->
</body>
</html>