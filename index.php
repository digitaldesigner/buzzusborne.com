<?php
	define('path','');
	$hideNav=TRUE;
	$bodyclass="dark_and_ominous";
	$navigation = array(
		"next" => array(
			"path"	=> "..",
			"title"	=> "Home"
		),
		"prev" => array(
			"path"	=> "../casestudy/monitor",
			"title"	=> "Monitor App"
		)
	);
	include(path.'_includes/header.php');
?>
		
		<div id="about">		
			<h3>About.</h3>
			<p class="lead">I&rsquo;m Buzz, a designer based in Sydney. I&rsquo;m deeply passionate about problem solving and enjoy varied, challenging digital work. I create thoughtful, beautiful and useful product experiences through design, code and strategy.</p>
							
			<h6>Work</h6>
			<p>I currently work as the Head of Product at <a href="#">Sendle</a>, I am also the Founder of <a href="#">Prevue</a>. Until 2015, I was the UX Director at software startup, <a href="#">Campaign Monitor</a> where I ran several teams of designers &mdash; and also designed a number of major features. I've also had the pleasure of working with Skype, Facebook and various small startups as a UX/UI designer.</p>
			
			<p>Before my time in Sydney, I spent almost 10 years in permanent and freelance positions at digital agencies in London. In roles ranging from Graphic Designer to Creative Director &mdash; I've designed websites and apps for fashion, retail and media brands.</p>
					
<?php
	include(path.'_includes/footer.php');
?>