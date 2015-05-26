<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width" />
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Anton' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
	<script src="js/velocity.min.js"></script>
	<script src="js/main.js"></script>
	<title>Elliot Grabish Online</title>
</head>

<body>

	<!-- HEADER -->

	<!--Mobile Menu -->

	<div id="menuOverlay">
		<div class="cross"></div>
		<ul class="mobileNav">
			<li class="mywork" onclick="changePage" id="myworkPassM"><a>My Work</a></li>
			<li class="aboutme" onclick="changePage" id="aboutmePassM"><a>About Me</a></li>
			<li class="blog" onclick="changePage" id="blogPassM"><a>Blog</a></li>
			<li class="contact" onclick="changePage" id="contactPassM"><a>Contact</a></li>
		</ul>
	</div>

	<header>

		<!-- PAGE TITLE -->

		<div id="backTitle">	
		</div>

		<!-- NAVIGATION -->

		<!-- Hamburger Icon -->

		<div class="burger">
		</div>

		<nav>
			<ul class="ulLeft">
				<li class="mywork" onclick="changePage" id="myworkPass"><a>My Work</a></li>
				<li class="aboutme" onclick="changePage" id="aboutmePass"><a>About Me</a></li>
			</ul>
			<ul class="ulRight">
				<li class="blog" onclick="changePage" id="blogPass"><a>Blog</a></li>
				<li class="contact" onclick="changePage" id="contactPass"><a>Contact</a></li>
			</ul>
		</nav>

		<!-- LOGO -->

		<div id="logo">

			<img src="images/newlogo2nonesmall.png" title="EG Logo" alt="EG Logo" class="top_image"/>
			
			<!-- Fade below image in on load -->
			<img src="images/newlogo2.png" title="EG Logo" alt="EG Logo" class="bottom_image" />

		</div>

	</header>

	<div class="clear"></div>
