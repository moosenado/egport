$(document).ready(function () {

	//SET PAGE TITLE

	var path = window.location.pathname;
	var currentPage = path.split("/").pop();

	if(currentPage === "index.php"){
		document.getElementById('backTitle').innerHTML = '<h1>My Work</h1>';
	}
	if(currentPage === "about.php"){
		document.getElementById('backTitle').innerHTML = '<h1>About Me</h1>';
	}
	if(currentPage === "blog.php"){
		document.getElementById('backTitle').innerHTML = '<h1>Blog</h1>';
	}
	if(currentPage === "contact.php"){
		document.getElementById('backTitle').innerHTML = '<h1>Contact</h1>';
	}

	//FADE IN BACKGROUND ON LOAD

	$('body').velocity("fadeIn", { duration: 1000 })

	//GRAB ONCLICK EVENT FOR PAGE EXIT ANIMATION

	document.getElementById("myworkPass").addEventListener("click", function() {
		changePage('index');
	}, false);

	document.getElementById("myworkPassM").addEventListener("click", function() {
		changePage('index');
	}, false);

	document.getElementById("aboutmePass").addEventListener("click", function() {
		changePage('about');
	}, false);

	document.getElementById("aboutmePassM").addEventListener("click", function() {
		changePage('about');
	}, false);

	document.getElementById("contactPass").addEventListener("click", function() {
		changePage('contact');
	}, false);

	document.getElementById("contactPassM").addEventListener("click", function() {
		changePage('contact');
	}, false);

	//PORTFOLIO LISTENERS

	document.getElementById("proj1").addEventListener("click", function() {
		changePage('altan');
	}, false);

	//SET ACTIVE PAGE CSS

	if(window.location.href.indexOf("index") > -1 || window.location.href.indexOf("altan") > -1) {
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

	if(window.location.href.indexOf("about") > -1) {
		var aboutMe = document.getElementsByClassName('aboutme');

		for(var i=0; i<aboutMe.length; i++) {
			aboutMe[i].style.AnimationName = "gif";
			aboutMe[i].style.webkitAnimationName = "gif";

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

	//MOBILE MENU DISPLAY

	$('#menuOverlay').hide();
	$('.cross').hide();
	$('.mobileNav').hide();

	//burger is clicked
	$('.burger').click(function(){

		//Jquery incase Vh (css: viewport height) does not work for menu div
		var clientHeight = $( window ).height();
		$('#menuOverlay').css('height', clientHeight);

		//fade out burger
		$('.burger').velocity("fadeOut", { duration: 1000 });

		//fade in menu components
		$('#menuOverlay').velocity("fadeIn", { duration: 1000 });
		$('.mobileNav').velocity("fadeIn", { duration: 1000 });
		$('.cross').velocity("fadeIn", { duration: 1000 });

		//hide ability to scroll
		$('html, body').css({
			'overflow': 'hidden',
			'height': '100%'
		});

		//exit is fired
		$('.cross').velocity("fadeIn", { duration: 1000 }).click(function(){

			$('#menuOverlay').velocity("fadeOut", { duration: 1000 });
			$('.cross').velocity("fadeOut", { duration: 1000 });
			$('.burger').velocity("fadeIn", { duration: 1000 });
			$('html, body').css({
				'overflow-y': 'auto',
				'height': 'auto'
			});
		});
	});

	//PAGE EXIT ANIMATION

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

		if(currentPage === "about.php"){

			$('html').velocity('fadeOut', 1000, function() { 

				var currentURL = window.location.pathname;
				var shortURL = currentURL.substring(0, currentURL.lastIndexOf('/'));			
				location.href = shortURL + '/' + goToPage + '.php';

			});
		}

		if(currentPage === "contact.php"){

			$('html').velocity('fadeOut', 1000, function() { 

				var currentURL = window.location.pathname;
				var shortURL = currentURL.substring(0, currentURL.lastIndexOf('/'));			
				location.href = shortURL + '/' + goToPage + '.php';

			});
		}

		if(currentPage === "altan.php"){

			$('html').velocity('fadeOut', 1000, function() { 

				var currentURL = window.location.pathname;
				var shortURL = currentURL.substring(0, currentURL.lastIndexOf('/'));			
				location.href = shortURL + '/' + goToPage + '.php';

			});
		}
	}
});