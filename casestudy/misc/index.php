<?php 
	define('path','../../');
	$navigation = array(
		"this" => array(
			"path"	=> "../../",
			"title"	=> "Assorted Work"
		),
		"prev" => array(
			"path"	=> "../skype_business",
			"title"	=> "Skype for Business"
		),
		"next" => array(
			"path"	=> "../../about",
			"title"	=> "About"
		)
	);
	include(path.'_includes/header.php');
?>
		<div id="projectIntro">
			<h1>More&hellip;</h1>
			<span class="subscript">Assorted digital work <em>&#8226;</em> 2010 &ndash; <?php echo date('Y');?></span>
		</div>
	</div>
	
	<div class="fullImage top">
		<img class="leadImg" src="../_images/misc/ex_headline.png"  />
	</div>
	
	<div class="container">	
		<div class="project">
			<h5>Prevue expense tracker</h5>
			<p class="info"><strong>Above/</strong> A key screen for a profit and expense tracker for <a href="../prevue/">Prevue</a></p>
			
			<p>Whilst running <a href="../prevue/">Prevue</a>, I found it difficult to track real-time profit &mdash; especially as Prevue operates with both monthly recurring and one-off payments, and charges in multiple currencies. In addition, it was difficult to report expenses against profit&hellip; so I built my own tool.</p>
			<p>The tool pulls real-time payment data from Stripe, calculates conversion rates using 3rd party forex rates, pulls expenses from Google Docs, then calculates tax and payment fees to leave raw profit.</p>
			<p>Optimised for mobile, this now operates as a day-to-day substitute to any other payment reporting I have for Prevue.</p>
			<div class="image"><img class="lazyload" width="100%s" data-sizes="auto" data-src="../_images/misc/ex_desktop.png" /></div>
			<p class="caption"><strong>Below/</strong> Built to be mobile-first (even the graph), I use the tool almost every day to get a picture of company performance</p>
			<div class="image half"><img class="lazyload" data-sizes="auto" data-src="../_images/misc/ex_detail_mobile01.png" width="100%" /></div>
			<div class="image half right"><img class="lazyload" data-sizes="auto" data-src="../_images/misc/ex_detail_mobile02.png" width="100%" /></div>			
		</div>
	</div>
	

	<!-- Toni & Guy -->
	<div class="container">	
		<div class="project">
			<h5>Toni&amp;Guy</h5>
			<p><strong>Company:</strong> <a href="http://mentallyfriendly.com/" target="_blank" rel="nofollow">Mentally Friendly</a><br /><strong>Role:</strong> Design Lead<br /><strong>Date:</strong> 2011</p>
		</div>
	</div>
	<div class="fullImage">
		<img class="lazyload" data-sizes="auto" data-src="../_images/misc/toniguy_01.jpg" />
	</div>
	<div class="container">	
		<div class="project">
			<div class="image close"><img class="lazyload" data-sizes="auto" data-src="../_images/misc/toniguy_02.jpg" /></div>
			<div class="image close"><img class="lazyload" data-sizes="auto" data-src="../_images/misc/toniguy_03.jpg" /></div>
		</div>
	</div>
	
	<!-- Russian Standard -->
	<div class="container">	
		<div class="project">
			<h5>Russian Standard Vodka</h5>
			<p><strong>Company:</strong> <a href="http://www.storyworldwide.com/" target="_blank" rel="nofollow">Story Worldwide</a><br /><strong>Role:</strong> Senior Designer<br /><strong>Date:</strong> 2009</p>
		</div>
	</div>
	<div class="fullImage">
		<img class="lazyload" data-sizes="auto" data-src="../_images/misc/russian_01.jpg" />
	</div>
	<div class="container">	
		<div class="project">
			<div class="image close"><img class="lazyload" data-sizes="auto" data-src="../_images/misc/russian_03.jpg" /></div>
			<div class="image close"><img class="lazyload" data-sizes="auto" data-src="../_images/misc/russian_02.jpg" /></div>
		</div>
	</div>
	
	<!-- Rango -->
	<div class="container">	
		<div class="project">
			<h5>Nickelodeon <em class="special amp">&amp;</em> Old El Paso</h5>
			<p><strong>Company:</strong> <a href="http://mentallyfriendly.com/" target="_blank" rel="nofollow">Mentally Friendly</a><br /><strong>Role:</strong> Design Lead<br /><strong>Date:</strong> 2011</p>
		</div>
	</div>
	<div class="fullImage">
		<img class="lazyload" data-sizes="auto" data-src="../_images/misc/rango_01.jpg" />
	</div>
	<div class="container">	
		<div class="project">
			<div class="image close"><img class="lazyload" data-sizes="auto" data-src="../_images/misc/rango_02.jpg" /></div>
			<div class="image half close"><img class="lazyload" width="100%" data-sizes="auto" data-src="../_images/misc/rango_03.jpg" /></div>
			<div class="image half right close"><img class="lazyload" width="100%" data-sizes="auto" data-src="../_images/misc/rango_04.jpg" /></div>
		</div>
	</div>
	
	<div class="container">	
			
<?php
	include(path.'_includes/footer.php');
?>