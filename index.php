<?php 
	define('path','');
	$hideNav=TRUE;
	$navigation = array(
		"prev" => array(
			"path"	=> "/about",
			"title"	=> "About Buzz"
		),
		"next" => array(
			"path"	=> "casestudy/atlassian",
			"title"	=> "Atlassian"
		),
		"twitter_img" => "casestudy/_images/atlassian/jira-hero.jpg"
	);
	include(path.'_includes/header.php');
?>
		<div id="about">		
			<p class="lead">I&rsquo;m a Product Designer. I help companies solve tough customer problems through beautiful design, clear communication and clever technology. I've been working with agencies <em class="special amp">&amp;</em> startups for <?php echo (date('Y') - 2005); ?> years. <a href="about/">More...</a></p>
			
      <!-- <div id="photo"><a href="about/" title="More about Buzz"><img src="_assets/home/manor-house-buzz.jpg" alt="Buzz Usborne" /></a></div> -->
			
			<h3>Case Studies</h3>
		</div>
		
		<ul class="caseStudies">
				<li>
					<a href="casestudy/atlassian/">
						<div class="image leadImg"><img src="casestudy/_images/atlassian/jira-hero.jpg" /></div>
						<h5><span>Atlassian</span></h5>
						<p>I helped software teams work more efficiently.</p>
					</a>
				</li>
				<li>
					<a href="casestudy/prevue/">
						<div class="image leadImg"><img src="casestudy/_images/prevue/Homepage.jpg" /></div>
						<h5><span>Prevue</span></h5>
						<p>I closed the feedback loop between designers and their clients.</p>
					</a>
				</li>
				<li>
					<a href="casestudy/skype/">
						<div class="image"><img src="casestudy/_images/skype/skype_conversation.jpg" /></div>
						<h5><span>Skype</span></h5>
						<p>I designed iconography that stood the test of time.</p>
					</a>
				</li>
				<li>
					<a href="casestudy/canvas/">
						<div class="image"><img src="casestudy/_images/canvas/full_app.jpg" /></div>
						<h5><span>Campaign Monitor</span></h5>
						<p>I made it fun and easy to design beautiful emails (really).</p>
					</a>
				</li>
				<li>
					<a href="casestudy/sendle/">
						<div class="image"><img src="casestudy/_images/sendle/devices.jpg" /></div>
						<h5><span>Sendle</span></h5>
						<p>I helped small businesses send their merchendise with confidence.</p>
					</a>
				</li>
				<li>
					<a href="casestudy/campaignmonitor/">
						<div class="image"><img src="casestudy/_images/campaignmonitor/business_cards.jpg" /></div>
						<h5><span>Campaign Monitor</span></h5>
						<p>I built a team and a brand for one of Australia's largest startups.</p>
					</a>
				</li>
				<li>
					<a href="casestudy/monitor/">
						<div class="image"><img src="casestudy/_images/monitor/test.jpg" /></div>
						<h5><span>Monitor for iOS</span></h5>
						<p>I brought some personality to iOS7.</p>
					</a>
				</li>
				<li>
					<a href="casestudy/pbp/">
						<div class="image"><img src="casestudy/_images/pbp/homepage.jpg" /></div>
						<h5><span>Postbox Party</span></h5>
						<p>I designed and built a Shopify store that looked as handmade as its products.</p>
					</a>
				</li>
				<li>
					<a href="casestudy/skype_business/">
						<div class="image"><img src="casestudy/_images/skype_business/profile.png" /></div>
						<h5><span>Skype for Business</span></h5>
						<p>I designed the UI for Skype's business platform and main revenue source.</p>
					</a>
				</li>
				<li>
					<a href="casestudy/misc/">
						<div class="image"><img src="casestudy/_images/misc/toniguy_01.jpg" /></div>
						<h5><span>Assorted digital work</span></h5>
						<p>I designed marketing sites, games and personal projects.</p>
					</a>
				</li>
			</ul>
			 
<?php
	//include(path.'_includes/recent.php');
	include(path.'_includes/footer.php');
?>