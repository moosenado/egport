<?php include('header.php'); ?>

	<!-- MAIN CONTENT -->

	<main role="main">

		<!-- PROJECT 1 -->

		<a id="opacTrig1"></a>

		<div class="wholeProject" id="proj1" onclick="portPage">

			<div class="leftCol" id="leftcol_1">
				<div class="proj">
					<div class="projLogo">
						<img src="images/altanlogo.png" title="Altan Logo" alt="Altan Logo" />
					</div>
				</div>
			</div>

			<div class="rightCol" id="rightcol_1">
				<div class="projRight">
					<div class="projScreen">
						<img src="images/altanpage.jpg" title="Altan Page" alt="Altan Page" />
					</div>
				</div>
			</div>

		</div>

		<div class="clear"></div>

		<!-- PROJECT 2 -->

		<div class="wholeProject" id="proj2">

			<div class="leftCol" id="leftcol_2">
				<div class="proj">
					<div class="projLogo">
						<img src="images/torontofacillogo.png" title="Toronto Facilities Logo" alt="Toronto Facilities Logo" />
					</div>
				</div>
			</div>

			<div class="rightCol" id="rightcol_2">
				<div class="projRight">
					<div class="projScreen">
						<img src="images/torontoparkpage.jpg" title="Toronto Facilities Page" alt="Toronto Facilities Page" />
					</div>
				</div>
			</div>

		</div>

		<div class="clear"></div>

		<!-- PROJECT 3 -->

		<div class="wholeProject" id="proj3">

			<div class="leftCol" id="leftcol_3">
				<div class="proj">
					<div class="projLogo">
						<img src="images/notredamelogo.png" title="Notre Dame Logo" alt="Notre Dame Logo" />
					</div>
				</div>
			</div>

			<div class="rightCol" id="rightcol_3">
				<div class="projRight">
					<div class="projScreen">
						<img src="images/notredamepage.jpg" title="Notre Dame Page" alt="Notre Dame Page" />
					</div>
				</div>
			</div>

		</div>

		<div class="clear"></div>

		<!-- PROJECT 4 -->

		<div class="wholeProject" id="proj4">

			<div class="leftCol" id="leftcol_4">
				<div class="proj">
					<div class="projLogo">
						<img src="images/nakedstocklogo.png" title="Naked Stock Logo" alt="Naked Stock Logo" />
					</div>
				</div>
			</div>

			<div class="rightCol" id="rightcol_4">
				<div class="projRight">
					<div class="projScreen">
						<img src="images/nakedstockpage.jpg" title="Naked Stock Page" alt="Naked Stock Page" />
					</div>
				</div>
			</div>

		</div>

		<div class="clear"></div>

	</main>

	<!-- FOOTER -->

<!-- 	<footer>

		<div id="page_info">

			<p>&copy; Elliot Grabish 2015</p>

		</div>

	</footer> -->

</body>

<script>

//SLIDE IN WEBSITE SCREENS (UI)

$(document).ready(function () {

	var i = 1;

	var go = setInterval(function(){
    
		$('#rightcol_'+i).show('slide', { direction: 'left' }, 1000);
    
		$('#leftcol_'+i).show('slide', { direction: 'right' }, 1000);
    
            i++;

    	}, 400)

	var clientWidth = $( window ).width();

	if (clientWidth <= 820){

		var trig = $("#opacTrig1").offset().top;

		$(document).scroll(function () {
	    	if ($(window).height() + $(this).scrollTop() > trig) {
	        	$(".wholeProject").velocity({
	            	'opacity': '.8'
	        	}, 1000);
	    	}else{
	        	$(".wholeProject").velocity({
	            	'opacity': '.5'
	        	}, 1000);
	    	}
		});
	}

	//TOGGLE PROJECT SLIDE ON CLICK

	$('#proj1').click(function() {
  		$('#proj1').toggle("slide", 3000);
	});

	$('#proj2').click(function() {
  		$('#proj2').toggle("slide", 3000);
	});

	$('#proj3').click(function() {
  		$('#proj3').toggle("slide", 3000);
	});

	$('#proj4').click(function() {
  		$('#proj4').toggle("slide", 3000);
	});

	//PORTFOLIO LISTENERS

	document.getElementById("proj1").addEventListener("click", function() {
		portPage('altan');
	}, false);

	document.getElementById("proj2").addEventListener("click", function() {
		portPage('torontofacilities');
	}, false);

	document.getElementById("proj3").addEventListener("click", function() {
		portPage('notredame');
	}, false);

	document.getElementById("proj4").addEventListener("click", function() {
		portPage('nakedstock');
	}, false);

	function portPage(goToPage){

			$('html').velocity('fadeOut', 1000, function() { 

				var currentURL = window.location.pathname;
				var shortURL = currentURL.substring(0, currentURL.lastIndexOf('/'));			
				location.href = shortURL + '/' + goToPage + '.php';

			});
	}
});

</script>

</html>