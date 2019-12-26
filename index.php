<?php 
	define('path','');
	$hideNav=TRUE;
	$homepage=TRUE;
	$navigation['twitter_img']="https://buzzusborne.com/_assets/gfx/twitter-card.png";
	$hideLogo = TRUE; 
  include(path.'_includes/header.php');
?>
	<div class="container overlap">
<?php 
					printf(file_get_contents(path.'_includes/nav.html'),
					'', /* container class */
					'', /* h1 class (i.e. "color") */ 
					path."#work", /* home href */
					path."#work", /* work href */
					'', /* work class */
					path.'coaching/', /* coaching href */
					'', /* coaching class */
					path.'about', /* about href */
					'',  /* about class */
					''
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
	  <div id="work" class="anchor"></div>
		<ul class="caseStudies">
    
			<?php
				
				$i=1;
				foreach($manifest as $key => $page):
					if($i<=$maxCaseStudies){
				
						echo '	<li>
					<a href="casestudy/'.$page['path'].'">
						<div class="image '.strtolower($page['path']).' leadImg"><img src="casestudy/_images/'.$page['path'].'/'.$page['thumb'].'" /></div>
						<h5><span>'.$page['name'].'</span></h5>';
					
						if(array_key_exists('meta',$page)){
							echo '
						<p>'.$page['meta'].'</p>';
						}
					
					echo '
					</a>
				</li>
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
	              <h3>More</h3>
          
				<ul>
				<?php
			
				foreach($manifest as $key => $page):
					if($page['order']>$maxCaseStudies){
						echo '	<li><a href="casestudy/'.$page['path'].'"><span>'.$page['name'].'</span>';
					
						if(array_key_exists('meta',$page)){
							echo '<p>'.$page['meta'].'</p>';
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