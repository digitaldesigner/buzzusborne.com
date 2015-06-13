<?php 
	define('path','../../');
	$navigation = array(
		"this" => array(
			"path"	=> "../../",
			"title"	=> "Monitor"
		),
		"prev" => array(
			"path"	=> "../campaignmonitor",
			"title"	=> "Campaign Monitor"
		),
		"next" => array(
			"path"	=> "../createsend",
			"title"	=> "Create+Send"
		)
	);
	include(path.'_includes/header.php');
?>
		<div id="projectIntro">
			<h1>Monitor</h1>
			<span class="subscript">Creative Director <em>·</em> Art Direction / Iconography <em>·</em> 2014</span>
		</div>
	</div>
	
	<div class="fullImage">
		<img src="../_images/campaignmonitor/cm_signage.jpg" />
	</div>

	<div class="container">
		<div class="project">
			<p class="info"><strong>Above/</strong> The Campaign Monitor logo featured in their Sydney offices</p>
			<p>I was the Creative Director for the Digital Design team at Campaign Monitor. Over the course of 3 years, I designed the brand, site and set the visual tone for all global marketing. During this time I had my hand in all areas of design, from print and advertising through to art direction and development.</p>

			<dl class="outro">
				<div class="col left">
					<dt>Position</dt>
						<dd>Creative Director</dd>
					<dt>Company</dt>
						<dd>Campaign Monitor</dd>
				</div>
				<div class="col middle">			
					<dt>Responsibilities</dt>
						<dd>Design</dd>
						<dd>Management</dd>
						<dd>Creative strategy</dd>
						<dd>Art direction</dd>
				</div>
				<div class="col right">
					<dt>More</dt>
						<dd><a href="#">CampaignMonitor.com</a></dd>
				</div>
			</dl>
	
<?php
	include(path.'_includes/footer.php');
?>