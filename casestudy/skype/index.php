<?php 
	define('path','../../');
	$navigation = array(
		"this" => array(
			"path"	=> "../../",
			"title"	=> "Skype"
		),
		"prev" => array(
			"path"	=> "../canvas",
			"title"	=> "Canvas"
		),
		"next" => array(
			"path"	=> "../campaignmonitor",
			"title"	=> "Campaign Monitor"
		)
	);
	include(path.'_includes/header.php');
?>
		<div id="projectIntro">
			<h1>Skype</h1>
			<span class="subscript">Art Director <em>·</em> Iconography <em>·</em> 2010</span>
		</div>
	</div>
	
	<div class="fullImage top">
		<img class="leadImg" src="../_images/skype/desktop_skype.jpg" />
	</div>

	<div class="container">	
		<div class="project">
			<h5>The Brief</h5>
			<p class="info"><strong>Above:</strong> The Skype app (OS X) featuring 12 icons I designed</p>
			<p>Working in-house with the Skype design teams in London and Estonia, I designed the icon suite currently used in all Skype applications - including their <a href="http://skype.com">global website</a> and iPhone app.</p>
			<p>The brief was to design a family of icons that were recognisably Skype, and were scalable enough to work across multiple platforms and sizes.</p>
			
			<div class="image"><img class="lazyload" data-sizes="auto" data-src="../_images/skype/process.jpg" width="100%" /></div>
			<div class="image half close"><img class="lazyload" data-sizes="auto" data-src="../_images/skype/process02.jpg" /></div>
			<div class="image half close right"><img class="lazyload" data-sizes="auto" data-src="../_images/skype/sketches.png" /></div>
			
			<h5>Designing to a grid</h5>
			<p class="info"><strong>Below/</strong> Every icon was constructed using strict guidelines defining alignment, angle and rate of curve</p>
			<p>Due to the multi-platform requirements of these icons - they had to work everywhere, in every size. To ensure that they could be scaled up and down without losing quality or character, they were designed to a very strict grid and rate-of-curve. This meant they look correct anywhere from 8x8px, right up to retina and the sizes required for HD TV's and tablets.</p>
			
			<p>Each glyph was constructed to an 8x8 grid, with each point snapped to an axis. The rate of curve was enforced by drawing with circles divisible by 2 in diameter, though most icons followed a uniform 225px-diameter curve. Angles were kept at 7.5&deg;, 15&deg; or 30&deg;.</p>
		</div>
	</div>
	
	<div class="fullImage">
		<img class="lazyload" data-sizes="auto" data-src="../_images/skype/call.png" />
		<img class="lazyload spacer" data-sizes="auto" data-src="../_images/skype/cog.png" />
		<img class="lazyload spacer bottom" data-sizes="auto" data-src="../_images/skype/headset.png" />
	</div>
	
	<div class="container">
		<div class="project">
			<div class="image"><img class="lazyload" data-sizes="auto" data-src="../_images/skype/arrows.png" width="100%" /></div>
			<p class="caption"><strong>Above &amp; below/</strong> A small selection of the icons in the suite. All of them follow a strict grid and rate-of-curve, which help them all appear visually similar.</p>
			<div class="image"><img class="lazyload" data-sizes="auto" data-src="../_images/skype/iconset.png" width="100%" /></div>
		</div>
	</div>
	
	<div class="fullImage"><img class="lazyload" data-sizes="auto" data-src="../_images/skype/main_icons.png" width="100%" /></div>
	
	<div class="container">
		<div class="project">
			<div class="image close"><img class="lazyload" data-sizes="auto" data-src="../_images/skype/misc.png" width="100%" /></div>
		</div>
		<dl class="outro">
			<div class="col left">
				<dt>Position</dt>
					<dd>Art Director (Freelance)</dd>
			</div>
			<div class="col middle">
				<dt>Company</dt>
					<dd>Skype</dd>
			</div>
			<div class="col right">			
				<dt>Responsibilities</dt>
					<dd>Iconography</dd>
					<dd>Team Lead</dd>
			</div>
		</dl>
		
			
<?php
	include(path.'_includes/footer.php');
?>