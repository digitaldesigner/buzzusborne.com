<?php 
	define('path','../../');
	$navigation = array(
		"this" => array(
			"path"	=> "./",
			"title"	=> "Russian Standard Vodka"
		),
		"prev" => array(
			"path"	=> "../toniandguy",
			"title"	=> "Toni&amp;Guy"
		),
		"next" => array(
			"path"	=> "../rango",
			"title"	=> "Rango"
		),
		"twitter_img" => "casestudy/_images/misc/russian_01.jpg"
	);
	include(path.'_includes/header.php');
?>
		<div id="projectIntro">
			<h1>Russian Standard</h1>
			<span class="subscript">Senior Designer <em>&#8226;</em> Visual Design / Vodka Tasting <em>&#8226;</em> 2009</span>
		</div>
	</div>
	
	<div class="fullImage top">
		<img class="leadImg" src="../_images/misc/russian_01.jpg"  />
	</div>
	
	<!-- Russian Standard -->
	<div class="container">	
		<div class="project">
			<div class="image close"><img class="lazyload" data-sizes="auto" data-src="../_images/misc/russian_03.jpg" /></div>
			<div class="image close"><img class="lazyload" data-sizes="auto" data-src="../_images/misc/russian_02.jpg" /></div>
		</div>
	</div>
	
	<div class="container">	
		<dl class="outro">
			<div class="col left">
				<dt>Position</dt>
					<dd>Senior Designer</dd>
				<dt>Date</dt>
					<dd>2009</dd>
			</div>
			<div class="col middle">			
				<dt>Responsibilities</dt>
					<dd>Visual Design</dd>
					<dd>Art Direction</dd>
			</div>
      <div class="col right">
				<dt>Company</dt>
					<dd><a href="http://storyworldwide.com/">Story Worldwide</a></dd>
      </div>
		</dl>
		
<?php
	include(path.'_includes/footer.php');
?>