<?php
	define('path','../');
	$hideNav=TRUE;
	$navigation = array(
		"next" => array(
			"path"	=> "../photos",
			"title"	=> "Photos"
		),
		"prev" => array(
			"path"	=> "../casestudy/misc",
			"title"	=> "Assorted Work"
		)
	);
	include(path.'_includes/header.php');
?>
		
		<div id="about">		
			<h3 class="spacer">Let&rsquo;s get coffee!</h3>
			
			<p>Whilst I'm not open to any new work at the present, I'm always happy to grab a coffee and chat about opportunities, mentoring and public speaking. Here are some of the ways to get in touch:</p>
			<p><strong>Email:</strong> <a href="mailto:hello@buzzusborne.com">hello@buzzusborne.com</a><br /><strong>Phone:</strong> +61 (0)451 116 531<br /><strong>Video Call:</strong> <a href="https://appear.in/talk2buzz">Appear.In</a></p>
					
<?php
	// include(path.'_includes/recent.php');
	include(path.'_includes/footer.php');
?>