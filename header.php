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
		<div class="cross"></div>
		<ul class="mobileNav">
			<li class="mywork"><a href="#">My Work</a></li>
			<li class="aboutme"><a href="#">About Me</a></li>
			<li class="blog"><a href="#">Blog</a></li>
			<li class="contact"><a href="#">Contact</a></li>
		</ul>
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
				<li class="mywork"><a href="#">My Work</a></li>
				<li class="aboutme"><a href="#">About Me</a></li>
			</ul>
			<ul class="ulRight">
				<li class="blog"><a href="#">Blog</a></li>
				<li class="contact"><a href="#">Contact</a></li>
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
       		var myWork = document.getElementsByClassName('mywork');
       		
       		for(var i=0; i<myWork.length; i++) {
    			myWork[i].style.AnimationName = "giffff";
       		myWork[i].style.webkitAnimationName = "giffff";

       		myWork[i].style.AnimationDuration = '1s';
       		myWork[i].style.webkitAnimationDuration = '1s';

       		myWork[i].style.animationIterationCount = 'infinite';
  			myWork[i].style.webkitAnimationIterationCount = 'infinite';
			}
			
    	}

    	if(window.location.href.indexOf("aboutme") > -1) {
       		var aboutMe = document.getElementsByClassName('aboutme');
       		aboutMe.style.AnimationName = "gif";
       		aboutMe.style.webkitAnimationName = "giffff";

       		aboutMe.style.AnimationDuration = '1s';
       		aboutMe.style.webkitAnimationDuration = '1s';

       		aboutMe.style.animationIterationCount = 'infinite';
  			aboutMe.style.webkitAnimationIterationCount = 'infinite';
    	}

    	if(window.location.href.indexOf("blog") > -1) {
       		var blog = document.getElemenstByClassName('blog');
       		blog.style.AnimationName = "gifff";
       		blog.style.webkitAnimationName = "gifff";

       		blog.style.AnimationDuration = '1s';
       		blog.style.webkitAnimationDuration = '1s';

       		blog.style.animationIterationCount = 'infinite';
  			blog.style.webkitAnimationIterationCount = 'infinite';
    	}

    	if(window.location.href.indexOf("contact") > -1) {
       		var contact = document.getElementsByClassName('contact');
       		contact.style.AnimationName = "giff";
       		contact.style.webkitAnimationName = "giff";

       		contact.style.AnimationDuration = '1s';
       		contact.style.webkitAnimationDuration = '1s';

       		contact.style.animationIterationCount = 'infinite';
  			contact.style.webkitAnimationIterationCount = 'infinite';
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