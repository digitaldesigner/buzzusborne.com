<?php 
	define('path','');
	$hideNav=TRUE;
	$navigation = array(
		"prev" => array(
			"path"	=> "/about",
			"title"	=> "About Buzz"
		),
		"next" => array(
			"path"	=> "casestudy/sleep-tracker",
			"title"	=> "Sleep Tracker"
		),
		"twitter_img" => "casestudy/_images/atlassian/jira-hero.jpg"
	);
	include(path.'_includes/header.php');
?>
		<div id="about">		
			<p class="lead">I&rsquo;m a Product Designer. I help companies solve tough customer problems through beautiful design, clear communication and clever technology. I've been working with agencies <em class="special amp">&amp;</em> startups for <?php echo (date('Y') - 2005); ?> years. <a href="about/">More...</a></p>
						
			<h3>Case Studies</h3>
		</div>
		
		<ul class="caseStudies">
				<li>
					<a href="casestudy/sleep-tracker/">
						<div class="image leadImg"><img src="casestudy/_images/sleep_tracker/col-hover.png" /></div>
						<h5><span>Sleep Tracker</span></h5>
						<p>A personal app to visualize time</p>
					</a>
				</li>
				<li>
					<a href="casestudy/atlassian/">
						<div class="image leadImg"><img src="casestudy/_images/atlassian/jira-hero.jpg" /></div>
						<h5><span>Atlassian</span></h5>
						<p>A productivity tool for software teams</p>
					</a>
				</li>
				<li>
					<a href="casestudy/prevue/">
						<div class="image leadImg"><img src="casestudy/_images/prevue/Homepage.jpg" /></div>
						<h5><span>Prevue</span></h5>
						<p>A feedback tool for designers</p>
					</a>
				</li>
				<li>
					<a href="casestudy/skype/">
						<div class="image"><img src="casestudy/_images/skype/skype_conversation.jpg" /></div>
						<h5><span>Skype</span></h5>
						<p>A suite of recognizable icons</p>
					</a>
				</li>
				<li>
					<a href="casestudy/canvas/">
						<div class="image"><img src="casestudy/_images/canvas/full_app.jpg" /></div>
						<h5><span>Campaign Monitor</span></h5>
						<p>A fun tool to build beautiful emails</p>
					</a>
				</li>
				<li>
					<a href="casestudy/sendle/">
						<div class="image"><img src="casestudy/_images/sendle/devices.jpg" /></div>
						<h5><span>Sendle</span></h5>
						<p>A modern shipping app for small businesses</p>
					</a>
				</li>
				<li>
					<a href="casestudy/campaignmonitor/">
						<div class="image"><img src="casestudy/_images/campaignmonitor/business_cards.jpg" /></div>
						<h5><span>Campaign Monitor</span></h5>
						<p>A global brand for an Aussie tech company</p>
					</a>
				</li>
				<li>
					<a href="casestudy/monitor/">
						<div class="image"><img src="casestudy/_images/monitor/test.jpg" /></div>
						<h5><span>Monitor for iOS</span></h5>
						<p>Fresh iconography for iOS</p>
					</a>
				</li>
				<li>
					<a href="casestudy/pbp/">
						<div class="image"><img src="casestudy/_images/pbp/homepage.jpg" /></div>
						<h5><span>Postbox Party</span></h5>
						<p>Shopify store design and development</p>
					</a>
				</li>
				<li>
					<a href="casestudy/skype_business/">
						<div class="image"><img src="casestudy/_images/skype_business/profile.png" /></div>
						<h5><span>Skype for Business</span></h5>
						<p>A UI for Skype&rsquo;s business tools</p>
					</a>
				</li>
				<li>
					<a href="more/">
						<div class="image"><img src="casestudy/_images/misc/toniguy_01.jpg" /></div>
						<h5><span>More</span></h5>
						<p>Agency work, side projects and various digital projects</p>
					</a>
				</li>
			</ul>
			 
<?php
	//include(path.'_includes/recent.php');
	include(path.'_includes/footer.php');
?>