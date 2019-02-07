<?php 
	define('path','../../');
	include(path.'_includes/header.php');
?>
		<div id="projectIntro">
			<h1>NapTime App</h1>
			<span class="subscript">Personal Project <em>&#8226;</em> Design / Development <em>&#8226;</em> 2018</span>
		</div>
	</div>
	
	<div class="fullImage top video">
    <video autoplay muted loop id="showcase" class="leadImg">
      <source src="../_video/sleep-app.mp4" type="video/mp4">
    </video>
	</div>
	
	<div class="container">	
		<div class="project">
			<h5>The Brief</h5>
			<p class="info"><strong>Above/</strong> Visualizing an ugly CSV export to identify trends</p>
			
			<p>My son, Austin has never slept well &mdash; to the point where we began tracking his sleep just to make sure he was getting the bare minimum to survive. That kid really hated sleep.</p>
			
			<p>There are a bunch of baby apps that let you track time &mdash; but none of them visualized your input in a useful way. At best you're shown a list of start and end times&hellip; not good for spotting patterns!</p>
			
			<p>Fortunately the app my wife was using allowed you to generate a CSV of your records. So like any sleep deprived dad, I set to work on building a tool to help us get a better look at the patterns and averages forming over time. Because what else do you do when you&rsquo;re up at 3am?</p>
			
			<h3>Visualizing Time</h3>
			
			<p>Making sense of time is somewhat of a passion &mdash; numbers and time have never really meant much to me, so I set out to create a better &ldquo;picture&rdquo; of each day without the need for timestamps.</p>
      
      <div class="image"><img class="lazyload" data-sizes="auto" data-src="../_images/naptime/early-sketch.jpg" width="100%" /></div>

      <p>The design was simple enough &mdash; the day is book-ended by blocks of nighttime, and interspersed with naps. Each awake and asleep period could be hovered for more information, average wake and sleep times were plotted, and trends such as whether a nap was good or bad was marked.</p>
    
		</div>
	</div>	

	<div class="fullImage">
		<img class="lazyload" data-sizes="auto" data-src="../_images/naptime/popover.png" />
	</div>
	
	<div class="container">	
		<div class="project">
			<p class="caption"><strong>Above/</strong> Hovering each chunk produces more information. <strong>Below/</strong> Average wake and sleep times are shown in a popover</p>
      
		</div>
	</div>	

	<div class="fullImage">
		<img class="lazyload" data-sizes="auto" data-src="../_images/naptime/modal-screens.png" />
	</div>
	
	<div class="container">	
		<div class="project">      
      <div class="image close"><img class="lazyload" data-sizes="auto" data-src="../_images/naptime/interaction.gif" width="100%" /></div>
      
      <p>And what side project is complete without gratuitous use of animation? Everything from popovers, animations and modals was created using seriously suspicious CSS animation and a whole bunch of pseudo elements. The kind of stuff you could never get away with in your day job.</p>
      
      <h3>It actually worked!</h3>
      <p>Shockingly, the app was able to identify some trends that our tired human eyes had missed. It was able to identify what times produced the most ideal naps, and what bedtimes led to the fullest nights. Above all else, it also showed that things were indeed improving, albeit slowly.</p>
      
      <div class="image"><img class="lazyload" data-sizes="auto" data-src="../_images/naptime/loading-screen.png" width="100%" /></div>
      
			
		</div>
	</div>
		
	<div class="container">	
		<div class="project">
			
			<dl class="outro">
				<div class="col left">
					<dt>Position</dt>
						<dd>Tired Dad</dd>
					<dt>Date</dt>
						<dd>2018</dd>
				</div>
				<div class="col middle">			
					<dt>Skills</dt>
						<dd>Visual design</dd>
						<dd>HTML <em class="special amp">&amp;</em> CSS</dd>
						<dd>Dropbox API</dd>
						<dd>Javascript</dd>
						<dd>PHP</dd>
				</div>
				<div class="col right">
					<dt>More</dt>
						<dd><a href="https://codepen.io/buzzusborne/full/JMGqLd/">Early CSS Test</a></dd>
				</div>
			</dl>
		
<?php
	include(path.'_includes/footer.php');
?>