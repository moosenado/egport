<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width" />
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
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
			<li class="mywork" onclick="changePage" id="pagepassM_1"><a>My Work</a></li>
			<li class="aboutme" onclick="changePage" id="pagepassM_2"><a>About Me</a></li>
			<li class="blog" onclick="changePage" id="pagepassM_3"><a>Blog</a></li>
			<li class="contact" onclick="changePage" id="pagepassM_4"><a>Contact</a></li>
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
				<li class="mywork" onclick="changePage" id="pagepass_1"><a>My Work</a></li>
				<li class="aboutme" onclick="changePage" id="pagepass_2"><a>About Me</a></li>
			</ul>
			<ul class="ulRight">
				<li class="blog" onclick="changePage" id="pagepass_3"><a>Blog</a></li>
				<li class="contact" onclick="changePage" id="pagepass_4"><a>Contact</a></li>
			</ul>
		

			<!-- LOGO -->

			<div id="logo">

				<img src="images/newlogo2nonesmall.png" title="EG Logo" alt="EG Logo" class="top_image"/>
				
				<!-- Fade below image in on load -->
				<a href="http://www.elliotgrabish.com"><img src="images/newlogo2.png" title="EG Logo" alt="EG Logo" class="bottom_image" /></a>

			</div>
		</nav>

	</header>

	<div class="clear"></div>
