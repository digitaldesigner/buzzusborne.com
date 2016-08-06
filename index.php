<?php 
	define('path','');
	$hideNav=TRUE;
	$navigation = array(
		"prev" => array(
			"path"	=> "/about",
			"title"	=> "About Buzz"
		),
		"next" => array(
			"path"	=> "casestudy/prevue",
			"title"	=> "Prevue"
		)
	);
	include(path.'_includes/header.php');
?>
		<div id="about">		
			<p class="lead">I&rsquo;m a Product Designer and former Product Design Lead at Sendle, Campaign Monitor <em class="special amp">&amp;</em> Skype. I built <a href="https://prevue.it/">Prevue</a>, and previously worked as a digital designer for various agencies in USA, UK and Australia. <a href="about/">More</a></p>
			
			<div id="photo"><a href="about/" title="More about Buzz"><img src="_assets/home/buzz_bw.jpg" alt="Buzz Usborne" /></a></div>
			
			<h3>Selected projects&hellip;</h3>
		</div>
		
		<ul class="caseStudies">
				<li>
					<a href="casestudy/prevue/">
						<div class="image leadImg"><img src="casestudy/_images/prevue/Homepage.jpg" /></div>
						<h5><span>Prevue</span></h5>
						<p>Founder, Developer &amp; Product Designer</p>
					</a>
				</li>
				<li>
					<a href="casestudy/skype/">
						<div class="image"><img src="casestudy/_images/skype/skype_conversation.jpg" /></div>
						<h5><span>Skype</span></h5>
						<p>Product Design Lead</p>
					</a>
				</li>
				<li>
					<a href="casestudy/canvas/">
						<div class="image"><img src="casestudy/_images/canvas/full_app.jpg" /></div>
						<h5><span>Campaign Monitor Email Builder</span></h5>
						<p>Product Design Lead (UX  Director)</p>
					</a>
				</li>
				<li>
					<a href="casestudy/sendle/">
						<div class="image"><img src="casestudy/_images/sendle/devices.jpg" /></div>
						<h5><span>Sendle</span></h5>
						<p>Head of Product (Design Lead)</p>
					</a>
				</li>
				<li>
					<a href="casestudy/campaignmonitor/">
						<div class="image"><img src="casestudy/_images/campaignmonitor/business_cards.jpg" /></div>
						<h5><span>CM Branding</span></h5>
						<p>Head of Design</p>
					</a>
				</li>
				<li>
					<a href="casestudy/monitor/">
						<div class="image"><img src="casestudy/_images/monitor/test.jpg" /></div>
						<h5><span>Monitor for iOS</span></h5>
						<p>Product Design Lead</p>
					</a>
				</li>
				<li>
					<a href="casestudy/pbp/">
						<div class="image"><img src="casestudy/_images/pbp/homepage.jpg" /></div>
						<h5><span>Postbox Party</span></h5>
						<p>Freelance Designer <em class="special">/</em> Front-end Developer</p>
					</a>
				</li>
				<li>
					<a href="casestudy/skype_business/">
						<div class="image"><img src="casestudy/_images/skype_business/profile.png" /></div>
						<h5><span>Skype for Business</span></h5>
						<p>Product Design Lead</p>
					</a>
				</li>
				<li>
					<a href="casestudy/misc/">
						<div class="image"><img src="casestudy/_images/misc/montage.jpg" /></div>
						<h5><span>Misc work</span></h5>
						<p>Various digital projects</p>
					</a>
				</li>
			</ul>
				
<?php
	include(path.'_includes/footer.php');
?>