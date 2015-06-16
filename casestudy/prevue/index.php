<?php 
	define('path','../../');
	$navigation = array(
		"this" => array(
			"path"	=> "./",
			"title"	=> "Prevue"
		),
		"prev" => array(
			"path"	=> "../..",
			"title"	=> "Home"
		),
		"next" => array(
			"path"	=> "../canvas",
			"title"	=> "Canvas"
		)
	);
	include(path.'_includes/header.php');
?>
		<div id="projectIntro">
			<h1>Prevue</h1>
			<span class="subscript">Founder &amp; Product Design Lead <em>&#8226;</em> UX / UI / Development <em>&#8226;</em> <?php echo date('Y'); ?></span>
		</div>
	</div>
	
	<div class="fullImage top">
		<img class="leadImg" src="../_images/prevue/Homepage.jpg"  />
	</div>

	<div class="container">	
		<div class="project">
			<h5>The Brief</h5>
			<p class="info"><strong>Above/</strong> The Library screen. A drag-and-drop UI that allows upload and collection of work into projects and groups</p>
			<p>In 2007 I built an app that let me share fullscreen design concepts with my clients, organise my work, and allow my images to be annotated with feedback. Today, that app is used by 20,000 designers and agencies to share over 1 million designs with their own clients.</p>
			<p>Though still designed, built and run entirely by myself - Prevue now operates as a profitable business, and a playground for my experimentations in UX, UI and code. Above all else, Prevue provides me with unparallelled experience in feature management, customer communication and product strategy.</p>
		</div>
	</div>	
	
	<div class="fullImage">
		<img class="lazyload" data-sizes="auto" data-src="../_images/prevue/Library.jpg" />
	</div>
		
	<div class="container">	
		<div class="project">
			<p class="caption"><strong>Above/</strong> Images can be uploaded via drag &amp; drop, collected into projects and organised. They can then be securely shared with the public <strong>(below)</strong> for feedback.</p>
			
			<div class="image"><img class="lazyload" data-sizes="auto" data-src="../_images/prevue/Drag.jpg" width="100%" /></div>
			<div class="image close"><img class="lazyload" data-sizes="auto" data-src="../_images/prevue/Public_Project.jpg" width="100%" /></div>
			<p class="caption"><strong>Below/</strong> Everything in the app is optimised for ease or organisation, and for real-time client feedback. Projects can be commented on, images can be highlighted and annotated &mdash; then all feedback is collated, and can start a conversation thread</p>
		</div>
	</div>
	
	<div class="fullImage">
		<img class="lazyload" data-sizes="auto" data-src="../_images/prevue/Project.jpg" />
		<img class="lazyload spacer" data-sizes="auto" data-src="../_images/prevue/Fullscreen.jpg" />
		<img class="lazyload spacer" data-sizes="auto" data-src="../_images/prevue/Feedback.jpg" />
	</div>
	
	<div class="container">	
		<div class="project">
			<h5>Minimal UI</h5>
			<p class="info"><strong>Below/</strong> Some small parts of the UI where special attention has been paid to the details</p>			
			<p>Prevue has been my own personal experiment in UX/UI - every interaction, element and animation has been designed to ensure the product is as efficient and intuitive as possible.</p>
			<p>Similar attention has been paid to the quality of the codebase, which is optimised for speed and performance (<a href="http://blog.prevue.it/posts/speed-matters">read more</a>), and utilises drag &amp; drop functionality to give the app a native feel on desktop, iPad and retina.</p>
			<p><a href="https://medium.com/@buzzusborne/god-is-in-the-details-bc3a9a9a5d88">&#8220;God is in the details&#8221;</a> is an article I wrote about the importance of the details in UX &amp; UI, specifically relating to my work on Prevue.</p>
			
			<div class="image half"><img class="lazyload" data-sizes="auto" data-src="../_images/prevue/ui_comment.jpg" /></div>
			<div class="image half right"><img class="lazyload" data-sizes="auto" data-src="../_images/prevue/ui_library.jpg" /></div>
			<div class="image close"><img class="lazyload" data-sizes="auto" data-src="../_images/prevue/ui_proMenu.png" /></div>
			<div class="image close"><img class="lazyload" data-sizes="auto" data-src="../_images/prevue/ui_groups.jpg" /></div>
			<div class="image close"><img class="lazyload" data-sizes="auto" data-src="../_images/prevue/ui_upgrade.jpg" /></div>
			<div class="image half close"><img class="lazyload" data-sizes="auto" data-src="../_images/prevue/ui_menu.png" /></div>
			<div class="image half right close"><img class="lazyload" data-sizes="auto" data-src="../_images/prevue/ui_logo.png" /></div>
			<div class="image close under"><img class="lazyload" data-sizes="auto" data-src="../_images/prevue/ui_icons.png" /></div>
		</div>
	</div>
	
	<hr class="sectionBreak" />

	<div class="container">
		<div class="project">
			<h5>Marketing &amp; Optimisation</h5>
			<p class="info"><strong>Below/</strong> A lightweight and mobile-first CMS I built for Prevue that allows me to manage activity in the app</p>			
			<p>In addition to the product itself, I also spend a great deal of effort on Marketing &mdash; which varies from A/B testing the <a href="https://prevue.it/">homepage</a> and writing for the <a href="https://blog.prevue.it/">blog</a> to sending regular email marketing.</p>
			<p>This side of the business has also been a good opportunity to experiment with conversion optimisation and lead-nurturing, all of which I measure using a bespoke CMS I built for Prevue.</p>
			
			<div class="image"><img class="lazyload" data-sizes="auto" data-src="../_images/prevue/cms.jpg" width="100%" /></div>
			<div class="image"><img class="lazyload" data-sizes="auto" data-src="../_images/prevue/Home_Iconography.png" width="100%" /></div>
			<p class="caption"><strong>Above/</strong> Iconography used throughout the marketing site. <br /><strong>Below/</strong> One of the signup variants being tested on the homepage</p>
			<div class="image"><img class="lazyload" data-sizes="auto" data-src="../_images/prevue/Signup.png" width="100%" /></div>
		</div>
		
		<dl class="outro">
			<div class="col left">
				<dt>Position</dt>
					<dd>Founder <em class="special amp">&amp;</em> Product Lead</dd>
				<dt>Company</dt>
					<dd>Prevue</dd>
				<dt>Date</dt>
					<dd>2007&ndash;<?php echo date('Y'); ?></dd>
			</div>
			<div class="col middle">			
				<dt>Responsibilities</dt>
					<dd>UX <em class="special amp">&amp;</em> UI</dd>
					<dd>User testing</dd>
					<dd>Front-end (HTML, CSS, JavaScript)</dd>
					<dd>Backend (MySQL, PHP, Apache)</dd>
					<dd>Business development <em class="special amp">&amp;</em> Strategy</dd>
					<dd>Support</dd>
			</div>
			<div class="col right">
				<dt>More</dt>
					<dd><a href="https://medium.com/prevue-app">Articles on Medium</a></dd>
					<dd><a href="https://prevue.it/">Visit Prevue</a></dd>
			</div>
		</dl>
		
<?php
	include(path.'_includes/footer.php');
?>