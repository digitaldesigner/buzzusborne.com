<?php 
	define('path','../');
	$hideNav=TRUE;
	$homepage=TRUE;
	$navigation['twitter_img']="https://buzzusborne.com/casestudy/_images/beacon/beacon-cover.png";
	$hideLogo = TRUE; 
  include(path.'_includes/header.php');
?>

	<div class="container overlap">
		<div id="header">
			<h1><a href="../" title="Buzz">Buzz Usborne</a></h1>
			<ol class="shortNav">
				<li><a href="../#work" title="My Work">Work</a></li>
				<li><a class="active" href="./" title="My Writing">Coaching</a></li>
				<li><a href="../about/" title="About Me">About</a></li>
			</ol>
		</div>
	</div>

  <div class="landing">
    <section>
      <div class="introtext">
        <h1 id="bio" class="fwidth">I'm passionate about remote work, team collaboration and design excellence. I help diverse, thoughtful and ambitious teams &amp; individuals reach their full potential. I live in video calls.</h1>
      </div>
    </section>
  </div>

	<div class="container">
		<div id="about" class="spacer">		
			<h3 class="maintitle coaching">Mentoring</h3>
			<p>Calling on my own experinces both as an indipendent-contributor and as a manager I privately mentor designers of all levels &mdash; especially those who are looking to make a shift in their career, building their own teams, or looking to establish better remote working practices. Over the past 10 years I've had the pleasure of helping hundreds of designers in all parts of the world achieve success and realize their own potential. I'm also here to get nerdy about design systems! </p>
			
			<h3 class="coaching">Consulting</h3>
			<p>Partnering with Founders and Leadership Teams, I help to identify the right strategy, team dynamic and design talent necessary to produce world-class products &mdash; whilst also providing insight and confidence around roadmap and strategic approach.</p>
			<p>Working both remotely and in-house, I have advised teams both inernatioanlly and on-shore. Currently I am based in Australia where I sit on the Board of Advisors to a global VC firm, through which I've had the pleasure of working with 4 of the 10 fastest growing technology startups in <?php echo date('Y'); ?>.</p>
			
			<h3 class="coaching">Speaking</h3>
			<p>Occasionally I visit companies and events to talk about my experiences designing remotely, scaling effective design teams and my own creative journey. Most recently I spoke with InVision about &ldquo;Designing Together Across Continents&rdquo; &mdash; <a href="https://www.invisionapp.com/webinars/designingtogether">watch it</a></p>
			
		  <div class="image fullwidth">
		    <img class="image" src="../_assets/gfx/meetup.jpg" />
		  </div>
		</div>

<?php
	include(path.'_includes/footer.php');
?>