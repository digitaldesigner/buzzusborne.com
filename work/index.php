<?php 
	define('path','../');
	$hideNav=TRUE;
	$homepage=TRUE;
	$navigation['twitter_img']="https://buzzusborne.com/_assets/gfx/twitter-card.png";
	$hideLogo = TRUE; 
	$maxCaseStudies = 8;
  include(path.'_includes/header.php');
	echo "	<div class=\"container\">\n";
	printf(str_replace("_root_",path,file_get_contents(path.'_includes/nav.html')),
		NULL,				// Additional class to 'siteNav'
		NULL, 			// Logo: Classname (optional) 
		NULL, 			// Home: Class (optiona;)
		' active', 	// Work: Class (optional)
		NULL, 			// Coaching: Class (optional)
		NULL,  			// About: Class (optional)
		NULL				// Additional options (optional)
	);
?> 
	</div>
	
	<div class="container spacer-top">
		<ul class="caseStudies">
		<?php
				
				$i=1;
				foreach($manifest as $key => $page):
					if($i<=$maxCaseStudies){
				
						if($i==3){ echo "	<div class=\"overflow\" id=\"more\"></div>\n		"; }
						
						echo '	<li><a href="../casestudy/'.$page['path'].'">
				<div class="image '.strtolower($page['path']).' leadImg"><img src="../casestudy/_images/thumbs/'.$page['thumb'].'" /></div>
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
				
				?></ul>
	</div>
      
<?php if(count($manifest)>$i) {?>
	<div class="breakout" id="fancy">
		<div class="container textlinks">
			<h3>More&hellip;</h3>
			<ul>
			<?php
			
				foreach($manifest as $key => $page):
					if($page['order']>$maxCaseStudies){
						echo '	<li><a href="../casestudy/'.$page['path'].'"><span>'.$page['name'].'</span>';
					
						if(array_key_exists('meta',$page)){
							echo '<p>'.$page['year'].'</p>';
						}

						echo '</a></li>
			';
					}
				endforeach;
			
				?></ul>
		</div>
	</div>

<?php } ?>
	<div class="container">
	<?php
	$JS = "home.js";
	include(path.'_includes/footer.php');
	?>