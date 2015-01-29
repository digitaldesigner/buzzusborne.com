<?php 
	if(array_key_exists('HTTP_X_REQUESTED_WITH',$_SERVER) && $_SERVER['HTTP_X_REQUESTED_WITH']) {
		$imgPath = NULL;
		$AJAX=TRUE;
	} else{
		define('path','../../../');
		$imgPath = "../";
		include(path.'_includes/header.php');
		$AJAX=FALSE;
	}
?>
		
		<div id="project">
			<div class="image first"><img src="<?=$imgPath?>files/shipit.jpg" /></div>
			<p class="half">I've also designed and built a number of tracking tools and CRM applications to manage Prevue - which has become increasingly important to handle the volume of support and feautre requests as the product has grown.</p>
			
			<p class="half">One of the most useful tools I've built has been a custom CMS, which I use to get a high-level view of daily account activity. The app, left, shows the most recent signups and gives an insight into user behaviour by outlining some of the most popular features and projects for each customer.</p>
			
			<p class="caption half"><strong>Above:</strong> The feed for an individual user account using my own CMS app. Since I do almost all reporting and support via my phone, I decided to build a mobile-first content management system.</p>
			
			<p class="half">Prevue is a constantly evolving application, which updates to meet the requirements of the people who use it. For more information, <a href="http://signup.prevue.it/">create an account</a> or read <a href="http://blog.prevue.it/">the blog</a>.</p>
		</div>
		
		
<?php if(!$AJAX) { include(path.'_includes/footer.php'); } ?>