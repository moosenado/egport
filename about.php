<?php include('header.php'); ?>

	<main role="main">

		<div id="aboutMain">

			<div id="mePic">
				<img src="images/mepicseethroughopacity.png" />
			</div>

			<div class="aboutmeContent">

				<div class="innerTitle">
					<h1>About Elliot Grabish</h1>
				</div>
					<p>
						Do websites really matter? Do I need one? People seemed to be on the fence when it came to answering these questions not all that long ago. Today, do you still hear these questions? Just in the last five years, having a web presence has gone from a maybe to a necessity. How do you first learn about someone today? Our connected lifestyles have led us to make first impressions even before meeting someone. Our society lives on the web and it's becoming increasingly important that communication made across this medium is accurate. Whether it's for personal reasons, your brand, or your business, how the information is made available to the world will create a lasting affect on another's perception. This is why I love building for the web and helping others succeed with their web presence. 		
					</p>
					<p>
						I am a full stack web developer residing in the Greater Toronto Area and a student at the Humber Web Development program. I also have a Honours Arts and Science Degree from the Univerity of Guelph. As well as developing for the web, I also have an extensive background in graphic design and music production. I aim to combine my skills to create unique user experiences that resound with others. Merging creativity with technicality is where the heart of my productions lay.
					</p>
			</div>

		</div>

		<div class="clear"></div>

	</main>

</body>

<script>

$(document).ready(function () {

	//SLIDE IN PROFILE PIC

	var i = 1;

	$('#mePic').show('slide', { direction: 'left' }, 1000);

	var go = setInterval(function(){
    
		$('#leftcol_'+i).show('slide', { direction: 'right' }, 1000);
    
            i++;

    	}, 400)
});

</script>

</html>