$(document).ready(function () {

	//SET PAGE OBJECT

	var onPage;

	//SHOW BODY

	$('body').show(); //for smooth transition on page load

	//FADE IN BODY ON LOAD

	$('body').velocity("fadeIn", { duration: 1000 });

	//SET PAGE TITLE

	var path = window.location.pathname;
	var currentPage = path.split("/").pop();

	//SET PAGE CLASS

	var Class = function(methods) {
		var klass = function() {
			this.initialize.apply(this, arguments);
		};

		for (var property in methods) {
			klass.prototype[property] = methods[property];
		}

		if (!klass.prototype.initialize) klass.prototype.initialize = function(){};

		return klass;
	};

	var Page = Class({
		initialize: function(pageTitle, animationClass, animationFrames) {
			this.pageTitle = pageTitle;
			this.animationClass  = animationClass;
			this.animationFrames  = animationFrames;
		}
	});

	//SWITCH FOR CURRENT PAGE

	switch (currentPage) {
		case "index.php":
		case "":
		case "altan.php":
		case "notredame.php":
		case "torontofacilities.php":
		case "nakedstock.php":
			onPage = new Page('My Work', 'mywork', 'giffff');
			break;
		case "about.php":
			onPage = new Page('About Me', 'aboutme', 'gif');
			break;
		case "blog.php":
			onPage = new Page('Blog', 'blog', 'gifff');
			break;
		case "contact.php":
			onPage = new Page('Contact', 'contact', 'giff');
			break;
	}

	//SET PAGE TITLE

	document.getElementById('backTitle').innerHTML = '<h1>' + onPage.pageTitle + '</h1>';

	//ONCLICK EVENTS

	var nextPage;
	var nextPageM;

	for (var p = 1; p < 5; p++){
		nextPage = document.getElementById('pagepass_'+p);
		if (typeof window.addEventListener === 'function'){
			(function (_nextPage) {
				nextPage.addEventListener('click', function(){
					if(_nextPage.className == 'mywork'){
						changePage('index');
					}
					if(_nextPage.className == 'aboutme'){
						changePage('about');
					}
					if(_nextPage.className == 'blog'){
						changePage('blog');
					}
					if(_nextPage.className == 'contact'){
						changePage('contact');
					}
				});
			})(nextPage);
		}
	}

	for (var pm = 1; pm < 5; pm++){
		nextPageM = document.getElementById('pagepassM_'+pm);
		if (typeof window.addEventListener === 'function'){
			(function (_nextPageM) {
				nextPageM.addEventListener('click', function(){
					if(_nextPageM.className == 'mywork'){
						changePage('index');
					}
					if(_nextPageM.className == 'aboutme'){
						changePage('about');
					}
					if(_nextPageM.className == 'blog'){
						changePage('blog');
					}
					if(_nextPageM.className == 'contact'){
						changePage('contact');
					}
				});
			})(nextPageM);
		}
	}

	//SET ACTIVE PAGE CSS

		var className = document.getElementsByClassName(onPage.animationClass);

		for(var i=0; i<className.length; i++) {
			className[i].style.AnimationName = onPage.animationFrames;
			className[i].style.webkitAnimationName = onPage.animationFrames;

			className[i].style.AnimationDuration = '1s';
			className[i].style.webkitAnimationDuration = '1s';

			className[i].style.animationIterationCount = 'infinite';
			className[i].style.webkitAnimationIterationCount = 'infinite';

			className[i].style.border = '3px solid #39ffec';
		}

	//MOBILE MENU DISPLAY

	$('#menuOverlay').hide();
	$('.cross').hide();
	$('.mobileNav').hide();

	//burger is clicked
	$('.burger').click(function(e){

		e.preventDefault();

		//get view port height

		var clientHeight = $( window ).height();

		$('#menuOverlay').css('height', clientHeight);

		//fade out burger
		$('.burger').velocity("fadeOut", { duration: 1000 });

		//fade in menu components
		$('#menuOverlay').velocity("fadeIn", { duration: 1000 });
		$('.mobileNav').velocity("fadeIn", { duration: 1000 });
		
		//hide ability to scroll
		$('html, body').css({
			'overflow': 'hidden',
			'height': '100%'
		});

		//fade in cross
		$('.cross').velocity("fadeIn", { duration: 1000 });

		});

		//cross is clicked

		$('.cross').click(function(e){

			e.preventDefault();

			$('#menuOverlay').velocity("fadeOut", { duration: 1000 });
			
			$('.burger').velocity("fadeIn", { duration: 1000 });
			$('html, body').css({
				'overflow-y': 'auto',
				'height': 'auto'
			});
		});

	//PAGE EXIT ANIMATION

	function changePage(goToPage){

        //EXPAND MENU

        $(".mobileNav li").velocity({
            "width": 200,
            "left": 50,
            "top":  50
        }, 1300 );

        //FADE PAGE

		$('html').velocity('fadeOut', 1000, function() {

			var currentURL = window.location.pathname;
			var shortURL = currentURL.substring(0, currentURL.lastIndexOf('/'));
			location.href = shortURL + '/' + goToPage + '.php';
		});
	}
});