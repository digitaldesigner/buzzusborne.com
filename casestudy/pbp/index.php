<?php 
	define('path','../../');
	$navigation = array(
		"this" => array(
			"path"	=> "../../",
			"title"	=> "Postbox Party"
		),
		"prev" => array(
			"path"	=> "../prevue",
			"title"	=> "Prevue"
		),
		"next" => array(
			"path"	=> "../../about",
			"title"	=> "About"
		)
	);
	include(path.'_includes/header.php');
?>
		<div id="projectIntro">
			<h1>Postbox Party</h1>
			<span class="subscript">Freelance <em>&#8226;</em> UX / UI / Shopify Theme <em>&#8226;</em> 2014</span>
		</div>
	</div>
	
	<div class="fullImage top">
		<img class="leadImg" src="../_images/pbp/pbp_homepage.jpg" />
	</div>

	<div class="container">	
		<div class="project">
			<h5>The Brief</h5>
			<p class="info"><strong>Above/</strong> Sendle&rsquo;s friendly, mobile-first UI is a new approach to logistics software</p>

			<p>My role as Head of Product was to work alongside the executive team, board and investors to help define the long-term vision for the Sydney-based startup, and build the product strategy necessary to deliver on that. I also oversaw all feature development and had end-to-end involvement in the research, spec, design and implementation of new features.</p>
			
			<div class="image"><img class="lazyload" data-sizes="auto" data-src="../_images/pbp/product_page.jpg" width="100%" /></div>
			<div class="image close"><img class="lazyload" data-sizes="auto" data-src="../_images/pbp/checkout.png" width="100%" /></div>
			<div class="image close"><img class="lazyload" data-sizes="auto" data-src="../_images/pbp/cart.png" width="100%" /></div>
		</div>
		<dl class="outro">
			<div class="col left">
				<dt>Position</dt>
					<dd>Freelance Designer</dd>
			</div>
			<div class="col middle">
				<dt>Company</dt>
					<dd><a href="http://www.postboxparty.com">Postbox Party</a></dd>
			</div>
			<div class="col right">			
				<dt>Responsibilities</dt>
					<dd>Concept</dd>
					<dd>Visual Design</dd>
					<dd>HTML / CSS</dd>
					<dd>Shopify Theme integration</dd>
			</div>
		</dl>
		
			
<?php
	include(path.'_includes/footer.php');
?>