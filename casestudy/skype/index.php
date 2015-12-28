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
			<p class="info"><strong>Above/</strong> The <?php echo date('Y'); ?> release of Skype for Mac, featuring the icons I designed <?php echo (date('Y') - 2010); ?> years ago</p>

			<p>As the Skype application grew from being a desktop-based app, to being integrated on TV’s, smartphones and the web &mdash; it became apparent that their UI also needed an update in order to scale.</p>

			<p>As part of the team responsible for the update, I was challenged with creating a suite of icons to be used in the future incarnations of the Skype product. My brief was to re-draw all 80 existing icons to work across multiple platforms, at all possible dimensions &mdash; whilst remaining recognisably &ldquo;Skype&rdquo;.</p>
			
			<div class="image"><img class="lazyload" data-sizes="auto" data-src="../_images/skype/process.jpg" width="100%" /></div>
			<div class="image half close"><img class="lazyload" data-sizes="auto" data-src="../_images/skype/process02.jpg" /></div>
			<div class="image half close right under"><img class="lazyload" data-sizes="auto" data-src="../_images/skype/sketches.png" /></div>
			
			<p class="info"><strong>Above/</strong> Working with the creative team to concept and test variants of the core icon set (call, video etc)</p>
			
			<p>I led my own team, working under the direction of Steve Pearce (previously Deepend and Poke, pictured above) in London, and alongside the Skype product team led by <a href="http://zilmer.com/" target="_blank">Priidu Zilmer</a> in Estonia.</p>
			
			<p>My research was largely influenced by <a href="http://iconwerk.de/" target="_blank">Stefan Dziallas</a>, which led me to pursue a direction that relied on negative space and solid shapes &mdash; a direction I felt would be timeless, as well as scalable. For each icon in the core group (call, video, SMS etc), I sketched up to 50 concepts, which were roughly artworked and user-tested &mdash; below is an example of the discarded concepts for the video icon:</p>
		</div>
	</div>
	
	<div class="fullImage">
		<img class="spacer lazyload" data-sizes="auto" data-src="../_images/skype/concepts.png" />
	</div>
	
	<div class="container">
		<div class="project">
			<h5>Artwork</h5>
			<p class="info"><strong>Above/</strong> The various concepts for the video icon, the most successful of which was taken to the artwork stage (below)</p>
			<p>The consistent &ldquo;personality&rdquo; and responsive requirements of the brief led me to take a different approach to the artwork stage of the project. Rather than approach each icon individually, my assumption was that if I designed all shapes as I would a typeface (i.e. set to a rigid grid with global &ldquo;rules&rdquo;), I would achieve personality through uniformity.</p>
			
			<p>After some research (and with the help of some mathematically-minded colleagues), I set out to construct each icon to an 8x8 grid, with each vector point snapped to an axis. The rate of curve was enforced by drawing circles divisible by 2 in diameter, with a 225px diameter curve to be featured in every icon. And angles were kept at 0&deg;, 7.5&deg;, 15&deg;, 30&deg; and 90&deg;.</p>
			
			<p>The result was a suite of icons which were scalable to any size, whilst maintaining a common personality. The icons (below) are still used today.</p>
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
			<p class="caption"><strong>Above &amp; below/</strong> The final icons, each one drawn to the same rules and grids outlined in the above examples.</p>
			<div class="image"><img class="lazyload" data-sizes="auto" data-src="../_images/skype/iconset.png" width="100%" /></div>
		</div>
	</div>
	
	<div class="fullImage"><img class="lazyload" data-sizes="auto" data-src="../_images/skype/main_icons.png" width="100%" /></div>
	
	<div class="container">
		<div class="project">
			<div class="image close"><img class="lazyload" data-sizes="auto" data-src="../_images/skype/misc.png" width="100%" /></div>
			
			<div class="image"><img class="lazyload" data-sizes="auto" data-src="../_images/skype/unfriended_movie.jpg" width="100%" /></div>
			<p class="caption"><strong>Above/</strong> My work featuring in the movie, &lsquo;Unfriended&rsquo; (<a href="https://www.youtube.com/watch?v=JQfjW0DLDr0" target="_blank">Watch trailer</a>).<br />Courtesy of Universal Pictures.</p>
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