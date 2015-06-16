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
			<div id="photo"><a href="/about" title="Read more about Buzz"><img class="lazyload" data-sizes="auto" data-src="_assets/home/buzzusborne.jpg" /></a></div>
			<p class="lead">I&rsquo;m a Digital Designer and Founder of <a href="casestudy/prevue/" title="See my work for Prevue">Prevue</a>. Previously Product Design Lead at <a href="casestudy/canvas/" title="See my work for Campaign Monitor">Campaign Monitor</a>, UX<em class="special">/</em>UI Designer at <a href="casestudy/skype/" title="See my work for Skype">Skype</a> <em class="special amp">&amp;</em> Creative Director to various digital agencies.</p>
		</div>
		
		<ul id="caseStudies">
				<li><a href="casestudy/prevue/"><h5><span>Prevue</span></h5><img class="lazyload" data-sizes="auto" data-src="_assets/home/prevue.jpg" /></a></li>
				<li class="even"><a href="casestudy/canvas/"><h5><span>Canvas</span></h5><img class="lazyload" data-sizes="auto" data-src="_assets/home/temp.jpg" /></a></li>
				<li><a href="casestudy/skype/"><h5><span>Skype</span></h5><img class="lazyload" data-sizes="auto" data-src="_assets/home/temp.jpg" /></a></li>
				<li class="even"><a href="casestudy/campaignmonitor/"><h5><span>Campaign Monitor</span></h5><img class="lazyload" data-sizes="auto" data-src="_assets/home/temp.jpg" /></a></li>
				<li><a href="casestudy/monitor/"><h5><span>Monitor App</span></h5><img class="lazyload" data-sizes="auto" data-src="_assets/home/monitor.jpg" /></a></li>
				<li class="even"><a href="#"><h5><span>Create <small>+</small> Send</span></h5><img class="lazyload" data-sizes="auto" data-src="_assets/home/temp.jpg" /></a></li>
				<li><a href="#"><h5><span>Postbox Party</span></h5><img class="lazyload" data-sizes="auto" data-src="_assets/home/temp.jpg" /></a></li>
				<li class="even"><a href="#"><h5><span>Toni <small>+</small> Guy</span></h5><img class="lazyload" data-sizes="auto" data-src="_assets/home/temp.jpg" /></a></li>
				<li><a href="#"><h5><span>The Argyle</span></h5><img class="lazyload" data-sizes="auto" data-src="_assets/home/temp.jpg" /></a></li>
				<li class="even"><a href="#"><h5><span>Skype for Business</span></h5><img class="lazyload" data-sizes="auto" data-src="_assets/home/temp.jpg" /></a></li>
		</ul>
				
<?php
	include(path.'_includes/footer.php');
?>