<?php 
	define('path','');
	$hideNav=TRUE;
	$homepage=TRUE;
	$navigation['twitter_img']="https://buzzusborne.com/casestudy/_images/beacon/beacon-cover.png";
	$hideLogo = TRUE; 
  include(path.'_includes/header.php');
?>

	<div class="container overlap">
		<div id="header">
			<h1><a href="./">Buzz Usborne</a></h1>
      <ol class="shortNav">
        <li><a href="#work">Work</a></li>
        <li><a href="https://medium.com/@buzzusborne">Writing</a></li>
        <li><a href="./about/">About</a></li>
      </ol>
		</div>
	</div>

  <div id="splash" class="landing">
    <section>
      <div class="introtext">
        <h1 id="bio">I&rsquo;m Buzz, <a href="javascript://" id="whoami">a designer</a> with over <?php echo (date('Y') - 2005); ?> years experience and a passion for building, scaling and coaching highly effective &amp; collaborative product teams. 🙌</h1>
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
                <h3>More work</h3>
            
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