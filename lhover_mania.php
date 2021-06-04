<?php include('server.php'); ?>

<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>technofest</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="main2.css">
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
					<a class="nav-link" href="#reg">Register</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="login3.php#home">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="login3.php#events">Events</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="profile.php#events">Profile</a>
				</li>
			</ul>
		</div>
	</nav>
		<!---end navigation-->
		
	</div>
		<!---end home-->
	
	<div id="about" class="offset text-light" >	
		<div class="fixed-background">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="headerText text-center">
						<h1><br><br><br>Hover Mania<br><br></h1>
					</div>
				</div>
			</div>
			<div class="row clearfix">
				<div class="offset-sm-1 col-sm-9">
<ul><h4>Description</h4>
<li>Ever your body soared with adrenaline when your favourite wrestler is being thrown out of the ring in Royal Rumble? Fascinated by the wrestling giants competing against each other for honour, pride and glory!  Amazed by the jaw-dropping tactics used. If so, then this is the event for you.
</li><br>

<h4>Prizes</h4>
<li>Worth ₹20k</li>	
</ul>
					<br><br><br><br><br><br>

				</div>
			</div>
		</div>
                  <div class="fixed-wrap">
				<div class="home-inner">
				</div>
			        </div>
			</div>
		</div><!--end fixed background-->
	</div>
	
				

			
	<div id="rules" class="offset text-light">
		<div class="fixed-background">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="headerText text-center">
						<h1><br><br><br>RULES<br><br>
</h1>
					</div>
				</div>
			</div>
			<div class="row clearfix">
				<div class="offset-sm-1 col-sm-8">
					<ul><h4>GENERAL RULES</h4>
<li>A team size of maximum 6 members is allowed.
</li>
<li>A hovercraft is a vehicle which floats on a cushion of high pressurized air and propels itself on this air-cushion using a thrust producing mechanism.</li>
<li>Control is generally achieved by the use of rudders, though it is not the only solution.</li>
<li>It must fit in a box of  50cm x 50cmx 50cm (in zero-lift condition).</li>
<li>A team member can’t be a part of more than one team. </li>
<li>The model can be fabricated using foam, wood, coroplast (sunpack) or any other.</li>

</ul>
					<br><br><br><br><br><br>

				</div>
			</div>
		</div>
		<div class="fixed-wrap">
				<div class="fixed">
				</div>
			</div>
		</div>
	</div>



	<div id="reg" class="offset text-light">
		<div class="fixed-background">
			
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="headerText text-center">
						<h1><br><br>PLEASE CLICK TO REGISTER</h1><br>
					</div>
				</div>
			</div>
			<div class="row clearfix">
                   <div class="offset-sm-2 col-sm-8 text-center">
                       <form method="POST" action="lmega_robowar.php" >
						
						<button class="btn btnD1" name="mega_robowar_reg">REGISTER</button>
					</form>	<br><br><br><br><br><br><br><br><br>
					
				</div>
			</div>
		</div>
		<div class="fixed-wrap">
				<div class="home-inner">
				</div>
			</div>
		</div>
	</div>
		
					
			
	<!---sources start-->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="bootstrap/4.1.3-dist/js/bootstrap.min.js"></script>
<script src="fontawesome/js/all.js"></script>
<!---sources end-->
</body>
</html>
