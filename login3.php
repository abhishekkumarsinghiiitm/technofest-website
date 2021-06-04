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
					<a class="nav-link" href="#home">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#about">About</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#events">Events</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#team">Team</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#sponsors">Sponsors</a>
				<li class="nav-item">
					<a class="nav-link" href="#contact_us">Contact us</a>
				</li>
								</li>
					<form method="POST" action="main1.php">	<button class="btn btnD1 bg-dark text-light" name="logout">LOGOUT</button></form>
				</li>


			</ul>
		</div>
	</nav>
		<!---end navigation-->

		<!--start landing page-->
		<div class="landing">
			<div class="home-wrap">
				<div class="home-inner">
				</div>
			</div>
		</div>
		<div class="caption text-center">
			<h1><?php if(isset($_SESSION["username"])): ?>
		<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
	<?php endif ?>to TECHNOFEST'19</h1>
			<h3>Fest of the year</h3>
			<a class="btn btn-outline-light btn-lg" href="#events">EVENTS</a>
		</div>
		<!--end landing page-->
		
	</div>
		<!---end home-->
	<!---start about-->
	<div id="about" class="offset">
		<div class="col-12 narrow text-center">
			<h1><br><br>TECHNOFEST'19</h1>
			<p class="lead">Technofest'19, as the name suggests and the motto paving its path ahead, is a two-day techno-managerial fest designed to empower a legacy of innovators through activities that inspire youth, honour role models and encourage creativity and problem-solving skills in today’s digital world.

Besides, providing an interactive platform for the cyber youth to present their innovations and ideas, it also gives them the rare opportunity to engage in conversations with the pioneers working on the digital frontiers and witness the revolutionary advances in science and technology. The fest is also jam packed with fun-tech events and quizzes.

The fest to be held on 10th-11th March 2019, resonates with the spirit of ABV-IIITM Gwalior where we strongly believe that challenges when tackled with innovation, leveraged with the power of technology, can provide breakthrough solutions to the community and in turn inspire the youth of today and tomorrow.</p>
<a class="btn bn-secondary btn-outline-dark btn-md" href="#register">REGISTER</a>			
		</div>
	</div>
		<!---end about-->
			<!---start events-->
	<div id="events" class="offset">
		<!--- start of jumbotron-->

		<div class="jumbotron">
			<div class="narrow">
				<div class="col-12 text-center">
					<h1 class="heading"><br><br>EVENTS</h1>
					<div class="heading-underline"></div>
				</div>
				<div class="row text-center">
					<div class="col-sm-3">
						<div class="placeBox">
							<a href="lrobogames.php" id="imglink">
							<div class="imgBx">
								<img src="img/robogames2.jpg" class="img-fluid">
							</div>
							<div class="content">
								<h3>ROBOGAMES</h3>
							</div>
						</a>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="placeBox">
							<a href="lsoftware.php" id="imglink">
							<div class="imgBx">
								<img src="img/software2.jpg" class="img-fluid">
							</div>
							<div class="content">
								<h3>SOFTWARE CORNER</h3>
							</div>
						</a>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="placeBox">
							<a href="ltakeoff.php" id="imglink">
							<div class="imgBx">
								<img src="img/takeoff2.jpg" class="img-fluid">
							</div>
							<div class="content">
								<h3>TAKE OFF</h3>
							</div>
						</a>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="placeBox">
							<a href="ltechnovation.php" id="imglink">
							<div class="imgBx">
								<img src="img/technovation2.jpg" class="img-fluid">
							</div>
							<div class="content">
								<h3>TECHNOVATION</h3>
							</div>
						</a>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="placeBox">
							<a href="lonsite.php" id="imglink">
							<div class="imgBx">
								<img src="img/onsite.jpg" class="img-fluid">
							</div>
							<div class="content">
								<h3>ONSITE</h3>
							</div>
						</a>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="placeBox">
							<a href="ldesign.php" id="imglink">
							<div class="imgBx">
								<img src="img/design2.jpg" class="img-fluid">
							</div>
							<div class="content">
								<h3>DESIGN EVENTS</h3>
							</div>
						</a>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="placeBox">
							<a href="lentrepreneur.php" id="imglink">
							<div class="imgBx">
								<img src="img/e2.jpg" class="img-fluid">
							</div>
							<div class="content">
								<h3>ENTREPRENEURIAL EVENTS</h3>
							</div>
						</a>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="placeBox">
							<a href="lgamiac.php" id="imglink">
							<div class="imgBx">
								<img src="img/gamiac.jpg" class="img-fluid">
							</div>
							<div class="content">
								<h3>GAMIAC</h3>
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
					
	
		<!---start contact_us-->
	<div id="contact_us" class="offset">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="headerText text-center">
						<h1><br><br>CONTACT US</h1>
					</div>
				</div>
			</div>
			<div class="row clearfix">
				<div class="offset-sm-2 col-sm-2">
					<form>
						<div class="form-group">
							
							<input type="text" name="" class="form-control" placeholder="Enter name">
						</div>
						<div class="form-group">
							<input type="text" name="" class="form-control" placeholder="Enter email">
						</div>
						<div class="form-group">
							<input type="tel" name="" class="form-control" placeholder="Enter phone number">
						</div>
						<div class="form-group">
							<input type="text" name="" class="form-control" placeholder="Enter subject">
						</div>
						<div class="form-group">
							<textarea class="form-control textarea" placeholder="Enter message"></textarea>
						</div>
						<button class="btn btnD1">SUBMIT</button>
					</form>
				</div>
			</div>
		</div>
		
	</div>
		<!---end contact_us-->
					
			
	<!---sources start-->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="bootstrap/4.1.3-dist/js/bootstrap.min.js"></script>
<script src="fontawesome/js/all.js"></script>
<!---sources end-->
</body>
</html>
