<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width" />
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<title>Elliot Grabish Online</title>
</head>

<body>

	<!-- HEADER -->

	<!--Mobile Menu -->

	<div id="menuOverlay">
			<div class="cross" style="margin-top: 20px"></div>
		</div>
	</div>

	<header>

		<div class="backTitle">
			<h1> My Work </h1>
		</div>

		<!-- NAVIGATION -->

		<!-- Hamburger Icon -->

		<div class="burger">
		</div>

		<nav>

			<ul class="ulLeft">
				<li id="mywork"><a href="#">My Work</a></li>
				<li id="aboutme"><a href="#">About Me</a></li>
			</ul>
			<ul class="ulRight">
				<li id="blog"><a href="#">Blog</a></li>
				<li id="contact"><a href="#">Contact</a></li>
			</ul>

		</nav>

		<!-- LOGO -->

		<div id="logo">

			<img src="images/newlogo2none.gif" title="EG Logo" alt="EG Logo" class="top_image"/>
			
			<!-- Fade below image in on load -->
			<img src="images/newlogo2.gif" title="EG Logo" alt="EG Logo" class="bottom_image" />

		</div>

	</header>

<script type="text/javascript">

	// JS for active link

	$(document).ready(function () {
    	if(window.location.href.indexOf("index") > -1) {
       		var myWork = document.getElementById('mywork');
       		myWork.style.AnimationName = "giffff";
       		myWork.style.webkitAnimationName = "giffff";

       		myWork.style.AnimationDuration = '1s';
       		myWork.style.webkitAnimationDuration = '1s';

       		myWork.style.animationIterationCount = 'infinite';
  			myWork.style.webkitAnimationIterationCount = 'infinite';
    	}

    	if(window.location.href.indexOf("aboutme") > -1) {
       		var myWork = document.getElementById('mywork');
       		myWork.style.AnimationName = "gif";
       		myWork.style.webkitAnimationName = "giffff";

       		myWork.style.AnimationDuration = '1s';
       		myWork.style.webkitAnimationDuration = '1s';

       		myWork.style.animationIterationCount = 'infinite';
  			myWork.style.webkitAnimationIterationCount = 'infinite';
    	}

    	if(window.location.href.indexOf("blog") > -1) {
       		var myWork = document.getElementById('mywork');
       		myWork.style.AnimationName = "gifff";
       		myWork.style.webkitAnimationName = "gifff";

       		myWork.style.AnimationDuration = '1s';
       		myWork.style.webkitAnimationDuration = '1s';

       		myWork.style.animationIterationCount = 'infinite';
  			myWork.style.webkitAnimationIterationCount = 'infinite';
    	}

    	if(window.location.href.indexOf("contact") > -1) {
       		var myWork = document.getElementById('mywork');
       		myWork.style.AnimationName = "giff";
       		myWork.style.webkitAnimationName = "giff";

       		myWork.style.AnimationDuration = '1s';
       		myWork.style.webkitAnimationDuration = '1s';

       		myWork.style.animationIterationCount = 'infinite';
  			myWork.style.webkitAnimationIterationCount = 'infinite';
    	}

    	//MOBILE MENU

    	$('#menuOverlay').hide()
    	$('.cross').hide()
	
		$('.burger').click(function(){

			//Jquery incase Vh (css: viewport height) does not work for menu div
			var clientHeight = $( window ).height();
  			$('#menuOverlay').css('height', clientHeight);

			$('#menuOverlay').fadeIn(1000);
			$('.burger').fadeOut(1000);

			$('html, body').css({
    			'overflow': 'hidden',
    			'height': '100%'
			});

			$('.cross').fadeIn(1000).click(function(){
				$('#menuOverlay').fadeOut(1000);
				$('.cross').fadeOut(1000)
				$('.burger').fadeIn(1000);
				$('html, body').css({
    				'overflow-y': 'auto',
    				'height': 'auto'
				});
			});
		});
	});

</script>