<?php
	define('path','../');
	$hideNav=TRUE;
	$bodyclass = "alt text";
	include(path.'_includes/header.php');
	include(path.'_includes/publications.php');
	echo "	<div class=\"container\">\n";
	printf(str_replace("_root_",path,file_get_contents(path.'_includes/nav.html')),NULL,' white',NULL,NULL,' active',NULL,NULL);
?>

		<div class="textonly">
			<div class="showcase spacer-bottom">
				<div class="work single oversize"><img src="../_assets/gfx/meetup.jpg" /></div>
			</div>

			<p class="lead large">I&rsquo;m Buzz &mdash; Designer and Coach with over <?php echo (date('Y') - 2005); ?> years experience leading products and teams. I&rsquo;ve been Principal Designer at <a href="https://www.helpscout.com/" class="chilled" target="_blank">Help Scout</a>, Design Lead at <a href="https://www.atlassian.com/" class="chilled" target="_blank">Atlassian</a>, Head of Product at <a href="https://www.sendle.com/" class="chilled" target="_blank">Sendle</a>, Director of UX at <a href="https://www.campaignmonitor.com/" class="chilled" target="_blank">Campaign Monitor</a>, UI Lead at <a href="https://www.skype.com/" class="chilled" target="_blank">Skype</a> and Founder of <a href="https://getprevue.com/" class="chilled">Prevue</a>.</p>
			
			<p>I regularly speak and write about remote team collaboration, scaling design team processes and building creative distributed organizations. Through positions on advisory boards, incubators and mentoring programs, I&rsquo;ve had the pleasure of coaching world-class designers and advising startups &mdash; helping Founders and leadership teams identify the structures, processes and skills necessary to scale design effectively within their business.</p>
				
	
			<h2 class="spacer--xlarge">Coaching</h2>
			<p>I currently work with tech companies to help understand the gaps in their design capabilities, and identify the types of people, processes and structures necessary to help deliver their long term goals. Often that involves writing job descriptions to attract top talent, coaching existing teams, interviewing candidates or providing ongoing support. Sometimes I just explain the difference between UX and UI.</p>
			<p>I help awesome companies find awesome people. And in that capacity I&rsquo;ve worked with some of the fastest growing B2B and B2C SaaS companies here in Australia and the US, across a variety of industries &mdash; including not-for-profit, education, fintech and healthcare.</p>

			<h2 id="more" class="target">Publications &amp; Interviews</h2>

		</div>
	
	<div class="textonly inline">
		<div class="colgroup">
<?php
				
			foreach($pubsByCategory as $category => $pubs):
				
				echo '			<div class="column">'; echo "\n";
				echo '				<p><strong>'.$category.'s</strong></p>'; echo "\n";
				echo '				<p class="list">';
				
				foreach($pubs as $pubID => $publication):
					echo '<a href="'.$publication['url'].'" title="'.$publication['cta'].' \''.$publication['title'].'\'" target="_blank">'.$publication['title'].' <small>'.$publication['source'].', '.$publication['date'].'</small></a>';
					
					if($pubID != (count($pubs) - 1)) {
						echo '<br />';
					}
					
				endforeach;
				
				echo '</p>'; echo "\n";
				echo '			</div>'; echo "\n";
				
			endforeach;
				
				
			?>
			
			
		</div>
	</div>
	
	<div class="textonly inline">
		<p class="highlight"><strong>Say hi!</strong><br /><a href="mailto:hello@buzzusborne.com">Email</a> or call +61 (0)451 116 531</p>
	</div>
	
		
<?php
	$JS = "text.js";
  $hideModal = TRUE;
	include(path.'_includes/footer.php');
?>