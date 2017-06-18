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
			<p class="lead">I&rsquo;m a Product Designer at Help Scout  <em class="special amp">&amp;</em> Founder of Prevue. Former Design Lead at Atlassian, Campaign Monitor, Sendle and Skype &mdash; and digital designer to agencies in USA, UK and Australia. <a href="about/">Read more</a></p>
			
			<div id="photo"><a href="about/" title="More about Buzz"><img src="_assets/home/buzz-usborne.jpg" alt="Buzz Usborne" /></a></div>
			
			<h3>Case Studies</h3>
		</div>
		
		<ul class="caseStudies">
				<li>
					<a href="casestudy/atlassian/">
						<div class="image leadImg"><img src="casestudy/_images/atlassian/jira-hero.jpg" /></div>
						<h5><span>JIRA + Atlassian</span></h5>
						<p>Lead Designer</p>
					</a>
				</li>
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
						<div class="image"><img src="casestudy/_images/misc/toniguy_01.jpg" /></div>
						<h5><span>Assorted digital work</span></h5>
						<p>Various digital projects</p>
					</a>
				</li>
			</ul>
			 
<?php
	include(path.'_includes/recent.php');
	include(path.'_includes/footer.php');
?>