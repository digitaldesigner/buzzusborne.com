<?php 
	define('path','./');
	$hideNav=TRUE;
	$homepage=TRUE;
	$navigation['twitter_img']="https://buzzusborne.com/_assets/gfx/twitter-card.png";
	$hideLogo = TRUE; 
  include(path.'_includes/publications.php');
	include(path.'_includes/header.php');
	echo "	<div class=\"container\">\n";
	printf(str_replace("_root_",path,file_get_contents(path.'_includes/nav.html')),
		NULL,				// Additional class to 'siteNav'
		NULL, 			// Logo: Classname (optional) 
		' active', 	// Home: Class (optiona;)
		NULL, 			// Work: Class (optional)
		NULL, 			// Coaching: Class (optional)
		NULL,  			// About: Class (optional)
		NULL				// Additional options (optional)
	);
?> 
	</div>
	
	<div id="splash" class="landing">
	  <section>
	    <div class="introtext">
	      <h2 id="bio">I&rsquo;m Buzz, <a href="javascript://" id="whoami" title="And so much more">a design coach</a> with over <?php echo (date('Y') - 2005); ?> years experience and a passion for building, scaling and coaching highly effective &amp; collaborative teams.</h2>
	    </div>
	  </section>
	  <div id="workIntro" class="fixed"><h2>My work.</h2></div>
	</div>

	<div class="container">
		<ul class="caseStudies">
		<?php
				
				$i=1;
				foreach($manifest as $key => $page):
					if($i<=$maxCaseStudies){
				
						echo '	<li><a href="casestudy/'.$page['path'].'">
				<div class="image '.strtolower($page['path']).' leadImg"><img src="casestudy/_images/thumbs/'.$page['thumb'].'" /></div>
				<h5><span>'.$page['name'].'</span></h5>';
					
						if(array_key_exists('meta',$page)){
							echo '
				<p>'.$page['meta'].'</p>';
						}
					
					echo '
			</a></li>
		';
					
					} else {
						break;
					}
					$i++;
				endforeach;
				
				echo '	<li class="more"><a href="'.path.'work#more" title="See more design work"><div>More&nbsp;</div><div>work</div></a></li>
		';
				?></ul>
	</div>
      
	<div class="breakout" id="fancy">
		<div class="container recent">
			<ol>
				<div class="row">
<?php

				$i=1;
				
				foreach($pubsByCategory as $category => $pubList):
					if($i>3){ break; }
					
					foreach($pubList as $pubID => $pub):
						echo '					<li>
						<a class="more" target="_blank" href="'.$pub['url'].'">
							<small>Recent '.$pub['type'].'</small>
							<p>'.$pub['title'].'</p>
							<div class="meta">'.$pub['source'].', '.$pub['date'].'</div>
						</a>
					</li>';
						echo "\n";
						break;
					endforeach;
					
					if($i % 3 == 0){
						echo '				</div>';
						echo "\n";
						echo '				<div class="row">';
						echo "\n";
					}

					$i++;
				endforeach;
				
?>
					<li class="showmore"><a href="/coaching/#more">More publications</a></li>
				</div>
			</ol>
		</div>
	</div>
	
	<div class="container">
	<?php
	$JS = "home.js";
	include(path.'_includes/footer.php');
	?>