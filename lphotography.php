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
						<h1><br><br><br>PHOTOGRAPHY<br><br></h1>
					</div>
				</div>
			</div>
			<div class="row clearfix">
				<div class="offset-sm-1 col-sm-9">
<ul><h4>Description</h4>
<li>This photography contest gives you a chance to showcase your photography talent </li><br>

<h4>Task</h4>
<li>Task is to click photos on Themes:

 

  1) NATURE AT ITS BEST

  2) TYPICALLY INDIAN

  3) CLOSE UP</li><br>

<h4>Prizes</h4>
<li>Worth ₹25k</li>	
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
					<ul><h4>General Rules</h4>
<li>A participant is allowed a maximum of 3 entries (1 entry per theme).</li>
<li>It is a single round Online Event.</li>
<li>This event is open to all colleges with a limit of 1 entry per theme.</li>
<li>The entries are to be accompanied with a caption not longer than 20 words.</li>
<li>There must not be any watermarks, copyright marks or any text/graphic on the picture.</li>
<li>The decision of the organizers shall be final and binding on all contestants.</li>
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
                       <form method="POST" action="lphotography.php" >
						
						<button class="btn btnD1" name="photography_reg">REGISTER</button>
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
