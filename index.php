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
			<p class="lead">I&rsquo;m the Founder of Prevue <em class="special amp">&amp;</em> Head of Product at Sendle. Previously UX Director at Campaign Monitor, UI Lead at Skype and Creative Director to various digital agencies. <a href="about/">More</a></p>
			
			<h3>Work.</h3>
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
						<div class="image"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="casestudy/_images/skype/desktop_skype.jpg" /></div>
						<h5><span>Skype</span></h5>
						<p>Digital Art Director</p>
					</a>
				</li>
				<li>
					<a href="casestudy/canvas/">
						<div class="image"><img class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-sizes="auto" data-src="casestudy/_images/canvas/full_app.jpg" /></div>
						<h5><span>Email Builder</span></h5>
						<p>Product Design Lead (UX <em class="special">/</em> UI)</p>
					</a>
				</li>
				<li>
					<a href="casestudy/campaignmonitor/">
						<div class="image"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="casestudy/_images/campaignmonitor/business_cards.jpg" /></div>
						<h5><span>Campaign Monitor</span></h5>
						<p>Creative Director</p>
					</a>
				</li>
				<li>
					<a href="casestudy/monitor/">
						<div class="image"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="casestudy/_images/monitor/nav_bar.png" /></div>
						<h5><span>Monitor for iOS</span></h5>
						<p>Product Design Lead</p>
					</a>
				</li>
			</ul>

			<ul class="caseStudies">
				<li class="slim">
					<a href="#">
						<h5><span>Sendle</span></h5>
					</a>
				</li>
				<li class="slim">
					<a href="#">
						<h5><span>HappyStats</span></h5>
					</a>
				</li>
				<li class="slim">
					<a href="#">
						<h5><span>Create <em class="special amp">&amp;</em> Send</span></h5>
					</a>
				</li>
				<li class="slim">
					<a href="#">
						<h5><span>Postbox Party</span></h5>
					</a>
				</li>
				<li class="slim">
					<a href="#">
						<h5><span>Toni <small>+</small> Guy</span></h5>
					</a>
				</li>
				<li class="slim">
					<a href="#">
						<h5><span>The Argyle</span></h5>
					</a>
				</li>
				<li class="slim">
					<a href="#">
						<h5><span>Skype for Business</span></h5>
					</a>
				</li>
		</ul>
				
<?php
	include(path.'_includes/footer.php');
?>