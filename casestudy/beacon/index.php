<?php 
	define('path','../../');
	$navigation = array(
		"this" => array(
			"path"	=> "./",
			"title"	=> "Beacon"
		),
		"prev" => array(
			"path"	=> "../..",
			"title"	=> "Home"
		),
		"next" => array(
			"path"	=> "../atlassian",
			"title"	=> "Atlassian"
		),
		"twitter_img" => "casestudy/_images/beacon/beacon-cover.png"
	);
	include(path.'_includes/header.php');
?>
		<div id="projectIntro">
			<h1>Help Scout Beacon</h1>
			<span class="subscript">Designer <em>&#8226;</em> UX / UI / Prototyping <em>&#8226;</em> 2017&ndash;<?=date('Y')?></span>
		</div>
	</div>
	
	<div class="fullImage top">
		<img class="leadImg" src="../_images/beacon/beacon-cover.png"  />
	</div>
	
	<div class="container">	
		<div class="project">
			<h5>The Brief</h5>
			<p class="info"><strong>Above/</strong> The Beacon chat experience, only one small part of the overall functionality</p>
			<p>Help Scout has traditionally been an email platform at its core &mdash; a way for customer teams to provide world-class support a seamless and human way. Whilst chat has always been a channel that Help Scout customers wanted, the assumption was that it&rsquo;s difficult to provide fast and engaging support in real-time in a way that doesn&rsquo;t overwhelm support teams. Beacon was our attempt at challenging that.</p>

            <p>At the time our existing embeddable widget, Beacon, was being used to connect visitors to support documentation &mdash; my brief was to extend that tool to also deliver chat. I took this project from scoping, user research and prototyping through to UI, HTML prototyping and launch.</p>
        </div>
    </div>
	<div class="fullImage">
		<img class="lazyload" data-sizes="auto" data-src="../_images/beacon/chat-windows.png" />
    </div>

	<div class="container">	
		<div class="project">
            <div class="image half close"><img class="lazyload" data-sizes="auto" data-src="../_images/beacon/notification-greeter.png" width="100%" /></div>
            <div class="image half close right"><img class="lazyload" data-sizes="auto" data-src="../_images/beacon/notification-chat.png" width="100%" /></div>
            <div class="image close"><img class="lazyload" data-sizes="auto" data-src="../_images/beacon/article.png" width="100%" /></div>
            <p class="caption">The below shows one of hundreds of HTML prototypes that I created to demonstrate animation and transition between content</p>
            <div class="image"><img class="lazyload" data-sizes="auto" data-src="../_images/beacon/prototype-transition.gif" width="100%" /></div>
        </div>
    </div>
    
	<div class="fullImage">
		<img class="lazyload" data-sizes="auto" data-src="../_images/beacon/all-components.jpg" />
    </div>

    <div class="container">
        <div class="project">
            <h3>App-Side</h3>
            <p>Part of this project was also to extend the main application to support this additional channel in a way that didn&rsquo;t negatively impact the core (traditionally email) experience. The below screens show the agent-side chat view and Beacon customizations.</p>
            <div class="image"><img class="lazyload" data-sizes="auto" data-src="../_images/beacon/chat-convo.png" width="100%" /></div>
            <div class="image"><img class="lazyload" data-sizes="auto" data-src="../_images/beacon/sidebars.png" width="100%" /></div>
            <div class="image"><img class="lazyload" data-sizes="auto" data-src="../_images/beacon/beacon-settings.png" width="100%" /></div>
        </div>
    </div>

	<div class="container">	
		<div class="project">
			<dl class="outro">
				<div class="col left">
					<dt>Position</dt>
						<dd>Designer</dd>
					<dt>Company</dt>
						<dd>Help Scout</dd>
					<dt>Date</dt>
						<dd>2017&ndash;<?=date('Y')?></dd>
				</div>
				<div class="col middle">			
					<dt>Responsibilities</dt>
						<dd>UX <em class="special amp">&amp;</em> UI</dd>
						<dd>User-testing</dd>
						<dd>Animation</dd>
						<dd>Design Systems</dd>
						<dd>HTML prototyping</dd>
				</div>
				<div class="col right">
					<dt>More</dt>
						<dd><a href="https://www.helpscout.com/live-chat/">Try Beacon</a></dd>
						<dd><a href="https://helpscout.com/">Help Scout</a></dd>
				</div>
			</dl>
		
<?php
	include(path.'_includes/footer.php');
?>