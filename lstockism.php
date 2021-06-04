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
						<h1><br><br><br>STOCKISM<br><br></h1>
					</div>
				</div>
			</div>
			<div class="row clearfix">
				<div class="offset-sm-1 col-sm-9">
<ul><h4>Description</h4>
<li>Introducing you to the world of traders, Techkriti presents a live virtual stock trading competition where the smart-witted minds compete against each other to design the most marketable portfolio from the rendered stocks through excessive bidding.</li><br>

<h4>Task</h4>
<li>Let the market play its game! Show off your Finance Gyan, apply your trading and analytical skills in a restless environment to make your best bid to win!</li><br>

<h4>Prizes</h4>
<li>Worth ₹35k</li>	
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
<li>A user can not short sell.</li>
<li>A user can't buy more than 5% in one stock.</li>
<li>A user can only invest from the nifty 500 universe stocks.</li>
<li>A user can keep only up to 5% in cash (he will have to invest rest of the money in the first week itself).</li>
<li>If the user violates the rule he will be penalized.</li><br>

<li>Daily at the end of the day, you will get an email for your current profit and loss(P&L) and Demat holding.</li>
<li>Your changes will be shown on next day in the portfolio such as sold/bought Stocks.</li>
<li>The team with its participant having with the maximum Net Worth at the end of the trading days will be qualified for next round. If at the end of the game two people are having the same net worth, then the one with 0 or lowest penalty point will be the winner. </li>
<li>Top 30 Teams with the maximum Net Worth at the end of the hackathon will be selected for Final Round at IIT Kanpur.
 </li>
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
                       <form method="POST" action="lstockism.php" >
						
						<button class="btn btnD1" name="stockism_reg">REGISTER</button>
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
