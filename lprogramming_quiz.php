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
						<h1><br><br><br>PROGRAMMING QUIZ<br><br></h1>
					</div>
				</div>
			</div>
			<div class="row clearfix">
				<div class="offset-sm-1 col-sm-9">
<ul><h4>Description</h4>
<li>This quiz will test the participants coding knowledge in various languages such as C, C++, Java, Python etc. 
</li><br>

<h4>Prizes</h4>
<li>Worth ₹15k</li>	
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
<li>Basic knowledge of algorithms and data structures is required as well as knowledge of a programming language (C++, Java, Python).
</li>
<li>Each team will consist of two members.</li>
<li>There will be 2 rounds conducted. First online qualifier and then final pen and paper round.</li>
<li>Both rounds of the quiz will be held during Infotsav at ABV-IIITM campus.</li>
<li>Online round will consist of 20 questions (may vary slightly).</li><br>

<li>Most questions will have a time limit.</li>
<LI>There will be negative marks for each incorrect answer, no negative marks will be allotted for unattempted questions.</LI>
<LI>In case of tie higher rank will be given to team having lesser wrong answers.</LI>
<LI>50% of the teams selected for final round will be from ABV-IIITM and rest 50% from other colleges. (at most 20 teams).</LI>
<LI>In case a team is found cheating, team will be disqualified straightaway.</LI>
<LI>Teams should have a proper internet connection, it won’t be provided by the institute.</LI>
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
