<?php 
	define('path','../../');
	$navigation = array(
		"this" => array(
			"path"	=> "../../",
			"title"	=> "Postbox Party"
		),
		"prev" => array(
			"path"	=> "../monitor",
			"title"	=> "Monitor for iOS"
		),
		"next" => array(
			"path"	=> "../skype_business",
			"title"	=> "Skype for Business"
		),
		"twitter_img" => "casestudy/_images/pbp/pbp_homepage.jpg"
	);
	include(path.'_includes/header.php');
?>
		<div id="projectIntro">
			<h1>Postbox Party</h1>
			<span class="subscript">Freelance <em>&#8226;</em> UX / UI / Front-end Development <em>&#8226;</em> 2014</span>
		</div>
	</div>
	
	<div class="fullImage top">
		<img class="leadImg" src="../_images/pbp/pbp_homepage.jpg" />
	</div>

	<div class="container">	
		<div class="project">
			<h5>The Brief</h5>
			<p class="info"><strong>Above/</strong> The Postbox Party homepage running as a custom Shopify theme</p>

			<p>Postbox Party is a small company based in the UK and run by a close friend who creates bespoke handmade party boxes for various occasions. I designed and built a bespoke e-commerce site as a custom <a href="http://www.shopify.com/">Shopify</a> theme &mdash; which enabled the client to fully manage all parts of the site.</p>
			<p>Designed to have a very tactile and home-made feel, the site underwent a significant amount of testing and re-design to achieve this tricky mix of home-made and functional &mdash; a visual style that was carried from homepage through to checkout and email.</p>
			
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