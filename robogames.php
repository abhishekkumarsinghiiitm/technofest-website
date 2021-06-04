<?php include('server.php'); ?>

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
				<li class="nav-item active">
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
			<!---start events-->
	<div id="events" class="offset">
		<!--- start of jumbotron-->
<div class="home-inner">
				</div>

		<div class="jumbotron">
			<div class="narrow">
				<div class="col-12 text-center">
					<h1 class="heading text-light"><br>ROBOGAMES</h1>
					<div class="heading-underline"></div>
				</div>
				<div class="row text-center">
					<div class="col-sm-3">
						<div class="placeBox">
							<a href="robosoccer.php" id="imglink">
							<div class="imgBx">
								<img src="img1/robosoccer.jpg" class="img-fluid">
							</div>
							<div class="content">
								<h3>ROBOSOCCER</h3>
							</div>
						</a>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="placeBox">
							<a href="mega_robowar.php" id="imglink">
							<div class="imgBx">
								<img src="img1/mega_robowar.jpg" class="img-fluid">
							</div>
							<div class="content">
								<h3>MEGA ROBOWAR</h3>
							</div>
						</a>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="placeBox">
							<a href="mini_robowar.php" id="imglink">
							<div class="imgBx">
								<img src="img1/mini_robowar.jpg" class="img-fluid">
							</div>
							<div class="content">
								<h3>MINI ROBOWAR</h3>
							</div>
						</a>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="placeBox">
							<a href="blazing_wheel.php" id="imglink">
							<div class="imgBx">
								<img src="img1/blazing_wheel.jpg" class="img-fluid">
							</div>
							<div class="content">
								<h3>BLAZING WHEEL</h3>
							</div>
						</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--- end of jumbotron-->
	</div>
		<!---end events-->
					
			
	<!---sources start-->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="bootstrap/4.1.3-dist/js/bootstrap.min.js"></script>
<script src="fontawesome/js/all.js"></script>
<!---sources end-->
</body>
</html>