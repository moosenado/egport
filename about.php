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
						Do websites really matter? Do I need one? People seemed to be on the fence when it came to answering these questions not that long ago. Today, do you still hear these questions? Just in the last five years, having a web presence has gone from a maybe to a necessity. How can you quickly learn about someone you haven't met yet? Our connected lifestyles have led us to make first impressions before even meeting each other. We now live on the web and it's becoming increasingly important that communication made across this medium is accurate. Whether it's for personal reasons, your brand, or your business, how your information is made available to the world will create a lasting affect on others perceptions. This is why I love working with others to help them achieve their visions online.
					</p>
					<p>
						I am a full stack web developer residing in the Greater Toronto Area and a student in the Humber Web Development program. I also have a Honours Arts and Science Degree from the Univerity of Guelph. As well as developing for the web, I have an extensive background in graphic design and music production. I aim to combine all of my skills to create unique user experiences. Merging creativity with technicality is where the heart of my creations lie.
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