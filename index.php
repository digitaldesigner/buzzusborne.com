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
<<<<<<< HEAD
		
		<div id="intro">
			<h3>I'm Buzz, a Digital Designer. I work as the Senior Product Designer at Campaign Monitor &amp; Founded <a href="https://prevue.it/">Prevue</a>.</h3>
		</div>
		
		<div id="showall">		
			<div class="image half prevue">
				<a href="projects/prevue/">
					<span class="title"><em>Prevue</em></span>
					<img src="_assets/gfx/large_prevue.jpg" height="478" draggable="false" />
				</a>
			</div>
			<div class="image half right close campmon">
				<a href="projects/campmon/">
					<span class="title"><em>Campaign Monitor</em></span>
					<img src="_assets/gfx/large_campmon.jpg" height="478" draggable="false" />
				</a>
			</div>
			<div class="image spanthree skype">
				<a href="projects/skype/">
					<span class="title"><em>Skype</em></span>
					<img src="_assets/gfx/large_skype.png" height="286" draggable="false" />
				</a>
			</div>
			<div class="image portrait pbp">
				<a href="projects/pbp/">
					<span class="title"><em>Postbox Party</em></span>
					<img src="_assets/gfx/large_pbp.jpg" height="477" draggable="false" />
				</a>
			</div>
			<div class="image thumb cmdigi">
				<a href="projects/cm-digital">
					<span class="title"><em>CM Digital</em></span>
					<img src="_assets/gfx/cm_digital.jpg" height="180" draggable="false" />
				</a>
			</div>
			<div class="image thumb right argyle">
				<a href="projects/the-argyle/">
					<span class="title"><em>The Argyle</em></span>
					<img src="_assets/gfx/theargyle.jpg" height="180" draggable="false" />
				</a>
			</div>
=======
		<div id="about">		
			<p class="lead">I&rsquo;m a Digital Designer, Founder of Prevue and Head of Design at <a href="https://sendle.com/" target="_blank">Sendle</a>. Previously Product Design Lead at Campaign Monitor, Skype and Creative Director to various digital agencies. <a href="about/">More</a></p>
			<div id="photo"><a href="about/" title="Read more about me"><img src="_assets/home/buzzusborne_bw.jpg" width="100%" /></a></div>
>>>>>>> ux-rehash
		</div>
		
		<ul id="caseStudies">
				<li>
					<a href="casestudy/prevue/">
						<div class="image leadImg"><img src="casestudy/_images/prevue/Homepage.jpg" /></div>
						<h5><span>Prevue</span></h5>
						<p>Founder &amp; Product Design Lead <em class="special bullet">&#8226;</em> UX <em class="special">/</em> UI <em class="special">/</em> HTML</p>
					</a>
				</li>
				<li>
					<a href="casestudy/canvas/">
						<div class="image"><img class="lazyload" data-sizes="auto" data-src="casestudy/_images/canvas/modal_head.jpg" /></div>
						<h5><span>Canvas</span></h5>
						<p>Product Design Lead <em class="special bullet">&#8226;</em> UX <em class="special">/</em> UI</p>
					</a>
				</li>
				<li>
					<a href="casestudy/skype/">
						<div class="image"><img class="lazyload" data-sizes="auto" data-src="casestudy/_images/skype/desktop_skype.jpg" /></div>
						<h5><span>Skype</span></h5>
						<p>Art Director <em class="special bullet">&#8226;</em> Iconography <em class="special">/</em> UI</p>
					</a>
				</li>
				<li>
					<a href="casestudy/campaignmonitor/">
						<div class="image"><img class="lazyload" data-sizes="auto" data-src="casestudy/_images/campaignmonitor/signage.jpg" /></div>
						<h5><span>Campaign Monitor</span></h5>
						<p>Creative Director <em class="special bullet">&#8226;</em> Branding <em class="special">/</em> Digital <em class="special">/</em> Print <em class="special">/</em> Advertising </p>
					</a>
				</li>
				<li>
					<a href="casestudy/monitor/">
						<div class="image"><img class="lazyload" data-sizes="auto" data-src="casestudy/_images/monitor/icons_photo.jpg" /></div>
						<h5><span>Monitor App</span></h5>
						<p>Product Design Lead <em class="special bullet">&#8226;</em> Iconography <em class="special">/</em> UX <em class="special">/</em> UI</p>
					</a>
				</li>
				<li class="soon">
					<h5><span>Create <small>+</small> Send<div class="strikethrough">&nbsp;</div></span></h5>
					<p>Product Design Lead &mdash; Coming soon</p>
				</li>
				<li class="soon">
					<h5><span>Postbox Party<div class="strikethrough">&nbsp;</div></span></h5>
					<p>Art Director &mdash; Coming soon</p>
				</li>
				<li class="soon">
					<h5><span>Toni <small>+</small> Guy<div class="strikethrough">&nbsp;</div></span></h5>
					<p>Art Director &mdash; Coming soon</p>
				</li>
				<li class="soon">
					<h5><span>The Argyle<div class="strikethrough">&nbsp;</div></span></h5>
					<p>Art Director &mdash; Coming soon</p>
				</li>
				<li class="soon">
					<h5><span>Skype for Business<div class="strikethrough">&nbsp;</div></span></h5>
					<p>Lead Visual Designer &mdash; Coming soon</p>
				</li>
		</ul>
				
<?php
	include(path.'_includes/footer.php');
?>