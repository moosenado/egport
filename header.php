<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width" />
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
	<script src="js/velocity.min.js"></script>
	<title>Elliot Grabish Online</title>
</head>

<body>

	<!-- HEADER -->

	<!--Mobile Menu -->

	<div id="menuOverlay">
		<div class="cross"></div>
		<ul class="mobileNav">
			<li class="mywork"><a>My Work</a></li>
			<li class="aboutme"><a>About Me</a></li>
			<li class="blog"><a>Blog</a></li>
			<li class="contact"><a>Contact</a></li>
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

			<img src="images/newlogo2none.gif" title="EG Logo" alt="EG Logo" class="top_image"/>
			
			<!-- Fade below image in on load -->
			<img src="images/newlogo2.gif" title="EG Logo" alt="EG Logo" class="bottom_image" />

		</div>

	</header>

<script type="text/javascript">

	$(document).ready(function () {

		//fade in background on load

		$('body').velocity("fadeIn", { duration: 1000 })

		//get onclick and run change page function

		document.getElementById("myworkPass").addEventListener("click", function() {
    		changePage('index');
		}, false);

		document.getElementById("aboutmePass").addEventListener("click", function() {
    		changePage('about');
		}, false);

		// JS for active link

    	if(window.location.href.indexOf("index") > -1) {
       		var myWork = document.getElementsByClassName('mywork');
       		
       		for(var i=0; i<myWork.length; i++) {
    			myWork[i].style.AnimationName = "giffff";
       			myWork[i].style.webkitAnimationName = "giffff";

       			myWork[i].style.AnimationDuration = '1s';
       			myWork[i].style.webkitAnimationDuration = '1s';

       			myWork[i].style.animationIterationCount = 'infinite';
  				myWork[i].style.webkitAnimationIterationCount = 'infinite';

  				myWork[i].style.border = '3px solid #39ffec';
			}	
    	}

    	if(window.location.href.indexOf("aboutme") > -1) {
       		var aboutMe = document.getElementsByClassName('aboutme');

	       	for(var i=0; i<aboutMe.length; i++) {
	       		aboutMe[i].style.AnimationName = "gif";
	       		aboutMe[i].style.webkitAnimationName = "giffff";

	       		aboutMe[i].style.AnimationDuration = '1s';
	       		aboutMe[i].style.webkitAnimationDuration = '1s';

	       		aboutMe[i].style.animationIterationCount = 'infinite';
	  			aboutMe[i].style.webkitAnimationIterationCount = 'infinite';

	  			aboutMe[i].style.border = '3px solid #39ffec';
	  		}
    	}

    	if(window.location.href.indexOf("blog") > -1) {
       		var blog = document.getElemenstByClassName('blog');

	       	for(var i=0; i<blog.length; i++) {
	       		blog[i].style.AnimationName = "gifff";
	       		blog[i].style.webkitAnimationName = "gifff";

	       		blog[i].style.AnimationDuration = '1s';
	       		blog[i].style.webkitAnimationDuration = '1s';

	       		blog[i].style.animationIterationCount = 'infinite';
	  			blog[i].style.webkitAnimationIterationCount = 'infinite';

	  			blog[i].style.border = '3px solid #39ffec';
	  		}
    	}

    	if(window.location.href.indexOf("contact") > -1) {
       		var contact = document.getElementsByClassName('contact');

	       	for(var i=0; i<contact.length; i++) {
	       		contact[i].style.AnimationName = "giff";
	       		contact[i].style.webkitAnimationName = "giff";

	       		contact[i].style.AnimationDuration = '1s';
	       		contact[i].style.webkitAnimationDuration = '1s';

	       		contact[i].style.animationIterationCount = 'infinite';
	  			contact[i].style.webkitAnimationIterationCount = 'infinite';

	  			contact[i].style.border = '3px solid #39ffec';
	  		}
    	}

    	//MOBILE MENU

    	$('#menuOverlay').hide()
    	$('.cross').hide()
    	$('.mobileNav').hide()
	
		$('.burger').click(function(){

			//Jquery incase Vh (css: viewport height) does not work for menu div
			var clientHeight = $( window ).height();
  			$('#menuOverlay').css('height', clientHeight);

			$('#menuOverlay').velocity("fadeIn", { duration: 1000 })
			$('.burger').velocity("fadeOut", { duration: 1000 })
			$('.mobileNav').velocity("fadeIn", { duration: 1000 })

			$('html, body').css({
    			'overflow': 'hidden',
    			'height': '100%'
			});

			$('.cross').velocity("fadeIn", { duration: 1000 }).click(function(){
				$('#menuOverlay').velocity("fadeOut", { duration: 1000 })
				$('.cross').velocity("fadeOut", { duration: 1000 })
				$('.burger').velocity("fadeIn", { duration: 1000 })
				$('html, body').css({
    				'overflow-y': 'auto',
    				'height': 'auto'
				});
			});
		});

		//page conclusion animations

		function changePage(goToPage){

			//get current page name
			var path = window.location.pathname;
			var currentPage = path.split("/").pop();

			if(currentPage === "index.php"){

				$('html').velocity('fadeOut', 1000, function() { 

					var currentURL = window.location.pathname;
					var shortURL = currentURL.substring(0, currentURL.lastIndexOf('/'));			
      				location.href = shortURL + '/' + goToPage + '.php';

				});

			}

		}
	});

</script>